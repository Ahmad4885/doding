
<!DOCTYPE html>
<html>
<head>
	<title>AssasinS Store | View All Product</title>
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
	<!-- dalam div harus ada col yang maksimumnya 12 -->
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10"><h1>Keranjang Belanja</h1>
	<table id="myTable" class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Patient Name</th>
				<th>Patient Disease</th>
				<th>Patient ID</th>
				<th>Checkup chedule</th>
				<th><a href="products/create/" class="btn btn-primary btn-sm">Add Product</a></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($products as $product) : ?>
			<tr>  
				<td><?=$product->id?></td>
				 <td><?=$product->nama?></td>
				<td><?php
				$product_image = [  'src'   =>'uploads/' . $product->image,
			                        'height'=>'50'
			                  ];
			    echo img($product_image)
					?></td>
				<td><?=$product->price?></td>
				<td><?=$product->stock?></td>
				<td><?php echo anchor('admin/products/update/' . $product->id,'Edit',['class'=>'btn btn-danger btn-sm']); ?>
					<?php echo anchor('admin/products/delete/' . $product->id ,'Delete',['class'=>'btn btn-danger btn-sm','onclick'=>'return confirm(\'Apakah Anda Yakin?\')']); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table></div>
		<div class="col-md-1"></div>
	</div>
	

	<script>
		$(document).ready( function () {
        $('#myTable').DataTable();
    } );
	</script>

</body>
</html>