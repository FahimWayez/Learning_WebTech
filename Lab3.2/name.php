<?php
$Alphabet1 = array(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z']);
$Alphabet2 = array(['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z']);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    if ($name == "" || strlen($name) < 2) {
        echo "Invalid format";
    } else {
        echo "Valid";
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
            <legend>Name</legend>
            name : <input type="text" name="name" value="" />
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>

</html>