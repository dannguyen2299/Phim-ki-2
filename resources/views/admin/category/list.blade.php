@extends('admin/admin_layout')
@section('title','dashboard')
@section('admin_content')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card mb-3">
            <div class="card-header">
                <h3><i class="fas fa-table"></i> Basic data table</h3>
                DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table: pagination, instant search and multi-column ordering.
                <a target="_blank" href="https://datatables.net/">(more details)</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Salary</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Thanh</td>
                                <td>Giam doc</td>
                                <td>IT software</td>
                                <td>18</td>
                                <td>10000$</td>
                                <td>
                                    <a href="#" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
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