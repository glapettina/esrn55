  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Administrar Ciudades
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar Ciudades</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">
          
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCiudad">
            
            Agregar Ciudad
          </button>
          
        </div>
        <div class="box-body">
          
          <table class="table table-bordered table-striped dt-responsive tablas">
            
            <thead>
              
              <tr>
                
                <th style="width: 10px">#</th>
                <th>Nombre</th>
                <th>Kilómetros</th>
                <th>Estado</th>
                <th>Acciones</th>

              </tr> 

            </thead>
            <tbody>
              
              <?php

                  $item = null;
                  $valor = null;

                  $ciudades = ControladorCiudades::ctrMostrarCiudades($item, $valor);

                  foreach ($ciudades as $key => $value) {
                    
                    echo '<tr>
                
                          <td>'.($key+1).'</td>
                          <td>'.$value["nombre"].'</td>
                          <td>'.$value["kilometros"].'</td>';

                          if ($value["estado"] != 0) {
                          
                          echo '<td><button class="btn btn-success btn-xs" onclick="Activar()" idCiudad="'.$value["id_ciudad"].'" estadoCiudad="0">Activado</button></td>';

                        }else{

                          echo '<td><button class="btn btn-danger btn-xs" onclick="Activar()" idCiudad="'.$value["id_ciudad"].'" estadoCiudad="1">Desactivado</button></td>';
                        }

                          echo '<td>
                            
                            <div class="btn-group">
                                
                              <button class="btn btn-warning btnEditarCiudad" idCiudad="'.$value["id_ciudad"].'" data-toggle="modal" data-target="#modalEditarCiudad"><i class="fa fa-pencil"></i></button>
                              <button class="btn btn-danger btnEliminarCiudad" idCiudad="'.$value["id_ciudad"].'"><i class="fa fa-times"></i></button>

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
  MODAL AGREGAR CIUDAD
  ======================================-->


<div id="modalAgregarCiudad" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar Ciudad</h4>

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


              <!-- ENTRADA PARA LOS KILOMETROS -->

              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input class="form-control input-lg" type="text" name="nuevoKilometros" placeholder="Ingresar kilómetros" required>

                </div>

              </div>


              

            </div>
            
          </div>

          <!--=====================================
          PIE DEL MODAL
          ======================================-->



          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Ciudad</button>

          </div>

          <?php

              $crearciudad = new ControladorCiudades();
              $crearciudad -> ctrCrearCiudad();

          ?>

    </form>
    </div>

  </div>
</div>

  
  <!--=====================================
  MODAL EDITAR CIUDAD
  ======================================-->


<div id="modalEditarCiudad" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Editar Ciudad</h4>

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
                  <input class="form-control input-lg" type="text" name="editarCiudad" id="editarCiudad" required>
                  
                </div>

              </div>  

                <!-- ENTRADA PARA LOS KILOMETROS -->

              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input class="form-control input-lg" type="text" name="editarKilometros" id="editarKilometros" required>

                  <input type="hidden" name="idCiudad" id="idCiudad">


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

              $editarciudad = new ControladorCiudades();
              $editarciudad -> ctrEditarCiudad();

          ?>

    </form>
    </div>

  </div>
</div>

  <?php

      $borrarciudad = new ControladorCiudades();
      $borrarciudad -> ctrBorrarCiudad();

  ?>
  

  