
@extends('admin.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : meta_title() !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : meta_keywords() !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : meta_description() !!}
@stop
@section('body-class') @stop
@section('content')



@section('header_styles')
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/datatables/css/dataTables.bootstrap4.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/datatables/css/buttons.bootstrap4.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/datatables/css/select.bootstrap4.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/datatables/css/fixedHeader.bootstrap4.css') }}" />

    <style>
    /* Popup box BEGIN */
    .hover_bkgr_fricc{
        background:rgba(0,0,0,.4);
        cursor:pointer;
        display:none;
        height:100%;
        position:fixed;
        text-align:center;
        top:0;
        width:100%;
        z-index:10000;
    }
    .hover_bkgr_fricc .helper{
        display:inline-block;
        height:100%;
        vertical-align:middle;
    }
    .hover_bkgr_fricc > div {
        background-color: #fff;
        box-shadow: 10px 10px 60px #555;
        display: inline-block;
        height: auto;
        max-width: 551px;
        min-height: 100px;
        vertical-align: middle;
        width: 60%;
        position: relative;
        border-radius: 8px;
        padding: 15px 5%;
    }
    .popupCloseButton {
        background-color: #fff;
        border: 3px solid #999;
        border-radius: 50px;
        cursor: pointer;
        display: inline-block;
        font-family: arial;
        font-weight: bold;
        position: absolute;
        top: -20px;
        right: -20px;
        font-size: 25px;
        line-height: 30px;
        width: 30px;
        height: 30px;
        text-align: center;
    }
    .popupCloseButton:hover {
        background-color: #ccc;
    }
    .trigger_popup_fricc {
        cursor: pointer;
        font-size: 20px;
        margin: 20px;
        display: inline-block;
        font-weight: bold;
    }
    /* Popup box BEGIN */
</style>
@endsection

<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12 card card-body">
				<div class="panel">
					<div class="panel-tab-info">
						<h2>@lang('admin/menu.menu')</h2>
					</div>
                    <table class="table display info-data new-tab-des data-tble new-tab-des" id="data-tble">
					    <thead>
					        <tr>
								<th>@lang('admin/menu.id')</th>
								<th>@lang('admin/menu.type')</th>
					            <th>@lang('admin/menu.title')</th>
					            <th>@lang('admin/menu.status')</th>
								<th>@lang('admin/menu.created_at')</th>
								<th>@lang('admin/menu.action')</th>
					        </tr>
					    </thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection



@section('footer_script')

<div class="hover_bkgr_fricc">
    <span class="helper"></span>
    <div>
        <div class="popupCloseButton">&times;</div>
        <p>Are you sure, you want to delete this?</p>
        <span class="add_delete_btn">
                <a class="primary-btn btn-brown-sm" href="javascript:;">Yes, Continue</a>
            </span>
    </div>
</div>

    {{--<a href="javascript:;" class="trigger_popup_fricc">Click here to show the popup</a>--}}

<script src="{{ asset('admin_assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>

<script>

    $(function() {
        var table = $('#data-tble').DataTable({
            processing: true,
            //serverSide: true,
            ajax: '{!! route('admin_menus_data') !!}',
            columns: [
                { data: 'mid', name: 'mid' },
				{ data: 'menu_type', name: 'menu_type' },
				{ data: 'title', name: 'title' },
				{ data: 'status', name: 'status' },
				{ data: 'created_at', name: 'created_at' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ],
            searching: true,
            lengthChange: true,
        });
        table.on( 'draw', function () {
            // $('.livicon').each(function(){
            //     $(this).updateLivicon();
            // });
        } );

        // #column3_search is a <input type="text"> element
        $('.search_field').on( 'keyup', function () {
            table
                //.columns( 3 ) //to search in specific column
                .search( this.value )
                .draw();
        } );

        $('.page_length').on( 'click', function () {
            table.page.len( $(this).val() ).draw();
        } );
    });


    $(document).ready(function () {
        $(document).on('click','.trigger_popup_fricc',function(){
            var delurl = $(this).attr('data-href');
            $('.hover_bkgr_fricc .add_delete_btn a').attr('href',delurl);
            $('.hover_bkgr_fricc').show();
        })

        $(document).on('click','.hover_bkgr_fricc',function(){
            $('.hover_bkgr_fricc').hide();
        })

        $(document).on('click','.popupCloseButton',function(){
            $('.hover_bkgr_fricc').hide();
        })

    });

</script>
@endsection
