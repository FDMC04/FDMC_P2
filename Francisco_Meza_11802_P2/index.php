<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="login">
        <div align="center"><h1>INICIO DE SESION</h1></div>
        <form action="login.php" method="post" id="login">
            <div class="row">
                <div class="input">
                    <label class="form-label" for="nombreusuario">Nombre de usuario:</label>
                    <input class="form-control" placeholder="Nombre de usuario" type="text" name="nombreusuario" id="Usuario">
                </div>
            </div>
            <div class="row">
                <div class="input">
                    <label class="form-label" for="passwords">Contraseña de usuario:</label>
                    <input class="form-control" placeholder="Contraseña de usuario" type="password" name="passwords" id="passwords">
                </div>
            </div>
            <div class="row buttons">
                <div class="col-md-4">
                    <button class="boton" id="Cancelar">Cancelar</button>
                </div>
                <div class="col-md-4">
                    <button class="boton" type="submit" id="btnlogin">Iniciar sesión</button>
                </div>
            </div>
        </form>
        
    </div>
    <div class="">
        <?php $error = $_GET['error']; ?>
        <input id="inError" type="hidden" value="<?= $error ?>">
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function error(){
            $("#inError")
        }
    </script>

    
    <!-- <script>
        $('#btnlogin').click(function(){
            var nombreusuario = $('#nombreusuario').val();
            var passwords = $('#passwords').val();

            if(nombreusuario == "" || passwords == ""){
                Swal.fire("Existen campos vacios");
            }else{
                $.ajax({
                    url: "login.php",
                    type: "POST",
                    data:{
                        nombreusuario: nombreusuario,
                        passwords: passwords
                    },
                    success: function(response){
                        if(response=="ok"){
                            window.location.href='inicio.php';
                        }else{
                            Swal.fire("Los datos no coinciden");
                        }
                    }
                })
            }
        })
    </script> -->
</body>
</html>