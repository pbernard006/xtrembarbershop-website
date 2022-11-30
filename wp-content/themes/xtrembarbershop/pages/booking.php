<?php

/*
Template name: Reservation
*/
include(__DIR__ . "/header.php"); ?>

<div class="container pt-5">
    <h1 class="mt-5">Réservation pour une coupe</h1>
    <?php
    echo do_shortcode(apply_filters('the_content', '[CP_APP_HOUR_BOOKING id="1"]
    ')); ?>

</div>


<style>
    .ahb_m2 #fbuilder td:not(.ui-datepicker-unselectable) a.ui-state-default.ui-state-active {
        color: #FFF;
        background: #52402c;
    }

    .ahb_m2 #fbuilder td:not(.ui-datepicker-unselectable) a.ui-state-default:hover {
        color: #FFF;
        background: #52402c;
    }

    .ahb_m #fbuilder .ui-datepicker-calendar .ui-state-active {
        width: 50%;
        border-radius: 50px;
        background: #f8f8f8;
        color: #000;
        border: 1px solid #52402c;
        text-decoration: none;
        height: 100%;
    }

    .ui-datepicker-calendar .ui-state-hover {
        width: 50% !important;
        border-radius: 50px !important;
        background: #f8f8f8 !important;
        color: #000 !important;
        border: 1px solid #52402c !important;
        text-decoration: none !important;

    }

    .ahb_m2 #fbuilder .slots div:not(.htmlUsed) a:hover {
        background: #52402c;
        color: #fff;
    }

    .ui-datepicker-title {
        font-size: 1.3em;
    }
</style>

<?php include(__DIR__ . "/footer.php"); ?>


<script>
    $(document).ready(function() {
        $('.nav-fixed').removeClass('navbar-dark');
        $('.nav-fixed').addClass('nav-dark');
        $('.nav-fixed').removeClass('bg-transparent');

        $('.pbSubmit').addClass('btn');
        $('.pbSubmit').addClass('btn-primary');
        $('.pbSubmit').removeClass('pbSubmit');

        $('div').addClass('text-center');
    });
</script>