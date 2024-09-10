const vegetableNames = document.querySelectorAll(
    ".product__items--content__title a"
);
const vegetablePrices = document.querySelectorAll(
    ".product__items--price .current__price"
);
const vegetableImages = document.querySelectorAll(".product__primary--img");
const vegetableSalePrices = document.querySelectorAll(".product__badge--items");
const vegetableList = document.querySelectorAll(".product__tab--btn__list");
const cartItemPrice = document.querySelectorAll(".cart__price");
const cartItemTotal = document.querySelectorAll(".end");
const miniCartProduct = document.querySelector(".minicart__product");
const vegetableData = "https://vegetable.vcapture.pk/api/products";
const minimumAmountAndDelivery =
    "https://vegetable.vcapture.pk/api/minimum-amount-and-delivery";
let subTotal = 0;

async function SabziBazaarData() {
    try {
        let data = await fetch(vegetableData);
        let response = await data.json();
        console.log(response);

        const productsPerTab = 6; // Number of products per tab
        const totalTabs = Math.ceil(response.length / productsPerTab);

        // Generate tabs
        const tabButtonsContainer =
            document.querySelector(".product__tab--one");
        const tabContentsContainer = document.querySelector(".tab_content");

        tabButtonsContainer.innerHTML = ""; // Clear existing tabs
        tabContentsContainer.innerHTML = ""; // Clear existing tab contents

        for (let i = 0; i < totalTabs; i++) {
            const tabButton = document.createElement("li");
            tabButton.className = "product__tab--btn__list";
            if (i === 0) tabButton.classList.add("active"); // Set first tab as active
            tabButton.dataset.toggle = "tab";
            tabButton.dataset.target = `#product_${i + 1}`;
            tabButton.textContent = i + 1; // Tab number
            tabButtonsContainer.appendChild(tabButton);

            const tabContent = document.createElement("div");
            tabContent.id = `product_${i + 1}`;
            tabContent.className = `tab_pane ${i === 0 ? "active show" : ""}`;

            const row = document.createElement("div");
            row.className =
                "row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28";

            response
                .slice(i * productsPerTab, (i + 1) * productsPerTab)
                .forEach((all) => {
                    const col = document.createElement("div");
                    col.className = "col mb-28";
                    col.innerHTML = `
            <div class="product__items products">
              <div class="product__items--thumbnail">
                <a class="product__items--link" href="product-details.html">
                  <img class="product__items--img product__primary--img" src="https://vegetable.vcapture.pk/public/product_images/${all.img}" alt="product-img" />
                </a>
                <input type='hidden' class='product_id' name='product_id' value='${all.id}'>
                <div class="product__badge">
                  <span class="product__badge--items sale">${all.discount}% off</span>
                </div>
              </div>
              <div class="product__items--content text-center">
                <h3 class="product__items--content__title h4">
                  <a href="product-details.html">${all.title}</a>
                </h3>
                <div class="product__items--price">
                  <span class="current__price">${all.price} Rs</span>
                </div>
              </div>
            </div>
          `;

                    // Append quantity box
                    const quantityBoxDiv = document.createElement("div");
                    quantityBoxDiv.className =
                        "quantity__box justify-content-center";
                    quantityBoxDiv.innerHTML = `

            <button type="button" onclick="quantity('decrease', this, ${all.id})" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
            <label>
              <input type="number" class="quantity__number veggie__quantity quickview__value--number" name="quantity__number" value="0" data-counter="" readonly>
            </label>
            <button type="button" onclick="quantity('increase', this, ${all.id})" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
          `;

                    col.querySelector(".product__items--content").appendChild(
                        quantityBoxDiv
                    );

                    row.appendChild(col);
                });

            tabContent.appendChild(row);
            tabContentsContainer.appendChild(tabContent);
        }
    } catch {
        console.error("Error");
    }
}

let cart = [];
let totalItem = 0;

function quantity(action, button, itemId) {
    const quantityInput = button.parentNode.querySelector(".quantity__number");
    let itemCount = document.querySelector("#total-items");
    let inputNumber = parseInt(quantityInput.value);

    if (action === "decrease" && inputNumber > 0) {
        inputNumber -= 1;
        totalItem -= 1;
    } else if (action === "increase") {
        inputNumber += 1;
        totalItem += 1;
    }

    quantityInput.value = inputNumber;

    let item = cart.find((item) => item.id === itemId);
    if (!item) {
        const productContainer = button.closest(".product__items");
        const imgSrc = productContainer.querySelector("img").src;
        const title = productContainer.querySelector(
            ".product__items--content__title a"
        ).innerText;
        const price =
            productContainer.querySelector(".current__price").innerText;

        item = {
            id: itemId,
            quantity: 0,
            img: imgSrc,
            title: title,
            price: price,
        };
        cart.push(item);
    }

    item.quantity = inputNumber;

    if (inputNumber > 0) {
        addIntoCart(item);
    } else {
        removeFromCart(itemId);
    }
    itemCount.textContent = totalItem;
}

function addIntoCart(item) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    let existingMiniCartItem = cart.find((cartItem) => cartItem.id === item.id);

    if (existingMiniCartItem) {
        existingMiniCartItem.quantity = item.quantity;
    } else {
        cart.push(item);
    }

    localStorage.setItem("cart", JSON.stringify(cart));

    let miniCartProduct = document.querySelector(".minicart__product");
    let existingCartItem = miniCartProduct.querySelector(
        `[data-id="${item.id}"]`
    );

    if (existingCartItem) {
        existingCartItem.querySelector(".quantity__number").value =
            item.quantity;
    } else {
        let div = document.createElement("div");
        div.className = "minicart__product--items d-flex";
        div.dataset.id = item.id;
        div.innerHTML = `
            <div class="minicart__thumb">
                <a href="product-details.html"><img src="${item.img}" alt="product-img"></a>
            </div>
            <div class="minicart__text pb-3">
                <h4 class="minicart__subtitle"><a href="product-details.html">${item.title}</a></h4>
                <div class="minicart__price">
                    <span class="current__price">${item.price}</span>
                </div>
                <div class="minicart__text--footer d-flex align-items-center">
                    <div class="quantity__box minicart__quantity">
                        <button type="button" class="quantity__value decrease" aria-label="quantity value" onclick="quantity('decrease', this, ${item.id})">-</button>
                        <label>
                            <input type="number" class="quantity__number" value="${item.quantity}" readonly />
                        </label>
                        <button type="button" class="quantity__value increase" aria-label="quantity value" onclick="quantity('increase', this, ${item.id})">+</button>
                    </div>
                    <button class="minicart__product--remove" type="button" onclick="removeFromCart(${item.id})">Remove</button>
                </div>
            </div>
        `;
        miniCartProduct.appendChild(div);
    }

    priceTotal();
}

function priceTotal() {
    fetch(minimumAmountAndDelivery)
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            const deliveryCharges = parseInt(data.delivery);
            let subTotal = 0;

            cart.forEach((item) => {
                let price = parseFloat(item.price);
                let quantity = parseInt(item.quantity);
                subTotal += price * quantity + deliveryCharges;
            });

            let discount = cart.length > 0 ? parseFloat(cart[0].discount) || 0 : 0;
            let discountAmount = subTotal * (discount / 100);
            let total = subTotal - discountAmount;

            document.querySelector("#total").innerHTML = `<b> ${total.toFixed(2)} Rs </b>`;
            document.querySelector("#sub-total").innerHTML = `<b> ${subTotal.toFixed(2)} Rs </b>`;
            document.querySelector("#delivery-charges").innerHTML = `<b> ${deliveryCharges.toFixed(2)} Rs </b>`;
        });
}

function removeFromCart(itemId) {
    cart = cart.filter((item) => item.id !== itemId);

    let miniCartProduct = document.querySelector(".minicart__product");
    let itemToRemove = miniCartProduct.querySelector(`[data-id="${itemId}"]`);
    if (itemToRemove) {
        miniCartProduct.removeChild(itemToRemove);
    }
}

function openCart() {
    let miniCart = document.querySelector(".offCanvas__minicart");
    miniCart.classList.add("active");
}

// function addIntoCartPage(itemId){
//     let item = cart.find(item => item.id === itemId)
//     if(item){
//         let miniCartImage = document.querySelector('.minicart__thumb img').src
//         let miniCartTitle = document.querySelector('.minicart__subtitle a').innerHTML
//         let miniCartPrice = document.querySelector('.current__price').innerHTML

//         veggieCart.push({
//             id: itemId,
//             image: miniCartImage,
//             title: miniCartTitle,
//             price: miniCartPrice
//         })

//         window.location.href = "/cart"
//     }
// }

// function removeFromCart(itemId) {
//     let cart = JSON.parse(localStorage.getItem("cart")) || [];
//     cart = cart.filter(item => item.id !== itemId);
//     localStorage.setItem("cart", JSON.stringify(cart));
//     loadCartPage();
// }

function removeProduct(itemId, button) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    cart = cart.filter((item) => item.id !== itemId);
    localStorage.setItem("cart", JSON.stringify(cart));

    let row = button.closest("tr");
    if (row) {
        row.remove();
    }

    const cartTableBody = document.querySelector(".cart__table--body");
    if (cart.length === 0) {
        cartTableBody.innerHTML = `<tr><td colspan="3">Your cart is empty.</td></tr>`;
    }
}

function calculatePrice(action, button) {
    let quantityInput = button
        .closest(".quantity__box")
        .querySelector(".quantity__number");
    let quantity = parseInt(quantityInput.value);

    let priceElement = button.closest("tr").querySelector(".cart__price");
    let price = parseFloat(priceElement.textContent.replace("$", ""));

    if (action === "decrease" && quantity > 1) {
        quantity -= 1;
    } else if (action === "increase") {
        quantity += 1;
    }
    quantityInput.value = quantity;

    let totalPriceElement = button.closest("tr").querySelector(".total__price");
    let totalPrice = price * quantity;

    totalPriceElement.innerHTML = `<b> ${totalPrice} Rs </b>`;
}

function clearCart() {
    let clear = document.querySelector(".cart__table--body");
    clear.innerHTML = "<b> Your cart is empty </b>";

    localStorage.removeItem("cart");
}

function enableSubmitButton() {
    const check = document.getElementById("check2");
    const submitButton = document.querySelector(".account__login--btn");

    if (check.checked) {
        submitButton.disabled = false;
    } else {
        submitButton.disabled = true;
    }
}

const registerUserData = "https://vegetable.vcapture.pk/api/register";
const loginUserData = "https://vegetable.vcapture.pk/api/login";

function registerUser(event) {
    event.preventDefault();

    const name = document.getElementById("name").value;
    const contact = document.getElementById("contact").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirm-password").value;
    const address = document.getElementById("address").value;
    const wrongData = document.getElementById("wrong-data");

    const contactPattern = /^03\d{9}$/;

    wrongData.innerHTML = "";

    // Validation
    if (
        name === "" ||
        contact === "" ||
        password === "" ||
        confirmPassword === "" ||
        address === ""
    ) {
        console.log("All fields must be filled");
        wrongData.innerHTML =
            '<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-asterisk" viewBox="0 0 16 16"><path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1"/></svg>All fields must be filled</span>';
        return;
    }

    if (!contactPattern.test(contact)) {
        console.log("Your contact number is not in the correct pattern");
        wrongData.innerHTML =
            '<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-asterisk" viewBox="0 0 16 16"><path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1"/></svg>Your contact number is not in the correct pattern</span>';
        return;
    }

    if (password !== confirmPassword) {
        console.log("Your password and confirm password are not the same");
        wrongData.innerHTML =
            '<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-asterisk" viewBox="0 0 16 16"><path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1"/></svg>Your password and confirm password are not the same</span>';
        return;
    }

    const data = {
        name: name,
        contact: contact,
        password: password,
        confirmPassword: confirmPassword,
        address: address,
    };

    fetch(registerUserData, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
    })
        .then((response) => {
            if (response.status === 200) {
                return response.json();
            } else {
                throw new Error("Already registered");
            }
        })
        .then((data) => {
            console.log("Success:", data);
            let userToken = data.token;
            localStorage.setItem("token", userToken);
            window.location.href = "/login";
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}

function loginUser(event) {
    event.preventDefault();

    let userContact = document.getElementById("login-contact").value;
    let userPassword = document.getElementById("login-password").value;

    const userData = {
        contact: userContact,
        password: userPassword,
    };

    fetch(loginUserData, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(userData),
    })
        .then((response) => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error("Login failed");
            }
        })
        .then((data) => {
            const userToken = data.token;

            localStorage.setItem("token", userToken);
            localStorage.setItem("userContact", userContact);

            if (!userToken) {
                alert("Invalid credentials");
            } else {
                window.location.href = "/";
            }
        })
        .catch((error) => {
            console.error("Login Error:", error);
        });
}

function fetchUserDetail(token) {
    const usersDetailData = `https://vegetable.vcapture.pk/api/users/${token}`;

    fetch(usersDetailData)
        .then((response) => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error("Failed to fetch user details");
            }
        })
        .then((data) => {
            console.log(data);
            const userName = document.querySelector(
                ".suport__contact #user-name"
            );
            userName.innerHTML = data.name;
        })
        .catch((error) => {
            console.error("Error fetching user details:", error);
        });
}

function userShippingData(event) {
    event.preventDefault();
    let firstName = document.getElementById("first-name").value;
    let lastName = document.getElementById("last-name").value;
    let company = document.getElementById("company").value;
    let apartment = document.getElementById("apartment").value;
    let city = document.getElementById("city").value;
    let deliveryAddress = document.getElementById("delivery-address").value;

    if (firstName == "" && lastName == "" && deliveryAddress == "") {
        console.log("First name, Last name and delivery address are required");
        return;
    }

    localStorage.setItem("firstName", firstName);
    localStorage.setItem("lastName", lastName);
    localStorage.setItem("company", company);
    localStorage.setItem("apartment", apartment);
    localStorage.setItem("deliveryAddress", deliveryAddress);

    window.location.href = "/checkout2";

    console.log("First Name ", firstName);
    console.log("Last Name", lastName);
    console.log("company", company);
    console.log("apartment", apartment);
    console.log("city", city);
    console.log("delivery address", deliveryAddress);
}

function orderCheck(page) {
    fetch(minimumAmountAndDelivery)
        .then((response) => response.json())
        .then((data) => {
            console.log(data);

            let minimumAmount = parseInt(data.minimum_amount);
            let subTotal = document.getElementById("sub-total").textContent;
            let convertedSubTotal = subTotal.split("Rs")[0].trim();
            let subTotalNumber = parseInt(convertedSubTotal);

            if (subTotalNumber < minimumAmount) {
                alert(`Minimum order value is Rs. ${minimumAmount}`);
                return;
            }

            if (page === "cart") {
                window.location.href = "/cart";
            } else if (page === "checkout") {
                window.location.href = "/checkout";
            }
        })
        .catch((error) => {
            console.error("Error fetching data:", error);
        });
}

SabziBazaarData();

// function loginUser(event) {
//     event.preventDefault();

//     let userToken = localStorage.getItem("token");
//     console.log("Retrieved token:", userToken);

//     if (userToken) {
//         fetch(loginUserData, {
//             method: "POST",
//             headers: {
//                 "Content-Type": "application/json",
//                 Authorization: `Bearer ${userToken}`,
//             },
//         })
//             .then((response) => {
//                 if (response.status === 200) {
//                     return response.json();
//                 } else {
//                     // Handle invalid or expired token
//                     window.location.href = "/login";
//                     throw new Error("Token is invalid or expired");
//                 }
//             })
//             .then((data) => {
//                 console.log("Login Success:", data);
//                 window.location.href = "/";
//             })
//             .catch((error) => {
//                 console.error("Login Error:", error);
//             });
//     }
// }
