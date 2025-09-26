<?php
//constantes de conexao com o banco
define('host', 'localhost'); // servidor do banco de dados
define('user', 'root'); // usuário do mysql
define('pass', ''); //senha de acesso ao mysql
define('db', 'empresa'); // nome da base de dados do banco

$conn = mysqli_connect(host, user, pass, db);

if(!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());

}

?>