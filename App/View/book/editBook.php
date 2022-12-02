<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">UPDATE BOOK</label>
    <?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>
   <div class="">
      <form method="post" action="<?=\Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/updateBook/$data->id_book")?>">
      <div class="form-group f1">
          <label for="nama_laptop">ISBN</label>
          <input type="text" class="form-control" value="<?= $data->isbn ?>" id="isbn" name="isbn">
        </div>
        <div class="form-group f1">
          <label for="nama_laptop">TITLE</label>
          <input type="text" class="form-control" value="<?= $data->title ?>" id="title" name="title">
        </div>
        <div class="form-group f1">
          <label for="nama_laptop">SYNOPSIS</label>
          <input type="text" class="form-control" value="<?= $data->synopsis ?>" id="synopsis" name="synopsis">
        </div>
        <div class="form-group f1">
          <label for="nama_laptop">AUTHOR</label>
          <input type="text" class="form-control" value="<?= $data->author ?>" id="author" name="author">
        </div>
        <div class="form-group f1">
          <label for="nama_laptop">PUBLISHER</label>
          <input type="text" class="form-control" value="<?= $data->publisher ?>" id="publisher" name="publisher">
        </div>
        <div class="form-group f1">
          <label for="nama_laptop">CATEGORY</label>
          <input type="text" class="form-control" value="<?= $data->category ?>" id="category" name="category">
        </div>
        <div class="form-group f1">
          <label for="nama_laptop">LANGUAGES</label>
          <input type="text" class="form-control" value="<?= $data->languages ?>" id="languages" name="languages">
        </div>
        <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>" id="updated_at" name="updated_at">
       
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/book") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>
      </form>

    </div>
  </div>
</div>