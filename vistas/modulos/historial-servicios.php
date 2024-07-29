<?php

    $item = null;
    $valor = null;   

    $netbooks = ControladorNetbooks::ctrMostrarNetbooks($item, $valor);


?>  

  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Historial Servicio
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Historial Servicio</li>
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





              <!-- ENTRADA PARA LA NETBOOK -->

              <div class="form-group">
                
                <div class="input-group col-lg-4">
                  
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  
                  <select class="form-control input-lg" name="valor">
                    
                    <option value="0">Nº Serie</option>

                    <?php


                      foreach ($netbooks as $key => $value) {

                        echo '<option idNetbook="'.$value["id"].'" idCurso="'.$value["nserie"].'" value="'.$value["id"].'">'.$value["nserie"].'</option>';
                        
                      }

                    ?>

                  </select>

                </div>

              </div>


                <?php

                  //$idNetbook = $value["id"];
                  //$idCurso = $value["id_curso"];

                  echo '<button class="btn btn-primary btnHistorial">
                  
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


  
  