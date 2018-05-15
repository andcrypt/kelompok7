
<h1>Menu Utama</h1>
	<table border="1">
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>alamat</th>
			<th>tanggal_mulai</th>		
		</tr>
		<?php 
		$no = $this->uri->segment('3') + 1;
		foreach($event as $u){ 
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $u->nama_event ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->tanggal_mulai ?></td>
		</tr>
	<?php } ?>
	</table>
	<br/>
	<?php 
	echo $this->pagination->create_links();
	?>
</body>
</html>