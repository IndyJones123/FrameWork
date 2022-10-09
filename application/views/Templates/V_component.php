<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Data</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="<?php echo base_url('Registration/save_data') ?>"><button type="button" class="btn btn-sm btn-outline-secondary">Tambah User Data</button></a>
          </div>
        </div>
      </div>

      <div class="table-responsive">
      <?php foreach ($account as $data) : ?>
          <div class="justify-content-center ">

          <ul class="list-group text-left bg1">
          
            <li class="list-group-item">ID Account :  <?php echo $data->id_Account ?></li>
            <li class="list-group-item">Email : <?php echo $data->Email ?></li>
            <li class="list-group-item">Username  : <?php echo $data->Username ?></li>
            <li class="list-group-item">Tgl Dibuat  : <?php echo $data->date_created ?></li>
            <li class="list-group-item">
              <a href="<?php echo base_url() ?>Registration/update_account/<?php echo $data->Username?>">UPDATE DATA</a> 
              OR 
              <a href="<?php echo base_url(); ?>Registration/delete_account/<?php echo $data->Username?>">DELETE DATA</a>
            </li>
            
            
          </ul>
          <br>
          </div>
          <?php endforeach; ?>

      </div>
    </main>
  </div>
</div>