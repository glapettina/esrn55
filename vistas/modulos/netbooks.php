<?php

    $item = null;
    $valor = null;   

    $cursos = ControladorCursos::ctrMostrarCursos($item, $valor);


?>       


  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Listado de Netbooks 
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Listado de Netbooks</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">
          
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarNetbook">
            
            Agregar Netbook
          </button>
          
        </div>
        <div class="box-body">
          
          <table class="table table-bordered table-striped dt-responsive tablas">
            
            <thead>
              
              <tr>
                
                <th style="width: 10px">#</th>
                <th>Apellidos y Nombres</th>
                <th>Curso</th>
                <th>Turno</th>
                <th>Nº Serie</th>
                <th>Estado</th>
                <th>Acciones</th>

              </tr> 

            </thead>
            <tbody>

              <?php

                  $item = null;
                  $valor = null;
                  

                  $netbooks = ControladorNetbooks::ctrMostrarNetbooks($item, $valor);

                  foreach ($netbooks as $key => $value) {
                    
                    echo '<tr>
                
                          <td>'.($key+1).'</td>
                          <td>'.$value["nombre"].'</td>';

                          $item = "id";
                          $valor = $value["id_curso"];

                          $curso = ControladorCursos::ctrMostrarCursos($item, $valor);

                          echo '<td>'.$curso["nombre"].'</td>  

                          <td>'.$curso["turno"].'</td>
                          <td>'.$value["nserie"].'</td>';

                          if ($value["estado"] != 0) {
                          
                            echo '<td><button class="btn btn-success btn-xs btnActivarNetbook" idNetbook="'.$value["id"].'" estadoNetbook="0">Alta</button></td>';

                        }else{

                            echo '<td><button class="btn btn-danger btn-xs btnActivarNetbook" idNetbook="'.$value["id"].'" estadoNetbook="1">Baja</button></td>';
                        }


                          echo '<td>
                            
                            <div class="btn-group">
                                
                              <button class="btn btn-warning btnEditarNetbook" idNetbook="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarNetbook"><i class="fa fa-pencil"></i></button>

                              <button class="btn btn-danger btnEliminarNetbook" idNetbook="'.$value["id"].'"><i class="fa fa-times"></i></button>

                            </div>

                          </td>

                        </tr> ';
                  }


              ?>
                           

            </tbody>

          </table>

        </div>
        
        
      </div>

    </section>
  </div>


  <!--=====================================
  MODAL AGREGAR NETBOOK
  ======================================-->


<div id="modalAgregarNetbook" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar Netbook</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->


          <div class="modal-body">

            <div class="box-body">


              <!-- ENTRADA PARA EL NOMBRE -->          
              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input class="form-control input-lg" type="text" name="nuevoNombre" placeholder="Ingresar Apellidos y Nombres" required>

                </div>

              </div>

              <!-- ENTRADA PARA EL CURSO --> 

              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  
                  <select class="form-control input-lg" name="nuevoCurso">

                    <option value="">Seleccionar curso</option>

                    <?php

                      foreach ($cursos as $key => $value) {

                        echo '<option value="'.$value["id"].'">'.$value["nombre"].' - '.$value["turno"].'</option>';
                        
                      }

                    ?>
                                        


                  </select>

                </div>

              </div>

              <!-- ENTRADA PARA EL Nº DE SERIE -->          
              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input class="form-control input-lg" type="text" id="nuevoNserie" name="nuevoNserie" placeholder="Ingresar Nº de Serie" style="text-transform: uppercase;" required>

                </div>

              </div>
              
            </div>
            
          </div>

          <!--=====================================
          PIE DEL MODAL
          ======================================-->



          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Netbook</button>

          </div>

          <?php


              $crearNetbook = new ControladorNetbooks();
              $crearNetbook -> ctrCrearNetbook();

          ?>

    </form>
    </div>

  </div>
</div>


<!--=====================================
  MODAL EDITAR NETBOOK
  ======================================-->


<div id="modalEditarNetbook" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Editar Netbook</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->


          <div class="modal-body">

            <div class="box-body">


              <!-- ENTRADA PARA EL NOMBRE -->          
              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input class="form-control input-lg" type="text" id="editarNombre" name="editarNombre" required>
          

                </div>

              </div>

              <!-- ENTRADA PARA EL CURSO --> 

              
              <div class="form-group">
                
                    <div class="input-group">
                  
                       <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  
                       <select class="form-control input-lg" name="editarCurso" readonly required>
                    
                           <option id="editarCurso"></option>                    
                    
                       </select>

                </div>

              </div>

              <!-- ENTRADA PARA EL Nº DE SERIE -->          
              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input class="form-control input-lg" type="text" id="editarNserie" name="editarNserie" required>

                  <input type="hidden" name="idNetbook" id="idNetbook">

                </div>

              </div>
              
            </div>
            
          </div>

          <!--=====================================
          PIE DEL MODAL
          ======================================-->



          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>

          </div>       

         <?php


              $editarNetbook = new ControladorNetbooks();
              $editarNetbook -> ctrEditarNetbook();

          ?>

    </form>

          
    </div>

  </div>
</div>

  <?php


      $borrarnetbook = new ControladorNetbooks();
      $borrarnetbook -> ctrBorrarNetbook();

  ?>
  
  
  

  