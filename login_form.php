<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up and login form </title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/81b4f143c3.js" crossorigin="anonymous"></script>
</head>
<body>
<?php 
include "nav.html";
?>
    <div class="container">
        <div class="form-box">
            <h1 id="title">
                Sign Up
            </h1>
            <form action="login.php" method="get"  id="myForm">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="name" placeholder="name">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" name="email" placeholder="email">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="password">
                    </div>
                </div>
                <p>Lost Password <a href="#">Click Here!</a></p>
                <div class="btn-field">
                    <button type="submit" id="login">Login in</button>
                    <button type="submit" id="signUp" class="disable">Sign Up</button>
                </div>
            </form>

        </div>
    </div>
</body>

<script>
    let signUpBtn = document.getElementById("signUp")
    let login = document.getElementById("login")
    let title = document.getElementById("title")
    let nameField = document.getElementById("nameField")

    signUpBtn.onclick = () => {

        if (signUpBtn.classList.contains("disable")) {
            nameField.style.maxHeight = "0";
            title.innerHTML = "SignUp";
            login.classList.add("disable");
            signUpBtn.classList.remove("disable");
            var myForm = document.getElementById('myForm');
            myForm.action = "signup.php";
            return false;
        }
        else {
            return true
        }

    }

    login.onclick = () => {
        if (login.classList.contains("disable")) {
            nameField.style.maxHeight = "64px";
            title.innerHTML = "Login";
            signUpBtn.classList.add("disable");
            login.classList.remove("disable");
            var myForm = document.getElementById('myForm');
            myForm.action = "login.php";
            return false;
        }
        else {
            return true;
        }
    }


</script>

</html>