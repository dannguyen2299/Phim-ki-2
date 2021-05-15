@extends('admin/admin_layout')
@section('title','Admin: Edit Category')
@section('admin_content')

<div class="row">
    <div class="col-xl-12">
        <div class="card-body">
        @foreach($category as $key=>$value)
            <form autocomplete="off" action="{{URL::to('admin_1/update-category/'.$value->category_id)}}">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category Id</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$value->category_id}}" name="category_id" disabled class="form-control" id="inputEmail3" placeholder="Category Id" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Category Name</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$value->category_name}}" name="category_name" class="form-control" id="inputPassword3" placeholder="Category Name" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sl_status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="sl_status" id="sl_status" class="form-control">
                            <option value="1" <?php if ($value->status == 1) echo 'selected';?>>Show</option>
                            <option value="0" <?php if ($value->status == 0) echo 'selected';?>>Hidden</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        @endforeach
            </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $('.submenu ul li a').removeClass('active');
    $('#submenu-category ul li a').last().addClass('active');
</script>
@endsection