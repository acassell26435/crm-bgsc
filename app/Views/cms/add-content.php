<?php echo $this->extend('layouts/default') ?>
		
<?php echo $this->section('content') ?>
<!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<div class="page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Add content</a></li>
		</ol>
	</div>
	<div class="container-fluid">
		<!-- Row -->
		<div class="row">
			<div class="col-xl-12">
				<div>
					<a href="<?php echo site_url('/content'); ?>" class="btn btn-primary mb-3">Content List</a>
					<button type="button" class="btn btn-primary mb-3 open">Screen Option</button>
				</div>
				<div class="main-check" style="display:none;">
					<div class="row">
						<h6 class="mb-3">Show on screen</h6>
						<div class="col-xl-2 col-lg-3 col-sm-4">
							<div class="form-check mb-sm-3 mb-1">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-1">
								<label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-1">
									Page Attributes	
								</label>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-sm-4">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-2">
								<label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-2">
									Featured Image	
											
								</label>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-sm-4">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-3">
								<label class="form-check-label mb-0" for="flexCheckDefault-3">
										Excerpt 
								</label>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-sm-4">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-4">
								<label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-4">
									Custom Fields 
								</label>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-sm-4">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-5">
								<label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-5">
								Discussion 
								</label>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-sm-4">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-6">
								<label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-6">
								Slug 
								</label>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-sm-4">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-7">
								<label class="form-check-label mb-0" for="flexCheckDefault-7">
								Author 
								</label>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-sm-4">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-8">
								<label class="form-check-label mb-0" for="flexCheckDefault-8">
								Page Type 
								</label>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-sm-4">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-9">
								<label class="form-check-label mb-0" for="flexCheckDefault-9">
								Seo 
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-8">
						<form>
							<div class="mb-3">
								<label class="form-label">Title</label>
								<input type="text" class="form-control" placeholder="Title">
							</div>
						</form>
						<div class="card h-auto">
							<div class="card-body pt-3">
								<div id="ckeditor"></div>
							</div>
						</div>
						
						<div class="filter cm-content-box box-primary">
							<div class="content-title">
								<div class="cpa">
									Custom Fields
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body form excerpt">
								<div class="card-body">
									<h6>Add New Custom Field:</h6>
									<div class="row">
										<div class="col-xl-6 col-sm-6">
											<form>
												<div class="mb-3">
												<label  class="form-label">Title</label>
												<input type="text" class="form-control" placeholder="Title">
												</div>
											</form>
										</div>
										<div class="col-xl-6 col-sm-6">
											<label  class="form-label">Value</label>
											<textarea class="form-control" rows="2"></textarea>
										</div>
									</div>	
									<button type="button" class="btn btn-primary btn-sm mt-3 mt-sm-0">Add Custom Field</button>
									<span class="mt-3 d-block">Custom fields can be used to extra metadata to a post that you can use in your theme.</span>
								</div>
							</div>
						</div>
						<div class="filter cm-content-box box-primary">
							<div class="content-title">
								<div class="cpa">
									Discussion							
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body form excerpt">
								<div class="card-body">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">
											Allow comments.
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="filter cm-content-box box-primary">
							<div class="content-title">
								<div class="cpa">	Slug												
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body form excerpt">
								<div class="card-body">
									<label class="form-label">Slug</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="filter cm-content-box box-primary">
							<div class="content-title">
								<div class="cpa">Author
																	
								</div>
								<div class="tools">
										<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body form excerpt">
								<div class="card-body">
									<label class="form-label">User</label>
									<select class="js-example-disabled">
										<option value="AL">admin@gmail.com</option>
										<option value="WY">India</option>
										<option value="WY">Information</option>
										<option value="WY">New Menu</option>
										<option value="WY">Page Menu</option>
									</select>
										
								</div>
							</div>
						</div>
						<div class="filter cm-content-box box-primary">
							<div class="content-title">
								<div class="cpa">                    Seo							
								</div>
								<div class="tools">
																				<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body form excerpt">
								<div class="card-body">
									<label class="form-label">Page Title</label>
									<input type="text" class="form-control mb-3" placeholder="Page title">
									<div class="row">
										<div class="col-xl-6 col-sm-6">
											<label class="form-label">Keywords</label>
											<input type="text" class="form-control mb-3 mb-sm-0" placeholder="Enter meta Keywords">
										</div>
										<div class="col-xl-6 col-sm-6">
											<label class="form-label">Descriptions</label>
											<textarea  class="form-control" rows="3" placeholder="Enter meta Keywords"></textarea>
										</div>
									</div>
										
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="right-sidebar-sticky">
							<div class="filter cm-content-box box-primary">
								<div class="content-title">
									<div class="cpa">
										Published
									</div>
									<div class="tools">
										<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
									</div>
								</div>
								<div class="cm-content-body publish-content form excerpt">
									<div class="card-body pb-0">
										<ul class="d-flex align-items-center mb-2">
											<li><a href="javascript:void(0);"><i class="fa-solid fa-key"></i></a></li>
											<li><a href="javascript:void(0);" class="ms-2">Status:</a></li>
											<li><strong><a href="javascript:void(0);" class="mx-2">Published</a></strong></li>
											<li><a href="javascript:void(0);" class="accordion accordion-primary"  id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne"   aria-expanded="true" role="button">Edit</a></li>
										</ul>
										<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion-one">
											<div class="accordion-body-text border rounded">
											<div class="mb-2">
												<label class="from-label w-100">Content Type</label>
												<select class="publish-drop default-select">
													<option selected>Select Status</option>
													<option value="1">Published</option>
													<option value="2">Draft</option>
													<option value="3">Trash</option>
													<option value="4">Private</option>
													<option value="5">Pending</option>
												</select> 
											</div>
											<div>
												<button class="btn btn-primary btn-sm me-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
												Ok
												</button>
												<button class="btn btn-danger light btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
												Cancel
												</button>
											</div>
											</div>
										</div>	
										<ul class="d-flex align-items-center mb-2">
											<li><a href="javascript:void(0);"><i class="fa-solid fa-eye"></i></a></li>
											<li><a href="javascript:void(0);" class="ms-2">Status:</a></li>
											<li><strong><a href="javascript:void(0);" class="mx-2">Public</a></strong></li>
											<li><a href="javascript:void(0);" class="accordion accordion-primary"  id="headingtwo" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-controls="collapsetwo"   aria-expanded="true" role="button">Edit</a></li>
										</ul>
										<div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-bs-parent="#accordion-one">
											<div class="accordion-body-text border rounded">
											<div class="basic-form">
												<form>
													<div class="mb-3 mb-0">
														<div class="radio">
															<label class="form-check-label"><input type="radio" name="optradio" class="form-check-input"> Public</label>
														</div>
														<div class="radio">
															<label class="form-check-label"><input type="radio" name="optradio" class="form-check-input"> Password Protected</label>
														</div>
														<div class="radio disabled">
															<label class="form-check-label"><input type="radio" name="optradio" class="form-check-input" > Private</label>
														</div>
													</div>
												</form>
											</div>
											<div>
												<button class="btn btn-primary btn-sm me-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
												Ok
												</button>
												<button class="btn btn-danger light btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
												Cancel
												</button>
											</div>
											</div>
										</div>
										<ul class="d-flex align-items-center mb-2 flex-wrap">
											<li><a href="javascript:void(0);"><i class="fa-solid fa-calendar-days"></i></a></li>
											<li><a href="javascript:void(0);" class="ms-2">Published</a></li>
											<li><strong><a href="javascript:void(0);" class="mx-2">on :24-09-2023 16:22:52 </a></strong></li>
											<li><a href="javascript:void(0);" class="accordion accordion-primary"  id="headingthree" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-controls="collapsethree"   aria-expanded="true" role="button">Edit</a></li>
										</ul>
										<div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-bs-parent="#accordion-one">
											<div class="accordion-body-text border rounded">
											<div class="basic-form mb-2">
												<input type="date" name="datepicker" class=" form-control" >
											</div>
											<div>
												<button class="btn btn-primary btn-sm me-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
												Ok
												</button>
												<button class="btn btn-danger light btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
												Cancel
												</button>
											</div>
											</div>
										</div>
									</div>
									<hr style="margin:0px;" class="mx-2">
									<div class="card-footer border-0 text-end py-3 ">
										<a href="javascript:void(0);" class="btn btn-primary btn-sm">Publish</a>
									</div>
								</div>
							</div>
							<div class="filter cm-content-box box-primary">
								<div class="content-title">
									<div class="cpa">
										Page Attributes
									</div>
									<div class="tools">
										<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
									</div>
								</div>
								<div class="cm-content-body publish-content form excerpt">
									<div class="card-body">
										<label class="form-label d-block">Title</label>
										<select class="publish-drop default-select w-100" aria-label="Default select example">
											<option selected>(No Parent)</option>
											<option value="1">Privacy Policy</option>
											<option value="2">Contact Us</option>
											<option value="3">Important Information</option>
											<option value="4">Free shipping</option>
											<option value="5">Daily Gifts</option>
											<option value="6">Blog</option>
											<option value="6">About Us</option>
											<option value="6">Dummy Co</option>
										</select>
									</div>
								</div>
							</div>	
							<div class="filter cm-content-box box-primary">
								<div class="content-title">
									<div class="cpa">
										Page Type
									</div>
									<div class="tools">
										<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
									</div>
								</div>
								<div class="cm-content-body publish-content form excerpt">
									<div class="card-body">
										<label class="from-label d-block">Content Type</label>
										<select class="publish-drop default-select w-100" aria-label="Default select example">
											<option selected>Page</option>
											<option value="1">Widget</option>
										</select>
									</div>
								</div>
							</div>	
							<div class="filter cm-content-box box-primary">
								<div class="content-title">
									<div class="cpa">
										Featured Image
									</div>
									<div class="tools">
										<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
									</div>
								</div>
								<div class="cm-content-body publish-content form excerpt">
									<div class="card-body">
										<div class="avatar-upload d-flex align-items-center">
											<div class=" position-relative ">
												<div class="avatar-preview">
													<div id="imagePreview" style="background-image: url(<?php echo base_url('public/assets/images/no-img-avatar.png'); ?>);"> 			
													</div>
												</div>
												<div class="change-btn d-flex align-items-center flex-wrap">
													<input type='file' class="form-control d-none"  id="imageUpload" accept=".png, .jpg, .jpeg">
													<label for="imageUpload" class="btn btn-light ms-0">Select Image</label>
												</div>
											</div>		
										</div>
									</div>
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
		function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function(e) {
			$('#imagePreview').css('background-image', 'url('+e.target.result +')');
			$('#imagePreview').hide();
			$('#imagePreview').fadeIn(650);
		}
		reader.readAsDataURL(input.files[0]);
	}
}
$("#imageUpload").on('change',function() {
	
	readURL(this);
});
	$('.remove-img').on('click', function() {
		var imageUrl = "<?php echo base_url('public/assets/images/no-img-avatar.png'); ?>";
		$('.avatar-preview, #imagePreview').removeAttr('style');
		$('#imagePreview').css('background-image', 'url(' + imageUrl + ')');
	});
</script>
<?php echo $this->endSection() ?>