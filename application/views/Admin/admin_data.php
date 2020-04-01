<!-- Content Header (Page header) -->
<section class="content-header">
      <h1> Data 
        <small>Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content"> 
      <div class="box">
          <div class="box-header">
              <!-- <h3 class="box-tittle">Data Admin</h3> -->
              <div class="pull-right">
                  <a href="<?=site_url('admin/add')?>" class="btn btn-primary btn-flat">
                      <i class="fa fa-user-plus"></i> Tambah
                  </a>
              </div>
          </div>

          <div class="box-body table-responsive">
              <table class="table table-bordered table-striped">
                   
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Username</th>
                          <th>Name</th>
                          <th>Alamat</th>
                          <th>Opsi</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $no= 1;
                      foreach($row->result() as $key => $data) {?>
                      <tr>
                          <td><?=$no++?>.</td>
                          <td><?=$data->username?></td>
                          <td><?=$data->nama?></td>
                          <td><?=$data->alamat?></td>
                          <td class="text-center" width="160px">
                            <form action="<?=site_url('admin/del')?>" method="post">
                              <a href="<?=site_url('admin/edit/'.$data->admin_id)?>" class="btn btn-primary btn-xs">
                                  <i class="fa fa-pencil"></i> Edit
                              </a>
                              <input type="hidden" name="admin_id" value="<?=$data->admin_id?>">
                              <button onclick="return confirm('Apakah Anda yakin ? ')" class="btn btn-danger btn-xs">
                                  <i class="fa fa-trash"></i> Hapus
                              </button>
                            </form>
                          </td>
                      </tr>
                      <?php
                    } ?>
                  </tbody>
              </table>
          </div>
      </div>
    
    </section> <!-- End Main Conten -->