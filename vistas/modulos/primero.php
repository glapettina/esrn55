<?php

    $item = null;
    $valor = null;   

    $cursos = ControladorCursos::ctrMostrarCursos($item, $valor);


?>       


  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Alumnos Primer Año 
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Alumnos Primer Año</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">
          
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarAlumno">
            
            Agregar Alumno
          </button>

        </div>
        <div class="box-body">
          
          <table class="table table-bordered table-striped dt-responsive tablas">
            
            <thead>
              
              <tr>
                
                <th style="width: 10px">#</th>
                <th>DNI</th>
                <th>Apellidos y Nombres</th>
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
                  $tabla = "primero";


                  $alumnos = ControladorAlumnos::ctrMostrarAlumnos($item, $valor, $tabla);

                  foreach ($alumnos as $key => $value) {
                    
                    echo '<tr>
                
                          <td>'.($key+1).'</td>
                          <td>'.$value["documento"].'</td>
                          <td>'.$value["nombre"].'</td>';

                          $item = "id";
                          $valor = $value["id_curso"];

                          $curso = ControladorCursos::ctrMostrarCursos($item, $valor);

                          echo '<td>'.$curso["nombre"].'</td>  

                          <td>'.$curso["turno"].'</td>';

                          if ($_SESSION["perfil"] != "Preceptor") {

                              if ($value["estado"] != 0) {
                              
                                echo '<td><button class="btn btn-success btn-xs btnActivar" tabla="primero" idAlumno="'.$value["id"].'" estadoAlumno="0">Activado</button></td>';

                            }else{

                                echo '<td><button class="btn btn-danger btn-xs btnActivar" tabla="primero" idAlumno="'.$value["id"].'" estadoAlumno="1">Desactivado</button></td>';
                            }
                            
                          }else{


                          if ($value["estado"] != 0) {
                              
                                echo '<td><button class="btn btn-success btn-xs" tabla="primero" idAlumno="'.$value["id"].'" estadoAlumno="0">Activado</button></td>';

                            }else{

                                echo '<td><button class="btn btn-danger btn-xs" tabla="primero" idAlumno="'.$value["id"].'" estadoAlumno="1">Desactivado</button></td>';
                            }



                          }

                          


                          echo '<td>
                            
                            <div class="btn-group">';


                            if ($_SESSION["perfil"] != "Preceptor") {
                              
                                echo'<button class="btn btn-warning btnEditarAlumno" tabla="primero" idAlumno="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarAlumno"><i class="fa fa-pencil"></i></button>

                                  <button class="btn btn-danger btnEliminarAlumno" curso="primero" idAlumno="'.$value["id"].'"><i class="fa fa-times"></i></button>';

                            }


                               echo'<button class="btn btn-primary btnImprimirInformeCb" periodo="'.$_SESSION['periodo'].'" informe="informecb" tabla="primero" idAlumno="'.$value["id"].'" data-toggle="modal" data-target="#modalImprimirInformeCb"><i class="fa fa-print"></i></button>';

                            echo'</div>

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
  MODAL AGREGAR ALUMNO
  ======================================-->


<div id="modalAgregarAlumno" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar Alumno</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->


          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA EL DOCUMENTO -->          
              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input class="form-control input-lg" type="text" name="nuevoDocumento" placeholder="Ingresar Nº Documento" required>

                </div>

              </div>

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
              
            </div>
            
          </div>

          <!--=====================================
          PIE DEL MODAL
          ======================================-->



          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Alumno</button>

          </div>

          <?php

             $tabla = "primero";
             $curso = "primero";
             $moda = "0";

              $crearAlumno = new ControladorAlumnos();
              $crearAlumno -> ctrCrearAlumno($tabla,$curso,$moda);

          ?>

    </form>
    </div>

  </div>
</div>


<!--=====================================
  MODAL EDITAR ALUMNO
  ======================================-->


<div id="modalEditarAlumno" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Editar Alumno</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->


          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA EL DOCUMENTO -->          
              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input class="form-control input-lg" type="text" id="editarDocumento" name="editarDocumento" required>

                  <input type="hidden" name="idAlumno" id="idAlumno"> 
                  <input type="hidden" name="tabla" id="tabla">   
                  <input type="hidden" name="curso" id="curso">             

                </div>

              </div>

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
                  
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  
                  <select class="form-control input-lg" id=editarCurso name="editarCurso">

                    <option value="">Seleccionar curso</option>

                    <?php

                      $item = null;
                      $valor = null;   

                      $cursos = ControladorCursos::ctrMostrarCursos($item, $valor);

                      foreach ($cursos as $key => $value) {

                        echo '<option value="'.$value["id"].'">'.$value["nombre"].' - '.$value["turno"].'</option>';
                        
                      }

                    ?>
                                        


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

              $tabla = "primero";
              $curso = "primero";
              $moda = "0";

              $editarAlumno = new ControladorAlumnos();
              $editarAlumno -> ctrEditarAlumno($tabla,$curso,$moda);

          ?>

    </form>

          
    </div>

  </div>
</div>




  <?php

      $tabla = "primero";
      $curso = "primero";      

      $borraralumno = new ControladorAlumnos();
      $borraralumno -> ctrBorrarAlumno($tabla,$curso);

  ?>
  
  
  

  