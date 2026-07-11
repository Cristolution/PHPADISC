<?php

echo "Hello World!";

$students = [
    [
        "name" => "John Doe",
        "mark" => 85,
        "tasks" => ["task1", "task2"]
    ],
    [
        "name" => "Crist Doe",
        "mark" => 45,
        "tasks" => ["task3", "task4"]
    ],
    [
        "name" => "test Doe",
        "mark" => 55,
        "tasks" => ["task5", "task6"]
    ],
    [
        "name" => "welcom Doe",
        "mark" => 95,
        "tasks" => []
    ],
    [
        "name" => "hi Doe",
        "mark" => 95,
        "tasks" => []
    ],
    [
        "name" => "testing Doe",
        "mark" => 10,
        "tasks" => []
    ],
];

$count = count($students);
while ($count > 0) {
    var_dump($students[$count - 1]);
    $count--;
}

echo "=================================";

$i = 0;
do {
    echo $i;
} while ($i > 0);

do {
    if (count($students) < 5) {
        echo "i is not big enough";
    }
    if (count($students) > 6) {
        break;
    }
    array_push($students, [
        "name" => "New Student",
        "mark" => 0,
        "tasks" => []
    ]);
    array_push($students[count($students) - 1]["tasks"], ["test"]);

    var_dump($students);

    echo "i is ok";
} while (1);

echo "=================================";

$i = 0;
switch ($i) {
    case "0":
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "i is not equal to 0, 1 or 2";
}

echo "=================================";

$start = 1;
$offset = 3;
switch (true) {
    case $start - $offset === 1:
        var_dump($students[$start - $offset]);
        break;
    case $start - $offset === 2:
        var_dump($students[$start - $offset]);
        break;
    case $start - $offset === 3:
        var_dump($students[$start - $offset]);
        break;
    case $start - $offset === 4:
        var_dump($students[$start - $offset]);
        break;
}
