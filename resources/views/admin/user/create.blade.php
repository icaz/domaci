@extends('admin/layouts/app')


@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create User
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

                

          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Enter your Post
                <small>Simple and fast</small>
              </h3>
                          <div class="pull-right box-tools">
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>

<form role="form">
                <div class="box-body">
                  <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Enter Post Title">
                    </div>
                    <div class="form-group">
                      <label for="subtitle">Subtitle</label>
                      <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Enter Post Subitle">
                    </div>
                      <div class="form-group">
                    <label for="image">image input</label>
                    <input type="file" id="image" name="image">
  
                  </div>
                </div>
                <!-- /.box-body -->

            <!-- tools box -->
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea name="body" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            
            </div>
                <div class="box-footer">
                        <div class="col-lg-offset-3 col-lg-6 text-center">
                    <div class="form-group">
                            <label for="ck">
                             <input id="ck" type="checkbox" name="status"> Publish 
                            </label>
                    </div>


                  <button type="submit" class="btn btn-success">Submit</button>
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