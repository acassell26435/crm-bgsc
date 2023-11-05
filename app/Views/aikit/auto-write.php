<?php echo $this->extend('layouts/default') ?>
		
<?php echo $this->section('content') ?>
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">AIKit</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Auto Writer</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="alert alert-dismissible ai-header-alert fade show mb-4">
                        This is a demo of AIKit plugin made for you to test the experience of using the plugin. Text & images generated in this demo are dummy. In real life, AIKit will call OpenAI API and generate relevant text and images based on your prompts.


                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="btn-close">
                    <svg class="" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_58_5949)">
                        <path d="M10.0003 18.3337C14.6027 18.3337 18.3337 14.6027 18.3337 10.0003C18.3337 5.39795 14.6027 1.66699 10.0003 1.66699C5.39795 1.66699 1.66699 5.39795 1.66699 10.0003C1.66699 14.6027 5.39795 18.3337 10.0003 18.3337Z" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.5 7.5L7.5 12.5" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.5 7.5L12.5 12.5" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_58_5949">
                        <rect width="20" height="20" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        
                        </button>
                </div>
                <p>AIKit Auto Writer is a tool helps you write drafts quickly, but please review and edit before publishing for best results. This is not a substitute for human editing, but a drafting aid. Happy writing!</p>
                
                    
                <ul class="nav nav-tabs style-1 mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/auto_write'); ?>" class="nav-link active border-s-1">Auto Writer</a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/scheduled'); ?>" class="nav-link">Scheduler</a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/repurpose'); ?>" class="nav-link">Repurpose</a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/rss'); ?>" class="nav-link">RSS</a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/chatbot'); ?>" class="nav-link">Chatbot</a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/fine_tune_models'); ?>" class="nav-link">Fine-tune Models</a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/prompt'); ?>" class="nav-link">AI Menu Prompts</a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/setting'); ?>" class="nav-link">Settings</a>
                    </li> 
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/import'); ?>" class="nav-link border-s-2" >Export/Import Settings</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card h-auto overflow-hidden">
                            <div class="card-header border-0 pb-0">
                                <h4 class="heading mb-0">Auto Writer</h4>
                                <select class="form-control custom-image-select ai-select image-select">
                                    <option data-thumbnail="<?php echo base_url('public/assets/images/svg/england.svg'); ?>">England</option>
                                    <option data-thumbnail="<?php echo base_url('public/assets/images/svg/india.svg'); ?>">India</option>
                                    <option data-thumbnail="<?php echo base_url('public/assets/images/svg/united-arab-emirates.svg'); ?>">UAE</option>
                                </select>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-3">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4">
Write a brief description of the topic you want to write about...
                                            </textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput2" class="form-label">Write a brief description of the topic you want to write about...</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Find My Device">
                                        </div>
                                        
                                        <label class="form-label">Post type</label>
                                        <div class="mb-3">
                                            <select class=" default-select style-1 wide w-100" aria-label="Default select example">
                                                <option selected>Post</option>
                                                <option value="1">Product</option>
                                            </select>
                                        </div>
                                        <label class="form-label">Post category</label>
                                        <div class="mb-3">
                                            <select class=" default-select style-1 wide w-100" aria-label="Default select example">
                                                <option selected>Uncategorized</option>
                                                <option value="1">Categorized</option>
                                            </select>
                                        </div>
                                        <label class="form-label">Post status</label>
                                        <div class="mb-3">
                                            <select class=" default-select style-1 wide w-100" aria-label="Default select example">
                                                <option selected>Draft</option>
                                                <option value="1">Categorized</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4 col-xxl-12 col-md-6 col-sm-4">
                                                <div class="mb-3 d-flex align-items-center">
                                                    <label for="exampleFormControlInput10" class="form-label me-2 mb-0">Articles:</label>
                                                    <input type="number" class="form-control w-50" id="exampleFormControlInput10" placeholder="10">
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-xxl-12 col-md-6 col-sm-8">
                                                <div class="mb-3 d-flex align-items-center">
                                                    <label for="exampleFormControlInput3" class="form-label me-2 mb-0">Sections per article:</label>
                                                    <input type="number" class="form-control w-50" id="exampleFormControlInput3" placeholder="10">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="mb-3 d-flex align-items-center">
                                                    <label for="exampleFormControlInput4" class="form-label me-2 mb-0">Maximum words per section:</label>
                                                    <input type="number" class="form-control w-25" id="exampleFormControlInput4" placeholder="10">
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="margin-left:-21px; margin-right:-21px;">
                                        <div class="btn-group d-block card-length" role="group" aria-label="Basic checkbox toggle button group">
                                            <input type="checkbox" class="btn-check" id="btncheck1">
                                            <label class="btn btn-outline-primary btn-sm rounded me-1" for="btncheck1">Include outline</label>

                                            <input type="checkbox" class="btn-check" id="btncheck2">
                                            <label class="btn btn-outline-primary btn-sm rounded me-1" for="btncheck2">Include conclusion</label>

                                            <input type="checkbox" class="btn-check" id="btncheck3">
                                            <label class="btn btn-outline-primary btn-sm rounded me-1" for="btncheck3">Include TL;DR</label>
                                            <input type="checkbox" class="btn-check  me-1" id="btncheck4">
                                            <label class="btn btn-outline-primary btn-sm rounded me-1" for="btncheck4">Include featured article Image3</label>
                                            <input type="checkbox" class="btn-check" id="btncheck5">
                                            <label class="btn btn-outline-primary btn-sm rounded" for="btncheck5">Include section images</label>
                                        </div>
                                        <hr style="margin-left:-21px; margin-right:-21px; margin-bottom:0;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0">
                                <div class="text-center">
                                    <a href="javascript:void(0);" class="btn btn-outline-primary me-2">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_28_2466)">
                                        <path d="M0.833496 3.33301V8.33301H5.8335" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M19.1665 16.667V11.667H14.1665" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17.0752 7.49998C16.6525 6.30564 15.9342 5.23782 14.9873 4.39616C14.0403 3.55451 12.8956 2.96645 11.6599 2.68686C10.4242 2.40727 9.13787 2.44527 7.92084 2.79729C6.70381 3.14932 5.59579 3.80391 4.70016 4.69998L0.833496 8.33331M19.1668 11.6666L15.3002 15.3C14.4045 16.1961 13.2965 16.8506 12.0795 17.2027C10.8625 17.5547 9.57609 17.5927 8.3404 17.3131C7.10472 17.0335 5.96 16.4455 5.01305 15.6038C4.06611 14.7621 3.3478 13.6943 2.92516 12.5" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_28_2466">
                                        <rect width="20" height="20" fill="var(--primary)"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
                                        Schedule</a>
                                        <a href="javascript:void(0);" class="btn btn-primary">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.1498 15.1013H7.30563L6.86828 12.8455H4.15205L3.71469 15.1013H0.0546875L2.67883 0.806641H8.52563L11.1498 15.1013ZM6.43092 10.1523L5.62526 5.04211H5.46413L4.65847 10.1523H6.43092Z" fill="white"/>
                                        <path d="M16.4903 0.806641H12.5771V15.1013H16.4903V0.806641Z" fill="white"/>
                                        </svg>

                                        Generate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-header bg-white  rounded-lg" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne" 		aria-expanded="true" role="button">
                                    <span class="accordion-header-icon"></span>
                                    <span class="accordion-header-text fw-semibold">Prompts</span>
                                    <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion-one">
                                    <div class="accordion-body-text">
                                        <div class="d-flex align-items-center mb-1">
                                            <h6 class="mb-0">article-title:</h6>
                                            <span class="badge badge-sm badge-danger light ms-1">description</span>
                                            <span class="mx-1">,</span>
                                            <span class="badge badge-sm badge-danger light">section-headlines</span>
                                        </div>
                                        <div class="mb-3">
                                            <textarea class="form-control bg-transparent" id="exampleFormControlTextarea11" rows="3">
Generate a title for an article that discusses the following topic:
[[description]]
The article will include the following sections:
[[section-headlines]]

Title:
                                            </textarea>
                                        </div>
                                        <div class="d-flex align-items-center mb-1">
                                            <h6 class="mb-0">article-title:</h6>
                                            <span class="badge badge-sm badge-danger light ms-1">description</span>
                                            <span class="mx-1">,</span>
                                            <span class="badge badge-sm badge-danger light">section-headlines</span>
                                        </div>
                                        <div class="mb-3">
                                            <textarea class="form-control bg-transparent" id="exampleFormControlTextarea2" rows="3">
Generate a title for an article that discusses the following topic:
[[description]]
The article will include the following sections:
[[section-headlines]]

Title:
                                            </textarea>
                                        </div>
                                        <div class="d-flex align-items-center mb-1">
                                            <h6 class="mb-0">article-title:</h6>
                                            <span class="badge badge-sm badge-danger light ms-1">description</span>
                                            <span class="mx-1">,</span>
                                            <span class="badge badge-sm badge-danger light">section-headlines</span>
                                        </div>
                                        <div class="mb-3">
                                            <textarea class="form-control bg-transparent" id="exampleFormControlTextarea3" rows="3">
Generate a title for an article that discusses the following topic:
[[description]]
The article will include the following sections:
[[section-headlines]]

Title:
                                            </textarea>
                                        </div>
                                        <div class="mb-3">
                                            <textarea class="form-control bg-transparent" id="exampleFormControlTextarea12" rows="3">
Generate a title for an article that discusses the following topic:
[[description]]
The article will include the following sections:
[[section-headlines]]

Title:
                                            </textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card h-auto">
                            <div class="card-body p-0">
                                <div class="table-responsive ai-table">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th class="text-black">Type</th>
                                                <th class="text-black">Title</th>
                                                <th class="text-black">Date created</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Landing Page</td>
                                                <td class="text-primary">This is a test title generation</td>
                                                <td>July 10, 2023</td>
                                            </tr>
                                            <tr>
                                                <td>Landing Page</td>
                                                <td class="text-primary">This is a test title generation</td>
                                                <td>July 10, 2023</td>
                                            </tr>
                                            <tr>
                                                <td>Landing Page</td>
                                                <td class="text-primary">This is a test title generation</td>
                                                <td>July 10, 2023</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Landing Page</td>
                                                <td class="text-primary">This is a test title generation</td>
                                                <td>July 10, 2023</td>
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>
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