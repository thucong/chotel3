@extends('templates.admin.master')
@section('main-content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Thêm User</h2>
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
                                    <form role="form" method="post" action="{{route('admin.user.add')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="user" class="form-control" />
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" name="pass" class="form-control" />
                                        </div>
                                         <div class="form-group">
                                            <label>Full name</label>
                                            <input type="text" name="fullname" class="form-control" />
                                        </div>
                                       
                                        <button type="submit" name="submit" class="btn btn-success btn-md">Thêm</button>
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
