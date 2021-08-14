@extends('frontend.master.master')
@section('title', 'Trang chủ')
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
                                        <h8>Tập
                                            <p>{{ $episode_nums[$row->movie_id] }} / {{ $row->total_eps }}</p>
                                        </h8>
                                    </div>
                                    <div class="rate">
                                        <p>
                                            @if ($rates[$row->movie_id] != null)
                                                {{ $rates[$row->movie_id] }}
                                            @else
                                                CXĐ
                                                @endif <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                    <div class="play">
                                        <i class="fa fa-play"></i>
                                    </div>
                                    <div class="infor">
                                        <h5>{{ $row->movie_name }}</h5>
                                        <p>Lượt xem: {{ $view_nums[$row->movie_id] }} views</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <!-- 1 -->

                </div>
            </div>
        </div>
        
        {{-- Quảng cáo --}}
        @if ($ads_banner1!=null)
            <div class="row-2 mt-3" style="width:70%;margin:0px auto;">
            <a href="{{ $ads_banner1->link_banner }}"><img class="img-fluid" src="{{ $ads_banner1->url_banner }}" alt="" style="width:100%; height:auto;"></a>
            </div>
        @endif
        
        {{-- End --}}
    </div>
    <div class="container">
        <div class="row-2 mt-4">
            <h5 class="text-light">PHIM MỚI CẬP NHẬT</h5>
        </div>
        <div class="row-2">
            <hr />
        </div>
        <div class="row">
            <div class="col">
                <div class="row" id="respon_card">
                    @foreach ($movie_up as $row)

                        <a href="/movie/movie-{{ $row->movie_id }}.html" class="ml-2 mt-3 mr-1">
                            <div class="card-style-1" id="respon">
                                <img src="{{ $row->url_image }}" alt="" />
                                <div class="infor">
                                    <h5>{{ $row->movie_name }}</h5>
                                    <p>Lượt xem: {{ $view_nums[$row->movie_id] }} views</p>
                                </div>
                                <div class="rate">
                                    <p>
                                        @if ($rates[$row->movie_id] != null)
                                            {{ $rates[$row->movie_id] }}
                                        @else
                                            CXĐ
                                            @endif<i class="fa fa-star"></i>
                                    </p>
                                </div>
                                <div class="episode">
                                    <h8>Tập
                                        <p>{{ $episode_nums[$row->movie_id] }} / {{ $row->total_eps }} </p>
                                    </h8>
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
                <div class="row-2 mt-4 mb-3 " id="respon_card">
                    <a href="/new-movie-update" class="text-danger">Xem thêm >>></a>
                </div>

                <!-- Phim bo hot -->
                <div class="row-2 mt-4">
                    <h5 class="text-light">PHIM BỘ HOT</h5>
                </div>
                <div class="row-2">
                    <hr />
                </div>
                <div class="row" id="respon_card">
                    @foreach ($movie_hot1 as $row)
                        {{-- <div class="col-3">
              <div class="row mt-4">
                <div class="col-xl-6"> --}}
                        <a href="/movie/movie-{{ $row->movie_id }}.html" class="ml-2 mt-3 mr-1">
                            <div class="card-style-1" id="respon">
                                <img src="{{ $row->url_image }}" alt="" />
                                <div class="infor">
                                    <h5>{{ $row->movie_name }}</h5>
                                    <p>Lượt xem: {{ $view_nums[$row->movie_id] }} views</p>
                                </div>
                                <div class="rate">
                                    <p>
                                        @if ($rates[$row->movie_id] != null)
                                            {{ $rates[$row->movie_id] }}
                                        @else
                                            CXĐ
                                            @endif <i class="fa fa-star"></i>
                                    </p>
                                </div>
                                <div class="episode">
                                    <h8>Tập
                                        <p>{{ $episode_nums[$row->movie_id] }} / {{ $row->total_eps }} </p>
                                    </h8>
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


                <!-- PHIM LE HOT -->
                <div class="row-2 mt-4">
                    <h5 class="text-light">PHIM LE HOT</h5>
                </div>
                <div class="row-2">
                    <hr />
                </div>
                <div class="row" id="respon_card">
                    @foreach ($movie_hot2 as $row)
                        {{-- <div class="col-3">
              <div class="row mt-4">
                <div class="col-xl-6"> --}}
                        <a href="/movie/movie-{{ $row->movie_id }}.html" class="ml-2 mt-3 mr-1">
                            <div class="card-style-1" id="respon">
                                <img src="{{ $row->url_image }}" alt="" />
                                <div class="infor">
                                    <h5>{{ $row->movie_name }}</h5>
                                    <p>Lượt xem: {{ $view_nums[$row->movie_id] }} views</p>
                                </div>
                                <div class="rate">
                                    <p>
                                        @if ($rates[$row->movie_id] != null)
                                            {{ $rates[$row->movie_id] }}
                                        @else
                                            CXĐ
                                            @endif <i class="fa fa-star"></i>
                                    </p>
                                </div>
                                <div class="episode">
                                    <h8>Tập
                                        <p>{{ $episode_nums[$row->movie_id] }} / {{ $row->total_eps }} </p>
                                    </h8>
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


                <div class="row-2 mt-4">
                    <h5 class="text-light">PHIM VIỆT NAM</h5>
                </div>
                <div class="row-2">
                    <hr />
                </div>
                <div class="row" id="respon_card">
                    @foreach ($movie_v as $row)
                        {{-- <div class="col-3">
              <div class="row mt-4">
                <div class="col-xl-6"> --}}
                        <a href="/movie/movie-{{ $row->movie_id }}.html" class="ml-2 mt-3 mr-1">
                            <div class="card-style-1" id="respon">
                                <img src="{{ $row->url_image }}" alt="" />
                                <div class="infor">
                                    <h5>{{ $row->movie_name }}</h5>
                                    <p>Lượt xem: {{ $view_nums[$row->movie_id] }} views</p>
                                </div>
                                <div class="rate">
                                    <p>
                                        @if ($rates[$row->movie_id] != null)
                                            {{ $rates[$row->movie_id] }}
                                        @else
                                            CXĐ
                                            @endif <i class="fa fa-star"></i>
                                    </p>
                                </div>
                                <div class="episode">
                                    <h8>Tập
                                        <p>{{ $episode_nums[$row->movie_id] }} / {{ $row->total_eps }} </p>
                                    </h8>
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
                <div class="row-2 mt-4 mb-3" id="respon_card">
                    <a href="../movie-viet-nam" class="text-danger">Xem thêm >>></a>
                </div>
            </div>
            @include('frontend.master.fim_select')
        </div>
    </div>
    <!-- Script-Section -->
  

    <script type="text/javascript">
        $(document).ready(function() {
            $("#news-slider").owlCarousel({
                items: 6,
                navigation: true,
                navigationText: ["", ""],
                autoPlay: true
            });
        });

    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script> -->

    <script src="owlcarousel/owl-carousel/owl.carousel.min.js" crossorigin="anonymous">
    </script>

@endsection
