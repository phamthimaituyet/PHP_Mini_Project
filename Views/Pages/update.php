<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>

</head>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Lato:ital,wght@0,300;0,400;1,300;1,400&display=swap");
    * {
        margin: 0;
        padding: 0;
        outline: 0;
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        user-select: none;
    }
    html,
    body {
        width: 100%;
        /* height: 100vh;   */
    }
    a {
        text-decoration: none;
        color: inherit;
    }
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-color: #f5f5f5;
        font-family: "Lato", sans-serif;
    }
    #app {
        width: 50%;
        min-width: 1000px;
    }
    h1 {
        font-family: "Dancing Script", cursive;
        text-align: center;
        margin-bottom: 50px;
        font-size: 45px;
        color: #335c62;
        font-weight: 700;
    }
    p {
        font-family: "Dancing Script", cursive;
        text-align: center;
        font-size: 30px;
        color: #5c5c5c;
        font-weight: 300;
    }
    ul {
        font-family: "Lato", sans-serif;
        font-size: 20px;
        font-weight: 400;
        font-style: italic;
        /* margin: 30px;   */
        list-style-type: circle;
    }
    ul li {
        margin-bottom: 10px;
        color: #5c5c5c;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 10px;
        background-color: cornsilk;
        border-radius: 8px;
    }
    ul li a {
        margin-left: 15px;
        color: white;
        cursor: pointer;
        border: 1px solid #7cbe7b;
        border-radius: 5px;
        padding: 0 15px 2px 15px;
        background-color: #7cbe7b;
    }
    ul li a:hover {
        opacity: 0.8;
    }
    input,
    button {
        font: 400 20px "Lato", sans-serif;
    }
    input {
        width: 60%;
        height: 40px;
        color: #5c5c5c;
        border: 1px solid #dcdce6;
        border-radius: 8px;
        padding: 0 24px;
        margin-right: 10px;
    }
    .btn_add {
        width: 30%;
        height: 40px;
        border: 1px solid #dcdce6;
        border-radius: 8px;
        background-color: #59a2ad;
        color: #fff;
        cursor: pointer;
    }
    .btn_add:hover {
        opacity: 0.9;
    }

    .btn_add.logout {
        float: right;
    }

    .form-group{
        display: flex;
    }

</style>

<body class="p-3">
<h1 class='fst-italic'>Edit Your Note</h1>


<form action="/php/home/edit">
    <div id="app" class="form-group">
        <input type="hidden" name="note_id" value="<?php echo $_GET['note_id']; ?>"/>
        <?php
        if (isset($note)) {
            echo "
    <input 
    type='text' 
    class='form-control' 
    id='inputUser' 
    name='edit_content' 
    placeholder='Write something' 
    value='$note->content'
    />";
        }
        ?>

        <input type="submit" value="Update" class="btn btn-primary"/>
    </div>
</form>
</body>

</html>