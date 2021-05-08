@extends('admin/admin_layout')
@section('title','dashboard')
@section('admin_content')
<?php
use Illuminate\Support\Facades\Session;
?>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card mb-3">
            <div class="card-header">
                <h3><i class="fas fa-table"></i> All Category</h3>
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
                                <th>Category_name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($all_category as $key=>$value)
                            <tr>
                                <td>{{$value->id_category}}</td>
                                <td>{{$value->name_category}}</td>
                                <td>
                                <?php
                                    if ($value->status == '1'){
                                        echo "Show";
                                    } else {
                                        echo "Hidden";
                                    }
                                ?>
                                </td>
                                <td>
                                    <a href="{{URL::to('edit_category/'.$value->id_category)}}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{URL::to('delete_category/'.$value->id_category)}}" class="btn btn-danger"  onclick="return confirm('Do you want to delete this brand product?')"><i class="fas fa-times"></i></a>
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