<link rel="stylesheet" href="<?php echo URL ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo URL ?>css/bootstrap-theme.min.css">

<header>
  <nav class="wow bounceInLeft" data-wow-duration="2s">
    <?php require APP. 'view/_templates/menu.php'; ?>
  </nav>
</header>

</div>
<div class="clearfix"></div>
<div class="inner_content">
  <div class="inner_content_w3_agile_info">
    <div class="agile_top_w3_grids">
      <div class="row row-table">
        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="panel panel-primary">
            <div class="panel-heading" stlyle="height: 70px; width: 100px">
              <center><span style="text-align:center; color: #fff; margin-top: 10px; margin-bottom: 10px; font-size: 18px">
                <strong>Listado de Personas</strong></span></center>
                <span id="img-exports">
                  <a href="<?= URL; ?>home/reportePdf" title="Exportar a PDF">
                    <img src="<?= URL; ?>img/descarga.png" alt="No se pudo cargar la imagen" width="30" height="30" border="1px solid skyblue">
                  </a>
                  &nbsp;
                  <a href="<?= URL; ?>home/reporteExcel" title="Exportar a EXCEL">
                    <img src="<?= URL; ?>img/excel.jpg" alt="No se pudo cargar la imagen" width="30" height="30" border="1px solid skyblue">
                  </a>
                </span>
            </div>
            <div class="panel-body">
              <div class="dataTable_wrapper">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="tablaClientes">
                    <thead>
                      <tr>
                        <th>Nombre Cliente</th>
                        <th>Fecha Diligenciamiento</th>
                        <th>Lugar Diligenciamiento</th>
                        <th>Sexo</th>
                        <th>Fecha Nacimiento</th>
                        <th>Tipo Documento</th>
                        <th>Documento</th>
                        <th>Correo Electrónico</th>
                        <th>Confirmación Habeas Data</th>
                        <th>Fecha Confirmación Habeas Data</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($clientes as $value): ?>
                        <tr>
                          <td><?= ucwords($value['nombre1'] . " " . $value['nombre2'] . " " . $value['apellido1'] . " ". $value['apellido2']); ?></td>
                          <td><?= $value['fecha_diligenciamiento']; ?></td>
                          <td><?= ucwords($value['lugar_diligenciamiento']); ?></td>
                          <td><?= $value['sexo']; ?></td>
                          <td><?= $value['fecha_nacimiento']; ?></td>
                          <td><?= $value['tipo_documento']; ?></td>
                          <td><?= $value['documento']; ?></td>
                          <td><?= $value['correo_electronico']; ?></td>
                          <td><?= $value['confirmado']; ?></td>
                          <td><?= $value['fecha_confirmacion']; ?></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
