
<div class="col-lg-4" >

    <!-- Hop phim -->
    @if(Session::has('name'))
    @if (isset($saved_movie) && $saved_movie!=null)
    <div class="tabs-UI row-2 mt-3">
        <div class="row mt-3">
        <h5 class="text-danger ml-3">Hộp phim</h5>
        </div>
        <div class="tab-items">
            <ul>
                <li class="tab-item">Phim đã lưu</li>
            </ul>
        </div>
        <div class="tab-contents">
            <ul>
                <li class="tab-content">
                    <div class="tab-list-movie">
                        <ul class="tab-movies">
                            <!-- Week view -->
                                @foreach ($saved_movie as $row)
                            <li class="tab-movie">
                                <a href="/movie/movie-{{ $row->movie_id }}.html">
                                    <div class="movie-poster">
                                        <img src="{{ $row->url_image }}" alt="">
                                    </div>
                                    <div class="movie-item">
                                        <div class="movie-name">
                                            <h5 class="my-text-truncate">{{ $row->movie_name }}</h5>
                                        </div>
                                        <div class="movie-detail">
                                            <span>View: {{$row->view==null?0:$row->view}}</span>
                                            <span>Rating: {{ round($row->rate==null?0:$row->rate,1) }}</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="tab-movie__line"></div>
                            </li>
                                @endforeach
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @endif
    @endif

    
    <!-- Top View -->
    <div class="tabs-UI row-2 mt-3 hasClick">
        <div class="row mt-3">
        <h5 class="text-danger ml-3">Top View</h5>
        </div>
        <div class="tab-items">
            <ul>
                <li class="tab-item tab--active">Week</li>
                <li class="tab-item">Month</li>
                <li class="tab-item">Year</li>
                <li class="tab-items__line"></li>
            </ul>
        </div>
        <div class="tab-contents">
            <ul>
                <li class="tab-content tab--active">
                    <div class="tab-list-movie">
                        <ul class="tab-movies">
                            <!-- Week view -->
                            @if (isset($week_views) && $week_views!=null)
                                @foreach ($week_views as $row)
                            <li class="tab-movie">
                                <a href="/movie/movie-{{ $row->movie_id }}.html">
                                    <div class="movie-poster">
                                        <img src="{{ $row->url_image }}" alt="">
                                    </div>
                                    <div class="movie-item">
                                        <div class="movie-name">
                                            <h5 class="my-text-truncate">{{ $row->movie_name }}</h5>
                                        </div>
                                        <div class="movie-detail">
                                            <span>View: {{ $row->week_views }}</span>
                                            <span>Rating: {{ round($row->rate==null?0:$row->rate,1) }}</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="tab-movie__line"></div>
                            </li>
                                @endforeach
                            @endif
                        </ul>
                        <ul class="tab-movies">
                            <!-- Month view -->
                            @if (isset($month_views) && $month_views!=null)
                                @foreach ($month_views as $row)
                            <li class="tab-movie">
                                <a href="/movie/movie-{{ $row->movie_id }}.html">
                                    <div class="movie-poster">
                                        <img src="{{ $row->url_image }}" alt="">
                                    </div>
                                    <div class="movie-item">
                                        <div class="movie-name">
                                            <h5 class="my-text-truncate">{{ $row->movie_name }}</h5>
                                        </div>
                                        <div class="movie-detail">
                                            <span>View: {{ $row->month_views }}</span>
                                            <span>Rating: {{ round($row->rate==null?0:$row->rate,1) }}</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="tab-movie__line"></div>
                            </li>
                                @endforeach
                            @endif
                        </ul>
                        <ul class="tab-movies">
                            <!-- Year view -->
                            @if (isset($year_views) && $year_views!=null)
                                @foreach ($year_views as $row)
                            <li class="tab-movie">
                                <a href="/movie/movie-{{ $row->movie_id }}.html">
                                    <div class="movie-poster">
                                        <img src="{{ $row->url_image }}" alt="">
                                    </div>
                                    <div class="movie-item">
                                        <div class="movie-name">
                                            <h5 class="my-text-truncate">{{ $row->movie_name }}</h5>
                                        </div>
                                        <div class="movie-detail">
                                            <span>View: {{ $row->year_views }}</span>
                                            <span>Rating: {{ round($row->rate==null?0:$row->rate,1) }}</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="tab-movie__line"></div>
                            </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <br>
    @if ($ads_banner2!=null)
        @foreach ($ads_banner2 as $row)
          <div class="row-2 mt-3" style="width:100%;">
              <a href="{{ $row->link_banner }}"><img src="{{ $row->url_banner }}" style="width:100%; height:auto;"  alt=""/></a>  
          </div>
        @endforeach
    @endif
   
</div>