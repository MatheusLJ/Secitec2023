<?php

function view(string $nome,array $dados = []){
    extract($dados);
    require VIEW."/{$nome}.php";
}