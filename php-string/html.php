<?php
$nome = 'campo';

?>

<!--  addslashes =  foi por algum tempo uma solução eficaz para escapar determinados caracteres na inserção de dados em banco de dados.   -->
<input type = "text" name = "<?php addslashes($nome); ?>" />
<input type = "submit" name = "Enviar">


<!-- Com a evolução do PHP novas funções foram desenvolvidas para tratamento de dados e conexão com bancos. São exemplos disto a conexão via PDO, ou a utilização da classe MySQLi. Conectar-se ao MySQL com estas duas novas classes se tornou uma prática mais atual, segura e fácil. -->
