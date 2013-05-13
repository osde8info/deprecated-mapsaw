<?php

function tmap($prefix,$layout,$size,$cmstyle,$zoom,$xinit,$yinit) {
	global $missing;

	$xstart=$xinit+rand(0,30);
	$ystart=$yinit+rand(0,30);

	e('<table align="center" cellpadding="0" cellspacing="0">');
	for ($y=0;$y<5;$y++) {
		$yy=$ystart+$y;
		e( '<tr>');
		for ($x=0;$x<7;$x++) {
			$xx=$xstart+$x;
			if (!isset($layout[$x][$y])) {
				$src="http://mapsaw.osde8info.com/tile/$cmstyle/256/$zoom/$prefix-$yy-$xx.png";
				$class='class="static"';
			}
			else {
				$missing[]=array($xx,$yy);
				$src="http://mapsaw.osde8info.com/tile/code/256/$zoom/$prefix-$yy-$xx.png";
				$class='class="target"';
			}
			e('<td><img id='.q('img'.$yy.$xx). 
					' alt="osm" '.
					$class .
					' width='.q($size). ' height='.q($size) .
					' src='.q($src). '/></td>');
		}
		e( '</tr>');
	}
	e('</table>');
}
