<?php

// 1. Declare and initialize the array
$array = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);


// 2. Print all elements
echo "All elements: ";

foreach ($array as $value) {
    echo $value . " ";
}

echo "<br><br>";


// 3. Calculate total of all elements
$total = 0;

foreach ($array as $value) {
    $total = $total + $value;
}

echo "Total of all elements = " . $total;
echo "<br><br>";


// 4. Calculate total of even elements
$evenTotal = 0;

foreach ($array as $value) {
    if ($value % 2 == 0) {
        $evenTotal = $evenTotal + $value;
    }
}

echo "Total of even elements = " . $evenTotal;
echo "<br><br>";


// 5. Calculate total of odd elements
$oddTotal = 0;

foreach ($array as $value) {
    if ($value % 2 != 0) {
        $oddTotal = $oddTotal + $value;
    }
}

echo "Total of odd elements = " . $oddTotal;
echo "<br><br>";


// 6. Find minimum element and its positions
$min = min($array);

echo "Minimum element = " . $min;
echo "<br>";

echo "Minimum positions = ";

foreach ($array as $position => $value) {
    if ($value == $min) {
        echo $position . " ";
    }
}

echo "<br><br>";


// 7. Find maximum element and its positions
$max = max($array);

echo "Maximum element = " . $max;
echo "<br>";

echo "Maximum positions = ";

foreach ($array as $position => $value) {
    if ($value == $max) {
        echo $position . " ";
    }
}










$colors = array(
    "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),

    "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),

    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )
);

echo "<table border='1'>";

echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";

foreach ($colors as $row => $columns) {

    echo "<tr>";

    echo "<th>" . $row . "</th>";

    foreach ($columns as $value) {
        echo "<td>" . $value . "</td>";
    }

    echo "</tr>";
}

echo "</table>";





// 1. Declare and initialize the array
$array = array(
    array(2, -6, 8),
    array(-6, 1, 6),
    array(7, 8, -6)
);


// 2. Print all elements
echo "All elements:<br>";

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {
        echo $array[$i][$j] . " ";
    }

    echo "<br>";
}

echo "<br>";


// 3. Total of odd elements
$oddTotal = 0;

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array[$i][$j] % 2 != 0) {
            $oddTotal += $array[$i][$j];
        }

    }
}

echo "Total of odd elements = " . $oddTotal;
echo "<br><br>";


// 4. Total of even elements
$evenTotal = 0;

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array[$i][$j] % 2 == 0) {
            $evenTotal += $array[$i][$j];
        }

    }
}

echo "Total of even elements = " . $evenTotal;
echo "<br><br>";


// 5. Total of each row
for ($i = 0; $i < 3; $i++) {

    $rowTotal = 0;

    for ($j = 0; $j < 3; $j++) {
        $rowTotal += $array[$i][$j];
    }

    echo "Total of Row " . ($i + 1) . " = " . $rowTotal . "<br>";
}

echo "<br>";


// 6. Total of each column
for ($j = 0; $j < 3; $j++) {

    $columnTotal = 0;

    for ($i = 0; $i < 3; $i++) {
        $columnTotal += $array[$i][$j];
    }

    echo "Total of Column " . ($j + 1) . " = " . $columnTotal . "<br>";
}

echo "<br>";


// 7. Total of each diagonal

$diagonal1 = 0;
$diagonal2 = 0;

for ($i = 0; $i < 3; $i++) {

    $diagonal1 += $array[$i][$i];

    $diagonal2 += $array[$i][2 - $i];
}

echo "Total of first diagonal = " . $diagonal1;
echo "<br>";

echo "Total of second diagonal = " . $diagonal2;
echo "<br><br>";


// 8. Total of all elements
$total = 0;

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {
        $total += $array[$i][$j];
    }
}

echo "Total of all elements = " . $total;
echo "<br><br>";


// 9. Find minimum element and its positions
$min = $array[0][0];

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array[$i][$j] < $min) {
            $min = $array[$i][$j];
        }

    }
}

echo "Minimum element = " . $min;
echo "<br>";

echo "Minimum positions = ";

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array[$i][$j] == $min) {
            echo "(" . ($i + 1) . "," . ($j + 1) . ") ";
        }

    }
}

echo "<br><br>";


// 10. Find maximum element and its positions
$max = $array[0][0];

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array[$i][$j] > $max) {
            $max = $array[$i][$j];
        }

    }
}

echo "Maximum element = " . $max;
echo "<br>";

echo "Maximum positions = ";

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array[$i][$j] == $max) {
            echo "(" . ($i + 1) . "," . ($j + 1) . ") ";
        }

    }
}



$students = array(

    "CA221" => array(
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ),

    "CA223" => array(
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ),

    "CA221_2" => array(
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    )

);

echo "<table border='1'>";

echo "<tr>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

foreach ($students as $student) {

    echo "<tr>";

    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";

    echo "</tr>";
}

echo "</table>";










$transcript = array(

    "Semester 1" => array(

        "subject1" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ),

        "subject2" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ),

        "subject3" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        )
    ),

    "Semester 2" => array(

        "subject1" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 0,
            "Total" => 45,
            "Status" => "Fail"
        ),

        "subject2" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ),

        "subject3" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        )
    )
);


echo "<table border='1'>";

echo "<tr>";
echo "<th>Semester</th>";
echo "<th>Course</th>";
echo "<th>CW1</th>";
echo "<th>MidTerm</th>";
echo "<th>CW2</th>";
echo "<th>Final</th>";
echo "<th>Total</th>";
echo "<th>Status</th>";
echo "</tr>";


foreach ($transcript as $semester => $subjects) {

    foreach ($subjects as $course => $data) {

        echo "<tr>";

        echo "<td>" . $semester . "</td>";
        echo "<td>" . $course . "</td>";
        echo "<td>" . $data["CW1"] . "</td>";
        echo "<td>" . $data["MidTerm"] . "</td>";
        echo "<td>" . $data["CW2"] . "</td>";
        echo "<td>" . $data["Final"] . "</td>";
        echo "<td>" . $data["Total"] . "</td>";
        echo "<td>" . $data["Status"] . "</td>";

        echo "</tr>";
    }
}

echo "</table>";

?>