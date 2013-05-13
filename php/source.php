<?php

function smap($missing,$size,$cmstyle,$zoom) {
	e('<table align="center">');
	$cell=0;
	shuffle($missing);
	foreach ($missing as $miss) {
		if ($cell%8==0) e('<tr>');
		$src="http://mapsaw.osde8info.com/tile/$cmstyle/256/$zoom/x-$miss[1]-$miss[0].png";
		e('<td><img class="source" alt="osm"' .
			' width='.q($size).' height='.q($size) .
			' src='.q($src).'/></td>');
		if (($cell+1)%8==0) e('</tr>');
		$cell++;
	}
	if (($cell)%8!=0) e('</tr>');
	e('</table>');
}
