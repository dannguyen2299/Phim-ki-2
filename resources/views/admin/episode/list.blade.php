@extends('admin/admin_layout')
@section('title','Admin: List Episode')
@section('admin_content')
<?php
use Illuminate\Support\Facades\Session;
?>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card mb-3">
            <div class="card-header">
                <h3><i class="fas fa-table"></i> Episode of Movie</h3>
            </div>
            <h3 class="mt-4"><i class="fas fa-tv mx-4"></i>{{$movie->movie_name}}</h3>
            <div class="card-body">
                <form data-parsley-validate novalidate autocomplete="off" action="{{URL::to('admin_1/save-episode')}}">
                    <input required type="text" value="{{$movie->movie_id}}" name="movie_id" hidden>
                    <div class="table-responsive">
                        <table class="table table-hover display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Episode Name</th>
                                    <th>Link 1</th>
                                    <th>Link 2</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input required type="text" class="form-control" name="episode_name"></td>
                                    <td><input required type="text" class="form-control" name="url_first"></td>
                                    <td><input type="text" class="form-control" name="url_second"></td>
                                    <td>
                                        <select name="sl_status" class="form-control" id="">
                                            <option value="1">Show</option>
                                            <option value="0">Hidden</option>
                                        </select>
                                    </td>
                                    <td><input required type="submit" hidden id="add_episode_input"><label for="add_episode_input" class="btn btn-success"><i class="fas fa-plus"></i></label></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
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
                                <th>Odinal</th>
                                <th>Episode Id</th>
                                <th>Episode</th>
                                <th>Link 1</th>
                                <th>Link 2</th>
                                <th>View</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 0 ?>
                        @foreach($episodes as $key=>$value)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$value->episode_id}}</td>
                                <td>{{$value->episode_name}}</td>
                                <td>{{$value->url_first}}</td>
                                <td>{{$value->url_second}}</td>
                                <td>{{$value->view}}</td>
                                <td>
                                <?php
                                if ($value->status == '1'){
                                ?>
                                    <a href="{{URL::to('admin_1/unactive-episode/'.$value->episode_id)}}"><i class="far fa-eye"></i></a>
                                <?php    
                                } else {
                                ?>
                                    <a href="{{URL::to('admin_1/active-episode/'.$value->episode_id)}}"><i class="far fa-eye-slash"></i></a>
                                <?php
                                }
                                ?>
                                </td>
                                <td>
                                    <a href="{{URL::to('admin_1/edit-episode/'.$value->episode_id)}}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{URL::to('admin_1/delete-episode/'.$value->episode_id)}}" class="btn btn-danger"  onclick="return confirm('Do you want to delete this episode?')"><i class="fas fa-times"></i></a>
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