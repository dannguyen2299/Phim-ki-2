@extends('frontend.master.master')
@section('title','Home')
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
            <a class="btn btn-outline-light pl-2" href="./login.html" style="height: 30px;width: 70px; padding-top:2px  !important;">Login</a>
           
          </div>
        </nav>
      </div>
    </header>

    <div class="container">
      <div class="row-2 mt-4">
        <h5 class="text-light">PHIM ĐỀ CỬ</h5>
      </div>
      <div class="row-2">
        <hr />
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div id="news-slider" class="owl-carousel">
            <!-- 1 -->
            <div class="news-grid">
              <a href="">
                <div class="card-style-2">
                  <img src="./img/s-2.jpg" alt="" />
                  <div class="episode">
                    <h8
                      >Tập
                      <p>10/10</p></h8
                    >
                  </div>
                  <div class="rate">
                    <p>8.5 <i class="fa fa-star"></i></p>
                  </div>
                  <div class="play">
                    <i class="fa fa-play"></i>
                  </div>
                  <div class="infor">
                    <h5>Hoa và nắng</h5>
                    <p>Lượt xem: 2000 views</p>
                  </div>
                </div>
              </a>
            </div>
            <!-- 1 -->
            <div class="news-grid">
              <a href="">
                <div class="card-style-2">
                  <img src="./img/s-2.jpg" alt="" />
                  <div class="episode">
                    <h8
                      >Tập
                      <p>10/10</p></h8
                    >
                  </div>
                  <div class="rate">
                    <p>8.5 <i class="fa fa-star"></i></p>
                  </div>
                  <div class="play">
                    <i class="fa fa-play"></i>
                  </div>
                  <div class="infor">
                    <h5>Hoa và nắng</h5>
                    <p>Lượt xem: 2000 views</p>
                  </div>
                </div>
              </a>
            </div>
            <!-- 1 -->
            <div class="news-grid">
              <a href="">
                <div class="card-style-2">
                  <img src="./img/s-2.jpg" alt="" />
                  <div class="episode">
                    <h8
                      >Tập
                      <p>10/10</p></h8
                    >
                  </div>
                  <div class="rate">
                    <p>8.5 <i class="fa fa-star"></i></p>
                  </div>
                  <div class="play">
                    <i class="fa fa-play"></i>
                  </div>
                  <div class="infor">
                    <h5>Hoa và nắng</h5>
                    <p>Lượt xem: 2000 views</p>
                  </div>
                </div>
              </a>
            </div>
            <!-- 1 -->
            <div class="news-grid">
              <a href="">
                <div class="card-style-2">
                  <img src="./img/s-2.jpg" alt="" />
                  <div class="episode">
                    <h8
                      >Tập
                      <p>10/10</p></h8
                    >
                  </div>
                  <div class="rate">
                    <p>8.5 <i class="fa fa-star"></i></p>
                  </div>
                  <div class="play">
                    <i class="fa fa-play"></i>
                  </div>
                  <div class="infor">
                    <h5>Hoa và nắng</h5>
                    <p>Lượt xem: 2000 views</p>
                  </div>
                </div>
              </a>
            </div>
            <!-- 1 -->
            <div class="news-grid">
              <a href="">
                <div class="card-style-2">
                  <img src="./img/s-2.jpg" alt="" />
                  <div class="episode">
                    <h8
                      >Tập
                      <p>10/10</p></h8
                    >
                  </div>
                  <div class="rate">
                    <p>8.5 <i class="fa fa-star"></i></p>
                  </div>
                  <div class="play">
                    <i class="fa fa-play"></i>
                  </div>
                  <div class="infor">
                    <h5>Hoa và nắng</h5>
                    <p>Lượt xem: 2000 views</p>
                  </div>
                </div>
              </a>
            </div>
            <!-- 1 -->
            <div class="news-grid">
              <a href="">
                <div class="card-style-2">
                  <img src="./img/s-2.jpg" alt="" />
                  <div class="episode">
                    <h8
                      >Tập
                      <p>10/10</p></h8
                    >
                  </div>
                  <div class="rate">
                    <p>8.5 <i class="fa fa-star"></i></p>
                  </div>
                  <div class="play">
                    <i class="fa fa-play"></i>
                  </div>
                  <div class="infor">
                    <h5>Hoa và nắng</h5>
                    <p>Lượt xem: 2000 views</p>
                  </div>
                </div>
              </a>
            </div>
            <!-- 1 -->
            <div class="news-grid">
              <a href="">
                <div class="card-style-2">
                  <img src="./img/s-2.jpg" alt="" />
                  <div class="episode">
                    <h8
                      >Tập
                      <p>10/10</p></h8
                    >
                  </div>
                  <div class="rate">
                    <p>8.5 <i class="fa fa-star"></i></p>
                  </div>
                  <div class="play">
                    <i class="fa fa-play"></i>
                  </div>
                  <div class="infor">
                    <h5>Hoa và nắng</h5>
                    <p>Lượt xem: 2000 views</p>
                  </div>
                </div>
              </a>
            </div>
            <!-- 1 -->
            <div class="news-grid">
              <a href="">
                <div class="card-style-2">
                  <img src="./img/s-2.jpg" alt="" />
                  <div class="episode">
                    <h8
                      >Tập
                      <p>10/10</p></h8
                    >
                  </div>
                  <div class="rate">
                    <p>8.5 <i class="fa fa-star"></i></p>
                  </div>
                  <div class="play">
                    <i class="fa fa-play"></i>
                  </div>
                  <div class="infor">
                    <h5>Hoa và nắng</h5>
                    <p>Lượt xem: 2000 views</p>
                  </div>
                </div>
              </a>
            </div>
            <!-- 1 -->
            <div class="news-grid">
              <a href="">
                <div class="card-style-2">
                  <img src="./img/s-2.jpg" alt="" />
                  <div class="episode">
                    <h8
                      >Tập
                      <p>10/10</p></h8
                    >
                  </div>
                  <div class="rate">
                    <p>8.5 <i class="fa fa-star"></i></p>
                  </div>
                  <div class="play">
                    <i class="fa fa-play"></i>
                  </div>
                  <div class="infor">
                    <h5>Hoa và nắng</h5>
                    <p>Lượt xem: 2000 views</p>
                  </div>
                </div>
              </a>
            </div>
            <!-- 1 -->
            <div class="news-grid">
              <a href="">
                <div class="card-style-2">
                  <img src="./img/s-2.jpg" alt="" />
                  <div class="episode">
                    <h8
                      >Tập
                      <p>10/10</p></h8
                    >
                  </div>
                  <div class="rate">
                    <p>8.5 <i class="fa fa-star"></i></p>
                  </div>
                  <div class="play">
                    <i class="fa fa-play"></i>
                  </div>
                  <div class="infor">
                    <h5>Hoa và nắng</h5>
                    <p>Lượt xem: 2000 views</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row-2 mt-4">
        <h5 class="text-light">PHIM MỚI CẬP NHẬT</h5>
      </div>
      <div class="row-2">
        <hr />
      </div>
      <div class="row">
        <div class="col"  >
          <div class="row">
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
          <div class="row-2 mt-4 mb-3">
            <a href="" class="btn btn-danger">Xem thêm...</a>
          </div>
          <div class="row-2 mt-4">
            <h5 class="text-light">PHIM GIỚI HẠN ĐỘ TUỔI</h5>
          </div>
          <div class="row-2">
            <hr />
          </div>
          <div class="row">
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
          <div class="row-2 mt-4 mb-3">
            <a href="" class="btn btn-danger">Xem thêm...</a>
          </div>
        </div>
        <div class="col-lg-4" >
          <div class="row">
            <h5 class="text-light ml-3">PHIM ĐÁNH DẤU</h5>
          </div>
          <div class="row">
            <div class="col-12">
                <h6 class="text-danger">Tên phim</h6>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
               <table class="table">
                 <tr>
                   <td><a href=""><p class="text-light mb-0">Hoa và nắng</p></a></td>
                   <td><a href=""><p class="text-light mb-0">Tập 5</p></a></td>
                   <td><a href=""><i class="fa fa-times mb-0 text-danger"></i></td>
                 </tr>
                 <tr>
                  <td><a href=""><p class="text-light mb-0">Hoa và nắng</p></a></td>
                  <td><a href=""><p class="text-light mb-0">Tập 5</p></a></td>
                  <td><a href=""><i class="fa fa-times mb-0 text-danger"></i></td>
                </tr>
                <tr>
                  <td><a href=""><p class="text-light mb-0">Hoa và nắng</p></a></td>
                  <td><a href=""><p class="text-light mb-0">Tập 5</p></a></td>
                  <td><a href=""><i class="fa fa-times mb-0 text-danger"></i></td>
                </tr>
                <tr>
                  <td><a href=""><p class="text-light mb-0">Hoa và nắng</p></a></td>
                  <td><a href=""><p class="text-light mb-0">Tập 5</p></a></td>
                  <td><a href=""><i class="fa fa-times mb-0 text-danger"></i></td>
                </tr>
               </table>
               <a class=" text-success" href="">Xem thêm</a>
            </div>
          </div>
          <div class="row mt-3">
            <h5 class="text-danger ml-3">HÔM NAY XEM GÌ ?</h5>
          </div>
          <div class="row-2">
            <small class="text-secondary">Nếu bạn đang phân vân không biết xem gì. Hãy để hệ thống chúng tôi lựa chọn ngẫu nhiên cho bạn.<br> Chúc bạn có 1 ngày xem phim vui vẻ</small>
          </div>
          <div class="row-2">
            <button class="btn bg-danger mt-2">Lựa chọn của hệ thống</button>
          </div>
          <div class="row mt-3">
            <h5 class="text-danger ml-3">TOP PHIM IDMI ?</h5>
          </div>
          <div class="row-2 mt-3">
            <table class="table table-dark">
              <tr>
                <td><a href=""><i class="fa fa-arrow-up text-danger"></i></a></td>
                <td><a href=""><p class="text-danger mb-0">Hoa và nắng</p></a></td>
                <td><a href="" class="text-light">9.8 sao</td>
              </tr>
              <tr>
                <td><a href=""><i class="fa fa-arrow-down text-danger"></i></a></td>
                <td><a href=""><p class="text-danger mb-0">Hoa và nắng</p></a></td>
                <td><a href="" class="text-light">9.8 sao</td>
              </tr>
              <tr>
                <td><a href=""><i class="fa fa-arrow-down text-danger"></i></a></td>
                <td><a href=""><p class="text-danger mb-0">Hoa và nắng</p></a></td>
                <td><a href="" class="text-light">9.8 sao</td>
              </tr>
              <tr>
                <td><a href=""><i class="fa fa-arrow-up text-success"></i></a></td>
                <td><a href=""><p class="text-danger mb-0">Hoa và nắng</p></a></td>
                <td><a href="" class="text-light">9.8 sao</td>
              </tr>
             
            </table>
          </div>

        </div>
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