<?php extract($_POST); ?>

<section class="content-header">
    <h1>
        <?php if(isset($t)) echo strtoupper($t); ?>
    </h1>
</section>

<section class="content">
    <?php
    if (isset($p) && isset($c)){
        include_once ($c ."/" . $p . ".php");
    }
    else {
        echo "BIENVENIDO";
    }
    ?>
</section>