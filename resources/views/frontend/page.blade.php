@extends('frontend.master.master')
@section('title','Page_Movie')
@section('content')
    <header>
      <div class="container" style="padding: 0 !important">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand text-danger" href="#">1080+</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link text-light" href="#"
                  >Trang chủ <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-light"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Thể loại
                </a>
                <div
                  class="dropdown-menu bg-dark"
                  style="width: 470px !important"
                  aria-labelledby="navbarDropdown"
                >
                  <div class="row">
                    <div class="col-4">
                      <a class="dropdown-item text-light" href="#">Hành động</a>
                    </div>
                    <div class="col-4">
                      <a class="dropdown-item text-light" href="#">Tình cảm</a>
                    </div>
                    <div class="col-4">
                      <a class="dropdown-item text-light" href="#">Kinh dị</a>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-4">
                      <a class="dropdown-item text-light" href="#">Viễn tưởng</a>
                    </div>
                    <div class="col-4">
                      <a class="dropdown-item text-light" href="#">Chiến tranh</a>
                    </div>
                    <div class="col-4">
                      <a class="dropdown-item text-light" href="#">Phiêu lưu</a>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-4">
                      <a class="dropdown-item text-light" href="#">Cổ trang</a>
                    </div>
                    <div class="col-4">
                      <a class="dropdown-item text-light" href="#">Tâm lý</a>
                    </div>
                   
                  </div>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-light"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Quốc gia
                </a>
                <div
                  class="dropdown-menu bg-dark"
                  style="width: 470px !important"
                  aria-labelledby="navbarDropdown"
                >
                  <div class="row">
                    <div class="col-4">
                      <a class="dropdown-item text-light" href="#">Hàn quốc</a>
                    </div>
                    <div class="col-4">
                      <a class="dropdown-item text-light" href="#">Trung quốc</a>
                    </div>
                    <div class="col-4">
                      <a class="dropdown-item text-light" href="#">Việt nam</a>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-4">
                      <a class="dropdown-item text-light" href="#">Nước ngoài</a>
                    </div>
                    <div class="col-4">
                      <a class="dropdown-item text-light" href="#">Nhật bản</a>
                    </div>
                    
                  </div>
                </div>
              </li>
              <li class="nav-item active">
                <a class="nav-link text-light" href="#"
                  >Phim bộ <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item active">
                <a class="nav-link text-light" href="#"
                  >Phim lẻ <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item active">
                <a class="nav-link text-light" href="#"
                  >Top IMDB <span class="sr-only">(current)</span></a
                >
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input
                class="form-control mr-sm-2 rounded-pill bg-dark text-light"
                type="search"
                placeholder="Tìm kiếm"
                aria-label="Search"
                style="width: 250px; height:30px"
              />
              <!-- <button
                class="btn my-2 my-sm-0 rounded-pill"
                type="submit"
                
              >
                <i class="fa fa-search text-danger"></i>
              </button> -->
            </form>
            <a class="btn btn-outline-light pl-2" style="height: 30px;width: 70px; padding-top:2px  !important;">Login</a>
           
          </div>
        </nav>
      </div>
    </header>

    <div class="container">
      <div class="row-2 mt-4">
        <h5 class="text-light">THÔNG TIN PHIM</h5>
      </div>
      <div class="row-2">
        <hr />
      </div>
      <div class="row">
        <div class="col">
          <div class="row">
          
                <div class="col-xl-4">
                  <a href="">
                    <div class="card-style-1 ">
                      <img src="./img/l-1.jpg" alt=""/>
                    </div>
                  </a>
                
                </div>
                <div class="col-xl-8 mt-3">
                  <table id="">
                    <tr>
                      <td style="width:100px"><h6 class="text-secondary">TÊN PHIM: </h6></td>
                      <td><h6 class="text-danger">NẮNG VÀ HOA</h6></td>
                    </tr>
                    <tr>
                      <td style="width:100px"></td>
                      <td><small class="text-secondary">Sunny and flower</h6></small>
                    </tr>
                    <tr>
                      <td style="width:100px"><h6 class="text-secondary mt-2">Trạng thái: </h6></td>
                      <td><h6 class="text-danger mt-2">10/10 tập</h6></td>
                    </tr>
                    <tr>
                      <td style="width:100px"><h6 class="text-secondary mt-2">Quốc gia: </h6></td>
                      <td><h6 class="text-danger mt-2">Đông lào</h6></td>
                    </tr>
                    <tr>
                      <td style="width:100px"><h6 class="text-secondary mt-2">Đạo diễn: </h6></td>
                      <td><h6 class="text-danger mt-2">Ngô Thanh Hà</h6></td>
                    </tr>
                    <tr>
                      <td style="width:100px"><h6 class="text-secondary mt-2">Thể loại: </h6></td>
                      <td style="width:300px"><h6 class="text-danger mt-2">Huyền huyễn, Hành động, Kinh dị</h6></td>
                    </tr>
                 
                    <tr>
                      <td colspan="3"><a href="./movie.html"class="btn btn-danger mt-3">XEM PHIM</a>
                        <a href=""class="btn btn-outline-success mt-3 ml-3 mr-3">DOWNLOAD</a>
                        <a href=""class="btn btn-warning mt-3 ">THEO DÕI</a>
                      </td>
                    </tr>
                  </table>
                </div>
         
           
         
          </div>
        
          <div class="row-2 mt-5">
            <h5 class="text-danger">NỘI DUNG PHIM</h5>
          </div>
          <div class="row-2">
              <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, placeat eaque assumenda rerum quaerat aliquam pariatur, aliquid incidunt aspernatur obcaecati, harum minus exercitationem reiciendis velit. Aliquid accusantium voluptas autem sapiente maxime culpa suscipit quaerat error in iure placeat expedita commodi perferendis quibusdam eveniet, excepturi quasi est minus repellat fuga quia dignissimos doloribus! Officiis necessitatibus harum iste sed! Ea ducimus nemo ratione natus rerum beatae optio inventore eveniet, incidunt nobis eaque officia quos ullam deleniti fuga assumenda iste, voluptatibus possimus repellat?</p>
          </div>
          <div class="row-2">
            <h5 class="text-danger">BÌNH CHỌN</h5>
          </div>
          <div class="row-2">
            <h5 class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dolorum!</h5>
          </div>
          <div class="row-2">
            <h5 class="text-danger">TRAILER</h5>
          </div>
          <div class="row-2">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/Vdxp5H2vOdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="row-2">
            <h5 class="text-danger">BÌNH LUẬN PHIM</h5>
          </div>
          <div class="row-2">
            <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque pariatur velit temporibus provident magni qui illum adipisci nam et, ullam veritatis doloremque libero saepe expedita illo maiores sed, officia ipsum, quisquam placeat? Doloremque numquam tenetur minima dolorum quibusdam, sapiente voluptatem in architecto deleniti modi omnis eveniet molestias illo consequatur sit obcaecati voluptatum fugiat possimus. Expedita nemo delectus labore sed repellat magnam, voluptas tenetur? Ipsum ut alias deserunt doloribus nesciunt architecto atque impedit minus quia sint ipsam libero, nobis tempore sapiente cupiditate omnis dolorum tenetur quo molestias quod illo. Corrupti hic quia magnam quod qui ratione praesentium officia fugit, vero at!</p>
          </div>
          <div class="row-2">
            <h5 class="text-danger">PHIM CÙNG TÁC GIẢ</h5>
          </div>
          <div class="row-2">
            <div class="row mt-4">
              <div class="col-6">
                <div class="row">
                  <div class="col-xl-6">
                    <a href="./page.html">
                      <div class="card-style-1"  id="respon">
                        <img src="./img/l-1.jpg" alt="" />
                        <div class="infor">
                          <h5>Hoa và nắng</h5>
                          <p>Lượt xem: 2000 views</p>
                        </div>
                        <div class="rate">
                          <p>8.5 <i class="fa fa-star"></i></p>
                        </div>
                        <div class="episode">
                          <h8
                            >Tập
                            <p>10/10</p></h8
                          >
                        </div>
                        <div class="play">
                          <i class="fa fa-play"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-xl-6">
                    <a href="">
                      <div class="card-style-1" id="respon" >
                        <img src="./img/l-1.jpg" alt="" />
                        <div class="infor">
                          <h5>Hoa và nắng</h5>
                          <p>Lượt xem: 2000 views</p>
                        </div>
                        <div class="rate">
                          <p>8.5 <i class="fa fa-star"></i></p>
                        </div>
                        <div class="episode">
                          <h8
                            >Tập
                            <p>10/10</p></h8
                          >
                        </div>
                        <div class="play">
                          <i class="fa fa-play"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="row">
                  <div class="col-xl-6">
                    <a href="">
                      <div class="card-style-1" id="respon">
                        <img src="./img/l-1.jpg" alt="" />
                        <div class="infor">
                          <h5>Hoa và nắng</h5>
                          <p>Lượt xem: 2000 views</p>
                        </div>
                        <div class="rate">
                          <p>8.5 <i class="fa fa-star"></i></p>
                        </div>
                        <div class="episode">
                          <h8
                            >Tập
                            <p>10/10</p></h8
                          >
                        </div>
                        <div class="play">
                          <i class="fa fa-play"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-xl-6">
                    <a href="">
                      <div class="card-style-1 "id="respon">
                        <img src="./img/l-1.jpg" alt="" />
                        <div class="infor">
                          <h5>Hoa và nắng</h5>
                          <p>Lượt xem: 2000 views</p>
                        </div>
                        <div class="rate">
                          <p>8.5 <i class="fa fa-star"></i></p>
                        </div>
                        <div class="episode">
                          <h8
                            >Tập
                            <p>10/10</p></h8
                          >
                        </div>
                        <div class="play">
                          <i class="fa fa-play"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
           
            </div>
            <div class="row mt-4">
              <div class="col-6">
                <div class="row">
                  <div class="col-xl-6">
                    <a href="">
                      <div class="card-style-1"  id="respon">
                        <img src="./img/l-1.jpg" alt="" />
                        <div class="infor">
                          <h5>Hoa và nắng</h5>
                          <p>Lượt xem: 2000 views</p>
                        </div>
                        <div class="rate">
                          <p>8.5 <i class="fa fa-star"></i></p>
                        </div>
                        <div class="episode">
                          <h8
                            >Tập
                            <p>10/10</p></h8
                          >
                        </div>
                        <div class="play">
                          <i class="fa fa-play"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-xl-6">
                    <a href="">
                      <div class="card-style-1" id="respon" >
                        <img src="./img/l-1.jpg" alt="" />
                        <div class="infor">
                          <h5>Hoa và nắng</h5>
                          <p>Lượt xem: 2000 views</p>
                        </div>
                        <div class="rate">
                          <p>8.5 <i class="fa fa-star"></i></p>
                        </div>
                        <div class="episode">
                          <h8
                            >Tập
                            <p>10/10</p></h8
                          >
                        </div>
                        <div class="play">
                          <i class="fa fa-play"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="row">
                  <div class="col-xl-6">
                    <a href="">
                      <div class="card-style-1" id="respon">
                        <img src="./img/l-1.jpg" alt="" />
                        <div class="infor">
                          <h5>Hoa và nắng</h5>
                          <p>Lượt xem: 2000 views</p>
                        </div>
                        <div class="rate">
                          <p>8.5 <i class="fa fa-star"></i></p>
                        </div>
                        <div class="episode">
                          <h8
                            >Tập
                            <p>10/10</p></h8
                          >
                        </div>
                        <div class="play">
                          <i class="fa fa-play"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-xl-6">
                    <a href="">
                      <div class="card-style-1 "id="respon">
                        <img src="./img/l-1.jpg" alt="" />
                        <div class="infor">
                          <h5>Hoa và nắng</h5>
                          <p>Lượt xem: 2000 views</p>
                        </div>
                        <div class="rate">
                          <p>8.5 <i class="fa fa-star"></i></p>
                        </div>
                        <div class="episode">
                          <h8
                            >Tập
                            <p>10/10</p></h8
                          >
                        </div>
                        <div class="play">
                          <i class="fa fa-play"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
           
            </div>
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