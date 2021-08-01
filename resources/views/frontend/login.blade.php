@extends('frontend.master.master')
@section('title', 'Đăng nhập')
@section('content')

    <div class="container login">
        <div class="row mt-4">
            <div class="col">
                <div>
                    {{-- <h5 class="text-light">ĐĂNG NHẬP VÀO HỆ THỐNG</h5> --}}

                </div>

                <div>

                    <hr />
                </div>



                <div>
                    <form action="{{ URL::to('processLogin') }}" method="post">
                        {{ csrf_field() }}
                        <table>
                            <tr>
                                <td colspan="2">
                                    <div style="margin: 50px 0px ;">
                                        <h2 class="text-light mb-0">GROUP 8</h2>
                                        <p style="color:#cdcdcd">Hãy đăng nhập và đồng hành cùng chúng tôi</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="text-light mr-3">Tài khoản </p>
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control bg-dark text-light"
                                            style="height: 35px;width: 300px;" placeholder="Username" name="email"
                                            aria-describedby="basic-addon1">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="text-light mr-3">Mật khẩu </p>
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control bg-dark text-light"
                                            style="height: 35px;width: 300px;" placeholder="Password" name="password"
                                            aria-describedby="basic-addon1">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><button type="submit" style="width: 100%;margin-top: 20px"
                                        class="btn btn-danger">Đăng nhập</button></td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="/processLogin/facebook"
                                        style="background-color: #3b579d;color:#fff; width: 100%; text-align: center;margin-top: 40px"
                                        class="btn">Kết nối với facebook</a>

                                </td>
                            </tr>
                        </table>
                    </form>

                </div>

                {{-- <div>

           <a href="/processLogin/facebook" style="background-color: #3b579d;color:#fff; width: 40%; text-align: start" class="btn">Kết nối với facebook</a>
         </div> --}}
            </div>
        </div>

        <div class="row" style="height: 10vh">
            <p class="text-danger mt-4 ml-2">
                @if (Session::has('error'))
                    {{ Session::get('error') }}
                @endIf
            </p>
        </div>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous">
    </script> -->

@endsection
