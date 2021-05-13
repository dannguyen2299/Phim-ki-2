@extends('admin/admin_layout')
@section('title','dashboard')
@section('admin_content')
<?php
use Illuminate\Support\Facades\Session;
?>

<div class="row">
    <div class="col-xl-12">
        <div class="card-body">
            <?php
            $message = Session::get('message');
            if ($message){
                echo "<div class='alert alert-success'>".$message."</div>";
                Session::put('message',null);
            }
            ?>
            <form autocomplete="off" action="{{URL::to('admin_1/save-nation')}}">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category Id</label>
                    <div class="col-sm-10">
                        <input type="text" value="Auto" disabled name="nation_id" class="form-control" id="inputEmail3" placeholder="Nation Id" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nation Name</label>
                    <div class="col-sm-10">
                        <input type="text" value="" name="nation_name" class="form-control" id="inputPassword3" placeholder="Nation Name" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sl_status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="sl_status" id="sl_status" class="form-control">
                            <option value="1">Show</option>
                            <option value="0">Hidden</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </div>
            </form>
            </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('.submenu ul li a').removeClass('active');
    $('#submenu-nation ul li a').first().addClass('active');
</script>
@endsection