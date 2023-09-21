<?php
// Greeting
function greeting() {
    return "Hello, sunshine!";
}

// Subscribe to Newsletter
function newsletterForm() {
    $html = '<form action="newsletter.php" method="post">';
    $html .= '<label for="username">Username:</label>';
    $html .= '<input type="text" id="username" name="username"><br>';
    $html .= '<label for="email">Email:</label>';
    $html .= '<input type="email" id="email" name="email"><br>';
    $html .= '<input type="submit" value="Subscribe to Newsletter">';
    $html .= '</form>';
    return $html;
}

// Convert Username to Lowercase
function toLowercase($username) {
    return strtolower($username);
}

// Generate Email from Username
function userEmail($username) {
    $email = toLowercase($username) . "@hkhk.edu.ee";
    return $email;
}

// Generate a 7-character Code for the User
function generateCode() {
    $code = '';
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    for ($i = 0; $i < 7; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $code;
}

// Range of Numbers
function numberRange($start, $end) {
    $numbers = [];
    for ($i = $start; $i <= $end; $i++) {
        $numbers[] = $i;
    }
    return $numbers;
}

// Number Range with Step
function numberRangeWithStep($start, $end, $step) {
    $numbers = [];
    for ($i = $start; $i <= $end; $i += $step) {
        $numbers[] = $i;
    }
    return $numbers;
}

// Calculate Rectangle Area
function rectangleArea($length, $width) {
    return $length * $width;
}

// Check and Retrieve Gender and Birthdate from Personal ID
function checkPersonalID($personalID) {
    if (strlen($personalID) != 11) {
        return "Invalid Personal ID";
    }

    $gender = (intval($personalID[0]) % 2 == 0) ? "Female" : "Male";
    $birthdate = substr($personalID, 5, 2) . "." . substr($personalID, 3, 2) . ".19" . substr($personalID, 1, 2);

    return "Gender: " . $gender . "<br>Birthdate: " . $birthdate;
}

// Positive Thoughts
$subject = ["Life", "Love", "Happiness"];
$verb = ["is wonderful", "makes you happy", "gives strength"];
$object = ["every day.", "forever.", "for a lifetime."];

function createSentences($subject, $verb, $object) {
    $subjectChoice = $subject[array_rand($subject)];
    $verbChoice = $verb[array_rand($verb)];
    $objectChoice = $object[array_rand($object)];

    return $subjectChoice . " " . $verbChoice . " " . $objectChoice;
}

$positiveThoughts = createSentences($subject, $verb, $object);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 7</title>
</head>
<body>
    <h1>Greeting</h1>
    <p><?php echo greeting(); ?></p>

    <h1>Subscribe to Newsletter</h1>
    <?php echo newsletterForm(); ?>

    <h1>Convert Username to Lowercase</h1>
    <p><?php echo toLowercase("Username"); ?></p>

    <h1>Generate Email from Username</h1>
    <p><?php echo userEmail("Username"); ?></p>

    <h1>Generate a 7-character Code for the User</h1>
    <p><?php echo generateCode(); ?></p>

    <h1>Range of Numbers</h1>
    <p><?php echo implode(", ", numberRange(2, 8)); ?></p>

    <h1>Number Range with Step</h1>
    <p><?php echo implode(", ", numberRangeWithStep(2, 8, 3)); ?></p>

    <h1>Calculate Rectangle Area</h1>
    <p>The rectangle area is <?php echo rectangleArea(5, 7); ?> square units.</p>

    <h1>Personal ID</h1>
    <p><?php echo checkPersonalID("37605030299"); ?></p>

    <h1>Positive Thoughts</h1>
    <p><?php echo $positiveThoughts; ?></p>
</body>
</html>
