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
              <h3 class="box-title">Tambah Pegawai</h3>
              <div class="pull-right">
                  <a href="<?=site_url('pegawai')?>" class="btn btn-warning btn-flat">
                      <i class="fa fa-undo"></i> Kembali
                  </a>
              </div>
          </div>

          <div class="box-body">
              <div class="row">
                  <div class="col-md-4">
                      <?php //echo validation_errors();?>
                      <form action="" method="post">
                          <div class="form-group <?=form_error('nip') ? 'has-error' : null?>">
                              <label>NIP *</label>
                              <input type="text" name="nip" value="<?=set_value('nip')?>" class="form-control">
                              <?=form_error('nip')?>
                          </div>
                          <div class="form-group <?=form_error('nik') ? 'has-error' : null?>">
                              <label>NIK *</label>
                              <input type="text" name="nik" value="<?=set_value('nik')?>" class="form-control">
                              <?=form_error('nik')?>
                          </div>
                          <div class="form-group <?=form_error('npwp') ? 'has-error' : null?>">
                              <label>NPWP *</label>
                              <input type="text" name="npwp" value="<?=set_value('npwp')?>" class="form-control">
                              <?=form_error('npwp')?>
                          </div>
                          <div class="form-group <?=form_error('nama') ? 'has-error' : null?>">
                              <label>Nama *</label>
                              <input type="text" name="nama" value="<?=set_value('nama')?>" class="form-control">
                              <?=form_error('nama')?>
                          </div>
                          <div class="form-group <?=form_error('tempatlahir') ? 'has-error' : null?>">
                              <label>Tempat Lahir *</label>
                              <input type="text" name="tempatlahir" value="<?=set_value('tempatlahir')?>" class="form-control">
                              <?=form_error('tempatlahir')?>
                          </div>
                          <div class="form-group <?=form_error('tanggallahir') ? 'has-error' : null?>">
                              <label>Tanggal Lahir *</label>
                              <input type="date" name="tanggallahir" value="<?=set_value('tanggallahir')?>" class="form-control">
                              <?=form_error('tanggallahir')?>
                          </div>
                          <div class="form-group <?=form_error('jeniskelamin') ? 'has-error' : null?>">
                              <label>Jenis Kelamin *</label> <small>Laki - laki / Perempuan </small>
                              <input type="text" name="jeniskelamin" value="<?=set_value('jeniskelamin')?>" class="form-control">
                              <?=form_error('jeniskelamin')?>
                          </div>
                          <div class="form-group <?=form_error('alamat') ? 'has-error' : null?>">
                              <label>Alamat *</label>
                              <textarea name="alamat" class="form-control"><?=set_value('alamat')?></textarea>
                              <?=form_error('alamat')?>
                          </div>
                          <div class="form-group <?=form_error('notelepone') ? 'has-error' : null?>">
                              <label>No Handphone *</label>
                              <input type="text" name="notelepone" value="<?=set_value('notelepone')?>" class="form-control">
                              <?=form_error('notelepone')?>
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