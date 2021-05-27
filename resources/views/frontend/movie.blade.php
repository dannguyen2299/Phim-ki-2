@extends('frontend.master.master')
@section('title','Movie')
@section('content')

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="ifGS9jp0"></script>
   
    <div class="container">
      <div class="row-2 mt-4">
        <h5 class="text-light">TRÌNH CHIẾU PHIM</h5>
      </div>
      <div class="row-2">
        <hr />
      </div>
      <div class="row">
        <div class="col">
          <div class="row-2">
            <table>
    
                <tr>
                  <td style="width:100px"><h6 class="text-secondary">TÊN PHIM: </h6></td>
                  <td><h6 class="text-danger">{{ $movie_detail->movie_name }}</h6></td>
                </tr>
                <tr>
                  <td style="width:100px"><h6 class="text-secondary mt-2">Quốc gia: </h6></td>
                  <td><h6 class="text-danger mt-2">{{ $movie_detail->nation_name }}</h6></td>
                </tr>
            </table>
          </div>
            <div class="row-2 mt-3">
              @if ($server==1)
                @if ( $movie_page3==null)
                  <iframe width="100%" height="315"       
                  src="a.html" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @else
                  <iframe width="100%" height="315"       
                  src="{{ $movie_page3->url_first }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @endif
               
              @elseif ($server==2)
                  @if ( $movie_page3==null)
                  <iframe width="100%" height="315"       
                  src="a.html" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @else
                  <iframe width="100%" height="315"       
                  src="{{ $movie_page3->url_second }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @endif
           
              @endif
              
            </div>
            <div class="row-2 mt-4">
              <h5 class="text-danger">LINK DỰ PHÒNG</h5>
            </div>
            <div class="row-2 mt-4">
              
                @foreach ($movie_page4 as $row1)
                  @if ($movie_page4==null)
                    <a href="1.html" class="btn-success btn">Server #1</a>
                    <a href="2.html" class="btn-success btn">Server #2</a>
                  {{-- @else --}}
                  @elseif ($episode_id==$row1->episode_id)
                    
                       <a href="../movie/page-movie-{{ $row1->movie_id }}&{{ $row1->episode_id }}&{{ 1 }}.html" class="btn-success btn">Server #1</a>
                       <a href="../movie/page-movie-{{ $row1->movie_id }}&{{ $row1->episode_id }}&{{ 2 }}.html" class="btn-success btn">Server #2</a>

                    
                 
                    
                    <a href="" class="btn-warning btn">Báo lỗi</a>
                  @endif
 
              
              @endforeach
          
            </div>
            <div class="row-2 mt-4">
              <h5 class="text-danger">TẬP PHIM</h5>
            </div>
            <div class="row-2">
              
              
          
                @foreach ($movie_page4 as $row1)
     
                    <a style="width: 50px;"href="../movie/page-movie-{{ $row1->movie_id }}&{{ $row1->episode_id }}&{{ 1 }}.html" class="btn bg-danger mr-2 mt-2">{{ $row1->episode_name }}</a>
           
                   
                   @endforeach
                   
                  
                 
              
            </div>
            <div class="row-2 mt-3">
              <h5 class="text-danger">BÌNH LUẬN PHIM</h5>
            </div>
            <div class="row-2">
              {{-- <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque pariatur velit temporibus provident magni qui illum adipisci nam et, ullam veritatis doloremque libero saepe expedita illo maiores sed, officia ipsum, quisquam placeat? Doloremque numquam tenetur minima dolorum quibusdam, sapiente voluptatem in architecto deleniti modi omnis eveniet molestias illo consequatur sit obcaecati voluptatum fugiat possimus. Expedita nemo delectus labore sed repellat magnam, voluptas tenetur? Ipsum ut alias deserunt doloribus nesciunt architecto atque impedit minus quia sint ipsam libero, nobis tempore sapiente cupiditate omnis dolorum tenetur quo molestias quod illo. Corrupti hic quia magnam quod qui ratione praesentium officia fugit, vero at!</p> --}}
              <div class="fb-comments bg-light" data-href="{{ $movie_detail->url_cmt_fb }}" data-width="100%" data-numposts="7"></div>

            </div>
            <div class="row-2 mt-3">
              <h5 class="text-danger">PHIM CÙNG QUỐC GIA</h5>
            </div>
            <div class="row">
              @foreach ($movie_nation as $row )
              <div class="col-3">
                <div class="row mt-4">
                  <div class="col-xl-6">
                    <a href="../movie/movie-{{ $row->movie_id }}.html" class="ml-2 mt-3 mr-1">
                      <div class="card-style-1"  id="respon">
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
                            <p>{{$episode_nums[$row->movie_id]}} / {{$row->total_eps}} tập</p>
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
    <script type="text/javascript">
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