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

async function SabziBazaarData() {
  try {
    let data = await fetch(vegetableData);
    let response = await data.json();
    console.log(response);

    const productsPerTab = 6; // Number of products per tab
    const totalTabs = Math.ceil(response.length / productsPerTab);

    // Generate tabs
    const tabButtonsContainer = document.querySelector(".product__tab--one");
    const tabContentsContainer = document.querySelector(".tab_content");

    tabButtonsContainer.innerHTML = ''; // Clear existing tabs
    tabContentsContainer.innerHTML = ''; // Clear existing tab contents

    for (let i = 0; i < totalTabs; i++) {
      const tabButton = document.createElement('li');
      tabButton.className = "product__tab--btn__list";
      if (i === 0) tabButton.classList.add('active'); // Set first tab as active
      tabButton.dataset.toggle = "tab";
      tabButton.dataset.target = `#product_${i + 1}`;
      tabButton.textContent = i + 1; // Tab number
      tabButtonsContainer.appendChild(tabButton);

      const tabContent = document.createElement('div');
      tabContent.id = `product_${i + 1}`;
      tabContent.className = `tab_pane ${i === 0 ? 'active show' : ''}`;

      const row = document.createElement('div');
      row.className = 'row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28';
      
      response.slice(i * productsPerTab, (i + 1) * productsPerTab).forEach((all) => {
        const col = document.createElement('div');
        col.className = 'col mb-28';
        col.innerHTML = `
          <div class="product__items">
            <div class="product__items--thumbnail">
              <a class="product__items--link" href="product-details.html">
                <img class="product__items--img product__primary--img" src="https://vegetable.vcapture.pk/public/product_images/${all.img}" alt="product-img" />
              </a>
              <input type='hidden' name='product_id' value='${all.id}'>
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
        const quantityBoxDiv = document.createElement('div');
        quantityBoxDiv.className = 'quantity__box justify-content-center';
        quantityBoxDiv.innerHTML = `
          <button type="button" onclick="quantity('decrease', this, ${all.id})" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
          <label>
            <input type="number" class="quantity__number quickview__value--number" name="quantity__number" value="0" data-counter="">
          </label>
          <button type="button" onclick="quantity('increase', this, ${all.id})" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
        `;
        
        col.querySelector('.product__items--content').appendChild(quantityBoxDiv);
        
        row.appendChild(col);
      });

      tabContent.appendChild(row);
      tabContentsContainer.appendChild(tabContent);
    }

    attachAddToCartButtonresponses();
  } catch {
    console.error("Error");
  }
}

async function SabziBazaarData2() {
  try {
    let data = await fetch(vegetableData);
    let response = await data.json();
    console.log(response);

    const productsContainer = document.querySelector(".product__section--inner #product-container");
    productsContainer.innerHTML = ''; // Clear existing products

    response.forEach((all) => {
      const col = document.createElement('div');
      col.className = 'col mb-28';
      col.innerHTML = 
      `
        <div class="product__items">
          <div class="product__items--thumbnail">
            <a class="product__items--link" href="product-details.html">
              <img class="product__items--img product__primary--img" src="https://vegetable.vcapture.pk/public/product_images/${all.img}" alt="product-img" />
            </a>
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
      const quantityBoxDiv = document.createElement('div');
      quantityBoxDiv.className = 'quantity__box justify-content-center';
      quantityBoxDiv.innerHTML = `
        <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>

        <input type="number" class="quantity__number quickview__value--number" value="0" data-counter="">

        <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
      `;

      // col.querySelector('.product__items--content').appendChild(quantityBoxDiv);
      // productsContainer.appendChild(col);

      // col.querySelector('.product__items--content').appendChild(quantityBoxDiv);
      // productsContainer.appendChild(col);

      // Attach event listeners to the quantity buttons
      // const decreaseButton = quantityBoxDiv.querySelector('.decrease');
      // const increaseButton = quantityBoxDiv.querySelector('.increase');
      // const quantityInput = quantityBoxDiv.querySelector('.quantity__number');

      // increaseButton.addEventListener('click', () => {
      //   let currentValue = parseInt(quantityInput.value);
      //   currentValue++;
      //   quantityInput.value = currentValue;
      //   if (currentValue === 1) {
      //     addIntoCart(col);
      //   }
      // });

      // decreaseButton.addEventListener('click', () => {
      //   let currentValue = parseInt(quantityInput.value);
      //   if (currentValue > 0) {
      //     currentValue--;
      //     quantityInput.value = currentValue;
      //   }
      // });
    });

    // attachAddToCartButtons(response);
  } catch {
    console.error("Error");
  }
}

// function addIntoCart(productContainer) {
//   // Extract product details
//   const productItemsImage = productContainer.querySelector('.product__items--img').src;
//   const productItemsTitle = productContainer.querySelector('.product__items--content__title').textContent;
//   const currentPrice = productContainer.querySelector('.current__price').textContent;
//   const quantityNumber = productContainer.querySelector('.quantity__number').value;

//   // Check if the product is already in the cart
//   let miniCart = document.querySelector(".minicart__product");
//   let existingCartItem = Array.from(miniCart.querySelectorAll('.minicart__subtitle'))
//     .find(item => item.textContent.trim() === productItemsTitle.trim());

//   if (existingCartItem) {
//     // Update quantity if already in the cart
//     let cartQuantityInput = existingCartItem.closest('.minicart__product--items')
//       .querySelector('.quantity__number');
//     cartQuantityInput.value = parseInt(cartQuantityInput.value) + parseInt(quantityNumber);
//   } else {
//     // Add new product to cart
//     let div = document.createElement('div');
//     div.innerHTML = `
//       <div class="minicart__product--items d-flex">
//         <div class="minicart__thumb">
//           <a href="product-details.html"><img src="${productItemsImage}" alt="product-img"></a>
//         </div>
//         <div class="minicart__text">
//           <h4 class="minicart__subtitle"><a href="product-details.html">${productItemsTitle}</a></h4>
//           <div class="minicart__price">
//             <span class="current__price">${currentPrice}</span>
//           </div>
//           <div class="minicart__text--footer d-flex align-items-center">
//             <div class="quantity__box minicart__quantity">
//               <button type="button" onclick="quantity('decrease', this)" class="quantity__value decrease">-</button>
//               <label>
//                 <input type="number" class="quantity__number" value="${quantityNumber}" data-counter />
//               </label>
//               <button type="button" onclick="quantity('increase', this)" class="quantity__value increase">+</button>
//             </div>
//             <button class="minicart__product--remove" type="button" onclick="removeFromCart(this)">Remove</button>
//           </div>
//         </div>
//       </div>
//     `;
//     miniCart.appendChild(div);
//   }
// }

function addIntoCart(){
  let quantityNumber = document.querySelector('.quantity__number')
  let miniCartImage = document.querySelector("#minicart__product-img")
  let miniCartTitle = document.querySelector(".minicart__subtitle")
  let miniCartPrice = document.querySelector(".minicart__price")
  let productItemsImage = document.querySelector(".product__items--img").src
  let productItemsTitle = document.querySelector(".product__items--content__title a")
  let productItemsPrice = document.querySelector(".product__items--price")


  if(quantityNumber >= 2){
      miniCartImage.src  = productItemsImage
      miniCartTitle.textContent = productItemsTitle.textContent
      miniCartPrice.textContent = productItemsPrice.textContent
  }

}
// function addIntoCart(button) {
//     // Find the product container relative to the clicked button
//     const productContainer = button.closest('.product__items');
  
//     // Extract product details
//     const productItemsImage = productContainer.querySelector('.product__items--img').src;
//     const productItemsTitle = productContainer.querySelector('.product__items--content__title').textContent;
//     const currentPrice = productContainer.querySelector('.current__price').textContent;
//     const quantityNumber = productContainer.querySelector('.quantity__number').value;
  
//     // Check if quantity is valid
//     if (quantityNumber >= 1) {
//       let miniCart = document.querySelector(".minicart__product");
      
//       // Create cart item
//       let div = document.createElement('div');
//       div.innerHTML = `
//         <div class="minicart__product--items d-flex">
//           <div class="minicart__thumb">
//             <a href="product-details.html"><img src="${productItemsImage}" alt="product-img"></a>
//           </div>
//           <div class="minicart__text">
//             <h4 class="minicart__subtitle"><a href="product-details.html">${productItemsTitle}</a></h4>
//             <div class="minicart__price">
//               <span class="current__price">${currentPrice}</span>
//             </div>
//             <div class="minicart__text--footer d-flex align-items-center">
//               <div class="quantity__box minicart__quantity">
//                 <button type="button" onclick="quantity('decrease', this)" class="quantity__value decrease">-</button>
//                 <label>
//                   <input type="number" class="quantity__number" value="${quantityNumber}" data-counter />
//                 </label>
//                 <button type="button" onclick="quantity('increase', this)" class="quantity__value increase">+</button>
//               </div>
//               <button class="minicart__product--remove" type="button" onclick="removeFromCart(this)">Remove</button>
//             </div>
//           </div>
//         </div>
//       `;
  
//       miniCart.appendChild(div);
//     } else {
//       alert("Please select a valid quantity.");
//     }
// }

addIntoCart()



let cart = []

function quantity(action, button) {
    const quantityInput = button.parentNode.querySelector(".quantity__number");
    let inputNumber = parseInt(quantityInput.value);
  
    if (action === "decrease" && inputNumber > 0) {
      inputNumber -= 1;
    } else if (action === "increase") {
      inputNumber += 1;
    }
  
    quantityInput.value = inputNumber;
  
    // Update the cart with the new quantity
    const item = cart.find(item => item.id === itemId);
    if (item) {
      item.quantity = inputNumber;
    }
  
    // updateCartUI();
}
  
function removeFromCart(itemId) {
    cart = cart.filter(item => item.id !== itemId);
    updateCartUI();
}

function updateCartTotal() {
  // Select all quantity inputs
  const quantityInputs = document.querySelectorAll(".quantity__number");
  let totalQuantity = 0;

  // Loop through each input and add its value to the total quantity
  quantityInputs.forEach((input) => {
    totalQuantity += parseInt(input.value) || 0;
  });

  // Update the cart item count display
  const vegetableCartItems = document.querySelectorAll(
    ".minicart__open--btn .items__count"
  );

  if (vegetableCartItems) {
    vegetableCartItems.forEach((total) => {
      total.textContent = totalQuantity;
    });
  }
}

function calculatePrice(action, button) {
  // Get the input field and the current quantity value
  const quantityInput = button.parentElement.querySelector(".quantity__number");
  let inputNumber = parseInt(quantityInput.value);

  // Adjust the quantity based on the action (increase or decrease)
  if (action === "decrease" && inputNumber > 1) {
    inputNumber -= 1;
  } else if (action === "increase") {
    inputNumber += 1;
  }

  // Update the quantity input field with the new value
  quantityInput.value = inputNumber;

  // Get the price for the current item
  const itemPrice = parseFloat(
    button
      .closest("tr")
      .querySelector(".cart__price")
      .textContent.replace("$", "")
  );

  // Calculate the total price for the current item
  const totalPrice = itemPrice * inputNumber;

  // Update the total price in the appropriate cell
  const itemTotal = button.closest("tr").querySelector(".end");
  itemTotal.textContent = `${totalPrice} Rs`; // Format to two decimal places
}


function addToCart2() {
  const div = document.createElement("div");

  
  const quantityInput = button.parentNode.querySelector(".quantity__number");
  let inputNumber = parseInt(quantityInput.value);
  
  if(inputNumber >= 1){
        div.innerHTML = `
                          <div class="minicart__product--items d-flex">
                          <div class="minicart__thumb">
                              <a href="product-details.html"><img src="assets/img/product/product1.png" alt="prduct-img"></a>
                          </div>
                          <div class="minicart__text">
                              <h4 class="minicart__subtitle"><a href="product-details.html">${all.title}</a></h4>
                              <div class="minicart__price">
                                  <span class="current__price">${all.price} Rs</span>
                              </div>
                              <div class="minicart__text--footer d-flex align-items-center">
                                  <div class="quantity__box minicart__quantity">
                                      <button type="button" class="quantity__value decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                      <label>
                                          <input type="number" class="quantity__number" value="1" data-counter />
                                      </label>
                                      <button type="button" class="quantity__value increase" aria-label="quantity value" value="Increase Value">+</button>
                                  </div>
                                  <button class="minicart__product--remove" type="button">Remove</button>
                              </div>
                          </div>
                      </div>
          `;
    }
    miniCartProduct.appendChild(div)
}

function addToCart(itemData, quantityInput) {
    const existingItem = cart.find(item => item.id === itemData.id);
    
    if (existingItem) {
        existingItem.quantity += quantityInput; // Update quantity if item exists
    } else {
        cart.push({
            id: itemData.id,
            title: itemData.title,
            price: itemData.price,
            quantity: quantityInput
        });
    }

    updateCartUI(); // Update the UI after adding the item
}

// function updateCartUI() {
//     // const miniCartProduct = document.querySelector(".minicart__product--items");
//     miniCartProduct.innerHTML = ""; // Clear the current cart items
    
//     cart.forEach(item => {
//         const div = document.createElement("div");
        
//         div.innerHTML = `
//         <div class="minicart__product--items d-flex">
//         <div class="minicart__thumb">
//         <a href="product-details.html"><img src="assets/img/product/product1.png" alt="product-img"></a>
//         </div>
//         <div class="minicart__text">
//         <h4 class="minicart__subtitle"><a href="product-details.html">${item.title}</a></h4>
//         <div class="minicart__price">
//         <span class="current__price">${item.price} Rs</span>
//         </div>
//         <div class="minicart__text--footer d-flex align-items-center">
//         <div class="quantity__box minicart__quantity">
//         <button type="button" onclick="quantity('decrease', this, ${item.id})" class="quantity__value decrease" aria-label="quantity value" value="Decrease Value">-</button>
//         <label>
//         <input type="number" class="quantity__number" value="${item.quantity}" data-counter />
//         </label>
//         <button type="button" onclick="quantity('increase', this, ${item.id})" class="quantity__value increase" aria-label="quantity value" value="Increase Value">+</button>
//         </div>
//         <button class="minicart__product--remove" type="button" onclick="removeFromCart(${item.id})">Remove</button>
//         </div>
//         </div>
//         </div>
//         `;
        
//         miniCartProduct.appendChild(div);
//     });
// }

function attachAddToCartButtons(response) {
    document.querySelectorAll(".add-to-cart-btn").forEach((button, index) => {
        button.addEventListener("click", () => {
            const quantityInput = button.parentNode.querySelector(".quantity__number").value;
            const quantityValue = parseInt(quantityInput);
            
            if (quantityValue >= 1) {
                addToCart(response[index], quantityValue); // Add the veggie to the mini cart
            }
        });
    });
}

SabziBazaarData();



