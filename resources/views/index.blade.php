@extends('layout.master')

@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Dashboard</h1>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- Tambahkan box lainnya sesuai kebutuhan -->
            </div>
        </div>
    </section>
</div>
@endsection
