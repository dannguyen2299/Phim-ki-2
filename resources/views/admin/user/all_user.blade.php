@extends('admin/admin_layout')
@section('title', 'Admin: All User')
@section('admin_content')



    <div class="row">
        <div class="col-xl-12">
            <div class="card-body bg-light">
                <h5>List User Account</h5>
                <?php
                $message = Session::get('message');
                if ($message){
                    echo "<div class='alert alert-success'>".$message."</div>";
                    Session::put('message',null);
                }
                $message = Session::get('message_1');
                if ($message){
                    echo "<div class='alert alert-danger'>".$message."</div>";
                    Session::put('message_1',null);
                }
                ?>
                <hr>
                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($list_user as $key=>$value)
                            <tr>
                                <td>{{$value->user_id}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>

                                <td>{{$value->password}}</td>
                                <td>{{$value->role_name}}</td>
                                
                                <td>
                                <?php
                                if ($value->status == '1'){
                                ?>
                                    <a href="{{URL::to('admin_1/unactive-user/'.$value->user_id)}}"><i class="far fa-eye"></i></a>
                                <?php    
                                } else {
                                ?>
                                    <a href="{{URL::to('admin_1/active-user/'.$value->user_id)}}"><i class="far fa-eye-slash"></i></a>
                                <?php
                                }
                                ?>
                                </td>
                                <td>
                                    <a href="{{URL::to('admin_1/edit-user/'.$value->user_id)}}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{URL::to('admin_1/delete-user/'.$value->user_id)}}" class="btn btn-danger"  onclick="return confirm('Do you want to delete this category?')"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        $('.submenu ul li a').removeClass('active');
        $('#submenu-user ul li a').last().addClass('active');

    </script>
@endsection
