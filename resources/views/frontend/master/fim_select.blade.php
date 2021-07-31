
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

    <div class="tabs-UI row-2 mt-3">
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
                            <!-- Day view -->
                            @if (isset($week_views) && $week_views!=null)
                                @foreach ($week_views as $row)
                            <li class="tab-movie">
                                <a href="">
                                    <div class="movie-poster">
                                        <img src="{{ $row->url_image }}" alt="">
                                    </div>
                                    <div class="movie-item">
                                        <div class="movie-name">
                                            <h5 class="my-text-truncate">{{ $row->movie_name }}</h5>
                                        </div>
                                        <div class="movie-detail">
                                            <span>Week View: {{ $row->week_views }}</span>
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
                            <!-- Day view -->
                            @if (isset($month_views) && $month_views!=null)
                                @foreach ($month_views as $row)
                            <li class="tab-movie">
                                <a href="">
                                    <div class="movie-poster">
                                        <img src="{{ $row->url_image }}" alt="">
                                    </div>
                                    <div class="movie-item">
                                        <div class="movie-name">
                                            <h5 class="my-text-truncate">{{ $row->movie_name }}</h5>
                                        </div>
                                        <div class="movie-detail">
                                            <span>Month View: {{ $row->month_views }}</span>
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
                            <!-- Day view -->
                            @if (isset($year_views) && $year_views!=null)
                                @foreach ($year_views as $row)
                            <li class="tab-movie">
                                <a href="">
                                    <div class="movie-poster">
                                        <img src="{{ $row->url_image }}" alt="">
                                    </div>
                                    <div class="movie-item">
                                        <div class="movie-name">
                                            <h5 class="my-text-truncate">{{ $row->movie_name }}</h5>
                                        </div>
                                        <div class="movie-detail">
                                            <span>Year View: {{ $row->year_views }}</span>
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
    @if ($ads_banner2!=null)
        @foreach ($ads_banner2 as $row)
          <div class="row-2 mt-3" style="width:250px;">
              <a href="{{ $row->link_banner }}"><img src="{{ $row->url_banner }}" style="width:100%; height:auto;"  alt=""/></a>  
          </div>
        @endforeach
    @endif
   
</div>