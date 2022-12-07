<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Vectores</title>
</head>
<body>
    <script type="text/javascript">
        function verElementos(){
            let elementos = document.getElementById("textarea").value;

            alert(elementos);
        }

        // Función para ordenar los elementos
        function ordenarElementos() {
            let elementos = document.getElementById('textarea').value;

            let arrayElementos = elementos.split(' ');
            
            let ordenado = arrayElementos.sort(function (a, b) {
            let A = a.toLowerCase(), B = b.toLowerCase();
            if (A < B) return -1;
            if (A > B) return 1;
            return 0;
            });
            
            document.getElementById('textarea').value = ordenado.join(' ');
        }

        // Función para desordenar los elementos
        function desordenarElementos() {
            let elementos = document.getElementById('textarea').value;

            let arrayElementos = elementos.split(' ');
            
            let desordenado = arrayElementos.sort(function(){return 0.5 - Math.random()});
            
            document.getElementById('textarea').value = desordenado.join(' ');
        }

    </script>

    <div class="container">
        <div class="justify-content-center align-items-center">
            <p class="text-center display-3">
                Trabajar con arrays
            </p>
            <hr>
            <div class="justify-content-center">
                <div class="border border-warning">
                    <div class="p-2 text-center">
                        <button onclick="verElementos()">Ver Vector</button>
                    </div>
                        <div class="p-2 text-center">
                            <button onclick="ordenarElementos()">Ordenar Vector</button>
                        </div>
                        <div class="p-2 text-center">
                            <button onclick="desordenarElementos()">Vector al revés</button>
                        </div>
                        <div class="p-2 text-center">
                            <textarea name="textarea" id="textarea" rows="10" cols="40" placeholder="Inserta elementos con espacio (7 2 Tardes Buenas Messi no sencillo Cristiano 9)..."></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
           
        </div>
    </div>

    <script src="./JS/bootstrap.min.js"></script>
</body>
</html>