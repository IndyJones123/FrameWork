<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('style/V_home.css')?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Home</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light" id="nav1">
<ol class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Registration/save_data') ?>">
                  <h5>Tambah Data Member</h5>
                </a>
            </li>

        </ol>
</nav>

<div class="container">
  <div class="row col-basic">
  <h2>Data Member</h2>

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

          </div>
          <?php endforeach; ?>
        </div>
    </div>
  </div>
</div>



</body>
</html>