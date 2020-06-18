@extends('backend.layouts.app')

@section('title', app_name() . ' | '. __('labels.backend.access.permissions.management'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    @lang('labels.backend.access.permissions.management')
                </h4>
            </div><!--col-->

            <div class="col-sm-7 pull-right">
                @include('backend.auth.permissions.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table" id="permissions-table" data-ajax_url="{{ route("admin.auth.permission.get") }}">
                        <thead>
                        <tr>
                            <th>{{ trans('labels.backend.access.permissions.table.permission') }}</th>
                            <th>{{ trans('labels.backend.access.permissions.table.display_name') }}</th>
                            <th>{{ trans('labels.backend.access.permissions.table.sort') }}</th>
                            <th>@lang('labels.general.actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection

@section('pagescript')
    <script>
        Backend.Utils.documentReady(function(){
            Backend.Permission.init();
        });
    </script>
@endsection