<?php
    require_once('templates/header.php');
    require_once('lib/carte_resto.php');
?>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="./img/interieur restaurant.jpg" alt="interieur Quai Antique" wright="520" height="312">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Découvrez la Gastronomie Savoyarde</></h1>
                    <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus accusantium numquam iste praesentium voluptatem ipsam illum suscipit. Repellat, nam molestias neque nulla sapiente rerum asperiores excepturi pariatur recusandae obcaecati praesentium?</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="reservations.php" class="btn btn-primary btn-lg px-4 me-md-2">Réserver une table</a>
                </div>
            </div>
        </div>

        <div class="row">
            <h2>Les classiques de la carte</h2>
            <?php foreach($plats as $key => $plat) {
                include('templates/carte_templates.php');
            } ?>
        </div>

<?php
    require_once('templates/footer.php');
?>