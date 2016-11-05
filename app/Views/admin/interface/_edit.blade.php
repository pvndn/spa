@extends('admin._master')

@section('page-toolbar')

@endsection

@section('css')
    <style>
        ul.list-item {
            list-style: none;
            padding: 0;
        }
        .thumb img {
            border: 1px solid #ccc;
            padding: 5px;
        }
    </style>
@endsection

@section('js')
@endsection

@section('js-init')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.js-validate-form').validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                messages: {},
                rules: {
                    /*title: {
                        minlength: 3,
                        required: true
                    }*/
                },

                highlight: function (element) {
                    $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label.closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                }
            });
        });
    </script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="note note-danger">
                <p><label class="label label-danger">NOTE</label> You need to enable javascript.</p>
            </div>
            <div class="row">
                <form class="js-validate-form" method="GET" accept-charset="utf-8" action="" novalidate>
                    <div class="col-md-12">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-note font-dark"></i>
                                    <span class="caption-subject font-dark sbold uppercase">Add Group</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group btn-group-devided">
                                        <button class="btn btn-transparent btn-success btn-circle btn-sm active"
                                                type="submit">
                                            <i class="fa fa-check"></i> Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row custom-fields-rules">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label><b>Label display</b></label>
                                            <input required type="text" name="title" class="form-control"
                                                   value="{{ $object->title or '' }}" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-md-3">
                                        <p><b>Categories</b></p>
                                        <ul class="list-item">
                                            @foreach ($categories as $key => $row)
                                                <li>
                                                    <input type="checkbox" id="{{ $row->id }}-ctp" value="{{ $row->id }}" name="categories[]" {{ isset($category_id) && in_array($row->id, $category_id) ? 'checked' : '' }}>
                                                    <label for="{{ $row->id }}-ctp">{{ $row->global_title }}</label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-xs-7 col-md-8">
                                        <p><b>Products</b></p>
                                        <div class="line-group-container">

                                            @if( isset($products_in_category) && count($products_in_category) > 0 )
                                                @foreach($products_in_category as $key => $row)
                                                <div class="portlet-body">
                                                    <div class="col-xs-1">
                                                        <input type="checkbox" value="{{ $row['id'] }}">
                                                    </div>
                                                    <div class="thumb col-xs-2">
                                                        <img src="{{ $row['product_content']['thumbnail'] ? asset($row['product_content']['thumbnail']) : asset('admin/images/no-image.png') }}" alt="" width="75" height="75">
                                                    </div>
                                                    <div class="col-xs-8">
                                                        {{ $row['product_content']['title'] }}
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xs-1 col-md-1">
                                        <a class="location-add-rule-or location-add-rule btn btn-primary" href="#">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
