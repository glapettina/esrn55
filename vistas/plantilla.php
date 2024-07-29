<?php

  session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ESRN Nº 55 | Luis Beltrán</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="vistas/img/plantilla/escudo.png">

  <!--======================================
  PLUGINS DE CSS
  =======================================--> 

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- Date Picker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">


  <!--======================================
  PLUGINS DE JAVASCRIPT
  =======================================-->    

  <!-- jQuery 3 -->
  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>
  <!-- SweetAlert 2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
  <!-- DataTables -->
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
  <!-- daterangepicker -->
  <script src="vistas/bower_components/moment/min/moment.min.js"></script>
  <script src="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="vistas/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="vistas/bower_components/bootstrap-datepicker/js/locales/bootstrap-datepicker.es.js"></script>


</head>

<!--======================================
  CUERPO DOCUMENTO
=======================================--> 

<body class="hold-transition skin-blue sidebar-mini login-page">


<?php

  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
    
    
    echo '<div class="wrapper">';

    /*======================================
    HEADER
    =======================================*/

    include "modulos/header.php";

    /*======================================
    MENU
    =======================================*/

    include "modulos/menu.php";

    /*======================================
    CONTENIDO
    =======================================*/

    if(isset($_GET["ruta"])){

      if ($_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "usuarios" ||
          $_GET["ruta"] == "cursos" ||
          $_GET["ruta"] == "ciudades" ||
          $_GET["ruta"] == "movilidad" ||
          $_GET["ruta"] == "movilidad-fecha" ||
          $_GET["ruta"] == "resumen-movilidad" ||
          $_GET["ruta"] == "resumen-docente" ||
          $_GET["ruta"] == "netbooks" ||
          $_GET["ruta"] == "servicios" ||
          $_GET["ruta"] == "historial-servicios" ||
          $_GET["ruta"] == "primero" ||
          $_GET["ruta"] == "segundo" ||
          $_GET["ruta"] == "tercero" ||
          $_GET["ruta"] == "cuarto" ||
          $_GET["ruta"] == "quinto" ||     
          $_GET["ruta"] == "11tm-cientifica" ||     
          $_GET["ruta"] == "12tt-cientifica" ||
          $_GET["ruta"] == "11tt-cientifica" ||
          $_GET["ruta"] == "21tm-cientifica" ||
          $_GET["ruta"] == "21tt-cientifica" ||
          $_GET["ruta"] == "22tt-cientifica" ||
          $_GET["ruta"] == "23tt-cientifica" ||
          $_GET["ruta"] == "31tm-cientifica" ||
          $_GET["ruta"] == "32tm-cientifica" ||
          $_GET["ruta"] == "31tt-cientifica" ||
          $_GET["ruta"] == "41tm-cientifica" ||
          $_GET["ruta"] == "42tm-cientifica" ||
          $_GET["ruta"] == "41tt-cientifica" ||
          $_GET["ruta"] == "42tt-cientifica" ||
          $_GET["ruta"] == "11tm-sociales" ||
          $_GET["ruta"] == "12tt-sociales" ||
          $_GET["ruta"] == "11tt-sociales" ||
          $_GET["ruta"] == "21tm-sociales" ||
          $_GET["ruta"] == "21tt-sociales" ||
          $_GET["ruta"] == "22tt-sociales" ||
          $_GET["ruta"] == "23tt-sociales" ||
          $_GET["ruta"] == "31tm-sociales" ||
          $_GET["ruta"] == "32tm-sociales" ||
          $_GET["ruta"] == "31tt-sociales" ||
          $_GET["ruta"] == "41tm-sociales" ||
          $_GET["ruta"] == "42tm-sociales" ||
          $_GET["ruta"] == "41tt-sociales" ||
          $_GET["ruta"] == "42tt-sociales" ||
          $_GET["ruta"] == "11tm-literatura" ||
          $_GET["ruta"] == "12tt-literatura" ||
          $_GET["ruta"] == "11tt-literatura" ||
          $_GET["ruta"] == "21tm-literatura" ||
          $_GET["ruta"] == "21tt-literatura" ||
          $_GET["ruta"] == "22tt-literatura" ||
          $_GET["ruta"] == "23tt-literatura" ||
          $_GET["ruta"] == "31tm-literatura" ||
          $_GET["ruta"] == "32tm-literatura" ||
          $_GET["ruta"] == "31tt-literatura" ||
          $_GET["ruta"] == "41tm-literatura" ||
          $_GET["ruta"] == "42tm-literatura" ||
          $_GET["ruta"] == "41tt-literatura" ||
          $_GET["ruta"] == "42tt-literatura" ||
          $_GET["ruta"] == "11tm-matematica" ||
          $_GET["ruta"] == "12tt-matematica" ||
          $_GET["ruta"] == "11tt-matematica" ||
          $_GET["ruta"] == "21tm-matematica" ||
          $_GET["ruta"] == "21tt-matematica" ||
          $_GET["ruta"] == "22tt-matematica" ||
          $_GET["ruta"] == "23tt-matematica" ||
          $_GET["ruta"] == "31tm-matematica" ||
          $_GET["ruta"] == "32tm-matematica" ||
          $_GET["ruta"] == "31tt-matematica" ||
          $_GET["ruta"] == "41tm-matematica" ||
          $_GET["ruta"] == "42tm-matematica" ||
          $_GET["ruta"] == "41tt-matematica" ||
          $_GET["ruta"] == "42tt-matematica" ||
          $_GET["ruta"] == "11tm-ingles" ||
          $_GET["ruta"] == "12tt-ingles" ||
          $_GET["ruta"] == "11tt-ingles" ||
          $_GET["ruta"] == "21tm-ingles" ||
          $_GET["ruta"] == "21tt-ingles" ||
          $_GET["ruta"] == "22tt-ingles" ||
          $_GET["ruta"] == "23tt-ingles" ||
          $_GET["ruta"] == "31tm-ingles" ||
          $_GET["ruta"] == "32tm-ingles" ||
          $_GET["ruta"] == "31tt-ingles" ||
          $_GET["ruta"] == "41tm-ingles" ||
          $_GET["ruta"] == "42tm-ingles" ||
          $_GET["ruta"] == "41tt-ingles" ||
          $_GET["ruta"] == "42tt-ingles" ||
          $_GET["ruta"] == "11tm-edfisica" ||
          $_GET["ruta"] == "12tt-edfisica" ||
          $_GET["ruta"] == "11tt-edfisica" ||
          $_GET["ruta"] == "21tm-edfisica" ||
          $_GET["ruta"] == "21tt-edfisica" ||
          $_GET["ruta"] == "22tt-edfisica" ||
          $_GET["ruta"] == "23tt-edfisica" ||
          $_GET["ruta"] == "31tm-edfisica" ||
          $_GET["ruta"] == "32tm-edfisica" ||
          $_GET["ruta"] == "31tt-edfisica" ||
          $_GET["ruta"] == "41tm-edfisica" ||
          $_GET["ruta"] == "42tm-edfisica" ||
          $_GET["ruta"] == "41tt-edfisica" ||
          $_GET["ruta"] == "42tt-edfisica" ||
          $_GET["ruta"] == "11tm-artistica" ||
          $_GET["ruta"] == "11tt-artistica" ||
          $_GET["ruta"] == "12tt-artistica" ||
          $_GET["ruta"] == "21tm-artistica" ||
          $_GET["ruta"] == "21tt-artistica" ||
          $_GET["ruta"] == "22tt-artistica" ||
          $_GET["ruta"] == "23tt-artistica" ||
          $_GET["ruta"] == "31tm-artistica" ||
          $_GET["ruta"] == "32tm-artistica" ||
          $_GET["ruta"] == "31tt-artistica" ||
          $_GET["ruta"] == "41tm-artistica" ||
          $_GET["ruta"] == "42tm-artistica" ||
          $_GET["ruta"] == "41tt-artistica" ||
          $_GET["ruta"] == "42tt-artistica" ||
          $_GET["ruta"] == "51tm-cientifica" ||
          $_GET["ruta"] == "52tm-cientifica" ||
          $_GET["ruta"] == "51tt-cientifica" ||
          $_GET["ruta"] == "52tt-cientifica" ||
          $_GET["ruta"] == "51tm-sociales" ||
          $_GET["ruta"] == "52tm-sociales" ||
          $_GET["ruta"] == "51tt-sociales" ||
          $_GET["ruta"] == "52tt-sociales" ||
          $_GET["ruta"] == "51tm-literatura" ||
          $_GET["ruta"] == "52tm-literatura" ||
          $_GET["ruta"] == "51tt-literatura" ||
          $_GET["ruta"] == "52tt-literatura" ||
          $_GET["ruta"] == "51tm-matematica" ||          
          $_GET["ruta"] == "52tm-matematica" ||          
          $_GET["ruta"] == "51tt-matematica" ||          
          $_GET["ruta"] == "52tt-matematica" ||          
          $_GET["ruta"] == "51tm-ingles" ||
          $_GET["ruta"] == "52tm-ingles" ||
          $_GET["ruta"] == "51tt-ingles" ||
          $_GET["ruta"] == "52tt-ingles" ||
          $_GET["ruta"] == "51tm-edfisica" ||
          $_GET["ruta"] == "52tm-edfisica" ||
          $_GET["ruta"] == "51tt-edfisica" ||
          $_GET["ruta"] == "52tt-edfisica" ||
          $_GET["ruta"] == "51tm-artistica" ||
          $_GET["ruta"] == "52tm-artistica" ||
          $_GET["ruta"] == "51tt-artistica" ||
          $_GET["ruta"] == "52tt-artistica" ||
          $_GET["ruta"] == "3-antropologia-sociales" ||
          $_GET["ruta"] == "4-antropologia-sociales" ||
          $_GET["ruta"] == "4-comunicacion-sociales" ||
          $_GET["ruta"] == "5-proyecto-sociales" ||
          $_GET["ruta"] == "5-conocimiento-sociales" ||
          $_GET["ruta"] == "5-problematica-sociales" ||
          $_GET["ruta"] == "3-quimica-naturales" ||
          $_GET["ruta"] == "4-tierra1-naturales" ||
          $_GET["ruta"] == "4-fisica-naturales" ||
          $_GET["ruta"] == "5-biotecnologia-naturales" ||
          $_GET["ruta"] == "5-ciencias-naturales" ||
          $_GET["ruta"] == "5-tierra2-naturales" ||
          $_GET["ruta"] == "11tm-eve" ||    
          $_GET["ruta"] == "11tt-eve" ||    
          $_GET["ruta"] == "12tt-eve" ||    
          $_GET["ruta"] == "21tm-eve" ||    
          $_GET["ruta"] == "21tt-eve" ||    
          $_GET["ruta"] == "22tt-eve" ||    
          $_GET["ruta"] == "31tm-eve" ||    
          $_GET["ruta"] == "32tm-eve" ||    
          $_GET["ruta"] == "31tt-eve" ||    
          $_GET["ruta"] == "41tm-eve" ||    
          $_GET["ruta"] == "42tm-eve" ||    
          $_GET["ruta"] == "41tt-eve" ||    
          $_GET["ruta"] == "42tt-eve" ||    
          $_GET["ruta"] == "51tm-eve" ||    
          $_GET["ruta"] == "52tm-eve" ||    
          $_GET["ruta"] == "51tt-eve" ||    
          $_GET["ruta"] == "52tt-eve" ||    
          $_GET["ruta"] == "informe-area" ||
          $_GET["ruta"] == "informe-area-orientacion" ||
          $_GET["ruta"] == "salir") {
        
          include "modulos/".$_GET["ruta"].".php";

      }else{

        include "modulos/404.php";

      }

    }else{

      include "modulos/inicio.php";

    }

    /*======================================
    FOOTER
    =======================================*/

    include "modulos/footer.php";

    echo '</div>';

  }else{

    include "modulos/login.php";

  }  

?>



<script src="vistas/js/plantilla.js"></script>
<script src="vistas/js/usuarios.js"></script>
<script src="vistas/js/cursos.js"></script>
<script src="vistas/js/ciudades.js"></script>
<script src="vistas/js/alumnos.js"></script>
<script src="vistas/js/movilidades.js"></script>
<script src="vistas/js/netbooks.js"></script>
<script src="vistas/js/servicios.js"></script>
<script src="vistas/js/informes.js"></script>


<!--CAMPO FECHA - DATEPICKER-->

<script>
      
      $('#datepicker').datepicker({
      /*dateFormat: 'dd-mm-yy',
      autoclose: true*/
       format: "dd/mm/yyyy",
        /*clearBtn: true,*/
        language: "es",
        autoclose: true,
        /*keyboardNavigation: false,
        todayHighlight: true*/
    })

      $('#datepicker2').datepicker({
          /*dateFormat: 'dd-mm-yy',
          autoclose: true*/
           format: "dd/mm/yyyy",
            /*clearBtn: true,*/
            language: "es",
            autoclose: true,
            /*keyboardNavigation: false,
            todayHighlight: true*/
    })

        $('#datepicker3').datepicker({
      /*dateFormat: 'dd-mm-yy',
      autoclose: true*/
       format: "dd/mm/yyyy",
        /*clearBtn: true,*/
        language: "es",
        autoclose: true,
        /*keyboardNavigation: false,
        todayHighlight: true*/
    })


</script>    

</body>
</html>


