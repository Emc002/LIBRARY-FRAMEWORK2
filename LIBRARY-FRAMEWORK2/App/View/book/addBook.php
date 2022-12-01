<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">ADD BOOK</label>
    <?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

    <div class="">
      <form method="post" action="<?=\Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/saveAddBook") ?>">
        <div class="form-group f1">
          <label for="isbn">ISBN</label>
          <input type="text" class="form-control" id="isbn" name="isbn">
        </div>

        <div class="form-group f1">
          <label for="title">TITLE</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group f1">
          <label for="synopsis">SYNOPSIS</label>
          <input type="text" class="form-control" id="synopsis" name="synopsis">
        </div>
        <div class="form-group f1">
          <label for="author">AUTHOR</label>
          <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="form-group f1">
          <label for="publisher">PUBLISHER</label>
          <input type="text" class="form-control" id="publisher" name="publisher">
        </div>
        <div class="form-group f1">
          <label for="category">CATEGORY</label>
          <input type="text" class="form-control" id="category" name="category">
        </div>
        <div class="form-group f1">
          <label for="languages">LANGUAGES</label>
          <input type="text" class="form-control" id="languages" name="languages">
        </div>
        
          <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>"  id="created_at" name="created_at">      
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("GITHUB/LIBRARY-FRAMEWORK2/Public/book") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>

      </form>

    </div>
  </div>
</div>