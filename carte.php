<?php
    require_once('templates/header.php');
    require_once('lib/carte_resto.php');
?>


<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <h1>Carte de Quai Antique</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="reservations.php" class="btn btn-primary btn-lg px-4 me-md-2">Réserver une table</a>
    </div>
</div>

<div class="row">
    <h3>Entrée</h3>
    <?php foreach($carte_entrees as $key => $carte_entree) {
        include('templates/entrée_templates.php');
    } ?>
    <h3>Plats</h3>
    <?php foreach($carte_plats as $key => $carte_plat) {
        include('templates/plats_templates.php');
    } ?>
    <h3>Dessert</h3>
    <?php foreach($carte_desserts as $key => $carte_dessert) {
        include('templates/dessert_templates.php');
    } ?>









<?php
    require_once('templates/footer.php');
?>