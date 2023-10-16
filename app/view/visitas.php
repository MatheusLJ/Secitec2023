<?php require VIEW."/topo.php" ?>
<div class="box">
    <div class="lista">
        <h1>Visitantes</h1>
        <ul>
            <?php foreach ($visitantes as $visitante) { ?>
                <li><?=$visitante->getData("br")?> - <?=$visitante->getNome()?></li>
            <?php } ?>
        </ul>
    </div> 
    
    <div class="imagem"></div>
</div>
<?php require VIEW."/rodape.php" ?> 