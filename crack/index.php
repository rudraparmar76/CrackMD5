<!DOCTYPE html>

<head>
    <title>Rudra Parmar MD5 Cracker</title>
</head>

<body>
    <h1>MD5 cracker</h1>
    <p>This application takes an MD5 hash
        of a four digit pin and check all 10,000 possible four digit PINs to determine the PIN. </p>
    <pre>
Debug Output:
<?php
$goodtext = "Not found";
// If there is no parameter, this code is all skipped
if (isset($_GET['md5'])) { // determine if the form is submitted with md5 query
    $time_pre = microtime(true); // measures the current time before execution begin . used to measure elapsed time
    $md5 = $_GET['md5']; // retrieves the value of md5 from the querystring and stores it in the variable

    // This is our alphabet
    $txt = '0123456789'; // Numeric string
    $show = 15; //sets the initial value for the debug output counter. It will be used to limit the number of debug outputs displayed

    //First loop for the first digit
    for ($i = 0; $i < strlen($txt); $i++) {
        $ch1 = $txt[$i]; // The first digit

        // Second loop for second digit.
        for ($j = 0; $j < strlen($txt); $j++) {
            $ch2 = $txt[$j]; // Our second digit

            //Third loop
            for ($k = 0; $k < strlen($txt); $k++) {
                $ch3 = $txt[$k];


                //Fourth loop
                for ($l = 0; $l < strlen($txt); $l++) {
                    $ch4 = $txt[$l];


                    //Concatenate the 4 digit to make hash
                    $try = $ch1 . $ch2 . $ch3 . $ch4;

                    // Run the hash and then check to see if we match
                    $check = hash('md5', $try); //computes the MD5 hash of the concatenated string and assigns it to the variable $check.
                    if ($check == $md5) {
                        //The if ( $check == $md5 ) { ... } condition checks if the computed hash matches the given MD5 hash. If they match, the original two-character string is found, and it is assigned to the variable $goodtext.
                        $goodtext = $try;
                        break 4; // Exit all loop
                    }

                    // Debug output until $show hits 0
                    if ($show > 0) {
                        print "$check $try\n";
                        $show = $show - 1;
                    }
                }
            }
        }
    }
    // Compute elapsed time
    $time_post = microtime(true); //records the current time after the computation finishes.
    print "Elapsed time: ";
    print $time_post - $time_pre; //The elapsed time is computed by subtracting $time_pre from $time_post.
    print "\n";
}
?>
</pre>
    <!-- Use the very short syntax and call htmlentities() -->
    <p>Original Text:
        <?= htmlentities($goodtext); ?>
    </p> <!--The htmlentities() function is used to prevent any potential HTML injection.-->
    <form>
        <input type="text" name="md5" size="60" />
        <input type="submit" value="Crack MD5" />
    </form>
    <ul>
        <li><a href="index.php">Reset</a></li>
        <li><a href="md5.php">MD5 Encoder</a></li>
        <li><a href="makecode.php">MD5 Code Maker</a></li>
        <li><a href="https://github.com/csev/wa4e/tree/master/code/crack" target="_blank">Source code for this
                application</a></li>
    </ul>
</body>

</html>