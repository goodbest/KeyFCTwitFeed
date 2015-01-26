<?php
require_once('TweetPHP.php');
require_once('config.php');

$TweetPHP = new TweetPHP(array(
  'consumer_key'              => $keys['consumer_key'],
  'consumer_secret'           => $keys['consumer_secret'],
  'access_token'              => $keys['access_token'],
  'access_token_secret'       => $keys['access_token_secret'],
  'twitter_screen_name'       => '',
  'ignore_replies'            => 'false',
  'ignore_retweets'           => 'false',
  'twitter_style_dates'       => 'false',
  'tweets_to_retrieve'        => '200',
  'tweets_to_display'         => '200',
  'twitter_date_text'         => array('秒', '分钟', '约', '小时', '之前'),
  'date_format'               => '%Y-%m-%d %H:%M', 
  'date_lang'                 => 'zh_CN',
  'cachetime'             => 60*5,
  'twitter_wrap_open'     => '<h2 class="text-center">Latest Tweets about Key <small>last update: '.date('Y-m-d H:i').'</small></h2>
	<div align="center" >
	<a href="http://fanyi.youdao.com/WebpageTranslate?keyfrom=webfanyi.top&url=http%3A%2F%2Fkeyfc.net%2Fbbs%2Fkeytwit%2Findex.php&type=JA2ZH_CN">有道翻译</a>
	<a href="javascript:bing_translate();">bing翻译</a>
	<a href="https://translate.google.com/translate?hl=en&sl=ja&tl=zh-CN&u=http%3A%2F%2Fkeyfc.net%2Fbbs%2Fkeytwit%2Findex.php&sandbox=1">Google翻译</a>
	</div>
	<ul id="twitter">',
  'twitter_wrap_close'    => '</ul>',
  'tweet_wrap_open'       => '<div class="well well-sm"><div class=bs-docs-grid"><div class="row">',
  'meta_wrap_open'        => '',
  'meta_wrap_close'       => '',
  'tweet_wrap_close'      => '</div></div></div>',
  'error_message'         => 'Oops, our twitter feed is unavailable right now.',
  'error_link_text'       => 'Follow us on Twitter'

));

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
  </head>
  <body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src='js/jquery.min.js'></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src='js/bootstrap.min.js'></script>
";

echo "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58939637-1', 'auto');
  ga('send', 'pageview');
  



</script>";

echo "<script>
function bing_translate() {
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.src = 'http://labs.microsofttranslator.com/bookmarklet/default.aspx?f=js&from=ja&to=zh-chs';
    document.body.insertBefore(s, document.body.firstChild);
}
</script>
";
echo $TweetPHP->get_tweet_list();
echo "</body></html>"
?>