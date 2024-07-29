<?php

    $item = null;
    $valor = null;   

    $netbooks = ControladorNetbooks::ctrMostrarNetbooks($item, $valor);


?>       


  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Listado de Servicios 
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Listado de Servicios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">
          
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarServicio">
            
            Agregar Servicio
          </button>
          
        </div>
        <div class="box-body">
          
          <table class="table table-bordered table-striped dt-responsive tablas">
            
            <thead>
              
              <tr>
                
                <th style="width: 10px">#</th>
                <th>Fecha</th>
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
                  

                  $servicios = ControladorServicios::ctrMostrarServicios($item, $valor);

                  foreach ($servicios as $key => $value) {
                    
                    echo '<tr>
                
                          <td>'.($key+1).'</td>';

                          $fecha_real = date("d-m-Y",strtotime($value["fecha"]));

                          echo '<td>'.$fecha_real.'</td>';

                          $item = "id";
                          $valor = $value["id_netbook"];

                          $netbook = ControladorNetbooks::ctrMostrarNetbooks($item, $valor);

                          echo '<td>'.$netbook["nombre"].'</td>';

                          $item = "id";
                          $valor = $netbook["id_curso"];

                          $curso = ControladorCursos::ctrMostrarCursos($item, $valor);

                          echo '<td>'.$curso["nombre"].'</td>  

                          <td>'.$curso["turno"].'</td>';

                          

                          echo '<td>'.$netbook["nserie"].'</td>';

                          if ($value["estado"] != 0) {
                          
                            echo '<td><button class="btn btn-success btn-xs btnActivarServicio" idServicio="'.$value["id"].'" estadoServicio="0">Resuelto</button></td>';

                        }else{

                            echo '<td><button class="btn btn-danger btn-xs btnActivarServicio" idServicio="'.$value["id"].'" estadoServicio="1">Pendiente</button></td>';
                        }


                          echo '<td>
                            
                            <div class="btn-group">
                                
                              <button class="btn btn-warning btnEditarServicio" idServicio="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarServicio"><i class="fa fa-pencil"></i></button>

                              <button class="btn btn-danger btnEliminarServicio" idServicio="'.$value["id"].'"><i class="fa fa-times"></i></button>

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
  MODAL AGREGAR SERVICIO
  ======================================-->


<div id="modalAgregarServicio" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar Servicio</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->


          <div class="modal-body">

            <div class="box-body">


              <!-- ENTRADA PARA LA FECHA -->          
              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input class="form-control input-lg" type="text" id="datepicker3" name="datepicker3" placeholder="Ingresar Fecha" required>

                </div>

              </div>

              <!-- ENTRADA PARA EL Nº DE SERIE --> 

              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  
                  <select class="form-control input-lg" name="nuevaNetbook">

                    <option value="">Seleccionar equipo</option>

                    <?php

                      foreach ($netbooks as $key => $value) {

                        echo '<option value="'.$value["id"].'">'.$value["nserie"].'</option>';
                        
                      }

                    ?>
                                        


                  </select>

                </div>

              </div>

              <!-- ENTRADA PARA EL PROBLEMA -->          
              
              <div class="form-group">
                
                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
                  <textarea name="nuevoProblema" id="nuevoProblema" cols="70" rows="5"></textarea>
                  
                  <!-- <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input class="form-control input-lg" type="text" id="nuevoProblema" name="nuevoProblema"> -->

                </div>

              </div>

              <!-- ENTRADA PARA LA SOLUCION -->          
              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-laptop"></i></span>
                  <textarea name="nuevaSolucion" id="nuevaSolucion" cols="70" rows="5"></textarea>

                </div>

              </div>

              
            </div>
            
          </div>

          <!--=====================================
          PIE DEL MODAL
          ======================================-->



          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Servicio</button>

          </div>

          <?php


              $crearServicio = new ControladorServicios();
              $crearServicio -> ctrCrearServicio();

          ?>

    </form>
    </div>

  </div>
</div>


<!--=====================================
  MODAL EDITAR SERVICIO
  ======================================-->


<div id="modalEditarServicio" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Editar Servicio</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->


          <div class="modal-body">

            <div class="box-body">


              <!-- ENTRADA PARA LA FECHA -->          
              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input class="form-control input-lg" type="text" id="editarFecha" name="editarFecha" readonly>

                </div>

              </div>

              <!-- ENTRADA PARA LA NETBOOK --> 

              
              <div class="form-group">
                
                    <div class="input-group">
                  
                       <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  
                       <select class="form-control input-lg" name="editarNetbook" readonly required>
                    
                           <option id="editarNetbook"></option>                    
                    
                       </select>

                </div>

              </div>

              <!-- ENTRADA PARA EL PROBLEMA -->          
              
              <div class="form-group">
                
                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
                  <textarea name="editarProblema" id="editarProblema" cols="70" rows="5"></textarea>
                  
                  <!-- <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input class="form-control input-lg" type="text" id="nuevoProblema" name="nuevoProblema"> -->

                </div>

              </div>

              <!-- ENTRADA PARA LA SOLUCION -->          
              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-laptop"></i></span>
                  <textarea name="editarSolucion" id="editarSolucion" cols="70" rows="5"></textarea>

                  <input type="hidden" name="idServicio" id="idServicio">

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


              $editarServicio = new ControladorServicios();
              $editarServicio -> ctrEditarServicio();

          ?>

    </form>

          
    </div>

  </div>
</div>

  <?php


      $borrarservicio = new ControladorServicios();
      $borrarservicio -> ctrBorrarServicio();

  ?>
  
  
  

  