let cardProducts = [...products];
const cartProductsDom = document.querySelector(".cardProducts");
const cartProductsTitleDom = document.querySelector(".cardProducts h4");
const numbersCard = document.querySelectorAll(".numberCard");

function addedToCard(id) {
  let chooseItem = cardProducts.find((item) => item.id === id);
  cartProductsDom.innerHTML += ` <div class="bg-dark rounded shadow my-2 pb-3 text-light">
  <img src="${chooseItem.img}" class="w-50" alt="">
  <h5>${chooseItem.name}</h5>
  <div class="main mx-2 d-flex bg-light text-dark p-2 rounded shadow justify-content-between mt-3 align-items-center">
    <button id="moin" class="fs-5 btn-clc btn-moin"><h2>-</h2></button>
    <h4 id="num">1</h4>
    <button class="fs-5 btn-clc btn-plus" id="plus"><h2>+</h2></button>
    <h5 id="price">${chooseItem.price} MAD</h5>
  </div>
</div>`;
  let cartProductsLength = document.querySelectorAll(".cardProducts h4");
  for (let i = 0; i < numbersCard.length; i++) {
    numbersCard[i].innerHTML = cartProductsLength.length;
  }

  // Storage
  // let cardPro = localStorage.getItem("Proc")
  // ? JSON.parse(localStorage.getItem("Proc"))
  // : [];
  let cardPro;
  if (localStorage.Proc != null) {
    cardPro = JSON.parse(localStorage.Proc);
  } else {
    cardPro = [];
  }
  cardPro = [...cardPro, chooseItem];
  localStorage.setItem("Proc", JSON.stringify(cardPro));
  const pluses = document.querySelectorAll(".btn-plus h2");
  const moins = document.querySelectorAll(".btn-moin h2");
  const num = document.getElementById("num");
  const price = document.getElementById("price");
  let a = 1;
  pluses.forEach(function (plus) {
    plus.addEventListener("click", () => {
      a++;
      price.innerText = `${chooseItem.price * a} MAD`;
      num.innerText = `${a}`;
    });
  });
  moins.forEach(function (moin) {
    moin.addEventListener("click", () => {
      a--;
      a < 1 ? (a = 1) : `${a}`;
      num.innerText = `${a}`;

      price.innerText = `${chooseItem.price * a} MAD`;
    });
  });
}