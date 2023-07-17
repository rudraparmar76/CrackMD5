<?php
$md5 = "Not computed";
if ( isset($_GET['encode']) ) {
    $md5 = hash('md5', $_GET['encode']);
}
/* 
The PHP code begins with <?php and ends with ?>, indicating the start and end of PHP execution.
$md5 = "Not computed"; initializes the variable $md5 with the default value "Not computed". This variable will store the computed MD5 hash value.
The if ( isset($_GET['encode']) ) { ... } condition checks if the 'encode' parameter is set in the URL query string, indicating that the form has been submitted.
If the 'encode' parameter is set, the code computes the MD5 hash using hash('md5', $_GET['encode']) and assigns it to the $md5 variable.
*/
?>
<!DOCTYPE html>
<head><title>Rudra Parmar MD5</title></head>
<body>
<h1>MD5 Maker</h1>
<p>MD5: <?= htmlentities($md5); ?></p>
<form>
<input type="text" name="encode" size="40" />
<input type="submit" value="Compute MD5"/>
</form>
<p><a href="md5.php">Reset</a></p>
<p><a href="index.php">Back to Cracking</a></p>
</body>
</html>