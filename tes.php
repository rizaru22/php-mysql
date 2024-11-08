<?php

$pass1=password_hash('123',PASSWORD_BCRYPT);
$pass2=password_hash('123',PASSWORD_BCRYPT);

echo $pass1."<br>";
echo $pass2."<br>";

if(password_verify('123',$pass1)){
    echo "valid";
}else{
    echo "invalid";
}