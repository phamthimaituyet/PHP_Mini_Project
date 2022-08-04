<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="./public/css/home.css" rel="stylesheet">

</head>

<body class="p-3">

    <div id="app">
        <h1>To do notes</h1>
        <form action="/php/home/create">
            <div class="form-group">
                <input type="text" class="form-control" id="inputUser" name="create-note"
                    placeholder="Create new note" />
                <input type="submit" value="Create" class="btn_add" />
            </div>
        </form>

        <h3>Your Note</h3>
        <?php

if (!empty($notes)) {
    echo "<form>";
    echo "<ul>";

    foreach ($notes as $note) {
        echo "<li>
                    <p class='fst-italic'>
                    " . $note['content'] . "
                    </p>
                    <div>
                    <button
                    class='btn btn-danger'
                    type='submit' 
                    formaction='/php/home/delete' 
                    name='delete'
                    value='" . $note['id'] . "'>
                    Delete
                    </button>
                    
                    <button 
                    class='btn btn-warning'
                    type='submit' 
                    formaction='/php/home/toEdit'
                    value='" . $note['id'] . "'
                    name='note_id'>
                    Edit
                    </button>
                    </div>
                </li>";
    }
    echo "</ul>";
    echo "<form/>";
} else {
    echo("You have no note, enter a new note!");
}

?>

    </div>



</body>

</html>