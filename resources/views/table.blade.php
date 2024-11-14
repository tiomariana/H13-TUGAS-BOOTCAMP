@extends('layout.master')

@section('title', 'Table Page')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Table</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Table Example</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Task</th>
                            <th>Progress</th>
                            <th>Label</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Update software</td>
                            <td><div class="progress progress-xs"><div class="progress-bar bg-danger" style="width: 55%"></div></div></td>
                            <td><span class="badge bg-danger">55%</span></td>
                        </tr>
                        <tr>
                            <td>Clean database</td>
                            <td><div class="progress progress-xs"><div class="progress-bar bg-warning" style="width: 70%"></div></div></td>
                            <td><span class="badge bg-warning">70%</span></td>
                        </tr>
                        <tr>
                            <td>Cron job running</td>
                            <td><div class="progress progress-xs"><div class="progress-bar bg-primary" style="width: 30%"></div></div></td>
                            <td><span class="badge bg-primary">30%</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    $(function () {
        $('#example1').DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        });
    });
</script>
@endpush
