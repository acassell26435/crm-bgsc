<?php echo $this->extend('layouts/default') ?>
		
<?php echo $this->section('content') ?>
<!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<div class="page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Content</a></li>
		</ol>
	</div>
	<div class="container-fluid">
		<!-- Row -->
		<div class="row">
			<div class="col-xl-12">
				<div class="filter cm-content-box box-primary">
					<div class="content-title">
						<div class="cpa">
							<i class="fa-sharp fa-solid fa-filter me-2"></i>Filter
						</div>
						<div class="tools">
							<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
						</div>
					</div>
					<div class="cm-content-body form excerpt">
						<div class="card-body">
							<div class="row">
								<div class="col-xl-3 col-sm-6">
									<input type="text" class="form-control mb-xl-0 mb-3" id="exampleFormControlInput1" placeholder="Title">
								</div>
								<div class="col-xl-3  col-sm-6 mb-3 mb-xl-0">
									<select class="form-control default-select dashboard-select-2 h-auto wide" aria-label="Default select example">
										<option selected>Select Status</option>
										<option value="1">Published</option>
										<option value="2">Draft</option>
										<option value="3">Trash</option>
										<option value="4">Private</option>
										<option value="5">Pending</option>
									</select> 
								</div>
								<div class="col-xl-3 col-sm-6">
										<input class="form-control mb-xl-0 mb-3" type="text" id="datepicker">
								</div>
								<div class="col-xl-3 col-sm-6">
									<button class="btn btn-info" title="Click here to Search" type="button"><i class="fa fa-search me-1"></i>Filter</button>
									<button class="btn btn-danger light" title="Click here to remove filter" type="button">Remove Filter</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mb-3">
					<a href="<?php echo site_url('/add_content'); ?>" class="btn btn-primary">Add Content</a>
				</div>
				<div class="filter cm-content-box box-primary">
					<div class="content-title">
						<div class="cpa">
							<i class="fa-solid fa-file-lines me-1"></i>Contact List
						</div>
						<div class="tools">
							<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
						</div>
					</div>
					<div class="cm-content-body form excerpt">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-condensed flip-content">
									<thead>
										<tr>
											<th class="text-black">S.No</th>
											<th class="text-black">Title</th>
											<th class="text-black">Status</th>
											<th class="text-black">Modified</th>
											<th class="text-black text-end">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>About Us</td>
											<td>Published</td>
											<td>18 Feb, 2024</td>
											<td class="text-end">
											
												<a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
													<i class="fa fa-edit"></i>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon">
														<i class="fa fa-times"></i>
												</a>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>FAQ</td>
											<td>Published</td>
											<td>13 Jan, 2024</td>
											<td class="text-end">
												
												<a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
													<i class="fa fa-edit"></i>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon">
														<i class="fa fa-times"></i>
												</a>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Pricing</td>
											<td>Published</td>
											<td>13 Jan, 2024</td>
											<td class="text-end">
												
												<a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
													<i class="fa fa-edit"></i>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon">
														<i class="fa fa-times"></i>
												</a>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Schedule</td>
											<td>Published</td>
											<td>13 Jan, 2024</td>
											<td class="text-end">
												
												<a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
													<i class="fa fa-edit"></i>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon">
														<i class="fa fa-times"></i>
												</a>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>Under Maintenance</td>
											<td>Published</td>
											<td>25 Jan, 2024</td>
											<td class="text-end">
												
												<a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
													<i class="fa fa-edit"></i>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon">
														<i class="fa fa-times"></i>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="d-flex align-items-center justify-content-xl-between flex-wrap justify-content-center">
									<span>Page 1 of 5, showing 2 records out of 8 total, starting on record 1, ending on 2</span>
									<nav aria-label="Page navigation example">
										<ul class="pagination mb-2 mb-sm-0">
										<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fa-solid fa-angle-left"></i></a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
										<li class="page-item"><a class="page-link " href="javascript:void(0);"><i class="fa-solid fa-angle-right"></i></a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!--**********************************
	Content body end
***********************************-->

<?php echo $this->endSection() ?>

<?php echo $this->section('scripts') ?>
	<script>
		$(function () {
			  $("#datepicker").datepicker({ 
					autoclose: true, 
					todayHighlight: true
			  }).datepicker('update', new Date());
		
		});

	</script>
<?php echo $this->endSection() ?>