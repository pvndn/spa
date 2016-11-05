@extends('admin._master')

@section('page-toolbar')

@endsection

@section('css')
    <style>
        ul {
            list-style: none;
            padding: 0
        }
        .portlet-body.products {
        }
        .portlet-body.products.exists {
            background: rgba(190, 248, 249, 0.5);
            border-bottom: 1px solid #FFF;
            padding: 5px 0;
        }
        .thumb img {
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
@endsection

@section('js')
@endsection

@section('js-init')
    <script type="text/javascript">
        $(document).ready(function () {
            Utility.convertTitleToSlug('.the-object-title', '.the-object-slug');

            $('.js-validate-form').validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                messages: {

                },
                rules: {
                    title: {
                        minlength: 3,
                        required: true
                    },
                    slug: {
                        required: true,
                        minlength: 3
                    }
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

        	$('._onchange').change(function(event) {
    			$('form#frm_categries_filter').submit();
        	});

        	var _interface_ouput = [];
            var value_text = $('#interface_item-output');
            $('.post_id_choose').change(function(event) {
                var type = $(this).attr('category-value');
                if($(this).is(':checked')) {
                    _interface_ouput.push({'type': type, 'related_id': $(this).val()})
                    value_text.val(JSON.stringify(_interface_ouput));
                }
            });
        	$('.product_id_choose').change(function(event) {
                var type = $(this).attr('category-value');
        		if($(this).is(':checked')) {
        			_interface_ouput.push({'type': type, 'related_id': $(this).val()})
		        	value_text.val(JSON.stringify(_interface_ouput));
        		}
        	});
        });
    </script>
	@if(isset($category_id))
    <script>
        $(document).ready(function () {
	    	$(document).off("scroll");
			var target = '#reload-products',
	        $target = $(target);
	        $('html, body').stop().animate({
	            'scrollTop': $target.offset().top
	        }, 500, 'swing', function () {
	            window.location.hash = target;
	            $(document).on("scroll", onScroll);
	        });
	    });

        function onScroll(event){
		    var scrollPos = $(document).scrollTop();
		}
    </script>
	@endif
@endsection

@section('content')
    <form action="" accept-charset="utf-8" method="POST" class="js-validate-form form-save-menu clearfix">
    	{{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                <div class="note note-danger">
                    <p><label class="label label-danger">NOTE</label> You need to enable javascript.</p>
                </div>
                <div class="note note-danger">
                    <p><label class="label label-danger">NOTE</label> <b>Edit menu structure</b> is supported in
                        Firefox, Chrome, Opera, Safari, Internet Explorer 10 and Internet Explorer 9 only. Internet
                        Explorer 8 and older not supported.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-note font-dark"></i>
                            <span class="caption-subject font-dark sbold uppercase">Basic information</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group btn-group-devided">
                                <button class="btn btn-transparent btn-success btn-circle btn-sm active" type="submit">
                                    <i class="fa fa-check"></i> Save
                                </button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="status" value="1">
                    <input type="hidden" name="deleted_interface_item" value="">
			        <textarea name="interface_item" id="interface_item-output" class="form-control hidden" style="display: none !important;"></textarea>
                    <div class="portlet-body">
                        <div class="form-group">
                            <label>Gourp</label>
                            <input type="text" name="title" class="form-control the-object-title" value="{{ $object->title }}" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Gourp name</label>
                            <input type="text" name="slug" class="form-control the-object-slug" value="{{ $object->slug }}" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Style</label>
                            <input type="text" name="style" class="form-control the-object-style" value="{{ $object->style }}" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Column</label>
                            <input type="number" name="column" class="form-control the-object-column" value="{{ $object->column }}" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Show name</label>

                            <input type="radio" name="show_name" value="0" class="form-control the-object-config" checked id="no"> <label for="no">No</label>
                            <input type="radio" name="show_name" value="1" class="form-control the-object-config" {{ $object->config['show_name'] == 1 ? 'checked' : '' }} id="yes"> <label for="yes">Yes</label>
                        </div>
                        <div class="form-group">
                            <label><b>Language</b></label>
                            <select name="language_id" data-href="{{ $rawUrlChangeLanguage }}" class="form-control js-change-content-language">
                                @foreach($activatedLanguages as $key => $row)
                                    <option value="{{ $row->id }}" {{ ($currentEditLanguage->id == $row->id) ? 'selected' : '' }}>{{ $row->language_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @if(isset($object) && $object->id)
    <div class="row" id="reload-products">
        <div class="col-md-4">
            <form action="" method="GET" id="frm_categries_filter">
            @if(isset($productCategories) && trim($productCategories) != '')
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-link font-dark"></i>
                            <span class="caption-subject font-dark sbold uppercase">Product categories</span>
                        </div>
                        <div class="tools">
                            <a href="" class="collapse" data-original-title="" title=""> </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="box-links-for-menu">
                            <div class="the-box">
                                <ul class="list-item">
                                    @foreach ($productCategories as $key => $row)
                                        <li>
                                            <input type="checkbox" id="{{ $row->id }}-ctp" 
                                                    value="{{ $row->id }}" name="categories_product[]" 
                                                    class="_onchange"
                                                    {{ isset($category_product_id) && in_array($row->id, $category_product_id) || isset($category_in_groups) && in_array($row->id, $category_in_groups) ? 'checked' : '' }}>
                                            <label for="{{ $row->id }}-ctp">{{ $row->global_title }}</label>
                                        </li>
                                    @endforeach
                                </ul>

                                <div class="actions pull-right">
                                    <div class="btn-group btn-group-devided">
                                        <button class="btn btn-transparent btn-success btn-circle btn-sm active" type="submit">
                                            <i class="fa fa-check"></i> Find
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if(isset($categories) && trim($categories) != '')
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-link font-dark"></i>
                            <span class="caption-subject font-dark sbold uppercase">Categories</span>
                        </div>
                        <div class="tools">
                            <a href="" class="collapse" data-original-title="" title=""> </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="box-links-for-menu">
                            <div class="the-box">
                                    <ul class="list-item">
                                        @foreach ($categories as $key => $row)
                                            <li>
                                                <input type="checkbox" id="{{ $row->id }}-ctp" 
                                                        value="{{ $row->id }}" name="categories[]" 
                                                        class="_onchange"
                                                        {{ isset($category_id) && in_array($row->id, $category_id) || isset($category_in_groups) && in_array($row->id, $category_in_groups) ? 'checked' : '' }}>
                                                <label for="{{ $row->id }}-ctp">{{ $row->global_title }}</label>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <div class="actions pull-right">
                                        <div class="btn-group btn-group-devided">
                                            <button class="btn btn-transparent btn-success btn-circle btn-sm active" type="submit">
                                                <i class="fa fa-check"></i> Find
                                            </button>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            </form>
        </div>
        <div class="col-md-8">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-bars font-dark"></i>
                        <span class="caption-subject font-dark sbold uppercase">Products in Category</span>
                    </div>
                </div>
                <div class="portlet-body">
					<div class="line-group-container">
                        @if(isset($product_in_groups))
                            @foreach($product_in_groups as $key => $row)
                                <?php $product = !is_null($row->product) ? $row->product()->with('productContent')->first()->toArray() : ''; ?>
                                <div class="portlet-body products exists">
                                    <div class="col-xs-2" align="center">
                                    <form action="{{ asset($adminCpAccess.'/settings/interface-item-delete/'.$row['id']) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DElETE') }}
                                        <button class="btn btn-danger" rm-id="{{ $row['id'] }}">DELETE</button>
                                    </form>
                                    </div>
                                    <div class="thumb col-xs-2">
                                        @if(!is_null($row->product))
                                        <img src="{{ $product['product_content']['thumbnail'] ? asset($product['product_content']['thumbnail']) : asset('admin/images/no-image.png') }}" alt="" width="75" height="75">
                                        @endif
                                    </div>
                                    <div class="col-xs-8">
                                        @if(!is_null($row->product))
                                            {{ $product['product_content']['title'] }}
                                        @else
                                            <span>Non-exists product!</span>
                                        @endif
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            @endforeach
                        @endif

                        @if( isset($products_in_category) && count($products_in_category) > 0 )
                            @foreach($products_in_category as $key => $row)
                                <?php
                                    $item_interface = \App\Models\SettingsInterfaceItem::where(['related_id' => $row['id'], 'type' => 'product'])->first();
                                    if(!is_null($item_interface)) {
                                        $item_interface = $item_interface->toArray();
                                    }
                                ?>
                                <div class="portlet-body products">
                                    <div class="col-xs-2">
                                    @if(!in_array(["id" => $row['id'], "type" => "product"], $temp_items))
                                        <input id="prd-{{ $row['id'] }}" type="checkbox" category-value="product" value="{{ $row['id'] }}" class="product_id_choose">
                                    @else
                                        <form action="{{ asset($adminCpAccess.'/settings/interface-item-delete/'.$item_interface['id']) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DElETE') }}
                                            <button class="btn btn-danger" rm-id="{{ $item_interface['id'] }}">DELETE</button>
                                        </form>
                                    @endif 
                                    </div>
                                   
                                    <div class="thumb col-xs-4">
                                        <img src="{{ $row['product_content'][0]['thumbnail'] ? asset($row['product_content'][0]['thumbnail']) : asset('admin/images/no-image.png') }}" alt="" width="100%">
                                    </div>
                                    <div class="col-xs-6">
                                        <label for="prd-{{ $row['id'] }}">
                                            {{ $row['product_content'][0]['title'] }}
                                        </label>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            @endforeach
                        @endif

						@if( isset($post_in_category) && count($post_in_category) > 0 )
                            @foreach($post_in_category as $key => $row)
                                <?php 
                                    $item_interface = \App\Models\SettingsInterfaceItem::where(['related_id' => $row['id'], 'type' => 'post'])->first();
                                    if(!is_null($item_interface)) {
                                        $item_interface = $item_interface->toArray();
                                    }
                                ?>
                                <div class="portlet-body products">
                                    <div class="col-xs-2">
                                    @if(!in_array(["id" => $row['id'], "type" => "post"], $temp_items))
                                        <input id="prd-{{ $row['id'] }}" type="checkbox" category-value="post" value="{{ $row['id'] }}" class="post_id_choose">
                                    @else
                                        <form action="{{ asset($adminCpAccess.'/settings/interface-item-delete/'.$item_interface['id']) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DElETE') }}
                                            <button class="btn btn-danger" rm-id="{{ $item_interface['id'] }}">DELETE</button>
                                        </form>
                                    @endif
                                    </div>
                                   
                                    <div class="thumb col-xs-4">
                                        <img src="{{ $row['post_content'][0]['thumbnail'] ? asset($row['post_content'][0]['thumbnail']) : asset('admin/images/no-image.png') }}" alt="" width="100%">
                                    </div>
                                    <div class="col-xs-6">
                                        <label for="prd-{{ $row['id'] }}">
                                            {{ $row['post_content'][0]['title'] }}
                                        </label>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            @endforeach
                        @endif
                        
					</div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
