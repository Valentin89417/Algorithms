<?
/**
 * Функция Быстрая сортировка
 * @param array $array не упорядоченный массив
 * @return array
 */
function quicksort($array)
{
	if(count($array) < 2) return $array;  // Базовый случай: массивы с 0 и 1 элементом уже "отсортированы"

	$left = $right = array();
	// рекурсивный случай pivot
	reset($array);
	$pivot_key = key($array);
	$pivot = array_shift($array); 

	foreach($array as $k => $v)
	{
		if($v < $pivot)
			$left[$k] = $v; // Подмассивы всех элементов, меньших опорного
		else
			$right[$k] = $v; // Подмассивы всех элементов, больших опорного
	}

	return array_merge(quicksort($left), array($pivot_key => $pivot), quicksort($right));
}

//------------------------------------------

for($i=0; $i<10; $i++) {
	$array[$i] = rand(0, 99);
}
echo '<pre>'.print_r($array,1).'</pre>';

//test Быстрой сортировки
$xarray = quicksort($array);
echo '<h1>Быстрая сортировка</h1>';

echo '<pre>'.print_r($xarray,1).'</pre>';