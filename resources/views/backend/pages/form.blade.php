<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.pages.management') }}
                <small class="text-muted">{{ (isset($page)) ? __('labels.backend.access.pages.edit') : __('labels.backend.access.pages.create') }}</small>
            </h4>
        </div><!--col-->
    </div><!--row-->

    <hr>

    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="form-group row">
                {{ Form::label('title', trans('labels.backend.access.pages.table.name'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => trans('labels.backend.access.pages.table.name'), 'required' => 'required']) }}
                </div><!--col-->
            </div><!--form-group-->

            <div class="form-group row">
                {{ Form::label('page_slug', trans('labels.backend.access.pages.table.page_slug'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::text('page_slug', null, ['class' => 'form-control', 'placeholder' => trans('labels.backend.access.pages.table.page_slug'), 'disabled' => 'disabled']) }}
                </div><!--col-->
            </div><!--form-group-->

            <div class="form-group row">
                {{ Form::label('description', trans('labels.backend.access.pages.table.description'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => trans('labels.backend.access.pages.table.description')]) }}
                </div><!--col-->
            </div><!--form-group-->

            <div class="form-group row">
                {{ Form::label('cannonical_link', trans('labels.backend.access.pages.table.cannonical_link'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::text('cannonical_link', null, ['class' => 'form-control', 'placeholder' => trans('labels.backend.access.pages.table.cannonical_link')]) }}
                </div><!--col-->
            </div><!--form-group-->

            <div class="form-group row">
                {{ Form::label('seo_title', trans('labels.backend.access.pages.table.seo_title'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::text('seo_title', null, ['class' => 'form-control', 'placeholder' => trans('labels.backend.access.pages.table.seo_title')]) }}
                </div><!--col-->
            </div><!--form-group-->

            <div class="form-group row">
                {{ Form::label('seo_keyword', trans('labels.backend.access.pages.table.seo_keyword'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::text('seo_keyword', null, ['class' => 'form-control', 'placeholder' => trans('labels.backend.access.pages.table.seo_keyword')]) }}
                </div><!--col-->
            </div><!--form-group-->

            <div class="form-group row">
                {{ Form::label('seo_description', trans('labels.backend.access.pages.table.seo_description'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::textarea('seo_description', null, ['class' => 'form-control', 'placeholder' => trans('labels.backend.access.blogs.table.seo_description')]) }}
                </div><!--col-->
            </div><!--form-group-->

            <div class="form-group row">
                {{ Form::label('status', trans('labels.backend.access.pages.table.status'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    <div class="checkbox d-flex align-items-center">
                        @php
                            $status = 'checked';
                        @endphp
                        <label class="switch switch-label switch-pill switch-primary mr-2" for="role-1"><input class="switch-input" type="checkbox" name="status" id="role-1" value="1" {{ (isset($page->status) && $page->status === 1) ? "checked" : $status }}><span class="switch-slider" data-checked="on" data-unchecked="off"></span></label>
                    </div>
                </div><!--col-->
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
</div><!--card-body-->

@section('pagescript')
    <script src="{{URL::asset('/js/backend/pages.js')}}"></script>

    <script type="text/javascript">

        Page.Page.init('{{ config('locale.languages.' . app()->getLocale())[1] }}');

    </script>
@stop