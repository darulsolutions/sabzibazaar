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

    <!-- Start preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>

                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>

                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>

                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>

                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>

                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>

                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                </div>
            </div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- End preloader -->

    <!-- Start checkout page area -->
    <div class="checkout__page--area">
        <div class="container">
            <div class="checkout__page--inner d-flex">
                <div class="main checkout__mian">
                    <header class="main__header checkout__mian--header mb-30">
                    <a class="logo logo__left mb-20" href="{{ route('home') }}"><img src="{{ asset('assets/img/Sabzi pictures/Sabzi_Bazaar_Logo_1_version-02.png') }}" width="200" height="200" alt="logo"></a>
                    <details class="order__summary--mobile__version">
                            <summary class="order__summary--toggle border-radius-5">
                                <span class="order__summary--toggle__inner">
                                    <span class="order__summary--toggle__icon">
                                        <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <span class="order__summary--toggle__text show">
                                        <span>Show order summary</span>
                                        <svg width="11" height="6" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle__dropdown" fill="currentColor">
                                            <path d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z"></path>
                                        </svg>
                                    </span>
                                    <span class="order__summary--final__price">$227.70</span>
                                </span>
                            </summary>
                            <div class="order__summary--section">
                                <div class="cart__table checkout__product--table">
                                    <table class="summary__table">
                                        <tbody class="summary__table--body">
                                            <!-- <tr class=" summary__table--items">
                                                <td class=" summary__table--list">
                                                    <div class="product__image two  d-flex align-items-center">
                                                        <div class="product__thumbnail border-radius-5">
                                                            <a href="product-details.html"><img class="border-radius-5" src="assets/img/product/small-product7.png" alt="cart-product"></a>
                                                            <span class="product__thumbnail--quantity">1</span>
                                                        </div>
                                                        <div class="product__description">
                                                            <h3 class="product__description--name h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                                            <span class="product__description--variant">COLOR: Blue</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class=" summary__table--list">
                                                    <span class="cart__price">£65.00</span>
                                                </td>
                                            </tr>
                                            <tr class="summary__table--items">
                                                <td class=" summary__table--list">
                                                    <div class="cart__product d-flex align-items-center">
                                                        <div class="product__thumbnail border-radius-5">
                                                            <a href="product-details.html"><img class="border-radius-5" src="assets/img/product/small-product2.png" alt="cart-product"></a>
                                                            <span class="product__thumbnail--quantity">1</span>
                                                        </div>
                                                        <div class="product__description">
                                                            <h3 class="product__description--name h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                                            <span class="product__description--variant">COLOR: Green</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class=" summary__table--list">
                                                    <span class="cart__price">£82.00</span>
                                                </td>
                                            </tr>
                                            <tr class=" summary__table--items">
                                                <td class=" summary__table--list">
                                                    <div class="cart__product d-flex align-items-center">
                                                        <div class="product__thumbnail border-radius-5">
                                                            <a href="product-details.html"><img class="border-radius-5" src="assets/img/product/small-product4.png" alt="cart-product"></a>
                                                            <span class="product__thumbnail--quantity">1</span>
                                                        </div>
                                                        <div class="product__description">
                                                            <h3 class="product__description--name h4"><a href="product-details.html">Raw-onions-surface</a></h3>
                                                            <span class="product__description--variant">COLOR: White</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class=" summary__table--list">
                                                    <span class="cart__price">£78.00</span>
                                                </td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="checkout__discount--code">
                                    <form class="d-flex" action="#">
                                        <label>
                                            <input class="checkout__discount--code__input--field border-radius-5" placeholder="Gift card or discount code" type="text">
                                        </label>
                                        <button class="checkout__discount--code__btn btn border-radius-5" type="submit">Apply</button>
                                    </form>
                                </div>
                                <div class="checkout__total">
                                    <table class="checkout__total--table">
                                        <tbody class="checkout__total--body">
                                            <tr class="checkout__total--items">
                                                <td class="checkout__total--title text-left">Total </td>
                                                <td class="checkout__total--amount text-right"></td>
                                            </tr>
                                            <tr class="checkout__total--items">
                                                <td class="checkout__total--title text-left">Shipping</td>
                                                <td class="checkout__total--calculated__text text-right"></td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="checkout__total--footer">
                                            <tr class="checkout__total--footer__items">
                                                <td class="checkout__total--footer__title checkout__total--footer__list text-left">Subtotal</td>
                                                <td class="checkout__total--footer__amount checkout__total--footer__list text-right"></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </details>
                        <nav>
                            <ol class="breadcrumb checkout__breadcrumb d-flex">
                                <li class="breadcrumb__item breadcrumb__item--completed d-flex align-items-center">
                                    <a class="breadcrumb__link" href="cart.html">Cart</a>
                                    <svg class="readcrumb__chevron-icon" xmlns="http://www.w3.org/2000/svg" width="17.007" height="16.831" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path>
                                    </svg>
                                </li>
                                <li class="breadcrumb__item breadcrumb__item--current d-flex align-items-center">
                                    <a class="breadcrumb__link" href="cart.html">Information</a>
                                    <svg class="readcrumb__chevron-icon" xmlns="http://www.w3.org/2000/svg" width="17.007" height="16.831" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path>
                                    </svg>
                                </li>
                                <li class="breadcrumb__item breadcrumb__item--blank d-flex align-items-center">
                                    <a class="breadcrumb__link" href="cart.html">Shipping</a>
                                    <svg class="readcrumb__chevron-icon" xmlns="http://www.w3.org/2000/svg" width="17.007" height="16.831" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path>
                                    </svg>
                                </li>
                                <li class="breadcrumb__item breadcrumb__item--blank">
                                    <span class="breadcrumb__text current">Payment</span>
                                </li>
                            </ol>
                        </nav>
                    </header>
                    <main class="main__content_wrapper section--padding pt-0">
                        <form action="" onsubmit="userShippingData(event)">
                            @csrf
                            <div class="checkout__content--step checkout__contact--information2 border-radius-5">
                                <div class="checkout__review d-flex justify-content-between align-items-center">
                                    <div class="checkout__review--inner d-flex align-items-center">
                                        <label class="checkout__review--label">Contact</label>
                                        <span class="checkout__review--content" id="user-contact"></span>
                                    </div>
                                    <div class="checkout__review--link">
                                        <button class="checkout__review--link__text" type="button">Change</button>
                                    </div>
                                </div>
                                <div class="checkout__review d-flex justify-content-between align-items-center">
                                    <div class="checkout__review--inner d-flex align-items-center">
                                        <label class="checkout__review--label"> Ship to</label>
                                        <span class="checkout__review--content" id="user-address"></span>
                                    </div>
                                    <div class="checkout__review--link">
                                        <button class="checkout__review--link__text" type="button">Change</button>
                                    </div>
                                </div>
                                <div class="checkout__review d-flex justify-content-between align-items-center">
                                    <div class="checkout__review--inner d-flex align-items-center">
                                        <label class="checkout__review--label"> Method</label>
                                        <span class="checkout__review--content"> Cash on delivery</span>
                                    </div>
                                    <div class="checkout__review--link">
                                        <button class="checkout__review--link__text" type="button">Change</button>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="checkout__content--step section__shipping--address">
                                <div class="section__header mb-25">
                                    <h2 class="section__header--title h3">Payment</h2>
                                    <p class="section__header--desc">All transactions are secure and encrypted.</p>
                                </div>
                                <div class="checkout__content--step__inner3 border-radius-5">
                                    <div class="checkout__address--content__header d-flex align-items-center justify-content-between">
                                        <span class="checkout__address--content__title">Credit card</span>
                                        <span class="heckout__address--content__icon"><img src="assets/img/icon/credit-card.svg" alt="card"></span>
                                    </div>
                                    <div class="checkout__content--input__box--wrapper ">
                                        <div class="row">
                                            <div class="col-12 mb-12">
                                                <div class="checkout__input--list position__relative">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" placeholder="Card number" type="text">
                                                    </label>
                                                    <button class="checkout__input--field__button" aria-label="search button" type="button">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15.51" height="15.443" viewBox="0 0 512 512">
                                                            <path d="M336 208v-95a80 80 0 00-160 0v95" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                            <rect x="96" y="208" width="320" height="272" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" placeholder="Name on card" type="text">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" placeholder="piration date (MM / YY)" type="text">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-12">
                                                <div class="checkout__input--list position__relative">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" placeholder="Security code" type="text">
                                                    </label>
                                                    <button class="checkout__input--field__button" type="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.51" height="18.443" viewBox="0 0 512 512">
                                                            <title>Help Circle</title>
                                                            <path d="M256 80a176 176 0 10176 176A176 176 0 00256 80z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                            <path d="M200 202.29s.84-17.5 19.57-32.57C230.68 160.77 244 158.18 256 158c10.93-.14 20.69 1.67 26.53 4.45 10 4.76 29.47 16.38 29.47 41.09 0 26-17 37.81-36.37 50.8S251 281.43 251 296" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="28" />
                                                            <circle cx="250" cy="348" r="20" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="checkout__content--step section__shipping--address pt-10 mt-5">
                                <div class="section__header mb-25">
                                    <h2 class="section__header--title h3">Billing address</h2>
                                    <p class="section__header--desc">Select the address that matches your card or payment method.</p>
                                </div>
                                <div class="checkout__content--step__inner3 border-radius-5">
                                    <div class="checkout__address--content__header">
                                        <div class="shipping__contact--box__list">
                                            <div class="shipping__radio--input">
                                                <input class="shipping__radio--input__field" id="radiobox" name="checkmethod" type="radio">
                                            </div>
                                            <label class="shipping__radio--label" for="radiobox">
                                                <span class="shipping__radio--label__primary">Same as shipping address</span>
                                            </label>
                                        </div>
                                        <div class="shipping__contact--box__list">
                                            <div class="shipping__radio--input">
                                                <input class="shipping__radio--input__field" id="radiobox2" name="checkmethod" type="radio">
                                            </div>
                                            <label class="shipping__radio--label" for="radiobox2">
                                                <span class="shipping__radio--label__primary">Use a different billing address</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="checkout__content--input__box--wrapper ">
                                        <div class="row">
                                            <div class="col-lg-6 mb-12">
                                                <div class="checkout__input--list ">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" id="first-name" placeholder="First name" type="text">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" id="last-name" placeholder="Last name" type="text">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" id="apartment" placeholder="Apartment, suite, etc. (optional)" type="text">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" id="city" value="Karachi" placeholder="City" type="text" readonly>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <textarea class="checkout__input--field border-radius-5" id="delivery-address" placeholder="Delivery Address" type="text"></textarea>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__content--step__footer d-flex align-items-center">
                                <button class="continue__shipping--btn btn border-radius-5" type="submit">Pay now</button>
                                <a class="previous__link--content" href="#">Return to shipping</a>
                            </div>
                        </form>
                    </main>
                    <footer class="main__footer main__footer--wrapper">
                        <p class="copyright__content">Copyright © 2022 <a class="copyright__content--link text__primary" href="index.html">Grocee</a> . All Rights Reserved.Design By Grocee</p>
                    </footer>
                </div>
                <aside class="checkout__sidebar sidebar">
                    <div class="cart__table checkout__product--table">
                        <table class="cart__table--inner">
                            <tbody class="cart__table--body">
                            </tbody>
                        </table>
                    </div>
                    <div class="checkout__total">
                        <table class="checkout__total--table">
                            <tbody class="checkout__total--body">
                                <tr class="checkout__total--items">
                                    <td class="checkout__total--title text-left">Total </td>
                                    <td class="checkout__total--amount text-right" id="total"></td>
                                </tr>
                                <tr class="checkout__total--items">
                                    <td class="checkout__total--title text-left">Shipping</td>
                                    <td class="checkout__total--calculated__text text-right">As per your location</td>
                                </tr>
                            </tbody>
                            <tfoot class="checkout__total--footer">
                                <tr class="checkout__total--footer__items">
                                    <td class="checkout__total--footer__title checkout__total--footer__list text-left">Subtotal </td>
                                    <td class="checkout__total--footer__amount checkout__total--footer__list text-right" id="subtotal"></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- End checkout page area -->

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292" />
        </svg></button>

    <!-- All Script JS Plugins here  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/vendor/popper.js') }}" defer="defer"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}" defer="defer"></script>
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/glightbox.min.js') }}"></script>

    <!-- Customscript js -->
    <script src="{{ asset('assets/js/script.js')}}"></script>
    <!-- <script src="{{ asset('assets/js/vegetable.js')}}"></script> -->
    <!-- <script src="{{ asset('assets/js/cart.js')}}"></script> -->
    <script src="{{ asset('assets/js/veggies.js')}}"></script>
    <script src="{{ asset('assets/js/query.js')}}"></script>

    <script>
        function loadCartPage() {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            const cartTableBody = document.querySelector(".cart__table--body");
            let totalPriceData = document.getElementById("total")
            let subTotalPrice = document.getElementById("subtotal")

            if (cart.length === 0) {
                cartTableBody.innerHTML = `<tr><td colspan="3">Your cart is empty.</td></tr>`;
                return;
            }

            let allTotal = 0


            cart.forEach(product => {
                console.log(product)
                let productPrice = product.price
                let convertedProductPrice = productPrice.split("Rs")[0].trim()
                let productPriceNumber = parseInt(convertedProductPrice)
                let total = productPriceNumber * product.quantity
                let row = document.createElement("tr");
                row.className = "cart__table--body__items";
                row.innerHTML =
                    `
                                    <td class="cart__table--body__list">
                                        <div class="product__image two  d-flex align-items-center">
                                            <div class="product__thumbnail border-radius-5">
                                                <a href="product-details.html"><img class="border-radius-5" width='100' height='100' src="${product.img}" alt="cart-product"></a>
                                                <span class="product__thumbnail--quantity">${product.quantity}</span>
                                            </div>
                                            <div class="product__description">
                                                <h3 class="product__description--name h4"><a href="product-details.html">${product.title}</a></h3>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__table--body__list">
                                        <span class="cart__price">${total} Rs</span>
                                    </td>
        `;
                cartTableBody.appendChild(row)
                allTotal += total
                console.log(allTotal)
                totalPriceData.innerText = allTotal + " Rs "
                subTotalPrice.innerText = allTotal + " Rs "
            });
        }


        let userData = "https://vegetable.vcapture.pk/api/users"

        let contactNumber = document.getElementById("user-contact")
        let shippingAddress = document.getElementById("user-address")
        let firstName = document.getElementById("first-name")
        let lastName = document.getElementById("last-name")
        let apartment = document.getElementById("apartment")
        let deliveryAddress = document.getElementById("delivery-address")
        
        function userShippingData(event){
            event.preventDefault()


            if(firstName.value == "" && lastName.value == "" && deliveryAddress.value == ""){
                console.log("First Name, Last Name, Delivery Address are must be filled neccassary")
                return
            }

            window.location.href = "/checkout3"
        }

        function fetchUserData() {

            contactNumber.innerText = localStorage.getItem("userContact")
            shippingAddress.innerText = localStorage.getItem("deliveryAddress")
            firstName.value = localStorage.getItem("firstName")
            lastName.value = localStorage.getItem("lastName")
            apartment.value = localStorage.getItem("apartment")
            deliveryAddress.value = localStorage.getItem("deliveryAddress")
        }


        document.addEventListener("DOMContentLoaded", function() {
            fetchUserData()
            loadCartPage()
        });
    </script>


</body>

</html>