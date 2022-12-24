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
    const targetEl = document.getElementById('category-modal');
    const modal = new Modal(targetEl);
    $('#btn-add-new').click(function (e) {
        e.preventDefault();
        modal.show()
    });
    $('#btn-close').click(function (e) {
        e.preventDefault();
        $('#category-name').val('')
        $('#category-description').val('')
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
            url: "category",
            data: {
            'name':$('#category-name').val(),
            'description':$('#category-description').val(),
            },
            dataType: "JSON",
            success: function (response) {
                let result = response.errors
                if(result){
                    $('#notif').html(`<h1>${result.name}</h1>`)
                    $('#notif').html(`<h1>${result.description}</h1>`)
                }
                if(response.success){
                    modal.hide()
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'middle-center',
                        showConfirmButton: false,
                        timer: 1000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      })
                      
                      Toast.fire({
                        icon: 'success',
                        title: response.success
                      })
                      location.reload()
                }
            }, error: function(xhr, throwError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + throwError);
            }
        });
    });
    // end fungsi
});