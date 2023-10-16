<?php

namespace Mxtheus\Secitec2023\controller;
use Mxtheus\Secitec2023\model\VisitaDao;
use Mxtheus\Secitec2023\model\Visita;

class VisitaController{

    public function index(){
        $dados = [
            'titulo' => TITULO
        ];
        view("index",$dados);
    }

    public function visitas(){
        $visitaDao = new VisitaDao();
        $visitantes = $visitaDao->mostarTodos();

        $dados = [
            'titulo' => TITULO,
            'visitantes' => $visitantes
        ];
        view("visitas",$dados);
        
    }

    public function salvar(){
        $visita = new Visita();
        $visita->setNome($_POST["nome"] ?? "");
        $visita->setData();

        if ($visita->valida()) {

            $visitaDao = new VisitaDao();
            if ($visitaDao->inserir($visita)) {
                $msg = "Visita cadastrada com sucesso";
            }else{
                $msg = "Erro ao cadastrar uma visita";
            }

        }else{
            $msg = "Dados Inválidos! Nome precisa ter mais de 3 caracteres.";
        }
        
        $dados['titulo'] = TITULO;
        $dados['msg'] = $msg;

        view("mensagem", $dados);
    }
}