<?php

/**
 * Сортировка массива в заданном порядке.
 *
 * @param array $array Массив, который нужно отсортировать.
 * @param array $order Порядок сортировки.
 * @return array
 */
function sortArray(array $array, array $order): array
{
    usort($array, function ($item1, $item2) use ($order) {
        /** @var int|string|false $key1 */
        $key1 = array_search($item1, $order);
        /** @var int|string|false $key2 */
        $key2 = array_search($item2, $order);

        if ($key1 !== false && $key2 === false) {
            return -1;
        } elseif ($key1 === false && $key2 !== false) {
            return 1;
        } else {
            return $key1 <=> $key2;
        }
    });

    return $array;
}

assert([1, 1, 3, 4, 2, 2, 2] === sortArray([2, 1, 3, 4, 2, 1, 2], [1, 3, 4, 2]));
assert(['d', 'c', 'a', 'a', 'b'] === sortArray(['x' => 'a', 'b', 'y' => 'c', 'd', 'z' => 'a'], ['d', 'c', 'a']));
assert([1, 2, 3] === sortArray([1, 2, 3], [4, 5, 'a']));