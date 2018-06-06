
 
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                  Event
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
               
                    <a href="<?php echo site_url('user/form_event'); ?>" class="btn btn-primary">Add event</a><br><br>
               
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Judul Event</th>
                                <th>Alamat</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Akhir</th>
                                <th>Waktu Mulai</th>
                                <th>Waktu Akhir</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                             foreach($event as $a){ ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $a['nama_event']; ?></td>
                                <td><?php echo $a['alamat']; ?></td>
                                <td><?php echo $a['deskripsi']; ?></td>
                                <td><?php echo $a['id_kategori']; ?></td>
                                <td><?php echo $a['tanggal_mulai']; ?></td>
                                <td><?php echo $a['tanggal_selesai']; ?></td>
                                <td><?php echo $a['waktu_mulai']; ?></td>
                                <td><?php echo $a['waktu_akhir']; ?></td>
                               
                                
                               
                               
                                <td>
                                 
                                 <a href="<?php echo site_url('user/form_event/'.$a['id_event']); ?>" class="btn btn-primary btn-sm">Edit</a>
                                 <a href="<?php echo site_url('user/remove_event/'.$a['id_event']); ?>" class="btn btn-warning btn-sm">Delete</a>
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
<!-- #END# Basic Examples -->   