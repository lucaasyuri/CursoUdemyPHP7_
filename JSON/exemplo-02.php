<?php 

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Lucas","idade":24}]';

$data = json_decode($json, true); //transforma o 'JSON' em array

var_dump($data);

 ?>