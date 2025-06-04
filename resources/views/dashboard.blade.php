<x-app-layout>
    <div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Dashboard</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Dashboard
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="ecommerce-widget">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
                    <div class="card border-top-primary shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="text-muted mb-4">Total Students</h5>
                            <div class="d-flex justify-content-between">
                                <div class="metric-value">
                                    <h1 class="font-weight-bold">12099</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
                    <div class="card border-top-primary shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="text-muted mb-4">Total Courses</h5>
                            <div class="d-flex justify-content-between">
                                <div class="metric-value">
                                    <h1 class="font-weight-bold">{{ $courses }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
