<?php

namespace Mxtheus\Secitec2023\model;

class VisitaDao extends \Mxtheus\Secitec2023\core\Dao{
    protected $tabela = "visitantes";

    public function inserir($model):bool{
        $sql = "INSERT INTO {$this->tabela} (nome, data) VALUES (?,?)";
        $sqlpreparado = $this->conexao->prepare($sql);
        $sqlpreparado->bindValue(1, $model->getNome());
        $sqlpreparado->bindValue(2, $model->getData());
        $sqlpreparado->execute();
        return true;
    }

    public function mostarTodos(): array{
        $sql = "SELECT *FROM {$this->tabela}";
        $sqlpreparado = $this->conexao->prepare($sql);
        $sqlpreparado->execute();
        $resultado = $sqlpreparado->fetchAll(\PDO::FETCH_CLASS,Visita::class);
        return $resultado;
    }
}