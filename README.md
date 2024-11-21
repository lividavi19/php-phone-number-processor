## Overview
A lightweight PHP utility for validating and cleaning phone numbers with support for dynamic country codes and formats.

It is a compact PHP tool designed for validating and cleaning phone numbers. It is lightweight, easy to use, and customizable.

This tool primarily aim to cover local Tanzanian phone numbers ie numbers that starts with `Zero, +255 or 255`.

## Features
- Validate phone numbers.
- Clean phone numbers by removing unnecessary characters while retaining the original format.
- Supports both international (+) and local formats (starting with 0).
- Designed for simplicity and flexibility.

## Why Use PhoneNumberUtility?
- Lightweight: A focused tool without unnecessary bloat.
- Reliable: Validates numbers according to industry-standard formats.
- Simple: Easy to integrate into any PHP application.

## Usage
### Validating phone number
To check if a phone number is valid.
```
<?php

require_once 'src/PhoneNumberUtility.php';

$phoneNumber = '+255 687-123-123';
$isValid = PhoneNumberUtility::isValid($phoneNumber);

if ($isValid) {
    echo "Phone number is valid.";
} else {
    echo "Phone number is invalid.";
}
```

### Clean phone number
To clean a phone number (remove spaces, dashes, etc.)
```
<?php

require_once 'src/PhoneNumberUtility.php';

$phoneNumber = '+255 687-123-123';
$cleanedNumber = PhoneNumberUtility::clean($phoneNumber);

if ($cleanedNumber !== null) {
    echo "Cleaned phone number: $cleanedNumber";
} else {
    echo "Phone number is invalid.";
}
```

- For more detailed examples, check the `examples/example-use-case.php` file in the repository.

## Contributing
Contributions are welcome! If you have suggestions for improvements or additional features, please open an issue or submit a pull request.

## License
This project is licensed under the MIT License. See the `LICENSE` file for details.