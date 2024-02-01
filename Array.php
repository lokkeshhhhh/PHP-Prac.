<?php


// ### Easy Section:

// 1. **Array Declaration:**
//    - Declare a simple indexed array with three elements and print each element.
    $array1 = [11,22,33,44,55,66,77,88,99,111];

    foreach($array1 as $values){
        echo "$values<br><br>";
    }
    echo "<br><br>";
// 2. **Array Length:**
//    - Write a PHP script to find and print the length of an array.
    $count = 0;
    foreach($array1 as $value){
        if($value){
            $count++;
        }
    }

    echo $count;

    echo "<br><br>";
// 3. **Associative Array:**
//    - Create an associative array representing a person's information (name, age, and city).
    
    $arrayAs = ["Name" => "Lokesh", "Age" => 20, "City" => "Jaipur"];

    foreach($arrayAs as $key => $value){
        echo "$key : $value <br>";
    }

echo "<br><br>";
// 4. **Array Push:**
//    - Add a new element to an existing array using the `array_push()` function.

    array_push($array1, "lokesh");

    var_dump($array1);

echo "<br><br>";
// 5. **Array Pop:**
//    - Remove the last element from an array using the `array_pop()` function.

    array_pop($array1);

    var_dump($array1);

echo "<br><br>";
// 6. **Array Sorting:**
//    - Sort an array of numbers in ascending order using the `sort()` function.

    $array2 = [46,243,664,3,3,577,5423,57,324,667,445,3,45,2,45,788,45,2];

    sort($array2);
    // rsort($array2);

    var_dump($array2);

echo "<br><br>";
// 7. **Array Merging:**
//    - Merge two arrays into a single array using the `array_merge()` function.

    $newArray =  array_merge($array1, $array2);

var_dump(sort($newArray));

echo "<br><br>";
// 8. **Accessing Array Elements:**
//    - Access the second element of a numeric array and print its value.

    echo $array1[1];

echo "<br><br>";
// 9. **Checking Array Key Existence:**
//    - Check if a specific key exists in an associative array.

    foreach($arrayAs as $key => $value){
        if($key=="Love"){
            echo "Matched";
            break;
        }else{
            echo "Missed";

            break;
        }
    }

echo "<br><br>";
// 10. **Array Unique Values:**
//     - Remove duplicate values from an array using the `array_unique()` function.

    

echo "<br><br>";
// ### Moderate Section:

// 11. **Array Slicing:**
//     - Create a subset of an array by slicing it from index 2 to 5.
echo "<br><br>";
// 12. **Multidimensional Array:**
//     - Declare and print a multidimensional array representing a matrix.
echo "<br><br>";
// 13. **Array Search:**
//     - Search for a specific element in an array and print its index.
echo "<br><br>";
// 14. **Array Filtering:**
//     - Use the `array_filter()` function to filter out even numbers from an array.
echo "<br><br>";
// 15. **Array Key Sorting:**
//     - Sort an associative array based on keys using the `ksort()` function.
echo "<br><br>";
// 16. **Array Chunking:**
//     - Split an array into chunks of size 3 using the `array_chunk()` function.
echo "<br><br>";
// 17. **Array Intersection:**
//     - Find the common elements between two arrays using the `array_intersect()` function.
echo "<br><br>";
// 18. **Array Reverse:**
//     - Reverse the order of elements in an array using the `array_reverse()` function.
echo "<br><br>";
// 19. **Array Replace:**
//     - Replace values in one array with values from another array using the `array_replace()` function.
echo "<br><br>";
// 20. **Array Shuffle:**
//     - Shuffle the elements of an array using the `shuffle()` function.
echo "<br><br>";
// ### Hard Section:

// 21. **Array Map Function:**
//     - Use the `array_map()` function to square each element of an array.

// 22. **Recursive Array Operations:**
//     - Perform a recursive operation on a nested array, such as counting all elements.

// 23. **Array Sorting with Custom Logic:**
//     - Sort an array of strings based on the length of each string.

// 24. **Array Serialization:**
//     - Serialize an array, then unserialize it back to its original form.

// 25. **Array Reduction:**
//     - Use the `array_reduce()` function to find the product of all elements in an array.

// 26. **Array Key Case Insensitivity:**
//     - Write a PHP script that performs a case-insensitive search for a key in an associative array.

// 27. **Array Comparison:**
//     - Compare two arrays and return the differences using the `array_diff()` function.

// 28. **Array Key Sorting with Custom Logic:**
//     - Sort an associative array based on the values in a custom order.

// 29. **Sparse Array Handling:**
//     - Handle a sparse array (an array with missing indices) and print its elements.

// 30. **Array Iterator:**
//     - Use the `ArrayIterator` class to iterate over the elements of an array and print them.













?>
