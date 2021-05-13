@extends('admin/admin_layout')
@section('title','dashboard')
@section('admin_content')
<?php
use Illuminate\Support\Facades\Session;
?>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card mb-4">
            <div class="card-header">
                <h3><i class="fas fa-table"></i> All Nation</h3>
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
                                <th>Id</th>
                                <th>Nation name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($all_nation as $key=>$value)
                            <tr>
                                <td>{{$value->nation_id}}</td>
                                <td>{{$value->nation_name}}</td>
                                <td>
                                <?php
                                if ($value->status == '1'){
                                ?>
                                    <a href="{{URL::to('admin_1/unactive-nation/'.$value->nation_id)}}"><i class="far fa-eye"></i></a>
                                <?php    
                                } else {
                                ?>
                                    <a href="{{URL::to('admin_1/active-nation/'.$value->nation_id)}}"><i class="far fa-eye-slash"></i></a>
                                <?php
                                }
                                ?>
                                </td>
                                <td>
                                    <a href="{{URL::to('admin_1/edit-nation/'.$value->nation_id)}}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{URL::to('admin_1/delete-nation/'.$value->nation_id)}}" class="btn btn-danger"  onclick="return confirm('Do you want to delete this brand product?')"><i class="fas fa-times"></i></a>
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
    $('#submenu-nation ul li a').last().addClass('active');
</script>
@endsection