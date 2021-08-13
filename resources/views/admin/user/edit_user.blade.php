@extends('admin/admin_layout')
@section('title','Admin: Edit User')
@section('admin_content')


<div class="row">
    <div class="col-xl-12">
        <div class="card-body bg-light">
            <h5 >Edit User Account</h5>
            {{-- @if (Session::has('message'))
                <div class='alert alert-success'>{{Session::get('message')}}</div>                
            @endif
            @if (Session::has('message_1'))
                <div class='alert alert-danger'>{{Session::get('message_1')}}</div>                
            @endif --}}
            <hr>
            @foreach($user as $key=>$value)
            <form data-parsley-validate novalidate autocomplete="off" action="{{URL::to('admin_1/update-user/'.$value->user_id)}}">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">User Id</label>
                    <div class="col-sm-10">
                        <input required type="text" name="user_id" value="{{$value->user_id}}" disabled name="category_id" class="form-control" id="inputEmail3" placeholder="Category Id" readonly autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input required type="text" value="{{$value->name}}" name="user_name" class="form-control" id="inputPassword3" placeholder="Name" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input required type="email" value="{{$value->email}}" name="user_email" class="form-control" id="inputPassword3" placeholder="Email" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input required type="text" value="" name="user_password" class="form-control" id="inputPassword3" placeholder="Password" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-10">
                        <select class="form-control" aria-label="Default select example" name="user_role">
                            @foreach ($role_user as $row)
                                @if ($value->role_id == $row->role_id)
                                    <option selected value="{{$row->role_id}}">{{$row->role_name}}</option>                      
                                @else
                                     <option value="{{$row->role_id}}">{{$row->role_name}}</option>
                                @endif
                            @endforeach
                        </select>

                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="sl_status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="user_status" id="sl_status" class="form-control">
                            @if ($value->status == 1 )
                                <option selected value="1">Show</option>
                                <option value="0">Hidden</option>          

                            @else
                                <option value="1">Show</option>

                                <option selected value="0">Hidden</option>          
                            @endif
                          
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                   <div class="col-10"></div>
                    <div class="col-2">
                        <button style="width: 90%;" type="submit" class="btn btn-success">Update User</button>
                    </div>
                </div>
            </form>
            @endforeach
        </div></div></div>

@endsection
@section('script')
<script>
    $('.submenu ul li a').removeClass('active');
    $('#submenu-user ul li a').last().addClass('active');
</script>
@endsection