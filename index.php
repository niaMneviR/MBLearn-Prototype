<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $url = ["course-admin.html", "learner.html", "system-admin.html"];
        $learner = "learner.html";
        $email = $_POST["Email"];
        $arrEmail = explode("@", $email);
        $userType = $arrEmail[0];
        
        if(strtolower($userType) == "systemadmin"){
            header("Location: ".$url[2]);
            die();
        } else if(strtolower($userType) == "courseadmin"){
            header("Location: ".$url[0]);
            die();
        } else {
            header("Location: ".$url[1]);
            die();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assests/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style/index.css">
    <script src="https://kit.fontawesome.com/fe68db5ba2.js" crossorigin="anonymous"></script>
    <title>MBLearn Login</title>
</head>
<body>
    <main>
        <section>
            <article class="logo">
                <img src="./style/assests/Full_Logo.svg" alt="" id="logo">
            </article>
            <article class="text_area1">
                <p>Prepare For Success,</p>
                <p>Access Your Training!</p>
            </article>
            <article class="form_group">
                <form action="" method="POST" class="flex-column">
                    
                    <label for="Email">Email Address</label>
                    <div class="email">
                        <input type="email" name="Email" required>
                        <i class="icon fa-solid fa-user"></i>
                    </div>

                    <label for="Password">Password</label>
                    <div class="pass">
                        <input type="password" name="Password" required>
                        <i class="icon fa-solid fa-key"></i>
                    </div>

                    <div class="check">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>

                    <input type="submit" value="LOGIN">
                </form>
            </article>
            <article class="text_area2">
                <p>Forgot your password? <a href="">Let"s Reset it!</a></p>
            </article>
        </section>
    </main>
</body>

<script>
    function updatelogo(){
        const logo = document.getElementById("logo");
        const width = window.innerWidth;

        if(width <= 480){
            logo.src = "./style/assests/Small_Logo.svg"
        }else{
            logo.src = "./style/assests/Full_Logo.svg"
        }
    }

    window.addEventListener("load", updatelogo)
    window.addEventListener("resize", updatelogo)
</script>
</html>