<?php
include ('panggil.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

$penentu=false;
$user_inp = $_POST['username'] ?? null; 
$pass_inp = $_POST['pass'] ?? null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $SsQL = "SELECT * FROM login_data ORDER BY id DESC";
    $result = $conn->query($SsQL);

    if ($result) {
        while ($cobaab = $result->fetch_row()) {
            $username_data = $cobaab[1];
            $pass_data = $cobaab[2];

            if ($user_inp==$username_data&&$pass_inp == $pass_data) {
                @$penentu=true;
            }
        }
        if ($penentu) {
             echo "<script>alert('benar')</script>";
              header("Location: dashboard.php");
                 exit(); 
           } else {
             echo "<script>alert('salah')</script>";
         }

    } else {
        echo "Error: " . $conn->error;
    }
}
?>