<?php

    $item = null;
    $valor = null;   

    $cursos = ControladorCursos::ctrMostrarCursos($item, $valor);


?>  

  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Informes x Curso
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Informes x Curso</li>
      </ol>
    </section>


    <form method="get">

    <!-- Main content -->
    <section class="content">


      <!-- Default box -->
      <div class="box">

        <div class="box-body">
          
        <div class="box-header with-border">

          <div class="modal-body">

            <div class="box-body">

 



              <!-- ENTRADA PARA EL CURSO -->

              <div class="form-group">
                
                <div class="input-group col-lg-4">
                  
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  
                  <select class="form-control input-lg btnImprimirInformeArea" informe="informe-area" area="cientifica" name="valor">
                    
                    <option value="0">Curso</option>

                    <?php


                      foreach ($cursos as $key => $value) {

                        echo '<option value="'.$value["id"].'">'.$value["nombre"].' - '.$value["turno"].'</option>';
                        
                      }

                    ?>

                  </select>

                </div>

              </div>


               
                  

                  <button type="submit" class="btn btn-primary btnInformeArea" informe="informe-area" area="cientifica">
                  
                  Listar
                </button> 


                


                       


            </div>
            
          </div>
          
        </div>


        </div>
        
        
      </div>




          

    </section>

  </form>
  </div>


  
  