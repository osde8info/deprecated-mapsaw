<?

require  'private/apikey.php';

$goog="http://chart.apis.google.com/chart?cht=qr&chs=256x256&chl=";
$servers=array('a','b','c');

$action = $_REQUEST['action'];

@$params = explode('/',trim($action,'/'));
if (count($params)==4) {
	$style=$params[0];
	$size=$params[1];
	$zoom=$params[2];
	$pngname=$params[3];

	@$txy = explode('-',basename($pngname,'.png'));
	$prefix = $txy[0];

	if ($style && $size && $zoom && $prefix) {

		$x=$txy[2];
		$y=$txy[1];

		if ($style <> 'code') {
			$svr=$servers[rand(0,2)];
			$f="http://$svr.tile.cloudmade.com/$apikey/$style/$size/$zoom/$x/$y.png";
		}
		elseif ($style == 'code') {
			$f=$goog.urlencode("http://map-saw.com?x=$x&y=$y");
		}
		if ($f) {
			header('Content-type: image/png');
			echo file_get_contents($f);
		}
	}
}

?>
<html>
<head>
<title>map-saw</title>
</head>
<body>
<div>
<p><a href="http://map-saw.com">map-saw</a></p>
</div>
<div>
<script type="text/javascript" src="/private/gad1.js"></script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
<script type="text/javascript" src="/js/gan1.js"></script>
<script type="text/javascript" src="/private/gan2.js"></script>
</div>
</body>
</html>
