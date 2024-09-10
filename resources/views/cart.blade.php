<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SabziBazaar - Organic Food HTML Template</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg" style="background-image: url('assets/img/Sabzi Pictures/3d-rendering-cartoon-shopping-cart.jpg'); background-size: cover">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">Shopping Cart</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- cart section start -->
        <section class="cart__section section--padding">
            <div class="container-fluid">
                <div class="cart__section--inner">
                    <form action="#">
                        <h2 class="cart__title mb-40">Shopping Cart</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart__table">
                                    <table class="cart__table--inner">
                                        <thead class="cart__table--header">
                                            <tr class="cart__table--header__items">
                                                <th class="cart__table--header__list">Product</th>
                                                <th class="cart__table--header__list">Price</th>
                                                <th class="cart__table--header__list">Quantity</th>
                                                <th class="cart__table--header__list">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="cart__table--body">
                                        </tbody>
                                    </table>
                                    <div class="continue__shopping d-flex justify-content-between">
                                        <a class="continue__shopping--link" href="{{ route('checkout') }}">Continue shopping</a>
                                        <button class="continue__shopping--clear" onclick="clearCart()">Clear Cart</button>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4">
                                <div class="cart__summary border-radius-10">
                                    <div class="coupon__code mb-30">
                                        <h3 class="coupon__code--title">Coupon</h3>
                                        <p class="coupon__code--desc">Enter your coupon code if you have one.</p>
                                        <div class="coupon__code--field d-flex">
                                            <label>
                                                <input class="coupon__code--field__input border-radius-5" placeholder="Coupon code" type="text">
                                            </label>
                                            <button class="coupon__code--field__btn btn" type="submit">Apply Coupon</button>
                                        </div>
                                    </div>
                                    <div class="cart__note mb-20">
                                        <h3 class="cart__note--title">Note</h3>
                                        <p class="cart__note--desc">Add special instructions for your seller...</p>
                                        <textarea class="cart__note--textarea border-radius-5"></textarea>
                                    </div>
                                    <div class="cart__summary--total mb-20">
                                        <table class="cart__summary--total__table">
                                            <tbody>
                                                <tr class="cart__summary--total__list">
                                                    <td class="cart__summary--total__title text-left">SUBTOTAL</td>
                                                    <td class="cart__summary--amount text-right">$860.00</td>
                                                </tr>
                                                <tr class="cart__summary--total__list">
                                                    <td class="cart__summary--total__title text-left">GRAND TOTAL</td>
                                                    <td class="cart__summary--amount text-right">$860.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="cart__summary--footer">
                                        <p class="cart__summary--footer__desc">Shipping & taxes calculated at checkout</p>
                                        <ul class="d-flex justify-content-between">
                                            <li><button class="cart__summary--footer__btn btn cart" type="submit">Update Cart</button></li>
                                            <li><a class="cart__summary--footer__btn btn checkout" href="checkout.html">Check Out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- cart section end -->

    </main>

    <!-- ======= Service Section ======= -->
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
    <!-- <script src="{{ asset('assets/js/vegetable.js')}}"></script> -->
    <script src="{{ asset('assets/js/cart.js')}}"></script>
    <script src="{{ asset('assets/js/query.js')}}"></script>
    <script src="{{ asset('assets/js/veggies.js')}}"></script>

    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     const veggieCart = JSON.parse(localStorage.getItem('veggieCart')) || [];
        //     const cartTableBody = document.querySelector('#cart-table-body'); // Assuming you have a table body to insert rows

        //     console.log(veggieCart)

        //     if (veggieCart.length > 0) {
        //         veggieCart.forEach((item) => {
        //             console.log(item)
        //         })
        //     //     veggieCart.forEach(item => {
        //     //         const row = document.createElement('tr');
        //     //         row.innerHTML = `
        //     //     <td><img src="${item.image}" alt="${item.title}" style="width: 50px; height: 50px;"></td>
        //     //     <td>${item.title}</td>
        //     //     <td>${item.price}</td>
        //     //     <td><input type="number" value="1" min="1" class="quantity"></td>
        //     //     <td><button class="remove-item" data-id="${item.id}">Remove</button></td>
        //     // `;
        //     //         cartTableBody.appendChild(row);
        //     //     });
        //     } else {
        //         // cartTableBody.innerHTML = '<tr><td colspan="5">Your cart is empty</td></tr>';
        //     }
        // });

        function loadCartPage() {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            const cartTableBody = document.querySelector(".cart__table--body");

            if (cart.length === 0) {
                cartTableBody.innerHTML = `<tr><td colspan="3">Your cart is empty.</td></tr>`;
                return;
            }

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
                    <div class="cart__product d-flex align-items-center">
                    <button class="cart__remove--btn" aria-label="remove button" type="button" onclick="removeProduct(${product.id}, this)">
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16px" height="16px">
                            <path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" />
                        </svg>
                    </button>
                    <div class="cart__thumbnail">
                        <a href="product-details.html">
                            <img class="border-radius-5" src="${product.img}" alt="cart-product">
                        </a>
                    </div>
                    <div class="cart__content">
                        <h3 class="cart__content--title h4"><a href="product-details.html">${product.title}</a></h3>
                    </div>
                </div>
            </td>
            <td class="cart__table--body__list">
                <span class="cart__price">${product.price}</span>
            </td>
            <td class="cart__table--body__list">
                <div class="quantity__box">
                    <button type="button" onclick="calculatePrice('decrease', this)" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                    <label>
                        <input type="number" class="quantity__number quickview__value--number" value="${product.quantity}" data-counter />
                    </label>
                    <button type="button" onclick="calculatePrice('increase', this)" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                </div>
            </td>
            <td class="cart__table--body__list">
                <span class="total__price"><b> ${total} Rs </b></span>
            </td>
        `;
                cartTableBody.appendChild(row);
            });
        }

        document.addEventListener("DOMContentLoaded", loadCartPage);
    </script>

</body>