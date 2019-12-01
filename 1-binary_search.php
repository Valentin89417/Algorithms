<?
/**
 * Функция бинарного поиска по упорядоченному массиву
 * @param array $array Упорядоченный по возрастанию массив целых чисел
 * @param int $item Искомая величина
 * @return bool|int
 */
function binary_search(array $array, int $item): int
{
	// $start равен индексу первого элемента в массиве
	$start = 0;
	// $end равен индексу последнего элемента в массиве
	$end = count($array)-1;
	$i=0; // счётчик проверок
	while($start<=$end){ // Пока эта часть не сократится до одного элемента ...
		echo ++$i."<br>"; // вывод счётчик проверок
		$halfIndex = (int)(($start + $end) / 2); // ... проверяем средний элемент
		if($array[$halfIndex] === $item){
			return $halfIndex;	// Значение найдено
		}
		// определяем в какой половине надо искать дальше
		if($array[$halfIndex]>$item){
			// много - ищем в меньшей сторане
			$end = $halfIndex - 1;
		}else{
			// мало - ищем в большей сторане
			$start = $halfIndex + 1;
		}
	}
	return false;	// Значение не существует
}

//test
for($i=0; $i<4068474; $i++) {
$array[$i] = $i;
}
$item = 555;
$vel = binary_search($array,$item);
echo '<h1>'.$vel.'</h1>';