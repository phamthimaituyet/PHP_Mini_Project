<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="./public/css/main.css" rel="stylesheet">
</head>

<body>


<div>


    <input
            placeholder="Create new note"
            type="submit">

    <?php

    if (!empty($notes)) {
        echo "<h3>Your Note</h3>";
        echo "<ul>";
        foreach ($notes as $note) {
            echo "<li>EHlo<button>Delete</button></li>";
        }
        echo "</ul>";
    } else {
        echo("No note here");
    }

    ?>

</div>


</body>

</html>