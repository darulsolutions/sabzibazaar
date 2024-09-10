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
  <!-- ======= Loader Section ======= -->
  @include('utilities.loader')

  <!-- ======= Header Section ======= -->

  @include('utilities.header')

  <!-- ======= Main Section ======= -->

  <main class="main__content_wrapper">
    <!-- Start slider section -->
    <section class="hero__slider--section">
      <div class="hero__slider--inner hero__slider--activation swiper">
        <div class="hero__slider--wrapper swiper-wrapper">
          <div class="swiper-slide">
            <div
              class="hero__slider--items bg__gray--color"
              style="
                  background-image: url('assets/img/slider-products/WhatsApp-Image-2024-08-19-at-15.16.46-1.jpeg');
                ">
              <div class="container slider__items--container">
                <div class="hero__slider--items__inner">
                  <div
                    class="row row-cols-lg-2 row-cols-md-2 row-cols-1 align-items-center">
                    <div class="col">
                      <div
                        class="slider__content slider__content--padding__left">
                        <h2 class="slider__content--maintitle white-text h1">
                          Sabzi of the day
                        </h2>
                        <p class="slider__content--desc white-text">
                          Unleash your culinary creativity with our Sabzi of
                          the Day! Every day, we feature a different fresh,
                          seasonal vegetable to inspire your meals and add
                          excitement to your kitchen.
                        </p>
                        <a class="btn slider__btn" href="shop.html">Shop Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="hero__slider--items bg__gray--color"
              style="
                  background-image: url('assets/img/slider-products/WhatsApp-Image-2024-08-19-at-15.16.46-2.jpeg');
                ">
              <div class="container slider__items--container">
                <div class="hero__slider--items__inner">
                  <div
                    class="row row-cols-lg-2 row-cols-md-2 row-cols-1 align-items-center">
                    <div class="col">
                      <div
                        class="slider__content slider__content--padding__left">
                        <h2 class="slider__content--maintitle white-text h1">
                          Seasonal Sabzi
                        </h2>
                        <p class="slider__content--desc white-text">
                          Embrace the flavors of each season with our Seasonal
                          Sabzi! We bring you the freshest, most flavorful
                          produce at its peak, ensuring you enjoy the best
                          nature has to offer.
                        </p>
                        <a class="btn slider__btn" href="shop.html">Shop Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="hero__slider--items bg__gray--color"
              style="
                  background-image: url('assets/img/slider-products/WhatsApp-Image-2024-08-19-at-15.16.46-3.jpeg');
                ">
              <div class="container slider__items--container">
                <div class="hero__slider--items__inner">
                  <div
                    class="row row-cols-lg-2 row-cols-md-2 row-cols-1 align-items-center">
                    <div class="col">
                      <div
                        class="slider__content slider__content--padding__left">
                        <h2 class="slider__content--maintitle white-text h1">
                          Sabzi Bundle
                        </h2>
                        <p class="slider__content--desc white-text">
                          Experience the convenience and variety of our Sabzi
                          Bundle, designed to provide you with a month’s
                          supply of fresh, high-quality vegetables. This
                          carefully curated selection brings you an array of
                          nutritious veggies to meet all your culinary needs.
                          Whether you’re cooking for your family, hosting a
                          dinner party, or simply stocking up for the month,
                          our bundle ensures you have everything you need.
                        </p>
                        <a class="btn slider__btn" href="shop.html">Shop Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="hero__slider--items bg__gray--color"
              style="
                  background-image: url('assets/img/slider-products/WhatsApp-Image-2024-08-19-at-15.16.46.jpeg');
                ">
              <div class="container slider__items--container">
                <div class="hero__slider--items__inner">
                  <div
                    class="row row-cols-lg-2 row-cols-md-2 row-cols-1 align-items-center">
                    <div class="col">
                      <div
                        class="slider__content slider__content--padding__left">
                        <h2 class="slider__content--maintitle white-text h1">
                          Weekly Sabzi
                        </h2>
                        <p class="slider__content--desc white-text">
                          Enjoy a hassle-free supply of fresh, essential vegetables with our Weekly Sabzi service! Get a curated selection of staples like potatoes, tomatoes, and chilies delivered right to your doorstep every week.
                        </p>
                        <a class="btn slider__btn" href="shop.html">Shop Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__pagination swiper-pagination"></div>
      </div>
    </section>
    <!-- End slider section -->

    <!-- Start categories product section -->
    <section
      class="product__section product__categories--section  section--padding">
      <div class="container">
        <div class="section__heading text-center mb-40">
          <span class="section__heading--subtitle">Recently added our store</span>
          <h2 class="section__heading--maintitle">Our Hottest Categories</h2>
        </div>


        <div
          class="product__section--inner product__swiper--activation swiper swiper-initialized swiper-horizontal swiper-pointer-events">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="product__items">
                <div class="product__items--thumbnail">
                  <a class="product__items--link" href="shop.html"><img
                      class="product__items--img"
                      src="assets/img/optimize/weekly-sabzi-6.jpg"
                      alt="categories-img" />
                    <div
                      class="product__categories--content d-flex justify-content-between align-items-center">
                      <div class="product__categories--content__left">
                        <h3 class="product__categories--content__maintitle">
                          Sabzi Bundle
                        </h3>
                      </div>
                      <div class="product__categories--icon">
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product__items ">
                <div class="product__items--thumbnail">
                  <a class="product__items--link" href="shop.html"><img
                      class="product__items--img"
                      src="assets/img/optimize/seasonal-sabzi-6.jpg"
                      alt="categories-img" />
                    <div
                      class="product__categories--content d-flex justify-content-between align-items-center">
                      <div class="product__categories--content__left">
                        <h3 class="product__categories--content__maintitle">
                          Sabzi of the day
                        </h3>
                      </div>
                      <div class="product__categories--icon">
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product__items">
                <div class="product__items--thumbnail">
                  <a class="product__items--link" href="shop.html"><img
                      class="product__items--img"
                      src="assets/img/optimize/category2.jpg"
                      alt="categories-img" />
                    <div
                      class="product__categories--content d-flex justify-content-between align-items-center">
                      <div class="product__categories--content__left">
                        <h3 class="product__categories--content__maintitle">
                          Weekly Sabzi
                        </h3>
                      </div>
                      <div class="product__categories--icon">

                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product__items">
                <div class="product__items--thumbnail">
                  <a class="product__items--link" href="shop.html"><img
                      class="product__items--img"
                      src="assets/img/optimize/category3.jpg"
                      alt="categories-img" />
                    <div
                      class="product__categories--content d-flex justify-content-between align-items-center">
                      <div class="product__categories--content__left">
                        <h3 class="product__categories--content__maintitle">
                          Seasonal Sabzi
                        </h3>
                      </div>
                      <div class="product__categories--icon">
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper__nav--btn swiper-button-next"></div>
          <div class="swiper__nav--btn swiper-button-prev"></div>
        </div>

      </div>
    </section>
    <!-- End categories product section -->

    <!-- Start product section -->
    <section class="product__section section--padding pt-0">
      <div class="container">
        <div class="section__heading text-center mb-25">
          <span class="section__heading--subtitle">Recently added our store</span>
          <h2 class="section__heading--maintitle">Trending Products</h2>
        </div>
        <ul id="product-tabs" class="product__tab--one product__tab--btn d-flex justify-content-center mb-35">
          <!-- Tabs will be dynamically inserted here -->
        </ul>

        <!-- Add more tabcontent sections as needed -->

        <div class="tab_content">
          <div id="product_all" class="tab_pane active show">
            <div class="product__section--inner">
              <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28" id="product-container">
                <!-- Dynamic products will be injected here -->
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="container mt-5">
        <button class="btn slider__btn w-100 mx-3 add-to-cart-btn" onclick="openCart()" style="padding:0 15px">Add to cart</button>
      </div>
    </section>
    <!-- End product section -->


    <!-- Start deals banner section -->

    <section class="deals__banner--section banner__bg" style="background-image: url('assets/img/bg-full1.png');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-5 deals__baner--col">
            <div class="deals__banner--content">
              <h3 class="deals__banner--content__subtitle text__secondary">Best Deals of the week!</h3>
              <h2 class="deals__banner--content__maintitle">Grab The Best Offer
                of This Week</h2>
              <p class="deals__banner--content__desc">Shop our selection of organic fresh vegetables in a discounted price. 10% off on all vegetables.</p>
              <div class="deals__banner--countdown d-flex" data-countdown="Sep 30, 2022 00:00:00">
                <div class="countdown__item"><span class="countdown__number">-702</span>
                  <p class="countdown__text">days</p>
                </div>
                <div class="countdown__item" hrs"=""><span class="countdown__number">-18</span>
                  <p class="countdown__text">hrs</p>
                </div>
                <div class="countdown__item" mins"=""><span class="countdown__number">-37</span>
                  <p class="countdown__text">mins</p>
                </div>
                <div class="countdown__item" secs"=""><span class="countdown__number">-40</span>
                  <p class="countdown__text">secs</p>
                </div>
              </div>
              <a class="btn deals__banner--content__btn" href="shop.html">Discover Now</a>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 deals__baner--col">
            <div class="banner__items text-right">
              <a class="banner__items--thumbnail display-block" href="shop.html"><img class="banner__items--thumbnail__img display-block" src="assets/img/Sabzi pictures/bunch-vegetables-including-radishes-carrots-lettuce-onions.png" alt="banner-layer-img"></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  <!-- ======= Services Section ====== -->
  @include('utilities.services')

  <!-- ======= Footer Section ======= -->

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

  <script>
    const veggieCart = JSON.parse(localStorage.getItem('veggieCart')) || [];

    function addIntoCartPage(itemId) {
      let item = cart.find(item => item.id === itemId);
      if (item) {
        // Capture the data from the mini cart
        let miniCartImage = document.querySelector('.minicart__thumb img').src;
        let miniCartTitle = document.querySelector('.minicart__subtitle a').innerHTML;
        let miniCartPrice = document.querySelector('.current__price').innerHTML;

        // Add the item data to the cart array
        veggieCart.push({
          id: itemId,
          image: miniCartImage,
          title: miniCartTitle,
          price: miniCartPrice
        });

        // Save the cart to localStorage
        localStorage.setItem('veggieCart', JSON.stringify(veggieCart));

        // Redirect to the cart page
        window.location.href = "/cart";
      }
    }
    
    const userToken = localStorage.getItem("token")
    
    document.addEventListener("DOMContentLoaded", fetchUserDetail(userToken))
  </script>

</body>