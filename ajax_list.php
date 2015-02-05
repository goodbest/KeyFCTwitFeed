<?php
require_once('TweetPHP.php');
require_once('config.php');
$list_type=$_GET["type"];

$TweetPHP = new TweetPHP(array(
  'consumer_key'              => $keys['consumer_key'],
  'consumer_secret'           => $keys['consumer_secret'],
  'access_token'              => $keys['access_token'],
  'access_token_secret'       => $keys['access_token_secret'],
  'cache_file'            => dirname(__FILE__) . '/cache/html/tw_'.$list_type.'.txt', // Where on the server to save the cached formatted tweets
  'cache_file_raw'        => dirname(__FILE__) . '/cache/html/tw_array_'.$list_type.'.txt', // Where on the server to save the cached raw tweets
  'twitter_list_owner_screen_name'       => 'keyfctwitfeed',
  'twitter_list_name'       => $list_type,
  'ignore_replies'            => 'false',
  'ignore_retweets'           => 'false',
  'twitter_style_dates'       => 'false',
  'tweets_to_retrieve'        => '200',
  'tweets_to_display'         => '200',
  'twitter_date_text'         => array('秒', '分钟', '约', '小时', '之前'),
  'date_format'               => '%Y-%m-%d %H:%M', 
  'date_lang'                 => 'zh_CN',
  'cachetime'             => 60*5,
  'twitter_wrap_open'     => "<h5 class='text-center'>最后更新: ".date('Y-m-d H:i')."</small></h5>",
  'twitter_wrap_close'    => '',
  'tweet_wrap_open'       => '<div class="well well-sm"><div class=media">',
  'meta_wrap_open'        => '',
  'meta_wrap_close'       => '',
  'tweet_wrap_close'      => '</div></div>',
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
echo "</body></html>";
?>