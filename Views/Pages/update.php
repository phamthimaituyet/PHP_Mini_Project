<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body class="p-3">
<h3>Your Note</h3>


<form action="/php/home/edit">
    <div class="form-group">
        <input type="hidden" name="note_id" value="<?php echo $_GET['note_id']; ?>" />
        <input type="text" class="form-control" id="inputUser" name="edit_content" placeholder="update content here"/>
        <input type="submit" value="Update" class="btn btn-primary mt-1"/>
    </div>
</form>
</body>

</html>