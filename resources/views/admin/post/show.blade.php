@extends('admin/layouts/app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('main-content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Posts
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Posts</li>
      </ol>
    </section>

    <!-- Main content -->
<section class="content">

      <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">List of all posts</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box">
            <!--<div class="box-header">
               /.box-header <h3 class="box-title">Data Table With Full Features</h3>
            </div>-->
            
            <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>No.</th>
                  <th>Title</th>
                  <th>Subtitle</th>
                  <th>Modified</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($posts ?? '' as $post)
                      <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->subtitle }}</td>
                        <td>{{ $post->updated_at }}</td>
                          <td><a href="{{ route('post.edit',$post->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                          <td>
                            <form id="delete-form-{{ $post->id }}" method="post" action="{{ route('post.destroy',$post->id) }}" style="display: none">
                              @csrf
                              @method('DELETE')
                            </form>
                            <a href="" onclick="
                            if(confirm('Are you sure, You Want to delete this?'))
                                {
                                  event.preventDefault();
                                  document.getElementById('delete-form-{{ $post->id }}').submit();
                                }
                                else{
                                  event.preventDefault();
                                }" ><span class="glyphicon glyphicon-trash"></span></a>
                          </td>
                        </tr>
                      </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Modified</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </tfoot>
                  </table>
      </div>
            <!-- /.box-body -->
    </div>
  </div>

        <!-- /.box-body -->
  <div class="box-footer">
    <a class='col-lg-offset-5 btn btn-success' href="{{ route('post.create') }}">Add New</a>
  </div>
        <!-- /.box-footer-->
</div>
      <!-- /.box -->

</section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

@endsection
@section('footerSection')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endsection