@extends('admin/admin_layout')
@section('title','Admin: Fix Report')
@section('admin_content')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card mb-5">
            <div class="card-header">
                <h3><i class="fas fa-table"></i> Episode of Movie</h3>
            </div>
            <div class="card-body">
                @foreach($episode as $key=>$value)
                <div class="row">
                    <div class="col-xl-8">
                        <div>
                            <form autocomplete="off" action="{{URL::to('admin_1/update-report/episode_id='.$value->episode_id.'&report_id='.$report->report_id)}}">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Episode Id</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{$value->episode_id}}" name="episode-id" disabled class="form-control" id="inputEmail3" placeholder="Category Id" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Episode Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{$value->episode_name}}" name="episode_name" class="form-control" id="inputPassword3" placeholder="Category Name" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="episode_url_1" class="col-sm-2 col-form-label">Link 1</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{$value->url_first}}" name="url_first" class="form-control" id="episode_url_1" placeholder="Category Name" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="episode_url_2" class="col-sm-2 col-form-label">Link 2</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{$value->url_second}}" name="url_second" class="form-control" id="episode_url_2" placeholder="Category Name" autocomplete="off">
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
                                    <label for="sl_is_fixed" class="col-sm-2 col-form-label">Is Fixed</label>
                                    <div class="col-sm-10">
                                        <select name="is_fixed" id="sl_is_fixed" class="form-control">
                                            <option value="1" <?php if ($report->is_fixed == 1) echo 'selected';?>>Fixed</option>
                                            <option value="0" <?php if ($report->is_fixed == 0) echo 'selected';?>>Not Fixed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-xl-4">
                        <h4 class="text-center mb-4">{{$value->movie_name}}</h4>
                        <div class="text-center"><img src="{{$value->url_image}}" style="width: 250px" alt="" id="img_poster"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $('.submenu ul li a').removeClass('active');
    $('#submenu-report a').last().addClass('active');
</script>
@endsection