<?php echo $this->extend('layouts/default') ?>
		
<?php echo $this->section('content') ?>
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">AIKit</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Export/Import Settings</a></li>
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
                    <a href="<?php echo site_url('/setting'); ?>" class="nav-link">Settings</a>
                </li> 
                <li class="nav-item" role="presentation">
                    <a href="<?php echo site_url('/import'); ?>" class="nav-link active border-s-2" >Export/Import Settings</a>
                </li>
                </ul>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="heading">Export Settings</h4>
                                <p>Download the current settings and prompts as a json file.</p>
                                <ul class="setting-list">
                                    <li class="mb-2"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.75 11.25V14.25C15.75 14.6478 15.592 15.0294 15.3107 15.3107C15.0294 15.592 14.6478 15.75 14.25 15.75H3.75C3.35218 15.75 2.97064 15.592 2.68934 15.3107C2.40804 15.0294 2.25 14.6478 2.25 14.25V11.25" stroke="#362465" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5.25 7.5L9 11.25L12.75 7.5" stroke="#362465" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9 11.25V2.25" stroke="#362465" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg><a href="javascript:void(0);" class="text-primary ms-2">Export All Settings + Prompts</a>
                                    </li>
                                    <li><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.75 11.25V14.25C15.75 14.6478 15.592 15.0294 15.3107 15.3107C15.0294 15.592 14.6478 15.75 14.25 15.75H3.75C3.35218 15.75 2.97064 15.592 2.68934 15.3107C2.40804 15.0294 2.25 14.6478 2.25 14.25V11.25" stroke="#362465" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5.25 7.5L9 11.25L12.75 7.5" stroke="#362465" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9 11.25V2.25" stroke="#362465" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg><a href="javascript:void(0);" class="text-primary ms-2"> Export Prompts only</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="heading">Import Settings</h4>
                                <p>Upload a settings json file to import settings and/or prompts.</p>
                                <div class="dz-default mb-3">	
                                    <form action="#" class="dropzone upload-img text-center">
                                        <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        
                                        <div class="fallback">
                                            <input name="file" type="file" multiple>
                                        </div>
                                        
                                    </form>
                                        <small><strong class="text-black">Important:</strong> It's highly recommended to backup your current settings before importing new settings, so you can revert back if needed.</small>
                                </div>
                                    <button type="button" class="btn btn-primary">Import Settings</button>
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
<?php echo $this->endSection() ?>