<?php $this->view("_Layout/header",$data); ?>

<div style="margin:auto; max-width:25em; width:100%; padding: 2em">
  <form method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputEmail1">Image Name</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="imageHelp" placeholder="The name of your image" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Upload File</label>
      <input type="file" name="file" class="btn" id="exampleInputPassword1" placeholder="Password">
    </div>
    <br />
    <button type="submit" class="btn btn-secondary">Upload</button>
  </form>
</div>

<?php $this->view("_Layout/footer"); ?>
<?php $this->view("_Layout/scripts"); ?>
