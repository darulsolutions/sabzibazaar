// let carts = [];

// function cartPage(item) {
//     let quantityNumber = document.querySelector(".veggie__quantity");
//     let itemId = document.querySelector(".product_id");
//     const imgSrc = productContainer.querySelector("img").src;
//     const title = productContainer.querySelector(
//         ".product__items--content__title a"
//     ).innerText;
//     const price = productContainer.querySelector(".current__price").innerText;

//     item = {
//         id: itemId,
//         quantity: 0,
//         img: imgSrc,
//         title: title,
//         price: price,
//     };
//     cart.push(item);

//     if (quantityNumber > 1) {
//         let cartTable = document.querySelector(".cart__table--body");
//         let div = document.createElement("div");

//         div.innerHTML = `
//         <tr class="cart__table--body__items">
//         <td class="cart__table--body__list">
//         <div class="cart__product d-flex align-items-center">
//             <button class="cart__remove--btn" aria-label="search button" type="button">
//                 <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16px" height="16px">
//                     <path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" />
//                 </svg>
//             </button>
//             <div class="cart__thumbnail">
//                 <a href="product-details.html"><img class="border-radius-5" src="${item.img}" alt="cart-product"></a>
//             </div>
//             <div class="cart__content">
//                 <h3 class="cart__content--title h4"><a href="product-details.html">${item.title}</a></h3>
//             </div>
//         </div>
//         </td>
//         <td class="cart__table--body__list">
//         <span class="cart__price">${item.price}</span>
//         </td>
//         <td class="cart__table--body__list">
//         <div class="quantity__box">
//             <button type="button" onclick="calculatePrice('decrease', this)" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
//             <label>
//                 <input type="number" class="quantity__number quickview__value--number" value="1" data-counter />
//             </label>
//             <button type="button" onclick="calculatePrice('increase', this)" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
//         </div>
//         </td>
//         <td class="cart__table--body__list">
//         <span class="cart__price end"></span>
//         </td>
//         </tr>
//         `;

//         quantityNumber.appendChild(div);
//         window.location.href("cart.blade.php");
//     }
// }

function addToCart(button) {
    // Get the parent container of the product
    const productContainer = button.closest(".product__items");

    // Get product data
    const title = productContainer.querySelector(
        ".product__items--content__title"
    ).innerText;
    const price = productContainer.querySelector(".current__price").innerText;
    const img = productContainer.querySelector(".product__items--img").src;
    const quantity = productContainer.querySelector(".quantity__number").value;

    // Create an object for the product
    const product = {
        title: title,
        price: price,
        img: img,
        quantity: quantity,
    };

    // Retrieve existing cart data from local storage
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    // Add the new product to the cart
    cart.push(product);

    // Save the updated cart back to local storage
    localStorage.setItem("cart", JSON.stringify(cart));

    // Redirect to the cart page
    window.location.href = "/cart";
}

function updateQuantity(button, change) {
    const quantityInput =
    button.parentElement.querySelector(".quantity__number");
    const currentQuantity = parseInt(quantityInput.value);
    const newQuantity = Math.max(currentQuantity + change, 1); // Ensure quantity doesn't go below 1
    quantityInput.value = newQuantity;
}
