<?php echo  form_open_multipart('admin/add'); ?>
<div class="row">
        <div class="col-md-6">
            
        

	<div>
		<label>Judul Event</label> 
		<input type="text" name="judul_event" id="judul_event" value="<?php echo $this->input->post('judul_event'); ?>" class="form-control form-sm" />
		<div id="demo">Nama acara yang di selenggarakan.</div>
	</div>
    <div>
	    <br>
    <div>
		<label>Alamat</label> 
		<input type="text" name="alamat" id="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control form-sm" />
		<div id="demo">Alamat</div>
	</div>
    <div>
	    <br>
    <div>
		<label>Deskripsi</label> 
		<input type="text" name="deksripsi" id="deksripsi" value="<?php echo $this->input->post('deskripsi'); ?>" class="form-control form-sm" />
		<div id="demo">Deskripsi tentang event</div>
	</div>
    <div>
	    <br>
    <div>
		<label>Kategori</label> 
		<input type="text" name="kategori" id="kategori" value="<?php echo $this->input->post('kategori'); ?>" class="form-control form-sm" />
		<div id="demo">Kategori tentang event</div>
	</div>
    <div>
	    <br>
    <div>
		<label>Tanggal Mulai</label> 
		<input type="date" name="tanggal_mulai" id="tanggal_mulai" value="<?php echo $this->input->post('tanggal_mulai'); ?>" class="form-control form-sm" />
		<div id="demo">Tanggal tentang event</div>
	</div>
    <div>
	    <br>
    <div>
		<label>Tanggal Akhir</label> 
		<input type="date" name="tanggal_akhir" id="tanggal_akhir" value="<?php echo $this->input->post('tanggal_akhir'); ?>" class="form-control form-sm" />
		<div id="demo">Tanggal tentang event</div>
	</div>
    <div>
	    <br>
    <div>
		<label>Waktu Mulai</label> 
		<input type="text" name="waktu_mulai" id="waktu_mulai" value="<?php echo $this->input->post('waktu_mulai'); ?>" class="form-control form-sm" />
		<div id="demo">Waktu tentang event</div>
	</div>
    <div>
	    <br>
    <div>
		<label>Waktu Akhir</label> 
		<input type="text" name="waktu_akhir" id="waktu_akhir" value="<?php echo $this->input->post('waktu_akhir'); ?>" class="form-control form-sm" />
		<div id="demo">Waktu tentang event</div>
	</div>
    <div>
	    <br>
    <div>
		<label>Waktu Akhir</label> 
		<input type="text" name="waktu_akhir" id="waktu_akhir" value="<?php echo $this->input->post('waktu_akhir'); ?>" class="form-control form-sm" />
		<div id="demo">Waktu tentang event</div>
	</div>
    <div>
		<label>Galeri</label> 
		<input type="text" name="upload" id="upload" value="<?php echo $this->input->post('upload'); ?>" class="form-control form-sm" />
		<div id="demo">Aset tentang event</div>
	</div>

    <div class="col-md-12" style="margin-bottom: 20px;padding-top: 30px;text-align: center;">
	    <center>
	    <button type="submit" class="btn btn-primary col-md-3">Save</button>
	    </center>
	
	</div>
    </div>
    

    <?php echo form_close(); ?>