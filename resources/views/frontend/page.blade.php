@extends('frontend.master.master')
@section('title', 'Page_Movie')
@section('content')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0"
        nonce="ifGS9jp0"></script>
    <div class="container">
        <div class="row-2 mt-4">
            <h5 class="text-light">THÔNG TIN PHIM</h5>
        </div>
        <div class="row-2">
            <hr />
        </div>
        <div class="row">
            <div class="col">
                <div class="row">

                    <div class="col-xl-4">
                        @if ($movie_page3!=null)
                            <a href="../movie/page-movie-{{ $movie_detail->movie_id }}&episode-{{ $movie_page3->episode_id }}&server-{{ 1 }}.html">
                        @else
                            <a href="../movie/page-movie-{{ $movie_detail->movie_id }}&episode-{{ 0 }}&server-{{ 1 }}.html">
                        @endif 
                            <div class="card-style-1 ">
                                <img src="{{ $movie_detail->url_image }}" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-8 mt-3">
                        <table id="">
                            <tr>
                                <td style="width:100px">
                                    <h6 class="text-secondary">TÊN PHIM: </h6>
                                </td>
                                <td>
                                    <h6 class="text-danger">{{ $movie_detail->movie_name }}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:100px"></td>
                                <td><small class="text-secondary">Sunny and flower</h6></small>
                            </tr>
                            <tr>
                                <td style="width:100px">
                                    <h6 class="text-secondary mt-2">Trạng thái: </h6>
                                </td>
                                <td>
                                    <h6 class="text-danger mt-2">{{ $episode_nums[$movie_detail->movie_id] }} /
                                        {{ $movie_detail->total_eps }} tập</h6>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:100px">
                                    <h6 class="text-secondary mt-2">Quốc gia: </h6>
                                </td>
                                <td>
                                    <h6 class="text-danger mt-2"> {{ $movie_detail->nation_name }}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:100px">
                                    <h6 class="text-secondary mt-2">Đạo diễn: </h6>
                                </td>
                                <td>
                                    <h6 class="text-danger mt-2">Ngô Thanh Hà</h6>
                                </td>
                            </tr>

                            <tr>
                                <td style="width:100px">
                                    <h6 class="text-secondary mt-2">Thể loại: </h6>
                                </td>
                                <td style="width:300px">
                                    <h6 class="text-danger mt-2">
                                        @foreach ($movie_cat as &$row)
                                            {{ $row->category_name }}

                                        @endforeach
                                    </h6>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="3">
                                    @if ($movie_page3!=null)
                                    <a href="../movie/page-movie-{{ $movie_detail->movie_id }}&episode-{{ $movie_page3->episode_id }}&server-{{ 1 }}.html"
                                        class="btn btn-danger mt-3">XEM PHIM</a>
                                     @else
                                        <a href="../movie/page-movie-{{ $movie_detail->movie_id }}&episode-{{ 0 }}&server-{{ 1 }}.html"
                                        class="btn btn-danger mt-3">XEM PHIM</a>
                                     @endif
                                    <a href="" class="btn btn-outline-success mt-3 ml-3 mr-3">DOWNLOAD</a>
                                    @if(Session::has('user_id'))

                            @if($follow==2){
                              <a href="../movie/In_follow-{{ $movie_detail->movie_id }}&{{ $dan_user_id }}"class="btn btn-warning mt-3 "> THEO DÕI</a> //ko ton tai trong bang 
                            }
                            @elseif ($follow==1){
                              <a href="../movie/Dele_follow-{{ $movie_detail->movie_id }}&{{ $dan_user_id }}"class="btn btn-warning mt-3 "> ĐÃ THEO DÕI</a> // co trong bang movie_detail  và follow=1
                            }
                            @elseif ($follow==0){
                              <a href="../movie/B_follow-{{ $movie_detail->movie_id }}&{{ $dan_user_id }}"class="btn btn-warning mt-3 "> THEO DÕI</a>// co trong bảng nhưng follow =0
                            }
                            @endif
                        @endif
                        {{--  <a href=""class="btn btn-warning mt-3 "> THEO DÕI</a>  --}}
                                </td>
                            </tr>
                        </table>
                    </div>
                  </a>
                
                </div>
               
                <div class="row-2 pt-4 mt-2">
                    <h5 class="text-danger">ĐÁNH GIÁ PHIM</h5>
                    <div class="row">
                        <ul class="list-inline col rating" title="Average Rating">
                            @for ($count = 1; $count <= 10; $count++)

                                @php
                                    if ($count <= $rates[$movie_detail->movie_id]) {
                                        $color = 'color:#ffcc00;';
                                    } else {
                                        $color = 'color:#ccc;';
                                    }

                                    if ($count <= 2) {
                                        $tils = 'Không hay!';
                                    } elseif ($count > 2 && $count <= 5) {
                                        $tils = 'Bình thường!';
                                    }elseif ($count > 5 && $count <= 8) {
                                        $tils = 'Hay!';
                                    } else {
                                        $tils = 'Rất hay';
                                    }

                                @endphp

                                <li title="{{$tils}}" id="{{ $movie_detail->movie_id }}-{{ $count }}"
                                    data-index="{{ $count }}" data-product_id="{{ $movie_detail->movie_id }}"
                                    data-rating="{{ $rates[$movie_detail->movie_id] }}" class="ml-2 ratess"
                                    style="cursor:pointer; display: inline-block; {{ $color }}; font-size:25px; ">
                                    &#9733;
                                </li>

                            @endfor
                        </ul>
                        <p class="text-warning mt-2 col-md-3"> {{ $user_rates[$movie_detail->movie_id] }} người đã đánh
                            giá</p>
                    </div>
                </div>
                <div class="row-2 mt-3">
                    <h5 class="text-danger">NỘI DUNG PHIM</h5>
                </div>
                <div class="row-2">
                    <p class="text-secondary">{{ $movie_detail->introduce }}</p>
                </div>

                <div class="row-2 mb-4">
                    <h5 class="text-danger">TRAILER</h5>
                </div>
                <div class="row-2">
                    <iframe width="100%" height="315" src="{{ $movie_detail->url_trailer }}" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="row-2 mt-3 mb-3">
                    <h5 class="text-danger">BÌNH LUẬN PHIM</h5>
                </div>
                <div class="row-2 ">
                    {{-- <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque pariatur velit temporibus provident magni qui illum adipisci nam et, ullam veritatis doloremque libero saepe expedita illo maiores sed, officia ipsum, quisquam placeat? Doloremque numquam tenetur minima dolorum quibusdam, sapiente voluptatem in architecto deleniti modi omnis eveniet molestias illo consequatur sit obcaecati voluptatum fugiat possimus. Expedita nemo delectus labore sed repellat magnam, voluptas tenetur? Ipsum ut alias deserunt doloribus nesciunt architecto atque impedit minus quia sint ipsam libero, nobis tempore sapiente cupiditate omnis dolorum tenetur quo molestias quod illo. Corrupti hic quia magnam quod qui ratione praesentium officia fugit, vero at!</p> --}}
                    <div class="fb-comments bg-light" data-href="{{ $movie_detail->url_cmt_fb }}" data-width="100%"
                        data-numposts="7"></div>
                    {{--  --}}
                </div>
                <div class="row-2 mt-3">
                    <h5 class="text-danger">PHIM CÙNG QUỐC GIA</h5>
                </div>
                <div class="row">
                    @foreach ($movie_nation as $row)
                        <div class="col-3">
                            <div class="row mt-4">
                                <div class="col-xl-6">
                                    <a href="../movie/movie-{{ $row->movie_id }}.html" class="ml-2 mt-3 mr-1">
                                        <div class="card-style-1" id="respon">
                                            <img src="{{ $row->url_image }}" alt="" />
                                            <div class="infor">
                                                <h5>{{ $row->movie_name }}</h5>
                                                <p>Lượt xem: {{ $view_nums[$row->movie_id] }} views</p>
                                            </div>
                                            <div class="rate">
                                                <p>8.5 <i class="fa fa-star"></i></p>
                                            </div>
                                            <div class="episode">
                                                <h8>Tập
                                                    <p>{{ $episode_nums[$row->movie_id] }} / {{ $row->total_eps }} tập
                                                    </p>
                                                </h8>
                                            </div>
                                            <div class="play">
                                                <i class="fa fa-play"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    @endforeach
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- Script-Section -->

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous">
    </script>

    @if (Session::has('user_id'))
        <script type="text/javascript">
            $(".ratess").click(function(event) {

                event.preventDefault();

                var index = $(this).data("index");
                var product_id = $(this).data('product_id');
                
                $.ajax({
                    url: "/processRate",
                    type: "POST",
                    data: {
                        index: index,
                        product_id: product_id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        // console.log(response);
                        if (response) {
                            alert("Đánh giá thành công "+index +" sao trên 10 sao");
                        }
                    },
                });

            });

            $(document).ready(function() {
                function remove_background(product_id) {
                    for (var count = 1; count <= 10; count++) {
                        $('#' + product_id + '-' + count).css('color', '#ccc');
                    }
                }

                //hover chuột đánh giá sao
                $(document).on('mouseenter', '.ratess', function() {
                    var index = $(this).data('index');
                    var product_id = $(this).data('product_id');

                    remove_background(product_id);

                    for (var count = 1; count <= index; count++) {
                        $('#' + product_id + '-' + count).css('color', '#ffcc00');
                    }
                });

                //nhả chuột k đánh giá
                $(document).on('mouseleave', '.ratess', function() {
                    var index = $(this).data("index");
                    var product_id = $(this).data('product_id');
                    var rating = $(this).data("rating");

                    remove_background(product_id);

                    for (var count = 1; count <= rating; count++) {
                        $('#' + product_id + '-' + count).css('color', '#ffcc00');
                    }
                });

            });

        </script>
    @endif
@endsection
