@extends('frontend.layouts.frontend_mainmaster')
@section('content')
<main class="main login-page">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Sign Up</h1>
                </div>
            </div>
            <!-- End of Page Header -->
            <div class="page-content">
                <div class="container">
                    <div class="login-popup">
                        <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                            <ul class="nav nav-tabs text-uppercase" role="tablist">
                                <li class="nav-item">
                                    <a href="#sign-in" class="nav-link active">Sign Up</a>
                                </li>
                               
                            </ul>
                            <div class="tab-content">
                                <form action="" name="register" method="POST">
                                    @csrf
                                    <div class="tab-pane active" id="sign-up">
                                        <div class="form-group">
                                            <label>Username or email address *</label>
                                            <input type="text" class="form-control" name="username" id="username" required>
                                        </div>
                                        <div class="form-group mb-0">
                                            <label>Password *</label>
                                            <input type="text" class="form-control" name="password" id="password" required>
                                        </div>
                                        <div class="form-checkbox d-flex align-items-center justify-content-between">
                                            <input type="checkbox" class="custom-checkbox" id="remember1" name="remember1" required="">
                                            <label for="remember1">Remember me</label>
                                            <a href="#">Last your password?</a>
                                        </div>
                                        <a href="#" class="btn btn-primary">Sign In</a>
                                        <button type="submit" class="btn btn-primary"></button>
                                    </div>
                                </form>
                            </div>
                            <p class="text-center">Sign in with social account</p>
                            <div class="social-icons social-icon-border-color d-flex justify-content-center">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-google fab fa-google"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection