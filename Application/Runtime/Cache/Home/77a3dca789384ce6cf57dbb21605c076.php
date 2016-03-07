<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/thinkphp/Public/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/thinkphp/Public/css/flat-ui.css" rel="stylesheet">
    <style type="text/css">
       .navbar ,.navbar-inverse ,.navbar-embossed{
           font-size: 13px;
           min-height: 53px;
           width: 120%;
           margin-left: -9.9%;
           margin-bottom: 30px;
           border: none;
           border-radius: 0px;
           background-color: #C0392B;
       }

       .navbar-inverse .navbar-nav > .dropdown > a .caret {
        border-top-color: white;
        border-bottom-color: white;
    }

    .fake{
      width: 5px;
  }

  .form ,.navbar-form ,.navbar-right{
      width: 400px;
  }

  #navbarInput-01{
   border-bottom-left-radius: 6px;
   border-top-left-radius:6px;
   width: 200px;
}

.navbar-form .input-group .form-control:first-child, .navbar-form .input-group-addon:first-child, .navbar-form .input-group-btn:first-child > .btn, .navbar-form .input-group-btn:first-child > .dropdown-toggle, .navbar-form .input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle), .navbar-form .input-group .select2-search input[type="text"]:first-child {
  border-radius: 0;
}
</style>
</head>
<body>
    <div class="container">
      <div class="inav">
        <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="/thinkphp/index.php/Home/index">Public Opinion Analysis</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-01">
          <ul class="nav navbar-nav navbar-left">
              <li class="fake"><a href="#fakelink"></a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">微博 <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="/thinkphp/index.php/Home/NewWeibo/index">Main</a></li>
                    <li><a href="/thinkphp/index.php/Home/NewWeibo/search">Search</a></li>
                    <li class="divider"></li>
                    <li><a href="/thinkphp/index.php/Home/NewWeibo/personal">Personal</a></li>
                    <li><a href="/thinkphp/index.php/Home/NewWeibo/detail">Details</a></li>
                </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">空间 <b class="caret"></b></a>
              <span class="dropdown-arrow"></span>
              <ul class="dropdown-menu">
                <li><a href="#">Main</a></li>
                <li><a href="/thinkphp/index.php/Home/qq">Search</a></li>
                <li class="divider"></li>
                <li><a href="/thinkphp/index.php/Home/qq/personal">Personal</a></li>
                <li><a href="/thinkphp/index.php/Home/qq/detail">Details</a></li>
            </ul>
        </li>
        <li class="dropdown">
          <a href="##" class="dropdown-toggle" data-toggle="dropdown">贴吧 <b class="caret"></b></a>
          <span class="dropdown-arrow"></span>
          <ul class="dropdown-menu">
            <li><a href="/thinkphp/index.php/Home/tieba/index">Main</a></li>
            <li><a href="/thinkphp/index.php/Home/tieba/search">Search</a></li>
            <li class="divider"></li>
            <li><a href="/thinkphp/index.php/Home/tieba/personal">Personal</a></li>
            <li><a href="/thinkphp/index.php/Home/tieba/detail">Details</a></li>
        </ul>
    </li>
</ul>
<form class="form navbar-form navbar-right" action="/thinkphp/index.php/Home/NewWeibo/search" role="search" method="get">
    <div class="form-group">
      <div class="input-group">
        <input class="form-control" id="navbarInput-01"  placeholder="Search" type="text" placeholder="请输入关键词" name = "str"/>
        <span class="input-group-btn" id="input-group">
          <select class="form-control select-form" name = "type">
            <option class="id" value="id">ID</option>
            <option class="content" value="cont">Content</option>
            <option class="both" value="both">Both</option>
        </select>
      </select>
      <button type="submit" class="btn"><span class="fui-search"></span></button>
  </span>
</div>
</div>
</form>
</div>
</nav>
</div>   
</div>

<script src="/thinkphp/Public/js/vendor/jquery.min.js"></script>
<script src="/thinkphp/Public/js/vendor/video.js"></script>
<script src="/thinkphp/Public/js/flat-ui.min.js"></script>

 

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/flat-ui.css" rel="stylesheet" />
    <style type="text/css">
        body{
            background-color: #ECF0F1;
        }

        .container-personal{
            margin: auto 240px;
            text-align: center;
        }

        .head{
            border:1px solid #000000;
        }

        .personal-left .btn-group1{
            margin: 10px -20px;
            padding: 0 auto;
        }

        .personal-left .btn-group1 .btn{
            width: 98.44px;
        }

        .personal-left .btn-group2{
            margin: 0px -20px;
            padding: 0 auto;
        }

        .personal-left .btn-group2 .btn{
            width: 295.32px;
            height: auto;
            text-align: left;
        }

        .weibo-index{
            border: 2px solid #27AE60;
            margin-top: 10px;
            width: 559.328px;
            padding-bottom: 0px;
            background-color: white;
        }

        .weibo-index .btn-group3{
            margin-left: 0px;
        }

        .weibo-index .btn-group3 .btn{
            width: 185.104px;
            border-radius: 0px;
        }

        .weibo-index p{
            padding: 15px;
            font-size: 16px;
            text-align: left;
        }

        .weibo-index .pictures{
            text-align: center;
            margin: -30px auto;
        }

        .row {
            margin: 0px 15px;
        }

        .weibo-index .pic{
            margin: 10px 0px;
            padding: 0px;
        }
    </style>


</head>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<script src="/thinkphp/Public/js/jquery.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#week').highcharts({
        title: {
            text:<?php echo ($username); ?>+'的每周微博分析',
            x: -20 //center
        },
        xAxis: {
            categories: ['Mon' , "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"]
        },
        yAxis: {
            title: {
                text: '数量 (个)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '个'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: <?php echo ($username); ?>,
            data: <?php echo ($weeks); ?>
        }]
    });
    $('#day').highcharts({
        title: {
            text:<?php echo ($username); ?>+'的每日微博分析',
            x: -20 //center
        },
        xAxis: {
            categories: ['0',"1", "2", "3", "4", "5", "6",'7',"8", "9", "10", "11", "12", "13",'14',"15", "16", "17", "18", "19", "20",'21',"22", "23"]
        },
        yAxis: {
            title: {
                text: '数量 (个)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '个'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: <?php echo ($username); ?>,
            data: <?php echo ($hours); ?>
        }]
    });


});
		</script>


	</head>



<div class="container-personal">
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="/thinkphp/Public/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/thinkphp/Public/css/flat-ui.css" rel="stylesheet" />
	<style type="text/css">
		body{
			background-color: #BDC3C7;
		}
		.list_person{
			background-color: #FFFFF4;
			margin: 10px 200px;
			border: 2px solid #7F8C8D;
 			padding: 16px 14px 17px 18px;
		}
		.list_person *{
			font-family: "Microsoft YaHei";
			font-size: 13px;
			padding-right: 3px;
		}
		.list_person {
		    color: #666;
		}
		.clearfix {
		    display: inline-block;
		}
		body, .W_texta, a.W_texta, .S_txt1 {
		    color: #333;
		}
		body {
		    font: 12px/1.3 'Arial','Microsoft YaHei';
		    _font-family: simsun;
		    overflow-x: hidden;
		    color: #333;
		}
		.list_person, button, input, select, textarea {
		    font: 12px/1.125 Arial,Helvetica,sans-serif;
		    _font-family: "SimSun";
		}

		.person_detail .person_name .person_username{
			color: #2C3E50;
			font-size: 18px;
		}

		.person_pic img{
			border-radius: 60px;
		}

		p {
		    font-size: 18px;
		    line-height: 1.3;
		    margin: 0 0 8px;
		}
	</style>
</head>
<body>
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><div class="list_person clearfix">
		<div class="person_pic col-md-2"><a target="#" href="#" title="head-img" ><img class="head-img" src="http://tp1.sinaimg.cn/3787942764/180/5743216744/1" height="120" width="120"></a></div>
		<div class="person_detail col-md-10" style="min-width: 900px；">
			<p class="person_name">
				<a class="person_username" target="#" href="/thinkphp/index.php/Home/NewWeibo/personal?id=<?php echo ($user["userid"]); ?>" title="username" >
					<?php echo ($user["username"]); ?>
				</a>
				<a target="#" href="##" title="微博认证" alt="微博认证" class="approve_co"></a>
			</p>
			<p class="person_addr">
				<span class="gender" title="gender"><?php echo ($vo["sex"]); ?></span>
				<br/>
				<span>addr</span>
				<a class="weibo-link" target="#" href="##">http://weibo.com/1234</a>

			</p>
			<p class="person_card">
				<?php echo ($vo["individualsignature"]); ?>
			</p>
			<p class="person_num">
				<span>关注<a class="Weibo_link" href="http://weibo.com/follow" target="#"><?php echo ($vo["number1"]); ?></a></span>
				<span>粉丝<a class="Weibo_link" href="http://weibo.com/fans" target="#"><?php echo ($vo["number2"]); ?></a></span>
				<span>微博<a class="Weibo_link" href="http://weibo.com/profile" target="#"><?php echo ($vo["number3"]); ?></a></span></p>
				<div class="person_info">
					<p>地址：
						<?php echo ($vo["location"]); ?>
					</p>
				</div>
				<p class="person_label">职业信息：
					<a class="Weibo-link" href="#">
						<?php echo ($vo["otherinfo"]); ?>
					</a>
				</p>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		<script src="/thinkphp/Public/js/vendor/jquery.min.js"></script>
		<script src="/thinkphp/Public/js/vendor/video.js"></script>
		<script src="/thinkphp/Public/js/flat-ui.min.js"></script>
	</body>
	</html>

        <!-- <div class="head">
            <div>
                <a href="##">
                    <img class="head-img" src="/thinkphp/Public/img/sina.jpg" width="100" height="100">
                </a>
                <a href="##">
                    <p><?php echo ($data["username"]); ?></p>
                </a>
                <p><?php echo ($data["individualsignature"]); ?></p>
            </div>
        </div> -->
<script src="/thinkphp/Public/js/highcharts.js"></script>
<script src="/thinkphp/Public/js/exporting.js"></script>
<div id="week" style="min-width: 310px; max-width: 909.0px; height: 400px; margin: 0 auto"></div>
<hr/>
<div id="day" style="min-width: 310px; max-width: 909.0px; height: 400px; margin: 0 auto"></div>
        <div align="center">  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/flat-ui.css" rel="stylesheet" />
    <style type="text/css">
        .weibo-content .head-img{
            width: 60px;
            height: 60px;
            border-radius: 30px;
            margin-top: 14px;
        }

        .ul-user-info li{
            display: inline;
        }

        .personal-left .btn-group2{
            margin: 0px -20px;
            padding: 0 auto;
        }

        .personal-left .btn-group2 .btn{
            width: 295.32px;
            height: auto;
            text-align: left;
        }

        .weibo-index{
            border: 2px solid #27AE60;
            margin-top: 10px;
            width: 909px;
            padding-bottom: 0px;
            background-color: white;
        }

        .weibo-index .btn-group3{
            margin-left: 0px;
        }

        .weibo-index .btn-group3 .btn{
            width: 301.6px;
            border-radius: 0px;
        }

        .weibo-index p{
            padding: 15px;
            font-size: 16px;
            text-align: left;
        }

        .weibo-index .pictures{
            text-align: center;
            margin: -30px auto;
        }

        .row {
            margin: 0px 15px;
        }

        .weibo-index .pic{
            margin: 10px 0px;
            padding: 0px;
        }

        .user-name{
            padding-top: 15px;
        }

        .user-info{
            padding-bottom: 0px;
        }
    </style>

<body>
     <div class="weibos">
        <div class="weibo-content">
        <?php if(is_array($weibos)): $i = 0; $__LIST__ = $weibos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$weibo): $mod = ($i % 2 );++$i;?><div class="weibo-index">
                <div class="info">
                    <div class="col-md-1">
                        <a href="##">
                            <img class="head-img"  src="/thinkphp/Public/img/sina.jpg" height="32" width="32" />
                        </a>
                    </div>
                    <div class="col-md-11">
                        <div class="user-name user-about">
                            <a href="/thinkphp/index.php/Home/NewWeibo/personal?id=<?php echo ($weibo["userid"]); ?>"><?php echo ($weibo["user"]["username"]); ?></a>
                        </div>
                        <div class="user-info user-about">
                            <ul class="ul-user-info">
                                <li><a href="#"><?php echo ($weibo["time"]); ?></a></li>
                                <li>From:</li>
                                <li><a href="#"><?php echo ($weibo["datasource"]); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <p>
                        <a href="/thinkphp/index.php/Home/NewWeibo/detail?id=<?php echo ($weibo["weiboid"]); ?>">
                        <?php echo ($weibo["content"]); ?>
                        </a>
                    </p>
                </div>
                <div class="pictures">
                    <div class="row">
                        <div class="pic col-xs-5 col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="<?php echo ($weibo["picturesource"]); ?>" alt="NULL" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="btn-group btn-group3">
                    <a class="btn btn-primary" href="#"><strong class="W_f12"><?php echo ($weibo["number1"]); ?></strong><span class="S_txt2">转发</span></a>
                    <a class="btn btn-primary" href="#"><strong class="W_f12"><?php echo ($weibo["number2"]); ?></strong><span class="S_txt2">评论</span></a>
                    <a class="btn btn-primary" href="#"><strong class="W_f12"><?php echo ($weibo["number3"]); ?></strong><span class="fui-heart"></span></a>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
        <hr/>
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/video.js"></script>
    <script src="js/flat-ui.min.js"></script>
</body>
</div>
    </div>

<br>

<hr/>



</body>
</html>