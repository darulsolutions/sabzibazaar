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

  async function SabziBazaarData2() {
    try {
      let data = await fetch(vegetableData);
      let response = await data.json();
      console.log(response);
  
      const productsContainer = document.querySelector(".product__section--inner .row");
      productsContainer.innerHTML = ''; // Clear existing products
  
      response.forEach((all) => {
        const col = document.createElement('div');
        col.className = 'col mb-28';
        col.innerHTML = `
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

  
        col.querySelector('.product__items--content').appendChild(quantityBoxDiv);
        productsContainer.appendChild(col);
      });
  
      attachAddToCartButtons(response);
    } catch {
      console.error("Error");
    }
  }


SabziBazaarData2()




function addCategories(id) {
  const categories = ["Sabzi Bundle", "Weekly Sabzi", "Sabzi of the day", "Seasonal Sabzi"];
  if (id == 5) return categories[0];
  if (id == 6) return categories[3];
  if (id == 7) return categories[1];
  if (id == 8) return categories[3];
  if (id == 9) return categories[2];
  if (id == 10) return categories[1];
  if (id == 11) return categories[1];
  if (id == 12) return categories[3];
  if (id == 13) return categories[0];
  if (id == 14) return categories[0];
  if (id == 15) return categories[2];
  if (id == 16) return categories[0];
  if (id == 17) return categories[3];
  if (id == 18) return categories[3];
  if (id == 19) return categories[2];
  if (id == 21) return categories[2];
  if (id == 22) return categories[1];
  if (id == 23) return categories[1];
  if (id == 24) return categories[1];
  if (id == 25) return categories[3];
  if (id == 26) return categories[0];
  if (id == 27) return categories[1];
  if (id == 28) return categories[1];
  if (id == 29) return categories[0];
  if (id == 31) return categories[2];
  if (id == 32) return categories[0];
  if (id == 34) return categories[2];
  return "Uncategorized"; // Default for IDs not listed
}