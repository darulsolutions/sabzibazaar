<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SabziBazaar - Organic Food HTML Template</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="assets/img/favicon.ico" />

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/glightbox.min.css')}}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Plugin css -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <!-- ======= Loader Section ======= -->
    @include('utilities.loader')

    <!-- ======= Header Section ======= -->
    @include('utilities.header')

    <!-- ======= Main Section ====== -->
    <main class="main__content_wrapper">
      <!-- Start breadcrumb section -->
      <section
        class="breadcrumb__section breadcrumb__bg"
        style="
          background-image: url('assets/img/optimize/order-sabzi-bundle.jpg');
        "
      >
        <div class="container">
          <div class="row row-cols-1">
            <div class="col">
              <div class="breadcrumb__content text-center">
                <h1 class="breadcrumb__content--title text-white mb-25">
                  Sabzi of the day
                </h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End breadcrumb section -->

      <!-- Start shop section -->
      <section class="shop__section section--padding">
        <div class="container-fluid">
          <div
            class="shop__header bg__gray--color d-flex align-items-center justify-content-between mb-30"
          >
            <button
              class="widget__filter--btn d-flex d-lg-none align-items-center"
              data-offcanvas
            >
              <svg
                class="widget__filter--btn__icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"
              >
                <path
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="28"
                  d="M368 128h80M64 128h240M368 384h80M64 384h240M208 256h240M64 256h80"
                />
                <circle
                  cx="336"
                  cy="128"
                  r="28"
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="28"
                />
                <circle
                  cx="176"
                  cy="256"
                  r="28"
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="28"
                />
                <circle
                  cx="336"
                  cy="384"
                  r="28"
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="28"
                />
              </svg>
              <span class="widget__filter--btn__text">Filter</span>
            </button>
            <div class="product__view--mode d-flex align-items-center">
              <div
                class="product__view--mode__list product__short--by align-items-center d-lg-flex d-none"
              >
                <label class="product__view--label">Prev Page :</label>
                <div class="select shop__header--select">
                  <select class="product__view--select">
                    <option selected value="1">65</option>
                    <option value="2">40</option>
                    <option value="3">42</option>
                    <option value="4">57</option>
                    <option value="5">60</option>
                  </select>
                </div>
              </div>
              <div
                class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex"
              >
                <label class="product__view--label">Sort By :</label>
                <div class="select shop__header--select">
                  <select class="product__view--select">
                    <option selected value="1">Sort by latest</option>
                    <option value="2">Sort by popularity</option>
                    <option value="3">Sort by newness</option>
                    <option value="4">Sort by rating</option>
                  </select>
                </div>
              </div>
              <div class="product__view--mode__list">
                <div
                  class="product__tab--one product__grid--column__buttons d-flex justify-content-center"
                >
                  <button
                    class="product__grid--column__buttons--icons active"
                    aria-label="grid btn"
                    data-toggle="tab"
                    data-target="#product_grid"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="13"
                      height="13"
                      viewBox="0 0 9 9"
                    >
                      <g transform="translate(-1360 -479)">
                        <rect
                          id="Rectangle_5725"
                          data-name="Rectangle 5725"
                          width="4"
                          height="4"
                          transform="translate(1360 479)"
                          fill="currentColor"
                        />
                        <rect
                          id="Rectangle_5727"
                          data-name="Rectangle 5727"
                          width="4"
                          height="4"
                          transform="translate(1360 484)"
                          fill="currentColor"
                        />
                        <rect
                          id="Rectangle_5726"
                          data-name="Rectangle 5726"
                          width="4"
                          height="4"
                          transform="translate(1365 479)"
                          fill="currentColor"
                        />
                        <rect
                          id="Rectangle_5728"
                          data-name="Rectangle 5728"
                          width="4"
                          height="4"
                          transform="translate(1365 484)"
                          fill="currentColor"
                        />
                      </g>
                    </svg>
                  </button>
                  <button
                    class="product__grid--column__buttons--icons"
                    aria-label="list btn"
                    data-toggle="tab"
                    data-target="#product_list"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="17"
                      height="16"
                      viewBox="0 0 13 8"
                    >
                      <g
                        id="Group_14700"
                        data-name="Group 14700"
                        transform="translate(-1376 -478)"
                      >
                        <g transform="translate(12 -2)">
                          <g id="Group_1326" data-name="Group 1326">
                            <rect
                              id="Rectangle_5729"
                              data-name="Rectangle 5729"
                              width="3"
                              height="2"
                              transform="translate(1364 483)"
                              fill="currentColor"
                            />
                            <rect
                              id="Rectangle_5730"
                              data-name="Rectangle 5730"
                              width="9"
                              height="2"
                              transform="translate(1368 483)"
                              fill="currentColor"
                            />
                          </g>
                          <g
                            id="Group_1328"
                            data-name="Group 1328"
                            transform="translate(0 -3)"
                          >
                            <rect
                              id="Rectangle_5729-2"
                              data-name="Rectangle 5729"
                              width="3"
                              height="2"
                              transform="translate(1364 483)"
                              fill="currentColor"
                            />
                            <rect
                              id="Rectangle_5730-2"
                              data-name="Rectangle 5730"
                              width="9"
                              height="2"
                              transform="translate(1368 483)"
                              fill="currentColor"
                            />
                          </g>
                          <g
                            id="Group_1327"
                            data-name="Group 1327"
                            transform="translate(0 -1)"
                          >
                            <rect
                              id="Rectangle_5731"
                              data-name="Rectangle 5731"
                              width="3"
                              height="2"
                              transform="translate(1364 487)"
                              fill="currentColor"
                            />
                            <rect
                              id="Rectangle_5732"
                              data-name="Rectangle 5732"
                              width="9"
                              height="2"
                              transform="translate(1368 487)"
                              fill="currentColor"
                            />
                          </g>
                        </g>
                      </g>
                    </svg>
                  </button>
                </div>
              </div>
              <div
                class="product__view--mode__list product__view--search d-xl-block d-none"
              >
                <form class="product__view--search__form" action="#">
                  <label>
                    <input
                      class="product__view--search__input border-0"
                      placeholder="Search by"
                      type="text"
                    />
                  </label>
                  <button
                    class="product__view--search__btn"
                    aria-label="search btn"
                    type="submit"
                  >
                    <svg
                      class="product__items--action__btn--svg"
                      xmlns="http://www.w3.org/2000/svg"
                      width="22.51"
                      height="20.443"
                      viewBox="0 0 512 512"
                    >
                      <path
                        d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                        fill="none"
                        stroke="currentColor"
                        stroke-miterlimit="10"
                        stroke-width="32"
                      />
                      <path
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-miterlimit="10"
                        stroke-width="32"
                        d="M338.29 338.29L448 448"
                      />
                    </svg>
                  </button>
                </form>
              </div>
            </div>
            <p class="product__showing--count">Showing 1–9 of 21 results</p>
          </div>
          
          <div class="row">
            <div class="col-xl-3 col-lg-4">
              <div class="single__widget price__filter widget__bg">
                <h2 class="widget__title h3">Filter By Price</h2>
                <form class="price__filter--form" action="#">
                  <div
                    class="price__filter--form__inner mb-15 d-flex align-items-center"
                  >
                    <div class="price__filter--group">
                      <label
                        class="price__filter--label"
                        for="Filter-Price-GTE2"
                        >From</label
                      >
                      <div
                        class="price__filter--input border-radius-5 d-flex align-items-center"
                      >
                        <span class="price__filter--currency">Rs</span>
                        <input
                          class="price__filter--input__field border-0"
                          name="filter.v.price.gte"
                          id="Filter-Price-GTE2"
                          type="number"
                          placeholder="0"
                          min="0"
                          max="250.00"
                        />
                      </div>
                    </div>
                    <div class="price__divider">
                      <span>-</span>
                    </div>
                    <div class="price__filter--group">
                      <label
                        class="price__filter--label"
                        for="Filter-Price-LTE2"
                        >To</label
                      >
                      <div
                        class="price__filter--input border-radius-5 d-flex align-items-center"
                      >
                        <span class="price__filter--currency">Rs</span>
                        <input
                          class="price__filter--input__field border-0"
                          name="filter.v.price.lte"
                          id="Filter-Price-LTE2"
                          type="number"
                          min="0"
                          placeholder="250.00"
                          max="250.00"
                        />
                      </div>
                    </div>
                  </div>
                  <button class="btn price__filter--btn" type="submit">
                    Filter
                  </button>
                </form>
              </div>
              <div class="shop__sidebar--widget widget__area d-none d-lg-block">
                <div class="single__widget widget__bg">
                  <h2 class="widget__title h3">Categories</h2>
                  <ul class="widget__categories--menu">
                    <li class="widget__categories--menu__list">
                      <label
                        class="widget__categories--menu__label d-flex align-items-center"
                      >
                        <img
                          class="widget__categories--menu__img"
                          src="assets/img//optimize/order-sabzi-day.jpg"
                          alt="categories-img"
                        />
                        <span class="widget__categories--menu__text"
                          >Sabzi of the day</span
                        >
                        <svg
                          class="widget__categories--menu__arrowdown--icon"
                          xmlns="http://www.w3.org/2000/svg"
                          width="12.355"
                          height="8.394"
                        >
                          <path
                            d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                            transform="translate(-6 -8.59)"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </label>
                      <ul class="widget__categories--sub__menu">
                        <li class="widget__categories--sub__menu--list">
                          <a
                            class="widget__categories--sub__menu--link d-flex align-items-center"
                            href="shop.html"
                          >
                            <img
                              class="widget__categories--sub__menu--img"
                              src="assets/img/optimize/weekly-sabzi-1.jpg"
                              alt="categories-img"
                            />
                            <span class="widget__categories--sub__menu--text"
                              >Potato</span
                            >
                          </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                          <a
                            class="widget__categories--sub__menu--link d-flex align-items-center"
                            href="shop.html"
                          >
                            <img
                              class="widget__categories--sub__menu--img"
                              src="assets/img/optimize/sabzi-of-the-day-3.jpg"
                              alt="categories-img"
                            />
                            <span class="widget__categories--sub__menu--text"
                              >Tomato</span
                            >
                          </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                          <a
                            class="widget__categories--sub__menu--link d-flex align-items-center"
                            href="shop.html"
                          >
                            <img
                              class="widget__categories--sub__menu--img"
                              src="assets/img/optimize/sabzi-of-the-day-4.jpg"
                              alt="categories-img"
                            />
                            <span class="widget__categories--sub__menu--text"
                              >Onion</span
                            >
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="widget__categories--menu__list">
                      <label
                        class="widget__categories--menu__label d-flex align-items-center"
                      >
                        <img
                          class="widget__categories--menu__img"
                          src="assets/img/optimize/order-weekly-sabzi.jpg"
                          alt="categories-img"
                        />
                        <span class="widget__categories--menu__text"
                          >Weekly Sabzi</span
                        >
                        <svg
                          class="widget__categories--menu__arrowdown--icon"
                          xmlns="http://www.w3.org/2000/svg"
                          width="12.355"
                          height="8.394"
                        >
                          <path
                            d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                            transform="translate(-6 -8.59)"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </label>
                      <ul class="widget__categories--sub__menu">
                        <li class="widget__categories--sub__menu--list">
                          <a
                            class="widget__categories--sub__menu--link d-flex align-items-center"
                            href="shop.html"
                          >
                            <img
                              class="widget__categories--sub__menu--img"
                              src="assets/img/optimize/sabzi-bundle-6.jpg"
                              alt="categories-img"
                            />
                            <span class="widget__categories--sub__menu--text"
                              >Garlic</span
                            >
                          </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                          <a
                            class="widget__categories--sub__menu--link d-flex align-items-center"
                            href="shop.html"
                          >
                            <img
                              class="widget__categories--sub__menu--img"
                              src="assets/img/optimize/sabzi-of-the-day-5.jpg"
                              alt="categories-img"
                            />
                            <span class="widget__categories--sub__menu--text"
                              >Coriander</span
                            >
                          </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                          <a
                            class="widget__categories--sub__menu--link d-flex align-items-center"
                            href="shop.html"
                          >
                            <img
                              class="widget__categories--sub__menu--img"
                              src="assets/img/optimize/sabzi-bundle-5.jpg"
                              alt="categories-img"
                            />
                            <span class="widget__categories--sub__menu--text"
                              >Ginger</span
                            >
                          </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                          <a
                            class="widget__categories--sub__menu--link d-flex align-items-center"
                            href="shop.html"
                          >
                            <img
                              class="widget__categories--sub__menu--img"
                              src="assets/img/optimize/weekly-sabzi-4.jpg"
                              alt="categories-img"
                            />
                            <span class="widget__categories--sub__menu--text"
                              >Green Chillies</span
                            >
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="widget__categories--menu__list">
                      <label
                        class="widget__categories--menu__label d-flex align-items-center"
                      >
                        <img
                          class="widget__categories--menu__img"
                          src="assets/img/optimize/order-sabzi-bundle.jpg"
                          alt="categories-img"
                        />
                        <span class="widget__categories--menu__text"
                          >Sabzi Bundle</span
                        >
                        <svg
                          class="widget__categories--menu__arrowdown--icon"
                          xmlns="http://www.w3.org/2000/svg"
                          width="12.355"
                          height="8.394"
                        >
                          <path
                            d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                            transform="translate(-6 -8.59)"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </label>
                      <ul class="widget__categories--sub__menu">
                        <li class="widget__categories--sub__menu--list">
                          <a
                            class="widget__categories--sub__menu--link d-flex align-items-center"
                            href="shop.html"
                          >
                            <img
                              class="widget__categories--sub__menu--img"
                              src="assets/img/optimize/seasonal-sabzi-8.jpg"
                              alt="categories-img"
                            />
                            <span class="widget__categories--sub__menu--text"
                              >Brinjal</span
                            >
                          </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                          <a
                            class="widget__categories--sub__menu--link d-flex align-items-center"
                            href="shop.html"
                          >
                            <img
                              class="widget__categories--sub__menu--img"
                              src="assets/img/optimize/weekly-sabzi-6.jpg"
                              alt="categories-img"
                            />
                            <span class="widget__categories--sub__menu--text"
                              >Cabbage</span
                            >
                          </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                          <a
                            class="widget__categories--sub__menu--link d-flex align-items-center"
                            href="shop.html"
                          >
                            <img
                              class="widget__categories--sub__menu--img"
                              src="assets/img/optimize/category1.jpg"
                              alt="categories-img"
                            />
                            <span class="widget__categories--sub__menu--text"
                              >Cauliflower</span
                            >
                          </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                          <a
                            class="widget__categories--sub__menu--link d-flex align-items-center"
                            href="shop.html"
                          >
                            <img
                              class="widget__categories--sub__menu--img"
                              src="assets/img/optimize/weekly-sabzi-7.jpg"
                              alt="categories-img"
                            />
                            <span class="widget__categories--sub__menu--text"
                              >Lemon</span
                            >
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="widget__categories--menu__list">
                      <label
                        class="widget__categories--menu__label d-flex align-items-center"
                      >
                        <img
                          class="widget__categories--menu__img"
                          src="assets/img/optimize/order-seasonal-sabzi.jpg"
                          alt="categories-img"
                        />
                        <span class="widget__categories--menu__text"
                          >Seasonal Sabzi</span
                        >
                        <svg
                          class="widget__categories--menu__arrowdown--icon"
                          xmlns="http://www.w3.org/2000/svg"
                          width="12.355"
                          height="8.394"
                        >
                          <path
                            d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                            transform="translate(-6 -8.59)"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </label>
                      <ul class="widget__categories--sub__menu">
                        <li class="widget__categories--sub__menu--list">
                          <a
                            class="widget__categories--sub__menu--link d-flex align-items-center"
                            href="shop.html"
                          >
                            <img
                              class="widget__categories--sub__menu--img"
                              src="assets/img/optimize/seasonal-sabzi-7.jpg"
                              alt="categories-img"
                            />
                            <span class="widget__categories--sub__menu--text"
                              >Carrot</span
                            >
                          </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                          <a
                            class="widget__categories--sub__menu--link d-flex align-items-center"
                            href="shop.html"
                          >
                            <img
                              class="widget__categories--sub__menu--img"
                              src="assets/img/optimize/seasonal-sabzi-9.jpg"
                              alt="categories-img"
                            />
                            <span class="widget__categories--sub__menu--text"
                              >Radish</span
                            >
                          </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                          <a
                            class="widget__categories--sub__menu--link d-flex align-items-center"
                            href="shop.html"
                          >
                            <img
                              class="widget__categories--sub__menu--img"
                              src="assets/img/optimize/seasonal-sabzi-10.jpg"
                              alt="categories-img"
                            />
                            <span class="widget__categories--sub__menu--text"
                              >Beetroot</span
                            >
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>

                <div class="single__widget widget__bg">
                  <h2 class="widget__title h3">Top Rated Product</h2>
                  <div class="product__grid--inner">
                    <div class="product__grid--items d-flex align-items-center">
                      <div class="product__grid--items--thumbnail">
                        <a
                          class="product__items--link"
                          href="product-details.html"
                        >
                          <img
                            class="product__grid--items__img product__primary--img"
                            src="assets/img/optimize/weekly-sabzi-1.jpg"
                            alt="product-img"
                          />
                          <img
                            class="product__grid--items__img product__secondary--img"
                            src="assets/img/optimize/weekly-sabzi-1.jpg"
                            alt="product-img"
                          />
                        </a>
                      </div>
                      <div class="product__grid--items--content">
                        <h3 class="product__grid--items--content__title h4">
                          <a href="product-details.html">Potato</a>
                        </h3>
                        <div class="product__items--price">
                          <span class="current__price">100 Rs</span>
                          <!-- <span class="old__price">Rs48.00</span> -->
                        </div>
                        <div
                          class="product__items--rating d-flex align-items-center"
                        >
                          <ul class="d-flex">
                            <li class="product__items--rating__list">
                              <span class="product__items--rating__icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="10.105"
                                  height="9.732"
                                  viewBox="0 0 10.105 9.732"
                                >
                                  <path
                                    data-name="star - Copy"
                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                    transform="translate(0 -0.018)"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                            </li>
                            <li class="product__items--rating__list">
                              <span class="product__items--rating__icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="10.105"
                                  height="9.732"
                                  viewBox="0 0 10.105 9.732"
                                >
                                  <path
                                    data-name="star - Copy"
                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                    transform="translate(0 -0.018)"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                            </li>
                            <li class="product__items--rating__list">
                              <span class="product__items--rating__icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="10.105"
                                  height="9.732"
                                  viewBox="0 0 10.105 9.732"
                                >
                                  <path
                                    data-name="star - Copy"
                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                    transform="translate(0 -0.018)"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                            </li>
                            <li class="product__items--rating__list">
                              <span class="product__items--rating__icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="10.105"
                                  height="9.732"
                                  viewBox="0 0 10.105 9.732"
                                >
                                  <path
                                    data-name="star - Copy"
                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                    transform="translate(0 -0.018)"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                            </li>
                            <li class="product__items--rating__list">
                              <span class="product__items--rating__icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="10.105"
                                  height="9.732"
                                  viewBox="0 0 10.105 9.732"
                                >
                                  <path
                                    data-name="star - Copy"
                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                    transform="translate(0 -0.018)"
                                    fill="#c7c5c2"
                                  />
                                </svg>
                              </span>
                            </li>
                          </ul>
                          <span class="product__items--rating__count--number"
                            >(24)</span
                          >
                        </div>
                      </div>
                    </div>
                    <div class="product__grid--items d-flex align-items-center">
                      <div class="product__grid--items--thumbnail">
                        <a
                          class="product__items--link"
                          href="product-details.html"
                        >
                          <img
                            class="product__grid--items__img product__primary--img"
                            src="assets/img/optimize/seasonal-sabzi-7.jpg"
                            alt="product-img"
                          />
                          <img
                            class="product__grid--items__img product__secondary--img"
                            src="assets/img/optimize/seasonal-sabzi-7.jpg"
                            alt="product-img"
                          />
                        </a>
                      </div>
                      <div class="product__grid--items--content">
                        <h4 class="product__grid--items--content__title">
                          <a href="product-details.html">Carrot</a>
                        </h4>
                        <div class="product__items--price">
                          <span class="current__price">120 Rs</span>
                        </div>
                        <div
                          class="product__items--rating d-flex align-items-center"
                        >
                          <ul class="d-flex">
                            <li class="product__items--rating__list">
                              <span class="product__items--rating__icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="10.105"
                                  height="9.732"
                                  viewBox="0 0 10.105 9.732"
                                >
                                  <path
                                    data-name="star - Copy"
                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                    transform="translate(0 -0.018)"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                            </li>
                            <li class="product__items--rating__list">
                              <span class="product__items--rating__icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="10.105"
                                  height="9.732"
                                  viewBox="0 0 10.105 9.732"
                                >
                                  <path
                                    data-name="star - Copy"
                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                    transform="translate(0 -0.018)"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                            </li>
                            <li class="product__items--rating__list">
                              <span class="product__items--rating__icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="10.105"
                                  height="9.732"
                                  viewBox="0 0 10.105 9.732"
                                >
                                  <path
                                    data-name="star - Copy"
                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                    transform="translate(0 -0.018)"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                            </li>
                            <li class="product__items--rating__list">
                              <span class="product__items--rating__icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="10.105"
                                  height="9.732"
                                  viewBox="0 0 10.105 9.732"
                                >
                                  <path
                                    data-name="star - Copy"
                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                    transform="translate(0 -0.018)"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                            </li>
                            <li class="product__items--rating__list">
                              <span class="product__items--rating__icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="10.105"
                                  height="9.732"
                                  viewBox="0 0 10.105 9.732"
                                >
                                  <path
                                    data-name="star - Copy"
                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                    transform="translate(0 -0.018)"
                                    fill="#c7c5c2"
                                  />
                                </svg>
                              </span>
                            </li>
                          </ul>
                          <span class="product__items--rating__count--number"
                            >(24)</span
                          >
                        </div>
                      </div>
                    </div>
                    <div class="product__grid--items d-flex align-items-center">
                      <div class="product__grid--items--thumbnail">
                        <a
                          class="product__items--link"
                          href="product-details.html"
                        >
                          <img
                            class="product__grid--items__img product__primary--img"
                            src="assets/img/optimize/weekly-sabzi-7.jpg"
                            alt="product-img"
                          />
                          <img
                            class="product__grid--items__img product__secondary--img"
                            src="assets/img/optimize/weekly-sabzi-7.jpg"
                            alt="product-img"
                          />
                        </a>
                      </div>
                      <div class="product__grid--items--content">
                        <h4 class="product__grid--items--content__title">
                          <a href="product-details.html">Lemon</a>
                        </h4>
                        <div class="product__items--price">
                          <span class="current__price">80 Rs</span>
                          <!-- <span class="old__price">Rs52.00</span> -->
                        </div>
                        <div
                          class="product__items--rating d-flex align-items-center"
                        >
                          <ul class="d-flex">
                            <li class="product__items--rating__list">
                              <span class="product__items--rating__icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="10.105"
                                  height="9.732"
                                  viewBox="0 0 10.105 9.732"
                                >
                                  <path
                                    data-name="star - Copy"
                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                    transform="translate(0 -0.018)"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                            </li>
                            <li class="product__items--rating__list">
                              <span class="product__items--rating__icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="10.105"
                                  height="9.732"
                                  viewBox="0 0 10.105 9.732"
                                >
                                  <path
                                    data-name="star - Copy"
                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                    transform="translate(0 -0.018)"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                            </li>
                            <li class="product__items--rating__list">
                              <span class="product__items--rating__icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="10.105"
                                  height="9.732"
                                  viewBox="0 0 10.105 9.732"
                                >
                                  <path
                                    data-name="star - Copy"
                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                    transform="translate(0 -0.018)"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                            </li>
                            <li class="product__items--rating__list">
                              <span class="product__items--rating__icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="10.105"
                                  height="9.732"
                                  viewBox="0 0 10.105 9.732"
                                >
                                  <path
                                    data-name="star - Copy"
                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                    transform="translate(0 -0.018)"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                            </li>
                            <li class="product__items--rating__list">
                              <span class="product__items--rating__icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="10.105"
                                  height="9.732"
                                  viewBox="0 0 10.105 9.732"
                                >
                                  <path
                                    data-name="star - Copy"
                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                    transform="translate(0 -0.018)"
                                    fill="#c7c5c2"
                                  />
                                </svg>
                              </span>
                            </li>
                          </ul>
                          <span class="product__items--rating__count--number"
                            >(24)</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-9 col-lg-8">
              <div class="shop__product--wrapper">
                <div class="tab_content">
                  <div id="product_grid" class="tab_pane active show">
                    <div
                      class="product__section--inner product__section--style3__inner"
                    >
                      <div
                        class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 row-cols-2 mb--n30"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End shop section -->
    </main>

    <!-- ======= Service Section ======= -->
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
    <script src="{{ asset('assets/js/vegetable2.js')}}"></script>
</body>