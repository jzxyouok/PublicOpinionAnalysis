<?php

namespace Home\Controller;
use Think\Controller;

class PHPTelnet {
	var $show_connect_error=1;

	var $use_usleep=0;	// change to 1 for faster execution
		// don't change to 1 on Windows servers unless you have PHP 5
	var $sleeptime=125000;
	var $loginsleeptime=1000000;

	var $fp=NULL;
	var $loginprompt;

	var $conn1;
	var $conn2;

	/*
	0 = success
	1 = couldn't open network connection
	2 = unknown host
	3 = login failed
	4 = PHP version too low
	*/
	function Connect($server,$user,$pass) {
		$rv=0;
		$vers=explode('.',PHP_VERSION);
		$needvers=array(4,3,0);
		$j=count($vers);
		$k=count($needvers);
		if ($k<$j) $j=$k;
		for ($i=0;$i<$j;$i++) {
			if (($vers[$i]+0)>$needvers[$i]) break;
			if (($vers[$i]+0)<$needvers[$i]) {
				$this->ConnectError(4);
				return 4;
			}
		}

		$this->Disconnect();

		if (strlen($server)) {
			if (preg_match('/[^0-9.]/',$server)) {
				$ip=gethostbyname($server);
				if ($ip==$server) {
					$ip='';
					$rv=2;
				}
			} else $ip=$server;
		} else $ip='127.0.0.1';

		if (strlen($ip)) {
			if ($this->fp=fsockopen($ip,2001)) {
				fputs($this->fp,$this->conn1);
				$this->Sleep();

				fputs($this->fp,$this->conn2);
				$this->Sleep();
				$this->GetResponse($r);
				$r=explode("\n",$r);
				$this->loginprompt=$r[count($r)-1];

				fputs($this->fp,"$user\r");
				$this->Sleep();

				fputs($this->fp,"$pass\r");
				if ($this->use_usleep) usleep($this->loginsleeptime);
				else sleep(1);
				$this->GetResponse($r);
				$r=explode("\n",$r);
				if (($r[count($r)-1]=='')||($this->loginprompt==$r[count($r)-1])) {
					$rv=3;
					$this->Disconnect();
				}
			} else $rv=1;
		}

		if ($rv) $this->ConnectError($rv);
		return $rv;
	}

	function Disconnect($exit=1) {
		if ($this->fp) {
			if ($exit) $this->DoCommand('exit',$junk);
			fclose($this->fp);
			$this->fp=NULL;
		}
	}

	function DoCommand($c,&$r) {
		if ($this->fp) {
			fputs($this->fp,"$c\r");
			$this->Sleep();
			$this->GetResponse($r);
			echo $r;
			echo "<\br>";
			$r=preg_replace("/^.*?\n(.*)\n[^\n]*$/","$1",$r);
		}
		return $this->fp?1:0;
	}

	function GetResponse(&$r) {
		$r='';
		do {
			$r.=fread($this->fp,1000);
			$s=socket_get_status($this->fp);
		} while ($s['unread_bytes']);
	}

	function Sleep() {
		if ($this->use_usleep) usleep($this->sleeptime);
		else sleep(1);
	}

	function PHPTelnet() {
		$this->conn1=chr(0xFF).chr(0xFB).chr(0x1F).chr(0xFF).chr(0xFB).
			chr(0x20).chr(0xFF).chr(0xFB).chr(0x18).chr(0xFF).chr(0xFB).
			chr(0x27).chr(0xFF).chr(0xFD).chr(0x01).chr(0xFF).chr(0xFB).
			chr(0x03).chr(0xFF).chr(0xFD).chr(0x03).chr(0xFF).chr(0xFC).
			chr(0x23).chr(0xFF).chr(0xFC).chr(0x24).chr(0xFF).chr(0xFA).
			chr(0x1F).chr(0x00).chr(0x50).chr(0x00).chr(0x18).chr(0xFF).
			chr(0xF0).chr(0xFF).chr(0xFA).chr(0x20).chr(0x00).chr(0x33).
			chr(0x38).chr(0x34).chr(0x30).chr(0x30).chr(0x2C).chr(0x33).
			chr(0x38).chr(0x34).chr(0x30).chr(0x30).chr(0xFF).chr(0xF0).
			chr(0xFF).chr(0xFA).chr(0x27).chr(0x00).chr(0xFF).chr(0xF0).
			chr(0xFF).chr(0xFA).chr(0x18).chr(0x00).chr(0x58).chr(0x54).
			chr(0x45).chr(0x52).chr(0x4D).chr(0xFF).chr(0xF0);
		$this->conn2=chr(0xFF).chr(0xFC).chr(0x01).chr(0xFF).chr(0xFC).
			chr(0x22).chr(0xFF).chr(0xFE).chr(0x05).chr(0xFF).chr(0xFC).chr(0x21);
	}

	function ConnectError($num) {
		if ($this->show_connect_error) switch ($num) {
		case 1: echo '<br />[PHP Telnet] <a href="http://www.geckotribe.com/php-telnet/errors/fsockopen.php">Connect failed: Unable to open network connection</a><br />'; break;
		case 2: echo '<br />[PHP Telnet] <a href="http://www.geckotribe.com/php-telnet/errors/unknown-host.php">Connect failed: Unknown host</a><br />'; break;
		case 3: echo '<br />[PHP Telnet] <a href="http://www.geckotribe.com/php-telnet/errors/login.php">Connect failed: Login failed</a><br />'; break;
		case 4: echo '<br />[PHP Telnet] <a href="http://www.geckotribe.com/php-telnet/errors/php-version.php">Connect failed: Your server\'s PHP version is too low for PHP Telnet</a><br />'; break;
		}
	}
}

class TelnetController extends Controller
{
	public function indexAction()
	{
		echo 'aa';
	}

	public function netAction()
	{
// 		$data["name"]=$this->getRequest()->getParam("name");
// 		$data["password"]=$this->getRequest()->getParam("password");
// 		$data["group"] = $this->getRequest()->getParam("group");
// 		$data["device"] = $this->getRequest()->getParam("device");

		$telnet = new PHPTelnet();

		$result = $telnet->Connect('192.168.1.5:2004','','');
		if ($result == 0) {
			$error = 0;
		} else {
			$error = 1;
		}
		$this->_helper->getHelper("Json")->sendJson($error);
	}

	public function rcmsAction()
	{
		$data=$this->getRequest()->getParam("command");

		$telnet = new PHPTelnet();
		$result = $telnet->Connect('192.168.1.5:2004','','');
		if ($result == 0){
			$telnet->DoCommand($data, $result);
		} else {
			$this->_helper->getHelper("Json")->sendJson('error');
		}

		$this->_helper->getHelper("Json")->sendJson($result);
	}

	/*
	 * test telnet
	 */

	public function testAction()
	{
		$telnet = new PHPTelnet();

		// if the first argument to Connect is blank,
		// PHPTelnet will connect to the local host via 127.0.0.1
		$result = $telnet->Connect('192.168.1.5','','');
		var_dump($result);
		echo "have connected </br>";
		if ($result == 0) {
		$telnet->DoCommand('hit\n', $result);
			// NOTE: $result may contain newlines
		echo ($result);

		$telnet->DoCommand('Switch5-1\n', $result);
			// NOTE: $result may contain newlines
		echo ($result);

		echo("<p style='color:red'>second input</p>");
		$telnet->DoCommand('enable\n', $result);
		echo $result;

		echo("<p style='color:red'>third input</p>");
		$telnet->DoCommand('hit\n', $result);
		echo $result;

		echo("<p style='color:red'>fourth input</p>");
		$telnet->DoCommand('show vlan\n', $result);
		echo $result;

		echo("<p style='color:red'>fourth input</p>");
		$telnet->DoCommand('enable\n', $result);
		echo $result;

		echo("<p style='color:red'>fourth input</p>");
		$telnet->DoCommand('hit\n', $result);
		echo $result;

		echo("<p style='color:red'>fourth input</p>");
		$telnet->DoCommand('show vlan\n', $result);
		echo $result;
			// say Disconnect(0); to break the connection without explicitly logging out
		$telnet->Disconnect();
		}

	}

	public function index()
	{
		echo "test";
		$this->testAction();
	}

}

?>