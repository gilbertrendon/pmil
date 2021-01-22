<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <titile>Registro campos</title>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body>
     <!-- back.php -->
    <form action="" id="Formajax">
        <label for="1">Nombres<input type="text" name="Name" id="1"></label>
        <label for="2">Apellido<input type="text" name="LName" id="2"></label>
        <button type="button" id="Enviar">Enviar</button>
    </form>
    <br></br>
    <div id="respuesta"></div>
    </form>
</body>

<script>
    //console.log("asdf");
    // $(document).ready(function(){

    // });
    
    $('#Enviar').click(function(){
        $.ajax({
            url: 'back.php',
            type: 'POST',
            data: $('#Formajax').serialize(),
        }).done(function(res){
            $('#respuesta').html(res);
            //console.log("success");
        }).fail(function(){
            console.log("error");
            })
    });
</script>