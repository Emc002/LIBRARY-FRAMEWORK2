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
          <label for="id_member">ID MEMBER</label>
          <input type="text" value="<?= $data->id_member ?>" class="form-control" id="id_member" name="id_member">
        </div>
        <div class="form-group f1">
        <label for="id_subscription">ID SUBSCRIPTION</label>
          <input type="text" value="<?= $data->id_subscription ?>" class="form-control" id="id_subscription" name="id_subscription">
        </div>
        <div class="form-group f1">
        <label for="date_trx">DATE TRX</label>
          <input type="text" value="<?= $data->date_trx ?>" class="form-control" id="date_trx" name="date_trx">
        </div>
        <div class="form-group f1">
        <label for="address">ACTIVE AT</label>
          <input type="date" value="<?= $data->active_at ?>" class="form-control" id="active_at" name="active_at">
        </div>
        <div class="form-group f1">
        <label for="expire_at">EXPIRE AT</label>
          <input type="date"value="<?= $data->expire_at ?>" class="form-control" id="expire_at" name="expire_at">
        </div>
        <div class="form-group f1">
          <label for="status">STATUS</label>
          <select class="form-select" name="status">
            <option value="<?= $data->status ?>" selected><?= $data->status ?></option>
            <option value="paid">paid</option>
            <option value="unpaid">unpaid</option>
          </select>
        </div>
        <div class="form-group f1">
        <label for="total_order">TOTAL ORDER</label>
          <input type="text" value="<?= $data->total_order ?>" class="form-control" id="total_order" name="total_order">
        </div>
        <div class="form-group f1">
        <label for="note">NOTE</label>
          <input type="text" value="<?= $data->note ?>" class="form-control" id="note" name="note">
        </div>
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/membertrx") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>
      </form>

    </div>
  </div>
</div>