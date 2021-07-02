@extends('frontend.master.master')
@section('title','Search')
@section('content')
  

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
            @if ( $search_movie1<=0 )
              <p style="color:red;">Không tìm thấy phim "{{ $keywords }}".</p>
            @else
           
            @foreach ($search_movie as $row )
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
            @endif
          </div>
         
        
          <div class="row-2 mt-4 mb-4">
           
            <nav aria-label="Page navigation example">
              {{ $search_movie->links() }}
            
            </nav>
            
          </div>
        </div>
       @include('frontend.master.fim_select')
      </div>
    </div>
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