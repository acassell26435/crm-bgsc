<?php echo $this->extend('layouts/default') ?>
		
<?php echo $this->section('content') ?>
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">AIKit</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Chatbot</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="alert alert-dismissible ai-header-alert fade show mb-5">
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
                <p>AIKit Chatbot allows you to create a chatbot that can be used on your website. You, or your users can use it to answer questions and provide support about your products or services.</p>
                
                
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
                    <a href="<?php echo site_url('/chatbot'); ?>" class="nav-link active">Chatbot</a>
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
                <div class="card h-auto">
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
                            <div class="col-xl-2">
                                <p class="mb-2">Choose content type:</p>
                                <div class="btn-group d-block" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
                                    <label class="btn btn-outline-primary btn-sm rounded" for="btnradio1">Yes</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                    <label class="btn btn-outline-primary btn-sm rounded ms-2" for="btnradio2">No</label>

                                </div>
                            </div>
                            <div class="col-xl-3">
                                <p class="mb-2">Default view:</p>
                                <div class="btn-group d-block" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" checked>
                                    <label class="btn btn-outline-primary btn-sm rounded" for="btnradio3">Collapsed</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4">
                                    <label class="btn btn-outline-primary btn-sm rounded ms-2" for="btnradio4">Expanded</label>

                                </div>
                            </div>
                        
                            <div class="col-xl-7"></div>
                            <div class="col-xl-4">
                                <label class="form-label">Chatbot model</label>
                                <div class="mb-3">
                                    <select class=" default-select wide w-100 style-1" aria-label="Default select example">
                                        <option selected>gpt-3.5-turbo</option>
                                        <option value="1">gpt-3.6-turbo</option>
                                    </select>
                                    <div id="emailHelp" class="form-text">For best results, please use chat models like gpt-3.5-turbo or gpt-4.</div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">Show Chatbot on</label>
                                <div class="mb-3">
                                    <select class=" default-select wide w-100 style-1" aria-label="Default select example">
                                        <option selected>Frontend Only</option>
                                        <option value="1">Backend Only</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Max response tokens</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="150">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Prompt stop sequence
                                    </textarea>
                                    <div id="emailHelp-1" class="form-text">Please set this only if you are using a fine-tuned model. Leave empty if you are using any of the built-in models. Completion stop sequence is used to mark the stop of the completion.</div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="3">Completion stop sequence
                                    </textarea>
                                    <div id="emailHelp-2" class="form-text">Please set this only if you are using a fine-tuned model. Leave empty if you are using any of the built-in models. Completion stop sequence is used to mark the stop of the completion.</div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea3" rows="5">Chatbot Context
                                    </textarea>
                                    <div id="emailHelp-3" class="form-text">You can use this field to set the behaviour of the chatbot. For example, use something like "You are a helpful assistant." or "Answer in the style of Shakespeare."</div>
                                </div>
                                <label class="form-label">Show Chatbot only for user role</label>
                                <div class="mb-3">
                                    <select class=" default-select wide w-100 style-1" aria-label="Default select example">
                                        <option selected>All</option>
                                        <option value="1">One</option>
                                    </select>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Page content aware?
                                    </label>
                                </div>
                                <div id="emailHelp-4" class="form-text">If enabled, the chatbot will be able to use the content of the current page to generate better responses. Important: it will increase your API costs!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <h4 class="heading">Create Repurpose Job</h4>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput4" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Chat with us">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput2" class="form-label">Input text placeholder</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Input text placeholder">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Start Message</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Hi there! How can I help you?">
                                </div>
                            </div>
                            <div class="col-xl-12 mt-3">
                                <div class="check-ai mb-3">
                                    <h4 class="heading">Width (px)</h4>
                                    <div id="slider" class="ai-slider"></div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4">
                                <div class="example style-1">
                                    <p class="mb-1">Main Color</p>
                                    <input type="text" class="complex-colorpicker form-control d-none" value="#0d99ff">
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4">
                                <div class="example style-1">
                                    <p class="mb-1">Title Color</p>
                                    <input type="text" class="complex-colorpicker  form-control d-none" value="#2c2c2c">
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4">
                                <div class="example style-1">
                                    <p class="mb-1">AI Message Bubble Color</p>
                                    <input type="text" class="complex-colorpicker form-control d-none" value="#495A69">
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4">
                                <div class="example style-1">
                                    <p class="mb-1">AI Message Text Color</p>
                                    <input type="text" class="complex-colorpicker form-control d-none" value="#9084B1">
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4">
                                <div class="example style-1">
                                    <p class="mb-1">User Message Bubble Color</p>
                                    <input type="text" class="complex-colorpicker form-control d-none" value="#9084B1">
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4">
                                <div class="example style-1">
                                    <p class="mb-1">User Message Text Color</p>
                                    <input type="text" class="complex-colorpicker form-control d-none" value="#0d99ff">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary float-end mt-3">Save Settings</button>
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
</script>
<?php echo $this->endSection() ?>