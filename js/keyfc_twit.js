$(document).ready(function(){
$('[data-toggle="tabajax"]').click(function (e) {
    var $this = $(this),
        loadurl = $this.attr('href'),
        targ = $this.attr('data-target');

    $(targ).load(loadurl, function(data){
        $(targ).html(data);
 
    });
	$this.tab('show');

    return false;
});
});
	
	
	
	
	
function bing_translate() {
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.src = 'http://labs.microsofttranslator.com/bookmarklet/default.aspx?f=js&from=ja&to=zh-chs';
    document.body.insertBefore(s, document.body.firstChild);
};	
	
	
	
	
	
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58939637-1', 'auto');
  ga('send', 'pageview');