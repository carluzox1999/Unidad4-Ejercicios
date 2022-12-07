<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <title>Aparcamiento</title>
</head>
<body>
    <script type="text/javascript">

        function calcularPrecio(){
            // Obtener la fecha y hora de entrada del usuario
            let fechaEntrada = document.getElementById("fechaEntrada").value;
            // Comprobar que el formato de la fecha es correcto
            if(!fechaEntrada.match(/^\d{2}\/\d{2}\/\d{4}-\d{2}:\d{2}$/)){
                alert("Formato de fecha incorrecto. Ejemplo: dd/mm/aaaa-hh:mm");
                return;
            }
            // Mostrar la fecha y hora actual
            let fechaActual = new Date();
            var fechaFormateada = fechaActual.getDate() + '/' + (fechaActual.getMonth() + 1) + '/' + fechaActual.getFullYear() + '-' + fechaActual.getHours() + ':' + fechaActual.getMinutes();

            document.getElementById("fechaActual").innerHTML = fechaFormateada;
            // Calcular el precio de la estancia
            let precio = 0;
            let tiempoEstancia = fechaFormateada - fechaEntrada;
            let horasEstancia = tiempoEstancia / 1000 / 60 / 60;
            console.log(tiempoEstancia);
            if (horasEstancia < 1) {
                precio = 1.2;
                document.getElementById("precioEstancia").innerHTML = precio;
            } else {
                precio = 1.2 + (horasEstancia - 1) * 1.5;
                document.getElementById("precioEstancia").innerHTML = precio;
                if (precio > 20) {
                    precio = 20;
                    document.getElementById("precioEstancia").innerHTML = precio;
                }
            }
        }
    </script>

     <div class="container">
        <div class="justify-content-center align-items-center">
            <h6 class="text-center display-3">Aparcamiento</h6>
            <hr>
            <div class="justify-content-center">
                <div class="border border-warning">
                    <p class="text-center display-6">Horarios</p>
                    <div class="p-2 text-center">
                        <label for="entrada">Entrada:</label>
                        <input type="text" id="fechaEntrada" placeholder="dd/mm/aaaa-hh:mm" />                    
                    </div>
                    <div class="p-2 text-center">
                        <label for="entrada">Salida</label>
                        <!-- <input type="text" name="entrada" id="fechaActual"> -->
                        <span id="fechaActual"></span>
                    </div>
                </div>
                <div class="border border-warning">
                    <p class="text-center display-6">Precio</p>
                    <div class="p-2 text-center">
                        <label for="entrada">Precio</label>
                        <!-- <input type="text" name="entrada" id="precioEstancia"> -->
                        <span id="precioEstancia"></span>
                    </div>
                </div>
                <div class="border border-warning">
                    <div class="d-flex justify-content-center">
                        <button class="p-2 mx-2 col-4 btn btn-success" onclick="calcularPrecio()">Precio</button>
                        <button class="p-2 mx-2 col-4 btn btn-success" onclick="reiniciar()">Reiniciar</button>
                    </div>
                </div>
            </div>
        </div>
     </div>   


    <script src="./JS/bootstrap.min.js"></script>
</body>
</html>