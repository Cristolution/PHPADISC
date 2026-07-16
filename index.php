<?php

// --------------- ARRAY FUNCTIONS ---------------

// 1. array_push() 
$fruits = ["apple", "banana"];
array_push($fruits, "orange", "mango");
var_dump($fruits);

// 2. array_pop() 
$stack = ["a", "b", "c"];
$removed = array_pop($stack);
var_dump($stack, $removed);

// 3. unset() 
$colors = ["red", "green", "blue"];
unset($colors[1]);
var_dump($colors);

// 4. sort() 
$numbers = [3, 1, 4, 1, 5];
sort($numbers);
var_dump($numbers);

// 5. array_filter() 
$nums = [1, 2, 3, 4, 5, 6];
$evens = array_filter($nums, fn($n) => $n % 2 === 0);
var_dump($evens);

// 6. array_shift() 
$queue = ["first", "second", "third"];
$first = array_shift($queue);
var_dump($queue, $first);

// 7. count() 
$items = ["a", "b", "c", "d"];
var_dump(count($items));

// 8. in_array() 
$users = ["Alice", "Bob", "Charlie"];
var_dump(in_array("Bob", $users));

// 9. Array spread 
$a = ["x", "y"];
$b = ["z", "w"];
var_dump([...$a, ...$b]);

// 10. array_keys()
$data = ["a" => 1, "b" => 2, "c" => 3];
var_dump(array_keys($data));


// --------------- STRING FUNCTIONS ---------------

// 11. strlen()
$name = "ADISC";
var_dump(strlen($name));

// 12. str_contains()
$sentence = "The quick brown fox";
var_dump(str_contains($sentence, "quick"));

// 13. str_starts_with()
var_dump(str_starts_with($sentence, "The"));

// 14. strtoupper() / strtolower()
$word = "hello";
var_dump(strtoupper($word), strtolower($word));

// 15. ucwords()
$title = "hello world";
var_dump(ucwords($title));

// 16. substr() 
var_dump(substr("hello world", 1, 5));

// 17. str_replace() 
var_dump(str_replace("a", "o", "banana"));

// 18. trim() 
var_dump(trim("   hello   "));

// 19. strpos() 
var_dump(strpos("hello", "l"));

// 20. implode() 
var_dump(implode(",", ["apple", "banana", "cherry"]));

// 21. explode() 
var_dump(explode(",", "apple,banana,cherry"));

// 22. str_pad() 
var_dump(str_pad("42", 6, "0", STR_PAD_LEFT));

// 23. str_repeat() 
var_dump(str_repeat("ha", 5));

// 24. chr() / ord() 
var_dump(chr(65), ord("A"));

// 25. str_ends_with()
var_dump(str_ends_with($sentence, "fox"));


// --------------- NUMBER FUNCTIONS ---------------

// ceil()
var_dump(ceil(4.2));

// round()
var_dump(round(4.5));

// floor()
var_dump(floor(4.8));

// abs()
var_dump(abs(-42));

// max() / min()
var_dump(max(1, 5, 3), min(1, 5, 3));

// pow() 
var_dump(pow(2, 8));

// sqrt()
var_dump(sqrt(16));

// intdiv()
var_dump(intdiv(10, 3));

// is_int() / is_float() 
var_dump(is_int(5), is_float(5.5));

// is_numeric() 
var_dump(is_numeric("42"), is_numeric("hello"));

// base_convert() 
var_dump(base_convert("FF", 16, 2));

// range() 
var_dump(range(1, 5));
