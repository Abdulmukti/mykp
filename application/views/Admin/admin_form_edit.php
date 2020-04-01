<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>Data 
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
              <h3 class="box-title">Edit Admin</h3>
              <div class="pull-right">
                  <a href="<?=site_url('admin')?>" class="btn btn-warning btn-flat">
                      <i class="fa fa-undo"></i> Kembali
                  </a>
              </div>
          </div>

          <div class="box-body">
              <div class="row">
                  <div class="col-md-4">
                      <?php //echo validation_errors();?>
                      <form action="" method="post">
                          <div class="form-group <?=form_error('nama') ? 'has-error' : null?>">
                              <label>Nama *</label>
                              <input type="hidden" name="admin_id" value="<?=$row->admin_id?>">
                              <input type="text" name="nama" value="<?=$this->input->post('nama') ?? $row->nama?>" class="form-control">
                              <?=form_error('nama')?>
                          </div>
                          <div class="form-group <?=form_error('username') ? 'has-error' : null?>">
                              <label>Username *</label>
                              <input type="text" name="username" value="<?=$this->input->post('username') ?? $row->username?>" class="form-control">
                              <?=form_error('username')?>
                          </div>
                          <div class="form-group <?=form_error('password') ? 'has-error' : null?>">
                              <label>Password</label><small>(Biarkan kosong jika tidak diganti)</small>
                              <input type="password" name="password" value="<?=$this->input->post('password')?>" class="form-control">
                              <?=form_error('password')?>
                          </div>
                          <div class="form-group <?=form_error('passconf') ? 'has-error' : null?>">
                              <label>Password konfirmasi</label>
                              <input type="password" name="passconf" value="<?=$this->input->post('passconf')?>" class="form-control">
                              <?=form_error('passconf')?>
                          </div>
                          <div class="form-group <?=form_error('alamat') ? 'has-error' : null?>">
                              <label>Alamat</label>
                              <textarea name="alamat" class="form-control"><?=$this->input->post('alamat') ?? $row->alamat?></textarea>
                              <?=form_error('alamat')?>
                          </div>
                          <div class="form-group">
                              <button type="submit" class="btn btn-success btn-flat">
                                  <i class="fa fa-paper-plane"></i> Simpan</button>
                              <button type="Reset" class="btn btn-flat"> Reset</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </section> <!-- End Main Conten -->