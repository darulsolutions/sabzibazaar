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

    <!-- ======= Main Section ======= -->
    <main class="main__content_wrapper">
      <div class="contact__map--area section--padding pt-0">
        <iframe
          class="contact__map--iframe"
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14478.004393410793!2d67.0638195!3d24.8808836!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e91838246a1%3A0x8b443e4ddcdbe6fb!2sDARUL%20SOLUTIONS!5e0!3m2!1sen!2s!4v1724999524507!5m2!1sen!2s"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>

      <!-- Start contact section -->
      <section class="contact__section section--padding">
        <div class="container">
          <div class="section__heading text-center mb-40">
            <span class="section__heading--subtitle">Cntact With Me</span>
            <h2 class="section__heading--maintitle">Get In Touch</h2>
          </div>
          <div class="main__contact--area position__relative">
            <div class="contact__form">
              <h3 class="contact__form--title mb-40">Contact Me</h3>
              <form class="contact__form--inner" action="#">
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                      <label class="contact__form--label" for="input1"
                        >First Name
                        <span class="contact__form--label__star">*</span></label
                      >
                      <input
                        class="contact__form--input"
                        name="firstname"
                        id="input1"
                        placeholder="Your First Name"
                        type="text"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                      <label class="contact__form--label" for="input2"
                        >Last Name
                        <span class="contact__form--label__star">*</span></label
                      >
                      <input
                        class="contact__form--input"
                        name="lastname"
                        id="input2"
                        placeholder="Your Last Name"
                        type="text"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                      <label class="contact__form--label" for="input3"
                        >Phone Number
                        <span class="contact__form--label__star">*</span></label
                      >
                      <input
                        class="contact__form--input"
                        name="number"
                        id="input3"
                        placeholder="Phone number"
                        type="text"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                      <label class="contact__form--label" for="input4"
                        >Email
                        <span class="contact__form--label__star">*</span></label
                      >
                      <input
                        class="contact__form--input"
                        name="email"
                        id="input4"
                        placeholder="Email"
                        type="text"
                      />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="contact__form--list mb-15">
                      <label class="contact__form--label" for="input5"
                        >Write Your Message
                        <span class="contact__form--label__star">*</span></label
                      >
                      <textarea
                        class="contact__form--textarea"
                        name="message"
                        id="input5"
                        placeholder="Write Your Message"
                      ></textarea>
                    </div>
                  </div>
                </div>
                <button class="contact__form--btn btn" type="submit">
                  <span>Submit Now</span>
                </button>
              </form>
            </div>
            <div class="contact__info border-radius-5">
              <div class="contact__info--items">
                <h3 class="contact__info--content__title text-white mb-15">
                  Contact Us
                </h3>
                <div class="contact__info--items__inner d-flex">
                  <div class="contact__info--icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="31.568"
                      height="31.128"
                      viewBox="0 0 31.568 31.128"
                    >
                      <path
                        id="ic_phone_forwarded_24px"
                        d="M26.676,16.564l7.892-7.782L26.676,1V5.669H20.362v6.226h6.314Zm3.157,7a18.162,18.162,0,0,1-5.635-.887,1.627,1.627,0,0,0-1.61.374l-3.472,3.424a23.585,23.585,0,0,1-10.4-10.257l3.472-3.44a1.48,1.48,0,0,0,.395-1.556,17.457,17.457,0,0,1-.9-5.556A1.572,1.572,0,0,0,10.1,4.113H4.578A1.572,1.572,0,0,0,3,5.669,26.645,26.645,0,0,0,29.832,32.128a1.572,1.572,0,0,0,1.578-1.556V25.124A1.572,1.572,0,0,0,29.832,23.568Z"
                        transform="translate(-3 -1)"
                        fill="currentColor"
                      />
                    </svg>
                  </div>
                  <div class="contact__info--content">
                    <p class="contact__info--content__desc text-white">
                      <a href="tel:+01234-567890">+92 324 2410530</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="contact__info--items">
                <h3 class="contact__info--content__title text-white mb-15">
                  Email Address
                </h3>
                <div class="contact__info--items__inner d-flex">
                  <div class="contact__info--icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="31.57"
                      height="31.13"
                      viewBox="0 0 31.57 31.13"
                    >
                      <path
                        id="ic_email_24px"
                        d="M30.413,4H5.157C3.421,4,2.016,5.751,2.016,7.891L2,31.239c0,2.14,1.421,3.891,3.157,3.891H30.413c1.736,0,3.157-1.751,3.157-3.891V7.891C33.57,5.751,32.149,4,30.413,4Zm0,7.783L17.785,21.511,5.157,11.783V7.891l12.628,9.728L30.413,7.891Z"
                        transform="translate(-2 -4)"
                        fill="currentColor"
                      />
                    </svg>
                  </div>
                  <div class="contact__info--content">
                    <p class="contact__info--content__desc text-white">
                      <a href="mailto:info@example.com">info@sabzibazaar.com</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="contact__info--items">
                <h3 class="contact__info--content__title text-white mb-15">
                  Office Location
                </h3>
                <div class="contact__info--items__inner d-flex">
                  <div class="contact__info--icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="31.57"
                      height="31.13"
                      viewBox="0 0 31.57 31.13"
                    >
                      <path
                        id="ic_account_balance_24px"
                        d="M5.323,14.341V24.718h4.985V14.341Zm9.969,0V24.718h4.985V14.341ZM2,32.13H33.57V27.683H2ZM25.262,14.341V24.718h4.985V14.341ZM17.785,1,2,8.412v2.965H33.57V8.412Z"
                        transform="translate(-2 -1)"
                        fill="currentColor"
                      />
                    </svg>
                  </div>
                  <div class="contact__info--content">
                    <p class="contact__info--content__desc text-white">
                      Al Khaleej Tower, Office 505, 5th Floor, Shaheed-e-Millat
                      Rd, BMCHS Sharafabad, Karachi, Sindh
                    </p>
                  </div>
                </div>
              </div>
              <div class="contact__info--items">
                <h3 class="contact__info--content__title text-white mb-15">
                  Follow Us
                </h3>
                <ul class="contact__info--social d-flex">
                  <li class="contact__info--social__list">
                    <a
                      class="contact__info--social__icon"
                      target="_blank"
                      href="https://www.facebook.com"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="7.667"
                        height="16.524"
                        viewBox="0 0 7.667 16.524"
                      >
                        <path
                          data-name="Path 237"
                          d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z"
                          transform="translate(-960.13 -345.407)"
                          fill="currentColor"
                        ></path>
                      </svg>
                      <span class="visually-hidden">Facebook</span>
                    </a>
                  </li>
                  <li class="contact__info--social__list">
                    <a
                      class="contact__info--social__icon"
                      target="_blank"
                      href="https://twitter.com"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16.489"
                        height="13.384"
                        viewBox="0 0 16.489 13.384"
                      >
                        <path
                          data-name="Path 303"
                          d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z"
                          transform="translate(-951.23 -1140.849)"
                          fill="currentColor"
                        ></path>
                      </svg>
                      <span class="visually-hidden">Twitter</span>
                    </a>
                  </li>
                  <li class="contact__info--social__list">
                    <a
                      class="contact__info--social__icon"
                      target="_blank"
                      href="https://www.instagram.com"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16.497"
                        height="16.492"
                        viewBox="0 0 19.497 19.492"
                      >
                        <path
                          data-name="Icon awesome-instagram"
                          d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z"
                          transform="translate(0.004 -1.492)"
                          fill="currentColor"
                        ></path>
                      </svg>
                      <span class="visually-hidden">Instagram</span>
                    </a>
                  </li>
                  <li class="contact__info--social__list">
                    <a
                      class="contact__info--social__icon"
                      target="_blank"
                      href="https://www.youtube.com"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16.49"
                        height="11.582"
                        viewBox="0 0 16.49 11.582"
                      >
                        <path
                          data-name="Path 321"
                          d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z"
                          transform="translate(-951.269 -1359.8)"
                          fill="currentColor"
                        ></path>
                      </svg>
                      <span class="visually-hidden">Youtube</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End contact section -->

      <!-- Start our services section -->
      <section class="shipping__section section--padding">
        <div class="container">
          <div class="shipping__section--inner d-flex justify-content-center">
            <div class="shipping__items">
              <div class="shipping__items--icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="32.955"
                  height="23.967"
                  viewBox="0 0 32.955 23.967"
                >
                  <path
                    d="M29.461,9.992H24.967V4H4A3,3,0,0,0,1,7V23.473H4a4.494,4.494,0,0,0,8.988,0h8.988a4.494,4.494,0,1,0,8.988,0h3v-7.49ZM8.49,25.72a2.247,2.247,0,1,1,2.247-2.247A2.244,2.244,0,0,1,8.49,25.72ZM28.712,12.239l2.936,3.745H24.967V12.239ZM26.465,25.72a2.247,2.247,0,1,1,2.247-2.247A2.244,2.244,0,0,1,26.465,25.72Z"
                    transform="translate(-1 -4)"
                    fill="currentColor"
                    opacity="0.73"
                  />
                </svg>
              </div>
              <div class="shipping__items--content text-center">
                <h2 class="shipping__items--title h3">Operating Hours</h2>
                <p class="shipping__items--desc">
                  Monday to Friday: 11:00 AM - 10:00 PM
                </p>
              </div>
            </div>
            <div class="shipping__items">
              <div class="shipping__items--icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="27.63"
                  height="38.407"
                  viewBox="0 0 27.63 38.407"
                >
                  <path
                    d="M17.615,6.106V1L10.808,7.808l6.808,6.808V9.509A10.219,10.219,0,0,1,27.826,19.721a9.991,9.991,0,0,1-1.191,4.765l2.485,2.485a13.591,13.591,0,0,0-11.5-20.865Zm0,23.826A10.219,10.219,0,0,1,7.4,19.721,9.991,9.991,0,0,1,8.6,14.955L6.11,12.471a13.591,13.591,0,0,0,11.5,20.865v5.106l6.808-6.808-6.808-6.808Z"
                    transform="translate(-3.8 -0.517)"
                    fill="currentColor"
                    stroke-width="0.4"
                    opacity="0.7"
                  />
                </svg>
              </div>
              <div class="shipping__items--content text-center">
                <h2 class="shipping__items--title h3">Helpful Support</h2>
                <p class="shipping__items--desc">0324 2410530</p>
              </div>
            </div>
            <div class="shipping__items">
              <div class="shipping__items--icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="27.787"
                  height="22.735"
                  viewBox="0 0 27.787 22.735"
                >
                  <path
                    d="M26.261,3H3.526A2.534,2.534,0,0,0,1,5.526V23.209a2.534,2.534,0,0,0,2.526,2.526H26.261a2.534,2.534,0,0,0,2.526-2.526V5.526A2.534,2.534,0,0,0,26.261,3ZM14.894,13.1H3.526V10.578H14.894Zm0-5.052H3.526V5.526H14.894Z"
                    transform="translate(-1 -3)"
                    fill="currentColor"
                    opacity="0.7"
                  />
                </svg>
              </div>
              <div class="shipping__items--content text-center">
                <h2 class="shipping__items--title h3">Fast Shipping</h2>
                <p class="shipping__items--desc">Speeding Your Order to You</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- ======= Service Section ====== -->
    @include('utilities.services')


    <!-- ======= Footer Section ======= -->

    @include('utilities.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- All Script JS Plugins here  -->
    <script src="{{ asset('assets/js/vendor/popper.js')}}" defer="defer"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}" defer="defer"></script>
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/glightbox.min.js')}}"></script>

    <!-- Customscript js -->
    <script src="{{ asset('assets/js/script.js')}}"></script>
    <script src="{{ asset('assets/js/vegetable.js')}}"></script>
</body>