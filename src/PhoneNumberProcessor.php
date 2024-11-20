<?php

class PhoneNumberProcessor
{
    /**
     * Validate if the provided phone number is valid.
     * 
     * @param string $phoneNumber The phone number to validate.
     * @return bool True if valid, false otherwise.
     */
    public static function isValid(string $phoneNumber) : bool
    {
        // Remove unwanted characters to check validity
        $cleanedNumber = self::stripCharacters($phoneNumber);

        // Check against valid formats
        $pattern = '/^(?:\+255\d{9}|255\d{9}|0\d{9})$/';
        return preg_match($pattern, $cleanedNumber) === 1;
    }

    /**
     * Clean and return the provided phone number if valid.
     * 
     * @param string $phoneNumber The phone number to clean.
     * @return string|null Cleaned phone number if valid, null otherwise.
     */
    public static function clean(string $phoneNumber)
    {
        // First validate the number
        if (self::isValid($phoneNumber)) {
            // Remove unwanted characters (spaces, dashes, etc.)
            return self::stripCharacters($phoneNumber);
        }

        // Return null if not valid
        return null;
    }

    /**
     * Helper function to strip unwanted characters.
     * 
     * @param string $phoneNumber The phone number to clean.
     * @return string Phone number with only digits and a possible '+'.
     */
    private static function stripCharacters(string $phoneNumber) : string
    {
        return preg_replace('/[^\d+]/', '', $phoneNumber);
    }
}
?>