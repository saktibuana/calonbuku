$(document).ready(function () {
    $('#btn-menu').click(function (e) { 
        e.preventDefault();
        $('#menu').removeClass('hidden');
    });
    $('#btn-menu-close').click(function (e) { 
        e.preventDefault();
        $('#menu').addClass('hidden');
    });
});