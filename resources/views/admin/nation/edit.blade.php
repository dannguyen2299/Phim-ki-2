@extends('admin/admin_layout')
@section('title','dashboard')
@section('admin_content')

<div class="row">
    <div class="col-xl-12">
        <div class="card-body">
        @foreach($nation as $key=>$value)
            <form autocomplete="off" action="{{URL::to('admin_1/update-nation/'.$value->nation_id)}}">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nation Id</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$value->nation_id}}" name="nation_id" disabled class="form-control" id="inputEmail3" placeholder="Nation Id" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nation Name</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$value->nation_name}}" name="nation_name" class="form-control" id="inputPassword3" placeholder="Nation Name" autocomplete="off">
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
    $('#submenu-nation ul li a').last().addClass('active');
</script>
@endsection