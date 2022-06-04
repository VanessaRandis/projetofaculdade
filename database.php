<?php
 define("SERVER_LOCAL", "localhost");
 define("SERVER_USER", "root");
 define("SERVER_PASSWORD", "");
 define("DATABASE_NAME", "ads_vanessa_randis");

 //declaar uma variável e atribuir a função de conexão ao banco de dados
 $conexao = mysqli_connect(SERVER_LOCAL, SERVER_USER, SERVER_PASSWORD, DATABASE_NAME)or die ('Não foi possível conectar');