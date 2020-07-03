
<div class="container">
<table>
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
		<td>TTL</td>
		<td>Pekerjaan</td>
	</tr>
	<?php
		$no=1;
		foreach ($biodata as $bio):
	?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $bio->nama ?></td>
		<td><?php echo $bio->jk ?></td>
		<td><?php echo $bio->ttl ?></td>
		<td><?php echo $bio->pekerjaan ?></td>
	</tr>
<?php endforeach; ?>
</table>
</div>
