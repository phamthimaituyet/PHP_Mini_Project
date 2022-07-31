<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="./public/css/main.css" rel="stylesheet">
</head>

<body>
    <div class="form">
        <div class="form__box">
            <div class="form__left">
                <div class="form__padding"><img class="form__image"
                        src="https://th.bing.com/th/id/R.2174b84a01c113febd3cbf569fc85fcc?rik=aeaFE%2b0TMh7OKQ&riu=http%3a%2f%2fcdn.notonthehighstreet.com%2ffs%2fb7%2f57%2f6ed1-fb8d-4bf1-8d27-a7752439109e%2foriginal_to-do-list-sticky-notes.jpg&ehk=FXXbs7VUPvHRps7tU5maa95%2fTUReu1358154UgtUWp4%3d&risl=&pid=ImgRaw&r=0" /></div>
            </div>
            <div class="form__right">
                <div class="form__padding-right">
                    <form action="register" method="post">
                        <h1 class="form__title">Member Login</h1>
                        <input class="form__name" type="text" placeholder="Name" name="name" value="" />
                        <input class="form__password" type="text" placeholder="******" name="password" value="" />
                        <input class="form__submit-btn" type="submit" value="Singup" />
                    </form>
                    <p> <a class="form__link" href="login">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>