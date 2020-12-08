  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gastos diarios
        <small>Crud</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Crud Gastos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="content">
        <div class="col-ms-12">
          <!-- Horizontal Form -->
          <div class="box box-info ">
            <center><div class="box-header with-border col">
              <h3 class="box-title"><b>Crud de Gastos Diarios</b></h3>
            </div></center>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url().'/crear' ?>" >
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Concepto de gasto
                  </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="concepto" name="concepto" placeholder="Cargos de Luz">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Monto de gasto
                  </label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="monto" name="monto" placeholder="$10000">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Fecha
                  </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="fecha" name="fecha" placeholder="8/12/2020">
                  </div>
                </div>
                <center>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-dark">Agregar</button>
                  </div>
                </center>

              </div>
            </form>
          </div>
        </div>
      </div>
    </section>