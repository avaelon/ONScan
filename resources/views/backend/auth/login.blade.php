@extends('backend.layouts.authentication.master')
@section('title', 'Login | High Streeting')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{asset('backend/images/login/3.jpg')}}" alt="looginpage"></div>
      <div class="col-xl-7 p-0">
         <div class="login-card">
            <div>
               <div>
                   <a class="logo text-left" href="{{ route('welcome') }}">
                        <img class="img-fluid for-light" src="{{asset('backend/images/logo/login.png')}}" alt="looginpage" width="200">
                        <img class="img-fluid for-dark" src="{{asset('backend/images/logo/logo_dark.png')}}" alt="looginpage" width="200">
                    </a>
                </div>
               <div class="login-main">
                  <form class="theme-form needs-validation"  method="POST" action="{{ route('login') }}" novalidate="">
                      @csrf
                     <h4>Sign in to account</h4>
                     <p>Enter your email & password to login</p>
                     <div class="form-group">
                        <label class="col-form-label">Email Address</label>
                        <input class="form-control @error('email') border-danger @enderror" type="email" name="email" required="" placeholder="dummy@dummy.com" value="{{ old('email') }}">
                        <div class="invalid-tooltip">Please enter proper email.</div>
                        @error('email')
                        <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input class="form-control @error('password') border-danger @enderror" type="password" name="password" required="" placeholder="*********">
                        <div class="show-hide"><span class="show"></span></div>
                        @error('password')
                        <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                        <div class="invalid-tooltip">Please enter password.</div>
                     </div>
                     <div class="form-group mb-0">
                        <div class="checkbox p-0">
                           <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                           <label class="text-muted" for="checkbox1">Remember password</label>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                     </div>
                     <p class="mt-4 mb-0">Forgot Your Password?<a class="ml-2" href="{{ route('password.request') }}">Change Password</a></p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@push('scripts')
<script>
    (function() {'use strict';
    window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
    if (form.checkValidity() === false) {
    event.preventDefault();
    event.stopPropagation();
    }
    form.classList.add('was-validated');
    }, false);
    });
    }, false);
})();
</script>
@endpush
