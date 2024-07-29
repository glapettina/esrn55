

  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Listado Movilidad Docente
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Listado Movilidad Docente</li>
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


                <?php

                  $iddocente = $_SESSION["id"];

                  echo '<button class="btn btn-primary btnListadoMovDocente" idDocente="'.$iddocente.'"]>
                  
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


  
  