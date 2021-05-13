
  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" /> -->
    <title>@yield('title')</title>
    <base href="{{ asset('').'frontend/' }}">
    <link rel="stylesheet" href="style.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-1.12.4.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <div class="row-2 mt-4">
        <h5 class="text-light">ĐĂNG NHẬP VÀO HỆ THỐNG
           
        </h5>
      </div>
      <div class="row-2">
        <hr />
      </div>
      <div class="row-2">
          <h3 class="text-danger">1080+</h3>
          <p class="text-light">Sign Up</p>
          <a style="background-color: #3b579d;" class="btn">Kết nối với facebook</a>
      </div>
      <div class="row-2 mt-3">
        <form action="" method="post">
           <table>
            <tr>
              <td><p class="text-secondary mr-3">Tên đăng nhập: </p></td>
              <td>
                <div class="input-group mb-3">
                  <input type="text" class="form-control bg-dark" style="height: 35px;width: 300px;" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </td>
            </tr>
            <tr>
              <td><p class="text-secondary mr-3">Email: </p></td>
              <td>
                <div class="input-group mb-3">
                  <input type="email" class="form-control bg-dark" style="height: 35px;width: 300px;" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </td>
            </tr>
            <tr>
              <td><p class="text-secondary mr-3">Mật khẩu: </p></td>
              <td>
                <div class="input-group mb-3">
                  <input type="password" class="form-control bg-dark" style="height: 35px;width: 300px;" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </td>
            </tr>
            <tr>
              <td><p class="text-secondary mr-3">Xác nhận mật khẩu: </p></td>
              <td>
                <div class="input-group mb-3">
                  <input type="password" class="form-control bg-dark" style="height: 35px;width: 300px;" placeholder="Repeat Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2"><a href="" class="btn btn-success">Đăng ký</a></td>
             
            </tr>
          </table>
        </form>
      </div>
      <!-- <div class="row" style="height: 11vh"></div> -->
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
  </body>
  </html>
  