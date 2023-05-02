@extends('Homepages.app')

@section('content')

        <!-- Hero Section Begin -->
        <section class="hero">
            <style>
                .left {
                    flex: 1;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background-color: #333;
                }
                .input-field input:not(:placeholder-shown) ~ label {
                    display: none;
                }

                .right {
                    flex: 1;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                }

                img {
                    width: 80%;
                    height: auto;
                }

                h1 {
                    margin-bottom: 20px;
                }

                form {
                    width: 100%;
                    max-width: 400px;
                    padding: 40px;
                    background-color: #fff;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    border-radius: 10px;
                }

                .input-field {
                    position: relative;
                    margin-bottom: 20px;
                }

                label {
                    position: absolute;
                    top: 50%;
                    left: 15px;
                    transform: translateY(-50%);
                    color: #333;
                    font-size: 14px;
                    transition: all 0.3s ease;
                    pointer-events: none;
                }
                input:not(:placeholder-shown) + label,
                input:focus + label {
                    top: 0;
                    font-size: 12px;
                    color: #999;
                }

                input:focus ~ label,
                input:valid ~ label {
                    top: 0;
                    font-size: 12px;
                    color: #999;
                }

                input {
                    width: 100%;
                    padding: 15px 0;
                    border: none;
                    border-bottom: 1px solid #999;
                    outline: none;
                }

                input:focus {
                    border-bottom: 1px solid #333;
                }

                input[type="submit"] {
                    width: 100%;
                    background-color: #333;
                    color: #fff;
                    padding: 15px 0;
                    border: none;
                    border-radius: 5px;
                    font-size: 16px;
                    cursor: pointer;
                }

                input[type="submit"]:hover {
                    background-color: #444;
                }

                /* Mobile styles */
                @media (max-width: 767px) {
                    .container {
                        flex-direction: column;
                        height: auto;
                    }

                    .left {
                        display: none;
                    }

                    .right {
                        width: 100%;
                        margin-top: 30px;
                    }

                    h1 {
                        margin-top: 0;
                    }

                    form {
                        padding: 20px;
                        border-radius: 0;
                        box-shadow: none;
                    }

                    input[type="submit"] {
                        margin-top: 20px;
                    }
                }



            </style>
            <div class="container" style="display: flex;height: 100vh;">
                <div class="left">
                    <img src="{{asset('Homepages/img/image22.png')}}" alt="Nature" height="400px; width: 350px;">
                </div>
                <div class="right">
                    <h1>Password Reset</h1>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf


                        <div class="input-field">
                            <label for="email"></label>
                            <input type="email" placeholder="Email" id="email" name="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-field">
                            <input type="submit" value="Send Password Reset Link">
                        </div>
                        <div class="input-field">
                            @if (Route::has('login'))
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    {{ __('Back to Login?') }}
                                </a>
                            @endif <br>
                            @if (Route::has('register'))
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    {{ __('Want to register?') }}
                                </a>
                            @endif

                        </div>
                    </form>
                </div>
            </div>
        </section>
@endsection
