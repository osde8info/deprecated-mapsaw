<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>mapsaw alpha</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="pragma" content="no-cache" />
<meta name="msvalidate.01" content="B7ADFD045ACA16539BD148B2FE03030E" />
<META name="y_key" content="38a9e530edbd4caa">

<link rel="stylesheet" media="all" type="text/css" href="/css/mapsaw.css" />
<script type="text/javascript" src="/js/prototype.js"></script>
<script type="text/javascript" src="/js/scriptaculous.js"></script>
<script type="text/javascript" src="/js/mapsaw.js"></script>
<script type="text/javascript" src="/private/gadan.js"></script>
</head>
<?
require 'functions.php';

$cloud="http://mapsaw.osde8info.com/tile/6681/256/12/";

$cmstyles=array(6681,7704,7705,7706);
$cmstyle=$cmstyles[rand(0,3)];

$size=40;

?>
<body>

<table width="100%">
<tr>
<td align="left">
 <img alt="osm" width="<?=$size?>" height="<?=$size?>" src="<?=$cloud."z-01345-02202.png"?>" />
</td>
<td>
 <h3 align="center">mapsaw alpha</h3>
 <h3 align="center">the OpenStreetMap CloudMade Mobile QR Map Puzzle for all ages</h3>
 <h4 align="center">"the only puzzle that lets you put the wrong piece in the right place"</h4>
</td>
<td align="right">
 <img alt="osm" width="<?=$size?>" height="<?=$size?>" src="<?=$cloud."z-01345-02203.png"?>" />
</td>
</tr>
</table>
<div align="center">available in 
<a href="/1">solo</a>, <a href="/2">duo</a>, <a href="/3">treble</a> or <a href="/4">quad</a> 
sizes with jr, dice, classic, grid, random and ultimate game styles
</div>
<table align="center">
<? 
$action = $_REQUEST['action'];

@$params = explode('/',trim($action,'/'));

require 'layout.php';
require 'targ.php';
require 'source.php';

$qty=isset($params[0]) && $params[0] ? $params[0] : 1;
if ($qty>5) $qty=1;

$style=isset($params[1]) && $params[1] ? $params[1] : rand(1,6);
if ($style>6) $style=1;

$layout=layout($style);
$missing=array();

$zoom=rand(11,15);

switch ($zoom) {
	case 11:
		$x=1101;
		$y=672;
		break;

	case 12:
		$x=2202;
		$y=1345;
		break;

	case 13:
		$x=4405;
		$y=2690;
		break;

	case 14:
		$x=8810;
		$y=5380;
		break;

	default:
		$x=17620;
		$y=10760;
		break;
}	

e('<tr>');
for ($i=0; $i<$qty; $i++) {
	e('<td>');
	tmap(chr(ord('a')+$i),$layout,$size,$cmstyle,$zoom,$x,$y);
	e('</td>');
}
e('</tr>');
?>
<table>


<table width="100%">

<tr>
<td></td>
<td align="center">
drag the map tiles into the correct position
</td>
<td></td>
</tr>

<tr>
<td></td>
<td>
<? smap($missing,$size,$cmstyle,$zoom) ?>
</td>
<td></td>
</tr>

<tr>
<td align="left">
 <img alt="osm" width="<?=$size?>" height="<?=$size?>" src="<?=$cloud."z-01346-02202.png"?>" />
</td>
<td>
<? require 'foot.php' ?>
</td>
<td align="right">
 <img alt="osm" width="<?=$size?>" height="<?=$size?>" src="<?=$cloud."z-01346-02203.png"?>" />
</td>
</tr>

</table>

<div align="center">
<script type="text/javascript" src="/private/gad.js"></script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
</div>

<script type="text/javascript" src="/private/gan.js"></script>
</body>
</html>
