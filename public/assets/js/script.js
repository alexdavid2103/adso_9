'use strict';



/**
 * navbar toggle
 */

const overlay = document.querySelector("[data-overlay]");
const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navbar = document.querySelector("[data-navbar]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");

const navElems = [overlay, navOpenBtn, navCloseBtn];

for (let i = 0; i < navElems.length; i++) {
  navElems[i].addEventListener("click", function () {
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
  });
}



/**
 * header & go top btn active on page scroll
 */

const header = document.querySelector("[data-header]");
const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function () {
  if (window.scrollY >= 80) {
    header.classList.add("active");
    goTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    goTopBtn.classList.remove("active");
  }
});


            // Función para filtrar productos por categoría
            function filterProducts(category) {
              // Obtén la lista de productos
              const productList = document.getElementById("product-list");
              // Obtén todos los elementos de producto
              const productItems = productList.querySelectorAll(".product-item");
          
              // Itera a través de los elementos de producto
              productItems.forEach((productItem) => {
                // Verifica si el producto tiene la clase de categoría seleccionada
                if (productItem.classList.contains(category) || category === "All") {
                  // Si coincide con la categoría o se selecciona "All", muestra el producto
                  productItem.style.display = "block";
                } else {
                  // Oculta el producto si no coincide con la categoría seleccionada
                  productItem.style.display = "none";
                }
              });
            }
          
            // Manejador de eventos para los botones de filtro
            const filterButtons = document.querySelectorAll(".filter-btn");
          
            filterButtons.forEach((button) => {
              button.addEventListener("click", () => {
                // Agrega la clase "active" al botón de filtro seleccionado
                filterButtons.forEach((btn) => btn.classList.remove("active"));
                button.classList.add("active");
          
                // Obtiene la categoría seleccionada del botón
                const category = button.textContent;
          
                // Filtra los productos por la categoría seleccionada
                filterProducts(category);
              });
            });
          
            // Inicialmente, muestra todos los productos
            filterProducts("All");



// ...

// Obtén una referencia al botón "Quick View" y a la ventana emergente
const quickViewBtn = document.getElementById("quick-view-btn");
const popupContainer = document.getElementById("popup-container");
const popupImage = document.getElementById("popup-image");

// Agrega un evento de clic al botón "Quick View"
quickViewBtn.addEventListener("click", () => {
  // Establece la imagen en la ventana emergente con la imagen correspondiente al producto
  // Puedes obtener la ruta de la imagen del producto desde algún atributo de datos (por ejemplo, "data-image-src")
  const productImageSrc = quickViewBtn.getAttribute("data-image-src");
  popupImage.src = productImageSrc;

  // Muestra la ventana emergente
  popupContainer.style.display = "block";
});

// Agrega un evento de clic al botón de cierre de la ventana emergente
const closeBtn = document.getElementById("close-btn");
closeBtn.addEventListener("click", () => {
  // Oculta la ventana emergente al hacer clic en el botón de cierre
  popupContainer.style.display = "none";
});