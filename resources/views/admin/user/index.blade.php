@extends('templates.admin.master')
@section('main-content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Danh sách User</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="{{route('admin.user.add')}}" class="btn btn-success btn-md">Thêm</a>
                                    </div>
                                    <div class="col-sm-6" style="text-align: right;">
                                        @if(Session::has('msg'))
                                            <p >{{Session::get('msg') }}</p>
                                        @endif
                                        <form method="get" action="{{route('admin.user.search')}}">
                                            @csrf
                                            <input type="submit" name="search" value="Tìm kiếm"
                                                class="btn btn-warning btn-sm" style="float:right" />
                                            <input type="search" class="form-control input-sm" placeholder="Nhập user"  name="tukhoa"
                                                style="float:right; width: 300px;" />
                                            <div style="clear:both"></div>
                                        </form><br />
                                    </div>
                                </div>

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Fullname</th>
                                            <th width="160px">Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <tr class=" gradeX">
                                        @foreach($users as $item)
                                        
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->username}}</td>
                                            <td>{{$item->password}}</td>
                                            <td class="center">{{$item->fullname}}</td>
                                            <td class="center">
                                                <a href="{{route('admin.user.edit',$item->id)}}" title="" class="btn btn-primary"><i class="fa fa-edit "></i>
                                                    Sửa</a>
                                                <a href="{{route('admin.user.delete',$item->id)}}" title="" class="btn btn-danger"><i class="fa fa-pencil"></i>
                                                    Xóa</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="dataTables_info" id="dataTables-example_info" style="margin-top:27px">
                                            Hiển thị {{$count}} user</div>
                                    </div>
                                    <div class="col-sm-6" style="text-align: right;">
                                        <!--<div class="dataTables_paginate paging_simple_numbers"
                                            id="dataTables-example_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button previous disabled"
                                                    aria-controls="dataTables-example" tabindex="0"
                                                    id="dataTables-example_previous"><a href="#">Trang trước</a></li>
                                                <li class="paginate_button active" aria-controls="dataTables-example"
                                                    tabindex="0"><a href="#">1</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example"
                                                    tabindex="0"><a href="#">2</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example"
                                                    tabindex="0"><a href="#">3</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example"
                                                    tabindex="0"><a href="#">4</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example"
                                                    tabindex="0"><a href="#">5</a></li>
                                                <li class="paginate_button next" aria-controls="dataTables-example"
                                                    tabindex="0" id="dataTables-example_next"><a href="#">Trang tiếp</a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>

    </div>
@endsection
