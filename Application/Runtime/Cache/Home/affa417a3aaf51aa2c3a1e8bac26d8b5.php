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

 
    <div class="every">
        <div class="all">
            <div class="id">
                <div class="iditem">
                    <a href="#">
                        <div class="headimg">
                            <a href="#"><img src="/PublicOpinionAnalysis/Public/img/sina.jpg" width="72" height="72"></a>
                        </div>
                        <div class="info">
                            <div class="i">
                                <div class="uname"><a href="/PublicOpinionAnalysis/index.php/Home/NewWeibo/personal?id=<?php echo ($user["userid"]); ?>"><?php echo ($user["username"]); ?></a>></div>
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
                            <a href="#" ><img src="/PublicOpinionAnalysis/Public/img/sina.jpg" height="32" width="32"></a>
                            <div class="idcontent">
                                <a href="/PublicOpinionAnalysis/index.php/Home/NewWeibo/personal?id=<?php echo ($weibo["userid"]); ?>" class="idname"><?php echo ($weibo["user"]["username"]); ?></a>
                                <div class="idinfo">
                                    <p><?php echo ($weibo["time"]); ?></p>
                                    <p><a href="<?php echo ($weibo["datasource"]); ?>">信息源: <?php echo ($weibo["datasource"]); ?></a></p>
                                </div>
                            </div>
                        </header>
                       <a href="/PublicOpinionAnalysis/index.php/Home/NewWeibo/detail?id=<?php echo ($weibo["id"]); ?>">
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
        <link rel="stylesheet" href="/PublicOpinionAnalysis/Public/css/weiboindex.css">
        <div class="exp">
            <img class="mainicon" src="/PublicOpinionAnalysis/Public/img/sina.jpg" height="200" width="200">
            <div class="it">
                <section class="col1">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                    </ul>
                </section>
                <section class="col2">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                    </ul>
                </section>
                <section class="col3">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                    </ul>
                </section>
            </div>
        </div>


</body>
</html>