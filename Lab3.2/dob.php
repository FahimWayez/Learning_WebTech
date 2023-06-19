<?php

if (isset($_POST['submit'])) {
    $dob = $_POST['dob'];
    if ($dob == "") {
        echo "Invalid format";
    } else {
        echo $dob;
    }
}
?>


<html>

<head>
    <title>Lab 3.1</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Date of Birth</legend>
            dob : <input type="date" name="dob" value="" />
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>

</html>