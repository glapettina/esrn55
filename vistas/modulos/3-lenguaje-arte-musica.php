<?php
  

    $item = null;
    $valor = null;   

    $cursos = ControladorCursos::ctrMostrarCursos($item, $valor);


?>       


  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        3er. Año - Arte-Música - Lenguaje Musical y Práctica Instrumental
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">3er. Año - Arte-Música - Lenguaje Musical y Práctica Instrumental</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <?php

          if ($_SESSION["perfil"] != "Preceptor") {
            
              echo '<div class="box-header with-border">
                        
                <button type="submit" class="btn btn-danger" idCurso=7 idCurso2=8 idCurso=13 tabla="tercero" data-toggle="modal" data-target="#modalCopiaSaberes">
                  
                  Copia Saberes
                </button>

                <button class="btn btn-primary btnInformeArea" area="lenguaje3" periodo="'.$_SESSION['periodo'].'" idCurso=7 idCurso2=8 idCurso3=13 tabla="tercero" modalidad="Arte-Música" informe="informe-area-orientacion">
                  
                  Informes Curso
                </button>
                
              </div>';

          }

        ?>



        <div class="box-body">
          
          <table class="table table-bordered table-striped dt-responsive tablas">
            
            <thead>
              
              <tr>
                
                <th style="width: 10px">#</th>
                <th>DNI</th>
                <th>Apellidos y Nombres</th>
                <th>Curso</th>
                <th>Turno</th>
                <th>Acciones</th>

              </tr> 

            </thead>
            <tbody>

              <?php

                  $item = "id_curso";
                  $valor1 = 7;
                  $valor2 = 8;
                  $valor3 = 13;
                  $valor4 = 0;
                  $tabla = "tercero";
                  $periodo = $_SESSION["periodo"];
                  $modalidad = "Arte-Música";
                  $verifica = true;

                  $informes = ControladorInformes::ctrMostrarInformesOrientacion($item, $valor1, $valor2, $valor3, $valor4, $tabla, $periodo, $modalidad, $verifica);


                  foreach ($informes as $key => $value) {
                    
                    echo '<tr>
                
                          <td>'.($key+1).'</td>
                          <td>'.$value["documento"].'</td>
                          <td>'.$value["nombre"].'</td>';

                          $item = "id";
                          $valor = $value["id_curso"];

                          $curso = ControladorCursos::ctrMostrarCursos($item, $valor);

                          echo '<td>'.$curso["nombre"].'</td>  

                          <td>'.$curso["turno"].'</td>';


                          echo '<td>';


                          if ($_SESSION["perfil"] != "Preceptor") {

                            
                            echo'<div class="btn-group">

                              <button class="btn btn-warning btnEditarInformeLenguaje3" nombreAlumno="'.$value["nombre"].'" tabla="tercero" periodo="'.$_SESSION['periodo'].'" idAlumno="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarInforme"><i class="fa fa-pencil"></i></button>
                              
                            </div>';
                            
                             
                            }


                            echo '<div class="btn-group">
                                
                              <button class="btn btn-primary btnImprimirInformeIndividual" informe="informe-individual" periodo="'.$_SESSION['periodo'].'" tabla="tercero" area="lenguaje3" idAlumno="'.$value["id"].'" data-toggle="modal" data-target="#modalImprimirInformeIndividual"><i class="fa fa-print"></i></button>
                              
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
  MODAL EDITAR INFORME
  ======================================-->


<div id="modalEditarInforme" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" id="modalInforme">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

           
            <h4 class="modal-title" id="alumnoEdicion"></h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->

          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA LOS SABERES -->          
              
              <div class="form-group">
                
                  <label for="saberesLenguaje3">Saberes</label>
                      <textarea class="form-control" cols="80" rows="6" id="saberesLenguaje3" name="saberesLenguaje3">
                  </textarea>
              </div>

        <!-- ENTRADA PARA LA LENGUAJE 3 --> 

              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  
                  <select class="form-control input-lg" id="apreciaLenguaje3" name="apreciaLenguaje3">

                  <option value="">Apreciación Cualitativa</option>
                  <option value="Se Apropió de los Saberes">Se Apropió de los Saberes</option>
                  <option value="En Proceso de Apropiación de Saberes">En Proceso de Apropiación de Saberes</option>
                  <option value="No se Apropió de los Saberes">No se Apropió de los Saberes</option>
                                        

                  </select>

                </div>

              </div>

              <!-- ENTRADA PARA LA ASISTENCIA --> 

              
              <div class="form-group">
                
                <div class="input-group">
                  
                  
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <select class="form-control input-lg" id="asistenciaLenguaje3" name="asistenciaLenguaje3">

                  <option value="">Asistencia</option>
                  <option value="0 %">0 %</option>
                  <option value="25 %">25 %</option>
                  <option value="50 %">50 %</option>
                  <option value="75 %">75 %</option>
                  <option value="100 %">100 %</option>
                                        

                  </select>

                </div>

              </div>


              <div class="form-group">          
                  <label for="observaLenguaje3">Observaciones</label>
                      <textarea class="form-control" cols="80" rows="3" id="observaLenguaje3" name="observaLenguaje3">
                  </textarea>
              </div>


            </div>
            
          </div>
          
          <!--=====================================
          PIE DEL MODAL
          ======================================-->



          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>


            <button type="submit" class="btn btn-primary">Guardar Cambios</button>

              <input type="hidden" name="idAlumno" id="idAlumno"> 

          </div>       

         <?php

              $tabla = "tercero";
              $curso = "3-lenguaje-arte-musica";

              $editarInforme = new ControladorInformes();
              $editarInforme -> ctrEditarInformeLenguaje3($tabla, $curso);

          ?>

    </form>

          
    </div>

  </div>
</div>


<!--=====================================
  MODAL COPIA SABERES
  ======================================-->


<div id="modalCopiaSaberes" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

           
              <h4 class="modal-title">Copia Saberes</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->

          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA LOS SABERES -->          
              
              <div class="form-group">
                
                  <label for="copiaSaberesLenguaje3">Saberes</label>
                      <textarea class="form-control" cols="80" rows="6" id="copiaSaberesLenguaje3" name="copiaSaberesLenguaje3">
                  </textarea>
              </div>


            </div>
            
          </div>
          
          <!--=====================================
          PIE DEL MODAL
          ======================================-->



          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
           

            <button type="submit" class="btn btn-primary">Copiar Saberes</button>

              <input type="hidden" name="idAlumno" id="idAlumno"> 

          </div>       

         <?php

              $tabla = "tercero";
              $curso = "3-lenguaje-arte-musica";
              $ncurso1 = 7;
              $ncurso2 = 8;
              $ncurso3 = 13;
              $periodo = $_SESSION["periodo"];

              $copiaSaberes = new ControladorInformes();
              $copiaSaberes -> ctrCopiarSaberesLenguaje3($tabla, $curso, $ncurso1, $ncurso2, $ncurso3, $periodo);

          ?>

    </form>

          
    </div>

  </div>
</div>



