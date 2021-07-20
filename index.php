<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Hola</title>
<script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous">
</script>

<script>

    $(document).ready(function(){
        cargar();
    });  // document ready

    function guardar(){
        $.ajax({
            method: 'POST',
            url   : 'gear.php',
            data  : {
                        accion: 2,
                        nombre: $('#nombre').val(),
                        edad  : $('#edad').val(),
                        correo: $('#correo').val()
                    },
            success: function (data) {
                cargar();
            }
        });
    }

    function cargar(){
        $("#tablaresultado tbody").html('');
        $.ajax({
            method  : 'POST',
            url     : 'gear.php',
            data    : {accion: 1},
            success : function(data){
                let rows = JSON.parse(data);
                let filas = "";
                $.each(rows, function(key, value){
                    filas +="<tr>" +
                        "<td>" + value.nombre + "</td>"+
                        "<td>" + value.edad   + "</td>"+
                        "<td>" + value.correo + "</td>"+
                        "</tr>";
                });

                $('#tablaresultado tbody').append(filas);
            }
        }); //ajax
    }

</script>
</head>
<body>
Hola Mundo!

    <label for="nombre"> Nombre : </label>
    <input type="text" name="nombre" id="nombre">
    <label for="edad"> Edad : </label>
    <input type="number" name="edad" id="edad">
    <label for="correo"> Correo : </label>
    <input type="email" name="correo" id="correo">
    <input type="button" value="enviar" onclick="guardar();" id="enviar">

<div id= "resultado">
    <br><br>
    <table border="1" id="tablaresultado">
        <thead>
            <tr>
                <th> Nombre </th>
                <th> Edad </th>
                <th> Correo </th>
            </tr>
        </thead>
        <tbody></tbody>
        <tfoot></tfoot>
    </table>
</div>
</body>
</html>