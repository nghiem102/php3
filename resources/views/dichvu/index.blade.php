@extends('templates.layout')
@section('title', $tieude)
@section('css')
    <style>
        body {
            /*-webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;*/
            user-select: none;
        }

        /* .toolbar-box form .btn {
            margin-top: -3px!important;} */

        .select2-container {
            margin-top: 0;
        }

        .select2-container--default .select2-selection--multiple {
            border-radius: 0;
        }

        .select2-container .select2-selection--multiple {
            min-height: 30px;
        }

        .select2-container .select2-search--inline .select2-search__field {
            margin-top: 3px;
        }

        .table > tbody > tr.success > td {
            background-color: #009688;
            color: white !important;
        }

        .table > tbody > tr.success > td span {
            color: white !important;
        }

        .table > tbody > tr.success > td span.button__csentity {
            color: #333 !important;
        }

        /*.table>tbody>tr.success>td i{*/
        /*    color: white !important;*/
        /*}*/
        .text-silver {
            color: #f4f4f4;
        }

        .btn-silver {
            background-color: #f4f4f4;
            color: #333;
        }

        .select2-container--default .select2-results__group {
            background-color: #eeeeee;
        }
    </style>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        {{--        @include('templates.header-action')--}}
        <div class="clearfix"></div>
        <div style="border: 1px solid #ccc;margin-top: 10px;padding: 5px;">
            <form action="" method="get">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <input type="text" name="search_ten_nguoi_dung" class="form-control" placeholder="Tên người dùng"
                                   value="">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-xs-12" style="text-align:center;">
                        <div class="form-group">
                            <button type="submit" name="btnSearch" class="btn btn-primary btn-sm "><i
                                    class="fa fa-search" style="color:white;"></i> Search
                            </button>
                            <a href="{{ url('/user') }}" class="btn btn-default btn-sm "><i class="fa fa-remove"></i>
                                Clear </a>
                            <a href="{{route('route_BackEnd_Dichvu_Add')}}" class="btn btn-info btn-sm"><i class="fa fa-user-plus" style="color:white;"></i>
                                Add new</a>
                        </div>
                    </div>
                </div>

            </form>
            <div class="clearfix"></div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content appTuyenSinh">
        <div id="msg-box">
            <?php //Hiển thị thông báo thành công?>
            @if ( Session::has('success') )
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong>{{ Session::get('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif
            <?php //Hiển thị thông báo lỗi?>
            @if ( Session::has('error') )
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <strong>{{ Session::get('error') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif
        </div>
        @if(count($list)<=0)
            <p class="alert alert-warning">
                Không có dữ liệu phù hợp
            </p>
        @endif
        <div class="box-body table-responsive no-padding">
            <form action="" method="post">
                @csrf
                <span class="pull-right">Tổng số bản ghi tìm thấy: <span
                        style="font-size: 15px;font-weight: bold;">{{count($list)}}</span></span>
                <div class="clearfix"></div>
                <div class="double-scroll">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 100px" class="text-center">
                                Mã dịch vụ
                            </th>
                            <th class="text-center">Tên dịch vụ</th>
                            <th>Giá dịch vụ</th>                            
                            <th class="text-center">Mô tả dịch</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center">Hành động</th>
                        </tr>

                            @foreach($list as $item)
                            <tr>
                                {{--                        
                                <td><input type="checkbox" name="chk_hv[]" class="chk_hv" id="chk_hv_{{$item->id}}" value="{{$item->id}}"> </td>--}}
                                <td class="text-center">{{$item->id}}</td>
                                <td class="text-center"><a style="color:#333333;font-weight: bold;" href="" style="white-space:unset;text-align: justify;"> {{$item->ten_dich_vu}}</a></td>
                                <td class="text-center"><a style="color:#ca4a4a;font-weight: bold;"> {{$item->gia_dich_vu}}k</a></td>
                                <td class="text-center">{{$item->mo_ta}}</td>
                                <td class="text-center">
                                    <?php if(($item->trang_thai)==1){
                                            echo "Đang hoạt động";
                                        }else{
                                            echo "Hết hạn";}
                                    ?></td>
                                <td class="text-center">
                                    @if($item->trang_thai == 1)
                                        <a href="{{route('route_BackEnd_Dichvu_Delete',$item->id)}}" onclick="return confirm('Bạn có chắc muốn xóa')">Xóa /</a>
                                    @endif
                                    <a href="">Sửa</a>                                
                                </td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </form>
        </div>
        <br>
        <div class="text-center">
            {{$list->appends($extParams)->links()}}
        </div>
        <index-cs ref="index_cs"></index-cs>
    </section>

@endsection
