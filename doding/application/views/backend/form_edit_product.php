<?php
  $id          = $products->id;
if($this->input->post('is_submitted')) {
  $nama        = set_value('nama');
  $description = set_value('description');
  $price       = set_value('price');
  $stock       = set_value('stock');
}else{
  $nama        = $products->nama;
  $description = $products->description;
  $price       = $products->price;
  $stock       = $products->stock;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page | Edit Products</title>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
	<style>
		.row div{border: #000 0px solid}
	</style> 
</head>
<body>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<h1> Edit Product</h1>
			<div><?= validation_errors() ?></div>
			<?= form_open_multipart('admin/products/update/' . $id,['class'=>'form-horizontal']) ?>
			  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" placeholder="" value="<?= $nama  ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="description"><?= $description ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="price" placeholder="" value="<?= $price ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Available Stock</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="stock" placeholder="" value="<?= $stock ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Product Image</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="userfile">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="hidden" name="is_submitted" value="1" />
      <button type="submit" class="btn btn-default">Edit</button>
    </div>
  </div>
			<?= form_close() ?>
		</div>
	</div>
</body>
</html>