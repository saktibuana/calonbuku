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

// semua fungsi di halaman category
    const modal = new Modal('#category-modal');
    $('#btn-add-new').click(function (e) {
        e.preventDefault();
        // modal.show()
        Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
            )
    });
    $('#btn-close').click(function (e) {
        e.preventDefault();
        modal.hide()
    });

    $('#btn-proses').click(function (e) { 
        e.preventDefault();
        let token   = $("meta[name='csrf-token']").attr("content");
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })
        $.ajax({
            type: "POST",
            url: "postAjax",
            data: {
            'name':$('#category-name').val(),
            'description':$('#category-description').val(),
            },
            dataType: "JSON",
            success: function (response) {
                if(response.success){
                    Swal.fire(
                        'Good job!',
                        'You clicked the button!',
                        'success'
                        )
                }
            }, error: function(xhr, throwError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + throwError);
            }
        });
    });
    // end fungsi
});