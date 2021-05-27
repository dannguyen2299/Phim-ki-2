@extends('admin/admin_layout')
@section('title','Admin: Add Category')
@section('admin_content')
<?php
use Illuminate\Support\Facades\Session;
?>

<div class="row">
    <div class="col-xl-7">
        <div class="card-body bg-light">
            <h5 >Add Advertisement</h5>
            <?php
            $message = Session::get('message');
            if ($message){
                echo "<div class='alert alert-success'>".$message."</div>";
                Session::put('message',null);
            }
            ?>
            <hr>
            <form data-parsley-validate novalidate autocomplete="off" action="{{URL::to('admin_1/save-advertisement')}}">
                <div class="form-group row">
                    <label for="inputEmail2" class="col-sm-2 col-form-label">Advertisement Name</label>
                    <div class="col-sm-10">
                        <input required type="text" value="" name="ad_name" class="form-control" id="inputEmail2" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Partner</label>
                    <div class="col-sm-10">
                        <input required type="text" value="" name="partner" class="form-control" id="inputPassword3" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword4" class="col-sm-2 col-form-label">Partner email</label>
                    <div class="col-sm-10">
                        <input required type="text" value="" name="partner_email" class="form-control" id="inputPassword4" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword5" class="col-sm-2 col-form-label">Partner phone</label>
                    <div class="col-sm-10">
                        <input required type="text" value="" name="partner_phone" class="form-control" id="inputPassword5" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="url_banner" class="col-sm-2 col-form-label">Url banner</label>
                    <div class="col-sm-10">
                        <input required type="text" value="" name="url_banner" class="form-control" id="url_banner" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword7" class="col-sm-2 col-form-label">Link banner</label>
                    <div class="col-sm-10">
                        <input type="text" value="" name="link_banner" class="form-control" id="inputPassword7" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword8" class="col-sm-2 col-form-label">Start date</label>
                    <div class="col-sm-10">
                        <input required type="date" value="" name="start_date" class="form-control" id="inputPassword8" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword9" class="col-sm-2 col-form-label">End date</label>
                    <div class="col-sm-10">
                        <input required type="date" value="" name="end_date" class="form-control" id="inputPassword9" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword10" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input required type="text" value="" name="price" class="form-control" id="inputPassword10" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword11" class="col-sm-2 col-form-label">Have Paid</label>
                    <div class="col-sm-10">
                        <select name="have_paid" class="form-control" id="inputPassword11">
                            <option value="0">Not Paid</option> <!-- Chưa thanh toán -->
                            <option value="1">Paid</option> <!-- Đã thanh toán -->
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword12" class="col-sm-2 col-form-label">Location</label>
                    <div class="col-sm-10">
                        <select name="ad_location" class="form-control" id="inputPassword12">
                            <option value="0">0 - Unfinished</option> <!-- Chưa gắn lên trang -->
                            <option value="1">1 - Location: 1</option> <!-- Đang gắn ở vị trí 1 -->
                            <option value="2">2 - Location: 2</option> <!-- Đang gắn ở vị trí 2 -->
                            <option value="3">3 - Location: 3</option> <!-- Đang gắn ở vị trí 3 -->
                            <option value="4">4 - Finished</option> <!-- Đã lên trang và đã hết hạn -->
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sl_status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" id="sl_status" class="form-control">
                            <option value="1">Show</option>
                            <option value="0">Hidden</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-10"></div>
                    <div class="col-2">
                        <button style="width: 90%;" type="submit" class="btn btn-success">Add</button>
                    </div>
                </div>
            </form>
            </div>
    </div>
    <div class="col-xl-5">
        <div class="card-body bg-light">
            <h5>Location</h5>
            <hr>
            <img src="images/location.png" style="width: 85%" alt="">
            
            <h5 class="mt-3">Banner Preview</h5>
            <hr>
            <img src="" id="banner_preview" style="width: 95%" alt="">
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('.submenu ul li a').removeClass('active');
    $('#submenu-advertisement ul li a').first().addClass('active');
    
    $(document).ready(function() {
        var url_banner = $('#url_banner');
        url_banner.on('input', function() {
            var url = url_banner.val();
            $('#banner_preview').attr('src', url);
        });
    });
</script>
@endsection