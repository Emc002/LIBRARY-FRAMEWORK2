<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">ADD MEMBER</label>
    <?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

    <div class="">
      <form method="post" action="<?=\Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/saveAddMemberTrx") ?>">
        <div class="form-group f1">
          <label for="id_member">ID MEMBER</label>
          <select class="form-select" name="id_member">
            <option value="none" selected>NONE</option>
            <?php 
            	foreach($data as $mem){
               ?>
            <option value="<?php echo $mem->id_member ?>"><?php echo $mem->name ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group f1">
          <label for="id_subscription">ID SUBSCRIPTION</label>
          <select class="form-select" name="id_subscription">
            <option value="none" selected>NONE</option>
            <?php 
            	foreach($Subs as $s){
               ?>
            <option value="<?php echo $s->id_subscription ?>"><?php echo $s->title ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group f1">
        <label for="date_trx">DATE TRX</label>
          <input type="text" class="form-control" id="date_trx" name="date_trx">
        </div>
        <div class="form-group f1">
        <label for="active_at">ACTIVE AT</label>
          <input type="text" class="form-control" id="active_at" name="active_at">
        <div class="form-group f1">
        <label for="expire_at">EXPIRE AT</label>
          <input type="text" class="form-control" id="expire_at" name="expire_at">
        <div class="form-group f1">
          <label for="status">STATUS</label>
          <select class="form-select" name="status">
            <option value="none" selected>Gender</option>
            <option value="paid">paid</option>
            <option value="unPaid">unPaid</option>
          </select>
        </div>
        <div class="form-group f1">
        <label for="total_order">TOTAL ORDER</label>
          <input type="text" class="form-control" id="total_order" name="total_order">
        </div>
        <div class="form-group f1">
        <label for="note">NOTE</label>
          <input type="text" class="form-control" id="note" name="note">
        </div>
          <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>"  id="created_at" name="created_at">      
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/membertrx") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>

      </form>

    </div>
  </div>
</div>