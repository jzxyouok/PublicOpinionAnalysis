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
		<title>Highcharts Example</title>

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
            name: 'user',
            data: <?php echo ($weeks); ?>
        }]
    });
    $('#day').highcharts({
        title: {
            text:<?php echo ($username); ?>+'的每月微博分析',
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
        <div class="head">
            <div>
                <a href="##">
                    <img class="head-img" src="/thinkphp/Public/img/sina.jpg" width="100" height="100">
                </a>
                <a href="##">
                    <p><?php echo ($user["username"]); ?></p>
                </a>
                <p><?php echo ($user["individualsignature"]); ?></p>
            </div>
        </div>
       <script src="/thinkphp/Public/js/highcharts.js"></script>
<script src="/thinkphp/Public/js/exporting.js"></script>
<div id="week" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<hr/>
<div id="day" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	
          <meta charset="utf-8" /> 
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
                        <?php echo ($weibo["content"]); ?>
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

<br>

<hr/>



</body>
</html>