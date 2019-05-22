<?php

    if (!empty($_GET["number1"]) and !empty($_GET ["action"]) and !empty($_GET ["number2"])) {
        if($_GET["action"] == "+") {
            echo $_GET["number1"] + $_GET["number2"];
        }
        if($_GET["action"] == "-") {
            echo $_GET["number1"] - $_GET["number2"];
        }
        if($_GET["action"] == "*") {
            echo $_GET["number1"] * $_GET["number2"];
        }
        if($_GET["action"] == "/") {
            echo $_GET["number1"] / $_GET["number2"];
        }

    }
?>

<html>
    <body>
        <form>
            <input type="text" name="number1" required>
            <select name="action">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="number2">
            <br>
            <input type="submit">
        </form>
    </body>
</html>
