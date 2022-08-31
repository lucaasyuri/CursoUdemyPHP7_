<?php 

require_once("config.php");

echo session_save_path(); //define caminho para armazenamento da sessão atual

echo "<br>";

var_dump(session_status());

echo "<br>";

switch (session_status()) {

    case PHP_SESSION_DISABLED:
        echo "as sessões estão desabilitadas";
        break;

    case PHP_SESSION_NONE:
        echo "as sessões esiverem habilitadas, mas nenhuma existir";
        break;

    case PHP_SESSION_ACTIVE:
        echo "as sessões estiverem habilitadas, e uma existir";
        break; 

}

 ?>