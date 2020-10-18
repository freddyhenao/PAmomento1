<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calcular Edad</title>
        
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!--Line de comado para que se comporte como resposive-->
<meta name="viewport" content="width=device-width, initial-scale=1"> 

    <link rel="stylesheet" type="text/css" href="librerias/jquery-ui-1.12.1.custom">
    <script src="librerias/jquery-3.3.1.min.js"></script>
    <script scr="librerias/jquery-ui-1.12.1.custom/jquery-ui.js"></script>

</head>
<body>
    <div class="container">
        <h3>Calcular edad de Jugador conociendo la fecha de nacimiento</h3>
        <div class="row">
            <div class="col-sm-3">
                <label>Ingrese la fecha de Naciminto</label>
                    <input type="text" id="" name="calendar" class="form-control input-sm">
            </div>
        </div>
    </div>  
</body>
</html> 
<script type="text/javascript">
	$(document).ready(function(){
		$("#calendario").datepicker({
			changeMonth: true,
      		changeYear: true,
      		yearRange: '1900:' + 2018,
			dateFormat: "yy-mm-dd"
		});

</script>