<?php

$this->get('noticias', function($params){

    $tpl = $this->core->loadModule('template');

    echo $tpl->render('index.html', ['nome' => 'João',]);
});

$this->get('noticias/{id}', function($params){});