@extends('admin/admin_layout')
@section('title','Admin: Add User')
@section('admin_content')


<div class="row">
    <div class="col-xl-12">
        <div class="card-body bg-light">
            <h5 >Add User Account</h5>
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
            <form autocomplete="off" action="{{URL::to('admin_1/save-user')}}">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">User Id</label>
                    <div class="col-sm-10">
                        <input type="text" value="Auto" disabled name="category_id" class="form-control" id="inputEmail3" placeholder="Category Id" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" value="" name="user_name" class="form-control" id="inputPassword3" placeholder="Name" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" value="" name="user_email" class="form-control" id="inputPassword3" placeholder="Email" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" value="" name="user_password" class="form-control" id="inputPassword3" placeholder="Password" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-10">
                        <select class="form-control" aria-label="Default select example" name="user_role">
                            @foreach ($role_user as $row)
                                <option value="{{$row->role_id}}">{{$row->role_name}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="sl_status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="user_status" id="sl_status" class="form-control">
                            <option value="1">Show</option>
                            <option value="0">Hidden</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                   <div class="col-10"></div>
                    <div class="col-2">
                        <button style="width: 90%;" type="submit" class="btn btn-success">Add User</button>
                    </div>
                </div>
            </form>
        </div></div></div>

@endsection
@section('script')
<script>
    $('.submenu ul li a').removeClass('active');
    $('#submenu-user ul li a').first().addClass('active');
</script>
@endsection