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
  
  // password
  const passwordLogin = document.getElementById("password");
  const iconShowHide = document.getElementById("eye");
  iconShowHide.onclick = function () {
    if (passwordLogin.getAttribute("type") == "password") {
      passwordLogin.setAttribute("type", "text");
      this.setAttribute("class", "fa-regular fa-eye-slash");
    } else {
      passwordLogin.setAttribute("type", "password");
      this.setAttribute("class", "fa-regular fa-eye");
    }
  };
  const passwordSinUp = document.getElementById("password2");
  const iconShowHide2 = document.getElementById("eye2");
  iconShowHide2.onclick = function () {
    if (passwordSinUp.getAttribute("type") == "password") {
      passwordSinUp.setAttribute("type", "text");
      this.setAttribute("class", "fa-regular fa-eye-slash");
    } else {
      passwordSinUp.setAttribute("type", "password");
      this.setAttribute("class", "fa-regular fa-eye");
    }
  };
  