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
                                        </tbody>
                                    </table>
                                </div>
                                <div class="checkout__total">
                                    <table class="checkout__total--table">
                                        <tbody class="checkout__total--body">
                                            <tr class="checkout__total--items">
                                                <td class="checkout__total--title text-left">Subtotal </td>
                                                <td class="checkout__total--amount text-right">$860.00</td>
                                            </tr>
                                            <tr class="checkout__total--items">
                                                <td class="checkout__total--title text-left">Shipping</td>
                                                <td class="checkout__total--calculated__text text-right">Calculated at next step</td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="checkout__total--footer">
                                            <tr class="checkout__total--footer__items">
                                                <td class="checkout__total--footer__title checkout__total--footer__list text-left">Total </td>
                                                <td class="checkout__total--footer__amount checkout__total--footer__list text-right">$860.00</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </details>
                    </header>
                    <main class="main__content_wrapper section--padding pt-0">
                        <form action="#">
                            <div class="checkout__content--step section__shipping--address pt-0">
                                <div class="section__header checkout__header--style3 position__relative mb-25">
                                    <span class="checkout__order--number">Order #0021</span>
                                    <h2 class="section__header--title h3">Thank you submission</h2>
                                    <div class="checkout__submission--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -15px;" width="25.995" height="25.979" viewBox="0 0 512 512">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M416 128L192 384l-96-96" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="order__confirmed--area border-radius-5 mb-15">
                                    <h3 class="order__confirmed--title h4">Your order is confirmed</h3>
                                    <p class="order__confirmed--desc">You,ll receive a confirmation email with your order number shortly</p>
                                </div>
                                <div class="customer__information--area border-radius-5">
                                    <h3 class="customer__information--title h4">Customer Information</h3>
                                    <div class="customer__information--inner d-flex">
                                        <div class="customer__information--list">
                                            <div class="customer__information--step">
                                                <h4 class="customer__information--subtitle h5">Contact information</h4>
                                                <ul>
                                                    <li class="customer__information--text__link" id="user-contact"></li>
                                                </ul>
                                            </div>
                                            <div class="customer__information--step">
                                                <h4 class="customer__information--subtitle h5">Shipping address</h4>
                                                <p><span class="customer__information--text" id="delivery-address"></span></p>
                                            </div>
                                        </div>
                                        <div class="customer__information--list">
                                            <div class="customer__information--step">
                                                <h4 class="customer__information--subtitle h5">Payment method</h4>
                                                <ul>
                                                    <li><span class="customer__information--text">Cash on delivery</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__content--step__footer d-flex align-items-center">
                                <button class="continue__shipping--btn btn border-radius-5" onclick="userOrder()">Pay now</button>
                                <a class="previous__link--content" href="cart.html">Return to shipping</a>
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
        let userOrderData = "https://vegetable.vcapture.pk/api/orders"
        let contactNumber = document.getElementById("user-contact")
        let shippingAddress = document.getElementById("delivery-address")
        let vegetables = document.querySelectorAll(".product__description--name a")
        let vegetableQuantity = document.querySelectorAll(".product__thumbnail--quantity")
        let completeTotal = document.querySelector('#subtotal')

        function fetchUserData() {
            contactNumber.innerText = localStorage.getItem("userContact")
            shippingAddress.innerText = localStorage.getItem("deliveryAddress")
        }

        function userOrder() {
            let token = localStorage.getItem("token");

            if (!token) {
                console.error("Token not found in local storage. User may not be authenticated.");
                return;
            }

            let userData = {
                userContact: contactNumber.textContent.trim(),
                userAddress: shippingAddress.textContent.trim(),
                userVegetables: [],
                subTotal: completeTotal.textContent.trim()
            }

            vegetables.forEach((allVegetable, index) => {
                let vegetableName = allVegetable.textContent.trim();
                let quantity = vegetableQuantity[index].textContent.trim();

                userData.userVegetables.push({
                    vegetableName: allVegetable,
                    quantity: quantity
                });
            });

            console.log("Order Details ", userData);

            fetch(userOrderData, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${token}`
                },
                body: JSON.stringify(userData)
            }).then((response) => {
                if (response.ok) {
                    return response.json()
                }
            }).then((data) => {
                console.log("Order sent successfully", data)
            }).catch((error) => {
                console.error("Error in sending order")
            })
        }

        document.addEventListener("DOMContentLoaded", function() {
            fetchUserData()
            loadCartPage()
        });
    </script>
</body>

</html>