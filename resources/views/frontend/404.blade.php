@extends('frontend.master.master')
@section('title','404')
@section('content')
 

    <div class="container">
      <div class="row-2 mt-4">
        <h5 class="text-light">TRANG NÀY BỊ LỖI | 404 NOT FOUND
           
        </h5>
      </div>
      <div class="row-2">
        <hr />
      </div>
      <div class="row" style="height:58vh">
       
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