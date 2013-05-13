<?php

function layout($style=0) {

$layout=array();

switch ($style) {
	case 1:
		// jr
		$layout[1][2]=true;
		$layout[3][2]=true;
		$layout[5][2]=true;
		break;

	case 2:
		// dice
		$layout[2][1]=true;
		$layout[4][1]=true;

		$layout[3][2]=true;

		$layout[2][3]=true;
		$layout[4][3]=true;
		break;

	case 3:
		// classic
		$layout[1][1]=true;
		$layout[3][1]=true;
		$layout[5][1]=true;

		$layout[1][3]=true;
		$layout[3][3]=true;
		$layout[5][3]=true;
		break;

	case 4:
		// classic
		$layout[1][0]=true;
		$layout[3][0]=true;
		$layout[5][0]=true;

		$layout[0][1]=true;
		$layout[2][1]=true;
		$layout[4][1]=true;
		$layout[6][1]=true;

		$layout[1][2]=true;
		$layout[3][2]=true;
		$layout[5][2]=true;

		$layout[0][3]=true;
		$layout[2][3]=true;
		$layout[4][3]=true;
		$layout[6][3]=true;

		$layout[1][4]=true;
		$layout[3][4]=true;
		$layout[5][4]=true;

		break;

	case 5:
		for ($i=0 ; $i<8 ; $i++) {
			while (true) {
				$x=rand(1,5);
				$y=rand(1,3);
				if (!isset($layout[$x][$y])) break;
			}
			$layout[$x][$y]=true;	
		}

		break;

	case 6:
		for ($i=0 ; $i<12 ; $i++) {
			while (true) {
				$x=rand(1,5);
				$y=rand(1,3);
				if (!isset($layout[$x][$y])) break;
			}
			$layout[$x][$y]=true;
		}

		break;

	default:
		break;
}

return $layout;
}

