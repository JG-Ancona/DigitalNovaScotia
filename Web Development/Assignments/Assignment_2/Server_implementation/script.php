<?php
session_start();

$_SESSION['Form_user'] = $_POST;

if($_POST["First_name"] != "" && $_POST["Last_name"] != ""){
    
    if (isset($_POST['sub'])) {
        $Rol = $_POST['Rol'];
        //echo $Rol;

        switch ($Rol) {
            case 'Admin':
                header("Location:admin_page.php");

                break;


            case 'Manager':
                header("Location:admin_page.php");

                break;


            case 'CEO':
                header("Location:ceo_page.php");

                break;

            default:
                # code...
                break;
        }

    }
}
else{
    header("Location:login_page.php");
}
?>