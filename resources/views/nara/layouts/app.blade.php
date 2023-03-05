<!DOCTYPE html>
<!--
Jampack
Author: Hencework
Contact: contact@hencework.com
-->
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Nara Nusantara Halal Food</title>
    <meta name="description" content="A modern CRM Dashboard Template with reusable and flexible components for your SaaS web applications by hencework. Based on Bootstrap."/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Daterangepicker CSS -->
    <link href="{{ asset('nara/vendors/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />

    <!-- Data Table CSS -->
    <link href="{{ asset('nara/vendors/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('nara/vendors/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- CSS -->
    <link href="{{ asset('nara/dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Wrapper -->
<div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
    <!-- Top Navbar -->
    <nav class="hk-navbar navbar navbar-expand-xl navbar-light fixed-top">
        <div class="container-fluid">
            <!-- Start Nav -->
            <div class="nav-start-wrap">
                <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span></button>

                <!-- Search -->
                <form class="dropdown navbar-search">
                    <div class="dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside">
                        <a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover  d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="search"></i></span></span></a>
                        <div class="input-group d-xl-flex d-none">
							<span class="input-affix-wrapper input-search affix-border">
								<input type="text" class="form-control  bg-transparent"  data-navbar-search-close="false" placeholder="Search..." aria-label="Search">
								<span class="input-suffix"><span>/</span>
									<span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
									<span class="spinner-border spinner-border-sm input-loader text-primary" role="status">
										<span class="sr-only">Loading...</span>
									</span>
								</span>
							</span>
                        </div>
                    </div>
                    <div  class="dropdown-menu p-0">
                        <!-- Mobile Search -->
                        <div class="dropdown-item d-xl-none bg-transparent">
                            <div class="input-group mobile-search">
								<span class="input-affix-wrapper input-search">
									<input type="text" class="form-control" placeholder="Search..." aria-label="Search">
									<span class="input-suffix">
										<span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
										<span class="spinner-border spinner-border-sm input-loader text-primary" role="status">
											<span class="sr-only">Loading...</span>
										</span>
									</span>
								</span>
                            </div>
                        </div>
                        <!--/ Mobile Search -->
                        <div data-simplebar class="dropdown-body p-2">
                            <h6 class="dropdown-header">Recent Search
                            </h6>
                            <div class="dropdown-item bg-transparent">
                                <a href="#" class="badge badge-pill badge-soft-secondary">Grunt</a>
                                <a href="#" class="badge badge-pill badge-soft-secondary">Node JS</a>
                                <a href="#" class="badge badge-pill badge-soft-secondary">SCSS</a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header">Help
                            </h6>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media align-items-center">
                                    <div class="media-head me-2">
                                        <div class="avatar avatar-icon avatar-xs avatar-soft-light avatar-rounded">
											<span class="initial-wrap">
												<span class="svg-icon">
													<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
														<path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
													 </svg>
												</span>
											</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        How to setup theme?
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media align-items-center">
                                    <div class="media-head me-2">
                                        <div class="avatar avatar-icon avatar-xs avatar-soft-light avatar-rounded">
											<span class="initial-wrap">
												<span class="svg-icon">
													<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
														<path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
													 </svg>
												</span>
											</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        View detail documentation
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header">Users
                            </h6>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media align-items-center">
                                    <div class="media-head me-2">
                                        <div class="avatar avatar-xs avatar-rounded">
                                            <img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        Sarah Jone
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media align-items-center">
                                    <div class="media-head me-2">
                                        <div class="avatar avatar-xs avatar-soft-primary avatar-rounded">
                                            <span class="initial-wrap">J</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        Joe Jackson
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media align-items-center">
                                    <div class="media-head me-2">
                                        <div class="avatar avatar-xs avatar-rounded">
                                            <img src="dist/img/avatar4.jpg" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        Maria Richard
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer d-xl-flex d-none"><a href="#"><u>Search all</u></a></div>
                    </div>
                </form>
                <!-- /Search -->
            </div>
            <!-- /Start Nav -->

            <!-- End Nav -->
            <div class="nav-end-wrap">
                <ul class="navbar-nav flex-row">
                    <li class="nav-item">
                        <a href="email.html" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover"><span class="icon"><span class=" position-relative"><span class="feather-icon"><i data-feather="inbox"></i></span><span class="badge badge-sm badge-soft-primary badge-sm badge-pill position-top-end-overflow-1">4</span></span></span></a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown dropdown-notifications">
                            <a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation role="button" aria-haspopup="true" aria-expanded="false"><span class="icon"><span class="position-relative"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge badge-success badge-indicator position-top-end-overflow-1"></span></span></span></a>
                            <div class="dropdown-menu dropdown-menu-end p-0">
                                <h6 class="dropdown-header px-4 fs-6">Notifications<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"><span class="icon"><span class="feather-icon"><i data-feather="settings"></i></span></span></a>
                                </h6>
                                <div data-simplebar class="dropdown-body  p-2">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar avatar-rounded avatar-sm">
                                                    <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="notifications-text">Morgan Freeman accepted your invitation to join the team</div>
                                                    <div class="notifications-info">
                                                        <span class="badge badge-soft-success">Collaboration</span>
                                                        <div class="notifications-time">Today, 10:14 PM</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar  avatar-icon avatar-sm avatar-success avatar-rounded">
													<span class="initial-wrap">
														<span class="feather-icon"><i data-feather="inbox"></i></span>
													</span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="notifications-text">New message received from Alan Rickman</div>
                                                    <div class="notifications-info">
                                                        <div class="notifications-time">Today, 7:51 AM</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar  avatar-icon avatar-sm avatar-pink avatar-rounded">
													<span class="initial-wrap">
														<span class="feather-icon"><i data-feather="clock"></i></span>
													</span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="notifications-text">You have a follow up with Jampack Head on Friday, Dec 19 at 9:30 am</div>
                                                    <div class="notifications-info">
                                                        <div class="notifications-time">Yesterday, 9:25 PM</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar avatar-sm avatar-rounded">
                                                    <img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="notifications-text">Application of Sarah Williams is waiting for your approval</div>
                                                    <div class="notifications-info">
                                                        <div class="notifications-time">Today 10:14 PM</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar avatar-sm avatar-rounded">
                                                    <img src="dist/img/avatar10.jpg" alt="user" class="avatar-img">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="notifications-text">Winston Churchil shared a document with you</div>
                                                    <div class="notifications-info">
                                                        <span class="badge badge-soft-violet">File Manager</span>
                                                        <div class="notifications-time">2 Oct, 2021</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar  avatar-icon avatar-sm avatar-danger avatar-rounded">
													<span class="initial-wrap">
														<span class="feather-icon"><i data-feather="calendar"></i></span>
													</span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="notifications-text">Last 2 days left for the project to be completed</div>
                                                    <div class="notifications-info">
                                                        <span class="badge badge-soft-orange">Updates</span>
                                                        <div class="notifications-time">14 Sep, 2021</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-footer"><a href="#"><u>View all notifications</u></a></div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown ps-2">
                            <a class=" dropdown-toggle no-caret" href="#" role="button" data-bs-display="static" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside" aria-expanded="false">
                                <div class="avatar avatar-rounded avatar-xs">
                                    <img src="dist/img/avatar12.jpg" alt="user" class="avatar-img">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="p-2">
                                    <div class="media">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-primary avatar-sm avatar-rounded">
                                                <span class="initial-wrap">Hk</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="dropdown">
                                                <a href="#" class="d-block dropdown-toggle link-dark fw-medium"  data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="inside">Hencework</a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <div class="p-2">
                                                        <div class="media align-items-center active-user mb-3">
                                                            <div class="media-head me-2">
                                                                <div class="avatar avatar-primary avatar-xs avatar-rounded">
                                                                    <span class="initial-wrap">Hk</span>
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="#" class="d-flex align-items-center link-dark">Hencework <i class="ri-checkbox-circle-fill fs-7 text-primary ms-1"></i></a>
                                                                <a href="#" class="d-block fs-8 link-secondary"><u>Manage your account</u></a>
                                                            </div>
                                                        </div>
                                                        <div class="media align-items-center mb-3">
                                                            <div class="media-head me-2">
                                                                <div class="avatar avatar-xs avatar-rounded">
                                                                    <img src="dist/img/avatar12.jpg" alt="user" class="avatar-img">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="#" class="d-block link-dark">Jampack Team</a>
                                                                <a href="#" class="d-block fs-8 link-secondary">contact@hencework.com</a>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-block btn-outline-light btn-sm">
															<span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span>
															<span>Add Account</span></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fs-7">contact@hencework.com</div>
                                            <a href="#" class="d-block fs-8 link-secondary"><u>Sign Out</u></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="profile.html">Profile</a>
                                <a class="dropdown-item" href="#"><span class="me-2">Offers</span><span class="badge badge-sm badge-soft-pink">2</span></a><div class="dropdown-divider"></div>
                                <h6 class="dropdown-header">Manage Account</h6>
                                <a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="credit-card"></i></span><span>Payment methods</span></a>
                                <a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="check-square"></i></span><span>Subscriptions</span></a>
                                <a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="settings"></i></span><span>Settings</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="tag"></i></span><span>Raise a ticket</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Terms & Conditions</a>
                                <a class="dropdown-item" href="#">Help & Support</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /End Nav -->
        </div>
    </nav>
    <!-- /Top Navbar -->

    <!-- Vertical Nav -->
@include('nara.layouts.sidebar')
    <!-- /Vertical Nav -->

    <!-- Chat Popup -->
    <div class="hk-chatbot-popup">
        <header>
            <div class="chatbot-head-top">
                <a class="btn btn-sm btn-icon btn-dark btn-rounded" href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-notifications-active"></i><span>Send push notifications</span></a>
                    <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-volume-off"></i><span>Mute Chat</span></a>
                </div>
                <span class="text-white">Chat with Us</span>
                <a id="minimize_chatbot" href="javascript:void(0);" class="btn btn-sm btn-icon btn-dark btn-rounded">
                    <span class="icon"><span class="feather-icon"><i data-feather="minus"></i></span></span>
                </a>
            </div>
            <div class="separator-full separator-light mt-0 opacity-10"></div>
            <div class="media-wrap">
                <div class="media">
                    <div class="media-head">
                        <div class="avatar avatar-sm avatar-soft-primary avatar-icon avatar-rounded position-relative">
								<span class="initial-wrap">
									<i class="ri-customer-service-2-line"></i>
								</span>
                            <span class="badge badge-success badge-indicator badge-indicator-lg badge-indicator-nobdr position-bottom-end-overflow-1"></span>
                        </div>
                    </div>
                    <div class="media-body">
                        <div class="user-name">Chat Robot</div>
                        <div class="user-status">Online</div>
                    </div>
                </div>
            </div>
        </header>
        <div class="chatbot-popup-body">
            <div data-simplebar class="nicescroll-bar">
                <div>
                    <div class="init-content-wrap">
                        <div class="card card-shadow">
                            <div class="card-body">
                                <p class="card-text">Hey I am chat robot 😈<br>Do yo have any question regarding our tools?<br><br>Select the topic or start chatting.</p>
                                <button class="btn btn-block btn-primary text-nonecase start-conversation">Start a conversation</button>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <button class="btn btn-soft-primary text-nonecase btn-rounded start-conversation"><span><span class="icon"><span class="feather-icon"><i data-feather="eye"></i></span></span><span class="btn-text">Just browsing</span></span></button>
                            <button class="btn btn-soft-danger text-nonecase btn-rounded start-conversation"><span><span class="icon"><span class="feather-icon"><i data-feather="credit-card"></i></span></span><span class="btn-text">I have a question regarding pricing</span></span></button>
                            <button class="btn btn-soft-warning text-nonecase btn-rounded start-conversation"><span><span class="icon"><span class="feather-icon"><i data-feather="cpu"></i></span></span><span class="btn-text">Need help for technical query</span></span></button>
                            <button class="btn btn-soft-success text-nonecase btn-rounded start-conversation"><span><span class="icon"><span class="feather-icon"><i data-feather="zap"></i></span></span><span class="btn-text">I have a pre purchase question</span></span></button>
                        </div>
                    </div>
                    <ul class="list-unstyled d-none">
                        <li class="media sent">
                            <div class="media-body">
                                <div class="msg-box">
                                    <div>
                                        <p>I have a plan regarding pricing</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="media received">
                            <div class="avatar avatar-xs avatar-soft-primary avatar-icon avatar-rounded">
									<span class="initial-wrap">
										<i class="ri-customer-service-2-line"></i>
									</span>
                            </div>
                            <div class="media-body">
                                <div class="msg-box">
                                    <div>
                                        <p>Welcome back!<br>Are you looking to upgrade your existing plan?</p>
                                    </div>
                                </div>
                                <div class="msg-box typing-wrap">
                                    <div>
                                        <div class="typing">
                                            <div class="dot"></div>
                                            <div class="dot"></div>
                                            <div class="dot"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <footer>
            <div class="chatbot-intro-text fs-7">
                <div class="separator-full separator-light"></div>
                <p class="mb-2">This is jampack's beta version please sign up now to get early access to our full version</p>
                <a class="d-block mb-2" href="#"><u>Give Feedback</u></a>
            </div>
            <div class="input-group d-none">
                <div class="input-group-text overflow-show border-0">
                    <button class="btn btn-icon btn-flush-dark flush-soft-hover btn-rounded dropdown-toggle no-caret" data-bs-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                        <span class="icon"><span class="feather-icon"><i data-feather="share"></i></span></span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-icon avatar-xs avatar-soft-primary avatar-rounded me-3">
										<span class="initial-wrap">
											<i class="ri-image-line"></i>
										</span>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Photo or Video Library</span>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-icon avatar-xs avatar-soft-info avatar-rounded me-3">
										<span class="initial-wrap">
											<i class="ri-file-4-line"></i>
										</span>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Documents</span>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-icon avatar-xs avatar-soft-success avatar-rounded me-3">
										<span class="initial-wrap">
											<i class="ri-map-pin-line"></i>
										</span>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Location</span>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-icon avatar-xs avatar-soft-blue avatar-rounded me-3">
										<span class="initial-wrap">
											<i class="ri-contacts-line"></i>
										</span>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Contact</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <input type="text" id="input_msg_chat_popup" name="send-msg" class="input-msg-send form-control border-0 shadow-none" placeholder="Type something...">
                <div class="input-group-text overflow-show border-0">
                    <button class="btn btn-icon btn-flush-dark flush-soft-hover btn-rounded">
                        <span class="icon"><span class="feather-icon"><i data-feather="smile"></i></span></span>
                    </button>
                </div>
            </div>
            <div class="footer-copy-text">Powered by <a class="brand-link" href="#"><img src="dist/img/logo-light.png" alt="logo-brand"></a></div>
        </footer>
    </div>
    <a href="#" class="btn btn-icon btn-floating btn-primary btn-lg btn-rounded btn-popup-open">
			<span class="icon">
				<span class="feather-icon"><i data-feather="message-circle"></i></span>
			</span>
    </a>
    <div class="chat-popover shadow-xl"><p>Try Jampack Chat for free and connect with your customers now!</p></div>
    <!-- /Chat Popup -->

    <!-- Main Content -->
    <div class="hk-pg-wrapper">
        @yield('konten')

        <!-- Page Footer -->
        <div class="hk-footer">
            <footer class="container-xxl footer">
                <div class="row">
                    <div class="col-xl-8">
                        <p class="footer-text"><span class="copy-text">Jampack © 2022 All rights reserved.</span> <a href="#" class="" target="_blank">Privacy Policy</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">T&C</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">System Status</a></p>
                    </div>
                    <div class="col-xl-4">
                        <a href="#" class="footer-extr-link link-default"><span class="feather-icon"><i data-feather="external-link"></i></span><u>Send feedback to our help forum</u></a>
                    </div>
                </div>
            </footer>
        </div>
        <!-- / Page Footer -->

    </div>
    <!-- /Main Content -->
</div>
<!-- /Wrapper -->

<!-- jQuery -->
<script src="{{ asset('nara/vendors/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('nara/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- FeatherIcons JS -->
<script src="{{ asset('nara/dist/js/feather.min.js') }}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{ asset('nara/dist/js/dropdown-bootstrap-extended.js') }}"></script>

<!-- Simplebar JS -->
<script src="{{ asset('nara/vendors/simplebar/dist/simplebar.min.js') }}"></script>

<!-- Data Table JS -->
<script src="{{ asset('nara/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('nara/vendors/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('nara/vendors/datatables.net-select/js/dataTables.select.min.js') }}"></script>

<!-- Daterangepicker JS -->
<script src="{{ asset('nara/vendors/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('nara/vendors/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('nara/dist/js/daterangepicker-data.js') }}"></script>

<!-- Amcharts Maps JS -->
<script src="{{ asset('nara/vendors/@amcharts/amcharts4/core.js') }}"></script>
<script src="{{ asset('nara/vendors/@amcharts/amcharts4/maps.js') }}"></script>
<script src="{{ asset('nara/vendors/@amcharts/amcharts4-geodata/worldLow.js') }}"></script>
<script src="{{ asset('nara/vendors/@amcharts/amcharts4-geodata/worldHigh.js') }}"></script>
<script src="{{ asset('nara/vendors/@amcharts/amcharts4/themes/animated.js') }}"></script>

<!-- Apex JS -->
<script src="{{ asset('nara/vendors/apexcharts/dist/apexcharts.min.js') }}"></script>

<!-- Init JS -->
<script src="{{ asset('nara/dist/js/init.js') }}"></script>
<script src="{{ asset('nara/dist/js/chips-init.js') }}"></script>
<script src="{{ asset('nara/dist/js/dashboard-data.js') }}"></script>
</body>
</html>