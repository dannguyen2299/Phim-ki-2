@extends('frontend.master.master')
@section('title','Movie')
@section('content')
 
    <div class="container login">
      <div class="row-2 mt-4">
        <h5 class="text-light">ĐĂNG NHẬP VÀO HỆ THỐNG
           
        </h5>
      </div>
      <div class="row-2">
        <hr />
      </div>
     
      <div class="row-2 mt-4 ">

          <a href="/processLogin/facebook" style="background-color: #3b579d; width: 40%; text-align: start" class="btn">Kết nối với facebook</a>
      </div>
      <div class="row-2 mt-3">
        <form action="{{URL::to('processLogin')}}" method="post">
          {{csrf_field()}}
           <table>
            <tr>
              <td><p class="text-secondary mr-3">Tên đăng nhập: </p></td>
              <td>
                <div class="input-group mb-3">
                  <input type="email" class="form-control bg-dark text-light" style="height: 35px;width: 300px;" placeholder="Username" name="email" aria-describedby="basic-addon1">
                </div>
              </td>
            </tr>
            <tr>
              <td><p class="text-secondary mr-3">Mật khẩu: </p></td>
              <td>
                <div class="input-group mb-3">
                  <input type="password" class="form-control bg-dark text-light" style="height: 35px;width: 300px;" placeholder="Password" name="password" aria-describedby="basic-addon1">
                </div>
              </td>
            </tr>
            <tr>
              <td><button  type="submit"class="btn btn-danger">Login</button></td>
              <td>
                <a href="" class="text-warning">Quên mật khẩu?</a>
              </td>
            </tr>
          </table>
        </form>
      </div>
      
      <div class="row" style="height: 31vh">
        <p class="text-danger mt-4 ml-2">
          @If (Session::has('error'))
            {{Session::get('error')}}
          @endIf
        </p>
      </div>
    </div>

      <!-- Script-Section -->
      <footer >  
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