<?php
# Defining a multidimensional associative array
$students = [
    ["Name" => "Ashish", "Age" => 20, "Grade" => "A"],
    ["Name" => "Kalyani", "Age" => 22, "Grade" => "B"]
];



# Accessing individual elements in the array
echo $students[0]["Name"]; // Ashish
echo "<br>";
echo $students[1]["Age"];  // 22
echo "<br>";
echo $students[1]["Grade"]; // B
echo "<hr>";



# Looping through the multidimensional array
foreach ($students as $student) {
    echo "Name: " . $student["Name"] . "<br>";
    echo "Age: " . $student["Age"] . "<br>";
    echo "Grade: " . $student["Grade"] . "<br>";
}
echo "<hr>";


# Modifying an element
$students[0]["Age"] = 25;  // Changing Ashish's age
$students[1]["Age"] = 27;

# Printing the array
echo "<pre>";
print_r($students);
echo "</pre>";
echo "<hr>";



# Adding a new student to the array
$students[] = ["Name" => "Raj", "Age" => 30, "Grade" => "C"];
$students[] = ["Name" => "Anjali", "Age" => 20, "Grade" => "O"];

echo "<pre>";
print_r($students);
echo "</pre>";

?>
