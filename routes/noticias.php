<?php

$this->get('noticias', function($params){
    $tpl = $this->core->loadModule('template');
    $db = $this->core->loadModule('database');

    $sql = $db->query('SHOW TABLES');
    $array = $sql->fetchAll();

    print_r($array);

    $tpl->render('teste');
});
$this->get('noticias/{id}', function($params){});