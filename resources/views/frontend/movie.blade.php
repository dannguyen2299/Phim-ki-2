@extends('frontend.master.master')
@section('title', 'Xem phim')
@section('content')


    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0"
        nonce="ifGS9jp0"></script>

    <div class="container">

        <div class="row-2">     
            <h5 class="text-danger mt-3">TRÌNH CHIẾU PHIM</h5>                  
        </div>

        <div class="row-2 mt-1">

            @foreach ($movie_page4 as $row1)
                @if ($movie_page4 == null)

                    <a href="1.html" class="btn-danger btn" style="padding: 2px 5px !important">Server #1</a>
                    <a href="2.html" class="btn-danger btn" style="padding: 2px 5px !important">Server #2</a>


                    {{-- @else --}}
                @elseif ($episode_id==$row1->episode_id)
                    @if ($server == 1)
                        <a href="../movie/page-movie-{{ $row1->movie_id }}&episode-{{ $row1->episode_id }}&server-{{ 1 }}.html"
                            class="btn-danger btn" style="padding: 2px 5px !important">Server #1</a>
                        <a href="../movie/page-movie-{{ $row1->movie_id }}&episode-{{ $row1->episode_id }}&server-{{ 2 }}.html"
                            class="btn-outline-danger btn" style="padding: 2px 5px !important">Server #2</a>
                    @else
                        <a href="../movie/page-movie-{{ $row1->movie_id }}&episode-{{ $row1->episode_id }}&server-{{ 1 }}.html"
                            class="btn-outline-danger btn" style="padding: 2px 5px !important">Server #1</a>
                        <a href="../movie/page-movie-{{ $row1->movie_id }}&episode-{{ $row1->episode_id }}&server-{{ 2 }}.html"
                            class="btn-danger btn" style="padding: 2px 5px !important">Server #2</a>
                    @endif
                    {{-- <a href="../admin_1/in_report&episode-{{ $row1->episode_id }}" onclick="confirmDelete(this);" class="btn-warning btn">Báo lỗi</a> --}}
                    {{-- <button type="button" class="btn btn-warning" data-id="#" onclick="confirmDelete(this);">Báo lỗi</button> --}}
                    @if (Session::has('dan_error') && Session::get('dan_err_episode') == $row1->episode_id){
                        <button type="button" class="btn btn-warning" data-toggle="modal">Đã báo lỗi</button>
                    }@else{
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter"
                            style="padding: 2px 10px !important">
                            Báo lỗi</button>
                        }
                    @endif

                @endif
            @endforeach
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <form action="../movie/error_message" method="POST" style="width:400px;">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Báo cáo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="text" name="content"
                                    style="width:380px !important; border-top:none;border-left:none;border-right:none;"
                                    placeholder="Nhập báo cáo">
                            </div>
                            @foreach ($movie_page4 as $row1)
                                <input type="text" name="episode_id" style="display: none"
                                    value="{{ $row1->episode_id }}">
                            @endforeach
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                                <button type="submit" class="btn btn-danger">Gửi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <div class="row">

                    {{-- <table>  
                  <tr>
                    <td style="width:100px"><h6 class="text-secondary">TÊN PHIM: </h6></td>
                    <td><h6 class="text-danger">{{ $movie_detail->movie_name }}</h6></td>
                  </tr>
                  <tr>
                    <td style="width:100px"><h6 class="text-secondary mt-2">Quốc gia: </h6></td>
                    <td><h6 class="text-danger mt-2">{{ $movie_detail->nation_name }}</h6></td>
                  </tr>
              </table> --}}
                </div>
                <div class="row-2 mt-3">
                    @if ($server == 1)
                        @if ($movie_page3 != null)
                            <div id="player" video_id="{{ $movie_page3[0]->url_first }}"></div>
                        @else
                            <div id="player" video_id=""></div>
                        @endif
                    @elseif ($server==2)
                        @if ($movie_page3 != null)
                            <div id="player" video_id="{{ $movie_page3[0]->url_second }}"></div>
                        @else
                            <div id="player" video_id=""></div>
                        @endif
                    @endif

                </div>

            </div>
        </div>
    </div>


    <section style="background-color: #181818; height: auto;">
        <div class="container">
            <div class="row ">
                <div class="col-3">
                  
                    <div class=" mt-3 mb-3" >
                        <img src="{{ $movie_detail->url_image }}"style="border-radius: 10px" alt="" />
                    </div>
               
                </div>
                <div class="col-md-9 mt-4">
                    <table width="100%">
                        <tr>
                            <td style="width:100px">
                                <h6 class="text-secondary">TÊN PHIM: </h6>
                            </td>
                            <td>
                                <h6 style="line-height: 1.6" class="text-danger">{{ $movie_detail->movie_name }}</h6>
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
                          <td style="width:100px">
                            <h6 class="text-secondary mt-2">Nội dung: </h6>
                        </td>
                        <td>

                          <h6 class="text-secondary mt-2">{{ $movie_detail->introduce }} </h6>
                        </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row-2 mt-4" style="display: flex; flex-direction: column; align-items: center">
            <h5 class="text-danger"><u>TẬP PHIM</u></h5>
            <div class="">

              @foreach ($movie_page4 as $row1)
              @if ($movie_page3[0]->episode_id == $row1->episode_id)
                  <a style="width: 80px;"
                      href="../movie/page-movie-{{ $row1->movie_id }}&episode-{{ $row1->episode_id }}&server-{{ 1 }}.html"
                      class="btn btn-danger mr-2 mt-2">{{ $row1->episode_name }}</a>
  
              @else
                  <a style="width: 80px;"
                      href="../movie/page-movie-{{ $row1->movie_id }}&episode-{{ $row1->episode_id }}&server-{{ 1 }}.html"
                      class="btn btn-outline-danger mr-2 mt-2">{{ $row1->episode_name }}</a>
  
              @endif
          @endforeach
        </div>
        <h5 class="text-danger mt-4">BÌNH LUẬN PHIM</h5>
        </div>
        
        <div class="row-2 mt-3">
            {{-- <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque pariatur velit temporibus provident magni qui illum adipisci nam et, ullam veritatis doloremque libero saepe expedita illo maiores sed, officia ipsum, quisquam placeat? Doloremque numquam tenetur minima dolorum quibusdam, sapiente voluptatem in architecto deleniti modi omnis eveniet molestias illo consequatur sit obcaecati voluptatum fugiat possimus. Expedita nemo delectus labore sed repellat magnam, voluptas tenetur? Ipsum ut alias deserunt doloribus nesciunt architecto atque impedit minus quia sint ipsam libero, nobis tempore sapiente cupiditate omnis dolorum tenetur quo molestias quod illo. Corrupti hic quia magnam quod qui ratione praesentium officia fugit, vero at!</p> --}}
            <div class="fb-comments bg-light" data-href="{{ $movie_detail->url_cmt_fb }}" data-width="100%"
                data-numposts="7"></div>
        </div>
        <div class="row-2 mt-3">
            <h5 class="text-danger">PHIM CÙNG QUỐC GIA</h5>
        </div>
        <div class="row">
            @foreach ($movie_nation as $row)
               
                      
                            <a href="../movie/movie-{{ $row->movie_id }}.html" class="ml-2 mt-3 mr-1">
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
                                                10
                                                @endif<i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                    <div class="episode">
                                        <h8>Tập
                                            <p>{{ $episode_nums[$row->movie_id] }} / {{ $row->total_eps }}</p>
                                        </h8>
                                    </div>
                                    <div class="play">
                                        <i class="fa fa-play"></i>
                                    </div>
                                </div>
                            </a>
                     
                 


            @endforeach


        </div>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous">
    </script> -->

@endsection

@section('youtube_video')
    <script>
        var i = 0; //Bien dem thoi gian xem video
        //Lay video id
        var video_id = $('#player').attr('video_id');

        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '390',
                width: '640',
                // autoPlay:false,
                videoId: video_id,
                playerVars: {
                    'playsinline': 1
                },
                events: {
                    // 'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
            event.target.playVideo();
        }

        // 5. The API calls this function when the player's state changes.
        //    The function indicates that when playing a video (state=1),
        //    the player should play for six seconds and then stop.
        var bool = false;

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING && !bool) {
                time_id = setInterval(() => {
                    i++;
                    //* Sau 30*2=60s thi tinh 1 view
                    if (i == 2) { 
                        clearInterval(time_id);

                        $.post('/update-view', {
                            episode_id: <?php if ($movie_page3 == null) {
                                    echo 'd';
                                } else {
                                    echo $movie_page3[0]->episode_id;
                                } ?>,
                            _token: "{{ csrf_token() }}"
                        });

                        bool = true;
                    }
                }, 2000);
            }
            if (event.data == YT.PlayerState.PAUSED && !bool) {
                clearInterval(time_id);
            }
        }
    </script>
@endsection
