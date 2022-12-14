<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="./public/css/main.css" rel="stylesheet">
</head>

<?php
// define variables and set to empty values
$nameErr = $pwdErr = "";
$name = $pwd = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    }

    if (empty($_POST["password"])) {
        $pwdErr = "Password is required";
    }
}

function test_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

?>

<body>
<div class="form">
    <div class="form__box">
        <div class="form__left">
            <div class="form__padding"><img class="form__image"
                                            src="https://th.bing.com/th/id/R.2174b84a01c113febd3cbf569fc85fcc?rik=aeaFE%2b0TMh7OKQ&riu=http%3a%2f%2fcdn.notonthehighstreet.com%2ffs%2fb7%2f57%2f6ed1-fb8d-4bf1-8d27-a7752439109e%2foriginal_to-do-list-sticky-notes.jpg&ehk=FXXbs7VUPvHRps7tU5maa95%2fTUReu1358154UgtUWp4%3d&risl=&pid=ImgRaw&r=0"/>
            </div>
        </div>
        <div class="form__right">
            <div class="form__padding-right">
                <form action="login" method="post">
                    <h1 class="form__title">Member Login</h1>
                    <input class="form__name" type="text" placeholder="Name" name="name"
                           value="<?= $_COOKIE['name'] ?? '' ?>"/>

                    <?php
                        echo $nameErr;
                    ?>


                    <input class="form__password" type="password" placeholder="******" name="password"
                           value="<?= $_COOKIE['password'] ?? '' ?>"/>

                    <?php
                        echo $pwdErr;
                    ?>

                    <input class="form__submit-btn" type="submit" value="Login"/>
                    <div class="remember">
                        <input type="checkbox" <?= $_COOKIE['rm'] ? 'checked' : '' ?> id="remember" name="rm"
                               class="form__checkbox"/>
                        <label for="remember">Remember</label>
                    </div>
                </form>
                <p><a class="form__link" href="register">Create your account</a></p>
            </div>
        </div>
    </div>
</div>
</body>

</html>