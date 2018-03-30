<?php
$name = $_POST['user_id'];
$password = $_POST['user_password'];

echo "ID : " .$name.'<br>';
echo "PASSWORD : ".$password."<br>";

echo "암호화된 비밀번호 : ".hash('sha256', $password);

?>