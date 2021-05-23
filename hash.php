<?php

$password = password_hash('password', PASSWORD_DEFAULT); // Parametro de criptografia hash para a senha passada!

echo $password . PHP_EOL; // Exibindo o hash! (Senha criptografada).

if (password_verify('password', $password)) { // Verificando se a string 'password' é igual a senha passada em $password.
    echo "Login!" . PHP_EOL;
} else {
    echo "Password incorrect!!" . PHP_EOL; 
}