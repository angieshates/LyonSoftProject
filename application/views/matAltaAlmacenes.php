<?php include_once("sections/header.php") ?>

<body>

    <div id="wrapper">
       <!-- Menu de materiales -->
         <?php include_once ("menuMateriales.php") ?>

        <div id="page-wrapper">

              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <h1 id="IdTitulo" class="page-header">Alta de Almacen</h1>
                  </div>
                </div>

                <div class="row ">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8 ">

                    <form class="form-horizontal" action="index.php/uploader/altaAlmacen" method="POST" enctype="multipart/form-data">
                      <?php form_open_multipart('uploader/altaAlmacen'); ?>
                        <div class="form-group">
                          <label for="clave" class="control-label col-lg-9">Clave</label>
                          <div class="col-lg-3">
                           <?php foreach ($ultimoAlmacen as $ultimo) { ?>
                              <input type="text" name="clave" type="text" placeholder="<?php echo $ultimo['clave']+1 ?>" class="form-control" disabled>
                           <?php } ?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="descripcion" class="control-label col-lg-2">Descrpipcion</label>
                          <div class="col-lg-10">
                            <textarea name="descripcion" id="" rows="3  " class="form-control" placehoder="Descripción de la actividad">
                            </textarea>
                          </div>
                        </div>
                        <div class="form-group ">
                          <div class="col-lg-8"></div>
                          <div class="col-lg-2">
                            <button type="submit" class="btn btn-danger form-control">Cancel</button>
                          </div>
                          <div class="col-lg-2">
                            <button type="submit" class="btn btn-success form-control">Save</button>
                          </div>
                        </div>
                    </form>

                  </div>
                  <div class="col-lg-2"></div>
                </div>
        <!-- /#page-wrapper -->
              </div>
        </div>
    <!-- /#wrapper -->
    </div>

</body>
<?php  include_once ("sections/footer.php") ?>
