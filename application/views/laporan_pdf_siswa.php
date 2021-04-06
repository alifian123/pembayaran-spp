<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
	<table width="100%" border ="1px">
		<tr>
                            <th>NISN</th>
                            <th>Nama Lengkap</th>
                            <th>ID Kelas</th>
                        </tr>

        <?php
                        $no=0;
                        foreach($siswa as $value): ?>
                        <tr>
                           
                            <td><?php echo $value->nisn; ?></td>
                            <td><?php echo $value->nama; ?></td>
                            <td><?php echo $value->id_kelas; ?></td>
                        </tr>
                        <?php
                        endforeach;
                        ?>


                    </table>
</body></html>