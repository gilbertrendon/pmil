<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <titile>Registro campos</title>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body>
<!-- <?php
// $Name = $LName = "";
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     if(empty($POST["Name"])){
//         $nombreErr="El nombre es obligatorio";
//     }else{
//         $Name=test_input()
//     }
// }
?> -->


     <!-- back.php -->
    <form action="" id="Formajax">
        <label for="1">Nombres<input type="text" name="Name" id="Name" ></label>
        <label for="2">Apellido<input type="text" name="LName" id="LName" ></label>
        <button type="button" id="Enviar" disabled="disabled">Enviar</button>
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

    // function validarInput(){
    //     document.getElementById("Enviar").disabled = !document.getElementById("1").value.length;
    // }

    $('#Name').change(function(){
        //alert("asdfasdfd");
    if($(this).val()==0||$('#LName').val()==0){
        $('#Enviar').attr('disabled','disabled');
        }else{
            $('#Enviar').removeAttr("disabled");
        }
    });

    $('#LName').change(function(){
        //alert("asdfasdfd");
    if($(this).val()==0||$('#Name').val()==0){
        $('#Enviar').attr('disabled','disabled');
        }else{
            $('#Enviar').removeAttr("disabled");
        }
    });


</script>