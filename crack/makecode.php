<?php
$error = false; //initializes the variable $error with a value of false. This variable will be used to store any error messages.
$md5 = false; //initializes the variable $md5 with a value of false. This variable will store the computed MD5 hash value.
$code = ""; //initializes the variable $code as an empty string. This variable will store the user input for the two-letter code.
if (isset($_GET['code'])) { // checks if the 'code' parameter is set in the URL query string, indicating that the form has been submitted
    $code = $_GET['code']; // assigns the value of the 'code' parameter from the URL query string to the variable $code.
    if (strlen($code) != 4) {
        $error = "Input must be exactly four characters";

    } else {
        $md5 = hash('md5', $code);
    }
}
?>
<!DOCTYPE html>

<head>
    <title>Rudra Parmar PIN Code</title>
</head>

<body>
    <h1>MD5 PIN Maker</h1>
    <?php
    if ($error !== false) {
        print '<p style="color:red">';
        print htmlentities($error);
        print "</p>\n";
    }

    if ($md5 !== false) {
        print "<p>MD5 value: " . htmlentities($md5) . "</p>";
    }
    ?>
    <p>Please enter a four-character key for encoding.</p>
    <form>
        <input type="text" name="code" value="<?= htmlentities($code) ?>" />
        <input type="submit" value="Compute MD5 for CODE" />
    </form>
    <p><a href="makecode.php">Reset</a></p>
    <p><a href="index.php">Back to Cracking</a></p>
</body>

</html>