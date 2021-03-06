<!DOCTYPE html>  
  <html lang="en">  
  <head>  
   <title>Login</title>  
   <meta charset="utf-8">  
   <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
   <!-- Latest compiled and minified CSS -->  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >  
   <style type="text/css">  
    .form-box{  
     max-width: 500px;  
     position: relative;  
     margin: 5% auto;  
    }  
   </style>  
  </head>  
  <body>  
   <div class="wrapper">  
    <div class="container">  
     <div class="row">  
      <div class="form-box">  
       <div class="panel panel-primary">  
        <div class="panel-heading text-center">  
         <h3>Login</h3>  
        </div>  
        <div class="panel-body">  
         <div class="row">  
           <div class="col-sm-12">  
             <?php echo $this->session->flashdata('msg'); ?>  
           </div>  
         </div>  
         <?php echo form_open('user/login'); ?>
          <div class="row">  
           <div class="col-sm-12">  
            <div class="form-group">  
                    <label class="control-label" for="username">Username</label>  
                      <div >  
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required=""></div>  
                  </div>  
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
                  <div class="row">  
                    <div class="col-md-12">  
                      
                        <button type="submit" class="btn btn-success">Sign In</button> 
                      <a href="<?php echo base_url(); ?>" class="btn btn-warning">Back</a>
                      
                    </div>  
                  </div>  
                </div>  
                <?php echo form_close(); ?>
        </div>    
       </div>  
      </div>  
     </div>  
    </div>  
   </div>  
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
  </body>  
  </html>