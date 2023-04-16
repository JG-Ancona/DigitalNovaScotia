<?php
session_start();

$_SESSION['Form_user'] = $_POST;


if (isset($_POST['sub'])) {
    $Rol = $_POST['Rol'];
    //echo $Rol;

    switch ($Rol) {
        case 'Admin':
            header("Location:admin_page.php");
            # code...
            break;

        default:
            # code...
            break;
    }


    // if ($name === 'NAME1' and $pass === 'PASS1') {
    //     header("Location:profil.php");
    // } else
    //     echo "Credentials not matched.";
}
?>