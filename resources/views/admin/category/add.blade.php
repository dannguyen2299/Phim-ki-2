@extends('admin/admin_layout')
@section('title','Admin: Add Category')
@section('admin_content')
<?php
use Illuminate\Support\Facades\Session;
?>

<div class="row">
    <div class="col-xl-12">
        <div class="card-body bg-light">
            <h5 >Add Category</h5>
            <?php
            $message = Session::get('message');
            if ($message){
                echo "<div class='alert alert-success'>".$message."</div>";
                Session::put('message',null);
            }
            ?>
            <hr>
            <form autocomplete="off" action="{{URL::to('admin_1/save-category')}}">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category Id</label>
                    <div class="col-sm-10">
                        <input type="text" value="Auto" disabled name="category_id" class="form-control" id="inputEmail3" placeholder="Category Id" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Category Name</label>
                    <div class="col-sm-10">
                        <input type="text" value="" name="category_name" class="form-control" id="inputPassword3" placeholder="Category Name" autocomplete="off">
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
                    <div class="col-10"></div>
                    <div class="col-2">
                        <button style="width: 90%;" type="submit" class="btn btn-success">Add Category</button>
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
    $('#submenu-category ul li a').first().addClass('active');
</script>
@endsection