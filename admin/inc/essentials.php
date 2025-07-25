<?php

function adminLogin(){
    if(isset($_SESSION['admin_login']) && $_SESSION['admin_login'] === true){
        redirect('dashboard.php');
       
    } 
}


 function redirect($url)
    {
        echo "<script>location.href='$url'</script>";
        exit();
        
    }

function alert($type, $msg)
{

    $bs_class = ($type == 'error') ? "alert-danger" : "alert-success";


    echo <<<ALERT

   <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
  <strong class="me-3" >$msg</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

ALERT;
}
