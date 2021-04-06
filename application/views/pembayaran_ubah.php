<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $subtitle; ?></h5>
              </div>
              <?php foreach ($pembayaran->result() as $value): ?>
                  <form class="formhorizontal" method="post" action="<?php echo base_url('pembayaran/update') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">ID Pembayaran</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?php echo $value->id_pembayaran; ?>" disabled>
                            </div>
                            <input type="hidden" class="formcontrol" name="id_pembayaran" value="<?php echo $value->id_pembayaran; ?>"placeholder="ID Pembayaran" required>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="nisn" value="<?php echo $value->nisn; ?>" placeholder="NISN" required>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal Bayar</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="tglbayar" value="<?php echo $value->tgl_bayar; ?>" placeholder="Tanggal" required>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Bulan Dibayar</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="bulandibayar" value="<?php echo $value->bulan_dibayar; ?>" placeholder="Bulan" required>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tahun Dibayar</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="tahundibayar" value="<?php echo $value->tahun_dibayar; ?>" placeholder="Tahun" required>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ID SPP</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="idspp" value="<?php echo $value->id_spp; ?>" placeholder="ID SPP" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="jumlahbayar" value="<?php echo $value->jumlah_bayar; ?>" placeholder="Jumlah " required>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-default">Reset</button>
                    </div>
                </form>
              <?php endforeach; ?>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
