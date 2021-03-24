jQuery.noConflict();
jQuery(document).ready(function($){

    $('.dropdown-sub', this).click(function(e){
        $('.dropdown-menu', this).toggleClass('show');
    })
    $(document).on('click', '.dropdown', function (e) {
        e.stopPropagation();
    });

    //Mobile Menu
    $('.navbar-toggle, .mobile-menu-close').click(function(){
        if ($('.navbar-collapse, .mobile-menu-close').hasClass('opened')) {
            $('.navbar-collapse, .mobile-menu-close').removeClass('opened');
        } else {
            $('.navbar-collapse, .mobile-menu-close').addClass('opened');
        }

    })

    //Mobile Menu
    $('.navbar-toggler, .mobile-menu-close').click(function(){
        if ($('.navbar-collapse, .mobile-menu-close').hasClass('opened')) {
            $('.navbar-collapse, .mobile-menu-close').removeClass('opened');
        } else {
            $('.navbar-collapse, .mobile-menu-close').addClass('opened');
        }
    })

    // Add Bootstrap 'img-responsive; class to all images on pages and posts
    $('#main .entry-content img').each(function(){
        $(this).addClass('img-fluid');
    });

    // Remove any search field values
    $('input.search-field').val('');
    
    // Remove rel="next" rel="prev" from post navigation links
    $(".nav-links .nav-previous a, .nav-links .nav-next a").removeAttr('rel');
    //Init AOS Entrance Animation
    AOS.init();

    $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fas").addClass("fa-chevron-down").removeClass("fa-chevron-right");
    });

    $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fas").removeClass("fa-chevron-right").addClass("fa-chevron-down");
    }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fas").removeClass("fa-chevron-down").addClass("fa-chevron-right");
    });
});