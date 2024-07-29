<?php

    $item = null;
    $valor = null;   

    $docentes = ControladorUsuarios::ctrMostrarDocentes($item, $valor);


?>  

  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Resumen Movilidad por Docente
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Resumen Movilidad por Docente</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


      <!-- Default box -->
      <div class="box">

        <div class="box-body">
          
        <div class="box-header with-border">

          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA LA PRIMER FECHA -->       

                
              
              <div class="form-group">
                
                <div class="input-group col-lg-2">
                  
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input class="form-control input-lg" type="text" name="datepicker" id="datepicker" placeholder="Ingresar Desde" required>

          

                </div>

              </div>

              <!-- ENTRADA PARA LA SEGUNDA FECHA -->

              <div class="form-group">
                
                <div class="input-group col-lg-2">
                  
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input class="form-control input-lg" type="text" hasta="<?php $_POST['datepicker2'] ?>" name="datepicker2" id="datepicker2" placeholder="Ingresar Hasta" required>


                </div>

              </div>

              <!-- ENTRADA PARA EL DOCENTE -->

              <div class="form-group">
                
                <div class="input-group col-lg-4">
                  
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  
                  <select class="form-control input-lg">
                    
                    <option value="0">Docente</option>

                    <?php


                      foreach ($docentes as $key => $value) {

                        echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                        
                      }

                    ?>

                  </select>

                </div>

              </div>


                <?php

                  $iddocente = $value["id"];

                  echo '<button class="btn btn-primary btnResumenMovDocente">
                  
                  Listar
                </button> ';


                ?>


                       


            </div>
            
          </div>
          
        </div>


        </div>
        
        
      </div>




          

    </section>
  </div>


  
  