<?php echo $this->extend('layouts/default') ?>
		
<?php echo $this->section('content') ?>
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">AIKit</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Settings</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="alert alert-dismissible ai-header-alert fade show mb-4">
                    This is a demo of AIKit plugin made for you to test the experience of using the plugin.

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    </span>
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
                    <a href="<?php echo site_url('/fine_tune_models'); ?>" class="nav-link">Fine-tune Models</a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/prompt'); ?>" class="nav-link">AI Menu Prompts</a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/setting'); ?>" class="nav-link active">Settings</a>
                    </li> 
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/import'); ?>" class="nav-link border-s-2">Export/Import Settings</a>
                    </li>
                </ul>
                <div class="card h-auto">
                    <div class="card-body border-0 pb-0">
                        <h4 class="heading mb-0">OpenAI Settings</h4>
                        <p>Adjust the plugin to your needs by editing the settings here.</p>
                        <div class="row">
                            <div class="col-xl-6 col-sm-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">OpenAI Key</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="this-is-a-secret-key">
                                    <div id="emailHelp" class="form-text">For instructions on how to get an OpenAI key, please visit<a href="javascript:void(0);" class="text-primary"> https://getaikit.com/docs/getting-started</a>
                                </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput2" class="form-label">Rapid API Key</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="this-is-rapid-api-key">
                                    <div id="emailHelp-1" class="form-text">Enter your RapidAPI key for Subtitles for YouTube here. This API is used to read YouTube video subtitles to allow you to fetch. <a href="javascript:void(0);" class="text-primary">Read More<svg class="ms-1" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_65_2604)">
                                    <path d="M6.99984 12.8337C10.2215 12.8337 12.8332 10.222 12.8332 7.00033C12.8332 3.77866 10.2215 1.16699 6.99984 1.16699C3.77818 1.16699 1.1665 3.77866 1.1665 7.00033C1.1665 10.222 3.77818 12.8337 6.99984 12.8337Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 9.33333V7" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 4.66699H7.00583" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_65_2604">
                                    <rect width="14" height="14" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <label class="form-label">Post category</label>
                                <div class="mb-3">
                                    <select class="form-control custom-image-select border w-100 image-select">
                                        <option data-thumbnail="<?php echo base_url('public/assets/images/svg/england.svg'); ?>">England</option>
                                        <option data-thumbnail="<?php echo base_url('public/assets/images/svg/india.svg'); ?>">India</option>
                                        <option data-thumbnail="<?php echo base_url('public/assets/images/svg/united-arab-emirates.svg'); ?>">UAE</option>
                                    </select>
                                    <div id="emailHelp-2" class="form-text">The language of the text you want to generate. <a href="javascript:void(0);" class="text-primary">Read More<svg class="ms-1" data-bs-toggle="tooltip" data-bs-title="Enter your RapidAPI key for Subtitles for YouTube here." width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_65_2604)">
                                    <path d="M6.99984 12.8337C10.2215 12.8337 12.8332 10.222 12.8332 7.00033C12.8332 3.77866 10.2215 1.16699 6.99984 1.16699C3.77818 1.16699 1.1665 3.77866 1.1665 7.00033C1.1665 10.222 3.77818 12.8337 6.99984 12.8337Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 9.33333V7" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 4.66699H7.00583" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_65_2605">
                                    <rect width="14" height="14" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <label class="form-label">OpenAI Preferred Model</label>
                                <div class="mb-3">
                                    <select class=" default-select wide w-100 bg-white rounded" aria-label="Default select example">
                                        <option selected>gpt-3.5-turbo</option>
                                        <option value="1">gpt-4.5-turbo</option>
                                    </select>
                                    <div id="emailHelp-3" class="form-text">The language of the text you want to generate.  <a href="javascript:void(0);" class="text-primary">Read More<svg class="ms-1" data-bs-toggle="tooltip" data-bs-title="Enter your RapidAPI key for Subtitles for YouTube here." width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_65_2604)">
                                    <path d="M6.99984 12.8337C10.2215 12.8337 12.8332 10.222 12.8332 7.00033C12.8332 3.77866 10.2215 1.16699 6.99984 1.16699C3.77818 1.16699 1.1665 3.77866 1.1665 7.00033C1.1665 10.222 3.77818 12.8337 6.99984 12.8337Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 9.33333V7" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 4.66699H7.00583" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_65_2606">
                                    <rect width="14" height="14" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput10" class="form-label">Prompt Stop Sequence</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput10">
                                    <div id="emailHelp-4" class="form-text">The language of the text you want to generate.  <a href="javascript:void(0);" class="text-primary">Read More<svg class="ms-1" data-bs-toggle="tooltip" data-bs-title="Enter your RapidAPI key for Subtitles for YouTube here." width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_65_2604)">
                                    <path d="M6.99984 12.8337C10.2215 12.8337 12.8332 10.222 12.8332 7.00033C12.8332 3.77866 10.2215 1.16699 6.99984 1.16699C3.77818 1.16699 1.1665 3.77866 1.1665 7.00033C1.1665 10.222 3.77818 12.8337 6.99984 12.8337Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 9.33333V7" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 4.66699H7.00583" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_65_26010">
                                    <rect width="14" height="14" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput11" class="form-label">Completion Stop Sequence</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput11">
                                    <div id="emailHelp-5" class="form-text">The language of the text you want to generate.  <a href="javascript:void(0);" class="text-primary">Read More<svg class="ms-1" data-bs-toggle="tooltip" data-bs-title="Enter your RapidAPI key for Subtitles for YouTube here." width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_65_2604)">
                                    <path d="M6.99984 12.8337C10.2215 12.8337 12.8332 10.222 12.8332 7.00033C12.8332 3.77866 10.2215 1.16699 6.99984 1.16699C3.77818 1.16699 1.1665 3.77866 1.1665 7.00033C1.1665 10.222 3.77818 12.8337 6.99984 12.8337Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 9.33333V7" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 4.66699H7.00583" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_65_26011">
                                    <rect width="14" height="14" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 align-self-center">
                                <h6>Multiplier</h6>
                                <p class="text-end mb-2">2.7x</p>
                                <div id="slider" class="mb-5 ai-slider"></div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <label for="exampleFormControlInput1" class="form-label">Autocompleted Text Background Color</label>
                                    <div class="back-theme-ai">
                                        <a href="javascript:void(0);" class="cross-svg">
                                            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.5 6.5L6.5 13.5" stroke="#FF5B5B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.5 6.5L13.5 13.5" stroke="#FF5B5B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>

                                        </a>
                                        <div class="form-check d-inline-block position-relative me-2">
                                            <input class="form-check-input bg-primary" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <span></span>
                                        </div>
                                        <div class="form-check d-inline-block  position-relative me-2">
                                            <input class="form-check-input bg-success" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <span></span>
                                        </div>
                                        <div class="form-check d-inline-block  position-relative me-2">
                                            <input class="form-check-input bg-info" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                            <span></span>	
                                        </div>
                                        <div class="form-check d-inline-block  position-relative me-2">
                                            <input class="form-check-input bg-secondary" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                            <span></span>	
                                        </div>
                                        <div class="form-check d-inline-block  position-relative">
                                            <input class="form-check-input bg-warning" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                            <span></span>	
                                        </div>
                                    </div>
                                    
                                <div id="emailHelp-6" class="form-text mb-2">AIKit's builtin prompts are already. <a href="javascript:void(0);" class="text-primary" >Read More<svg class="ms-1" data-bs-toggle="tooltip" data-bs-title="Enter your RapidAPI key for Subtitles for YouTube here." width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_65_2604)">
                                    <path d="M6.99984 12.8337C10.2215 12.8337 12.8332 10.222 12.8332 7.00033C12.8332 3.77866 10.2215 1.16699 6.99984 1.16699C3.77818 1.16699 1.1665 3.77866 1.1665 7.00033C1.1665 10.222 3.77818 12.8337 6.99984 12.8337Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 9.33333V7" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 4.66699H7.00583" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_65_26020">
                                    <rect width="14" height="14" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    </a>
                                    </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <label for="exampleFormControlInput1" class="form-label">Default view</label>
                                <div class="ai-check">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label mb-0" for="flexCheckDefault">
                                        Elementor supported?
                                        </label>
                                        
                                    </div>
                                </div>
                                <div id="emailHelp-7" class="form-text mb-2">The language of the text you want to generate.  <a href="javascript:void(0);" class="text-primary">Read More<svg class="ms-1" data-bs-toggle="tooltip" data-bs-title="Enter your RapidAPI key for Subtitles for YouTube here." width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_65_2604)">
                                    <path d="M6.99984 12.8337C10.2215 12.8337 12.8332 10.222 12.8332 7.00033C12.8332 3.77866 10.2215 1.16699 6.99984 1.16699C3.77818 1.16699 1.1665 3.77866 1.1665 7.00033C1.1665 10.222 3.77818 12.8337 6.99984 12.8337Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 9.33333V7" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 4.66699H7.00583" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_65_26021">
                                    <rect width="14" height="14" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    </a>
                                    </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <label for="exampleFormControlInput1" class="form-label">Default view</label>
                                <div class="ai-check bg-grey">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-1">
                                        <label class="form-check-label text-white mb-0" for="flexCheckDefault-1">
                                        Small (256x256)
                                        </label>
                                        
                                    </div>
                                </div>
                                <div id="emailHelp-8" class="form-text mb-2">When this is enabled, you will be able to use AIKit right. <a href="javascript:void(0);" class="text-primary">Read More<svg class="ms-1" data-bs-toggle="tooltip" data-bs-title="Enter your RapidAPI key for Subtitles for YouTube here." width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_65_2604)">
                                    <path d="M6.99984 12.8337C10.2215 12.8337 12.8332 10.222 12.8332 7.00033C12.8332 3.77866 10.2215 1.16699 6.99984 1.16699C3.77818 1.16699 1.1665 3.77866 1.1665 7.00033C1.1665 10.222 3.77818 12.8337 6.99984 12.8337Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 9.33333V7" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 4.66699H7.00583" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_65_26024">
                                    <rect width="14" height="14" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    </a>
                                    </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 align-self-end">
                                <div class="ai-check bg-grey">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-2">
                                        <label class="form-check-label text-white mb-0" for="flexCheckDefault-2">
                                        Medium (512x512)
                                        </label>
                                        
                                    </div>
                                </div>
                                <div id="emailHelp-9" class="form-text mb-2">When this is enabled, you will be able to use AIKit right. <a href="javascript:void(0);" class="text-primary">Read More<svg class="ms-1" data-bs-toggle="tooltip" data-bs-title="Enter your RapidAPI key for Subtitles for YouTube here." width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_65_2604)">
                                    <path d="M6.99984 12.8337C10.2215 12.8337 12.8332 10.222 12.8332 7.00033C12.8332 3.77866 10.2215 1.16699 6.99984 1.16699C3.77818 1.16699 1.1665 3.77866 1.1665 7.00033C1.1665 10.222 3.77818 12.8337 6.99984 12.8337Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 9.33333V7" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 4.66699H7.00583" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_65_26025">
                                    <rect width="14" height="14" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 align-self-end">
                                <div class="ai-check">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-3">
                                        <label class="form-check-label mb-0" for="flexCheckDefault-3">
                                        Large (1024x1204)
                                        </label>
                                        
                                    </div>
                                </div>
                                <div id="emailHelp-10" class="form-text mb-2">When this is enabled, you will be able to use AIKit right. <a href="javascript:void(0);" class="text-primary">Read More<svg class="ms-1" data-bs-toggle="tooltip" data-bs-title="Enter your RapidAPI key for Subtitles for YouTube here." width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_65_2604)">
                                    <path d="M6.99984 12.8337C10.2215 12.8337 12.8332 10.222 12.8332 7.00033C12.8332 3.77866 10.2215 1.16699 6.99984 1.16699C3.77818 1.16699 1.1665 3.77866 1.1665 7.00033C1.1665 10.222 3.77818 12.8337 6.99984 12.8337Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 9.33333V7" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 4.66699H7.00583" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_65_26026">
                                    <rect width="14" height="14" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    </a>
                                </div>

                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Image counts for each size</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Image generation styles</label>
                                    <input name="tagify" class="form-control h-auto" value='Watercolor,Vector Art,Portrait,Pencil Drawing,Digital Painting,Abstract,Oil Painting,Cartoon,Black And White'>
                                    <div id="emailHelp-11" class="form-text mb-2">System message help set the behaviour of the model. You can use it to ask the model to mimic a certain style or take a certain perspective for all text generations. For example, if you set this to "Shakespeare' style", the mode will follow the style of Shakespeare in all text generations when possible. System message should work ONLY with GPT-4 and to a lesser extent with gpt-3.5-turbo models.</div>

                                    
                                </div>
                            </div>
                            <div class="col-xl-6">
                                    <label for="floatingTextarea">OpenAI System Message</label>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <div id="emailHelp-12" class="form-text mb-2">System message help set the behaviour of the model. You can use it to ask the model to mimic a certain style or take a certain perspective for all text generations. For example, if you set this to "Shakespeare' style", the mode will follow the style of Shakespeare in all text generations when possible. System message should work ONLY with GPT-4 and to a lesser extent with gpt-3.5-turbo models.

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
	
	$( ".cross-svg" ).on( "click", function() {
		$('.back-theme-ai input').prop('checked', false);
	
	});
		var slider = document.getElementById('slider');

noUiSlider.create(slider, {
    start: [20],
	behaviour: 'snap',
        connect: [true, false],
	
    range: {
        'min': 0,
        'max': 100
    }
});
	
  // Initialize tooltips (if not automatically done by Bootstrap 5)
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  });
  
 const radioButtons = document.getElementsByClassName(".cross-svg");
    for (const radioButton of radioButtons) {
        radioButton.addEventListener("click", function() {
            if (radioButton.checked) {
                radioButton.checked = false;
            }
        });
    }
</script>
<?php echo $this->endSection() ?>