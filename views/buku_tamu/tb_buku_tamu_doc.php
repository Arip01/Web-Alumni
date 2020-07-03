<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Tb_buku_tamu List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Pesan</th>
		<th>Tgl Pesan</th>
		
            </tr><?php
            foreach ($buku_tamu_data as $buku_tamu)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $buku_tamu->nama ?></td>
		      <td><?php echo $buku_tamu->email ?></td>
		      <td><?php echo $buku_tamu->pesan ?></td>
		      <td><?php echo $buku_tamu->tgl_pesan ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>