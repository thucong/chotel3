@extends('templates.admin.master')
@section('main-content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Sửa phòng</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form role="form" method="post" action="{{route('admin.room.edit',$room->rid)}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Tên phòng</label>
                                            <input type="text" name="ten" class="form-control" value="{{$room->rname}}"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Mô tả</label>
                                            <textarea class="form-control ckeditor" id="editor1" rows="5" name="mota">{{$room->description}}</textarea>
                                            <script type="text/javascript">

                                              CKEDITOR.replace( 'editor1',

                                              {

                                                filebrowserBrowseUrl: '/{{$adminUrl}}/ckfinder/ckfinder.html',

                                                filebrowserImageBrowseUrl: '/{{$adminUrl}}/ckfinder/ckfinder.html?type=Images',

                                                filebrowserUploadUrl: '/{{$adminUrl}}/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                                                filebrowserImageUploadUrl: '/{{$adminUrl}}/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'

                                              });

                                            </script>
                                        </div>
            
                                       
                                        <div class="form-group">
                                            <label>Hình ảnh</label>
                                            <input type="file" name="hinhanh"  value="" />
                                            <img src="/chotel3/storage/app/files/{{$room->picture}}" height="80px" width="100px" />
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>Loại phòng</label>
                                            <select class="form-control" name="loaiphong">
                                                @foreach($room_type as $type)
                                                @php
                                                    $selected="";
                                                    if($type->type_id == $room->type_id){
                                                    $selected = 'selected';
                                                }
                                                @endphp
                                                <option value="{{$type->type_id}}" {{$selected}}>{{$type->tname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tiện ích</label>
                                            <select class="form-control" name="tienich">
                                               @foreach($utility as $item)
                                               @php
                                                    $selected="";
                                                    if($item->uid == $room->uid){
                                                    $selected = 'selected';
                                                }
                                                @endphp
                                                <option value="{{$item->uid}}" {{$selected}}>{{$item->uname}}</option>
                                               @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-success btn-md">Sửa</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Elements -->
                </div>
            </div>
            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
@endsection
