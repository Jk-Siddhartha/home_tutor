<?php

function parseInput($input)
{
    $input = trim($input);
    $input = htmlspecialchars($input);
    $input = stripslashes($input);
    return $input;
}

function getPassword()
{
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()-_+=<>?';

    // Combine all character sets
    $allChars = $lowercase . $uppercase . $numbers . $specialChars;

    // Initialize the password as an empty string
    $password = '';

    // Ensure the password has a minimum length of 8 characters
    while (strlen($password) < 8) {
        // Add a random character from $allChars to the password
        $randomChar = $allChars[rand(0, strlen($allChars) - 1)];
        $password .= $randomChar;
    }

    return $password;
}
