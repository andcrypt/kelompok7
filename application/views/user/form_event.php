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
		<input type="text" name="deskripsi" id="deskripsi" value="<?php if(isset($id)){ echo $event['deskripsi']; } ?>"class="form-control form-sm" />
		
	</div>

	<div>
		<label>Kategori</label> 
		<input type="text" name="kategori" id="kategori" value="<?php if(isset($id)){ echo $event['id_kategori']; } ?>" class="form-control form-sm" />
		
	</div>

	<div>
		<label>Tanggal Mulai</label> 
		<input type="date" name="tanggal_mulai" id="tanggal_mulai" value="<?php if(isset($id)){ echo $event['tanggal_mulai']; } ?>" class="form-control form-sm" />
		
	</div>

	<div>
		<label>Tanggal Akhir</label> 
		<input type="date" name="tanggal_akhir" id="tanggal_akhir" value="<?php if(isset($id)){ echo $event['tanggal_selesai']; } ?>" class="form-control form-sm" />
	</div>

	<div>
		<label>Waktu Mulai</label> 
		<input type="text" name="waktu_mulai" id="waktu_mulai" value="<?php if(isset($id)){ echo $event['waktu_mulai']; } ?>" class="form-control form-sm" />
		
	</div>

	<div>
		<label>Waktu Akhir</label> 
		<input type="text" name="waktu_akhir" id="waktu_akhir" value="<?php if(isset($id)){ echo $event['waktu_akhir']; } ?>" class="form-control form-sm" />
	</div>

	<div>
		<label>Galeri</label> 
		<input type="text" name="galeri" id="galeri" value="<?php if(isset($id)){ echo $event['id_galeri']; } ?>" class="form-control form-sm" />
	</div>


		<div class="col-md-12" style="margin-bottom: 20px;padding-top: 30px;text-align: center;">
			<center>
				<button type="submit" class="btn btn-primary col-md-3">Save</button>
			</center>

		</div>
	</div>


	
	
</div>

<?php echo form_close(); ?>
