<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <titile>Registro campos</title>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body>
    <form action="" id="Formajax">
        <label for="1">Nombre<input type="text" name="Name" id="1"></label>
        <label for="2">Apellido<input type="text" name="LName" id="2"></label>
    </form>
    <div id="respuesta"></div>
    </form>
</body>

<script>
    $('#Enviar').click(function(){
        $.ajax({
            url:'back.php',
            type: 'default GET (Other values: POST)',
            data: $('Formajax)'.serialize(),
        })
        .done(function(){
            $('#respuesta').html(res);
        })
        .fail(function(){
            console.log(success);
            })
    }
    
    )