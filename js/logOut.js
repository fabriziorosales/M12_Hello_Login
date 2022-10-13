var alertaLogOut = function() {
    Swal.fire({
        title: 'Estas seguro que quieres cerrar la sesión?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Cerrada!',
            )
            window.location.href = "../proc/logOut.php"
        } else {
            window.location.href = "../vistas/bienvenido.php"
        }
    })
}