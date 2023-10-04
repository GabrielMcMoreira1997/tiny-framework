<?php
$this->get('', function($params){
    $tpl = $this->core->loadModule('template');
    echo $tpl->render('welcome.twig', ['nome' => 'João',]);
});