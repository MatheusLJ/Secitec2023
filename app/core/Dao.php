<?php

namespace Mxtheus\Secitec2023\core;

abstract class Dao{
    protected \PDO $conexao;

    public function __construct(){
        $servidor = BD['servidor'];
        $banco = BD['banco'];
        $usuario = BD['usuario'];
        $senha = BD['senha'];

        $string ="mysql:host={$servidor};dbname={$banco}";
        $this->conexao = new \PDO($string, $usuario, $senha);
    }

    public abstract function inserir($model);
    public abstract function mostarTodos():array;
}