<?php
//constantes de conexao com o banco
define('DBHOST', 'localhost'); // servidor do banco de dados
define('DBUSER', 'root'); // usuário do mysql
define('DBPASS', ''); //senha de acesso ao mysql
define('DBBASE', 'empresa'); // nome da base de dados do banco
 
//variavel de conexao com o banco de dados
$conexao = mysqli_connect(DBHOST,DBUSER,DBPASS,DBBASE);
