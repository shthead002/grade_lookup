<x-app-layout>
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <h2 class="pageheader-title">List of Semesters for A.Y. {{ $academicYear->name }}</h2>
                    </div>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('academic_year.index') }}"
                                        class="breadcrumb-link">Academic Year</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Semester</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                <div class="card shadow-sm mb-5">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Courses Chosen</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($semesters as $sem)
                                        <tr>
                                            <td>{{ $sem->name }}</td>
                                            <td>
                                                0/{{ $sem->courses->count() }}
                                            </td>
                                            <td>
                                                <a href="{{ route('semester.edit', ['academicYear' => $academicYear->id, 'semester' => $sem->id]) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{ route('semester.print', ['academicYear' => $academicYear->id, 'semester' => $sem->id]) }}"
                                                    class="btn btn-sm btn-primary" target="_blank">
                                                    Print
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
