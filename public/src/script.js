
$(document).ready(function () {
    // fungsi halaman layout welcome
    $('#btn-menu').click(function (e) { 
        e.preventDefault();
        $('#menu').removeClass('hidden');
    });
    $('#btn-menu-close').click(function (e) { 
        e.preventDefault();
        $('#menu').addClass('hidden');
    });
    // end fungsi


        
});