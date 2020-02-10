@extends('frontend.master')
@section('cssLinks')
    <link href="{{ asset('/adminlte//bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('contentHeader')
<h1>
    
</h1>
<ol class="breadcrumb">
    <li><a href="/frontend"><i class="fa fa-dashboard"></i>Home</a></li>
    <li><a href="/frontend/products"><i class="fa fa-flag"></i> Products</a></li>
    <li class="active">{{ $product->title }}</li>
</ol>
@endsection
@section('content')
<section class="content">
    @include('frontend.includes.flash')
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">

                 <div class="row">
                    <div class="col-xs-8">
                        <h3 class="text-center">{{ $product->title }}</h3>
                        <p class="text-muted text-center">{{ ($product->created_at) ? ($product->created_at->diffForHumans()) : ''}}</p>
                    </div>
                    <div class="col-xs-2">
                        <a href="{{ asset('/uploads/products/'. $product->image) }}" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="{{ asset('/uploads/products/'. $product->image) }}" alt="image">
                        </a>      
                    </div>
                 </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Title :</b> 
                  <span>{{ $product->title }}</span>
                </li>
                <li class="list-group-item">
                  <b>Description :</b>
                  <p>{{ $product->description }}
                </li>
                <li class="list-group-item">
                  <b>Category :</b>
                  <span>{{ $product->category->title }}</span>
                </li>
                @if(isset($product) && count($product->colors))
                    @foreach($product->colors as $color)
                        <li class="list-group-item">
                            <b>Color - Price :</b>
                            <span>{{ $color->value }} - {{ $color->pivot->price }}</span>
                        </li>
                    @endforeach
                @endif
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row -->
</section>
@endsection