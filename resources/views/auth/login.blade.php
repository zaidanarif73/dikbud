@include('home.layouts.head')

@include('sweetalert::alert')
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('{{ asset("assets/img/login/login.jpg") }}');"></div>
        <div class="contents order-2 order-md-1">
    
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <h3>Login ke</h3>
                        <strong>DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA MALANG</strong>
                            <form action="{{ route('auth.login.index') }}" method="POST" class="user">
                                @csrf
                                <div class="form-group first">
                                    <label align="left" for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="Masukan Email" id="email" name="email">
                                </div>
                                <div class="form-group last mb-3">
                                    <label align="left" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Masukan Password" id="password" name="password">
                                </div>
                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                        <input type="checkbox" checked="checked"/>
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                                </div>
                                <input type="submit" value="Log In" class="btn btn-block btn-primary">
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @section('script')
        {{-- login script --}}
        <script src="assets/js/login/jquery-3.3.1.min.js"></script>
        <script src="assets/js/login/popper.min.js"></script>
        <script src="assets/js/login/bootstrap.min.js"></script>
        <script src="assets/js/login/main.js"></script>
    @endsection
