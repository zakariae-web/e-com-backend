const popoverTriggerList = document.querySelectorAll(
  '[data-bs-toggle="popover"]'
);
const popoverList = [...popoverTriggerList].map(
  (popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl)
);
addEventListener("scroll", function () {
  const navbar = document.querySelector(".header2");
  scrollY >= 80
    ? navbar.classList.add("scroll_nav")
    : navbar.classList.remove("scroll_nav");
});

// filter category
let filteredProducts = [...products];
// get parent element
const sectionCenter = document.querySelector(".products-container");
const btnContainer = document.querySelector(".category-filter");
const searchInput = document.getElementById("search");
window.addEventListener("DOMContentLoaded", function () {
  displayMenuItems(filteredProducts);
  displayMenuButtons();
});
function displayMenuItems(menuItems) {
  let displayMenu = menuItems.map(function (item) {
    return `<div class="col-6 col-md-4">
<div class="card mouse h-100 p-4">
  <div class="card-body text-center">
    <img
      src="${item.img}"
      alt="mouse"
      class="img-fluid w-100 mx-auto"
    />
    <h5>${item.name}</h5>
    <i class="fa-solid fa-star text-warning"></i>
    <i class="fa-solid fa-star text-warning"></i>
    <i class="fa-solid fa-star text-warning"></i>
    <i class="fa-solid fa-star text-warning"></i>
    <i class="fa-solid fa-star-half-stroke text-warning"></i>
    <p>
      <span class="text-danger font-bold">(${item.review})</span>
      Review
    </p>
    <div
      class="d-flex align-items-center gap-3 mt-2 justify-content-center"
    ></div>
  </div>
  <div class="card-footer mt-3 p-2">
    <div class="d-flex flex-column align-items-center gap-3">
      <h5>${item.price} MAD</h5>
      <div
        class="rounded bg-black d-flex align-items-center justify-content-center text-light p-2"
      >
        <i class="fa-solid fa-cart-plus display-7"></i>
        <button class="bg-black border-0 text-light fs-5" onclick="addedToCard(${item.id})">Add to card</button>
      </div>
    </div>
  </div>
</div>
</div>
`;
  });
  displayMenu = displayMenu.join("");
  sectionCenter.innerHTML = displayMenu;
}

function displayMenuButtons() {
  const categories = filteredProducts.reduce(
    function (values, item) {
      if (!values.includes(item.category)) {
        values.push(item.category);
      }
      return values;
    },
    ["all"]
  );
  const categoryBtns = categories
    .map(function (category) {
      return `
        <label
        for="all"
        class="d-flex align-items-center filter-btn gap-3 fs-5"
        data-id="${category}"
      >
        ${category}
      </label>`;
    })
    .join("");
  btnContainer.innerHTML = categoryBtns;
  const filterBtns = btnContainer.querySelectorAll(".filter-btn");
  filterBtns.forEach(function (btn) {
    btn.addEventListener("click", function (e) {
      const category = e.currentTarget.dataset.id;
      const menuCategory = filteredProducts.filter(function (menuItem) {
        if (menuItem.category === category) {
          return menuItem;
        }
      });
      if (category === "all") {
        displayMenuItems(filteredProducts);
      } else {
        displayMenuItems(menuCategory);
      }
    });
  });
}

// Search
searchInput.addEventListener("input", function () {
  const searchTerm = searchInput.value.toLowerCase().trim();
  const products = sectionCenter.getElementsByClassName("card");

  Array.from(products).forEach(function (product) {
    if (product.textContent.toLowerCase().includes(searchTerm)) {
      product.style.display = "block";
    } else {
      product.style.display = "none";
    }
  });
});
