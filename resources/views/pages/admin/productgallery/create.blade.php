@extends('layouts.admin')

@section('title')
Dashboard Product
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Product Gallery</h2>
            <p class="dashboard-subtitle">
                Create New Product Gallery
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('productgallery.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Kategori Produk</label>
                                            <select name="products_id" class="form-control">
                                                @foreach ($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Warna</label>
                                            <input type="text" name="color" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Foto Produk</label>
                                            <input type="file" name="photos" class="form-control" required>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success px-5">
                                            Save Now
                                        </button>

                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection