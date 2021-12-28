@extends('layouts.app')

@section('', 'Home Page')
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            Date
          </button>
        </div>
      </div>
      <!-- <canvas class="my-4 w-100 chartjs-render-monile="margin: 20px auto;">
      <h2>Penjualan Barang</h2>tor" id="myChart" width="351" height="148" style="display: block; width: 351px; height: 148px;"></canvas> -->
      <img src="{{asset('image/GRr2.png')}}" alt="" sty
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Barang</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Satuan</th>
              <th scope="col">Harga</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Kain Wol</td>
              <td>100</td>
              <td>Kg</td>
              <td>50.000.000</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Kail Perak</td>
              <td>50</td>
              <td>Pcs</td>
              <td>3.540.400</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Besi Plafon</td>
              <td>300</td>
              <td>Btg</td>
              <td>76.870.000</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Timah</td>
              <td>35</td>
              <td>Kg</td>
              <td>1.245.000</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Timah Las</td>
              <td>100</td>
              <td>Btg</td>
              <td>10.000.000</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Triplek</td>
              <td>500</td>
              <td>Lbr</td>
              <td>102.000.000</td>
            </tr>
          </tbody>
        </table>
      </div>
@endsection
