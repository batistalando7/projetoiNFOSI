@extends('_admin.layout.main')
@section('title', 'Ngola News - Visualizar Categoria')
@section('content-categoryView')

    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Categoria</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Vizualização</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <div class="d-flex d-md-none">
                        <a href="javascript:void(0)" class="page-header-right-close-toggle">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                        {{--  <a href="javascript:void(0);" class="btn btn-light-brand" data-bs-toggle="offcanvas" data-bs-target="#proposalSent">
                        <i class="feather-layers me-2"></i>
                        <span>Save & Send</span>
                    </a> --}}
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-danger">
                            <i class="feather-chevron-left me-2"></i>
                            Voltar</a>
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>{{--
    <!-- [ page-header ] end -->
    <div class="bg-white py-3 border-bottom rounded-0 p-md-0 mb-0">
        <div class="d-md-none d-flex align-items-center justify-content-between">
            <a href="javascript:void(0)" class="page-content-left-open-toggle">
                <i class="feather-align-left fs-20"></i>
            </a>
            <a href="javascript:void(0)" class="page-content-right-open-toggle">
                <i class="feather-align-right fs-20"></i>
            </a>
        </div>
        <div class="d-flex align-items-center justify-content-between">
            <div class="nav-tabs-wrapper page-content-left-sidebar-wrapper">
                <div class="d-flex d-md-none">
                    <a href="javascript:void(0)" class="page-content-left-close-toggle">
                        <i class="feather-arrow-left me-2"></i>
                        <span>Back</span>
                    </a>
                </div>
                <ul class="nav nav-tabs nav-tabs-custom-style" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#proposalTab">Proposal</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tasksTab">Tasks</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#notesTab">Notes</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#commentTab">Comments</button>
                    </li>
                </ul>
            </div>
            <div class="page-content-right-sidebar-wrapper">
                <div class="d-flex d-md-none">
                    <a href="javascript:void(0)" class="page-content-right-close-toggle">
                        <i class="feather-arrow-left me-2"></i>
                        <span>Back</span>
                    </a>
                </div>
                <div class="proposal-action-btn">
                    <div class="d-md-none d-lg-flex">
                        <a href="javascript:void(0);" class="action-btn" data-bs-toggle="tooltip" title="Views Trackign">
                            <i class="feather-eye"></i>
                        </a>
                    </div>
                    <div class="d-md-none d-lg-flex">
                        <a href="javascript:void(0);" class="action-btn" data-bs-toggle="tooltip" title="Send to Email">
                            <i class="feather-mail"></i>
                        </a>
                    </div>
                    <div class="d-md-none d-lg-flex">
                        <a href="proposal-edit.html" class="action-btn" data-bs-toggle="tooltip" title="Edit Proposal">
                            <i class="feather-edit"></i>
                        </a>
                    </div>
                    <div class="dropdown">
                        <a href="javascript:void(0);" class="action-btn dropdown-toggle c-pointer" data-bs-toggle="dropdown" data-bs-offset="0, 2" data-bs-auto-close="outside">Convert</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-check-square me-3"></i>
                                <span>Draft</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-dollar-sign me-3"></i>
                                <span>Invoice</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-cast me-3"></i>
                                <span>Estimate</span>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="action-btn dropdown-toggle c-pointer" data-bs-toggle="dropdown" data-bs-offset="0, 2" data-bs-auto-close="outside">More</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-eye me-3"></i>
                                <span>View</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-copy me-3"></i>
                                <span>Copy</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-link me-3"></i>
                                <span>Attachment</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-book-open me-3"></i>
                                <span>Make as Open</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-send me-3"></i>
                                <span>Make as Sent</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-edit me-3"></i>
                                <span>Make as Draft</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-crop me-3"></i>
                                <span>Make as Revised</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-check-circle me-3"></i>
                                <span>Make as Accepted</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-plus me-3"></i>
                                <span>Create New</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-trash-2 me-3"></i>
                                <span>Delete Proposal</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] start -->
    <div class="main-content">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="proposalTab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between">
                                    <div class="proposal-from">
                                        <h4 class="fw-bold mb-4">From:</h4>
                                        <div class="fs-13 text-muted lh-lg">
                                            <div>
                                                <span class="fw-semibold text-dark border-bottom border-bottom-dashed">Phone:</span>
                                                <span>(123) 456-7890</span>
                                            </div>
                                            <div>
                                                <span class="fw-semibold text-dark border-bottom border-bottom-dashed">Email:</span>
                                                <span>exmalple@email.com</span>
                                            </div>
                                            <address>
                                                <span class="fw-semibold text-dark border-bottom border-bottom-dashed">Address:</span>
                                                <span>P.O. Box 18728,</span><br>
                                                <span>Delorean New York,</span><br>
                                                <span>VAT No: 2617 348 2752</span><br>
                                            </address>
                                            <div class="d-flex gap-2">
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm">
                                                    <i class="feather-facebook"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm">
                                                    <i class="feather-twitter"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm">
                                                    <i class="feather-instagram"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm">
                                                    <i class="feather-linkedin"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm">
                                                    <i class="feather-github"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="d-md-none">
                                    <div class="proposal-to">
                                        <h6 class="fw-bold mb-4">To:</h6>
                                        <div class="fs-13 lh-lg">
                                            <div>
                                                <span class="fw-semibold text-dark border-bottom border-bottom-dashed">Proposal:</span>
                                                <span class="fw-bold text-primary">#NXL369852</span>
                                            </div>
                                            <div>
                                                <span class="fw-semibold text-dark border-bottom border-bottom-dashed">Due Date:</span>
                                                <span class="text-muted">28 May, 2023</span>
                                            </div>
                                            <div>
                                                <span class="fw-semibold text-dark border-bottom border-bottom-dashed">Issued Date:</span>
                                                <span class="text-muted">25 May, 2023</span>
                                            </div>
                                        </div>
                                        <div class="fs-13 text-muted lh-lg mt-3">
                                            <div>
                                                <span class="fw-semibold text-dark border-bottom border-bottom-dashed">Phone:</span>
                                                <span>(123) 456-7890</span>
                                            </div>
                                            <div>
                                                <span class="fw-semibold text-dark border-bottom border-bottom-dashed">Email:</span>
                                                <span>exmalple@email.com</span>
                                            </div>
                                            <address class="mb-0">
                                                <span class="fw-semibold text-dark border-bottom border-bottom-dashed">Address:</span>
                                                <span>9498 Harvard Street,</span><br>
                                                <span>Fairfield, Chicago Town 06824</span><br>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Proposal</h5>
                                <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="tooltip" title="Update Proposal">
                                    <i class="feather-edit"></i>
                                </a>
                            </div>
                            <div class="card-body p-0">
                                <div data-editor-target="editor-proposal" class="ht-300 font-inter botder-top-0">
                                    <p>"Web Design Company" is still a broad term and refers to any company that specializes in designing and creating websites. These companies typically offer a range of services including website design, development, and maintenance. They may also offer other related services such as search engine optimization (SEO), e-commerce solutions, and website hosting.</p>
                                    <br>
                                    <p>Web design companies vary greatly in terms of size, focus, and services offered. Some are large, full-service agencies that work with big-name clients, while others are small, boutique studios that specialize in creating unique, custom websites for smaller businesses.</p>
                                    <br>
                                    <p>If you are interested in finding a web design company, here are some factors you may want to consider:</p>
                                    <br>
                                    <p><strong class="text-dark">Portfolio:</strong> Look at the company's portfolio to see if they have experience working with businesses similar to yours, and if you like the style and quality of their work.</p>
                                    <br>
                                    <p><strong class="text-dark">Services:</strong> Make sure the company offers the services you need, such as website design, development, and maintenance.</p>
                                    <br>
                                    <p><strong class="text-dark">Cost:</strong> Get quotes from several companies to compare prices and make sure you are getting a fair deal.</p>
                                    <br>
                                    <p><strong class="text-dark">Reputation:</strong> Read online reviews and check the company's rating with organizations such as the Better Business Bureau to make sure they have a good reputation.</p>
                                    <br>
                                    <p><strong class="text-dark">Communication and responsiveness:</strong> Good communication is key to a successful web design project, so make sure the company you choose is responsive and easy to work with.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Services</h5>
                                <a href="javascript:void(0);" class="btn btn-md btn-light-brand">
                                    <i class="feather-plus me-2"></i>
                                    <span>New Services</span>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card stretch stretch-full">
                                            <div class="card-body">
                                                <div class="avatar-text rounded-2 mb-4">
                                                    <i class="feather-archive"></i>
                                                </div>
                                                <h6 class="fw-bold mb-3 text-truncate-1-line">Website design and development</h6>
                                                <p class="text-muted mb-4 text-truncate-3-line">Website design and development - designing and building a website to meet specific requirements, such as the look and feel, functionality, and content.</p>
                                                <a href="javascript:void(0);" class="d-block fs-10 fw-bold text-dark text-uppercase text-spacing-1">Learn More &rarr;</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card stretch stretch-full">
                                            <div class="card-body">
                                                <div class="avatar-text rounded-2 mb-4">
                                                    <i class="feather-airplay"></i>
                                                </div>
                                                <h6 class="fw-bold mb-3 text-truncate-1-line">User experience (UX) and user interface (UI) design</h6>
                                                <p class="text-muted mb-4 text-truncate-3-line">User experience (UX) and user interface (UI) design - designing the look and feel of a website, including the placement of elements, the color scheme, and how users interact with the website.</p>
                                                <a href="javascript:void(0);" class="d-block fs-10 fw-bold text-dark text-uppercase text-spacing-1">Learn More &rarr;</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card stretch stretch-full">
                                            <div class="card-body">
                                                <div class="avatar-text rounded-2 mb-4">
                                                    <i class="feather-settings"></i>
                                                </div>
                                                <h6 class="fw-bold mb-3 text-truncate-1-line">Responsive and mobile design</h6>
                                                <p class="text-muted mb-4 text-truncate-3-line">Responsive and mobile design - ensuring that a website looks and functions well on all devices, including desktops, tablets, and mobile phones.</p>
                                                <a href="javascript:void(0);" class="d-block fs-10 fw-bold text-dark text-uppercase text-spacing-1">Learn More &rarr;</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card stretch stretch-full">
                                            <div class="card-body">
                                                <div class="avatar-text rounded-2 mb-4">
                                                    <i class="feather-send"></i>
                                                </div>
                                                <h6 class="fw-bold mb-3 text-truncate-1-line">Search engine optimization (SEO) optimization</h6>
                                                <p class="text-muted mb-4 text-truncate-3-line">Search engine optimization (SEO) optimization - improving a website's visibility on search engines like Google by optimizing its content, keywords, and structure.</p>
                                                <a href="javascript:void(0);" class="d-block fs-10 fw-bold text-dark text-uppercase text-spacing-1">Learn More &rarr;</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card stretch stretch-full">
                                            <div class="card-body">
                                                <div class="avatar-text rounded-2 mb-4">
                                                    <i class="feather-anchor"></i>
                                                </div>
                                                <h6 class="fw-bold mb-3 text-truncate-1-line">Website security and SSL certificate installation</h6>
                                                <p class="text-muted mb-4 text-truncate-3-line">Website security and SSL certificate installation - securing a website with SSL certificates and other security measures to protect against hacking and cyber attacks.</p>
                                                <a href="javascript:void(0);" class="d-block fs-10 fw-bold text-dark text-uppercase text-spacing-1">Learn More &rarr;</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card stretch stretch-full">
                                            <div class="card-body">
                                                <div class="avatar-text rounded-2 mb-4">
                                                    <i class="feather-book"></i>
                                                </div>
                                                <h6 class="fw-bold mb-3 text-truncate-1-line">Website maintenance and updates</h6>
                                                <p class="text-muted mb-4 text-truncate-3-line">Website maintenance and updates - keeping a website up-to-date with the latest security patches, content updates, and bug fixes.</p>
                                                <a href="javascript:void(0);" class="d-block fs-10 fw-bold text-dark text-uppercase text-spacing-1">Learn More &rarr;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">FAQ's</h5>
                                <a href="javascript:void(0);" class="btn btn-md btn-light-brand">
                                    <i class="feather-plus me-2"></i>
                                    <span>Add New FAQ</span>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="accordion proposal-faq-accordion" id="accordionFaqGroup">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">01. Can I change my package?</button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFaqGroup">
                                            <div class="accordion-body">Yes! Youc can change your package at any time. Upgrades will apply immediately to all your live and drafted events, so you can take advantage of professional product capabolities.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">02. Do packages and prices differ by location or currence?</button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFaqGroup">
                                            <div class="accordion-body">Yes! Youc can change your package at any time. Upgrades will apply immediately to all your live and drafted events, so you can take advantage of professional product capabolities.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="true" aria-controls="flush-collapseTwo">03. What if I don't want to list my event on eventtbrite and partner sites?</button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFaqGroup">
                                            <div class="accordion-body">Yes! Youc can change your package at any time. Upgrades will apply immediately to all your live and drafted events, so you can take advantage of professional product capabolities.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="true" aria-controls="flush-collapseFour">04. What are my payment processing options?</button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFaqGroup">
                                            <div class="accordion-body">Yes! Youc can change your package at any time. Upgrades will apply immediately to all your live and drafted events, so you can take advantage of professional product capabolities.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingFive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="true" aria-controls="flush-collapseFive">05. What are ticketing and registration "essentials"?</button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFaqGroup">
                                            <div class="accordion-body">Yes! Youc can change your package at any time. Upgrades will apply immediately to all your live and drafted events, so you can take advantage of professional product capabolities.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingSix">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="true" aria-controls="flush-collapseSix">06. How to create a task when creating a schedule?</button>
                                        </h2>
                                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFaqGroup">
                                            <div class="accordion-body">Yes! Youc can change your package at any time. Upgrades will apply immediately to all your live and drafted events, so you can take advantage of professional product capabolities.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingSeven">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="true" aria-controls="flush-collapseSeven">07. How to add membars when making a schedule?</button>
                                        </h2>
                                        <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFaqGroup">
                                            <div class="accordion-body">Yes! Youc can change your package at any time. Upgrades will apply immediately to all your live and drafted events, so you can take advantage of professional product capabolities.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingEight">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="true" aria-controls="flush-collapseEight">08. How to add schedule and add reminder?</button>
                                        </h2>
                                        <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFaqGroup">
                                            <div class="accordion-body">Yes! Youc can change your package at any time. Upgrades will apply immediately to all your live and drafted events, so you can take advantage of professional product capabolities.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingNine">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="true" aria-controls="flush-collapseNine">09. How to add members when making a schedule</button>
                                        </h2>
                                        <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFaqGroup">
                                            <div class="accordion-body">Yes! Youc can change your package at any time. Upgrades will apply immediately to all your live and drafted events, so you can take advantage of professional product capabolities.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTen">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="true" aria-controls="flush-collapseTen">10. How to manage tasks and projects?</button>
                                        </h2>
                                        <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFaqGroup">
                                            <div class="accordion-body">Yes! Youc can change your package at any time. Upgrades will apply immediately to all your live and drafted events, so you can take advantage of professional product capabolities.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tasksTab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body task-header d-lg-flex align-items-center justify-content-between">
                                <div class="mb-4 mb-lg-0">
                                    <h4 class="mb-3 fw-bold text-truncate-1-line">Duralux || CRM Applications & Admin Dashboar</h4>
                                    <span class="badge bg-soft-primary text-primary me-2">In Prograss</span>
                                    <span class="badge bg-soft-warning text-warning">Recurring Task </span>
                                </div>
                                <div class="d-flex gap-2">
                                    <a href="javascript:void(0);" class="btn btn-icon" data-bs-toggle="tooltip" title="Make as Complete">
                                        <i class="feather-check-circle"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-icon" data-bs-toggle="tooltip" title="Timesheets">
                                        <i class="feather-calendar"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-icon" data-bs-toggle="tooltip" title="Statistics">
                                        <i class="feather-bar-chart-2"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-success" data-bs-toggle="tooltip" title="Timesheets">
                                        <i class="feather-clock me-2"></i>
                                        <span>Start Timer</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Description</h5>
                                <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="tooltip" title="Update Description">
                                    <i class="feather-edit"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <p>Web Design Company is still a broad term and refers to any company that specializes in designing and creating websites. These companies typically offer a range of services including website design, development, and maintenance. They may also offer other related services such as search engine optimization (SEO), e-commerce solutions, and website hosting.</p>
                                <ul class="list-unstyled text-muted mb-0">
                                    <li class="d-flex align-items-start mb-3">
                                        <span class="avatar-text avatar-sm bg-soft-success text-success me-3">
                                            <i class="feather-check fs-10"></i>
                                        </span>
                                        <span>Participated in the initial wave of developers learning and implementing the React.JS library. </span>
                                    </li>
                                    <li class="d-flex align-items-start mb-3">
                                        <span class="avatar-text avatar-sm bg-soft-success text-success me-3">
                                            <i class="feather-check fs-10"></i>
                                        </span>
                                        <span>Tested, debugged, and shipped 10s of 1000s of lines of code to various development teams. This lead to 100% bug-free deployment. </span>
                                    </li>
                                    <li class="d-flex align-items-start mb-3">
                                        <span class="avatar-text avatar-sm bg-soft-success text-success me-3">
                                            <i class="feather-check fs-10"></i>
                                        </span>
                                        <span>Introduced Kanban Board style ticketing system to promote highly efficient asynchronous and synchronous work, increasing efficiency by 12%. </span>
                                    </li>
                                    <li class="d-flex align-items-start mb-3">
                                        <span class="avatar-text avatar-sm bg-soft-success text-success me-3">
                                            <i class="feather-check fs-10"></i>
                                        </span>
                                        <span>Utilized HTML, CSS, and JavaScript to create 100+ responsive landing pages for both company and client. </span>
                                    </li>
                                    <li class="d-flex align-items-start mb-3">
                                        <span class="avatar-text avatar-sm bg-soft-success text-success me-3">
                                            <i class="feather-check fs-10"></i>
                                        </span>
                                        <span>Tested, debugged, and shipped 10s of 1000s of lines of code to various development teams. This lead to 100% bug-free deployment. </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Checklist</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                        <div data-bs-toggle="tooltip" title="Options">
                                            <i class="feather-more-vertical"></i>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body task-checklist">
                                <ul class="list-unstyled" id="checklist">
                                    <li class="checked">Tested, debugged, and shipped 10s of 1000s of lines of code to various development teams.</li>
                                    <li>Introduced Kanban Board style ticketing system to promote highly.</li>
                                    <li>Utilized HTML, CSS, and JavaScript to create 100+ responsive landing pages for both company and client.</li>
                                    <li class="checked">Rewrote HTML to meet industry and company standards for SEO and Accessibility.</li>
                                    <li>Led bi-weekly stand-up to ensure team worked effectively.</li>
                                    <li>Worked with Quality Assurance to get new pages/products tested.</li>
                                </ul>
                                <div class="input-group mt-3">
                                    <input id="checklistInput" type="text" class="form-control" placeholder="Title...">
                                    <a href="javascript:void(0)" class="input-group-text addCheckList" onclick="newElement()">
                                        <i class="feather-plus me-2"></i>
                                        <span>Add Checklist</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Topics</h5>
                                <a href="javascript:void(0);" class="btn btn-md btn-light-brand">
                                    <i class="feather-plus me-2"></i>
                                    <span>Add New Topic</span>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xxl-6">
                                        <div class="card border border-gray-2 rounded-2 my-2 overflow-hidden">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                                        <i class="feather-file-text"></i>
                                                    </div>
                                                    <a href="javascript:void(0);">How to upload data to the system?</a>
                                                </div>
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm me-3">
                                                    <i class="feather-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card border border-gray-2 rounded-2 my-2 overflow-hidden">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                                        <i class="feather-file-text"></i>
                                                    </div>
                                                    <a href="javascript:void(0);">How to draw a land plot on a map?</a>
                                                </div>
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm me-3">
                                                    <i class="feather-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card border border-gray-2 rounded-2 my-2 overflow-hidden">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                                        <i class="feather-file-text"></i>
                                                    </div>
                                                    <a href="javascript:void(0);">How to to view expire services?</a>
                                                </div>
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm me-3">
                                                    <i class="feather-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card border border-gray-2 rounded-2 my-2 overflow-hidden">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                                        <i class="feather-file-text"></i>
                                                    </div>
                                                    <a href="javascript:void(0);">How to integrate new web applications?</a>
                                                </div>
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm me-3">
                                                    <i class="feather-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card border border-gray-2 rounded-2 my-2 overflow-hidden">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                                        <i class="feather-file-text"></i>
                                                    </div>
                                                    <a href="javascript:void(0);">How do I set the geometry of an object?</a>
                                                </div>
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm me-3">
                                                    <i class="feather-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6">
                                        <div class="card border border-gray-2 rounded-2 my-2 overflow-hidden">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                                        <i class="feather-file-text"></i>
                                                    </div>
                                                    <a href="javascript:void(0);">How to upload data to the system?</a>
                                                </div>
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm me-3">
                                                    <i class="feather-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card border border-gray-2 rounded-2 my-2 overflow-hidden">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                                        <i class="feather-file-text"></i>
                                                    </div>
                                                    <a href="javascript:void(0);">How to draw a land plot on a map?</a>
                                                </div>
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm me-3">
                                                    <i class="feather-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card border border-gray-2 rounded-2 my-2 overflow-hidden">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                                        <i class="feather-file-text"></i>
                                                    </div>
                                                    <a href="javascript:void(0);">How to to view expire services?</a>
                                                </div>
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm me-3">
                                                    <i class="feather-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card border border-gray-2 rounded-2 my-2 overflow-hidden">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                                        <i class="feather-file-text"></i>
                                                    </div>
                                                    <a href="javascript:void(0);">How to integrate new web applications?</a>
                                                </div>
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm me-3">
                                                    <i class="feather-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card border border-gray-2 rounded-2 my-2 overflow-hidden">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                                        <i class="feather-file-text"></i>
                                                    </div>
                                                    <a href="javascript:void(0);">How do I set the geometry of an object?</a>
                                                </div>
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm me-3">
                                                    <i class="feather-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body task-info">
                                <div class="mb-4">
                                    <h5 class="card-title mb-1">Task Info</h5>
                                    <span class="fs-12 fw-normal text-muted d-block">Created at 2023-02-12 08:47:47</span>
                                </div>
                                <div class="task-info-list">
                                    <div class="row align-items-center mb-3 task-list-row">
                                        <div class="col-6">
                                            <i class="feather-star me-2"></i>
                                            <span class="fw-semibold">Status:</span>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <span class="border-bottom border-bottom-dashed border-gray-5">In Progress</span>
                                            <div class="dropdown ms-2">
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                    <i class="feather-edit-3"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <span class="wd-7 ht-7 bg-primary rounded-circle me-3"></span>
                                                        <span>In Progress</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <span class="wd-7 ht-7 bg-secondary rounded-circle me-3"></span>
                                                        <span>Pending</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <span class="wd-7 ht-7 bg-success rounded-circle me-3"></span>
                                                        <span>Completed</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <span class="wd-7 ht-7 bg-danger rounded-circle me-3"></span>
                                                        <span>Rejected</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <span class="wd-7 ht-7 bg-warning rounded-circle me-3"></span>
                                                        <span>Upcoming</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3 task-list-row">
                                        <div class="col-6">
                                            <i class="feather-airplay me-2"></i>
                                            <span class="fw-semibold">Priority:</span>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <span class="border-bottom border-bottom-dashed border-gray-5">Medium</span>
                                            <div class="dropdown ms-2">
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                    <i class="feather-edit-3"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <span class="wd-7 ht-7 bg-primary rounded-circle me-3"></span>
                                                        <span>Low</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <span class="wd-7 ht-7 bg-secondary rounded-circle me-3"></span>
                                                        <span>Normal</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <span class="wd-7 ht-7 bg-success rounded-circle me-3"></span>
                                                        <span>Medium</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <span class="wd-7 ht-7 bg-warning rounded-circle me-3"></span>
                                                        <span>High</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <span class="wd-7 ht-7 bg-danger rounded-circle me-3"></span>
                                                        <span>Urgent</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3 task-list-row">
                                        <div class="col-6">
                                            <i class="feather-activity me-2"></i>
                                            <span class="fw-semibold">Start Date:</span>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <span class="border-bottom border-bottom-dashed border-gray-5">26 May, 2023</span>
                                            <div class="ms-2">
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm">
                                                    <i class="feather-edit-3"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3 task-list-row">
                                        <div class="col-6">
                                            <i class="feather-calendar me-2"></i>
                                            <span class="fw-semibold">Due Date:</span>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <span class="border-bottom border-bottom-dashed border-gray-5">30 May, 2023</span>
                                            <div class="ms-2">
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm">
                                                    <i class="feather-edit-3"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3 task-list-row">
                                        <div class="col-6">
                                            <i class="feather-clock me-2"></i>
                                            <span class="fw-semibold">Hourly Rate:</span>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <span class="border-bottom border-bottom-dashed border-gray-5">$12.00</span>
                                            <div class="ms-2">
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm">
                                                    <i class="feather-edit-3"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3 task-list-row">
                                        <div class="col-6">
                                            <i class="feather-clipboard me-2"></i>
                                            <span class="fw-semibold">Billable:</span>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <span class="border-bottom border-bottom-dashed border-gray-5">Billable</span>
                                            <div class="ms-2">
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm">
                                                    <i class="feather-edit-3"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3 task-list-row">
                                        <div class="col-6">
                                            <i class="feather-dollar-sign me-2"></i>
                                            <span class="fw-semibold">Amount:</span>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <span class="border-bottom border-bottom-dashed border-gray-5">$250.00</span>
                                            <div class="ms-2">
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm">
                                                    <i class="feather-edit-3"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3 task-list-row">
                                        <div class="col-6">
                                            <i class="feather-power me-2"></i>
                                            <span class="fw-semibold">Login:</span>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <span class="border-bottom border-bottom-dashed border-gray-5">09:30AM</span>
                                            <div class="ms-2">
                                                <a href="javascript:void(0);" class="avatar-text avatar-sm">
                                                    <i class="feather-edit-3"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <i class="feather-bell me-2"></i>
                                            <span class="fw-semibold">Remainders:</span>
                                        </div>
                                        <div class="col-6">
                                            <a href="javascript:void(0);" class="text-primary">Create Remain</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card stretch stretch-full">
                            <div class="card-body task-tags">
                                <div class="mb-4">
                                    <h5 class="card-title mb-1">Tags</h5>
                                    <span class="fs-12 fw-normal text-muted d-block">Tags label for tasks</span>
                                </div>
                                <select class="form-select form-control" data-select2-selector="tag" multiple>
                                    <option value="primary" data-bg="bg-primary" selected>Team</option>
                                    <option value="teal" data-bg="bg-teal">Primary</option>
                                    <option value="success" data-bg="bg-success">Updates</option>
                                    <option value="warning" data-bg="bg-warning" selected>Personal</option>
                                    <option value="danger" data-bg="bg-danger">Promotions</option>
                                    <option value="indigo" data-bg="bg-indigo" selected>Custom</option>
                                    <option value="success" data-bg="bg-success">Important</option>
                                    <option value="dark" data-bg="bg-dark">Tomorrow</option>
                                    <option value="info" data-bg="bg-info" selected>review</option>
                                </select>
                            </div>
                        </div>
                        <div class="card stretch stretch-full">
                            <div class="card-body task-assignees">
                                <div class="mb-4">
                                    <h5 class="card-title mb-1">Assignees</h5>
                                    <span class="fs-12 fw-normal text-muted d-block">Assigne member to this tasks</span>
                                </div>
                                <select class="form-select form-control" data-select2-selector="user" multiple>
                                    <option value="alex@outlook.com" data-user="1" selected>alex@outlook.com</option>
                                    <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                                    <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                    <option value="nancy.elliot@outlook.com" data-user="4" selected>nancy.elliot@outlook.com</option>
                                    <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                    <option value="erna.serpa@outlook.com" data-user="6" selected>erna.serpa@outlook.com</option>
                                    <option value="alex@outlook.com" data-user="7">alex@outlook.com</option>
                                    <option value="john.deo@outlook.com" data-user="8">john.deo@outlook.com</option>
                                    <option value="green.cutte@outlook.com" data-user="9" selected>green.cutte@outlook.com</option>
                                    <option value="nancy.elliot@outlook.com" data-user="10">nancy.elliot@outlook.com</option>
                                    <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                    <option value="erna.serpa@outlook.com" data-user="12" selected>erna.serpa@outlook.com</option>
                                </select>
                            </div>
                        </div>
                        <div class="card stretch stretch-full">
                            <div class="card-body task-followers">
                                <div class="mb-4">
                                    <h5 class="card-title mb-1">Followers</h5>
                                    <span class="fs-12 fw-normal text-muted d-block">5 followers for this task</span>
                                </div>
                                <select class="form-select form-control" data-select2-selector="user" multiple>
                                    <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                    <option value="john.deo@outlook.com" data-user="2" selected>john.deo@outlook.com</option>
                                    <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                    <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                                    <option value="mar.audrey@gmail.com" data-user="5" selected>mar.audrey@gmail.com</option>
                                    <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                    <option value="alex@outlook.com" data-user="7" selected>alex@outlook.com</option>
                                    <option value="john.deo@outlook.com" data-user="8">john.deo@outlook.com</option>
                                    <option value="green.cutte@outlook.com" data-user="9" selected>green.cutte@outlook.com</option>
                                    <option value="nancy.elliot@outlook.com" data-user="10">nancy.elliot@outlook.com</option>
                                    <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                    <option value="erna.serpa@outlook.com" data-user="12" selected>erna.serpa@outlook.com</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="notesTab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header d-flex justify-content-between border-bottom-0">
                                <div>
                                    <h5>Notes:</h5>
                                    <p class="fs-12 text-muted">Notes for this tasks</p>
                                </div>
                                <a href="javascript:void(0);">3 Notes </a>
                            </div>
                            <div class="card-body py-0">
                                <textarea class="form-control" rows="5" placeholder="Write note here..."></textarea>
                            </div>
                            <div class="card-footer border-top-0">
                                <a href="javascript:void(0);" class="btn btn-primary wd-200">
                                    <i class="feather-plus me-2"></i>
                                    <span>Add Note</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body d-flex justify-content-between">
                                <div class="d-flex">
                                    <a href="javascript:void(0);" class="avatar-image me-3">
                                        <img src="assets/images/avatar/1.png" class="img-fluid" alt="">
                                    </a>
                                    <div>
                                        <div class="mb-2">
                                            <a href="javascript:void(0);" class="mb-1 d-block">Alexandra Della</a>
                                            <a href="javascript:void(0);" class="fs-11 fw-normal text-uppercase text-muted d-block">2023-02-13 14:20:35 </a>
                                        </div>
                                        <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, quasi nostrum iure nesciunt dolores in, dolorem sequi quidem accusantium voluptates officia nihil.</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" title="Edit">
                                        <i class="feather-edit"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm text-danger" data-bs-toggle="tooltip" title="Delete">
                                        <i class="feather-x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body d-flex justify-content-between">
                                <div class="d-flex">
                                    <a href="javascript:void(0);" class="avatar-image me-3">
                                        <img src="assets/images/avatar/2.png" class="img-fluid" alt="">
                                    </a>
                                    <div>
                                        <div class="mb-2">
                                            <a href="javascript:void(0);" class="mb-1 d-block">Anderson Thomas</a>
                                            <a href="javascript:void(0);" class="fs-11 fw-normal text-uppercase text-muted d-block">2023-02-13 14:20:35 </a>
                                        </div>
                                        <p class="text-muted">See resolved goodness felicity shy civility domestic had but Drawings offended yet answered Jennings perceive.</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" title="Edit">
                                        <i class="feather-edit"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm text-danger" data-bs-toggle="tooltip" title="Delete">
                                        <i class="feather-x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body d-flex justify-content-between">
                                <div class="d-flex">
                                    <a href="javascript:void(0);" class="avatar-image me-3">
                                        <img src="assets/images/avatar/3.png" class="img-fluid" alt="">
                                    </a>
                                    <div>
                                        <div class="mb-2">
                                            <a href="javascript:void(0);" class="mb-1 d-block">Marianne Audrey</a>
                                            <a href="javascript:void(0);" class="fs-11 fw-normal text-uppercase text-muted d-block">2023-02-13 14:20:35 </a>
                                        </div>
                                        <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, quasi nostrum iure nesciunt dolores in, dolorem sequi quidem accusantium voluptates officia nihil, ipsa ex voluptatem ratione mollitia alias perferendis omnis?</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" title="Edit">
                                        <i class="feather-edit"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm text-danger" data-bs-toggle="tooltip" title="Delete">
                                        <i class="feather-x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body d-flex justify-content-between">
                                <div class="d-flex">
                                    <a href="javascript:void(0);" class="avatar-image me-3">
                                        <img src="assets/images/avatar/3.png" class="img-fluid" alt="">
                                    </a>
                                    <div>
                                        <div class="mb-2">
                                            <a href="javascript:void(0);" class="mb-1 d-block">Marianne Audrey</a>
                                            <a href="javascript:void(0);" class="fs-11 fw-normal text-uppercase text-muted d-block">2023-02-13 14:20:35 </a>
                                        </div>
                                        <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, quasi nostrum iure nesciunt dolores in, dolorem sequi quidem accusantium voluptates officia nihil, ipsa ex voluptatem ratione mollitia alias perferendis omnis?</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" title="Edit">
                                        <i class="feather-edit"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm text-danger" data-bs-toggle="tooltip" title="Delete">
                                        <i class="feather-x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="commentTab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="task-comment pb-4">
                                    <div class="mb-2 d-flex align-items-center justify-content-between">
                                        <div>
                                            <h5>Comments:</h5>
                                            <p class="fs-12 text-muted mb-0">Responses for this tasks</p>
                                        </div>
                                        <a href="javascript:void(0);" class="">6 Comments </a>
                                    </div>
                                    <hr class="border-dashed my-4">
                                    <!--! BEGIN: comment !-->
                                    <div class="d-flex mb-4">
                                        <div class="avatar-image me-3">
                                            <a href="javascript:void(0);">
                                                <img src="assets/images/avatar/1.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                                                <span>Alexandra Della</span>
                                                <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                                                <span class="fs-10 text-uppercase text-muted d-none d-sm-block">57 Min Ago</span>
                                            </a>
                                            <div class="d-flex align-items-center">
                                                <p class="p-3 fs-12 bg-gray-200 rounded mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
                                                <div class="dropdown ms-2">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="feather-bell-off me-3"></i>
                                                                <span>Mute</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="feather-eye-off me-3"></i>
                                                                <span>Hide</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="feather-slash me-3"></i>
                                                                <span>Block</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="feather-flag me-3"></i>
                                                                <span>Report</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fs-10 text-uppercase d-flex align-items-center mt-2">
                                                <a href="javascript:void(0);" class="text-muted">Like (6)</a>
                                                <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                                                <a href="javascript:void(0);" class="text-muted">Reply</a>
                                                <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                                                <a href="javascript:void(0);" class="text-muted">5 Replies</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--! BEGIN: reply !-->
                                    <div class="ms-4">
                                        <div class="ms-4">
                                            <!--! BEGIN: single-reply !-->
                                            <div class="d-flex mb-4">
                                                <div class="avatar-image me-3">
                                                    <a href="javascript:void(0);">
                                                        <img src="assets/images/avatar/3.png" class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                                <div class="">
                                                    <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                                                        <span>Marianne Audrey</span>
                                                        <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                                                        <span class="fs-10 text-uppercase text-muted d-none d-sm-block">50 Min Ago</span>
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <p class="p-3 fs-12 bg-gray-200 rounded mb-0">Wishing calling is warrant settled was lucky.</p>
                                                        <div class="dropdown ms-2">
                                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                                <i class="feather-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                                        <i class="feather-bell-off me-3"></i>
                                                                        <span>Mute</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                                        <i class="feather-eye-off me-3"></i>
                                                                        <span>Hide</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                                        <i class="feather-slash me-3"></i>
                                                                        <span>Block</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                                        <i class="feather-flag me-3"></i>
                                                                        <span>Report</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="fs-10 text-uppercase d-flex align-items-center mt-2">
                                                        <a href="javascript:void(0);" class="text-muted">Like</a>
                                                        <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                                                        <a href="javascript:void(0);" class="text-muted">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--! BEGIN: single-reply !-->
                                            <div class="d-flex mb-4">
                                                <div class="avatar-image me-3">
                                                    <a href="javascript:void(0);">
                                                        <img src="assets/images/avatar/2.png" class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                                <div class="">
                                                    <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                                                        <span>Curtis Green</span>
                                                        <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                                                        <span class="fs-10 text-uppercase text-muted d-none d-sm-block">45 Min Ago</span>
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <p class="p-3 fs-12 bg-gray-200 rounded mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
                                                        <div class="dropdown ms-2">
                                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                                <i class="feather-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                                        <i class="feather-bell-off me-3"></i>
                                                                        <span>Mute</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                                        <i class="feather-eye-off me-3"></i>
                                                                        <span>Hide</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                                        <i class="feather-slash me-3"></i>
                                                                        <span>Block</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                                        <i class="feather-flag me-3"></i>
                                                                        <span>Report</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="fs-10 text-uppercase d-flex align-items-center mt-2">
                                                        <a href="javascript:void(0);" class="text-muted">Like (2)</a>
                                                        <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                                                        <a href="javascript:void(0);" class="text-muted">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ms-4 mb-4">
                                                <a href="javascript:void(0);" class="d-flex align-items-center text-muted">
                                                    <i class="feather-more-horizontal fs-12"></i>
                                                    <span class="fs-10 text-uppercase ms-2 text-truncate-1-line">Load More Replies</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--! BEGIN: comment !-->
                                    <div class="d-flex mb-4">
                                        <div class="avatar-image me-3">
                                            <a href="javascript:void(0);">
                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                                                <span>Holland Scott</span>
                                                <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                                                <span class="fs-10 text-uppercase text-muted d-none d-sm-block">42 Min Ago</span>
                                            </a>
                                            <div class="d-flex align-items-center">
                                                <p class="p-3 fs-12 bg-gray-200 rounded mb-0">See resolved goodness felicity shy civility domestic had but Drawings offended yet answered Jennings perceive.</p>
                                                <div class="dropdown ms-2">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="feather-bell-off me-3"></i>
                                                                <span>Mute</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="feather-eye-off me-3"></i>
                                                                <span>Hide</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="feather-slash me-3"></i>
                                                                <span>Block</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="feather-flag me-3"></i>
                                                                <span>Report</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fs-10 text-uppercase d-flex align-items-center mt-2">
                                                <a href="javascript:void(0);" class="text-muted">Like (8)</a>
                                                <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                                                <a href="javascript:void(0);" class="text-muted">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--! BEGIN: comment !-->
                                    <div class="d-flex mb-4">
                                        <div class="avatar-image me-3">
                                            <a href="javascript:void(0);">
                                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                                                <span>Olive Delarosa</span>
                                                <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                                                <span class="fs-10 text-uppercase text-muted d-none d-sm-block">34 Min Ago</span>
                                            </a>
                                            <div class="d-flex align-items-center">
                                                <p class="p-3 fs-12 bg-gray-200 rounded mb-0">Dependent on so extremely delivered by. Yet no jokes worse her why.</p>
                                                <div class="dropdown ms-2">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="feather-bell-off me-3"></i>
                                                                <span>Mute</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="feather-eye-off me-3"></i>
                                                                <span>Hide</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="feather-slash me-3"></i>
                                                                <span>Block</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="feather-flag me-3"></i>
                                                                <span>Report</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fs-10 text-uppercase d-flex align-items-center mt-2">
                                                <a href="javascript:void(0);" class="text-muted">Like (8)</a>
                                                <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                                                <a href="javascript:void(0);" class="text-muted">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-4">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your comment..." aria-describedby="suffixId">
                                    <a href="javascript:void(0);" class="input-group-text" id="suffixId">Submit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div> --}}

        <div class="main-content">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                    <div class="card card-body general-info">
                        <div class="mb-4 d-flex align-items-center justify-content-between">
                            <h5 class="fw-bold mb-0">
                                <span class="d-block mb-2">Informação Geral :</span>
                                <span class="fs-12 fw-normal text-muted d-block">Informação geral da Categoria</span>
                            </h5>
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-light-brand">Listar
                                Categoria</a>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">ID</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $category->id }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Nome da Categoria</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $category->name }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Tipo de Categoria</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $category->type }}</span>
                                </a>
                            </div>
                        </div>
                        {{-- <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Status</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $category->status }}</span>
                                </a>
                            </div>
                        </div> --}}
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Descrição</div>
                            <div class="col-lg-10 hstack gap-1">{{ $category->description }}</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    @endsection
