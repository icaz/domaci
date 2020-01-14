@extends('admin/layouts/app')


@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Tag
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tags</a></li>
        <li class="active">Edit tag</li>
      </ol>

</section>
@include('includes.messages')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Edit Tag
                <small></small>
              </h3>
                          <div class="pull-right box-tools">
                <button type="button" class="btn btn-xs" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>

          <form role="form"  action="{{ route('tag.update', $tag->id)}}" method="POST">
            @csrf
            @method('PATCH')
        <div class="box-body">
    <div class="col-lg-offset-3 col-lg-6">
            <div class="form-group">
                <label for="name">Tag Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Tag Name" value="{{ $tag->name }}">
            </div>
            <div class="form-group">
                <label for="slug">Tag Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ $tag->slug }}"> 
              </div>
          <button type="submit" class="btn btn-primary">Change</button>
        </div>
    </div>
</form>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection