@extends('frontend.master.master')
@section('title','Danh sách phim')
@section('content')
  
<div class="container">
  <form method="GET" action="/filter-movie" >
  <div class="row">
    
    <div class="col-md-2 col-xs-6">
      <div class="form-group">
        <label class="label_title">Sắp xếp</label>
        <select class="form-control select2" id="sl_all" name="sl_all" style="width: 100%;">
          <option value="">---Tất cả---</option>
          <option value="mov.movie_id">Theo ngày mới nhất</option>
          <option value="views">View cao nhất</option>
          
        </select>
      </div>
  </div>
  <div class="col-md-2 col-xs-6">
    <div class="form-group">
      <label class="label_title">Loại phim</label>
      <select class="form-control select2" id="category" name="category" style="width: 100%;">
          <option  value="">---Tất cả---</option>
        @foreach ($category_parent as $row)
          <option value="{{ $row->category_id }}">{{ $row->category_name }}</option>
        @endforeach
      </select>
  </div>
  </div>
  <div class="col-md-2 col-xs-6">
    <div class="form-group">
      <label class="label_title">Thể loại</label>
      <select class="form-control select2" id="kind" name="kind" style="width: 100%;">
      <option value="">---Tất cả---</option>
      @foreach ($category_son as $row)
      <option value="{{ $row->category_id }}">{{ $row->category_name }}</option>
      @endforeach
    </select>
  </div>
  </div>
  <div class="col-md-2 col-xs-6">
    <div class="form-group">
      <label class="label_title">Quốc gia</label>
      <select class="form-control select2" id="nation" name="nation" style="width: 100%;">
      <option  value="">---Tất cả---</option>
      @foreach ($nation as $row)
      <option value="{{ $row->nation_id }}">{{ $row->nation_name }}</option>
      @endforeach
    </select>
  </div>
</div>
  
  <div class="col-md-2 col-xs-6">
    <div class="form-group">
      <label class="label_title">Năm phát hành</label>
      <select class="form-control select2" id="year" name="year" style="width:100%;">
      <option  value="">---Tất cả---</option>
      @foreach ($yearR as $row)
      <option value="{{ $row->year }}">{{ $row->year }}</option>
      @endforeach
    </select>
  </div>
  
</div>
{{-- {{ Form::Submit('submit',['class'=>'btn btn-primary h-25 col-md-2 col-xs-6 mt-5']) }} --}}
  <button type="submit" id="btn_submit" class="btn btn-primary col-md-2 col-xs-6">Duyệt Phim</button>
   

  </div>
   </form>
</div>


    <div class="container">
      <div class="row-2 mt-4">
        <h5 class="text-light">DANH SÁCH PHIM</h5>
      </div>
      <div class="row-2">
        <hr />
      </div>
      <div class="row">
        <div class="col">
          <div class="row" id="respon_card">
            @foreach ($category_by_id as $row )
           
                  <a href="/movie/movie-{{ $row->movie_id }}.html" class="ml-2 mt-3 mr-1">
                    <div class="card-style-1"  id="respon">
                      <img src="{{ $row->url_image }}" alt="" />
                      <div class="infor">
                        <h5>{{ $row->movie_name }}</h5>
                  <p>Lượt xem: {{ $view_nums[$row->movie_id]}} views</p>
                       
                      </div>
                      <div class="rate">
                        <p>8.5 <i class="fa fa-star"></i></p>
                      </div>
                      <div class="episode">
                        <h8
                          >Tập
                          <p>{{$episode_nums[$row->movie_id]}} / {{$row->total_eps}} </p></h8
                        >
                      </div>
                      <div class="play">
                        <i class="fa fa-play"></i>
                      </div>
                    </div>
                  </a>
                <!-- </div>
              </div>
            </div> -->
            @endforeach
          </div>
         
          <div class="row-2 mt-4 mb-4">
           
            <nav aria-label="Page navigation example" class="pages_nav">
              {{ $category_by_id->links() }}
           
            </nav>
            
          </div>
        </div>
       @include('frontend.master.fim_select')
      </div>
    </div>
    <!-- Script-Section -->
   
    <!-- <script type="text/javascript">
      $(document).ready(function () {
        $("#news-slider").owlCarousel({
          items: 4,
          navigation: true,
          navigationText: ["", ""],
          autoPlay: true,
        });
      });
    </script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
      crossorigin="anonymous"
    ></script> -->
@endsection