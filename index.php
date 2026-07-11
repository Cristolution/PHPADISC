<?php

/**
 * Lecture 6: PHP Core Fundamentals, Advanced Arrays, and Iteration
 * * This file contains the complete practical examples covered in the lecture,
 * including basic variables, constants, loose type checks, complex nested arrays,
 * and data filtering using control loops.
 */

// ============================================================================
// 1. BASIC SYNTAX & VARIABLES
// ============================================================================

echo "--- 1. Basic Syntax & Outputs ---\n";
echo "Hello, World! \n";

// Different comment styles supported by PHP
// Single-line comment style 1
# Single-line comment style 2
/* Multi-line comment block
*/

$name = "John Doe"; // String type
$age = 20;          // Integer type

// var_dump is an essential tool for debugging variable data types and lengths
var_dump($name);
var_dump($age);

$test = "";      // Empty string
$test2 = " ";    // String containing a space
$test3 = null;   // Null value

// ============================================================================
// 2. CONSTANTS & COMPARISONS
// ============================================================================

echo "\n--- 2. Constants & Logic Comparisons ---\n";

// Compile-time constant definition
const PASSWORD = "123456";

// Runtime constant definition
define("DB_NAME", "adisc");

// Truthy and Falsy evaluations: empty strings evaluate implicitly to false
$sstr = "";
if ($sstr) {
    echo "true \n";
} else {
    echo "false \n"; 
}

// Loose Equality (==) vs Strict Equality (===) concept demonstration
$x = null;
if ($x == "") {
    echo "Loose check: null evaluates as equal to an empty string.\n";
}

$y = [];
echo "Empty array cast to boolean yields: " . (int)(bool)$y . " (false)\n";

// ============================================================================
// 3. COMPLEX DATA STRUCTURES (ARRAYS)
// ============================================================================

echo "\n--- 3. Array Configurations ---\n";

// Index-based (zero-indexed) Array
$courses = ["Math", "Science", "English"];
echo "First course item: " . $courses[0] . "\n";

// Associative Array mapping custom keys
$student = [
    "name" => "John Doe",
    "age" => 20,
    "courses" => ["Math", "Science", "English"]
];
echo "Nested item selection: " . $student["courses"][0] . "\n";

// Multi-dimensional Array demonstrating deep indexing structures
$student2 = [
    "name" => "Jane Doe",
    "age" => 22,
    "courses" => [
        "Math" => [
            "Algebra",
            "Geometry"
        ],
        "Science" => [
            "Physics",
            "Chemistry"
        ]
    ]
];
echo "Deeply nested multi-array value: " . $student2["courses"]["Math"][0] . "\n";

// Complex multi-dimensional list mapping system entities (Employees)
$employees = [
    [
        "id" => 1,
        "first_name" => "Crist",
        "last_name" => "Yaghian",
        "type" => "Employee",
        "tasks" => [
            "type" => "Development",
            "status" => "In Progress",
            "notes" => ["note1", "note2", "note3"]
        ]
    ],
    [
        "id" => 2,
        "first_name" => "Crist1",
        "last_name" => "Yaghian1",
        "type" => "Employee",
        "tasks" => [
            "type" => "Development",
            "status" => "In Progress",
            "notes" => ["note1", "note2", "note3"]
        ]
    ]
];

// ============================================================================
// 4. CONTROL FLOW & DATA ITERATION
// ============================================================================

// Dataset containing students, evaluation criteria scores, and nested task structures
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

echo "\n--- 4a. Filtering Passing Students with Tasks ---\n";
// Using a foreach loop to cleanly evaluate conditions within a nested array structure
foreach ($students as $currentStudent) {
    if ($currentStudent["mark"] >= 60 && count($currentStudent["tasks"]) >= 1) {
        echo $currentStudent["name"] . " has passed and completed tasks.\n";
    }
}

echo "\n--- 4b. Flattened Task Report (Nested Loops) ---\n";
// Iterating over nested arrays using double foreach loops to flatten down records
foreach ($students as $currentStudent) {
    foreach ($currentStudent["tasks"] as $task) {
        echo "Allocated Task: " . $task . "\n";
    }
}