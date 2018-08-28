jQuery(document).ready(function( $ ) {
    if($('div.container-fluid').is(':not(.t-bg-collection)')){
        $('div.container-fluid').removeClass('container-fluid').toggleClass('container mx-auto');
    }
    if($('.margin-one-column').is(':not(.t-collection--info)')){
        $('.margin-one-column').removeClass('margin-one-column').toggleClass('container mx-auto');
    }
});