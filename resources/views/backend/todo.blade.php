@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {!! app_name() !!}
        <small>Todo</small>
    </h1>
@endsection

@section('content')   

    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Todo page</h3>
            <div class="box-tools pull-right">
               
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            
              <textarea name="editor"></textarea>
        <script>
          
        </script>
           

        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection
@section('after-scripts-end')    
  {!! Html::script('ckeditor/ckeditor.js') !!}

   <script>

          CKEDITOR.replace( 'editor', {
                filebrowserBrowseUrl: '{!! url('filemanager/index.html') !!}'
          });
    
  </script>
@endsection