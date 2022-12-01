<?php

/*
Template name: Reservation
*/
include(__DIR__ . "/header.php");

// Récupérer type de coupe dans l'url
$service = $_GET['service'];
?>

<div id="booking" class="container">
    <h1 class="mt-4 pt-md-2 mt-md-5">Réservation pour : <?php echo $service; ?></h1>
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

    #fbuilder .slots div {
        display: inline-block;
        border: none !important;
        margin: 5px;
        padding: 1px;
        border-radius: 13px;
    }

    #fbuilder .slots div a {
        background: #ededed;
        box-shadow: none;
        display: inline-block;
        padding: 4px;
        text-decoration: none;
        color: black;
        border-radius: 10px;
    }

    .cancel {
        color: #6e6969;
        text-decoration: none;
    }

    .cancel:hover {
        color: #747474;
        text-decoration: none;
    }

    .ahbfield_service {
        display: none;
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
        $('.pbSubmit').addClass('mt-3');
        //$('.pbSubmit').removeClass('pbSubmit');

        $('div').addClass('text-center');

        $("#booking").removeClass('text-center');

        $('#field_1-1').addClass('mt-4');
        $('#email_1').addClass('mt-1');
        $('#fieldname3_1').addClass('mt-1');

        $('.ahbfield_service').val(30).trigger('change');
    });
</script>