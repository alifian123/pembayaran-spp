<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
	<table width="100%" border ="1px">
		<tr>
                           
                            <th>NISN</th>
                            <th>Tanggal</th>
                             <th>Bulan</th>
                              <th>Tahun</th>
                               <th>ID SPP</th>
                            <th>ID Pembayaran</th>
                        </tr>

        <?php
                        $no=0;
                        foreach($pembayaran as $value): ?>
                        <tr>
                           
                            <td><?php echo $value->nisn; ?></td>
                            <td><?php echo $value->tgl_bayar; ?></td>
                            <td><?php echo $value->bulan_dibayar; ?></td>
                            <td><?php echo $value->tahun_dibayar; ?></td>
                            <td><?php echo $value->id_spp; ?></td>
                            <td><?php echo $value->id_pembayaran; ?></td>
                        </tr>
                        <?php
                        endforeach;
                        ?>


                    </table>
</body></html>