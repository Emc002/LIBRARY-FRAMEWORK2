<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">EDIT MEMBER</label>
    <?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

    <div class="">
      <form method="post" action="<?=\Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/updateMember/$data->id_member") ?>">
        <div class="form-group f1">
          <label for="nik">NIK</label>
          <input type="text" value="<?= $data->nik ?>" class="form-control" id="nik" name="nik">
        </div>
        <div class="form-group f1">
        <label for="name">NAME</label>
          <input type="text" value="<?= $data->name ?>" class="form-control" id="name" name="name">
        </div>
        <div class="form-group f1">
        <label for="phone">PHONE</label>
          <input type="text" value="<?= $data->phone ?>" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group f1">
        <label for="address">ADDRESS</label>
          <input type="text" value="<?= $data->address ?>" class="form-control" id="address" name="address">
        </div>
        <div class="form-group f1">
        <label for="born_place">BORN PLACE</label>
          <input type="text" value="<?= $data->born_place ?>" class="form-control" id="born_place" name="born_place">
        </div>
        <div class="form-group f1">
        <label for="born_date">BORN DATE</label>
          <input type="date" value="<?= $data->born_date ?>" class="form-control" id="born_date" name="born_date">
        </div>
        <div class="form-group f1">
          <label for="gender">GENDER</label>
          <select class="form-select" name="gender">
            <option value="<?= $data->gender ?>" selected><?= $data->gender ?></option>
            <option value="L">Male</option>
            <option value="P">Female</option>
          </select>
        </div>
        <div class="form-group f1">
        <label for="country">COUNTRY</label>
          <input type="text" value="<?= $data->country ?>" class="form-control" id="country" name="country">
        </div>
        <div class="form-group f1">
        <label for="nationality">NATIONALITY</label>
          <input type="text" value="<?= $data->nationality ?>" class="form-control" id="nationality" name="nationality">
        </div>
        <div class="form-group f1">
          <label for="status">STATUS</label>
          <select class="form-select" name="status">
            <option value="<?= $data->status ?>" selected><?= $data->status ?></option>
            <option value="active">active</option>
            <option value="non active">non active</option>
          </select>
        </div>
          <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>"  id="updated_at" name="updated_at">      
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/member") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>

      </form>

    </div>
  </div>
</div>