<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reglas de Asociación (Association Rules)
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-6">

          <div class="box box-default">
            <div class="box-header">
              <h3 class="box-title">Consulta</h3>
            </div>
            <div class="box-body">
              <form action="index.php?m=rules" method="POST">
                <div class="form-group">
                  <label>Carrera</label>
                  <select class="form-control select2" style="width: 100%;" name="Carrera">
                    <option value="ADMINISTRACION DE EMPRESAS" selected="selected">ADMINISTRACION DE EMPRESAS</option>
                    <option value="ARTE DRAMATICO">ARTE DRAMÁTICO</option>
                    <option value="BIOLOGIA">BIOLOGÍA</option>
                    <option value="CINE">CINE</option>
                    <option value="COMUNICACION SOCIAL Y PERIODISMO">COMUNICACIÓN SOCIAL Y PERIODISMO</option>
                    <option value="CONTADURIA PUBLICA">CONTADURÍA PÚBLICA</option>
                    <option value="CREACION LITERARIA">CREACIÓN LITERARIA</option>
                    <option value="DERECHO">DERECHO</option>
                    <option value="ECONOMIA">ECONOMÍA</option>
                    <option value="ESTUDIOS MUSICALES">ESTUDIOS MUSICALES</option>
                    <option value="INGENIERIA AMBIENTAL">INGENIERÍA AMBIENTAL</option>
                    <option value="INGENIERIA DE RECURSOS HIDRICOS Y GESTION AMBIENTAL">INGENIERÍA DE RECURSOS HÍDRICOS Y GESTIÓN AMBIENTAL</option>
                    <option value="INGENIERIA DE SISTEMAS">INGENIERÍA DE SISTEMAS</option>
                    <option value="INGENIERIA ELECTRONICA">INGENIERÍA ELECTRÓNICA</option>
                    <option value="INGENIERIA INDUSTRIAL">INGENIERÍA INDUSTRIAL</option>
                    <option value="INGENIERIA MECANICA">INGENIERÍA MECÁNICA</option>
                    <option value="MATEMATICAS">MATEMÁTICAS</option>
                    <option value="MERCADOLOGIA">MERCADOLOGÍA</option>
                    <option value="PUBLICIDAD">PUBLICIDAD</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Sexo:</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="Sexo" id="optionsRadios1" value="Femenino" checked="">
                      Femenino
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="Sexo" id="optionsRadios2" value="Masculino">
                      Masculino
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label>Fecha de Nacimiento</label>

                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="FNacimiento">
                  </div>
                  <!-- /.input group -->
                </div>

                <div class="form-group">
                    <label for="Edad">Edad</label>
                    <input type="number" class="form-control" placeholder="" name="Edad">
                </div>

                <div class="form-group">
                    <label for="Semestre">Semestre</label>
                    <input type="number" class="form-control" placeholder="" name="Semestre">
                </div>

                <div class="form-group">
                    <label for="ACursadas">Asignaturas Cursadas</label>
                    <input type="number" class="form-control" placeholder="" name="ACursadas">
                </div>

                <div class="form-group">
                    <label for="AAprobadas">Asignaturas Aprobadas</label>
                    <input type="number" class="form-control" placeholder="" name="AAprobadas">
                </div>

                <div class="form-group">
                    <label for="CCursados">Creditos Cursados</label>
                    <input type="number" class="form-control" placeholder="" name="CCursados">
                </div>

                <div class="form-group">
                    <label for="CAprobados">Creditos Aprobados</label>
                    <input type="number" class="form-control" placeholder="" name="CAprobados">
                </div>

                <div class="form-group">
                    <label for="PUPeriodo">Promedio del Ultimo Periodo</label>
                    <input type="number" class="form-control" placeholder="" name="PUPeriodo">
                </div>

                <div class="form-group">
                    <label for="PAcumulado">Promedio Acumulado</label>
                    <input type="number" class="form-control" placeholder="" name="PAcumulado">
                </div>

                <div class="form-group">
                    <label for="Duracion">Duración</label>
                    <input type="number" class="form-control" placeholder="" name="Duracion">
                </div>

                <input class="btn btn-block btn-primary btn-lg" type="submit" value="Enviar">
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Resultado</h3>
            </div>
            <div class="box-body">
              
              <div class="form-group">
                    <label>Carrera</label>
                    <input type="text" class="form-control" placeholder="" name="estado" value="<?php echo $Carrera ?>" disabled>
              </div>
              <div class="form-group">
                    <label>Sexo</label>
                    <input type="text" class="form-control" placeholder="" name="estado" value="<?php echo $Sexo ?>" disabled>
              </div>
              <div class="form-group">
                    <label>Fecha de Nacimiento</label>
                    <input type="text" class="form-control" placeholder="" name="estado" value="<?php echo $FechaNacimiento ?>" disabled>
              </div>
              <div class="form-group">
                    <label>Edad</label>
                    <input type="text" class="form-control" placeholder="" name="estado" value="<?php echo $Edad ?>" disabled>
              </div>
              <div class="form-group">
                    <label>Semestre</label>
                    <input type="text" class="form-control" placeholder="" name="estado" value="<?php echo $Semestre ?>" disabled>
              </div>
              <div class="form-group">
                    <label>Asignaturas Cursadas</label>
                    <input type="text" class="form-control" placeholder="" name="estado" value="<?php echo $AsignaturasCursadas ?>" disabled>
              </div>
              <div class="form-group">
                    <label>Asignaturas Aprobadas</label>
                    <input type="text" class="form-control" placeholder="" name="estado" value="<?php echo $AsignaturasAprobadas ?>" disabled>
              </div>
              <div class="form-group">
                    <label>Creditos Cursados</label>
                    <input type="text" class="form-control" placeholder="" name="estado" value="<?php echo $CreditosCursados ?>" disabled>
              </div>
              <div class="form-group">
                    <label>Creditos Aprobados</label>
                    <input type="text" class="form-control" placeholder="" name="estado" value="<?php echo $CreditosAprobados ?>" disabled>
              </div>
              <div class="form-group">
                    <label>Promedio del Ultimo Periodo</label>
                    <input type="text" class="form-control" placeholder="" name="estado" value="<?php echo $PromedioUltimoPeriodo ?>" disabled>
              </div>
              <div class="form-group">
                    <label>Promedio Acumulado</label>
                    <input type="text" class="form-control" placeholder="" name="estado" value="<?php echo $PromedioAcumulado ?>" disabled>
              </div>
              <div class="form-group">
                    <label>Duración</label>
                    <input type="text" class="form-control" placeholder="" name="estado" value="<?php echo $Duracion ?>" disabled>
              </div>


              <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" placeholder="" name="estado" value="<?php echo $estado ?>" disabled>
              </div>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>