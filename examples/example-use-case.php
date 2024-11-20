<?php

require_once '../src/PhoneNumberProcessor.php';

// Example usage
$testNumbers = [
    "255687123123",
    "+255 687-123-123",
    "0687123123",
    "255 687123123",
    "+255-6871231234", // Invalid (too many digits)
    "1234567890"       // Invalid (invalid start)
];

foreach ($testNumbers as $number) {
    echo "Original: $number</br>";
    echo "Valid: " . (PhoneNumberProcessor::isValid($number) ? "Yes" : "No") . "</br>";
    $cleaned = PhoneNumberProcessor::clean($number);
    echo "Cleaned: " . ($cleaned ?: "Invalid") . "</br>";
    echo "</br></br>-------------------------</br></br>";
}
?>