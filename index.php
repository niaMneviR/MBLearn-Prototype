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
