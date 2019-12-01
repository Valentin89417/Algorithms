<?
/**
 * Функция для поиска наименьшего элемента массива
 * @param array $array массив целых чисел
 * @return int
 *
 * Функция Сортировка выбором
 * @param array $array не упорядоченный массив
 * @return array
 */
 
// Функция для поиска наименьшего элемента массива
function findSmallest(array $array): int
{
	$smallest = $array[0];
	$smallest_index = 0;
	for($i = 0; $i < count($array); ++$i)
	{
		if($array[$i]<$smallest)
		{
			$smallest = $array[$i];
			$smallest_index = $i;
		}
	}
	return $smallest_index;
}

// Функция Сортировки выбором
function selectionSort(array $array): array
{
	$newArr = array();
	$key = count($array);
	for($i = 0; $i < $key; $i++)
	{
		$smallest = findSmallest($array);
		$newArr[] = $array[$smallest];
		unset($array[$smallest]);
		$array = array_values($array);
	}
	return $newArr;
}




for($i=0; $i<10; $i++) {
	$array[$i] = rand(0, 99);
}
echo '<pre>'.print_r($array,1).'</pre>';

//test поиска наименьшего элемента
$x = findSmallest($array);
echo '<h1>Наименьшее число - '.$array[$x].'</h1>';

//test Сортировки выбором
$y = selectionSort($array);
echo '<pre>'.print_r($y,1).'</pre>';
