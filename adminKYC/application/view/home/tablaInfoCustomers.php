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
                <strong>Customers</strong></span></center>
                <span id="img-exports">
                  <a href="<?= URL; ?>home/reporteExcel" title="Export All To Excel">
                    <img src="<?= URL; ?>img/excel.jpg" alt="Image Not Found" width="30" height="30" border="1px solid skyblue">
                  </a>
                  <a href="<?= URL; ?>home/reporteExcel2" title="Export to excel only customers who have completed the entire form">
                    <img src="<?= URL; ?>img/excel.jpg" alt="Image Not Found" width="30" height="30" border="1px solid skyblue">
                  </a>
                </span>
            </div>
            <div class="panel-body">
              <div class="dataTable_wrapper">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="tablaClientes">
                    <thead>
                      <tr>
                        <th>Company Name</th>
                        <th>Brand Name</th>
                        <th>Email</th>
                        <th>Company Phone</th>
                        <th>Creation Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($clientes as $value): ?>
                        <tr>
                          <td><?= $value['companyName']; ?></td>
                          <td><?= $value['brandName']; ?></td>
                          <td><?= $value['email']; ?></td>
                          <td><?= $value['phone']; ?></td>
                          <td><?= $value['createdAt']; ?></td>
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
