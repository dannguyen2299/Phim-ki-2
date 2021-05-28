@extends('admin/admin_layout')
@section('title','Admin: List Advertisement')
@section('admin_content')
<?php
use Illuminate\Support\Facades\Session;
?>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card mb-3">
            <div class="card-header">
                <h3><i class="fas fa-table"></i> All Advertisement</h3>
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
                                <th>Ad name</th>
                                <th>Partner</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Banner</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Price</th>
                                <th>Location</th>
                                <th>Have paid</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($advertisements as $key=>$value)
                            <tr>
                                <td>{{$value->ad_name}}</td>
                                <td>{{$value->partner}}</td>
                                <td>{{$value->partner_email}}</td>
                                <td>{{$value->partner_phone}}</td>
                                <td><a href="{{$value->link_banner}}"><img src="{{$value->url_banner}}" width="80" alt=""></a></td>
                                <td>{{$value->start_date}}</td>
                                <td>{{$value->end_date}}</td>
                                <td>{{$value->price}}</td>
                                <td>{{$value->ad_location}}</td>
                                <td><?php echo $value->have_paid == 1 ? '<span style="font-weight:bold; color: rgb(0, 149, 0)">Paid</span>' : '<span style="font-weight:bold; color: red">Not Paid</span>'; ?></td>
                                <td>
                                <?php
                                if ($value->status == '1'){
                                ?>
                                    <a href="{{URL::to('admin_1/unactive-advertisement/'.$value->ad_id)}}"><i class="far fa-eye"></i></a>
                                <?php    
                                } else {
                                ?>
                                    <a href="{{URL::to('admin_1/active-advertisement/'.$value->ad_id)}}"><i class="far fa-eye-slash"></i></a>
                                <?php
                                }
                                ?>
                                </td>
                                <td>
                                    <a href="{{URL::to('admin_1/edit-advertisement/'.$value->ad_id)}}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{URL::to('admin_1/delete-advertisement/'.$value->ad_id)}}" class="btn btn-danger"  onclick="return confirm('Do you want to delete this category?')"><i class="fas fa-times"></i></a>
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
    $('#submenu-advertisement ul li a').last().addClass('active');
</script>
@endsection