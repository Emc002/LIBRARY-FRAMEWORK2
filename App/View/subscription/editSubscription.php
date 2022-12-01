<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">UPDATE SUBSCRIPTION</label>
    <?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>
   <div class="">
      <form method="post" action="<?=\Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/updateSubscription/$data->id_subscription")?>">
      <div class="form-group f1">
          <label for="title">TITLE</label>
          <input type="text" class="form-control" value="<?= $data->title ?>" id="title" name="title">
        </div>
        <div class="form-group f1">
          <label for="month">MONTH</label>
          <input type="text" class="form-control" value="<?= $data->month ?>" id="month" name="month">
        </div>
        <div class="form-group f1">
          <label for="price">PRICE</label>
          <input type="text" class="form-control" value="<?= $data->price ?>" id="price" name="price">
        </div>
        <div class="form-group f1">
          <label for="status">STATUS</label>
          <select class="form-select" name="status">
            <option value="<?= $data->status ?>" selected><?= $data->status ?></option>
            <option value="active">active</option>
          </select>
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