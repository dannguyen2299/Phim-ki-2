
<div class="col-lg-4" >

{{--  @if(Session::has('user_id'))
     <div class="row">
      <h5 class="text-light ml-3">PHIM ĐÁNH DẤU</h5>
    </div>
    <div class="row">
      <div class="col-12">
          <h6 class="text-danger">Tên phim</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
         <table class="table">
           <tr>
             <td><a href=""><p class="text-light mb-0">Hoa và nắng</p></a></td>
             <td><a href=""><p class="text-light mb-0">Tập 5</p></a></td>
             <td><a href=""><i class="fa fa-times mb-0 text-danger"></i></td>
           </tr>
           <tr>
            <td><a href=""><p class="text-light mb-0">Hoa và nắng</p></a></td>
            <td><a href=""><p class="text-light mb-0">Tập 5</p></a></td>
            <td><a href=""><i class="fa fa-times mb-0 text-danger"></i></td>
          </tr>
          <tr>
            <td><a href=""><p class="text-light mb-0">Hoa và nắng</p></a></td>
            <td><a href=""><p class="text-light mb-0">Tập 5</p></a></td>
            <td><a href=""><i class="fa fa-times mb-0 text-danger"></i></td>
          </tr>
          <tr>
            <td><a href=""><p class="text-light mb-0">Hoa và nắng</p></a></td>
            <td><a href=""><p class="text-light mb-0">Tập 5</p></a></td>
            <td><a href=""><i class="fa fa-times mb-0 text-danger"></i></td>
          </tr>
         </table>
         <a class=" text-success" href="">Xem thêm</a>
      </div>
    </div> 
@endif  --}}

    <div class="row mt-3">
      <h5 class="text-danger ml-3">HÔM NAY XEM GÌ ?</h5>
    </div>
    <div class="row-2">
      <small class="text-secondary">Nếu bạn đang phân vân không biết xem gì. Hãy để hệ thống chúng tôi lựa chọn ngẫu nhiên cho bạn.<br> Chúc bạn có 1 ngày xem phim vui vẻ</small>
    </div>
    <div class="row-2">
      <a href="../select-system" class="btn bg-danger mt-2">Lựa chọn của hệ thống</a>
    </div>
    @if ($ads_banner2!=null)
        @foreach ($ads_banner2 as $row)
          <div class="row-2 mt-3" style="width:250px;">
              <a href="{{ $row->link_banner }}"><img src="{{ $row->url_banner }}" style="width:100%; height:auto;"  alt=""/></a>  
          </div>
        @endforeach   
    @endif
   
  </div>