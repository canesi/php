<!DOCTYPE html>
<html lang="es">
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  	<title>WS Administrator</title>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- CSS  -->
    <link href="css/style_login.css" type="text/css" rel="stylesheet"/>
    <!-- Javascript -->
    <<script type="text/javascript" src="js/validaciones.js"></script>
</head>
    <body>
        <div class="jumbotron text-center">
            <h1>Web Services Administrator</h1>
            <p>Sistema web para administrar los servicios web de las apps moviles!</p> 
        </div>
        <div class="container-fluid">
            <section>
                <?php
                    //manejar la session
                    session_start();

                    //recibir la session actual 
                    $username = $_SESSION['user_name'];
    
                    //imprimir el usuario logueado
                    echo "<pre>";
                    print_r("Bienvenido: ".$username);
                    echo "</pre>";
                ?>
            </section>
            
            <form action="facturas.php" method="POST" onsubmit="return validate();">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group row">
                            <div class="col-xs-2">
                                <label for="sel1">Seleccionar Cliente:</label>
                                    <select class="form-control" id="cliente_value" onchange="run()">
                                        <option selected>seleccione cliente</option>
                                        <option>Colgate Palmolive</option>
                                        <option>Kimberly Clark</option>
                                        <option>Cliente 3</option>
                                        <option>Cliente 4</option>
                                    </select>
                            </div>
                            <div class="col-xs-3">
                                <label for="sel1">Seleccionar Region:</label>
                                    <select class="form-control" id="region_value" onchange="run2()">
                                        <option selected>seleccione region(opcional)</option>
                                        <option>GUATEMALA</option>
                                        <option>EL SALVADOR</option>
                                        <option>HONDURRAS</option>
                                        <option>NICARAGUA</option>
                                        <option>COSTA RICA</option>
                                        <option>PANAMA</option>
                                     </select>
                            </div>
                            <div class="col-xs-4">
                                <label for="sel1">Cliente Seleccionado:</label>
                                    <input type="text" id="srt" placeholder="nombre del cliente">
                            </div>
                            <div class="col-xs-4">
                                <label for="sel1">Region Seleccion:</label>
                                    <input type="text" id="srt2" placeholder="nombre de la region">
                            </div>                    
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group row">
                            <div class="col-xs-2">
                                <button type="submit" class="btn btn-primary">Aceptar</button>
                                <button type="button" class="btn btn-primary">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>    

            </form>
        </div>
    </body>
    <<script>
        
    </script>
    <?php
        include('footer.php');
    ?>
</html>