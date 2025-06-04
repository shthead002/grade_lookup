<x-app-layout>
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header" id="top">
                    <h2 class="pageheader-title">Create Academic Year</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('academic_year.index') }}" class="breadcrumb-link">
                                        Academic Year
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Create Academic Year</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="card mb-5 shadow-sm">
                    <div class="card-body">
                        <form method="POST" action="{{ route('academic_year.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="year" class="col-form-label">Start Year</label>
                                <input id="year" type="text" name="year" class="form-control" required>
                            </div>

                            <div class="d-flex justify-content-end mt-3">
                                <a href="{{ route('academic_year.index') }}" class="btn btn-secondary mx-2">Cancel</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
