<?php
$page_title = 'Dashboard - Fintle';
$currentPage = 'index';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="page-wrapper">
    <!-- Header Start -->
    <header class="topbar">
        <div class="with-vertical">
            <nav class="navbar navbar-expand-lg p-0">
                <ul class="navbar-nav">
                    <li class="nav-item d-flex d-xl-none">
                        <a class="nav-link nav-icon-hover-bg rounded-circle sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                            <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-6"></iconify-icon>
                        </a>
                    </li>
                    <li class="nav-item d-none d-xl-flex nav-icon-hover-bg rounded-circle">
                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <iconify-icon icon="solar:magnifer-linear" class="fs-6"></iconify-icon>
                        </a>
                    </li>
                    
                    <!-- Create Sales Invoice Button -->
                    <li class="nav-item d-none d-lg-flex dropdown">
                        <div class="hover-dd">
                            <button class="btn bg-primary-subtle text-primary dropdown-toggle" onclick="location.href='create-invoice.php'" style="font-size: 13px; line-height: 1.5; display: inline-flex; align-items: center; gap: 6px;">
                                <iconify-icon icon="solar:add-plus-line-duotone" class="fs-5"></iconify-icon>
                                Create Sales Invoice
                            </button>
                        </div>
                    </li>
                </ul>

                <div class="d-block d-lg-none py-9 py-xl-0">
                    <img src="assets/images/logos/logo.svg" alt="Fintle-img" />
                </div>
                
                <a class="navbar-toggler p-0 border-0 nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <iconify-icon icon="solar:menu-dots-bold-duotone" class="fs-6"></iconify-icon>
                </a>
                
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="d-flex align-items-center justify-content-between">
                        <ul class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                            <!-- Notification Dropdown -->
                            <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                                <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                    <iconify-icon icon="solar:bell-bing-line-duotone" class="fs-6"></iconify-icon>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                        <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                                    </div>
                                    <div class="message-body" data-simplebar>
                                        <!-- Notification items -->
                                    </div>
                                    <div class="py-6 px-7 mb-1">
                                        <button class="btn btn-primary w-100">See All Notifications</button>
                                    </div>
                                </div>
                            </li>

                            <!-- Profile Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                    <div class="d-flex align-items-center gap-2 lh-base">
                                        <img src="assets/images/needs/profile.png" class="rounded-circle" width="35" height="35" alt="Fintle-img" />
                                    </div>
                                </a>
                                <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                    <div class="position-relative px-4 pt-3 pb-2">
                                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                                            <img src="assets/images/needs/profile.png" class="rounded-circle" width="56" height="56" alt="Fintle-img" />
                                            <div>
                                                <h5 class="mb-0 fs-12">David McMichael <span class="text-success fs-11">Pro</span></h5>
                                                <p class="mb-0 text-dark">david@fintle.com</p>
                                            </div>
                                        </div>
                                        <div class="message-body">
                                            <a href="profile.php" class="p-2 dropdown-item h6 rounded-1">My Profile</a>
                                            <a href="subscription.php" class="p-2 dropdown-item h6 rounded-1">My Subscription</a>
                                            <a href="invoice-list.php" class="p-2 dropdown-item h6 rounded-1">My Invoice</a>
                                            <a href="account-settings.php" class="p-2 dropdown-item h6 rounded-1">Account Settings</a>
                                            <a href="logout.php" class="p-2 dropdown-item h6 rounded-1">Sign Out</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header End -->

    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-4 pb-0">
                            <div class="d-flex flex-wrap gap-3 mb-9 align-items-center">
                                <span class="d-flex align-items-center justify-content-center round-48 flex-shrink-0 bg-primary-subtle rounded">
                                    <iconify-icon icon="solar:chart-linear" class="fs-7 text-primary"></iconify-icon>
                                </span>
                                <h5 class="card-title fw-semibold mb-0">Business Overview</h5>
                            </div>

                            <div class="row flex-nowrap">
                                <div class="col">
                                    <div class="card primary-gradient">
                                        <div class="card-body text-center px-9 pb-4">
                                            <div class="d-flex align-items-center justify-content-center round-48 rounded text-bg-primary flex-shrink-0 mb-3 mx-auto">
                                                <iconify-icon icon="solar:dollar-minimalistic-linear" class="fs-7 text-white"></iconify-icon>
                                            </div>
                                            <h6 class="fw-normal fs-3 mb-1">To Collect</h6>
                                            <h4 class="mb-1 d-flex align-items-center justify-content-center gap-1">$319,775</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card warning-gradient">
                                        <div class="card-body text-center px-9 pb-4">
                                            <div class="d-flex align-items-center justify-content-center round-48 rounded text-bg-warning flex-shrink-0 mb-3 mx-auto">
                                                <iconify-icon icon="solar:recive-twice-square-linear" class="fs-7 text-white"></iconify-icon>
                                            </div>
                                            <h6 class="fw-normal fs-3 mb-1">To Pay</h6>
                                            <h4 class="mb-1 d-flex align-items-center justify-content-center gap-1">$181,165</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card secondary-gradient">
                                        <div class="card-body text-center px-9 pb-4">
                                            <div class="d-flex align-items-center justify-content-center round-48 rounded text-bg-secondary flex-shrink-0 mb-3 mx-auto">
                                                <iconify-icon icon="ic:outline-backpack" class="fs-7 text-white"></iconify-icon>
                                            </div>
                                            <h6 class="fw-normal fs-3 mb-1">Total Cash</h6>
                                            <h4 class="mb-1 d-flex align-items-center justify-content-center gap-1">$355,447</h4>
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

<!-- Search Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom">
                <input type="search" class="form-control" placeholder="Search here" id="search" />
                <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
                    <i class="ti ti-x fs-5 ms-3"></i>
                </a>
            </div>
            <div class="modal-body message-body" data-simplebar>
                <!-- Search results -->
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>