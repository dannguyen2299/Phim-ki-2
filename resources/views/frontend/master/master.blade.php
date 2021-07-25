
<?php header("Content-Type: application/xml; charset=utf-8"); ?>
<!DOCTYPE html>
<html lang="en">
<?php

use Illuminate\Support\Facades\Session;
?>

<!-- ajax live search -->
<?php

// $DS = DIRECTORY_SEPARATOR;
// file_exists(__DIR__ . $DS . 'core' . $DS . 'Handler.php') ? require_once __DIR__ . $DS . 'core' . $DS . 'Handler.php' : die('Handler.php not found');
// file_exists(__DIR__ . $DS . 'core' . $DS . 'Config.php') ? require_once __DIR__ . $DS . 'core' . $DS . 'Config.php' : die('Config.php not found');

use App\Http\Controllers\live_search\Config;
use App\Http\Controllers\live_search\Handler;

if (session_id() == '') {
    session_start();
}

    $handler = new Handler();
    $handler->getJavascriptAntiBot();
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  <link rel="icon" href="{{asset('').'frontend/img/icon.png'}}" type="image/gif" sizes="16x16">
  <base href="{{ asset('').'frontend/' }}">
  <link rel="stylesheet" href="style.css" />
  {{-- <link href="css/style.css" rel="stylesheet" type="text/css" /> --}}

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" /> -->
  <link rel="stylesheet" href="owlcarousel/owl-carousel/owl.carousel.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <link href="font-awesome/css/font-awesome.min.css"  rel="stylesheet" type="text/css" />

  <script src="js/jquery.min.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  {{-- {{ asset("frontend/plugins/Ajax_live_search/img/green_loader.gif") }} --}}

  <!-- Live Search Styles -->
  <link rel="stylesheet" href="plugins/Ajax_live_search/css/animation.css">
  <link rel="stylesheet" type="text/css" href="plugins/Ajax_live_search/css/ajaxlivesearch.css">

  </head>

<body>
  <header>
    <div class="container" style="padding: 0 !important">
      <nav class="navbar navbar-expand-lg navbar-light">
        {{-- <a class="navbar-brand text-danger" href="{{ URL::to('') }}">1080+</a> --}}
        {{-- <a class="navbar-brand text-danger" href="{{ URL::to('') }}"> --}}
          <img src="{{asset('').'frontend/img/logo.png'}}" class="mb-2 mr-4" width="60px" height="40px";alt="">
        {{-- </a> --}}
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
              <div class="dropdown-menu row" style="background-color: #181818;" aria-labelledby="navbarDropdown">
                
                @foreach($category_l as $row)
                

                  <a class="dropdown-item text-light pt-2 pl-4 pb-2" href="../filter/category-{{ $row->category_id }}">{{ $row->category_name }}</a>
            

                @endforeach

              </div>

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Quốc gia
              </a>
              <div class="dropdown-menu" style="background-color: #181818 " aria-labelledby="navbarDropdown">

                @foreach ($nation as $row )

                <a class="dropdown-item text-light pt-2 pl-4 pb-2" href="../filter-nation/nation-{{ $row->nation_id }}">{{ $row->nation_name }}</a>

                @endforeach
            </li>
            <li class="nav-item active">
              <a class="nav-link text-light" href="#">Top Idmb <span class="sr-only">(current)</span></a>
            </li>
            @if(Session::has('name'))
            <li class="nav-item active">
              <a class="nav-link text-danger" href="../film_tick">Hộp phim<span class="sr-only">(current)</span></a>
            </li>
            @endif
          </ul>

            {{ csrf_field() }}
            
            <!-- Search Form Demo -->
            <div style="clear: both; position: relative;">
              <input type="text" class='mySearch' id="ls_query" placeholder="Tìm kiếm phim ..." style="padding-left: 40px">
              <button id="search" class="btn my-2 my-sm-0 rounded-pill" style="position: absolute; top: -2px; left: 2px">
                <i class="fa fa-search text-danger"></i>
              </button> 
            </div>

          <!-- </form> -->
          <ul class="navbar-nav" >
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
            <a class="pl-2 text-danger" href="{{route('login')}}" style="font-size: 28px; margin-left: 5px;margin-top: -3px;"><i class="fa fa-user"></i></a>  
            @endif

            </li>
           
        
          </ul>
           
        
         
         

        </div>
      </nav>
    </div>
  </header>

  @yield('content');
  @include('frontend.footer')
  
</body>


<!-- /// Đây là Script của youtube -->
@yield('youtube_video')

<!-- /// Đây là script của Ajax live search -->
@include('frontend.plugins.ajaxlivesearch')
<!-- /// Search Form Demo -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="plugins/Ajax_live_search/js/jquery-1.11.1.min.js"></script> -->

<!-- Live Search Script -->
<!-- <script type="text/javascript" src="plugins/Ajax_live_search/js/ajaxlivesearch.js"></script> -->


<script>

$(document).ready(function(){
    jQuery(".mySearch").ajaxlivesearch({
        loaded_at: <?php echo time(); ?>,
        token: <?php echo "'" . $handler->getToken() . "'"; ?>,
        max_input: <?php echo Config::getConfig('maxInputLength'); ?>,
        onResultClick: function(e, data) {
            // get the index 0 (first column) value
            var selectedOne = jQuery(data.selected).find('td').eq('0').text();

            // set the input value
            jQuery('#ls_query').val(selectedOne);

            // hide the result
            jQuery("#ls_query").trigger('ajaxlivesearch:hide_result');
        },
        onResultEnter: function(e, data) {
            // do whatever you want
            // jQuery("#ls_query").trigger('ajaxlivesearch:search', {query: 'test'});
        },
        onAjaxComplete: function(e, data) {

        }
    });
})
</script>

</html> 