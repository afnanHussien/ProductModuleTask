@extends('frontend.master')
@section('cssLinks')
<style>
    .help-block
    {
        color: red;
    }
</style>
@endsection
@section('contentHeader')
<h1>
    Products
</h1>
<ol class="breadcrumb">
    <li><a href="/frontend"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/frontend/products"><i class="fa fa-flag"></i> Products</a></li>
    <li class="active">Add new product</li>
</ol>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-9">
            @include('frontend.includes.flash')
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">Add new product</h3>
                </div>
                <!-- /.box-header -->
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/frontend/products') }}" enctype="multipart/form-data">
                    <div class="box-body">
                        @include('product::frontend.products.form')
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="col-sm-5"></div>
                        <button type="submit" class="btn btn-primary pull-right col-sm-2"><i class="fa fa-save"></i> Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
@section('script')
<script src="{{ asset ('/js/frontend/product/addMultipleDynamicColor.js') }}" type="text/javascript"></script>
@endsection