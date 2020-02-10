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
    Categories
</h1>
<ol class="breadcrumb">
    <li><a href="/frontend"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/frontend/categories"><i class="fa fa-flag"></i> Categories</a></li>
    <li class="active">Edit category</li>
</ol>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-9">
            @include('frontend.includes.flash')
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">Edit category</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/frontend/categories/' . $category->id) }}" enctype="multipart/form-data">
                    <div class="box-body">
                    @method('PATCH')
                    @include('product::frontend.categories.form')
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