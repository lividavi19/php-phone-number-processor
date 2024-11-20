<?php

class PhoneNumberProcessor
{
    /**
     * Validate if the provided phone number is valid.
     * 
     * @param string $phoneNumber The phone number to validate.
     * @return bool True if valid, false otherwise.
     */
    public static function isValid($phoneNumber)
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
     * @return string|bool Cleaned phone number if valid, false otherwise.
     */
    public static function clean($phoneNumber)
    {
        // First validate the number
        if (self::isValid($phoneNumber)) {
            // Remove unwanted characters (spaces, dashes, etc.)
            return self::stripCharacters($phoneNumber);
        }

        // Return false if not valid
        return false;
    }

    /**
     * Helper function to strip unwanted characters.
     * 
     * @param string $phoneNumber The phone number to clean.
     * @return string Phone number with only digits and a possible '+'.
     */
    private static function stripCharacters($phoneNumber)
    {
        return preg_replace('/[^\d+]/', '', $phoneNumber);
    }
}
?>