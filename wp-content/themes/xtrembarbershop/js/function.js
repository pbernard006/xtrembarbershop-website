$(document).ready(function () {
    /*$(window).scroll(function () {
        if ($(this).scrollTop() > 80) {
            $('.nav-fixed').removeClass('navbar-dark');
            $('.nav-fixed').addClass('nav-dark');
            $('.nav-fixed').removeClass('bg-transparent');
        } else {
            $('.nav-fixed').addClass('navbar-dark');
            $('.nav-fixed').removeClass('nav-dark');
            $('.nav-fixed').addClass('bg-transparent-transition');
        }
    });*/

    $('.link-tarifs').click(function () {
        setTarifs($(this).attr('id'));
    });

    $('#select-tarifs').change(function () {
        setTarifs(this.value);
    });

    $('.closed').on('click', function () {
        toggleSlider();
    });

    $('.reservation-mobile').click(function () {
        window.location.href = '#tarifs';
        toggleSlider();
    });

    $('.call-mobile').click(function () {
        window.location.href = 'tel:+33667401495';
        toggleSlider();
    });

    function setTarifs(elem) {
        // Titres
        $('.link-tarifs').addClass('hover-underline-animation-black');
        $('.link-tarifs').removeClass('link-tarifs-selected');

        $('#' + elem).removeClass('hover-underline-animation-black');
        $('#' + elem).addClass('link-tarifs-selected');

        // Tarifs
        $('.tarifs').addClass('d-none');
        $('.tarifs').removeClass('d-block');

        //Spinner
        $('#spinner').removeClass('d-none');

        setTimeout(function () {
            $('#spinner').addClass('d-none');

            $('#tarifs-' + elem).removeClass('d-none');
            $('#tarifs-' + elem).addClass('d-block');
        }, 500);
    }

    function toggleSlider() {
        $('.slider').toggleClass('move');
        if ($('.slider').hasClass('not-displayed')) {
            //Afficher
            $('.nav-fixed').removeClass('navbar-dark');
            $('.nav-fixed').addClass('nav-dark');

            $('.slider').addClass('displayed');
            $('.slider').removeClass('not-displayed');

            $('.closed').removeClass('fa-bars');
            $('.closed').addClass('fa-times');
        } else {
            //Enlever

            if ($(this).scrollTop() > 80) {
                $('.nav-fixed').addClass('navbar-dark');
                $('.nav-fixed').removeClass('nav-dark');
            }

            $('.slider').removeClass('displayed');
            $('.slider').addClass('not-displayed');

            $('.closed').addClass('fa-bars');
            $('.closed').removeClass('fa-times');
        }
    }
});
