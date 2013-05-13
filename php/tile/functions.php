<?php

function e($s) {
        echo $s . PHP_EOL;
}

function dump($v) {
        e('<pre>');
        var_export($v);
        e('<pre>');
}

function q($s) {
	return '"'.$s.'"';
}
