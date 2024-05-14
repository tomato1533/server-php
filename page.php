<?php
if ($_REQUEST["name"]) {
    $name = $_REQUEST["name"];
    $message = $_REQUEST["message"];
    if ($message) {
        $file_w = fopen("test.txt", "a");
        fwrite($file, $name.":"."$message");
        fclose($file);
    }
    $file = fopen("test.txt", "r");
    while (!feof($file)) {
        $line = fgets($file);
        echo "<h1>$line</h1>";
    }
    fclose($file);
}
if ($_REQUEST["user_name"]) {
    $user_name = $_REQUEST["user_name"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="gray-tag">
            <h1></h1>
        </div>
        <div class="input">
            <form action="page.php">
                <label for="name">name</label>
                <input type="text" name="name">
                <label for="name">message</label>
                <input type="text" name="message">
                <input type="submit">
            </form>
        </div>
    </main>
</body>
</html>