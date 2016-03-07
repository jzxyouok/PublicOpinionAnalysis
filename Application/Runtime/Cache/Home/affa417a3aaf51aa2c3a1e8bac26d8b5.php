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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<script src="/thinkphp/Public/js/jquery.js"></script>
	<style type="text/css">
		${demo.css}
	</style>
	<script type="text/javascript">
		$(function () {
		    $('#week').highcharts({
			title: {
			    text: '全部微博数量按周分析',
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
			    name: '所有用户',
			    data: <?php echo ($weeks); ?>
			}]
		    });
		    $('#day').highcharts({
			title: {
			    text: '全部微博数量按日分析',
			    x: -20 //center
			},
			xAxis: {
			    categories: ['0', '1', "2", "3", "4", "5", "6",'7',"8", "9", "10", "11", "12", "13",'14',"15", "16", "17", "18", "19", "20",'21',"22", "23"]
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
			    name: '所有用户',
			    data: <?php echo ($hours); ?>
			}]
		    });
                          $('#hotWords').highcharts({
                                chart: {
                                    type: 'column'
                                },
                                title: {
                                    text: 'hot words'
                                },
                                xAxis: {
                                    categories: <?php echo ($words); ?>
                                },
                                yAxis: {
                                    title: {
                                        text: 'numbers'
                                    }
                                },
                                  series: [{
                                            name: 'words',
                                            data: [<?php if(is_array($numbers)): foreach($numbers as $key=>$vo): echo ($vo["number"]); ?>,<?php endforeach; endif; ?>]
                                        }]
                            });
		});
	</script>


</head>



    <div class="every">
        <div class="all">
            <div class="id">
                <div class="iditem">
                    <a href="#">
                        <div class="headimg">
                            <a href="#"><img src="/thinkphp/Public/img/sina.jpg" width="72" height="72"></a>
                        </div>
                        <div class="info">
                            <div class="i">
                                <div class="uname"><a href="/thinkphp/index.php/Home/NewWeibo/personal?id=<?php echo ($user["userid"]); ?>"><?php echo ($user["username"]); ?></a>></div>
                                <div class="vip"><?php echo ($user["individualSignature"]); ?></div>
                            </div>
                            <div class="location"><?php echo ($user["location"]); ?></div>
                            <div class="fanscount"><?php echo ($user["sex"]); ?></div>
                            <div class="anotherName"><?php echo ($user["otherInfo"]); ?></div>
                            <div class="regtime"><?php echo ($user["time"]); ?></div>
                            <div class="number1"><?php echo ($user["number1"]); ?></div>
                        </div>
                    </a>
                </div>
                <hr/>
            </div>
            <div class="content">
                    <div>
                        <header class="header">
                            <a href="#" ><img src="/thinkphp/Public/img/sina.jpg" height="32" width="32"></a>
                            <div class="idcontent">
                                <a href="/thinkphp/index.php/Home/NewWeibo/personal?id=<?php echo ($weibo["userid"]); ?>" class="idname"><?php echo ($weibo["user"]["username"]); ?></a>
                                <div class="idinfo">
                                    <p><?php echo ($weibo["time"]); ?></p>
                                    <p><a href="<?php echo ($weibo["datasource"]); ?>">信息源: <?php echo ($weibo["datasource"]); ?></a></p>
                                </div>
                            </div>
                        </header>
                       <a href="/thinkphp/index.php/Home/NewWeibo/detail?id=<?php echo ($weibo["id"]); ?>">
                       <section class="contentsection">
                           <p class="text"><?php echo ($weibo["content"]); ?></p>
                           <div class="pic">
                               <ul>
                                   <li><?php echo ($weibo["picturesource"]); ?></li>
                               </ul>
                           </div>
                       </section></a>
                        <hr/>
                        <footer class="footer">
                            <p class="p1">转发:<?php echo ($weibo["number1"]); ?></p>
                            <p class="p2">点赞:<?php echo ($weibo["number2"]); ?></p>
                            <p class="p3">评论:<?php echo ($weibo["number3"]); ?></p>
                        </footer>
                    </div>
                    <hr/>
            </div>
        </div>
        <link rel="stylesheet" href="/thinkphp/Public/css/weiboindex.css">
        <div class="exp">
        	<script src="/thinkphp/Public/js/highcharts.js"></script>
	<script src="/thinkphp/Public/js/exporting.js"></script>
            <div id="hotWords" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
            <hr/>
	<div id="week" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
            <hr/>
	<div id="day" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
            <hr/>
        </div>

	<hr/>



</body>
</html>