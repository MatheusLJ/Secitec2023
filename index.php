<?php

require "vendor/autoload.php";
require "./config.php";
require "./util.php";

$url = $_GET['url'] ?? "/";

use \Mxtheus\Secitec2023\controller\{VisitaController, ErroController};

switch ($url) {
    case '/':
        $controlador = new VisitaController();
        $controlador->index();
        break;
    case "visitas":
        $controlador = new VisitaController();
        $controlador->visitas();
        break;
    case "salvar":
        $controlador = new VisitaController();
        $controlador->salvar();
        break;
    default:
        $controlador = new ErroController();
        $controlador->erro404();
        break;
}

