<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/PublicOpinionAnalysis/Public/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/PublicOpinionAnalysis/Public/css/flat-ui.css" rel="stylesheet">
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
            <a class="navbar-brand" href="/PublicOpinionAnalysis/index.php/Home/index">Public Opinion Analysis</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-01">
          <ul class="nav navbar-nav navbar-left">
              <li class="fake"><a href="#fakelink"></a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">微博 <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="/PublicOpinionAnalysis/index.php/Home/NewWeibo/index">Main</a></li>
                    <li><a href="/PublicOpinionAnalysis/index.php/Home/NewWeibo/search">Search</a></li>
                    <li class="divider"></li>
                    <li><a href="/PublicOpinionAnalysis/index.php/Home/NewWeibo/personal">Personal</a></li>
                    <li><a href="/PublicOpinionAnalysis/index.php/Home/NewWeibo/detail">Details</a></li>
                </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">空间 <b class="caret"></b></a>
              <span class="dropdown-arrow"></span>
              <ul class="dropdown-menu">
                <li><a href="#">Main</a></li>
                <li><a href="/PublicOpinionAnalysis/index.php/Home/qq">Search</a></li>
                <li class="divider"></li>
                <li><a href="/PublicOpinionAnalysis/index.php/Home/qq/personal">Personal</a></li>
                <li><a href="/PublicOpinionAnalysis/index.php/Home/qq/detail">Details</a></li>
            </ul>
        </li>
        <li class="dropdown">
          <a href="##" class="dropdown-toggle" data-toggle="dropdown">贴吧 <b class="caret"></b></a>
          <span class="dropdown-arrow"></span>
          <ul class="dropdown-menu">
            <li><a href="/PublicOpinionAnalysis/index.php/Home/tieba/index">Main</a></li>
            <li><a href="/PublicOpinionAnalysis/index.php/Home/tieba/search">Search</a></li>
            <li class="divider"></li>
            <li><a href="/PublicOpinionAnalysis/index.php/Home/tieba/personal">Personal</a></li>
            <li><a href="/PublicOpinionAnalysis/index.php/Home/tieba/detail">Details</a></li>
        </ul>
    </li>
</ul>
<form class="form navbar-form navbar-right" action="/PublicOpinionAnalysis/index.php/Home/NewWeibo/search" role="search" method="get">
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

<script src="/PublicOpinionAnalysis/Public/js/vendor/jquery.min.js"></script>
<script src="/PublicOpinionAnalysis/Public/js/vendor/video.js"></script>
<script src="/PublicOpinionAnalysis/Public/js/flat-ui.min.js"></script>

 
    
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
            <div class="weibo-index">
                <div class="info">
                    <div class="col-md-1">
                        <a href="##">
                            <img class="head-img"  src="/PublicOpinionAnalysis/Public/img/sina.jpg" height="32" width="32" />
                        </a>
                    </div>
                    <div class="col-md-11">
                        <div class="user-name user-about">
                            <a href="/PublicOpinionAnalysis/index.php/Home/NewWeibo/personal?id=<?php echo ($weibo["userid"]); ?>"><?php echo ($weibo["user"]["username"]); ?></a>
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
            </div>
        </div>
    </div>
        <hr/>
    <script src="js/vendor/jquery.min.js"></script> 
    <script src="js/vendor/video.js"></script>
    <script src="js/flat-ui.min.js"></script> 
</body>


</body>
</html>