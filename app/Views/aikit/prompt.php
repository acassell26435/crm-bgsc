<?php echo $this->extend('layouts/default') ?>
		
<?php echo $this->section('content') ?>
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">AIKit</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">AI Menu Prompts</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="container-fluid">
        <div class="row" id="accordion-six">
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
                <p>Here you can edit or add new prompts that would appear in the "AI" dropdown menu. You can also reorder the prompts by dragging and dropping them in the order you wish. There are lots of online resources that could help and give you tips & trick on how to best edit prompts. Simply search YouTube/Google for "Prompt engineering" to gain more knowledge on the topic.
            Add PromptReset Prompts</p>
                

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
                    <a href="<?php echo site_url('/fine_tune_models'); ?>" class="nav-link">RSS</a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/chatbot'); ?>" class="nav-link">Chatbot</a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/fine_tune_models'); ?>" class="nav-link">Fine-tune Models</a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/prompt'); ?>" class="nav-link active">AI Menu Prompts</a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/setting'); ?>" class="nav-link">Settings</a>
                    </li> 
                    <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/import'); ?>" class="nav-link border-s-2" >Export/Import Settings</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm">Save Settings</a>
                        <a href="javascript:void(0);" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Prompt</a>
                </span>
                    <a href="javascript:void(0);" class="btn-danger btn btn-sm">Reset Prompts</a>
                </div>
                <div class="accordion accordion-with-icon">
                    <div class="accordion-item ai-header-alert border-0">
                        <div class="accordion-header rounded-lg" id="accord-6One" data-bs-toggle="collapse" data-bs-target="#collapse6One" aria-controls="collapse6One" aria-expanded="true" role="button"> 
                            <span class="">
                                <svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10H3" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21 6H3" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21 14H3" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21 18H3" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span class="accordion-header-text p-0">Write a paragraph on this</span>
                        </div>
                        <span class="remove-prompt"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_58_5949)">
                                <path d="M10.0003 18.3337C14.6027 18.3337 18.3337 14.6027 18.3337 10.0003C18.3337 5.39795 14.6027 1.66699 10.0003 1.66699C5.39795 1.66699 1.66699 5.39795 1.66699 10.0003C1.66699 14.6027 5.39795 18.3337 10.0003 18.3337Z" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.5 7.5L7.5 12.5" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.5 7.5L12.5 12.5" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_58_59410">
                                <rect width="20" height="20" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                        </span>
                    </div>
                </div>
                <div id="collapse6One" class="accordion__body collapse show" aria-labelledby="accord-6One" data-bs-parent="#accordion-six" style="">
                    <div class="accordion-body-text p-0">
                        <div class="card h-auto">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Requires text selection
                                            </label>
                                        </div>
                                        <div id="emailHelp" class="form-text">Choose this option if you want to enforce text selection in the text editor. Most of the time you will want to leave this option selected. Deselect it only if you are adding a prompt that doesn't require input from author, like if you want OpenAI to generate text about random topic for example.</div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="mb-3 mt-sm-0 mt-3">
                                            <label for="exampleFormControlInput1" class="form-label me-2">Default view:</label>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <input type="number" class="form-control w-25" id="exampleFormControlInput1" placeholder="10">
                                                <div id="emailHelp-1" class="form-text ms-ms-3 ms-0">Controls randomness: Lowering results in less random completions. As the temperature approaches zero, the model will become deterministic and repetitive.</div>
                                                </div>
                                        </div>
                                            
                                    </div>
                                    <div class="col-xl-6 col-xxl-8">
                                        <div class="mt-3">
                                            <h4 class="heading">Number of words to generate</h4>
                                            <div class="d-md-flex d-block align-items-center">
                                                <div class="check-ai">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                        <form class="form-check-label">
                                                        <h6 class="ps-4"> Fixed number of words</h6>
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput2" class="form-label">Number of words</label>
                                                                <input type="number" class="form-control w-50" id="exampleFormControlInput2" placeholder="">
                                                                <div id="emailHelp1" class="form-text fs-12">Choose this option if you want to generate a fixed number of words, regardless of how long the selected text is. This is helpful for certain types of prompts, like generating a paragraph on a certain topic for example.</div>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>	
                                                </div>
                                                <div class="check-ai ms-md-3 ms-0 mt-md-0 mt-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                        <form class="form-check-label">
                                                        <h6 class="ps-4">Relative to length of text selected</h6>
                                                        <div class="mb-2">
                                                            <ul class="d-flex justify-content-between mb-3"><li>Multiplier</li> <li>2.7x</li></ul>
                                                            <div id="slider" class="mb-5 ai-slider"></div>
                                                            <div id="emailHelp-2" class="form-text fs-12">Choose this option if you want to generate a fixed number of words, regardless of how long the selected text is. This is helpful for certain types of prompts, like generating a paragraph on a certain topic for example.</div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-xxl-4"></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <h6>Prompts</h6>
                                <ul class="promt-langauage">
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">English</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Deutsch</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Français</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Español</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Italiano</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Português</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Dutch</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Polski</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Русский</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">日本語中文</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Português </a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Brasileiro</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Türkçe</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Română</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Tiếng</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">العربية</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Việt</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">हिन्दी</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Bahasa</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">한국어</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Български</a></li>
                                </ul>
                                <div class="my-3">
                                    <label for="exampleInputEmail1" class="form-label">Menu Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Skriv et afsnit om dette" aria-describedby="emailHelp">
                                    <div id="emailHelp-3" class="form-text">This is title that will appear in the AI menu for this prompt.</div>
                                </div>
                                <div class="mb-3">
                                
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4">
                                    
Skriv en paragraf om dette emne:

[[text]]

----
Skriv paragraf:
                                    </textarea>
                                    <div id="emailHelp-4" class="form-text">If this prompt requires text selection, the phrase                  will be replaced by the selected <span class="badge badge-sm badge-danger light">text</span> before doing the request. Make sure to include it in your prompt.</div>
                                
                                </div>
                    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion accordion-with-icon">
                    <div class="accordion-item ai-header-alert position-relative border-0">
                        <div class="accordion-header rounded-lg" id="accord-6two" data-bs-toggle="collapse" data-bs-target="#collapse6two" aria-controls="collapse6two" aria-expanded="true" role="button"> 
                            <span><svg class="me-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 3.0003C17.2626 2.73766 17.5744 2.52932 17.9176 2.38718C18.2608 2.24503 18.6286 2.17188 19 2.17188C19.3714 2.17187 19.7392 2.24503 20.0824 2.38718C20.4256 2.52932 20.7374 2.73766 21 3.0003C21.2626 3.26295 21.471 3.57475 21.6131 3.91791C21.7553 4.26107 21.8284 4.62887 21.8284 5.0003C21.8284 5.37174 21.7553 5.73953 21.6131 6.08269C21.471 6.42585 21.2626 6.73766 21 7.0003L7.5 20.5003L2 22.0003L3.5 16.5003L17 3.0003Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </span>
                            <span class="accordion-header-text p-0">Continue this text</span>
                            <span class="remove-prompt"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_58_5949)">
                                    <path d="M10.0003 18.3337C14.6027 18.3337 18.3337 14.6027 18.3337 10.0003C18.3337 5.39795 14.6027 1.66699 10.0003 1.66699C5.39795 1.66699 1.66699 5.39795 1.66699 10.0003C1.66699 14.6027 5.39795 18.3337 10.0003 18.3337Z" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.5 7.5L7.5 12.5" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.5 7.5L12.5 12.5" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_58_59411">
                                    <rect width="20" height="20" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="collapse6two" class="accordion__body collapse" aria-labelledby="accord-6two" data-bs-parent="#accordion-six" style="">
                    <div class="accordion-body-text p-0">
                        <div class="card h-auto">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                            <label class="form-check-label" for="flexCheckDefault1">
                                            Requires text selection
                                            </label>
                                        </div>
                                        <div id="emailHelp-5" class="form-text">Choose this option if you want to enforce text selection in the text editor. Most of the time you will want to leave this option selected. Deselect it only if you are adding a prompt that doesn't require input from author, like if you want OpenAI to generate text about random topic for example.</div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="mb-3 mt-sm-0 mt-3">
                                            <label for="exampleFormControlInput11" class="form-label me-2">Default view:</label>
                                            <span class="d-flex align-items-center flex-wrap">
                                                <input type="number" class="form-control w-25" id="exampleFormControlInput11" placeholder="10">
                                                <span>Controls randomness: Lowering results in less random completions. As the temperature approaches zero, the model will become deterministic and repetitive.</span>
                                                </span>
                                        </div>
                                            
                                    </div>
                                    <div class="col-xl-6 col-xxl-8">
                                        <div class="mt-3">
                                            <h4 class="heading">Number of words to generate</h4>
                                            <div class="d-md-flex d-block align-items-center">
                                                <div class="check-ai">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                                        <form class="form-check-label">
                                                        <h6 class="ps-4"> Fixed number of words</h6>
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput12" class="form-label">Number of words</label>
                                                                <input type="number" class="form-control w-50" id="exampleFormControlInput12" placeholder="">
                                                                <div id="emailHelp3" class="form-text fs-12">Choose this option if you want to generate a fixed number of words, regardless of how long the selected text is. This is helpful for certain types of prompts, like generating a paragraph on a certain topic for example.</div>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>	
                                                </div>
                                                <div class="check-ai ms-md-3 ms-0 mt-md-0 mt-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                                        <form class="form-check-label">
                                                        <h6 class="ps-4">Relative to length of text selected</h6>
                                                        <div class="mb-2">
                                                            <ul class="d-flex justify-content-between mb-3"><li>Multiplier</li> <li>2.7x</li></ul>
                                                            <div id="slider-1" class="mb-5 ai-slider"></div>
                                                            <div id="emailHelp-11" class="form-text fs-12">Choose this option if you want to generate a fixed number of words, regardless of how long the selected text is. This is helpful for certain types of prompts, like generating a paragraph on a certain topic for example.</div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-xxl-4"></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <h6>Prompts</h6>
                                <ul class="promt-langauage">
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">English</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Deutsch</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Français</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Español</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Italiano</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Português</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Dutch</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Polski</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Русский</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">日本語中文</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Português </a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Brasileiro</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Türkçe</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Română</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Tiếng</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">العربية</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Việt</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">हिन्दी</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Bahasa</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">한국어</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Български</a></li>
                                </ul>
                                <div class="my-3">
                                    <label for="exampleInputEmail2" class="form-label">Menu Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Skriv et afsnit om dette" aria-describedby="emailHelp">
                                    <div id="emailHelp-8" class="form-text">This is title that will appear in the AI menu for this prompt.</div>
                                </div>
                                <div class="mb-3">
                                
                                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="4">
                                    
Skriv en paragraf om dette emne:

[[text]]

----
Skriv paragraf:
                                    </textarea>
                                    <div id="emailHelp-12" class="form-text">If this prompt requires text selection, the phrase                  will be replaced by the selected <span class="badge badge-sm badge-danger light">text</span> before doing the request. Make sure to include it in your prompt.</div>
                                
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="accordion accordion-with-icon">
                    <div class="accordion-item ai-header-alert position-relative border-0">
                        <div class="accordion-header rounded-lg" id="accord-6three" data-bs-toggle="collapse" data-bs-target="#collapse6three" aria-controls="collapse6three" aria-expanded="true" role="button"> 
                            <svg class="me-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_58_6049)">
                                <path d="M11.999 2.8125C11.6107 2.8125 11.2959 3.12731 11.2959 3.51562C11.2959 3.90394 11.6107 4.21875 11.999 4.21875C14.3256 4.21875 16.2185 6.11128 16.2185 8.4375C16.2185 8.82581 16.5333 9.14062 16.9216 9.14062C17.3099 9.14062 17.6247 8.82581 17.6247 8.4375C17.6247 5.33588 15.1011 2.8125 11.999 2.8125Z" fill="var(--primary)"/>
                                <path d="M10.1871 0.189329C7.01041 0.853126 4.43463 3.40425 3.75686 6.6007C3.18456 9.29986 3.8898 12.0097 5.69172 14.0354C6.57255 15.0255 7.07767 16.3326 7.07767 17.625V19.0312C7.07767 19.9668 7.69019 20.7617 8.53516 21.037C8.81303 22.6788 10.238 23.9999 11.9995 23.9999C13.7606 23.9999 15.186 22.6792 15.4639 21.037C16.3089 20.7617 16.9214 19.9668 16.9214 19.0312V17.6249C16.9214 16.33 17.4282 15.0387 18.3484 13.9889C19.6953 12.4523 20.437 10.4807 20.437 8.43745C20.437 3.11409 15.5644 -0.934077 10.1871 0.189329ZM11.9995 22.5937C11.0957 22.5937 10.3032 21.9718 10.0106 21.1359H13.9885C13.6959 21.9718 12.9034 22.5937 11.9995 22.5937ZM15.5152 19.0312C15.5152 19.4189 15.1998 19.7343 14.812 19.7343H9.18705C8.79935 19.7343 8.48392 19.4189 8.48392 19.0312V18.3281H15.5152V19.0312ZM17.2909 13.062C16.3103 14.1808 15.7069 15.5298 15.5538 16.9218H8.44539C8.29249 15.5291 7.69071 14.1668 6.74252 13.1008C5.24074 11.4125 4.65391 9.14963 5.13255 6.89241C5.69125 4.25738 7.83813 2.11683 10.4748 1.56591C14.9759 0.625266 19.0308 4.00552 19.0308 8.43745C19.0308 10.1396 18.4129 11.7819 17.2909 13.062Z" fill="var(--primary)"/>
                                <path d="M2.10938 8.4375H0.703125C0.314812 8.4375 0 8.75231 0 9.14062C0 9.52894 0.314812 9.84375 0.703125 9.84375H2.10938C2.49769 9.84375 2.8125 9.52894 2.8125 9.14062C2.8125 8.75231 2.49769 8.4375 2.10938 8.4375Z" fill="var(--primary)"/>
                                <path d="M2.40072 4.92101L1.40636 3.92665C1.13181 3.65205 0.686594 3.65205 0.412 3.92665C0.137406 4.20124 0.137406 4.64641 0.412 4.92101L1.40636 5.91537C1.68091 6.18996 2.12612 6.19001 2.40072 5.91537C2.67531 5.64077 2.67531 5.1956 2.40072 4.92101Z" fill="var(--primary)"/>
                                <path d="M2.40072 12.3641C2.12612 12.0896 1.68091 12.0896 1.40636 12.3641L0.412 13.3585C0.137406 13.6331 0.137406 14.0783 0.412 14.3529C0.686547 14.6275 1.13177 14.6275 1.40636 14.3529L2.40072 13.3585C2.67531 13.0839 2.67531 12.6387 2.40072 12.3641Z" fill="var(--primary)"/>
                                <path d="M23.2969 8.4375H21.8906C21.5023 8.4375 21.1875 8.75231 21.1875 9.14062C21.1875 9.52894 21.5023 9.84375 21.8906 9.84375H23.2969C23.6852 9.84375 24 9.52894 24 9.14062C24 8.75231 23.6852 8.4375 23.2969 8.4375Z" fill="var(--primary)"/>
                                <path d="M23.5882 3.92665C23.3137 3.65205 22.8685 3.65205 22.5939 3.92665L21.5995 4.92101C21.3249 5.1956 21.3249 5.64077 21.5995 5.91537C21.874 6.18991 22.3193 6.18996 22.5939 5.91537L23.5882 4.92101C23.8628 4.64641 23.8628 4.20124 23.5882 3.92665Z" fill="var(--primary)"/>
                                <path d="M23.5882 13.3585L22.5939 12.3641C22.3193 12.0896 21.8741 12.0896 21.5995 12.3641C21.3249 12.6387 21.3249 13.0839 21.5995 13.3585L22.5939 14.3529C22.8684 14.6274 23.3136 14.6275 23.5882 14.3529C23.8628 14.0783 23.8628 13.6331 23.5882 13.3585Z" fill="var(--primary)"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_58_6049">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                        <span class="accordion-header-text p-0">Generate ideas on this</span>
                        <span class="remove-prompt"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_58_5949)">
                                <path d="M10.0003 18.3337C14.6027 18.3337 18.3337 14.6027 18.3337 10.0003C18.3337 5.39795 14.6027 1.66699 10.0003 1.66699C5.39795 1.66699 1.66699 5.39795 1.66699 10.0003C1.66699 14.6027 5.39795 18.3337 10.0003 18.3337Z" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.5 7.5L7.5 12.5" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.5 7.5L12.5 12.5" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_58_594112">
                                <rect width="20" height="20" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                        </span>
                        </div>
                    </div>
                </div>
                <div id="collapse6three" class="accordion__body collapse" aria-labelledby="accord-6three" data-bs-parent="#accordion-six" style="">
                    <div class="accordion-body-text p-0">
                        <div class="card h-auto">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault24">
                                            <label class="form-check-label" for="flexCheckDefault24">
                                            Requires text selection
                                            </label>
                                        </div>
                                        <div id="emailHelp-13" class="form-text">Choose this option if you want to enforce text selection in the text editor. Most of the time you will want to leave this option selected. Deselect it only if you are adding a prompt that doesn't require input from author, like if you want OpenAI to generate text about random topic for example.</div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="mb-3 mt-sm-0 mt-3">
                                            <label for="exampleFormControlInput31" class="form-label me-2">Default view:</label>
                                            <span class="d-flex align-items-center flex-wrap">
                                                <input type="number" class="form-control w-25" id="exampleFormControlInput31" placeholder="10">
                                                <span>Controls randomness: Lowering results in less random completions. As the temperature approaches zero, the model will become deterministic and repetitive.</span>
                                                </span>
                                        </div>
                                            
                                    </div>
                                    <div class="col-xl-6 col-xxl-8">
                                        <div class="mt-3">
                                            <h4 class="heading">Number of words to generate</h4>
                                            <div class="d-md-flex d-block align-items-center">
                                                <div class="check-ai">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault100" checked>
                                                        <form class="form-check-label">
                                                        <h6 class="ps-4"> Fixed number of words</h6>
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput22" class="form-label">Number of words</label>
                                                                <input type="number" class="form-control w-50" id="exampleFormControlInput22" placeholder="">
                                                                <div id="emailHelp5" class="form-text fs-12">Choose this option if you want to generate a fixed number of words, regardless of how long the selected text is. This is helpful for certain types of prompts, like generating a paragraph on a certain topic for example.</div>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>	
                                                </div>
                                                <div class="check-ai ms-md-3 ms-0 mt-md-0 mt-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault23">
                                                        <form class="form-check-label">
                                                        <h6 class="ps-4">Relative to length of text selected</h6>
                                                        <div class="mb-2">
                                                            <ul class="d-flex justify-content-between mb-3"><li>Multiplier</li> <li>2.7x</li></ul>
                                                            <div id="slider-2" class="mb-5 ai-slider"></div>
                                                            <div id="emailHelp-6" class="form-text fs-12">Choose this option if you want to generate a fixed number of words, regardless of how long the selected text is. This is helpful for certain types of prompts, like generating a paragraph on a certain topic for example.</div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-xxl-4"></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <h6>Prompts</h6>
                                <ul class="promt-langauage">
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">English</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Deutsch</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Français</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Español</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Italiano</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Português</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Dutch</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Polski</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Русский</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">日本語中文</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Português </a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Brasileiro</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Türkçe</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Română</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Tiếng</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">العربية</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Việt</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">हिन्दी</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Bahasa</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">한국어</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Български</a></li>
                                </ul>
                                <div class="my-3">
                                    <label for="exampleInputEmail14" class="form-label">Menu Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail14" placeholder="Skriv et afsnit om dette" aria-describedby="emailHelp">
                                    <div id="emailHelp-14" class="form-text">This is title that will appear in the AI menu for this prompt.</div>
                                </div>
                                <div class="mb-3">
                                
                                    <textarea class="form-control" id="exampleFormControlTextarea3" rows="4">
                                    
Skriv en paragraf om dette emne:

[[text]]

----
Skriv paragraf:
                                    </textarea>
                                    <div id="emailHelp-15" class="form-text">If this prompt requires text selection, the phrase                  will be replaced by the selected <span class="badge badge-sm badge-danger light">text</span> before doing the request. Make sure to include it in your prompt.</div>
                                
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="accordion accordion-with-icon">
                    <div class="accordion-item ai-header-alert position-relative border-0">
                        <div class="accordion-header rounded-lg" id="accord-6four" data-bs-toggle="collapse" data-bs-target="#collapse6four" aria-controls="collapse6four" aria-expanded="true" role="button"> 
                            <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 2V8H20" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 13H8" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 17H8" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 9H9H8" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        <span class="accordion-header-text p-0">Write an article about this</span>
                        <span class="remove-prompt"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_58_5949)">
                                <path d="M10.0003 18.3337C14.6027 18.3337 18.3337 14.6027 18.3337 10.0003C18.3337 5.39795 14.6027 1.66699 10.0003 1.66699C5.39795 1.66699 1.66699 5.39795 1.66699 10.0003C1.66699 14.6027 5.39795 18.3337 10.0003 18.3337Z" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.5 7.5L7.5 12.5" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.5 7.5L12.5 12.5" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_58_59420">
                                <rect width="20" height="20" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                        </span>
                        </div>
                    </div>
                </div>
                <div id="collapse6four" class="accordion__body collapse" aria-labelledby="accord-6four" data-bs-parent="#accordion-six" style="">
                    <div class="accordion-body-text p-0">
                        <div class="card h-auto">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault31">
                                            <label class="form-check-label" for="flexCheckDefault31">
                                            Requires text selection
                                            </label>
                                        </div>
                                        <div id="emailHelp-24" class="form-text">Choose this option if you want to enforce text selection in the text editor. Most of the time you will want to leave this option selected. Deselect it only if you are adding a prompt that doesn't require input from author, like if you want OpenAI to generate text about random topic for example.</div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="mb-3 mt-sm-0 mt-3">
                                            <label for="exampleFormControlInput1" class="form-label me-2">Default view:</label>
                                            <span class="d-flex align-items-center flex-wrap">
                                                <input type="number" class="form-control w-25" id="exampleFormControlInput25" placeholder="10">
                                                <span>Controls randomness: Lowering results in less random completions. As the temperature approaches zero, the model will become deterministic and repetitive.</span>
                                                </span>
                                        </div>
                                            
                                    </div>
                                    <div class="col-xl-6 col-xxl-8">
                                        <div class="mt-3">
                                            <h4 class="heading">Number of words to generate</h4>
                                            <div class="d-md-flex d-block align-items-center">
                                                <div class="check-ai">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault101" checked>
                                                        <form class="form-check-label">
                                                        <h6 class="ps-4"> Fixed number of words</h6>
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput23" class="form-label">Number of words</label>
                                                                <input type="number" class="form-control w-50" id="exampleFormControlInput23" placeholder="">
                                                                <div id="emailHelp8" class="form-text fs-12">Choose this option if you want to generate a fixed number of words, regardless of how long the selected text is. This is helpful for certain types of prompts, like generating a paragraph on a certain topic for example.</div>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>	
                                                </div>
                                                <div class="check-ai ms-md-3 ms-0 mt-md-0 mt-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault32">
                                                        <form class="form-check-label">
                                                        <h6 class="ps-4">Relative to length of text selected</h6>
                                                        <div class="mb-2">
                                                            <ul class="d-flex justify-content-between mb-3"><li>Multiplier</li> <li>2.7x</li></ul>
                                                            <div id="slider-3" class="mb-5 ai-slider"></div>
                                                            <div id="emailHelp9" class="form-text fs-12">Choose this option if you want to generate a fixed number of words, regardless of how long the selected text is. This is helpful for certain types of prompts, like generating a paragraph on a certain topic for example.</div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-xxl-4"></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <h6>Prompts</h6>
                                <ul class="promt-langauage">
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">English</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Deutsch</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Français</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Español</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Italiano</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Português</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Dutch</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Polski</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Русский</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">日本語中文</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Português </a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Brasileiro</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Türkçe</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Română</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Tiếng</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">العربية</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Việt</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">हिन्दी</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Bahasa</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">한국어</a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mb-1">Български</a></li>
                                </ul>
                                <div class="my-3">
                                    <label for="exampleInputEmail1" class="form-label">Menu Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail15" placeholder="Skriv et afsnit om dette" aria-describedby="emailHelp">
                                    <div id="emailHelp-16" class="form-text">This is title that will appear in the AI menu for this prompt.</div>
                                </div>
                                
                                <div class="mb-3">
                                
                                    <textarea class="form-control" id="exampleFormControlTextarea4" rows="4">
                                    
Skriv en paragraf om dette emne:

[[text]]

----
Skriv paragraf:
                                    </textarea>
                                    <div id="emailHelp-21" class="form-text">If this prompt requires text selection, the phrase                  will be replaced by the selected <span class="badge badge-sm badge-danger light">text</span> before doing the request. Make sure to include it in your prompt.</div>
                                
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
		$( ".check-ai" ).on( "click", function() {
			$(this).find('.form-check-input').prop('checked', true);
		
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
			var slider = document.getElementById('slider-1');
			noUiSlider.create(slider, {
				start: [20],
				behaviour: 'snap',
					connect: [true, false],
				
				range: {
					'min': 0,
					'max': 100
				}
			});
			var slider = document.getElementById('slider-2');
			noUiSlider.create(slider, {
				start: [20],
				behaviour: 'snap',
					connect: [true, false],
				
				range: {
					'min': 0,
					'max': 100
				}
			});
			var slider = document.getElementById('slider-3');
			noUiSlider.create(slider, {
				start: [20],
				behaviour: 'snap',
					connect: [true, false],
				
				range: {
					'min': 0,
					'max': 100
				}
			});
		jQuery(".remove-prompt").on('click',function(){
			jQuery(this).closest('.accordion').next().remove();
			jQuery(this).closest('.accordion').remove();
		})

	</script>
<?php echo $this->endSection() ?>