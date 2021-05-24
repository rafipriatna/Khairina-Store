@extends('layouts.dashboard')

@section('title')
    Khairina Store - Jual Fashion Wanita    
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
 <div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Coffee Capucino</h2>
        <p class="dashboard-subtitle">
            Product Details
        </p>
        </div>
        <div class="dashboard-content">
        <div class="row">
            <div class="col-12">
            <form action="">
                <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"> 
                        <label>Product Name</label>
                        <input type="text" class="form-control" value="Coffee Capucino" />
                        </div>
                    </div>
                        <div class="col-md-6">
                        <div class="form-group"> 
                        <label>Price</label>
                        <input type="number" class="form-control"  value="200"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group"> 
                        <label>Categories</label>
                            <select name="categori" class="form-control">
                                <option value="" disabled
                                >Select Category</option
                            >
                        </select>
                        </div>
                    </div>
                        <div class="col-md-12">
                        <div class="form-group"> 
                        <label>Description</label>
                        <textarea name="editor"></textarea>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col text-right">
                        <button 
                            type="submit" 
                            class="btn btn-success px-5 btn-block"
                        >
                            Save Now
                        </button>
                        </div>
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
            <div class="row mt-2">
            <div class="col-12">
                <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-4">
                        <div class="gallery-container">
                        <img src="/images/product-card-1.png" alt="" class="w-100">
                        <a href="" class="delete-gallery">
                            <img src="/images/icon-delete.svg" alt="">
                        </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-container">
                        <img src="/images/product-card-2.png" alt="" class="w-100">
                        <a href="" class="delete-gallery">
                            <img src="/images/icon-delete.svg" alt="">
                        </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-container">
                        <img src="/images/product-card-3.png" alt="" class="w-100">
                        <a href="" class="delete-gallery">
                            <img src="/images/icon-delete.svg" alt="">
                        </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="file" id="file" style="display:none;" multiple>
                        <button class="btn btn-secondary btn-block mt-3" onclick="thisFileUpload()">
                        Add Photo
                        </button>
                    </div>
                    </div>
                </div>
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
 <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
      function thisFileUpload(){
        document.getElementById("file").click();
      }
    </script> 
    <script>
      CKEDITOR.replace( 'editor' );
    </script>
@endpush