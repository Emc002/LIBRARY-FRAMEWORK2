<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">ADD SUBSCRIPTION</label>
    <?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

    <div class="">
      <form method="post" action="<?=\Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/saveAddSubscription") ?>">
        <div class="form-group f1">
          <label for="title">TITLE</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group f1">
          <label for="month">MONTH</label>
          <input type="text" class="form-control" id="month" name="month">
        </div>
        <div class="form-group f1">
          <label for="price">PRICE</label>
          <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="form-group f1">
          <label for="status">STATUS</label>
          <select class="form-select" name="status">
            <option value="none" selected>STATUS</option>
            <option value="active">active</option>
            <option value="non active">non active</option>
          </select>
        </div>
          <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>"  id="created_at" name="created_at">      
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/subscription") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>

      </form>

    </div>
  </div>
</div>