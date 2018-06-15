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
		<label>Nama Lengkap</label> 
		<input type="text" name="nama_admin" id="nama_admin" value="<?php if(isset($id)){ echo $event['nama_admin']; } ?>" class="form-control form-sm" />
	</div>

    <div>
		<label>Username</label> 
		<input type="text" name="username" id="username" value="<?php if(isset($id)){ echo $event['username']; } ?>" class="form-control form-sm" />
		
	</div>


                  <label class="control-label" for="pswd">Password</label>  
                    <div>  
                      <input type="password" class="form-control" id="pswd" name="password" placeholder="Password" required="">  
                      <span class="text-danger"><?php echo form_error('password'); ?></span>  
                    </div>  

                  <label class="control-label" for="cn-pswd">Confirm Password</label>  
                    <div>  
                      <input type="password" class="form-control" id="cn-pswd" name="passwordkonfrim" placeholder="Confirm Password" required="">  
                      <span class="text-danger"><?php echo form_error('passwordkonfrim'); ?></span>  
                    </div>  

                    <div class="col-md-12" style="margin-bottom: 20px;padding-top: 30px;text-align: center;">
			<center>
				<button type="submit" class="btn btn-primary col-md-3">Save</button>
			</center>

		</div>
    </div>
    <?php echo form_close(); ?>