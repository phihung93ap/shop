@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {!! app_name() !!}
        <small>{{ trans('strings.backend.category.title') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('strings.backend.category.listCategory') }}</h3>
            <div class="box-tools pull-right">
                <a href="#" class="btn-sm btn btn-success"><i class="fa fa-plus"></i> {{ trans('labels.general.create') }}</a>
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="datatables">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{ trans('labels.backend.category.name') }}</th>
                        <th>{{ trans('labels.backend.category.code') }}</th>
                        <th>{{ trans('labels.backend.category.slug') }}</th>
                        <th>{{ trans('labels.general.created_at') }}</th>
                        <th>{{ trans('labels.general.show') }}</th>
                        <th>{{ trans('labels.general.actions') }}</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection
@section('after-scripts-end')
    <script>
        $(function() {
            $('#datatables').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('category.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'code', name: 'code' },
                    { data: 'slug', name: 'slug' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'active', name: 'active' },
                    { data: 'action', name: 'action', orderable: false, searchable:false },
                ]
            });
        });
    </script>
@endsection