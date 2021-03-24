<?php
$input = "Yazılım geliştirmek ve algoritma üretmek çok zevkli bir iş";
class StringApp
{
	function stringSorter($string) {
		if ( is_string($string) ) {
			$array = explode(" ", $string);
			$output = [];
			foreach ($array as $key => $value) {
				$lastLetter = substr($value, -1);
				if ( isset( $output[$lastLetter] ) ) {
					$lastLetter = $lastLetter.$key;
				}
				$output[$lastLetter] = $value;
			}
			ksort($output);
			return $output;
		} else {
			return 'Lütfen metinsel bir değer giriniz!';
		}
	}
	// isteğe göre string olarak yazdırma metodu
	function arrayList($array) : string
	{
		$arrayToString=implode(" ", $array);
		return $arrayToString;
	}
}
echo "<pre>";
$app = new StringApp();
// case 1 düzgün deneme
$case1 = $app->stringSorter($input);
print_r($case1);
echo "<hr>";
// case 2 hatalı deneme
$case2=$app->stringSorter(5.10);
var_dump($case2);
echo "<hr>";
// case 3 string olarak yazdırma
$case3=$app->stringSorter($input);
$caseUpdate=$app->arrayList($case3);
echo $caseUpdate;