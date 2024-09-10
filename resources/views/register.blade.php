<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SabziBazaar - The Organic veggies provider</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="assets/img/favicon.ico" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/glightbox.min.css')}}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Plugin css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

    <!-- Loader Section -->
    @include('utilities.loader')

    <!-- Header Section -->

    @include('utilities.header')


    <main class="main__content_wrapper">

        <!-- Start login section  -->
        <div class="login__section section--padding mb-80">
            <div class="container">
                <form action="" onsubmit="registerUser(event)">
                    @csrf
                    <div class="login__section--inner">
                        <div class="row row-cols-1">
                            <div class="col">
                                <div class="account__login register">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title h3 mb-10">Create an Account</h2>
                                        <p class="account__login--header__desc">Register here if you are a new customer</p>
                                    </div>
                                    <div class="account__login--inner">
                                        <label>
                                            <input class="account__login--input" id="name" placeholder="Enter your name" type="text">
                                        </label>
                                        <label>
                                            <input class="account__login--input" id="contact" placeholder="Enter your contact number" type="number">
                                        </label>
                                        <label>
                                            <input class="account__login--input" id="password" placeholder="Enter your password" type="password">
                                        </label>
                                        <label>
                                            <input class="account__login--input" id="confirm-password" placeholder="Enter your confirm password" type="password">
                                        </label>
                                        <label>
                                            <textarea class="account__login--input" name="" id="address" rows="50" placeholder="Enter your address"></textarea>
                                        </label>
                                        <div id="wrong-data"></div>
                                        <button class="account__login--btn btn mb-10" type="submit" disabled>Submit & Register</button>
                                        <div class="account__login--remember position__relative">
                                            <input class="checkout__checkbox--input" id="check2" onchange="enableSubmitButton()" type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label login__remember--label" for="check2">
                                                I have read and agree to the terms & conditions</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End login section  -->
    </main>

    @include('utilities.footer')

    <!-- All Script JS Plugins here  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/vendor/popper.js')}}" defer="defer"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}" defer="defer"></script>
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/glightbox.min.js')}}"></script>

    <!-- Customscript js -->
    <script src="{{ asset('assets/js/script.js')}}"></script>
    <!-- <script src="{{ asset('assets/js/vegetable.js')}}"></script> -->
    <!-- <script src="{{ asset('assets/js/cart.js')}}"></script> -->
    <script src="{{ asset('assets/js/veggies.js')}}"></script>
    <script src="{{ asset('assets/js/query.js')}}"></script>
</body>

</html>