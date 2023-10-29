@extends('template')

@section('content')
{{-- Kerjakan tugas anda disini --}}

<h1>Kamera</h1>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card mb-4">
            <img src="{{ asset('admin/img/sonya6000.jpg') }}" class="card-img-top w-50" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sony a6000</h5>
                <p class="card-text">Rp.300.000/Hari</p>
                <p class="card-text">Nanda Kamera</p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4">
            <img src="{{ asset('admin/img/sonya7.jpg') }}" class="card-img-top w-50" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sony a7</h5>
                <p class="card-text">Rp.500.000/Hari</p>
                <p class="card-text">Rakha Kamera</p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4">
            <img src="{{ asset('admin/img/m50.jpg') }}" class="card-img-top w-50" alt="...">
            <div class="card-body">
                <h5 class="card-title">Canon Eos M50</h5>
                <p class="card-text">Rp.350.000/Hari</p>
                <p class="card-text">Ade Kamera</p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4">
            <img src="{{ asset('admin/img/rp.jpg') }}" class="card-img-top w-50" alt="...">
            <div class="card-body">
                <h5 class="card-title">Canon Eos RP</h5>
                <p class="card-text">Rp.500.000/Hari</p>
                <p class="card-text">Nanda Kamera</p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4">
            <img src="{{ asset('admin/img/m6.jpg') }}" class="card-img-top w-50" alt="...">
            <div class="card-body">
                <h5 class="card-title">Canon Eos M6</h5>
                <p class="card-text">Rp.250.000/Hari</p>
                <p class="card-text">Rakha Kamera</p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4">
            <img src="{{ asset('admin/img/r6.jpg') }}" class="card-img-top w-50" alt="...">
            <div class="card-body">
                <h5 class="card-title">Canon Eos R6</h5>
                <p class="card-text">Rp.550.000/Hari</p>
                <p class="card-text">Ade Kamera</p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
</div>
@endsection