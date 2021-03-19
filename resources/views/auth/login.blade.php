<x-head>
    <x-logo-admin></x-logo-admin>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="cardLogin">
                    <div class="cardBody">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="col-md-7 col-sm-10">
                                <div class="col-md-6 col-sm-6">
                                    <input id="contact-form" placeholder="Email" type="email" class="logForm" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">

                                <div class="col-md-6">
                                    <input size="20" id="password" placeholder="Password" type="password" class="logForm @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-md-7 col-sm-10">
                                <div class="col-md-offset-8 col-md-4 col-sm-offset-6 col-sm-6">
                                    <button type="submit" class="buttonForm">
                                        {{ __('Login') }}
                                    </button>
<!--                                 
                                    @if (Route::has('password.request'))
                                    
                                    <a class="buttonForm" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-head>