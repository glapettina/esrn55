  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Administrar Cursos
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar Cursos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">
          
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCurso">
            
            Agregar Curso
          </button>
          
        </div>
        <div class="box-body">
          
          <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
            
            <thead>
              
              <tr>
                
                <th style="width: 10px">#</th>
                <th>Curso</th>
                <th>Turno</th>
                <th>Estado</th>
                <th>Acciones</th>

              </tr> 

            </thead>
            <tbody>
              
              <?php

                  $item = null;
                  $valor = null;

                  $cursos = ControladorCursos::ctrMostrarCursos($item, $valor);

                  foreach ($cursos as $key => $value) {
                    
                    echo '<tr>
                
                          <td>'.($key+1).'</td>
                          <td>'.$value["nombre"].'</td>
                          <td>'.$value["turno"].'</td>';

                          if ($value["estado"] != 0) {
                          
                          echo '<td><button class="btn btn-success btn-xs btnActivar" idCurso="'.$value["id"].'" estadoCurso="0">Activado</button></td>';

                        }else{

                          echo '<td><button class="btn btn-danger btn-xs btnActivar" idCurso="'.$value["id"].'" estadoCurso="1">Desactivado</button></td>';
                        }

                          echo '<td>
                            
                            <div class="btn-group">
                                
                              <button class="btn btn-warning btnEditarCurso" idCurso="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarCurso"><i class="fa fa-pencil"></i></button>
                              <button class="btn btn-danger btnEliminarCurso" idCurso="'.$value["id"].'"><i class="fa fa-times"></i></button>

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
  MODAL AGREGAR CURSO
  ======================================-->


<div id="modalAgregarCurso" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar Curso</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->


          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA EL NOMBRE -->          
              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input class="form-control input-lg" type="text" name="nuevoNombre" placeholder="Ingresar nombre" required>

                </div>

              </div>


              <!-- ENTRADA PARA SELECCIONAR EL TURNO -->

              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  
                  <select class="form-control input-lg" name="nuevoTurno">
                    
                    <option value="">Seleccionar turno</option>
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>


                  </select>

                </div>

              </div>

            </div>
            
          </div>

          <!--=====================================
          PIE DEL MODAL
          ======================================-->



          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Curso</button>

          </div>

          <?php

              $crearcurso = new ControladorCursos();
              $crearcurso -> ctrCrearCurso();

          ?>

    </form>
    </div>

  </div>
</div>

  
  <!--=====================================
  MODAL EDITAR CURSO
  ======================================-->


<div id="modalEditarCurso" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Editar Curso</h4>

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
                  <input class="form-control input-lg" type="text" name="editarCurso" id="editarCurso" required>
                  <input type="hidden" name="idCurso" id="idCurso">

                </div>

              </div>  

                <!-- ENTRADA PARA EL TURNO -->

                 <div class="form-group">
                
                    <div class="input-group">
                  
                       <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  
                       <select class="form-control input-lg" name="editarTurno" readonly required>
                    
                           <option id="editarTurno"></option>                    
                    
                       </select>

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

              $editarcurso = new ControladorCursos();
              $editarcurso -> ctrEditarCurso();

          ?>

    </form>
    </div>

  </div>
</div>

  <?php

              $borrarcurso = new ControladorCursos();
              $borrarcurso -> ctrBorrarCurso();

  ?>
  

  