<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1 class="tituloBarraNav">SICOTER</h1>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#!/monitoreo">Regresar</a></li>
                <li class="dropdown">
                    <a href="#!/login" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cerrar Sesion</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="page-header">
                <h3 class="tituloAzulTemp">MONITOREO DE VARIABLES</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="tituloTemp">INGRESE PERIODO DE CONSULTA</h1>
        </div>
    </div>

    <div class="row contenedorDivs">
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-8">
            <h4 class="textGrafi">Variable: TEMPERATURA</h4>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-7 col-xs-4">
            <a href="#!/graficaTemperatura"><img src="img/graf.png" class="imgGraf"></a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel principal">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="panel panel-green">
                                <div class="panel-footer" style="border: solid 1px #238276">
                                    <center style="background: orange;height: 90px; padding-top: 10px"><h4 class="tituloFecha">FECHA DE INICIO</h4>
                                        <input type="date" name="fecha" size="12" value="21-07-2016">
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="panel panel-green">
                                <div class="panel-footer" style="border: solid 1px #238276;">
                                    <center style="background: orange; height: 90px; padding-top: 10px"><h4>FECHA DE FINALIZACION</h4>
                                        <input type="date" name="fecha" size="12" value="21-07-2016">
                                    </center>
                                </div>
                            </div>
                        </div>
                        <center><button class="btn btn-primary boton">Consultar</button></center>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>Muestreo de Temperatura</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            Mostrar
            <select name="pais">
                <option value="1">10</option>
                <option value="2">20</option>
                <option value="3">50</option>
                <option value="3">100</option>
            </select>
            Datos
            <input class="buscar" type="text" placeholder="Buscar">
        </div>
    </div>

    <div class="row contenedorTabla">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">




            <center>
                <?php
                include ("cone.php");
                if ($numReg > 0) {
                    echo "<table border 3px>
                       
                        <th>nombre</th>
                        <th></th>
                        <th>fecha</th>
                        <th>valor</th>";
                    while ($fila = pg_fetch_array($resultado)) {
                        echo "<tr><td>" . $fila['nombre'] . "</td>";
                        echo "<td><td>" . $fila['fecha'] . "</td>";
                        echo "<td>" . $fila['valor'] . "</td>";
                    }
                    echo "</table>"; 
                } else {
                    echo "No hay Registros";
                }
                ?>            
                
            </center>

           
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    
 
  
  <table class="table table-bordered">
      
    <thead>
      <tr>
        <th>Valor</th>
        <th>Fecha</th>
       
      </tr>
    </thead>
    <tbody>
            
        
      <tr>
        <td>John</td>
        <td>Doe</td>
        
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        
      </tr>
               
    </tbody>
  </table>
                
</div>
        </div>
    </div>

</div>


