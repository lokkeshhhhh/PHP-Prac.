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

    $plString = "ANUSHKAAKHSUNA";
    $noplString = "Anushka";

    function plCheck($string){
        $rString = "";
        for ($i=strlen($string)-1; $i>=0; $i--){ 
            $rString = $rString.$string[$i];
        }
        echo $rString."<br>";
        echo $string."<br>";
        if($rString==$string){
            echo "The given string is palindrome."."<br><br>";
        }else{
            echo "The given string is not palindrome."."<br><br>";
        }
    }


    plCheck($plString);
// 12. **String Parsing:**
//     - Parse a string containing a comma-separated list of names and display each name on a new line.

    $nameString = "Lokesh, Vishal, Rajesh, Raj, Dharam, Bahubali, Bali";

    $nameArray = explode(",",$nameString);

    foreach($nameArray as $name){
        echo $name."<br><br>";
    }

// 13. **URL Encoding and Decoding:**
//     - Explain the purpose of URL encoding in PHP and provide an example of encoding and decoding.

    echo urlencode($result)."<br><br>";

// 14. **Regular Expressions:**
//     - Use a regular expression to validate if a string is a valid email address.

    // $pattern = /^[a-zA-Z0-9-_.]+@[a-zA-z0-9.-]+\.[a-zA-z]{2,}$/;

// 15. **String Compression:**
//     - Implement a simple string compression algorithm in PHP.

    function Compression($inputString){
        $compressionString = "";
        $length = strlen($inputString);

        if($length<=1){
            return $inputString;
        }


        $crChar = $inputString[0];
        $count = 1;

        for ($i=1; $i<$length ; $i++) { 
            if($inputString[$i]===$crChar){
                $count++;
            }else{
                $compressionString .= $crChar.$count;

                $crChar = $inputString[$i];
                $count = 1;
            }
        }

        $compressionString .= $crChar.$count;

        if($length<=1){
            echo $inputString;
        }else{
            echo $compressionString;
        }
    }


    $stringC = "AAAABBBBAAAAKKAKAKAJDKDMC";

    Compression($stringC);
// 16. **Multiple Occurrences:**
//     - Write a PHP function to find all occurrences of a specific word in a given string.
    echo "<br><br><br><br>";

    $pattern = "/ain/";
    $string6 = "locain detain certain tain ";

    echo preg_match_all($pattern, $string6);


    echo "<br><br><br><br>";
// 17. **String Encryption:**
//     - Develop a basic encryption function to encrypt a string and decrypt it back to its original form.

    

echo "<br><br><br><br>";
// 18. **Random String Generation:**
//     - Generate a random alphanumeric string of a given length using PHP.

    

    function rString($length){
        $pattern1 = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $rString = "";
        for ($i=0; $i <$length ; $i++) { 
            $rString .= $pattern1[rand(0,35)];
        }

        echo  $rString;
    }

    rString(10);

echo "<br><br><br><br>";
// 19. **CSV to Array:**
//     - Convert a CSV string into an associative array in PHP.

    // $nameArray;

    


echo "<br><br><br><br>";
// 20. **HTML Special Characters:**
//     - Explain the importance of `htmlspecialchars()` in PHP when working with user input in HTML forms.




echo "<br><br><br><br>";

?>
