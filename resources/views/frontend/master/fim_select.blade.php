
<div class="col-lg-4" >
  
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
          <a href="{{ $row->link_banner }}"><img src="{{ $row->url_banner }}" style="width:100%; height:300px;"  alt=""/></a>  
      </div>
      @endforeach
      
    @endif
   
  </div>