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
            placeholder="Create new note">

    <?php

    if (!empty($notes)) {
        echo "<h3>Your Note</h3>";
        echo "<form>";
        echo "<ul>";
        var_dump($notes);
        foreach ($notes as $note) {
            echo "<li>" . $note['content'] . "
                <button type='submit' formaction='/php/home/delete' name='delete' value='". $note['id'] ."'>Delete</button>
                <button type='submit' formaction='/php/home/edit' name='edit'>Edit</button>
                </li>";
        }
        echo "</ul>";
        echo "</form>";
    } else {
        echo("You have no note, enter a new note!");
    }

    ?>

</div>


</body>

</html>