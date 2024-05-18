<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count vowels
    $vowelCount = preg_match_all('/[aeiou]/i', $string, $matches);

    // Reverse string
    $reversedString = strrev($string);

    // Print output
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>
