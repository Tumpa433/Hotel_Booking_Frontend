<?php

require('inc/essentials.php');
require_once('inc/db_config.php');


adminLogin(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>

    <?php require('inc/links.php'); ?>

    <style>
        div.login-form {

            position: absolute;

            top: 50%;

            left: 50%;

            transform: translate(-50%, -50%);

            width: 400px;

        }
    </style>

</head>

<body class="bg-light">


    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <div class="p-4">
            <h3 class="mb-4">Admin Login</h3>
            <form method="post">
                <div class="mb-3">
                    <input name="admin_name" required type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input name="admin_pass" required type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button name="login" type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>

        <div class="bg-dark text-white p-2">
            <p class="mb-0">Admin Panel</p>
        </div>
    </div>


<?php

if(isset($_POST['login'])){
    $frm_data = filternation($_POST);
    
    $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
    $values = [$frm_data['admin_name'],$frm_data['admin_pass']];


    $res = select($query, $values);

    if($res && count($res) == 1){
        echo "got user";
        
        $_SESSION['admin_login'] = true;
        $_SESSION['admin_id'] = $res[0]['admin_id'];
        redirect('dashboard.php');
    } else {
        alert('error','Login failed! - Invalid credentials.');
    }

}

?>



    <?php require('inc/scripts.php') ?>


</body>

</html>