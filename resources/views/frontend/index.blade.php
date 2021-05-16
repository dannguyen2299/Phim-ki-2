@extends('frontend.master.master')
@section('title','Home')
@section('content')

    <div class="container">
      <div class="row-2 mt-4">
        <h5 class="text-light">PHIM ĐỀ CỬ</h5>
      </div>
      <div class="row-2">
        <hr />
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div id="news-slider" class="owl-carousel">
           @foreach ($movie as $row)

           <div class="news-grid">
            <a href="/movie/movie-{{ $row->movie_id }}.html">
              <div class="card-style-1">
                <img src="{{ $row->url_image }}" alt="" />
                <div class="episode">
                  <h8
                    >Tập
                    <p>{{$episode_nums[$row->movie_id]}} / {{$row->total_eps}} tập</p></h8
                  >
                </div>
                <div class="rate">
                  <p>8.5 <i class="fa fa-star"></i></p>
                </div>
                <div class="play">
                  <i class="fa fa-play"></i>
                </div>
                <div class="infor">
                  <h5>{{ $row->movie_name }}</h5>
                  <p>Lượt xem: {{ $row->view}} views</p>
                </div>
              </div>
            </a>
          </div>
           @endforeach
            <!-- 1 -->
           
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row-2 mt-4">
        <h5 class="text-light">PHIM MỚI CẬP NHẬT</h5>
      </div>
      <div class="row-2">
        <hr />
      </div>
      <div class="row">
        <div class="col"  >
          <div class="row" id="respon_card">
            @foreach ($movie_up as $row )
           
                  <a href="/movie/movie-{{ $row->movie_id }}.html">
                    <div class="card-style-1"  id="respon">
                      <img src="{{ $row->url_image }}" alt="" />
                      <div class="infor">
                        <h5>{{ $row->movie_name }}</h5>
                        <p>Lượt xem: {{ $row->view}} views</p>
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
          <div class="row-2 mt-4 mb-3 "  id="respon_card">
            <a href="" class="btn btn-danger">Xem thêm...</a>
          </div>
          <div class="row-2 mt-4">
            <h5 class="text-light">PHIM VIỆT NAM</h5>
          </div>
          <div class="row-2">
            <hr />
          </div>
          <div class="row"  id="respon_card">
            @foreach ($movie_v as $row )
            {{-- <div class="col-3">
              <div class="row mt-4">
                <div class="col-xl-6"> --}}
                  <a href="/movie/movie-{{ $row->movie_id }}.html">
                    <div class="card-style-1"  id="respon">
                      <img src="{{ $row->url_image }}" alt="" />
                      <div class="infor">
                        <h5>{{ $row->movie_name }}</h5>
                        <p>Lượt xem: {{ $row->view}} views</p>
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
          <div class="row-2 mt-4 mb-3"  id="respon_card">
            <a href="" class="btn btn-danger">Xem thêm...</a>
          </div>
        </div>
        @include('frontend.master.fim_select')
      </div>
    </div>
    <!-- Script-Section -->
    <footer class="mt-4">  
      <div class="container">
        <div class="fr">
             <div class="logo">
            <h2 class="text-danger">1080+</h2>
        </div>
        <div class="content">
          <!-- <p class="text-secondary">Phim được tài trợ bởi</p> -->
        </div>
        <div class="infor">
          <!-- <h2 class="text-secondary">es</h2> -->
        </div>
        </div>
      
      </div>
       
    </footer>
    
    <script type="text/javascript">
      $(document).ready(function () {
        $("#news-slider").owlCarousel({
          items: 6,
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
    <!-- Script-Section -->

    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
      crossorigin="anonymous"
    ></script>

@endsection