<?php

namespace Mxtheus\Secitec2023\controller;
class ErroController{
    function erro404(){
        $dados = [
            'titulo' => TITULO
        ];
        view("404", $dados);
    }
}