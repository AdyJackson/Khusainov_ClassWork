<?php

$hello = "Hello";
$name = "world";

if(!empty($_GET ['world'])) {
    $name = $_GET ['world'];
}


if(!empty($_GET ['name']) or !empty($_GET['world'])) {
    $name = $_GET ['name'];
}


echo "$hello $name";
?>

<html>
<body>
<form>
    <input type="text" name="hello" placeholder="Приветствие"
        <?php

        ?>
    ><br>
    <input type="text" name="name" placeholder="Имя"><br>
    <input type="submit"><br>
</form>
</body>
</html>
