<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">ADD MEMBER</label>
    <?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

    <div class="">
      <form method="post" action="<?=\Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/saveAddMember") ?>">
        <div class="form-group f1">
          <label for="nik">NIK</label>
          <input type="text" class="form-control" id="nik" name="nik">
        </div>
        <div class="form-group f1">
        <label for="name">NAME</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group f1">
        <label for="phone">PHONE</label>
          <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group f1">
        <label for="address">ADDRESS</label>
          <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group f1">
        <label for="born_place">BORN PLACE</label>
          <input type="text" class="form-control" id="born_place" name="born_place">
        </div>
        <div class="form-group f1">
        <label for="born_date">BORN DATE</label>
          <input type="date" class="form-control" id="born_date" name="born_date">
        </div>
        <div class="form-group f1">
          <label for="gender">GENDER</label>
          <select class="form-select" name="gender">
            <option value="none" selected>Gender</option>
            <option value="L">Male</option>
            <option value="P">Female</option>
          </select>
        </div>
        <div class="form-group f1">
        <label for="country">COUNTRY</label>
          <input type="text" class="form-control" id="country" name="country">
        </div>
        <div class="form-group f1">
        <label for="nationality">NATIONALITY</label>
          <input type="text" class="form-control" id="nationality" name="nationality">
        </div>
        <div class="form-group f1">
          <label for="status">STATUS</label>
          <select class="form-select" name="status">
            <option value="none">Gender</option>
            <option value="active" selected>active</option>
            <option value="non active">non active</option>
          </select>
        </div>
          <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>"  id="created_at" name="created_at">      
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/member") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>

      </form>

    </div>
  </div>
</div>