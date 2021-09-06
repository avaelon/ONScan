@extends('backend.layouts.authentication.master')
@section('title', 'Forget Password')
@section('content')
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper">
   <div class="container-fluid p-0">
      <!-- Reset Password page start-->
      <div class="authentication-main mt-0">
         <div class="row">
            <div class="col-12">
               <div class="login-card">
                  <div>
                     <div><a class="logo" href="{{ route('index') }}"><img class="img-fluid for-light" src="{{asset('backend/images/logo/login.png')}}" alt="looginpage"><img class="img-fluid for-dark" src="{{asset('backend/images/logo/logo_dark.png')}}" alt="looginpage"></a></div>
                     <div class="login-main">
                        <form class="theme-form">
                           <h4>Password Reset</h4>
                           <div class="form-group">
                              <label class="col-form-label">Email</label>
                              <input class="form-control" type="email" name="email" required="" placeholder="dummy@dummy.com">
                           </div>
                           <div class="form-group mb-0 mt-4">
                              <button class="btn btn-primary btn-block" type="submit">Send Reset Link</button>
                           </div>
                           <p class="mt-4 mb-0">Already Have an account?<a class="ml-2" href="{{ route('login') }}">Sign in</a></p>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Reset Password page end-->
   </div>
</div>
@endsection
