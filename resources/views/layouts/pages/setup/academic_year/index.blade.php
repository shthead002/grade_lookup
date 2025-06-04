<x-app-layout>
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <h2 class="pageheader-title">List of Academic Year</h2>
                        <a href="{{ route('academic_year.create') }}" class="btn btn-primary m-2">
                            <i class="fas fa-plus"></i>
                            Add
                        </a>
                    </div>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Academic Year</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="container mt-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your action was completed successfully.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div> --}}
        <div class="row d-flex justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                <div class="card shadow-sm mb-5">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ays as $ay)
                                        <tr>
                                            <td>{{ $ay->name }}</td>
                                            <td>
                                                @if ($ay->active == true)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <a href="{{ route('academic_year.status_change', ['academicYear' => $ay->id]) }}"
                                                        class="badge bg-warning">
                                                        Inactive
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('semester.index', ['academicYear' => $ay->id]) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
