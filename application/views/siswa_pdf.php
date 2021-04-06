<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

    <table width="100%" border="1px">
      <tr>
        <th>No</th>
        <th>NISN</th>
        <th>Nama</th>
        <th>Alamat</th>
      </tr>

      <?php
      $no= 1;
      foreach ($siswa as $mhs): ?>

      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $mhs->nisn ?></td>
        <td><?php echo $mhs->nama ?></td>
        <td><?php echo $mhs->alamat ?></td>

      </tr>

    <?php endforeach; ?>
  </table>

  </body>
  </html>