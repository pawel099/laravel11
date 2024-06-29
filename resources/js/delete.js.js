$(function() {
    $('.delete').click(function() {
        Swal.fire({
            title: "confirmDelete",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Tak',
            cancelButtonText: 'Nie'
        }).then((result) => {
            if (result.value) {
                $.ajax({

                    
                     
                    method: "DELETE",

                    data: {
                   "_token": "{{ csrf_token() }}",
                   url: "deleteUrl/" + $(this).data("id")
                   },
                   
                    
                    url: "deleteUrl/" + $(this).data("id")
                })
                .done(function (data) {
                    window.location.reload();
                })
                .fail(function (data) {
                    Swal.fire('Oops...', data.responseJSON.message, data.responseJSON.status);
                });
            }
        })
    });
});

