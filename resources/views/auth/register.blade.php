@extends('layouts.form')

@section('content')
<div class="banner_in">
    <div class="bg_video">
      <video autoplay muted loop id="myVideo">
  <source src="images/2.mp4" type="video/mp4">
</video>
        <div class="sign_banner">

           <div class="sign_in">
              <h3>Sign in</h3>
               <p><i>Access your account information and manage your bookings.</i></p>
           <form method="POST" action="{{ route('login') }}">
                        @csrf
  <div class="form-group sign_out">

    <!-- <input type="email" class="form-control" id="email" placeholder="Email address:"> -->

<input id="email" type="email" placeholder="Email address:" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

  </div>
  <div class="form-group sign_out">
   


  <!--  <input type="password" class="form-control" id="pwd" placeholder="Password:"> -->

<input id="password" type="password" placeholder="Password:" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

  
  </div>
  <div class="checkbox">
    <label> <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Login</button>
</form>
            
            </div>
            
                 <div class="sign_in sign_in2">
              <h3>Sign up</h3>
               <p><i>Sign up now and receive exclusive offers with huge discounts</i></p>
             <form method="POST" action="{{ route('register') }}">
                        @csrf

                  <div class="form-group sign_out">
   
   <!-- <input type="text" class="form-control" id="email" placeholder="First Name"> -->
<input id="fname" type="text" placeholder="First Name" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif

  </div>
                  
  <div class="form-group sign_out">
   <!-- <input type="email" class="form-control" id="email" placeholder="Email address:"> -->
<input id="email" type="email" placeholder="Email address:" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
 


  </div>
  <div class="form-group sign_out">
   <!--  <input type="password" class="form-control" id="pwd" placeholder="Password:"> -->

 <input id="password" type="password" placeholder="Password:" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
 

  </div>
   <div class="form-group sign_out">

                                <input id="password-confirm" placeholder="confirm Password:"type="password" class="form-control" name="password_confirmation" required>
                
                        </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
 <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
</form>
            
            </div>
        
  
</div>

      </div> 
    </div>


@endsection