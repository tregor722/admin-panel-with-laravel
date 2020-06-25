@extends('backend.layouts.app')

@section('title', __('labels.backend.access.blog-tag.management') . ' | ' . __('labels.backend.access.blog-tag.edit'))

@section('breadcrumb-links')
    @include('backend.blog-tags.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($blogTag, ['route' => ['admin.blog-tags.update', $blogTag], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.blog-tags.form')

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ link_to_route('admin.blog-tags.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-sm']) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-success btn-sm pull-right']) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
    {{ Form::close() }}
@endsection