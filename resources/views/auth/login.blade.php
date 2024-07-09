
<!DOCTYPE html>
<html lang="en">
@include('home.layouts.head')

<body>
    @include('sweetalert::alert')
<section>
    <form action="{{ route('auth.login.index') }}" method="POST" class="user">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control p_input" name="email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control p_input" name="password">
        </div>
        <div class="form-group d-flex align-items-center justify-content-between"">
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Remember Me
                </label>
            </div>
            <a href="#" class="forgot-pass">Forgot Password</a>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
        </div>
    </form>
</section>
@include('home.layouts.script')
</body>
</html>