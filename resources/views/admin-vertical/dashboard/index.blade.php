@extends('layouts.dashboard-v-fixed')

@section('content')
<div class="row">
    <div class="col-md-3">

        <div class="widget-summary widget-primary">
            <i class="fa-solid fa-users widget-icon"></i>
            <div class="widget-content">
                <div class="widget-title">35</div>
                <div class="widget-text">Pengunjung</div>
            </div>
        </div>

    </div>
    <div class="col-md-3">

        <div class="widget-summary widget-danger">
            <i class="fa-solid fa-shopping-cart widget-icon"></i>
            <div class="widget-content">
                <div class="widget-title">750</div>
                <div class="widget-text">Pembelian</div>
            </div>
        </div>

    </div>
</div>
@endsection