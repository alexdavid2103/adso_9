@extends('layout.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - About Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>

<body>
   


    <!-- Header -->
    @section('content')
    <!-- Close Header -->

    <section class="section product">
        <div class="container">

          <h2 class="h2 section-title">Productos más vendidos</h2>

          <ul class="filter-list">

            <li>
              <button class="filter-btn  active">All</button>
            </li>

            <li>
              <button class="filter-btn">Nike</button>
            </li>

            <li>
              <button class="filter-btn">Adidas</button>
            </li>

            <li>
              <button class="filter-btn">Puma</button>
            </li>

            <li>
              <button class="filter-btn">Vans</button>
            </li>

            <li>
              <button class="filter-btn">Converse</button>
            </li>

          </ul>

          <ul class="product-list" id="product-list">

            <li class="product-item Nike">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/images/product-1.jpg" width="312" height="350" loading="lazy"
                    alt="Running Sneaker Shoes" class="image-contain">

                  <div class="card-badge">Nuevo</div>

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-2">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-2">Add to favorites</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3" id="quick-view-btn" data-image-src="./assets/images/product-1.jpg">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Ver</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-4">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-4">Compare</div>
                    </li>
                    <div id="popup-container" class="popup-container">
                      <div class="popup-content">
                        <img id="popup-image" class="popup-image" src="" alt="Popup Image">
                        <button id="close-btn" class="close-btn">X</button>
                      </div>
                    </div>
                  </ul>
                </figure>

                <div class="card-content">

                  <div class="card-cat">
                    <a href="#" class="card-cat-link">Hombre</a> /
                    <a href="#" class="card-cat-link">Dama</a>
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">Zapatillas deportivas para correr</a>
                  </h3>

                  <data class="card-price" value="180.85">$150.000</data>

                </div>

              </div>
            </li>

            <li class="product-item Puma">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/images/puma.png" width="312" height="350" loading="lazy"
                    alt="Leather Mens Slipper" class="image-contain">

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-2">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Ver</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-4">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-4">Compare</div>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <div class="card-cat">
                    <a href="#" class="card-cat-link">Hombre</a> /
                    <a href="#" class="card-cat-link">Sports</a>
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">Zapatos Casual Puma</a>
                  </h3>

                  <data class="card-price" value="190.85">$190.000</data>

                </div>

              </div>
            </li>

            <li class="product-item Converse">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/images/converse.png" width="312" height="350" loading="lazy"
                    alt="Simple Fabric Shoe" class="image-contain">

                  <div class="card-badge">Nuevo</div>

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-2">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-4">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-4">Compare</div>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <div class="card-cat">
                    <a href="#" class="card-cat-link">Hombre</a> /
                    <a href="#" class="card-cat-link">Dama</a>
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">Converse run star</a>
                  </h3>

                  <data class="card-price" value="160.85">$200.000</data>

                </div>

              </div>
            </li>

            <li class="product-item Vans">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/images/vans.png" width="312" height="350" loading="lazy"
                    alt="Air Jordan 7 Retro " class="image-contain">

                  <div class="card-badge"> -25%</div>

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-2">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-4">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-4">Compare</div>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <div class="card-cat">
                    <a href="#" class="card-cat-link">Hombre</a> /
                    <a href="#" class="card-cat-link">Casual</a>
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">Vans ward men's </a>
                  </h3>

                  <data class="card-price" value="170.85">$170.85 <del>$200.200</del></data>

                </div>

              </div>
            </li>

            <li class="product-item Adidas">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/images/adidas3.png" width="312" height="350" loading="lazy"
                    alt="Nike Air Max 270 SE" class="image-contain">

                  <div class="card-badge">New</div>

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-2">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-4">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-4">Compare</div>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <div class="card-cat">
                    <a href="#" class="card-cat-link">Hombre</a> /
                    <a href="#" class="card-cat-link">Dama</a>
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">Adidas Superstar</a>
                  </h3>

                  <data class="card-price" value="120.85">$140.000</data>

                </div>

              </div>
            </li>

            <li class="product-item Nike">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/images/nikem.png" width="312" height="350" loading="lazy"
                    alt="Adidas Sneakers Shoes" class="image-contain">

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-2">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-4">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-4">Compare</div>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <div class="card-cat">
                    <a href="#" class="card-cat-link">Hombre</a> /
                    <a href="#" class="card-cat-link">Dama</a>
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">Nike Sneakers Shoes</a>
                  </h3>

                  <data class="card-price" value="100.85">$100.000</data>

                </div>

              </div>
            </li>

            <li class="product-item Converse">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/images/converse2.png" width="312" height="350" loading="lazy"
                    alt="Nike Basketball shoes" class="image-contain">

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-2">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-4">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-4">Compare</div>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <div class="card-cat">
                    <a href="#" class="card-cat-link">Hombre</a> /
                    <a href="#" class="card-cat-link">Sports</a>
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">Converse All Star</a>
                  </h3>

                  <data class="card-price" value="120.85">$120.000</data>

                </div>

              </div>
            </li>

            <li class="product-item Puma">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/images/puma2.png" width="312" height="350" loading="lazy"
                    alt="Simple Fabric Shoe" class="image-contain">

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-2">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-4">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-4">Compare</div>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <div class="card-cat">
                    <a href="#" class="card-cat-link">Men</a> /
                    <a href="#" class="card-cat-link">Women</a>
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">Simple Fabric Shoe</a>
                  </h3>

                  <data class="card-price" value="100.85">$100.85</data>

                </div>

              </div>
            </li>

            <li class="product-item Converse">
                <div class="product-card" tabindex="0">
  
                  <figure class="card-banner">
                    <img src="./assets/images/converse2.png" width="312" height="350" loading="lazy"
                      alt="Nike Basketball shoes" class="image-contain">
  
                    <ul class="card-action-list">
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-1">
                          <ion-icon name="cart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-2">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-3">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-4">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-4">Compare</div>
                      </li>
  
                    </ul>
                  </figure>
  
                  <div class="card-content">
  
                    <div class="card-cat">
                      <a href="#" class="card-cat-link">Hombre</a> /
                      <a href="#" class="card-cat-link">Sports</a>
                    </div>
  
                    <h3 class="h3 card-title">
                      <a href="#">Converse All Star</a>
                    </h3>
  
                    <data class="card-price" value="120.85">$120.000</data>
  
                  </div>
  
                </div>
              </li>

              <li class="product-item Converse">
                <div class="product-card" tabindex="0">
  
                  <figure class="card-banner">
                    <img src="./assets/images/converse2.png" width="312" height="350" loading="lazy"
                      alt="Nike Basketball shoes" class="image-contain">
  
                    <ul class="card-action-list">
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-1">
                          <ion-icon name="cart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-2">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-3">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-4">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-4">Compare</div>
                      </li>
  
                    </ul>
                  </figure>
  
                  <div class="card-content">
  
                    <div class="card-cat">
                      <a href="#" class="card-cat-link">Hombre</a> /
                      <a href="#" class="card-cat-link">Sports</a>
                    </div>
  
                    <h3 class="h3 card-title">
                      <a href="#">Converse All Star</a>
                    </h3>
  
                    <data class="card-price" value="120.85">$120.000</data>
  
                  </div>
  
                </div>
              </li>

              <li class="product-item Converse">
                <div class="product-card" tabindex="0">
  
                  <figure class="card-banner">
                    <img src="./assets/images/converse2.png" width="312" height="350" loading="lazy"
                      alt="Nike Basketball shoes" class="image-contain">
  
                    <ul class="card-action-list">
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-1">
                          <ion-icon name="cart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-2">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-3">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-4">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-4">Compare</div>
                      </li>
  
                    </ul>
                  </figure>
  
                  <div class="card-content">
  
                    <div class="card-cat">
                      <a href="#" class="card-cat-link">Hombre</a> /
                      <a href="#" class="card-cat-link">Sports</a>
                    </div>
  
                    <h3 class="h3 card-title">
                      <a href="#">Converse All Star</a>
                    </h3>
  
                    <data class="card-price" value="120.85">$120.000</data>
  
                  </div>
  
                </div>
              </li>

              <li class="product-item Converse">
                <div class="product-card" tabindex="0">
  
                  <figure class="card-banner">
                    <img src="./assets/images/converse2.png" width="312" height="350" loading="lazy"
                      alt="Nike Basketball shoes" class="image-contain">
  
                    <ul class="card-action-list">
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-1">
                          <ion-icon name="cart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-2">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-3">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                      </li>
  
                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-4">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>
  
                        <div class="card-action-tooltip" id="card-label-4">Compare</div>
                      </li>
  
                    </ul>
                  </figure>
  
                  <div class="card-content">
  
                    <div class="card-cat">
                      <a href="#" class="card-cat-link">Hombre</a> /
                      <a href="#" class="card-cat-link">Sports</a>
                    </div>
  
                    <h3 class="h3 card-title">
                      <a href="#">Converse All Star</a>
                    </h3>
  
                    <data class="card-price" value="120.85">$120.000</data>
  
                  </div>
  
                </div>
              </li>

          </ul>

        </div>
      </section>

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Our Brands</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="templatemo-slide-brand" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->


    <!-- Start Footer -->
    @include('layout.footer')
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <a href="#top" class="go-top-btn" data-go-top>
        <ion-icon name="arrow-up-outline"></ion-icon>
      </a>
    
    
    
    
    
      <!-- 
        - custom js link
      -->
      <script src="./assets/js/script.js"></script>
    
      <!-- 
        - ionicon link
      -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- End Script -->
</body>

</html>
@stop