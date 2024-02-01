
  <?php

// <!-- ### Easy Section:

// 1. **Concatenation:**
//    - Create a PHP script to concatenate two strings and display the result.


    $string1 = "Lokesh";
    $string2 = " Kumawat";

    $result = $string1.$string2;

    echo $result."<br><br><br>";


// 2. **String Length:**
//    - Write a function to find and print the length of a given string.

    // echo strlen($result);

    function stringConcatenation($string){
        $newArray = str_split($string);
        echo count($newArray)."<br><br>";
    }

    stringConcatenation($result);
    stringConcatenation($string1);


// 3. **Substring:**
//    - How can you extract a substring from a PHP string?

    echo substr($result,0,6)."<br><br>";

    $substring = "";
    for($i=7;$i<strlen($result);$i++){
        $substring = $substring.$result[$i];
    }

    echo $substring."<br><br>";

// 4. **String Comparison:**
//    - Explain the difference between `==` and `===` when comparing two strings in PHP.

    if($string1==$string2){
        echo "True"."<br><br>";
    }else{
        echo "False"."<br><br>";
    }

    if($string1.$string2==$result){
        echo "True1"."<br><br>";
    }else{
        echo "False1"."<br><br>";
    }

    $string3 = 13;
    $string4 = "13";

    if($string3==$string4){
        echo "True2"."<br><br>";
    }else{
        echo "False2"."<br><br>";
    }

    if($string3===$string4){
        echo "True3"."<br><br>";
    }else{
        echo "False3"."<br><br>";
    }


// 5. **String Reversal:**
//    - Develop a PHP function to reverse a given string.
    $reverseString = "";
    for($i=strlen($string2)-1;$i>=0;$i--){
        $reverseString = $reverseString.$string2[$i];
    }
    echo $reverseString."<br><br>";



// 6. **Uppercase and Lowercase:** - Convert a string to uppercase and then to lowercase using PHP functions.

    echo strtoupper($string2)."<br><br>";
    echo strtolower($string2)."<br><br>";

// 7. **Trimming:**
//    - What is the purpose of the `trim()` function in PHP, and how is it used?

    $stringSpace = "           lokesh          lokesh";
    
    echo $stringSpace."<br><br>";

    $stringArray = str_split(trim($stringSpace));

    echo var_dump($stringArray)."<br><br>";



// 8. **String Replacement:**
//    - Replace a specific word in a string with another word using PHP.
    // $rep = 
    $new = str_replace( "Lokesh", "Anushka", $result);

    echo $new."<br><br>";

// 9. **String to Array:**
//    - Convert a string into an array in PHP.

    $newArray1 = str_split($string2);
    echo $newArray1[2]."<br><br>";

// 10. **Character Count:**
//     - Write a PHP function to count the occurrences of a specific character in a string.

    echo str_word_count($result)."<br><br>";

// ### Moderate Section:

// 11. **Palindrome Check:**
//     - Create a PHP function to check if a given string is a palindrome.

    

// 12. **String Parsing:**
//     - Parse a string containing a comma-separated list of names and display each name on a new line.

// 13. **URL Encoding and Decoding:**
//     - Explain the purpose of URL encoding in PHP and provide an example of encoding and decoding.

// 14. **Regular Expressions:**
//     - Use a regular expression to validate if a string is a valid email address.

// 15. **String Compression:**
//     - Implement a simple string compression algorithm in PHP.

// 16. **Multiple Occurrences:**
//     - Write a PHP function to find all occurrences of a specific word in a given string.

// 17. **String Encryption:**
//     - Develop a basic encryption function to encrypt a string and decrypt it back to its original form.

// 18. **Random String Generation:**
//     - Generate a random alphanumeric string of a given length using PHP.

// 19. **CSV to Array:**
//     - Convert a CSV string into an associative array in PHP.

// 20. **HTML Special Characters:**
//     - Explain the importance of `htmlspecialchars()` in PHP when working with user input in HTML forms.

// ### Hard Section:

// 21. **Levenshtein Distance:**
//     - Implement a PHP function to calculate the Levenshtein distance between two strings.

// 22. **Unicode Handling:**
//     - Discuss the challenges and solutions for handling Unicode characters in PHP strings.

// 23. **Multipart String Manipulation:**
//     - Manipulate a string that contains multiple sections, each separated by a specific delimiter.

// 24. **Longest Common Substring:**
//     - Write a PHP function to find the longest common substring between two strings.

// 25. **String Internals:**
//     - Explain the internal representation of strings in PHP, including the concept of copy-on-write.

// 26. **Multibyte String Operations:**
//     - Discuss the significance of multibyte string functions in PHP and provide an example of their usage.

// 27. **Binary String Operations:**
//     - Perform binary string operations in PHP, such as bitwise AND, OR, XOR on binary strings.

// 28. **Custom String Formatting:**
//     - Create a PHP function for custom formatting of a string based on specified patterns.

// 29. **Custom Comparison Algorithm:**
//     - Implement a custom string comparison algorithm that considers both alphabetical and numerical values.

// 30. **Recursive String Operations:**
//     - Develop a recursive PHP function to perform operations on nested strings or arrays. -->

?>
