<?php header("Content-Type: application/xml; charset=utf-8"); ?>
<!DOCTYPE html>
<html lang="en">
<?php

use Illuminate\Support\Facades\Session;
?>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" /> -->
  <title>@yield('title')</title>
  <link rel="icon" href="{{asset('').'frontend/img/icon.png'}}" type="image/gif" sizes="16x16">
  <base href="{{ asset('').'frontend/' }}">
  <link rel="stylesheet" href="style.css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>

  </head>

<body>
  <header>
    <div class="container" style="padding: 0 !important">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-danger" href="{{ URL::to('') }}">1080+</a>
        <button class="navbar-toggler" jm type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-light" href="{{ URL::to('') }}">Trang chủ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Thể loại
              </a>
              <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                @foreach($category_l as $row)

                <a class="dropdown-item text-light" href="../filter/category-{{ $row->category_id }}">{{ $row->category_name }}</a>

                @endforeach

              </div>

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Quốc gia
              </a>
              <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">

                @foreach ($nation as $row )

                <a class="dropdown-item text-light" href="../filter-nation/nation-{{ $row->nation_id }}">{{ $row->nation_name }}</a>

                @endforeach
            </li>
            @if(Session::has('name'))
            <li class="nav-item active">
              <a class="nav-link text-light" href="../film_tick">Phim đánh dấu<span class="sr-only">(current)</span></a>
            </li>
            @endif
            <li class="nav-item active">
              <a class="nav-link text-light" href="#">Top IMDB <span class="sr-only">(current)</span></a>
            </li>
          </ul>


          <form class="form-inline my-2 my-lg-0" method="POST" action="{{ URL::to('/search') }}">
            {{ csrf_field() }}
            
            <input class="form-control mr-sm-2 rounded-pill bg-dark text-light typeahead" name="keywords_submit" type="search" placeholder="Tìm kiếm" aria-label="Search" style="width: 250px; height:30px" onkeyup="showResult1(this.value)"/>
            <input type="submit" name="submit" class="fa fa-search" hidden>
            <div id="autocom-box" class="text-light"></div>
             <button
             id="search"
                class="btn my-2 my-sm-0 rounded-pill"
              
                
              >
                <i class="fa fa-search text-danger"></i>
              </button> 
          </form>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown"> 
               @if (Session::has('name'))
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="avatar"src="https://i.pinimg.com/236x/24/21/85/242185eaef43192fc3f9646932fe3b46.jpg" alt="">
                </a>
                <div class="dropdown-menu bg-dark" style="width: 200px;" aria-labelledby="navbarDropdown">
                  <p class="pl-4 text-light"><span class="text-warning">Tên:</span> {{Session::get('name')}}</p>
                  
                <a href="/logout" class="dropdown-item text-light">Đăng xuất</a>
                  @if (Session::get('role_id') !=3 )
                <a href="/admin_1" class="dropdown-item text-light">Admin Page</a>
                      
                  
                      
                  @endif
              </div>
              @else
            <a class="btn btn-outline-warning pl-2" href="{{route('login')}}" style="height: 30px; padding-top:2px  !important; border-radius:7px">Đăng nhập</a>  
            @endif

            </li>
           
        
          </ul>
           
        
         
         

        </div>
      </nav>
    </div>
  </header>

  @yield('content');

</body>
@yield('youtube_video')
</html>