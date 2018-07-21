<?php if ($this->session->userdata('logged_in') == null): ?>
  <div class="panel panel-primary">
  <div class="panel-heading ">
    PESAN (GANTIEN DEWE YO FORM E)
  </div>
<div class="panel-body">
  <?php echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => '')); ?> 
          <div class="row">  
           <div class="col-sm-6">  
            <div class="form-group">  
                    <label class="control-label" for="nama">Nama Lengkap</label>  
                      <div >  
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="First Name" required="">  
                        <span class="text-danger"><?php echo form_error('nama'); ?></span>  
                      </div>  
                  </div>  
          <div class="form-group">  
                  <label class="control-label" for="email">Email</label>  
                    <div>  
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">  
                      <span class="text-danger"><?php echo form_error('email'); ?></span>  
                    </div>  
                </div> 
                <div class="form-group">  
                  <label class="control-label" for="username">Username</label>  
                    <div>  
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="">  
                      <span class="text-danger"><?php echo form_error('username'); ?></span>  
                    </div>  
                </div>  
                <div class="form-group">  
                  <label class="control-label" for="pswd">Password</label>  
                    <div>  
                      <input type="password" class="form-control" id="pswd" name="password" placeholder="Password" required="">  
                      <span class="text-danger"><?php echo form_error('password'); ?></span>  
                    </div>  
                </div>  
                <div class="form-group">  
                  <label class="control-label" for="cn-pswd">Confirm Password</label>  
                    <div>  
                      <input type="password" class="form-control" id="cn-pswd" name="passwordkonfrim" placeholder="Confirm Password" required="">  
                      <span class="text-danger"><?php echo form_error('passwordkonfrim'); ?></span>  
                    </div>  
                </div>  
                <div class="form-group">   
                  <div class="row">  
                    <div class="col-sm-offset-5 col-sm-3 btn-submit">  
                      <button type="submit" class="btn btn-success">Register</button>  
                    </div>  
                  </div>  
                </div>  
<?php echo form_close(); ?>
</div>  
</div>
<?php else: ?>
  <div class="panel panel-primary">
  <div class="panel-heading ">
    DETAIL EVENT
  </div>
<div class="panel-body">
  <table class="table">
    <tr>
      <td>ID Event</td>
      <td>:</td>
      <td><?php echo $event->id_event; ?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><?php echo $event->nama_event; ?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><?php echo $event->alamat; ?></td>
    </tr>
    <tr>
      <td>Deskripsi</td>
      <td>:</td>
      <td><?php echo $event->deskripsi; ?></td>
    </tr>
    <tr>
      <td>Kategori</td>
      <td>:</td>
      <td><?php echo $event->kategori; ?></td>
    </tr>
    <tr>
      <td>Tanggal Mulai</td>
      <td>:</td>
      <td><?php echo $event->tanggal_mulai; ?></td>
    </tr>
    <tr>
      <td>Tanggal Selesai</td>
      <td>:</td>
      <td><?php echo $event->tanggal_selesai; ?></td>
    </tr>
    <tr>
      <td>Waktu Mulai</td>
      <td>:</td>
      <td><?php echo $event->waktu_mulai; ?></td>
    </tr>
    <tr>
      <td>Waktu Akhir</td>
      <td>:</td>
      <td><?php echo $event->waktu_akhir; ?></td>
    </tr>
  </table>
</div>
</div>
<?php endif ?>