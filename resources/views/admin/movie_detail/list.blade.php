@extends('admin/admin_layout')
@section('title','Admin: Movie Detail')
@section('admin_content')
<?php
use Illuminate\Support\Facades\Session;
?>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card mb-3">
            <div class="card-header">
                <h3><i class="fas fa-table"></i> Statistacal </h3>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Movie</th>
                                <th>Poster</th>
                                <th>Episode</th>
                                <th>View</th>
                                <th>Follow</th>
                                <th>Rate</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($movies as $movie)
                            <tr>
                                <td>{{$movie->movie_name}}</td>
                                <td><img src="{{$movie->url_image}}" alt="" width="100"></td>
                                <td>{{$episode_nums[$movie->movie_id]}} / {{$movie->total_eps}} tập</td>
                                <td>{{$view_nums[$movie->movie_id]}}</td>
                                <td>{{$follow[$movie->movie_id]}}</td>
                                <td>{{$rate[$movie->movie_id]}}</td>
                                <td>
                                <?php
                                if ($movie->status == '1'){
                                ?>
                                    <i class="far fa-eye"></i>
                                <?php    
                                } else {
                                ?>
                                    <i class="far fa-eye-slash"></i>
                                <?php
                                }
                                ?>
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
    $('#submenu-statistacal a').last().addClass('active');
</script>
@endsection