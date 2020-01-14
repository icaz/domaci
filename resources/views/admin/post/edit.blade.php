@extends('admin/layouts/app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Post
      </h1>
      <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Posts</a></li>
          <li class="active">Edit</li>
        </ol>
  
    </section>

    @include('includes.messages')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

                

          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Enter your Post
                <small></small>
              </h3>
                          <div class="pull-right box-tools">
                <button type="button" class="btn btn-xs" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>

          <form role="form" action="{{ route ('post.update', $post->id)}}"  method="POST"  enctype="multipart/form-data">
            @csrf
            @method('PATCH')
                <div class="box-body">
                    <div class="col-lg-6">
                      <div class="form-group">
                          <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Enter Post Title" value="{{ $post->title }}">
                        </div>
                      <div class="form-group">
                        <label for="subtitle">Subtitle</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Enter Post Subitle" value="{{ $post->subtitle }}">
                      </div>
                      <div class="form-group">
                          <label for="slug">Post Slug</label>
                          <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ $post->slug }}">
                      </div>
          
                    </div>
                    <div class="col-lg-6">
                        
                            <div class="form-group">
                                <label>Select Tags</label>
                                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                                    @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}"
                                      @foreach ($post->tags as $postTag)
                                        @if ($postTag->id == $tag->id)
                                          selected
                                        @endif
                                      @endforeach
                                    >{{ $tag->name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                          
              
                          
                              <div class="form-group">
                                  <label>Select Category</label>
                                  <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
                                      @foreach ($categories as $category)
                                      <option value="{{ $category->id }}"
                                      @foreach ($post->categories as $postCategory)
                                        @if ($postCategory->id == $category->id)
                                          selected
                                        @endif
                                      @endforeach
                                      >{{ $category->name }}</option>
                                      @endforeach
                                    </select>
                                                  </div>
                            </div>
                            
                <div class="box-body">
                </div>
                </div>
                <!-- /.box-body -->
        
      


            <!-- tools box -->
            <!-- /.box-header -->
            <div class="box-body pad">
                <label for="body">Text</label>
                <textarea name="body" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1">{{ $post->body }}</textarea>
            
      <div class="col-lg-6">
          <div class="form-group">
              <label for="image">Image upload</label>
              <input class="btn btn-success" type="file" id="image" name="image">
          </div>
      </div>
      <div class="col-lg-6">
                    <div class="form-group">
                            <label for="ck">
                            <input id="ck" type="checkbox" name="status"  value="1"
                            @if ($post->status == 1)
                        {{'checked'}}
                            @endif
                             > Publish 
                            </label>
                    </div>
      </div>



            </div>
                <div class="box-footer">
                            <div class="col-lg-12 text-center">
                  <button type="submit" class="btn btn-primary">Change</button>
                  <a href='{{ route('post.index') }}' class="btn btn-warning">Back</a>
                      </div>

                </div>

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

@section('footerSection')
<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
{{--
<script src="{{  asset('admin/plugins/ckeditor/ckeditor.js') }}"></script>
--}}
<script src="//cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
</script>
<script>
  $(document).ready(function() {
    $(".select2").select2();
  });
</script>
@endsection