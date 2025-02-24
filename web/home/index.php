<?php include_once"../../assets/config.php"; ?>
<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "$title"; ?></title>
  <?php include_once"../../assets/css.php"; ?>
</head>
  <body>
<aside class="sidebar">
  <button type="button" class="sidebar-close-btn">
    <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
  </button>
  <div>
    <a href="index.html" class="sidebar-logo">
      <img src="../../assets/propio/logo1.png" alt="site logo" class="light-logo">
      <img src="../../assets/images/logo-light.png" alt="site logo" class="dark-logo">
      <img src="../../assets/propio/logo-icon.png" alt="site logo" class="logo-icon">
    </a>
  </div>
  <?php include_once"../common/menu_left.php";?>
</aside>

<main class="dashboard-main">
 <?php include_once"../common/header.php"; ?>

  <div class="dashboard-main-body">

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
  <h6 class="fw-semibold mb-0">Ofrece y Contrata</h6>
  <ul class="d-flex align-items-center gap-2">
    <li class="fw-medium">
      <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
        HOME
      </a>
    </li>
    <li>-</li>
    <li class="fw-medium">Ofrece y Contrata</li>
  </ul>
</div>
    
    <div class="mb-24">
        <div class="row gy-4">

            <!-- Card Start -->
            <div class="col-xxl-4 col-md-6">
                <div class="shadow-7 p-16 radius-12 bg-base">
                    <div class="row g-3">
                        <div class="col-sm-6 col-xs-6">
                            <div class="py-20 px-24 radius-8 position-relative z-1 h-100 bg-blue-light">
                                <img src="assets/images/home-twelve/icons/booking-card-big-icon1.png" alt="Big Icon" class="position-absolute end-0 bottom-0 me-8 z-n1">
                                <span class="w-44-px h-44-px radius-8 bg-white d-flex justify-content-center align-items-center">
                                    <img src="assets/images/home-twelve/icons/booking-card-icon1.png" alt="Icon">
                                </span>
                                <span class="d-block mt-12 text-neutral-800">New Booking</span>
                                <h6 class="mt-1 mb-0">170</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="py-20 px-24 radius-8 position-relative z-1 h-100 bg-green-light">
                                <img src="assets/images/home-twelve/icons/booking-card-big-icon2.png" alt="Big Icon" class="position-absolute end-0 bottom-0 me-4 z-n1">
                                <span class="w-44-px h-44-px radius-8 bg-white d-flex justify-content-center align-items-center">
                                    <img src="assets/images/home-twelve/icons/booking-card-icon2.png" alt="Icon">
                                </span>
                                <span class="d-block mt-12 text-neutral-800">Schedule Room</span>
                                <h6 class="mt-1 mb-0">285</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="py-20 px-24 radius-8 position-relative z-1 h-100 bg-red-light">
                                <img src="assets/images/home-twelve/icons/booking-card-big-icon3.png" alt="Big Icon" class="position-absolute end-0 bottom-0 me-8 z-n1">
                                <span class="w-44-px h-44-px radius-8 bg-white d-flex justify-content-center align-items-center">
                                    <img src="assets/images/home-twelve/icons/booking-card-icon3.png" alt="Icon">
                                </span>
                                <span class="d-block mt-12 text-neutral-800">Total Customers</span>
                                <h6 class="mt-1 mb-0">175</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="py-20 px-24 radius-8 position-relative z-1 h-100 bg-warning-light">
                                <img src="assets/images/home-twelve/icons/booking-card-big-icon4.png" alt="Big Icon" class="position-absolute end-0 bottom-0 me-8 z-n1">
                                <span class="w-44-px h-44-px radius-8 bg-white d-flex justify-content-center align-items-center">
                                    <img src="assets/images/home-twelve/icons/booking-card-icon4.png" alt="Icon">
                                </span>
                                <span class="d-block mt-12 text-neutral-800">Total Revenue</span>
                                <h6 class="mt-1 mb-0">$750.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card End -->

            <!-- Semi Circle Gauge start -->
            <div class="col-xxl-4 col-md-6">
                <div class="shadow-7 p-24 radius-12 bg-base h-100">
                    <div class="text-center">
                        <div class="position-relative">
                            <div id="semiCircleGaugeTwo" class="big-semi-circle-gauge d-flex justify-content-center"></div>
                            <span class="w-90-px h-90-px rounded-circle bg-primary-50 d-flex justify-content-center align-items-center position-absolute start-50 translate-middle-x top-50">
                              <img src="assets/images/home-twelve/icons/home.png" alt="Home Icon">
                            </span>
                        </div>
                        <h3 class="mt-40 mb-0">35</h3>
                        <span class="text-neutral-800 mt-4">Available Room Today</span>
                    </div>
                </div>
            </div>
            <!-- Semi Circle Gauge End -->

            <!-- Booking Statistics progress start -->
            <div class="col-xxl-4">
                <div class="shadow-7 p-20 radius-12 bg-base h-100">
                    <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                        <h6 class="mb-2 fw-bold text-lg">Booking Statistic</h6>
                        <div class="">
                            <select class="form-select form-select-sm w-auto bg-base border text-secondary-light radius-8 radius-8">
                                <option>Yearly</option>
                                <option>Monthly</option>
                                <option>Weekly</option>
                                <option>Today</option>
                            </select>
                        </div>
                    </div>
                    <div class="position-relative">
                        <div id="statisticBarChart" class="text-style"></div>
                    </div>
                </div>
            </div>
            <!-- Booking Statistics progress End -->

        </div>
    </div>
    <div class="row g-4">
        <div class="col-xl-8">
            <div class="d-flex flex-column gap-24">

                <!-- Travel Slider Start -->
                <div class="">
                    <div class="d-flex align-items-center justify-content-between mb-16">
                        <h6 class="text-lg mb-0">Exclusive Travel Packages</h6>
                        <div class="d-flex align-items-center gap-16">
                            <button type="button" id="instructor-prev" class="slick-prev slick-arrow d-flex align-items-center rounded-circle border border-neutral-400 text-neutral-600 text-2xl bg-hover-primary-600 hover-text-white d-flex align-items-center justify-content-center w-40-px h-40-px position-relative top-0 start-0 end-0 transform-unset">
                                <i class="ri-arrow-left-s-line"></i>
                            </button>
                            <button type="button" id="instructor-next" class="slick-next slick-arrow d-flex align-items-center rounded-circle border border-neutral-400 text-neutral-600 text-2xl bg-hover-primary-600 hover-text-white d-flex align-items-center justify-content-center w-40-px h-40-px position-relative top-0 start-0 end-0 transform-unset">
                                <i class="ri-arrow-right-s-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="travel-slider">
                        <div class="bg-base p-6 radius-12">
                            <div class="radius-8 overflow-hidden">
                                <img src="assets/images/home-twelve/travel-img1.png" alt="Image" class="w-100 h-100 object-fit-cover">
                            </div>
                            <div class="p-8 pt-16">
                                <h6 class="text-md mb-1">Paris</h6>
                                <span class="text-secondary-light">5 Days, 6 Nights</span>
                                <div class="mt-10 d-flex align-items-center justify-content-between gap-10">
                                    <span class="fw-semibold text-secondary-light text-sm">$12,000</span>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="text-primary-600 line-height-1 text-md fw-medium"><i class="ri-user-3-line"></i></span>
                                        <span class="text-sm fw-medium">(280)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-base p-6 radius-12">
                            <div class="radius-8 overflow-hidden">
                                <img src="assets/images/home-twelve/travel-img2.png" alt="Image" class="w-100 h-100 object-fit-cover">
                            </div>
                            <div class="p-8 pt-16">
                                <h6 class="text-md mb-1">İstanbul</h6>
                                <span class="text-secondary-light">6 Days, 7 Nights</span>
                                <div class="mt-10 d-flex align-items-center justify-content-between gap-10">
                                    <span class="fw-semibold text-secondary-light text-sm">$7,000</span>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="text-primary-600 line-height-1 text-md fw-medium"><i class="ri-user-3-line"></i></span>
                                        <span class="text-sm fw-medium">(280)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-base p-6 radius-12">
                            <div class="radius-8 overflow-hidden">
                                <img src="assets/images/home-twelve/travel-img3.png" alt="Image" class="w-100 h-100 object-fit-cover">
                            </div>
                            <div class="p-8 pt-16">
                                <h6 class="text-md mb-1">London</h6>
                                <span class="text-secondary-light">4 Days, 5 Nights</span>
                                <div class="mt-10 d-flex align-items-center justify-content-between gap-10">
                                    <span class="fw-semibold text-secondary-light text-sm">$15,000</span>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="text-primary-600 line-height-1 text-md fw-medium"><i class="ri-user-3-line"></i></span>
                                        <span class="text-sm fw-medium">(280)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-base p-6 radius-12">
                            <div class="radius-8 overflow-hidden">
                                <img src="assets/images/home-twelve/travel-img4.png" alt="Image" class="w-100 h-100 object-fit-cover">
                            </div>
                            <div class="p-8 pt-16">
                                <h6 class="text-md mb-1">Bangkok</h6>
                                <span class="text-secondary-light">3 Days, 4 Nights</span>
                                <div class="mt-10 d-flex align-items-center justify-content-between gap-10">
                                    <span class="fw-semibold text-secondary-light text-sm">$5,000</span>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="text-primary-600 line-height-1 text-md fw-medium"><i class="ri-user-3-line"></i></span>
                                        <span class="text-sm fw-medium">(220)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-base p-6 radius-12">
                            <div class="radius-8 overflow-hidden">
                                <img src="assets/images/home-twelve/travel-img2.png" alt="Image" class="w-100 h-100 object-fit-cover">
                            </div>
                            <div class="p-8 pt-16">
                                <h6 class="text-md mb-1">İstanbul</h6>
                                <span class="text-secondary-light">6 Days, 7 Nights</span>
                                <div class="mt-10 d-flex align-items-center justify-content-between gap-10">
                                    <span class="fw-semibold text-secondary-light text-sm">$7,000</span>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="text-primary-600 line-height-1 text-md fw-medium"><i class="ri-user-3-line"></i></span>
                                        <span class="text-sm fw-medium">(280)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Travel SLider end -->

                <!-- Earning Statistics start -->
                <div class="card h-100">
                    <div class="card-header pb-0 border-0">
                        <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                            <h6 class="mb-2 fw-bold text-lg mb-0">Earning Statistic</h6>
                            <select class="form-select form-select-sm w-auto bg-base border text-secondary-light radius-8">
                                <option>Yearly</option>
                                <option>Monthly</option>
                                <option>Weekly</option>
                                <option>Today</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body p-24">
                        <ul class="d-flex flex-wrap align-items-center justify-content-center mb-3 gap-3">
                            <li class="d-flex align-items-center gap-2">
                                <span class="w-12-px h-8-px rounded-pill bg-primary-600"></span>
                                <span class="text-secondary-light text-sm fw-semibold">Income
                                    <span class="text-primary-light fw-bold text-xl ms-1">$26,201</span>
                                </span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <span class="w-12-px h-8-px rounded-pill bg-warning-600"></span>
                                <span class="text-secondary-light text-sm fw-semibold">Expense
                                    <span class="text-primary-light fw-bold text-xl ms-1"> $3,120</span>
                                </span>
                            </li>
                        </ul>
                        <div id="enrollmentChart" class="apexcharts-tooltip-style-1"></div>
                    </div>
                </div>
                <!-- Earning Statistics end -->

                <!-- Transaction History Table Start -->
                <div class="card radius-12 h-100">
                    <div class="card-header border-bottom bg-base py-16 px-24 d-flex align-items-center justify-content-between">
                        <h6 class="text-lg fw-semibold mb-0">Transaction History</h6>
                        <a href="javascript:void(0)" class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                        View All
                        <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive scroll-sm">
                            <table class="table bordered-table table-py-8 mb-0 rounded-0 border-0">
                                <thead>
                                    <tr>
                                        <th scope="col" class="rounded-0">Place</th>
                                        <th scope="col" class="rounded-0">ID</th>
                                        <th scope="col" class="rounded-0">Duration</th>
                                        <th scope="col" class="rounded-0">Amount</th>
                                        <th scope="col" class="rounded-0">Date</th>
                                        <th scope="col" class="rounded-0">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-secondary-light">
                                            <div class="d-flex align-items-center gap-12">
                                                <span class="w-40-px h-40-px radius-4 overflow-hidden">
                                                    <img src="assets/images/home-twelve/transaction-img1.png" alt="Avatar" class="w-100 h-100 object-fit-cover">
                                                </span>
                                                <span class="text-secondary-light">Grand Palace</span>
                                            </div>
                                        </td>
                                        <td class="text-secondary-light">#1250</td>
                                        <td class="text-secondary-light">5 Days, 6 Nights</td>
                                        <td class="text-secondary-light">$209.00</td>
                                        <td class="text-secondary-light">21/09/2025</td>
                                        <td> 
                                            <span class="bg-success-focus text-success-main px-20 py-4 radius-4 fw-medium text-sm">Completed</span> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-secondary-light">
                                            <div class="d-flex align-items-center gap-12">
                                                <span class="w-40-px h-40-px radius-4 overflow-hidden">
                                                    <img src="assets/images/home-twelve/transaction-img2.png" alt="Avatar" class="w-100 h-100 object-fit-cover">
                                                </span>
                                                <span class="text-secondary-light">Paris France</span>
                                            </div>
                                        </td>
                                        <td class="text-secondary-light">#6523</td>
                                        <td class="text-secondary-light">2 Days, 3 Nights</td>
                                        <td class="text-secondary-light">$$570.00</td>
                                        <td class="text-secondary-light">21/09/2025</td>
                                        <td> 
                                            <span class="bg-warning-focus text-warning-main px-20 py-4 radius-4 fw-medium text-sm">Pending</span> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-secondary-light">
                                            <div class="d-flex align-items-center gap-12">
                                                <span class="w-40-px h-40-px radius-4 overflow-hidden">
                                                    <img src="assets/images/home-twelve/transaction-img3.png" alt="Avatar" class="w-100 h-100 object-fit-cover">
                                                </span>
                                                <span class="text-secondary-light">Khaosan Road</span>
                                            </div>
                                        </td>
                                        <td class="text-secondary-light">#1250</td>
                                        <td class="text-secondary-light">5 Days, 6 Nights</td>
                                        <td class="text-secondary-light">$870.00</td>
                                        <td class="text-secondary-light">21/09/2025</td>
                                        <td> 
                                            <span class="bg-success-focus text-success-main px-20 py-4 radius-4 fw-medium text-sm">Completed</span> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-secondary-light">
                                            <div class="d-flex align-items-center gap-12">
                                                <span class="w-40-px h-40-px radius-4 overflow-hidden">
                                                    <img src="assets/images/home-twelve/transaction-img4.png" alt="Avatar" class="w-100 h-100 object-fit-cover">
                                                </span>
                                                <span class="text-secondary-light">Wat Phra Kaew</span>
                                            </div>
                                        </td>
                                        <td class="text-secondary-light">#6523</td>
                                        <td class="text-secondary-light">2 Days, 3 Nights</td>
                                        <td class="text-secondary-light">$450.00</td>
                                        <td class="text-secondary-light">21/09/2025</td>
                                        <td> 
                                            <span class="bg-warning-focus text-warning-main px-20 py-4 radius-4 fw-medium text-sm">Pending</span> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-secondary-light">
                                            <div class="d-flex align-items-center gap-12">
                                                <span class="w-40-px h-40-px radius-4 overflow-hidden">
                                                    <img src="assets/images/home-twelve/transaction-img5.png" alt="Avatar" class="w-100 h-100 object-fit-cover">
                                                </span>
                                                <span class="text-secondary-light">Wat Pho</span>
                                            </div>
                                        </td>
                                        <td class="text-secondary-light">#1250</td>
                                        <td class="text-secondary-light">3 Days, 4 Nights</td>
                                        <td class="text-secondary-light">$120.00</td>
                                        <td class="text-secondary-light">21/09/2025</td>
                                        <td> 
                                            <span class="bg-success-focus text-success-main px-20 py-4 radius-4 fw-medium text-sm">Completed</span> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Transaction History Table end -->

            </div>
        </div>


        <div class="col-xl-4">
            <div class="d-flex flex-column gap-24">
                
                <!-- Country Status Start -->
                <div class="card radius-12 border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                            <h6 class="mb-2 fw-bold text-lg">Countries Status</h6>
                            <div class="">
                            <select class="form-select form-select-sm w-auto bg-base border text-secondary-light radius-8">
                                <option>Yearly</option>
                                <option>Monthly</option>
                                <option>Weekly</option>
                                <option>Today</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="bg-base px-20">
                        <div id="world-map" class="radius-8"></div>
                    </div>
                    <div class="card-body p-24 max-h-266-px scroll-sm overflow-y-auto">
                        <div class="">
                            <div class="d-flex align-items-center justify-content-between gap-3 mb-3 pb-2">
                            <div class="d-flex align-items-center w-100">
                                <img src="assets/images/flags/flag1.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                <div class="flex-grow-1">
                                <h6 class="text-sm mb-0">USA</h6>
                                <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 w-100">
                                <div class="w-100 max-w-66 ms-auto">
                                <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-primary-600 rounded-pill" style="width: 80%;"></div>
                                </div>
                                </div>
                                <span class="text-secondary-light font-xs fw-semibold">80%</span>
                            </div>
                            </div>
    
                            <div class="d-flex align-items-center justify-content-between gap-3 mb-3 pb-2">
                            <div class="d-flex align-items-center w-100">
                                <img src="assets/images/flags/flag2.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                <div class="flex-grow-1">
                                <h6 class="text-sm mb-0">Japan</h6>
                                <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 w-100">
                                <div class="w-100 max-w-66 ms-auto">
                                <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-orange rounded-pill" style="width: 60%;"></div>
                                </div>
                                </div>
                                <span class="text-secondary-light font-xs fw-semibold">60%</span>
                            </div>
                            </div>
    
                            <div class="d-flex align-items-center justify-content-between gap-3 mb-3 pb-2">
                            <div class="d-flex align-items-center w-100">
                                <img src="assets/images/flags/flag3.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                <div class="flex-grow-1">
                                <h6 class="text-sm mb-0">France</h6>
                                <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 w-100">
                                <div class="w-100 max-w-66 ms-auto">
                                <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-yellow rounded-pill" style="width: 49%;"></div>
                                </div>
                                </div>
                                <span class="text-secondary-light font-xs fw-semibold">49%</span>
                            </div>
                            </div>
    
                            <div class="d-flex align-items-center justify-content-between gap-3">
                            <div class="d-flex align-items-center w-100">
                                <img src="assets/images/flags/flag4.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                <div class="flex-grow-1">
                                <h6 class="text-sm mb-0">Germany</h6>
                                <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 w-100">
                                <div class="w-100 max-w-66 ms-auto">
                                <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success-main rounded-pill" style="width: 100%;"></div>
                                </div>
                                </div>
                                <span class="text-secondary-light font-xs fw-semibold">100%</span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Country Status End -->

                <!-- Check in checkout Start -->
                <div class="card radius-12 border-0">
                    <div class="card-body py-48 px-16 d-flex align-items-center justify-content-center gap-100-px">
                        <div class="text-center">
                            <div class="position-relative d-inline-block">
                                <svg class="radial-progress max-w-120-px" data-percentage="70" viewBox="0 0 80 80">
                                    <circle class="incomplete stroke-8-px stroke-green" cx="40" cy="40" r="35"></circle>
                                    <circle class="complete stroke-8-px stroke-green" cx="40" cy="40" r="35"></circle>
                                    <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"> </text>
                                </svg>
                                <span class="w-56-px h-56-px rounded-circle bg-neutral-200 text-success-600 d-flex justify-content-center align-items-center position-absolute start-50 top-50 translate-middle">
                                    <i class="ri-contract-left-fill w-24-px h-24-px bg-success-600 text-md text-white d-flex justify-content-center align-items-center rounded-circle"></i>
                                </span>
                            </div>
                            <div class="mt-24">
                                <h5 class="mb-1">70%</h5>
                                <span class="text-secondary-light">Check In</span>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="position-relative d-inline-block">
                                <svg class="radial-progress max-w-120-px" data-percentage="30" viewBox="0 0 80 80">
                                    <circle class="incomplete stroke-8-px stroke-warning" cx="40" cy="40" r="35"></circle>
                                    <circle class="complete stroke-8-px stroke-warning" cx="40" cy="40" r="35"></circle>
                                    <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"> </text>
                                </svg>
                                <span class="w-56-px h-56-px rounded-circle bg-neutral-200 text-warning-600 d-flex justify-content-center align-items-center position-absolute start-50 top-50 translate-middle">
                                    <i class="ri-contract-right-fill w-24-px h-24-px bg-warning-600 text-md text-white d-flex justify-content-center align-items-center rounded-circle"></i>
                                </span>
                            </div>
                            <div class="mt-24">
                                <h5 class="mb-1">30%</h5>
                                <span class="text-secondary-light">Check Out</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Check in checkout End -->

                <!-- Spend Overview Progress Start -->
                <div class="card radius-12 border-0">
                    <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between py-12 px-20 border-bottom border-neutral-200">
                        <h6 class="mb-2 fw-bold text-lg">Spend Overview</h6>
                        <div class="">
                        <select class="form-select form-select-sm w-auto bg-base border text-secondary-light radius-8">
                            <option>Yearly</option>
                            <option>Monthly</option>
                            <option>Weekly</option>
                            <option>Today</option>
                        </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-column gap-20">

                            <div class="d-flex align-items-center justify-content-between gap-10">
                                <div class="d-flex align-items-center gap-12">
                                    <span class="w-40-px h-40-px rounded-circle d-flex justify-content-center align-items-center bg-blue-light-two">
                                        <img src="assets/images/home-twelve/icons/spen-icon1.png" alt="Icon">
                                    </span>
                                    <div class="">
                                        <h6 class="text-sm mb-2">Flights</h6>
                                        <span class="text-xs text-secondary-light">$70,570</span>
                                    </div>
                                </div>
                                <div class="">
                                    <span class="text-primary-light text-sm d-block text-end">
                                        <svg class="radial-progress" data-percentage="20" viewBox="0 0 80 80">
                                            <circle class="incomplete stroke-8-px stroke-blue" cx="40" cy="40" r="35"></circle>
                                            <circle class="complete stroke-8-px stroke-blue" cx="40" cy="40" r="35"></circle>
                                            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">20</text>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-10">
                                <div class="d-flex align-items-center gap-12">
                                    <span class="w-40-px h-40-px rounded-circle d-flex justify-content-center align-items-center bg-red-light-two">
                                        <img src="assets/images/home-twelve/icons/spen-icon2.png" alt="Icon">
                                    </span>
                                    <div class="">
                                        <h6 class="text-sm mb-2">Hotels</h6>
                                        <span class="text-xs text-secondary-light">$85,570</span>
                                    </div>
                                </div>
                                <div class="">
                                    <span class="text-primary-light text-sm d-block text-end">
                                        <svg class="radial-progress" data-percentage="35" viewBox="0 0 80 80">
                                            <circle class="incomplete stroke-8-px stroke-red" cx="40" cy="40" r="35"></circle>
                                            <circle class="complete stroke-8-px stroke-red" cx="40" cy="40" r="35"></circle>
                                            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">35</text>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-10">
                                <div class="d-flex align-items-center gap-12">
                                    <span class="w-40-px h-40-px rounded-circle d-flex justify-content-center align-items-center bg-red-light-two">
                                        <img src="assets/images/home-twelve/icons/spen-icon2.png" alt="Icon">
                                    </span>
                                    <div class="">
                                        <h6 class="text-sm mb-2">Trains</h6>
                                        <span class="text-xs text-secondary-light">$15,000</span>
                                    </div>
                                </div>
                                <div class="">
                                    <span class="text-primary-light text-sm d-block text-end">
                                        <svg class="radial-progress" data-percentage="45" viewBox="0 0 80 80">
                                            <circle class="incomplete stroke-8-px stroke-warning" cx="40" cy="40" r="35"></circle>
                                            <circle class="complete stroke-8-px stroke-warning" cx="40" cy="40" r="35"></circle>
                                            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">45</text>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-10">
                                <div class="d-flex align-items-center gap-12">
                                    <span class="w-40-px h-40-px rounded-circle d-flex justify-content-center align-items-center bg-green-light-two">
                                        <img src="assets/images/home-twelve/icons/spen-icon4.png" alt="Icon">
                                    </span>
                                    <div class="">
                                        <h6 class="text-sm mb-2">Cars</h6>
                                        <span class="text-xs text-secondary-light">$90,000</span>
                                    </div>
                                </div>
                                <div class="">
                                    <span class="text-primary-light text-sm d-block text-end">
                                        <svg class="radial-progress" data-percentage="65" viewBox="0 0 80 80">
                                            <circle class="incomplete stroke-8-px stroke-green" cx="40" cy="40" r="35"></circle>
                                            <circle class="complete stroke-8-px stroke-green" cx="40" cy="40" r="35"></circle>
                                            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">65</text>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Spend Overview Progress End -->
                 
            </div>
        </div>
    </div>
  </div>
  <footer class="d-footer">
  <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <p class="mb-0">© 2024 WowDash. All Rights Reserved.</p>
    </div>
    <div class="col-auto">
      <p class="mb-0">Made by <span class="text-primary-600">wowtheme7</span></p>
    </div>
  </div>
</footer>
</main>
  <!-- jQuery library js -->
  <?php include_once"../../assets/js.php"; ?>

<script>    
    // ================================ Semi Circle Gauge chart Start ================================ 
    var options = {
        series: [75],
        chart: {
            width: 400,
            height: 300,
            type: 'radialBar',
            sparkline: {
                enabled: true,
            },
            toolbar: {
                show: false,
            },
        },
        plotOptions: {
            radialBar: {
            offsetY: -24,
            offsetX: -14,
            startAngle: -90,
            endAngle: 90,
            track: {
                background: "#E3E6E9",
                strokeWidth: "70%", 
            },
            hollow: {
                size: "70%", 
            },
            dataLabels: {
                show: false,
                
                value: {
                    fontSize: '22px',
                    fontWeight: 600,
                    color: '#487FFF',
                    offsetY: 16,
                },
            },
            },
        },
        fill: {
            type: 'gradient',
            colors: ['#9DBAFF'],
            gradient: {
            shade: 'dark',
            type: 'horizontal',
            shadeIntensity: 0.5,
            gradientToColors: ['#487FFF'],
            inverseColors: true,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 100],
            },
        },
        stroke: {
            lineCap: 'round',
        },
    };

    var chart = new ApexCharts(document.querySelector("#semiCircleGaugeTwo"), options);
    chart.render();
    // ================================ Semi Circle Gauge chart End ================================ 

    // ================================ J Vector Map Start ================================ 
    $('#world-map').vectorMap(
        {
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        borderColor: '#fff',
        borderOpacity: 0.25,
        borderWidth: 0,
        color: '#000000',
        regionStyle : {
            initial : {
            fill : '#D1D5DB'
            }
        },
        markerStyle: {
        initial: {
                    r: 5,
                    'fill': '#fff',
                    'fill-opacity':1,
                    'stroke': '#000',
                    'stroke-width' : 1,
                    'stroke-opacity': 0.4
                },
            },
        markers : [{
            latLng : [35.8617, 104.1954],
            name : 'China : 250'
            },

            {
            latLng : [25.2744, 133.7751],
            name : 'AustrCalia : 250'
            },

            {
            latLng : [36.77, -119.41],
            name : 'USA : 82%'
            },

            {
            latLng : [55.37, -3.41],
            name : 'UK   : 250'
            },

            {
            latLng : [25.20, 55.27],
            name : 'UAE : 250'
        }],

        series: {
            regions: [{
                values: {
                    "US": '#487FFF ',
                    "SA": '#487FFF',
                    "AU": '#487FFF',
                    "CN": '#487FFF',
                    "GB": '#487FFF',
                },
                attribute: 'fill'
            }]
        },
        hoverOpacity: null,
        normalizeFunction: 'linear',
        zoomOnScroll: false,
        scaleColors: ['#000000', '#000000'],
        selectedColor: '#000000',
        selectedRegions: [],
        enableZoom: false,
        hoverColor: '#fff',
    }); 
    // ================================ J Vector Map End ================================ 
    
    // ================================ Vertical bar chart js Start ================================ 
    var options = {
        series: [{
            data: [6200, 5200, 4200, 3200, 1200]
        }],
        chart: {
            type: 'bar',
            height: 270,
            toolbar: {
                show: false
            },
        },
        plotOptions: {
            bar: {
                borderRadius: 4,
                horizontal: true,
                distributed: true, // Enables individual bar styling
                barHeight: '22px'
            }
        },
        dataLabels: {
            enabled: false
        },
        grid: {
            show: true,
            borderColor: '#ddd',
            strokeDashArray: 0,
            position: 'back',
            xaxis: {
              lines: {
                show: false
              }
            },   
            yaxis: {
              lines: {
                show: false
            }
          },  
        },
        xaxis: {
            categories: ['Booking', 'Pending', 'Finished', 'Canceled', 'Refunded'],
            labels: {
              formatter: function (value) {
                  return (value / 1000).toFixed(0) + 'k';
              }
            }
        },
        legend: {
            show: false
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                type: "horizontal",
                shadeIntensity: 0.5,
                gradientToColors: ['#C98BFF', '#FFDC90', '#94FF9B', '#FFAC89', '#A3E2FE'],
                inverseColors: false,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 100]
            }
        },
        colors: [
            '#8501F8',
            '#FF9F29',
            '#00D40E',
            '#F84B01',
            '#2FBCFC' 
        ]
    };

    var chart = new ApexCharts(document.querySelector("#statisticBarChart"), options);
    chart.render();
    // ================================ Vertical bar chart js End ================================ 

    // ================================ Travel Card slider js Start ================================ 
    $('.travel-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        speed: 1500,
        dots: false,
        pauseOnHover: true,
        arrows: true,
        draggable: true,
        rtl: $('html').attr('dir') === 'rtl' ? true : false,
        speed: 900,
        infinite: true,
        nextArrow: '#instructor-next',
        prevArrow: '#instructor-prev',
        responsive: [
        {
            breakpoint: 1299,
            settings: {
            slidesToShow: 3,
            arrows: false,
            }
        },
        {
            breakpoint: 992,
            settings: {
            slidesToShow: 2,
            arrows: false,
            }
        },
        {
            breakpoint: 767,
            settings: {
            slidesToShow: 2,
            arrows: false,
            }
        },
        {
            breakpoint: 575,
            settings: {
            slidesToShow: 1,
            arrows: false,
            }
        },
        ]
    });  
    // ========================= Travel Card slider Js End ===================

    // ================================ Animated Radial Progress Bar Start ================================ 
        $('svg.radial-progress').each(function (index, value) {
        $(this).find($('circle.complete')).removeAttr('style');
    });

    // Activate progress animation on scroll
    $(window).scroll(function () {
        $('svg.radial-progress').each(function (index, value) {
            // Trigger when the element is fully in the viewport
            if (
                $(window).scrollTop() >= $(this).offset().top - $(window).height() &&
                $(window).scrollTop() <= $(this).offset().top + $(this).height()
            ) {
                // Get percentage of progress
                const percent = $(value).data('percentage');
                // Get radius of the svg's circle.complete
                const radius = $(this).find($('circle.complete')).attr('r');
                // Get circumference (2πr)
                const circumference = 2 * Math.PI * radius;
                // Get stroke-dashoffset value based on the percentage of the circumference
                const strokeDashOffset = circumference - ((percent * circumference) / 100);
                // Transition progress for 1.25 seconds
                $(this).find($('circle.complete')).animate({ 'stroke-dashoffset': strokeDashOffset }, 1250);
            }
        });
    }).trigger('scroll');
    // ================================ Animated Radial Progress Bar End ================================ 

    // ===================== Average Enrollment Rate Start =============================== 
    function createChartTwo(chartId, color1, color2) {
        var options = {
            series: [{
                name: 'series1',
                data: [48, 35, 55, 32, 48, 30, 55, 50, 57]
            }, {
                name: 'series2',
                data: [12, 20, 15, 26, 22, 60, 40, 48, 25]
            }],
            legend: {
                show: false 
            },
            chart: {
                type: 'area',
                width: '100%',
                height: 200,
                toolbar: {
                    show: false
                },
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 3,
                colors: [color1, color2], // Use two colors for the lines
                lineCap: 'round'
            },
            grid: {
                show: true,
                borderColor: '#D1D5DB',
                strokeDashArray: 1,
                position: 'back',
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: true
                    }
                },
                row: {
                    colors: undefined,
                    opacity: 0.5
                },
                column: {
                    colors: undefined,
                    opacity: 0.5
                },
                padding: {
                    top: -20,
                    right: 0,
                    bottom: -10,
                    left: 0
                },
            },
            fill: {
                type: 'gradient',
                colors: [color1, color2], // Use two colors for the gradient
                gradient: {
                    shade: 'light',
                    type: 'vertical',
                    shadeIntensity: 0.5,
                    gradientToColors: [undefined, `${color2}00`], // Apply transparency to both colors
                    inverseColors: false,
                    opacityFrom: [0, 0], // Starting opacity for both colors
                    opacityTo: [0, 0], // Ending opacity for both colors
                    stops: [0, 100],
                },
            },
            markers: {
                colors: [color1, color2], // Use two colors for the markers
                strokeWidth: 3,
                size: 0,
                hover: {
                    size: 10
                }
            },
            xaxis: {
                labels: {
                    show: false
                },
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                tooltip: {
                    enabled: false
                },
                labels: {
                    formatter: function (value) {
                        return value;
                    },
                    style: {
                        fontSize: "14px"
                    }
                }
            },
            yaxis: {
                labels: {
                    formatter: function (value) {
                    return "$" + value + "k";
                    },
                    style: {
                    fontSize: "14px"
                    }
                },
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                }
            }
        };

        var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
        chart.render();
    }

    createChartTwo('enrollmentChart', '#487FFF', '#FF9F29');
    // ===================== Average Enrollment Rate End =============================== 
  
</script>

</body>
</html>
