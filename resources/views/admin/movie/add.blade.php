@extends('admin/admin_layout')
@section('title','dashboard')
@section('admin_content')
<?php
use Illuminate\Support\Facades\Session;
?>

<form autocomplete="off" action="{{URL::to('admin_1/save-movie')}}">
    <div class="row">
        <div class="col-xl-6">
            <h4 class="text-center">Movie</h4>
            <div class="card-body">
                <?php
                $message = Session::get('message');
                if ($message){
                    echo "<div class='alert alert-success'>".$message."</div>";
                    Session::put('message',null);
                }
                ?>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Movie Id</label>
                    <div class="col-sm-10">
                        <input type="text" value="auto" disabled name="movie_id" class="form-control" id="inputEmail3" placeholder="Movie Id" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Movie's Name</label>
                    <div class="col-sm-10">
                        <input type="text" value="" name="movie_name" class="form-control" id="inputPassword3" placeholder="Movie's Name" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword4" class="col-sm-2 col-form-label">Year</label>
                    <div class="col-sm-10">
                        <input type="text" value="" name="movie_year" class="form-control" id="inputPassword4" placeholder="Year" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword4" class="col-sm-2 col-form-label">View</label>
                    <div class="col-sm-10">
                        <input type="text" value="" name="movie_view" class="form-control" id="inputPassword4" placeholder="View" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword5" class="col-sm-2 col-form-label">Introduce</label>
                    <div class="col-sm-10">
                        <textarea name="movie_introduce" class="form-control" id="inputPassword5" placeholder="Introduce" autocomplete="off"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword6" class="col-sm-2 col-form-label">Length</label>
                    <div class="col-sm-10">
                        <input type="text" value="" name="movie_length" class="form-control" id="inputPassword6" placeholder="Length" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="movie_image" class="col-sm-2 col-form-label">Poster</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="movie_image" class="form-control" id="movie_image" placeholder="URL Image" autocomplete="off">
                        </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword7" class="col-sm-2 col-form-label">Link trailer</label>
                    <div class="col-sm-10">
                        <input type="text" value="" name="movie_trailer" class="form-control" id="inputPassword7" placeholder="Trailer URL" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword9" class="col-sm-2 col-form-label">Link FB comment</label>
                    <div class="col-sm-10">
                        <input type="text" value="" name="movie_cmt" class="form-control" id="inputPassword9" placeholder="Fb Comment URL" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword10" class="col-sm-2 col-form-label">Nation</label>
                    <div class="col-sm-10">
                        <select name="movie_nation" id="inputPassword10" class="form-control">
                            @foreach($nations as $key=>$value)
                            <option value="{{$value->nation_id}}">{{$value->nation_name}}</option>
                            @endforeach
                        </select>
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
            </div>
        </div>
        <div class="col-xl-3">
            <h4 class="text-center">Image</h4>
            <img src="" style="max-height: 400px" alt="" id="img_poster">
        </div>
        <div class="col-xl-3">
            <h4 class="text-center">Category</h4>

            @foreach($categories as $key=>$value)

            <div class="form-check">
                <input id="{{$value->category_id}}" type="checkbox" name="movie_category[]" value="{{$value->category_id}}" class="form-check-input">
                <label for="{{$value->category_id}}" class="form-check-label">{{$value->category_name}}</label>
            </div>
            <br/>
            @endforeach
        </div>
    </div>
</form>

@endsection

@section('script')
<script>
    $('.submenu ul li a').removeClass('active');
    $('#submenu-movie ul li a').first().addClass('active');

    $( document ).ready(function() {
        var movie_image = $('#movie_image');
        movie_image.on('input',function(){
            var url = movie_image.val();
            $('#img_poster').attr('src',url);
        });
    });
</script>
@endsection