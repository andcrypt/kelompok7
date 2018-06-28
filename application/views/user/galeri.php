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

             <a href="<?php echo site_url('galeri/input'); ?>" class="btn btn-primary">Add Galeri</a><br><br>

             <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                 <thead>
                     <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($galeri as $key => $value): ?>
                        <tr>
                            <td><?php echo $value['id_galeri'] ?></td>
                            <td><?php echo $value['nama_foto'] ?></td>
                            <td><?php echo $value['tanggal_upload'] ?></td>
                            <td><?php echo $value['gambar'] ?></td>
                            <td>
                                <a href="<?php echo site_url('galeri/hapus/'.$value['id_galeri']) ?>" class="btn btn-warning btn-sm">hapus</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>   
    </div>
</div>
</div>
</div>