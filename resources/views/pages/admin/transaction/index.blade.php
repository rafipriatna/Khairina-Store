@extends('layouts.admin')

@section('title')
    Dashboard Transaction
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
        <h2 class="dashboard-title">Transaction</h2>
            <p class="dashboard-subtitle">
            List of Transaction
            </p>
            </div> 
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Total Harga</th>
                                            <th>Status</th>
                                            <th>Dibuat</th>
                                            <th>Code</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing:true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}'
            },
            columns: [
                {data:'id', name:'id'},
                {data:'user.name', name:'user.name'},
                {data:'total_price', name:'total_price'},
                {data:'transaction_status', name:'transaction_status'},
                {data:'created_at' , name:'created_at'},
                {data:'code', name:'code'},
                {
                    data:'action',
                    name:'action',
                    orderable: false,
                    searcable: false,
                    width:'15%'
                },
            ]
        });
    </script>
@endpush