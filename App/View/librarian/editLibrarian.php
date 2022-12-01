<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">UPDATE LIBRARIAN</label>
    <?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>
   <div class="">
      <form method="post" action="<?=\Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/updateLibrarian/$data->id_librarians")?>">
      <div class="form-group f1">
          <label for="nama_laptop">USERNAME</label>
          <input type="text" class="form-control" value="<?= $data->username ?>" id="librarian_name" name="username">
        </div>
        <div class="form-group f1">
          <label for="nama_laptop">EMAIL</label>
          <input type="text" class="form-control" value="<?= $data->email ?>" id="email" name="email">
        </div>
        <div class="form-group f1">
          <label for="nama_laptop">PASSWORD</label>
          <input type="text" class="form-control" value="<?= $data->password ?>" id="password" name="password">
        </div>
        <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>" id="updated_at" name="updated_at">
       
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/librarian") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>
      </form>

    </div>
  </div>
</div>