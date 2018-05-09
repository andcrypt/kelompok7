<?php 
if(isset($id)){ 
	echo form_open('kategori/edit_kategori/'.$id);
}else { 
	echo form_open('kategori/add_kategori'); 
} 
?>

<div class="row">
        <div class="col-md-6">
            
        

	<div>
		<label>Judul kategori</label> 
		<input type="text" name="nama_kategori" id="nama_kategori" value="<?php if(isset($id)){ echo $kategori['nama_kategori']; } ?>" class="form-control form-sm" />
	</div>

    <div>
		<label>Deksripsi</label> 
		<input type="text" name="deskripsi" id="deskripsi" value="<?php if(isset($id)){ echo $kategori['deskripsi']; } ?>"class="form-control form-sm" />
	</div>



		<div class="col-md-12" style="margin-bottom: 20px;padding-top: 30px;text-align: center;">
			<center>
				<button type="submit" class="btn btn-primary col-md-3">Save</button>
			</center>

		</div>
	</div>


	
	
</div>

<?php echo form_close(); ?>
