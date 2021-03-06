<div class="container mt-2">
	<div class="row">
		<div class="col-md-4 mb-2">
			<!-- Sidebar -->
			<?php include ROOT.DS.'app'.DS.'views'.DS.'layouts'.DS.'sidebar.php' ?>
		</div>
		<div class="col-md-8">
			<!-- <div class="col-md-8"> -->
				<div class="card">
					<div class="card-header text-center bg-secondary text-white">
						<b>Edit Category</b>
					</div>
					<div class="card-body">
						<form action="<?= PATH?>category/edit/<?= $data->id ?>" method="post">
						  <div class="form-group">
						    <label for="name">Category Name</label>
						    <input type="text" class="form-control" id="name" name="name" value="<?= $data->name ?>">
						  </div>
						  <div class="form-group">
						    <label for="remark">Remark</label>
			    			<textarea class="form-control" id="remark" rows="3" name="remark"><?= $data->remark ?></textarea>
						  </div>
						  <div class="row justify-content-between no-gutters">
						  	<a href="<?= PATH ?>category" class="btn btn-outline-secondary">Back</a>
						  	<button type="submit" class="btn btn-secondary">Update Category</button>
						  </div>
						</form>
					</div>
				</div>
			<!-- </div> -->
		</div>
	</div>
</div>
