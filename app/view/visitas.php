<?php require VIEW."/topo.php" ?> 
    <ul>
        <?php foreach ($visitantes as $visitante) { ?>
            <li><?=$visitante->getData("br")?> - <?=$visitante->getNome()?></li>
        <?php } ?>
    </ul>
<?php require VIEW."/rodape.php" ?> 