<div class="container">
        <div class="col-sm-4">
        <h4>Upload Galeri</h4>
            <form class="form-horizontal" id="submit" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="judul" class="form-control" placeholder="Judul">
                </div>
                <div class="form-group">
                

                <label>event</label> 
                <select name="event" id="event" class="form-control form-sm show-tick"> 
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
                    <input type="file" name="file"><br>
                </div>
 
                <div class="form-group">
                    <button class="btn btn-success" id="btn_upload" type="submit">Upload</button>
                </div>
            </form>   
        </div>
    </div>

<script type="text/javascript">
    $(document).ready(function(){
        
        $('#submit').submit(function(e){
            e.preventDefault();
            //$('select').formSelect();
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