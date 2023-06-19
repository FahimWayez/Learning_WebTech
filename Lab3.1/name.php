<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    echo $name;
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