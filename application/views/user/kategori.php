<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                  Kategori Event
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
<div class="body">
               
               <a href="<?php echo site_url('kategori/form_kategori'); ?>" class="btn btn-primary">Add kategori</a><br><br>
          
           <div class="table-responsive">
               <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                   <thead>
                       <tr>
                           <th>Id</th>
                           <th>Nama Kategori</th>
                           <th>Deskripsi</th>
                           <th>Actions</th>
                       </tr>
                   </thead>
                   <tbody>
                       <?php
                       $no=1;
                        foreach($kategori as $a){ ?>
                       <tr>
                           <td><?php echo $no; ?></td>
                           <td><?php echo $a['nama_kategori']; ?></td>
                           <td><?php echo $a['deskripsi']; ?></td>
                           
                          
                          
                           <td>
                            
                            <a href="<?php echo site_url('kategori/form_kategori/'.$a['id_kategori']); ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="<?php echo site_url('kategori/remove_kategori/'.$a['id_kategori']); ?>" class="btn btn-warning btn-sm">Delete</a>
                        </td>
                    </tr>
                    <?php 
                    $no++;
                     } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>