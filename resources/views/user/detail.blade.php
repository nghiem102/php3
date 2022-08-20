@extends('templates.layout')
@section('title', $_title)
@section('content')
    <!-- Main content -->
    <section class="content appTuyenSinh">
        <link rel="stylesheet" href="{{ asset('default/bower_components/select2/dist/css/select2.min.css')}} ">
        <style>
            .select2-container--default .select2-selection--single, .select2-selection .select2-selection--single {
                padding: 3px 0px;
                height: 30px;
            }
            .select2-container {
                margin-top: -5px;
            }

            option {
                white-space: nowrap;
            }

            .select2-container--default .select2-selection--single {
                background-color: #fff;
                border: 1px solid #aaa;
                border-radius: 0px;
            }

            .select2-container--default .select2-selection--multiple .select2-selection__choice {
                color: #216992;
            }
            .select2-container--default .select2-selection--multiple{
                margin-top:10px;
                border-radius: 0;
            }
            .select2-container--default .select2-results__group{
                background-color: #eeeeee;
            }
        </style>

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

    <!-- Phần nội dung riêng của action  -->
        <form class="form-horizontal " action="{{route('route_BackEnd_Users_Update',['id'=>request()->route('id')])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <a href="{{ route('route_BackEnd_Users_Index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Danh sách nhân viên</a>
                <a class="text-sm underline" style="color: black"> > Sửa thông tin nhân viên</a>
                <div class="row">
                    <div class="col-md-6">
                        <h2 style="margin-left: 150px;color:rgb(245, 100, 100)">Thông tin nhân viên</h1>
                        <div class="form-group">
                            <label for="ten_nhan_vien" class="col-md-3 col-sm-4 control-label" style="color:rgb(245, 100, 100)">Tên nhân viên <span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="ten_nhan_vien" id="name" class="form-control" value="{{$objItem->ten_nhan_vien}}">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-3 col-sm-4 control-label" style="color:rgb(245, 100, 100)">Email <span class="text-danger">(*)</span></label>
                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="email" id="email" class="form-control" value="{{$objItem->email}}">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="password" class="col-md-3 col-sm-4 control-label" style="color:rgb(245, 100, 100)">Mật khẩu <span class="text-danger">(*)</span></label>
                            <div class="col-md-9 col-sm-8">
                                <input type="password" name="password" id="password" class="form-control" value="{{$objItem->password}}">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="hinh_anh" class="col-md-3 col-sm-4 control-label">Hình ảnh <span class="text-danger">(*)</span></label>
                            <div class="col-md-9 col-sm-8">
                                <img src="/img/{{$objItem->hinh_anh_nv}}" alt="" style="width: 30%;height: 30%">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ngay_sinh" class="col-md-3 col-sm-4 control-label">Ngày sinh <span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="date" name="ngay_sinh" class="form-control" value="{{$objItem->ngay_sinh}}">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sdt" class="col-md-3 col-sm-4 control-label">Số điện thoại <span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="sdt" class="form-control" value="{{$objItem->sdt}}">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dia_chi" class="col-md-3 col-sm-4 control-label">Địa chỉ <span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="dia_chi" id="name" class="form-control" value="{{$objItem->dia_chi}}">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="chuc_vu" class="col-md-3 col-sm-4 control-label">Chức vụ <span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="chuc_vu" id="name" class="form-control" value="{{$objItem->chuc_vu}}">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="scmt" class="col-md-3 col-sm-4 control-label">Thẻ căn cước <span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="number" name="scmt" id="name" class="form-control" value="{{$objItem->scmt}}">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phan_quyen" class="col-md-3 col-sm-4 control-label">Phân quyền <span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="number" name="phan_quyen" id="name" class="form-control" value="{{$objItem->phan_quyen}}">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>                                   
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            <div style="margin-left: 166px">
                <button type="submit" class="btn btn-primary"> Lưu sửa</button>
                <a href="{{ route('route_BackEnd_Users_Index') }} " class="btn btn-default">Hủy</a>
            </div>
            <!-- /.box-footer -->
        </form>

    </section>
@endsection
@section('script')
    <script src="{{ asset('default/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('default/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
@endsection

