<div class="container">
        <div class="col-sm-4 col-md-offset-4">
        <h4>Upload Galeri</h4>
            <form class="form-horizontal" id="submit" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="judul" class="form-control" placeholder="Judul">
                </div>
                <div>
                <br>
                <label>event</label> 
                <select name="event" id="event" class="form-control form-sm"> 
                <option value="">-- Pilih event --</option>
                <?php
                    $event = $this->db->get('event')->result_array();
                    foreach ($event as $row) {
                ?>
				<option value="<?php echo $row['id_event']; ?>" <?php if(isset($id)){ if($row['id_event'] == $event['id_event']){ echo "selected"; } } ?>><?php echo $row['nama_event']; ?></option>
		<?php		
			}
		?>
		
		</select>
        <br>
        <br>
		
	</div>
				<div class="form-group">
                    <input type="date" name="tgl" class="form-control">
                </div>
                <div class="form-group">
                    <input type="file" name="file">
                </div>
 
                <div class="form-group">
                    <button class="btn btn-success" id="btn_upload" type="submit">Upload</button>
                </div>
            </form>   
        </div>
    </div>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#submit').submit(function(e){
            e.preventDefault();
            
            $.ajax({
                url:'<?php echo base_url();?>/galeri/do_upload',
                type:"post",
                data:new FormData(this),
                async: false,
                success: function (msg) {
                    alert(msg)
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });
    });
     
</script>