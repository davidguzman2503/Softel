<?php
require_once '../model/loginmodel.php';
    $user=$_POST['username'];
      $pass=$_POST['password'];

$llamar = new login ();
$call = $llamar -> sesion( $user, $pass);
if ($call == true ) {
    session_start();
    print_r( $user);
    $_SESSION['usname'];
}
else {
         echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
}