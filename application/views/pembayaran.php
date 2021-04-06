 <!-- Content Wrapper. Contains page content -->
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                <h5 class="m-1"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pembayaran</th>
                            <th>NISN</th>
                            <th>Tgl Bayar</th>
                            <th>Bulan Dibayar</th>
                            <th>Tahun Dibayar</th>
                            <th>ID Spp</th>
                            <th>Jumlah Bayar</th>
                            <th>Opsi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=0;
                        foreach ($pembayaran->result() as $value):
                            $no++;
                        ?>
                        <tr>
                             <td><?php echo $no; ?></td>
                            <td><?php echo $value->id_pembayaran; ?></td>
                         
                            <td><?php echo $value->nisn; ?></td>
                            <td><?php echo $value->tgl_bayar; ?></td>
                            <td><?php echo $value->bulan_dibayar; ?></td>
                            <td><?php echo $value->tahun_dibayar; ?></td>
                            <td><?php echo $value->id_spp; ?></td>
                            <td><?php echo $value->jumlah_bayar; ?></td>
                            
                            
                            <td>
                                <a href="<?php echo base_url('pembayaran/ubah/').$value->id_pembayaran ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?php echo base_url('pembayaran/hapus/').$value->id_pembayaran ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                        <tfoot>
                        </table>

          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
        <div class="card-footer clearfix">
            <a href="<?php echo base_url('pembayaran/tambah') ?>" class="btn btn-xs btn-primary">Tambah Data</a>
             <a href="<?php echo base_url('pembayaran/pdf')?>" class="btn btn-danger  btn-primary">PDF</a>
            
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
