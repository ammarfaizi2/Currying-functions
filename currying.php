<?php

function multiply_all($arr)
{
	return function ($n) use ($arr) {
		array_walk($arr, function (&$q) use ($n){
			$q *= $n;
		});
		return $arr;
	};
}