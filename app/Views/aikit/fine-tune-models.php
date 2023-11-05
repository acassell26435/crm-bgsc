<?php echo $this->extend('layouts/default') ?>
		
<?php echo $this->section('content') ?>
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->	
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">AIKit</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Fine-tune Models</a></li>
        </ol>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="alert alert-dismissible ai-header-alert fade  show mb-5" role="alert">
                    This is a demo of AIKit plugin made for you to test the experience of using the plugin. Text & images generated in this demo are dummy. In real life, AIKit will call OpenAI API and generate relevant text and images based on your prompts.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                <ul class="nav nav-tabs style-1 mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/auto_write'); ?>" class="nav-link border-s-1">Auto Writer</a>
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
                    <a href="<?php echo site_url('/fine_tune_models'); ?>" class="nav-link active">Fine-tune Models</a>
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
                <div class="card h-auto">
                    <div class="card-body ai-tabs-1 py-2">
                        <ul class="nav nav-tabs align-items-end" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="create-tab" data-bs-toggle="tab" data-bs-target="#create-tab-pane" type="button" role="tab" aria-controls="create-tab-pane" aria-selected="true">Create Fine-tune Job</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="jobs-tab" data-bs-toggle="tab" data-bs-target="#jobs-tab-pane" type="button" role="tab" aria-controls="jobs-tab-pane" aria-selected="false">Jobs<span class="badge badge-circle badge-light light ms-2">5</span></button>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="create-tab-pane" role="tabpanel" aria-labelledby="create-tab" tabindex="0">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card overflow-hidden h-auto">
                                <div class="card-header border-0 pb-0">
                                    <h4 class="heading mb-0">Create Repurpose Job</h4>
                                    <select class="form-control custom-image-select ai-select image-select">
                                        <option data-thumbnail="<?php echo base_url('public/assets/images/svg/england.svg'); ?>">England</option>
                                        <option data-thumbnail="<?php echo base_url('public/assets/images/svg/india.svg'); ?>">India</option>
                                        <option data-thumbnail="<?php echo base_url('public/assets/images/svg/united-arab-emirates.svg'); ?>">UAE</option>
                                    </select>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <span>Choose content type:</span>
                                        <span class="ms-1">
                                            <svg class="ms-1 c-pointer" data-bs-toggle="tooltip" data-bs-title="Enter your RapidAPI key for Subtitles for YouTube here." width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_44_4342)">
                                            <path d="M8.00016 14.6663C11.6821 14.6663 14.6668 11.6816 14.6668 7.99967C14.6668 4.31778 11.6821 1.33301 8.00016 1.33301C4.31826 1.33301 1.3335 4.31778 1.3335 7.99967C1.3335 11.6816 4.31826 14.6663 8.00016 14.6663Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8 10.6667V8" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8 5.33301H8.00667" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_44_4342">
                                            <rect width="16" height="16" fill="var(--primary);"/>
                                            </clipPath>
                                            </defs>
                                            </svg>
                                        </span>
                                        <div class="my-2 d-flex align-items-center flex-wrap">
                                            <a href="javascript:void(0);" class=" btn btn-outline-primary me-3"><svg width="19" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.75 8H2.25" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.75 5H2.25" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.75 11H2.25" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.75 14H2.25" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Post or article
                                            </a>
                                            <a href="javascript:void(0);" class=" btn btn-outline-primary"><svg width="19" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.9049 5.315C16.8159 4.95906 16.6344 4.63293 16.3789 4.36955C16.1235 4.10618 15.803 3.91489 15.4499 3.815C14.1599 3.5 8.99994 3.5 8.99994 3.5C8.99994 3.5 3.83994 3.5 2.54994 3.845C2.19688 3.94489 1.87642 4.13618 1.62095 4.39955C1.36548 4.66293 1.18403 4.98906 1.09494 5.345C0.858851 6.65417 0.743367 7.98223 0.74994 9.3125C0.741525 10.6528 0.857016 11.991 1.09494 13.31C1.19316 13.6549 1.37867 13.9686 1.63355 14.2209C1.88843 14.4731 2.20406 14.6554 2.54994 14.75C3.83994 15.095 8.99994 15.095 8.99994 15.095C8.99994 15.095 14.1599 15.095 15.4499 14.75C15.803 14.6501 16.1235 14.4588 16.3789 14.1954C16.6344 13.9321 16.8159 13.6059 16.9049 13.25C17.1392 11.9507 17.2547 10.6328 17.2499 9.3125C17.2584 7.97222 17.1429 6.63402 16.9049 5.315Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.3125 11.7654L11.625 9.31285L7.3125 6.86035V11.7654Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>

                                            YouTube video
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">URL of article, post or video</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Find My Device">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput2" class="form-label">Posts to generate:</label>
                                                <input type="number" class="form-control" id="exampleFormControlInput2" placeholder="1">
                                            </div>
                                            <label for="exampleFormControlInput2" class="form-label  d-block">Post type</label>
                                            <div class="mb-3">
                                                <select class=" default-select wide w-100 style-1" aria-label="Default select example">
                                                    <option selected>Post</option>
                                                    <option value="1">Product</option>
                                                </select>
                                            </div>
                                            <label class="form-label">Post type</label>
                                            <div class="mb-3">
                                                <select class=" default-select wide w-100 style-1" aria-label="Default select example">
                                                    <option selected>Post</option>
                                                    <option value="1">Product</option>
                                                </select>
                                            </div>
                                            <label class="form-label">Post category</label>
                                            <div class="mb-3">
                                                <select class=" default-select wide w-100 style-1" aria-label="Default select example">
                                                    <option selected>Uncategorized</option>
                                                    <option value="1">Categorized</option>
                                                </select>
                                            </div>
                                            <label class="form-label">Post status</label>
                                            <div class="mb-3">
                                                <select class=" default-select wide w-100 style-1" aria-label="Default select example">
                                                    <option selected>Draft</option>
                                                    <option value="1">Categorized</option>
                                                </select>
                                            </div>
                                            <hr style="margin-left:-21px; margin-right:-21px;">
                                            <div class="btn-group ai-tag-group" role="group" aria-label="Basic checkbox toggle button group">
                                                <input type="checkbox" class="btn-check" id="btncheck1">
                                                <label class="btn btn-outline-primary btn-sm mb-0" for="btncheck1">Include featured image</label>
                                            </div>
                                                <hr style="margin-left:-21px; margin-right:-21px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer border-0">
                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="btn btn-primary">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_28_2466)">
                                            <path d="M0.833496 3.33301V8.33301H5.8335" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.1665 16.667V11.667H14.1665" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M17.0752 7.49998C16.6525 6.30564 15.9342 5.23782 14.9873 4.39616C14.0403 3.55451 12.8956 2.96645 11.6599 2.68686C10.4242 2.40727 9.13787 2.44527 7.92084 2.79729C6.70381 3.14932 5.59579 3.80391 4.70016 4.69998L0.833496 8.33331M19.1668 11.6666L15.3002 15.3C14.4045 16.1961 13.2965 16.8506 12.0795 17.2027C10.8625 17.5547 9.57609 17.5927 8.3404 17.3131C7.10472 17.0335 5.96 16.4455 5.01305 15.6038C4.06611 14.7621 3.3478 13.6943 2.92516 12.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_28_2466">
                                            <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                            </defs>
                                            </svg>
                                            Repurpose</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <div class="accordion-header bg-white  rounded-lg" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne" 		aria-expanded="true" role="button">
                                        <span class="accordion-header-icon"></span>
                                        <span class="accordion-header-text">Prompts</span>
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
                                                <textarea class="form-control bg-transparent" id="exampleFormControlTextarea1" rows="3">
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
                                            <div class="d-flex align-items-center mb-1">
                                                <h6 class="mb-0">article-title:</h6>
                                                <span class="badge badge-sm badge-danger light ms-1">description</span>
                                                <span class="mx-1">,</span>
                                                <span class="badge badge-sm badge-danger light">section-headlines</span>
                                            </div>
                                            <div class="mb-3">
                                                <textarea class="form-control bg-transparent" id="exampleFormControlTextarea4" rows="3">
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
                                                <textarea class="form-control bg-transparent" id="exampleFormControlTextarea5" rows="3">
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
                                                <textarea class="form-control bg-transparent" id="exampleFormControlTextarea6" rows="3">
Generate a title for an article that discusses the following topic:
[[description]]
The article will include the following sections:
[[section-headlines]]

Title:
                                                </textarea>
                                            </div><div class="d-flex align-items-center mb-1">
                                                <h6 class="mb-0">article-title:</h6>
                                                <span class="badge badge-sm badge-danger light ms-1">description</span>
                                                <span class="mx-1">,</span>
                                                <span class="badge badge-sm badge-danger light">section-headlines</span>
                                            </div>
                                            <div class="mb-3">
                                                <textarea class="form-control bg-transparent" id="exampleFormControlTextarea7" rows="3">
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
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane fade show active" id="jobs-tab-pane" role="tabpanel" aria-labelledby="jobs-tab" tabindex="0">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive active-projects style-1">
                                <table id="empoloyees-tblwrapper" class="table">
                                    <thead>
                                        <tr>
                                            <th>Model Name Suffix</th>
                                            <th>Model Name</th>
                                            <th>Base Model</th>
                                            <th>Date created</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-success">Success</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr><tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-success">Success</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr><tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr><tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-success">Success</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-shrap">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr><tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-success">Success</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-shrap">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sm">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-success">Success</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr><tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-success">Success</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-shrap">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-light">Pending training data</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-shrap">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
                                        </tr><tr>
                                            <td class="text-black">Write a rat story</td>
                                            <td>
                                                lion
                                            </td>
                                            
                                            <td>hourly</td>
                                            <td>4:50 am July 11, 2023</td>
                                            <td>
                                                <span class="badge badge-success">Success</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary light btn-sharp">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.625 8C0.625 8 3.125 3 7.5 3C11.875 3 14.375 8 14.375 8C14.375 8 11.875 13 7.5 13C3.125 13 0.625 8 0.625 8Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="var(--primary)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger light btn-shrap">
                                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.875 4.25H3.125H13.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.875 4.25V13C11.875 13.3315 11.7433 13.6495 11.5089 13.8839C11.2745 14.1183 10.9565 14.25 10.625 14.25H4.375C4.04348 14.25 3.72554 14.1183 3.49112 13.8839C3.2567 13.6495 3.125 13.3315 3.125 13V4.25M5 4.25V3C5 2.66848 5.1317 2.35054 5.36612 2.11612C5.60054 1.8817 5.91848 1.75 6.25 1.75H8.75C9.08152 1.75 9.39946 1.8817 9.63388 2.11612C9.8683 2.35054 10 2.66848 10 3V4.25" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.25 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.75 7.375V11.125" stroke="#FF5B5B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                
                                            </td>
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
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-center">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Employee</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12">
                        <label class="form-label">Email ID<span class="text-danger">*</span></label>
                        <input type="email" class="form-control" placeholder="hello@gmail.com">
                        <label class="form-label mt-3">Employment date<span class="text-danger">*</span></label>
                        <input class="form-control" type="date">
                        <div class="row">
                            <div class="col-xl-6">
                                <label class="form-label mt-3">First Name<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label class="form-label mt-3">Last Name<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Surname">
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 invite">
                            <label class="form-label">Send invitation email<span class="text-danger">*</span></label>
                            <input type ="email" class="form-control " placeholder="+ invite">
                        </div>
                        
                
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>

<?php echo $this->section('scripts') ?>
    <script>
    
    // Initialize tooltips (if not automatically done by Bootstrap 5)
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });
    
        </script>
<?php echo $this->endSection() ?>