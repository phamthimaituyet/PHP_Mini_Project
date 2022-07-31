<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/login.css" rel="stylesheet">
    <style>
    @import url("https://fonts.googleapis.com/css?family=Ubuntu:700&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Ubuntu", sans-serif;
        text-decoration: none;
    }

    .form {
        width: 720px;
        height: 500px;
        margin: 50px auto;
        padding: 45px 65px;
        background: linear-gradient(to right, #8300cd, #b800c4);
    }

    .form__box {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: space-around;
        align-items: center;
        background: #fff;
        border-radius: 40px;
    }

    .form__left {
        width: 50%;
    }

    .form__padding {
        width: 210px;
        height: 210px;
        background: #f2f2f2;
        border-radius: 50%;
        margin: 0 auto;
        line-height: 210px;
        position: relative;
    }

    .form__image {
        max-width: 100%;
        width: 60%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .form__right {
        line-height: 26px;
        width: 50%;
    }

    .form__padding-right {
        padding: 0 25px;
    }

    .form__title {
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }

    .form__submit-btn {
        background: #1fcc44;
        cursor: pointer;
    }

    .form__submit-btn:hover {
        background: #ff3f70;
    }

    .form__email {
        position: relative;
    }

    input {
        display: block;
        width: 100%;
        margin-bottom: 25px;
        height: 35px;
        border-radius: 20px;
        border: none;
        background: #f2f2f2;
        padding: 10px;
        font-size: 14px;
        position: relative;
    }

    input:after {
        position: absolute;
        content: "a***";
    }

    a {
        color: #71df88;
        position: relative;
    }

    a:hover {
        color: #ff3f70;
    }
    </style>
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
                    <p> <a class="form__link" href="">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>