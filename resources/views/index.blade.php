@extends('layouts.dashboard')
@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">MOECIVE</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">CRM</li>
                        </ol>
                    </div>
                    <h4 class="page-title">CRM</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Campaign Sent">Campaign
                                    Sent</h5>
                                <h3 class="my-2 py-1">9,184</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <div id="campaign-sent-chart" data-colors="#3688fc"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="New Leads">New Leads
                                </h5>
                                <h3 class="my-2 py-1">3,254</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 5.38%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <div id="new-leads-chart" data-colors="#42d29d"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Deals">Deals</h5>
                                <h3 class="my-2 py-1">861</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <div id="deals-chart" data-colors="#3688fc"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Booked Revenue">Booked
                                    Revenue</h5>
                                <h3 class="my-2 py-1">$253k</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <div id="booked-revenue-chart" data-colors="#42d29d"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                            </div>
                        </div>

                        <h4 class="header-title mb-1">Campaigns</h4>

                        <div id="dash-campaigns-chart" class="apex-charts" data-colors="#42d29d,#ffa866,#44badc"></div>

                        <div class="row text-center mt-2">
                            <div class="col-md-4">
                                <i class="mdi mdi-send widget-icon rounded-circle bg-light-lighten text-muted"></i>
                                <h3 class="font-weight-normal mt-3">
                                    <span>6,510</span>
                                </h3>
                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                    Total Sent</p>
                            </div>
                            <div class="col-md-4">
                                <i class="mdi mdi-flag-variant widget-icon rounded-circle bg-light-lighten text-muted"></i>
                                <h3 class="font-weight-normal mt-3">
                                    <span>3,487</span>
                                </h3>
                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i>
                                    Reached</p>
                            </div>
                            <div class="col-md-4">
                                <i class="mdi mdi-email-open widget-icon rounded-circle bg-light-lighten text-muted"></i>
                                <h3 class="font-weight-normal mt-3">
                                    <span>1,568</span>
                                </h3>
                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                    Opened</p>
                            </div>
                        </div>

                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-->

            <div class="col-lg-7">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                            </div>
                        </div>

                        <h4 class="header-title mb-3">Revenue</h4>

                        <div class="chart-content-bg">
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <p class="text-muted mb-0 mt-3">Current Month</p>
                                    <h2 class="font-weight-normal mb-3">
                                        <span>$42,025</span>
                                    </h2>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-muted mb-0 mt-3">Previous Month</p>
                                    <h2 class="font-weight-normal mb-3">
                                        <span>$74,651</span>
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <div id="dash-revenue-chart" class="apex-charts" data-colors="#42d29d,#44badc"></div>

                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-->
        </div>
        <!-- end row-->


    @endsection

    @push('scripts')

    <!-- Apex js -->
    <script src="{{ asset('assets/js/vendor/apexcharts.min.js') }}"></script>

    @endpush
