@extends('admin/admin_layout')
@section('title','Admin: List Movie')
@section('admin_content')
<?php
use Illuminate\Support\Facades\Session;
?>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card mb-3">
            <div class="card-header">
                <h3><i class="fas fa-table"></i> All Movie</h3>
            </div>

            <div class="card-body">
                <?php
                $message = Session::get('message');
                if ($message){
                    echo "<div class='alert alert-success'>".$message."</div>";
                    Session::put('message',null);
                }
                ?>
                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Information</th>
                                <th>Introduce</td>
                                <th>Length</th>
                                <th>Image</th>
                        
                                <th>Status</th>
                                <th width="90">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($movies as $key=>$value)
                        <tr>
                            <td>{{$value->movie_name}}</td>
                            <td>{{$categories[$value->movie_id]}}</td>
                                <td><span class="text-success">Year: </span>{{$value->year}} <br> <span class="text-success">Total:</span> {{$episode_nums[$value->movie_id]}} / {{$value->total_eps}} 
                                <br>    <span class="text-success">View:</span> {{$view_nums[$value->movie_id]}} <br> <span class="text-success">Nation:</span> {{$value->nation_status==1?$value->nation_name:'' }}</td>
                                <td>{{$value->introduce}}</td>
                                <td>{{$value->length}}</td>
                                <td><img src="{{$value->url_image}}" alt="" width="100"></td>
                                
                                <td>
                                <?php
                                if ($value->movie_status == '1'){
                                ?>
                                    <a href="{{URL::to('admin_1/unactive-movie/'.$value->movie_id)}}"><i class="far fa-eye" ></i></a>
                                <?php    
                                } else {
                                ?>
                                    <a  href="{{URL::to('admin_1/active-movie/'.$value->movie_id)}}"><i class="far fa-eye-slash"></i></a>
                                <?php
                                }
                                ?>
                                </td>
                                <td>
                                    <a href="{{URL::to('admin_1/edit-movie/'.$value->movie_id)}}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{URL::to('admin_1/delete-movie/'.$value->movie_id)}}" class="btn btn-danger"  onclick="return confirm('Do you want to delete this movie?')"><i class="fas fa-times"></i></a>
                                    <a href="{{URL::to('admin_1/list-episode/'.$value->movie_id)}}" class="btn btn-primary mt-2"><i class="fas fa-tv"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive-->

            </div>
            <!-- end card-body-->

        </div>
        <!-- end card-->

    </div>

</div>
<!-- end row-->
@endsection

@section('script')
<script>
    $('.submenu ul li a').removeClass('active');
    $('#submenu-movie ul li a').last().addClass('active');
</script>
@endsection