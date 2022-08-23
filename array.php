<?php

/**
 * Функции для работы с массивами
 */

declare(strict_types=1);

function deleteDuplicates(array $array): array
{
    $ids = [];

    return array_filter($array, function (array $elem) use (&$ids) {
        if (in_array($elem['id'], $ids)) {
            return false;
        }

        $ids[] = $elem['id'];

        return true;
    });
}

function sortArrayByKey(array $array, string $key): array
{
    $keys = array_column($array, $key);
    array_multisort($keys, SORT_ASC, $array);

    return $array;
}

function getElemsById(array $array, int $id): array
{
    return array_filter($array, function (array $elem) use ($id) {
        return $elem['id'] === $id;
    });
}

function swapKeyValue(array $array): array
{
    $result = [];
    foreach ($array as $item) {
        $result[] = array_flip($item);
    }

    return $result;
}

$array = [
    ["id" => 1, "date" => "12.01.2020", "name" => "test1"],
    ["id" => 3, "date" => "12.02.2020", "name" => "test2"],
    ["id" => 2, "date" => "12.03.2020", "name" => "test3"],
    ["id" => 2, "date" => "12.04.2020", "name" => "test4"],
    ["id" => 3, "date" => "12.04.2020", "name" => "test5"],
    ["id" => 4, "date" => "12.04.2020", "name" => "andrey"],
];

echo "<p>Исходный массив:</p>";
print_r($array);

echo "<p>Без дубликатов:</p>";
print_r(deleteDuplicates($array));

echo "<p>Сортировка по ключу name:</p>";
print_r(sortArrayByKey($array, 'name'));

echo "<p> Элементы с id = 2</p>";
print_r(getElemsById($array, 2));

echo "<p> Swap </p>";
print_r(swapKeyValue($array));
