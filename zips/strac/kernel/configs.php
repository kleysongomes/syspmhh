<?php 
define("HOST", "localhost");
define("USER", "desbra66_pmhh");
define("PASS", "pmhh70111665485");
define("DB", "desbra66_syspmhh");

$conn = mysqli_connect(HOST, USER, PASS, DB) or die("Não foi possível conectar-se ao banco de dados");

$titulo_site = "System PMHH";
$imagem_site = "https://www.habbo.com.br/habbo-imaging/badge/b08124s36044s40014s93113s90115c80ed367f6b4c085800ae08094253959.gif";

?>