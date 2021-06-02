@extends('admin/admin_layout')
@section('title','Admin: Report')
@section('admin_content')
<?php
use Illuminate\Support\Facades\Session;
?>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card mb-3">
            <div class="card-header">
                <h3><i class="fas fa-table"></i> All Report </h3>
            </div>

            <div class="card-body">
                <?php
                $message = Session::get('message');
                $alert = Session::get('alert');
                if ($message){
                    echo "<div class='".$alert."'>".$message."</div>";
                    Session::put('message',null);
                    Session::put('alert',null);
                }
                ?>
                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                        <thead>
                            <tr>
                                {{--  <th>User's email</th>  --}}
                                <th>Content</th>
                                <th>Movie</th>
                                <th>Episode</th>
                                <th>Create at</th>
                                <th>Is Fixed</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($reports as $report)
                            <tr>
                                {{--  <td>{{$report->email}}</td>  --}}
                                <td>{{$report->content}}</td>
                                <td>{{$report->movie_name}}</td>
                                <td>{{$report->episode_name}}</td>
                                <td>{{$report->created_at}}</td>
                                <td>
                                <?php
                                if ($report->is_fixed == '1'){
                                ?>
                                    <a href="{{URL::to('admin_1/not-fixed-report/'.$report->report_id)}}"><i class="fas fa-thumbs-up"></i></i></a>
                                <?php    
                                } else {
                                ?>
                                    <a href="{{URL::to('admin_1/fixed-report/'.$report->report_id)}}"><i class="fas fa-thumbs-down"></i></a>
                                <?php
                                }
                                ?>
                                </td>
                                <td>
                                <a href="{{URL::to('admin_1/fix-report/'.$report->report_id)}}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{URL::to('admin_1/delete-report/'.$report->report_id)}}" class="btn btn-danger"  onclick="return confirm('Do you want to delete this report?')"><i class="fas fa-times"></i></a>
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
    $('#submenu-report a').last().addClass('active');
</script>
@endsection