@extends('frontend.master')
@section('cssLinks')
    <link href="{{ asset('/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('contentHeader')
<h1>
    Categories
</h1>
<ol class="breadcrumb">
    <li><a href="/frontend"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><i class="fa fa-flag"></i> Categories</li>
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
                        <h3 class="box-title">Categories</h3>
                    </div>
                    <div class="col-xs-4">
                        <a href="{{ url('/frontend/categories/create') }}" class="btn btn-success form-control input-md" role="button">Add new category</a>
                    </div>
                 </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="categoriesTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr id="{{ $category->id }}">
                          <td><img style="width:35px;height:32px;" src="{{ asset('/uploads/categories/'. $category->image) }}" alt="image"></td>
                          <td>{{ $category->title }}</td>
                          <td>{{ $category->description }}</td>
                          <td>
                            <a href="{{ url('/frontend/categories/'. $category->id) }}" class="btn btn-primary form-control input-sm" role="button">Show</a>
                          </td>
                          <td>
                              <a href="{{ url('/frontend/categories/'. $category->id . '/edit') }}" class="btn btn-warning form-control input-sm" role="button"><i class="fa fa-edit"></i> Edit</a>
                          </td>
                          <td>
                              <button type="button" class="btn btn-danger form-control input-sm" data-toggle="modal" data-target="#myModalDelete" id="delete"><i class="fa fa-trash"></i> Delete</button>
                          </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
              </table>
              <div class="row">
                    <div class="col-sm-3"></div>
                    {{ $categories->links('frontend.includes.pagination.pagination_links') }}
                    <div class="col-sm-2"></div>
                </div>
                <div class="row">
                    @include('frontend.includes.pagination.pagination_stats', ['paginator' => $categories])
                    <div class="col-sm-7"></div>
                </div>
                <br/>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <!-- Delete Modale -->
        <div class="modal fade" id="myModalDelete" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Are you sure ?</h4>
                    </div>
                    <div class="modal-body">
                        <h4 style="color:red;">
                            You will delete this category
                        </h4>
                    </div>
                    <div class="modal-footer">
                        @if(isset($category))
                            <form class="form-horizontal" action = "{{ url('/frontend/categories/'. $category->id) }}" method = "POST">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button type="button" class="btn btn-danger pull-right" data-dismiss="modal" onclick="this.form.submit()">yes</button>
                            </form>
                            <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">no</button>
                        @endif
                    </div>
                </div>
            </div>
            <!-- /Delete Modale -->
      </div>
      <!-- /.row -->
    </section>
@endsection