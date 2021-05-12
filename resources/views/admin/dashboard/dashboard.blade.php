@extends('admin/admin_layout')
@section('title','dashboard')
@section('admin_content')

<div class="row">
    <div class="col-xl-12">
        <h3>Welcome to admin panel</h3>
    </div>
</div>

@endsection

@section('script')
<script>
    $('.submenu a').removeClass('active');
    $('#submenu-dashboard a').addClass('active');
</script>
@endsection