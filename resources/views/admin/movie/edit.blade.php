@extends('admin/admin_layout')
@section('title','Admin: Edit Movie')
@section('admin_content')
<?php
use Illuminate\Support\Facades\Session;
?>
@foreach($movie_edit as $key=>$value)
<form data-parsley-validate novalidate autocomplete="off" action="{{URL::to('admin_1/update-movie/'.$value->movie_id)}}">
    <div class="row">
        <div class="col-xl-12 bg-light">
            <div class="card-body">
                <h5>Edit Movie</h5>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Id</label>
                            <div class="col-sm-10">
                                <input required type="text"required value="{{$value->movie_id}}" disabled name="movie_id" class="form-control" id="inputEmail3" placeholder="Movie Id" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input required type="text"required value="{{$value->movie_name}}" name="movie_name" class="form-control" id="inputPassword3" placeholder="Movie's Name" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword4" class="col-sm-2 col-form-label">Year</label>
                            <div class="col-sm-10">
                                <input required type="text"required value="{{$value->year}}" name="movie_year" class="form-control" id="inputPassword4" placeholder="Year" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword4" class="col-sm-2 col-form-label">Total</label>
                            <div class="col-sm-10">
                                <input required type="text"required value="{{$value->total_eps}}" name="movie_episodes" class="form-control" id="inputPassword4" placeholder="Total Episodes" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword6" class="col-sm-2 col-form-label">Length</label>
                            <div class="col-sm-10">
                                <input required type="text" required value="{{$value->length}}" name="movie_length" class="form-control" id="inputPassword6" placeholder="Length" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="movie_image" class="col-sm-2 col-form-label">Poster</label>
                                <div class="col-sm-10">
                                    <input required type="text"required value="{{$value->url_image}}" name="movie_image" class="form-control" id="movie_image" placeholder="URL Image" autocomplete="off">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword7" class="col-sm-2 col-form-label">Link trailer</label>
                            <div class="col-sm-10">
                                <input required type="text"required value="{{$value->url_trailer}}" name="movie_trailer" class="form-control" id="inputPassword7" placeholder="Trailer URL" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword9" class="col-sm-2 col-form-label">Link FB</label>
                            <div class="col-sm-10">
                                <input required type="text"required value="{{$value->url_cmt_fb}}" name="movie_cmt" class="form-control" id="inputPassword9" placeholder="Fb Comment URL" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword10" class="col-sm-2 col-form-label">Nation</label>
                            <div class="col-sm-10">
                                <select name="movie_nation" id="inputPassword10" class="form-control">
                                    @foreach($nations as $key=>$nation)
                                    <option value="{{$nation->nation_id}}" <?php if($value->nation_id == $nation->nation_id) echo "selected"; ?>>{{$nation->nation_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sl_status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select name="sl_status" id="sl_status" class="form-control">
                                    <option value="1" <?php if($value->status == '1') echo "selected"; ?>>Show</option>
                                    <option value="0" <?php if($value->status == '0') echo "selected"; ?>>Hidden</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="inputPassword5" class="col-sm-2 col-form-label">Introduce</label>
                            <div class="col-sm-10">
                                <textarea name="movie_introduce" style="height: 250px;text-align:start" class="form-control" id="inputPassword5" placeholder="Introduce" autocomplete="off">
                                    {{$value->introduce}}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-8">
                                <label for="inputPassword9" class=" col-form-label">Category</label>

                                <div class="row border">
                                    @foreach($categories as $key=>$category)

                                    <div class="form-check ml-3 mt-2 mb-2">
                                        <input <?php 
                                            foreach($detail_categories as &$detail){
                                                if ($detail->category_id == $category->category_id){
                                                    echo "checked";
                                                    break;
                                                }
                                            }
                                        ?> id="{{$category->category_id}}" type="checkbox" name="movie_category[]" value="{{$category->category_id}}" class="form-check-input">
                                        <label for="{{$category->category_id}}" class="form-check-label">{{$category->category_name}}</label>
                                    </div>
                                    <br/>
                                    @endforeach
                                </div>

                            </div>
                            <div class="col-4">
                                <label for="inputPassword9" class=" col-form-label">Image Preview</label>
                                <div class="border">
                                    <img src="{{$value->url_image}}" style="max-height: 200px; margin-left: 20px" alt="" id="img_poster">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-10"></div>
                <div class="col-md-2">
                    <button style="width: 90%;" type="submit" class="btn btn-success">Update Movie</button>
                </div>
            </div>
        
        </div>
    </div>
</form>
@endforeach
@endsection

@section('script')
<script>
    $('.submenu ul li a').removeClass('active');
    $('#submenu-movie ul li a').last().addClass('active');

    $( document ).ready(function() {
        var movie_image = $('#movie_image');
        movie_image.on('input',function(){
            var url = movie_image.val();
            $('#img_poster').attr('src',url);
        });
    });
</script>
@endsection