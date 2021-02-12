<!-- Meta -->
<?php $this->load->view('backend/template/meta') ?>

<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view('backend/template/navbar') ?>

  <!-- Main Sidebar Container -->
  <?php $this->load->view('backend/template/sidebar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $page_title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $page_title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?php echo $page_title ?></h3>
              </div>
              <!-- /.card-header -->

              <?php echo validation_errors() ?>

              <!-- form start -->
              <?php echo form_open($action) ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Silahkan isi nama produk">
                  </div>
                  <div class="form-group">
                    <label>Harga Produk</label>
                    <input type="text" class="form-control" name="harga" id="harga" placeholder="Silahkan isi harga produk">
                  </div>
                  <div class="form-group">
                    <label>Tags</label>
                    <select class="form-control" name="nama_tags[]" id="nama_tags" multiple>
                      <option value="AL">Alabama</option>
                      <option value="ID">Indonesia</option>
                      <option value="JP">Jepang</option>
                      <option value="RS">Rusia</option>
                      <option value="WY">Wyoming</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php $this->load->view('backend/template/footer') ?>

</div>
<!-- ./wrapper -->

<!-- JS -->
<?php $this->load->view('backend/template/js') ?>

<link href="<?php echo base_url('assets/plugins/') ?>select2/css/select2.min.css" rel="stylesheet" />
<script src="<?php echo base_url('assets/plugins/') ?>select2/js/select2.min.js"></script>

<script>
  // In your Javascript (external .js resource or <script> tag)
  $(document).ready(function() {
    $('#nama_tags').select2();
  });
</script>
</body>

</html>