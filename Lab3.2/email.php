<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    if ($email == "") {
        echo "Invalid format";
    } else {
        echo $email;
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
            <legend>E-mail</legend>
            email : <input type="email" name="email" value="" />
            <input type="submit" value="i" title="hint: sample@example.com">
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>

</html>