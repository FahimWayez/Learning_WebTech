<?php

if (isset($_POST['submit'])) {
    $degree = $_POST['degree'];
    echo $degree;
}
?>


<html>

<head>
    <title>Lab 3.1</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="degree" value="SSC" /> SSC
            <input type="checkbox" name="degree" value="HSC" /> HSC
            <input type="checkbox" name="degree" value="BSc" /> BSc
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>

</html>