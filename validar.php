<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Validar correo electronico</title>
</head>
<body>
        <script type="text/javascript">
            function validarEmail(){
                
                var emailUser = document.getElementById('user-email');
                
                var validEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;

                if( validEmail.test(emailUser.value) ){
                    alert('El correo es valido');
                    return true;
                }else{
                    alert('El correo no es valido');
                    return false;
                }
            }
        </script>

    <div class="container p-5">
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="text-center">
                Validar correo
            </h1>
        </div>
        <div class="col-8 mx-auto bg-light p-3 d-flex justify-content-center">
            <!-- Eliguiendo piedra -->
            <form>
                <label for="user-email">Email</label>
                <input type="email" id="user-email" name="userEmail" />
            </form>
        </div>
        
        <div class="mt-4 d-flex justify-content-center">
            <input type="submit" value="Validate" onclick="validarEmail()" />
        </div> 
    </div>

    <script src="./JS/bootstrap.min.js"></script>
</body>
</html>