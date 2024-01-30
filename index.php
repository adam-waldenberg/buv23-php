<?php
require_once 'autoload.php';

$data = new Data();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    switch ($_POST['action']) {
        case 'Get All':
            (new DataView ())->display($data->get());
            break;
        case 'Sort Ascending':
            (new DataView ())->display($data->sortData(true));
            break;
        case 'Sort Descending':
            (new DataView ())->display($data->sortData(false));
            break;
        case 'randomGet':
            (new DataView ())->display($data->randomGet());
            break;
        // Add more cases for other functions
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
         .navMenu {
            background: none;
            color: inherit;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            outline: inherit;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="submit" class="navMenu" name="action" value="Get All">
        <input type="submit" class="navMenu" name="action" value="Sort Ascending">
        <input type="submit" class="navMenu" name="action" value="Sort Descending">
        <input type="submit" class="navMenu" name="action" value="randomGet">
        <!-- Add more buttons for other functions -->
        <div class="dot"></div>
    </form>
</body>
</html>