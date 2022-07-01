<?php
    $user=$_POST['username'];
    $pass=$_POST['password'];
    //$sumber = "http://app.envilab.co.id/envilabapi?id_customer=.$user.";
    $sumber = "http://app.envilab.co.id/envilabapi/index.php/Get_person?id_customer=$user";

    $konten = file_get_contents($sumber);
    $data = json_decode($konten, true);
    
    foreach ($data as $value) {
        $usernamelogin = $value['id_customer'];
        $passwordlogin = $value['password'];
                                       
    }

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    echo $username;
    echo $password;
   
    if ($username == $usernamelogin && $password == $passwordlogin) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index2.php");
    
    } 
    else {
        header("Location: index.php");
   }
?>