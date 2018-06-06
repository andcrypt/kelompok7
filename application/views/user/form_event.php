<?php echo validation_errors(); ?>
<?php 
if(isset($id)){ 
	echo form_open('user/edit_event/'.$id);
}else { 
	echo form_open('user/add_event'); 
} 

?>

<div class="row">

        <div class="col-md-6">
		
            
        

	<div>
		<label>Judul Event</label> 
		<input type="text" name="nama_event" id="nama_event" value="<?php if(isset($id)){ echo $event['nama_event']; } ?>" class="form-control form-sm" />
	</div>

    <div>
		<label>Alamat</label> 
		<input type="text" name="alamat" id="alamat" value="<?php if(isset($id)){ echo $event['alamat']; } ?>" class="form-control form-sm" />
		
	</div>

    <div>
		<label>Deksripsi</label> 
		<textarea name="deskripsi" id="deskripsi" class="form-control form-sm"><?php if(isset($id)){ echo $event['deskripsi']; } ?></textarea>
		
	</div>

	<div>
		<label>Kategori</label> 
		<select name="kategori" id="kategori" class="form-control form-sm"> 
		<option value="">-- Pilih Kategori --</option>
		<?php
			$kategori = $this->db->get('kategori')->result_array();
			foreach ($kategori as $row) {
		?>
				<option value="<?php echo $row['id_kategori']; ?>" <?php if(isset($id)){ if($row['id_kategori'] == $event['id_kategori']){ echo "selected"; } } ?>><?php echo $row['nama_kategori']; ?></option>
		<?php		
			}
		?>
		
		</select>
		
	</div>

	<div>
		<label>Tanggal Mulai</label> 
		<input type="text" name="tanggal_mulai" id="tanggal_mulai" value="<?php if(isset($id)){ echo $event['tanggal_mulai']; } ?>" class="datepicker form-control form-sm" />
		
	</div>

	<div>
		<label>Tanggal Akhir</label> 
		<input type="text" name="tanggal_akhir"  id="tanggal_akhir" value="<?php if(isset($id)){ echo $event['tanggal_selesai']; } ?>" class="datepicker form-control form-sm" />
	</div>

	<div>
		<label>Waktu Mulai</label> 
		<input type="time" name="waktu_mulai" id="waktu_mulai" value="<?php if(isset($id)){ echo $event['waktu_mulai']; } ?>" class="timepicker form-control form-sm" data-time-format="H:i:s" />
		
	</div>

	<div>
		<label>Waktu Akhir</label> 
		<input type="time" name="waktu_akhir" id="waktu_akhir" value="<?php if(isset($id)){ echo $event['waktu_akhir']; } ?>" class="form-control form-sm" />
	</div>

	

		<div class="col-md-12" style="margin-bottom: 20px;padding-top: 30px;text-align: center;">
			<center>
				<button type="submit" class="btn btn-primary col-md-3">Save</button>
			</center>

		</div>
	</div>


	
	
</div>

<?php echo form_close(); ?>
