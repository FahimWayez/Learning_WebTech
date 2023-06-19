<?php

if (isset($_POST['submit'])) {
    $gender = $_POST['gender'];
    echo $gender;
}
?>


<html>

<head>
    <title>Lab 3.1</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="Male" />Male
            <input type="radio" name="gender" value="Female" />Female
            <input type="radio" name="gender" value="Other" /> Others
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>

</html>