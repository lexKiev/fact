<?php

//5! = 5* 4*3*2*1


/**
 * @param $a
 * @return float|int
 */

function factorial($a)
{
//	if ($a) {
//		return $a * factorial($a - 1);
//	} else {
//		return 1;
//	}
	return $a ? $a * factorial($a - 1) : 1;
}

echo factorial(8);