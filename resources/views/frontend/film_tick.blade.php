@extends('frontend.master.master')
@section('title', 'Danh sách phim đánh dấu')
@section('content')


    <div class="container">
        <div class="row-2 mt-4">
            <h5 class="text-light">DANH SÁCH PHIM </h5>

        </div>
        <div class="row-2">
            <hr />
        </div>
        <div class="row">
            <div class="col">

                <div class="row">
                    @foreach ($u_film as $row)
                        <a href="/movie/movie-{{ $row->movie_id }}.html" class="ml-2 mt-3 mr-1">
                            <div class="card-style-1" id="respon">
                                <img src="{{ $row->url_image }}" alt="" />
                                <div class="infor">
                                    <h5>{{ $row->movie_name }}</h5>
                                    <p>Lượt xem: {{ $view_nums[$row->movie_id] }} views</p>
                                </div>
                                <div class="rate">
                                    <p>@if ($rates[$row->movie_id] != null)
                                        {{ $rates[$row->movie_id] }}
                                        @else
                                        CXĐ
                                        @endif <i class="fa fa-star"></i>
                                    </p>
                                </div>
                                <div class="episode">
                                    <h8>Tập<p>{{ $episode_nums[$row->movie_id] }} / {{ $row->total_eps }}</p>
                                    </h8>
                                </div>
                                <div class="play">
                                    <i class="fa fa-play"></i>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="row-2 mt-4 mb-4">
                    <nav aria-label="Page navigation example">
                        {{ $u_film->links() }}
                    </nav>
                </div>
            </div>
            @include('frontend.master.fim_select')
        </div>
    </div>
    
@endsection
