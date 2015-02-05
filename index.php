<?php

echo " <!DOCTYPE html>
<html lang='jp'>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>KeyFC Tweet Timeline</title>

    <!-- Bootstrap -->
    <link href='css/bootstrap.min.css' rel='stylesheet'>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.jss'></script>
      <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src='js/jquery.min.js'></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src='js/bootstrap.min.js'></script>
	
	<style type='text/css'>
	            .glyphicon-refresh-animate {
	    -animation: spin .7s infinite linear;
	    -webkit-animation: spin2 .7s infinite linear;
	}

	@-webkit-keyframes spin2 {
	    from { -webkit-transform: rotate(0deg);}
	    to { -webkit-transform: rotate(360deg);}
	}

	@keyframes spin {
	    from { transform: scale(1) rotate(0deg);}
	    to { transform: scale(1) rotate(360deg);}
	}
	</style>
    <style type='text/css'>
      .nav-tabs > li, .nav-pills > li {
      float:none;
      display:inline-block;
  }

  .nav-tabs {
      text-align:center;
  }

    </style>
	<script src='js/keyfc_twit.js'></script>
	</head>
	<body>
";


echo '
	<div align="center" >
	<a href="http://fanyi.youdao.com/WebpageTranslate?keyfrom=webfanyi.top&url=http%3A%2F%2Fkeyfc.net%2Fbbs%2Fkeytwit%2Findex.php&type=JA2ZH_CN">有道翻译</a>
	<a href="javascript:bing_translate();">bing翻译</a>
	<a href="https://translate.google.com/translate?hl=en&sl=ja&tl=zh-CN&u=http%3A%2F%2Fkeyfc.net%2Fbbs%2Fkeytwit%2Findex.php&sandbox=1">Google翻译</a>
	</div>';
	


$ava_dir = 'cache/ava/';
$avas = array_diff(scandir($ava_dir), array('..', '.'));
foreach ($avas as $ava){
	$ava_imgs=$ava_imgs."<img src=".$ava_dir."/".$ava."> ";
};
		
echo '<div class="container" role="tabpanel">
    <ul class="nav nav-tabs text-center" role="tablist" id="myTabs">
		<li role="presentation" class="active"><a data-target="#About" data-toggle="tab" role="tab">About</a></li>
        <li role="presentation"><a href="ajax_list.php?type=Key" data-target="#Key_official" data-toggle="tabajax">Key 官方</a></li>
        <li role="presentation"><a href="ajax_list.php?type=Staff" data-target="#Staff" data-toggle="tabajax">Key Staff</a></li>
        <li role="presentation"><a href="ajax_list.php?type=ABCH" data-target="#ABCH" data-toggle="tabajax">AngelBeats & Charlotte</a></li>
		<li role="presentation"><a href="ajax_list.php?type=KSL" data-target="#KSL" data-toggle="tabajax">Key Sounds Label</a></li>
        <li role="presentation"><a href="ajax_list.php?type=Anime" data-target="#Anime" data-toggle="tabajax">Key 相关动画</a></li>
        <li role="presentation"><a href="ajax_list.php?type=CV" data-target="#CV" data-toggle="tabajax">Key 相关声优</a></li>
        <li role="presentation"><a href="ajax_list.php?type=Singer" data-target="#Singer" data-toggle="tabajax">Key 相关歌手</a></li>
        <li role="presentation"><a href="ajax_list.php?type=Other" data-target="#Other" data-toggle="tabajax">其他</a></li>

    </ul>

    <div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="About">
		<div class="jumbotron" align="center">
		  <h1>Key社 最新消息</h1>		  
		  <p>这里缓存了Key相关的不少推特帐号的最新推文，Key Fan不可以错过哦~</p>
		  
		  <h2><small>每5分钟刷新</small></h2>
		  
		'
		.$ava_imgs.
		'</div>

		</div>
        <div role="tabpanel" class="tab-pane" id="Key_official">
		<div class="jumbotron" align="center">
		<button class="btn btn-lg btn-warning"><span align="center" class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> 载入中... </button>
		</div>
		</div>
		
        <div role="tabpanel" class="tab-pane" id="Staff">
		<div class="jumbotron" align="center">
		<button class="btn btn-lg btn-warning"><span align="center" class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> 载入中... </button>
		</div>
		</div>
		
        <div role="tabpanel" class="tab-pane" id="ABCH">		
		<div class="jumbotron" align="center">
		<button class="btn btn-lg btn-warning"><span align="center" class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> 载入中... </button>
		</div>
		</div>
		
		<div role="tabpanel" class="tab-pane" id="KSL">
		<div class="jumbotron" align="center">
		<button class="btn btn-lg btn-warning"><span align="center" class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> 载入中... </button>
		</div>
		</div>
        
		<div role="tabpanel" class="tab-pane" id="Anime">
		<div class="jumbotron" align="center">
		<button class="btn btn-lg btn-warning"><span align="center" class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> 载入中... </button>
		</div>
		</div>
        
		<div role="tabpanel" class="tab-pane" id="CV">		
		<div class="jumbotron" align="center">
		<button class="btn btn-lg btn-warning"><span align="center" class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> 载入中... </button>
		</div>
		</div>
		
		<div role="tabpanel" class="tab-pane" id="Singer">
		<div class="jumbotron" align="center">
		<button class="btn btn-lg btn-warning"><span align="center" class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> 载入中... </button>
		</div>
		</div>
		
		<div role="tabpanel" class="tab-pane" id="Other">
		<div class="jumbotron" align="center">
		<button class="btn btn-lg btn-warning"><span align="center" class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> 载入中... </button>
		</div>
		</div>
    </div>
</div>
<div align="center">
<p>
    <a href="//keyfc.net/bbs/"><img src="//keyfc.net/image/logo.jpg" alt="KeyFansClub 我们的梦想" /></a></p>
<p><strong>
  KEY社作品讨论与同人创作相关的清新主题大众站<br>
  2002-2015</strong></p>
<p><small>webpage made by: goodbest</small></p>
</div>
';

echo "</body></html>";
?>