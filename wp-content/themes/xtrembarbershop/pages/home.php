<?php

/*
Template name: Accueil
*/

include(__DIR__ . "/header.php");
?>
<?php
$personnalisations = (new WP_Query(array(
    'post_type' => 'personnaliser',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'asc'
)))->posts;
?>
<div class="header">
</div>
<div class="home d-none d-md-block">
    <div class="container">
        <div class="position-title">
            <h1 class="title fw-bold">XTREM BARBERSHOP</h1>
            <p class=" ms-4 subtitle">Ton BarberShop à Bayonne</p>
            <a href="#tarifs" class="btn btn-primary font-title ms-4"><i class="fas fa-calendar-alt"></i>&nbsp; &nbsp;Réserver</a>
            <a class="btn btn-primary font-title ms-4" href="tel:<?php echo (get_post_meta($personnalisations[0]->ID, 'numero_de_telephone', true)); ?>"><i class="fas fa-phone-alt"></i> &nbsp;Téléphoner</a>
        </div>

    </div>
</div>
<div class="home-mobile d-block d-md-none">
    <div class="container">
        <div class="position-title-mobile">
            <h1 class="title fw-bold">XTREM BARBERSHOP</h1>
            <p class=" ms-4 subtitle">Ton BarberShop à Bayonne</p>
            <a href="#tarifs" class="btn btn-primary font-title ms-4"><i class="fas fa-calendar-alt"></i>&nbsp; &nbsp;Réserver</a>
            <a class="btn btn-primary font-title ms-4" href="personnalisertel:<?php echo (get_post_meta($personnalisations[0]->ID, 'numero_de_telephone', true)); ?>"><i class="fas fa-phone-alt"></i> &nbsp;Téléphoner</a>
        </div>

    </div>
</div>
<div class="container mt-5">
    <p class="text-center" id="presentation">
        <?php echo (get_post_meta($personnalisations[0]->ID, 'biographie', true)); ?>
    </p>
</div>
<?php
$prestations = (new WP_Query(array(
    'post_type' => 'prestation',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'asc'
)))->posts;
?>
<div class="container mt-5" id="tarifs">
    <h1 class="fw-bold fs-3">Tarifs et prestations</h1>
    <div class="d-none d-md-block">
        <div class="row mt-4">
            <div class="col-3 text-center">
                <a class="fs-5 link-tarifs link-tarifs-selected" id="coupe">coupe</a>
            </div>
            <div class="col-3 text-center">
                <a class="fs-5 hover-underline-animation-black link-tarifs" id="barbe">barbe</a>
            </div>
            <div class="col-3 text-center">
                <a class="fs-5 hover-underline-animation-black link-tarifs" id="dessin">dessin</a>
            </div>
            <div class="col-3 text-center">
                <a class="fs-5 hover-underline-animation-black link-tarifs" id="couleur">couleur</a>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-block d-md-none px-3">
        <select id="select-tarifs" class="form-select" aria-label="Default select example">
            <option selected>coupe</option>
            <option value="barbe" id="barbe">barbe</option>
            <option value="dessin" id="dessin">dessin</option>
            <option value="couleur" id="couleur">couleur</option>
        </select>
    </div>
    <div class="d-flex justify-content-center mt-5 d-none" id="spinner" style="height: 150px;">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <div id="tarifs-coupe" class="d-block tarifs">
        <div class="row mt-4 mt-md-5">
            <?php
            foreach ($prestations as $prestation) {
                if (get_post_meta($prestation->ID, 'type_de_prestation', true) == "coupe") {
            ?>
                    <div class="col-6 col-md-8 py-2 mt-2">
                        <span class="fw-bold"><?php echo $prestation->post_title; ?></span>
                    </div>
                    <div class="col-2 text-end py-2 mt-2">
                        <span><?php echo (get_post_meta($prestation->ID, 'prix', true)); ?>&nbsp;€</span>
                    </div>
                    <div class="col-3 col-md-2 py-2">
                        <a class="fs-6 btn btn-primary" href="personnalisertel:<?php echo (get_post_meta($personnalisations[0]->ID, 'numero_de_telephone', true)); ?>">Réserver</a>
                    </div>
                    <hr />
            <?php
                }
            }
            ?>
        </div>
    </div>
    <div id="tarifs-barbe" class="d-none tarifs">
        <div class="row mt-4 mt-md-5">
            <?php
            foreach ($prestations as $prestation) {
                if (get_post_meta($prestation->ID, 'type_de_prestation', true) == "barbe") {
            ?>
                    <div class="col-6 col-md-8 py-2 mt-2">
                        <span class="fw-bold"><?php echo $prestation->post_title; ?></span>
                    </div>
                    <div class="col-2 text-end py-2 mt-2">
                        <span><?php echo (get_post_meta($prestation->ID, 'prix', true)); ?>&nbsp;€</span>
                    </div>
                    <div class="col-3 col-md-2 py-2">
                        <a class="fs-6 btn btn-primary" href="personnalisertel:<?php echo (get_post_meta($personnalisations[0]->ID, 'numero_de_telephone', true)); ?>">Réserver</a>
                    </div>
                    <hr />
            <?php
                }
            }
            ?>
        </div>
    </div>
    <div id="tarifs-dessin" class="d-none tarifs">
        <div class="row mt-4 mt-md-5">
            <?php
            foreach ($prestations as $prestation) {
                if (get_post_meta($prestation->ID, 'type_de_prestation', true) == "dessin") {
            ?>
                    <div class="col-6 col-md-8 py-2 mt-2">
                        <span class="fw-bold"><?php echo $prestation->post_title; ?></span>
                    </div>
                    <div class="col-2 text-end py-2 mt-2">
                        <span><?php echo (get_post_meta($prestation->ID, 'prix', true)); ?>&nbsp;€</span>
                    </div>
                    <div class="col-3 col-md-2 py-2">
                        <a class="fs-6 btn btn-primary" href="personnalisertel:<?php echo (get_post_meta($personnalisations[0]->ID, 'numero_de_telephone', true)); ?>">Réserver</a>
                    </div>
                    <hr />
            <?php
                }
            }
            ?>
        </div>
    </div>
    <div id="tarifs-couleur" class="d-none tarifs">
        <div class="row mt-4 mt-md-5">
            <?php
            foreach ($prestations as $prestation) {
                if (get_post_meta($prestation->ID, 'type_de_prestation', true) == "couleur") {
            ?>
                    <div class="col-6 col-md-8 py-2 mt-2">
                        <span class="fw-bold"><?php echo $prestation->post_title; ?></span>
                    </div>
                    <div class="col-2 text-end py-2 mt-2">
                        <span><?php echo (get_post_meta($prestation->ID, 'prix', true)); ?>&nbsp;€</span>
                    </div>
                    <div class="col-3 col-md-2 py-2">
                        <a class="fs-6 btn btn-primary" href="personnalisertel:<?php echo (get_post_meta($personnalisations[0]->ID, 'numero_de_telephone', true)); ?>">Réserver</a>
                    </div>
                    <hr />
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="container mt-5 d-none d-md-block">
    <h1 class="fw-bold fs-3 mb-4">Mon instagram</h1>
    <?php
    echo do_shortcode("[instagram-feed feed=1]");
    ?>
</div>
<div class="container mt-5 d-block d-md-none">
    <h1 class="fw-bold fs-3 mb-4">Mon instagram</h1>
    <?php
    echo do_shortcode("[instagram-feed feed='2']");
    ?>
</div>
<?php include(__DIR__ . "/footer.php");
