<?php

// HEADER
include '../../includes/header.php';

// NAVBAR 
include_once '../../includes/nav.php';

//  CONTROLLER FILE
include '../controller/index_page_handler.php';


include '../controller/category_handler.php';
include '../../config/connection.php';

?>


<!--start page content-->
<div class="page-content">
  <!--start carousel-->
  <section class="slider-section">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active bg-primary">
          <div class="row d-flex align-items-center">
            <div class="col d-none d-lg-flex justify-content-center">
              <div class="">
                <h3 class="h3 fw-light text-white fw-bold">New Arrival</h3>
                <h1 class="h1 text-white fw-bold">Women Fashion</h1>
                <p class="text-white fw-bold"><i>Last call for upto 25%</i></p>
                <div class=""><a class="btn btn-dark btn-ecomm" href="shop-grid.php">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col">
              <img src="../../assets/images/sliders/s_1.webp" class="img-fluid" alt="...">
            </div>
          </div>
        </div>
        <div class="carousel-item bg-red">
          <div class="row d-flex align-items-center">
            <div class="col d-none d-lg-flex justify-content-center">
              <div class="">
                <h3 class="h3 fw-light text-white fw-bold">Latest Trending</h3>
                <h1 class="h1 text-white fw-bold">Fashion Wear</h1>
                <p class="text-white fw-bold"><i>Last call for upto 35%</i></p>
                <div class=""> <a class="btn btn-dark btn-ecomm" href="shop-grid.php">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col">
              <img src="../../assets/images/sliders/s_2.webp" class="img-fluid" alt="...">
            </div>
          </div>
        </div>
        <div class="carousel-item bg-purple">
          <div class="row d-flex align-items-center">
            <div class="col d-none d-lg-flex justify-content-center">
              <div class="">
                <h3 class="h3 fw-light text-white fw-bold">New Trending</h3>
                <h1 class="h1 text-white fw-bold">Kids Fashion</h1>
                <p class="text-white fw-bold"><i>Last call for upto 15%</i></p>
                <div class=""><a class="btn btn-dark btn-ecomm" href="shop-grid.php">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col">
              <img src="../../assets/images/sliders/s_3.webp" class="img-fluid" alt="...">
            </div>
          </div>
        </div>
        <!-- <div class="carousel-item bg-yellow">
          <div class="row d-flex align-items-center">
            <div class="col d-none d-lg-flex justify-content-center">
              <div class="">
                <h3 class="h3 fw-light text-dark fw-bold">Latest Trending</h3>
                <h1 class="h1 text-dark fw-bold">Electronics Items</h1>
                <p class="text-dark fw-bold"><i>Last call for upto 45%</i></p>
                <div class=""><a class="btn btn-dark btn-ecomm" href="shop-grid.php">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col">
              <img src="../../assets/images/sliders/s_4.webp" class="img-fluid" alt="...">
            </div>
          </div>
        </div>
        <div class="carousel-item bg-green">
          <div class="row d-flex align-items-center">
            <div class="col d-none d-lg-flex justify-content-center">
              <div class="">
                <h3 class="h3 fw-light text-white fw-bold">Super Deals</h3>
                <h1 class="h1 text-white fw-bold">Home Furniture</h1>
                <p class="text-white fw-bold"><i>Last call for upto 24%</i></p>
                <div class=""><a class="btn btn-dark btn-ecomm" href="shop-grid.php">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col">
              <img src="../../assets/images/sliders/s_5.webp" class="img-fluid" alt="...">
            </div>
          </div>
        </div> -->
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!--end carousel-->



  <!-- FEATURED PRODUCTS SLIDER -->
  <section class="section-padding">
    <div class="container">
      <div class="text-center pb-3">
        <h3 class="mb-0 h3 fw-bold">Featured Products</h3>
        <p class="mb-0 text-capitalize">The purpose of lorem ipsum</p>
      </div>
      <div class="product-thumbs">
        <?php
        if (!empty($data_container)) {
          foreach ($data_container as $featured_data) {

            // product image
            $featured_img = $featured_data['featured_product_image'];

            // product id
            $product_id = $featured_data['id'];
            ?>
            <div class="card">
              <div class="position-relative overflow-hidden">
                <div
                  class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                  <a href="javascript:;"><i class="bi bi-heart"></i></a>
                  <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                      class="bi bi-zoom-in"></i></a>
                </div>

                <!-- sending product id -->
                <a href="product-details.php?product_id=<?php echo $product_id ?>">
                  <img src='<?php echo "../../shopingo_admin2-rahul/assets/images/product_featured_images/$featured_img" ?>'
                    class="card-img-top" alt="...">
                </a>
              </div>
              <div class="card-body">
                <div class="product-info text-center">
                  <h6 class="mb-1 fw-bold product-name">
                    <?php echo $featured_data['product_name']; ?>
                  </h6>
                  <div class="ratings mb-1 h6">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </div>
                  <p class="mb-0 h6 fw-bold product-price">
                    <?php echo $featured_data['price']; ?> -/
                  </p>
                </div>
              </div>
            </div>
            <?php
          }
        }
        ?>
      </div>
    </div>
  </section>
  <!--end Featured Products slider-->



  <!--start cartegory slider-->
  <section class="cartegory-slider section-padding bg-section-2">
    <div class="container">
      <div class="text-center pb-3">
        <h3 class="mb-0 h3 fw-bold">Top Categories </h3>
        <p class="mb-0 text-capitalize">Select your favorite categories and purchase</p>
      </div>

      <!-- Clothes Women-->
      <div class="cartegory-box">
        <?php foreach ($cat_rows as $cats) {
          $category_id = $cats['id'];
          ?>
          <a href="shop-grid-type-4.php?cat_id=<?php echo $category_id ?>">
            <div class="card">
              <div class="card-body">
                <div class="overflow-hidden">
                  <img src="../../assets/images/favicon-32x32.webp" 
                    class="card-img-top img-fluid rounded-0" alt="...">
                </div>
                <div class="text-center">
                  <h5 class="mb-1 cartegory-name mt-3 fw-bold">
                    <?php echo $cats['category_name']; ?>
                  </h5>
                </div>
              </div>
            </div>
          </a>
        <?php } ?>
      </div>
    </div>
  </section>
  <!--end cartegory slider-->


  <!--start tabular product-->
  <section class="product-tab-section section-padding bg-light">
    <div class="container">
      <div class="text-center pb-3">
        <h3 class="mb-0 h3 fw-bold">Latest Products</h3>
        <p class="mb-0 text-capitalize">The purpose of lorem ipsum</p>
      </div>
      <div class="row">
        <div class="col-auto mx-auto">
          <div class="product-tab-menu table-responsive">
            <ul class="nav nav-pills flex-nowrap" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#new-arrival" type="button">New
                  Arrival</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#best-sellar" type="button">Best
                  Sellar</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#trending-product"
                  type="button">Trending</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#special-offer" type="button">Special
                  Offer</button>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr>
      <div class="tab-content tabular-product">
        <div class="tab-pane fade show active" id="new-arrival">
          <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-4">
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/new-arrival/01.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="ribban">New Season</div>
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/new-arrival/02.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/new-arrival/03.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/new-arrival/04.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/new-arrival/05.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/new-arrival/06.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/new-arrival/07.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/new-arrival/08.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/new-arrival/09.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/new-arrival/10.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="best-sellar">
          <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-4">
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/best-sellar/01.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/best-sellar/02.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/best-sellar/03.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="ribban bg-primary">New Fashion</div>
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/best-sellar/04.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/best-sellar/05.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="trending-product">
          <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-4">
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/trending-product/01.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/trending-product/02.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="ribban bg-warning text-dark">New Season</div>
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="javascript:;">
                    <img src="../../assets/images/trending-product/03.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/trending-product/04.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/trending-product/05.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="special-offer">
          <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-4">
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/special-offer/01.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/special-offer/02.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="ribban">50% Discount</div>
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/special-offer/03.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/special-offer/04.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="position-relative overflow-hidden">
                  <div
                    class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                    <a href="javascript:;"><i class="bi bi-heart"></i></a>
                    <a href="javascript:;"><i class="bi bi-basket3"></i></a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                        class="bi bi-zoom-in"></i></a>
                  </div>
                  <a href="product-details.php">
                    <img src="../../assets/images/special-offer/05.webp" class="card-img-top" alt="...">
                  </a>
                </div>
                <div class="card-body">
                  <div class="product-info text-center">
                    <h6 class="mb-1 fw-bold product-name">Product Name</h6>
                    <div class="ratings mb-1 h6">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0 h6 fw-bold product-price">$49</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end tabular product-->


  <!--start features-->
  <section class="product-thumb-slider section-padding">
    <div class="container">
      <div class="text-center pb-3">
        <h3 class="mb-0 h3 fw-bold">What We Offer!</h3>
        <p class="mb-0 text-capitalize">The purpose of lorem ipsum</p>
      </div>
      <div class="row row-cols-1 row-cols-lg-4 g-4">
        <div class="col d-flex">
          <div class="card depth border-0 rounded-0 border-bottom border-primary border-3 w-100">
            <div class="card-body text-center">
              <div class="h1 fw-bold my-2 text-primary">
                <i class="bi bi-truck"></i>
              </div>
              <h5 class="fw-bold">Free Delivery</h5>
              <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>
            </div>
          </div>
        </div>
        <div class="col d-flex">
          <div class="card depth border-0 rounded-0 border-bottom border-danger border-3 w-100">
            <div class="card-body text-center">
              <div class="h1 fw-bold my-2 text-danger">
                <i class="bi bi-credit-card"></i>
              </div>
              <h5 class="fw-bold">Secure Payment</h5>
              <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>
            </div>
          </div>
        </div>
        <div class="col d-flex">
          <div class="card depth border-0 rounded-0 border-bottom border-success border-3 w-100">
            <div class="card-body text-center">
              <div class="h1 fw-bold my-2 text-success">
                <i class="bi bi-minecart-loaded"></i>
              </div>
              <h5 class="fw-bold">Free Returns</h5>
              <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>
            </div>
          </div>
        </div>
        <div class="col d-flex">
          <div class="card depth border-0 rounded-0 border-bottom border-warning border-3 w-100">
            <div class="card-body text-center">
              <div class="h1 fw-bold my-2 text-warning">
                <i class="bi bi-headset"></i>
              </div>
              <h5 class="fw-bold">24/7 Support</h5>
              <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>
            </div>
          </div>
        </div>
      </div>
      <!--end row-->
    </div>
  </section>
  <!--end features-->


  <!--start special product-->
  <section class="section-padding bg-section-2">
    <div class="container">
      <div class="card border-0 rounded-0 p-3 depth">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center">
            <img src="../../assets/images/extra-images/promo-large.webp" class="img-fluid rounded-0" alt="...">
          </div>
          <div class="col-lg-6">
            <div class="card-body">
              <h3 class="fw-bold">New Features of Trending Products</h3>
              <ul class="list-group list-group-flush">
                <li class="list-group-item bg-transparent px-0">Contrary to popular belief, Lorem Ipsum is not simply
                  random text.</li>
                <li class="list-group-item bg-transparent px-0">All the Lorem Ipsum generators on the Internet tend.
                </li>
                <li class="list-group-item bg-transparent px-0">There are many variations of passages of Lorem Ipsum
                  available.</li>
                <li class="list-group-item bg-transparent px-0">There are many variations of passages
                  available.</li>
              </ul>
              <div class="buttons mt-4 d-flex flex-column flex-lg-row gap-3">
                <a href="javascript:;" class="btn btn-lg btn-dark btn-ecomm px-5 py-3">Buy Now</a>
                <a href="javascript:;" class="btn btn-lg btn-outline-dark btn-ecomm px-5 py-3">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--start special product-->


  <!--start Brands-->
  <section class="section-padding">
    <div class="container">
      <div class="text-center pb-3">
        <h3 class="mb-0 h3 fw-bold">Shop By Brands</h3>
        <p class="mb-0 text-capitalize">Select your favorite brands and purchase</p>
      </div>
      <div class="brands">
        <div class="row row-cols-2 row-cols-lg-5 g-4">
          <div class="col">
            <div class="p-3 border rounded brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="../../assets/images/brands/01.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="../../assets/images/brands/02.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="../../assets/images/brands/03.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="../../assets/images/brands/04.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="../../assets/images/brands/05.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="../../assets/images/brands/06.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="../../assets/images/brands/07.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="../../assets/images/brands/08.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="../../assets/images/brands/09.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="../../assets/images/brands/10.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--end row-->
      </div>
    </div>
  </section>
  <!--end Brands-->





  <!--subscribe banner-->
  <section class="product-thumb-slider subscribe-banner p-5">
    <div class="row">
      <div class="col-12 col-lg-6 mx-auto">
        <div class="text-center">
          <h3 class="mb-0 fw-bold text-white">Get Latest Update by <br> Subscribe Our Newslater</h3>
          <div class="mt-3">
            <input type="text" class="form-control form-control-lg bubscribe-control rounded-0 px-5 py-3"
              placeholder="Enter your email">
          </div>
          <div class="mt-3 d-grid">
            <button type="button" class="btn btn-lg btn-ecomm bubscribe-button px-5 py-3">Subscribe</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--subscribe banner-->


  <!--start blog-->
  <section class="section-padding">
    <div class="container">
      <div class="text-center pb-3">
        <h3 class="mb-0 fw-bold">Latest Blog</h3>
        <p class="mb-0 text-capitalize">Check our latest news</p>
      </div>
      <div class="blog-cards">
        <div class="row row-cols-1 row-cols-lg-3 g-4">
          <div class="col">
            <div class="card">
              <img src="../../assets/images/blog/01.webp" class="card-img-top rounded-0" alt="...">
              <div class="card-body">
                <div class="d-flex align-items-center gap-4">
                  <div class="posted-by">
                    <p class="mb-0"><i class="bi bi-person me-2"></i>Virendra</p>
                  </div>
                  <div class="posted-date">
                    <p class="mb-0"><i class="bi bi-calendar me-2"></i>15 Aug, 2022</p>
                  </div>
                </div>
                <h5 class="card-title fw-bold mt-3">Blog title here</h5>
                <p class="mb-0">Some quick example text to build on the card title and make.</p>
                <a href="blog-read.php" class="btn btn-outline-dark btn-ecomm mt-3">Read More</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="../../assets/images/blog/02.webp" class="card-img-top rounded-0" alt="...">
              <div class="card-body">
                <div class="d-flex align-items-center gap-4">
                  <div class="posted-by">
                    <p class="mb-0"><i class="bi bi-person me-2"></i>Virendra</p>
                  </div>
                  <div class="posted-date">
                    <p class="mb-0"><i class="bi bi-calendar me-2"></i>15 Aug, 2022</p>
                  </div>
                </div>
                <h5 class="card-title fw-bold mt-3">Blog title here</h5>
                <p class="mb-0">Some quick example text to build on the card title and make.</p>
                <a href="blog-read.php" class="btn btn-outline-dark btn-ecomm mt-3">Read More</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="../../assets/images/blog/03.webp" class="card-img-top rounded-0" alt="...">
              <div class="card-body">
                <div class="d-flex align-items-center gap-4">
                  <div class="posted-by">
                    <p class="mb-0"><i class="bi bi-person me-2"></i>Virendra</p>
                  </div>
                  <div class="posted-date">
                    <p class="mb-0"><i class="bi bi-calendar me-2"></i>15 Aug, 2022</p>
                  </div>
                </div>
                <h5 class="card-title fw-bold mt-3">Blog title here</h5>
                <p class="mb-0">Some quick example text to build on the card title and make.</p>
                <a href="blog-read.php" class="btn btn-outline-dark btn-ecomm mt-3">Read More</a>
              </div>
            </div>
          </div>

        </div>
        <!--end row-->
      </div>
    </div>
  </section>
  <!--end blog-->


</div>
<!--end page content-->


<!-- FOOTER -->
<?php include '../../includes/footer.php' ?>


<!--start cart-->
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasRight"
  aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header bg-section-2">
    <h5 class="mb-0 fw-bold" id="offcanvasRightLabel">8 items in the cart</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="cart-list">

      <div class="d-flex align-items-center gap-3">
        <div class="bottom-product-img">
          <a href="product-details.php">
            <img src="../../assets/images/new-arrival/01.webp" width="60" alt="">
          </a>
        </div>
        <div class="">
          <h6 class="mb-0 fw-light mb-1">Product Name</h6>
          <p class="mb-0"><strong>1 X $59.00</strong>
          </p>
        </div>
        <div class="ms-auto fs-5">
          <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
        </div>
      </div>
      <hr>
      <div class="d-flex align-items-center gap-3">
        <div class="bottom-product-img">
          <a href="product-details.php">
            <img src="../../assets/images/new-arrival/02.webp" width="60" alt="">
          </a>
        </div>
        <div class="">
          <h6 class="mb-0 fw-light mb-1">Product Name</h6>
          <p class="mb-0"><strong>1 X $59.00</strong>
          </p>
        </div>
        <div class="ms-auto fs-5">
          <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
        </div>
      </div>
      <hr>
      <div class="d-flex align-items-center gap-3">
        <div class="bottom-product-img">
          <a href="product-details.php">
            <img src="../../assets/images/new-arrival/03.webp" width="60" alt="">
          </a>
        </div>
        <div class="">
          <h6 class="mb-0 fw-light mb-1">Product Name</h6>
          <p class="mb-0"><strong>1 X $59.00</strong>
          </p>
        </div>
        <div class="ms-auto fs-5">
          <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
        </div>
      </div>
      <hr>
      <div class="d-flex align-items-center gap-3">
        <div class="bottom-product-img">
          <a href="product-details.php">
            <img src="../../assets/images/new-arrival/04.webp" width="60" alt="">
          </a>
        </div>
        <div class="">
          <h6 class="mb-0 fw-light mb-1">Product Name</h6>
          <p class="mb-0"><strong>1 X $59.00</strong>
          </p>
        </div>
        <div class="ms-auto fs-5">
          <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
        </div>
      </div>
      <hr>
      <div class="d-flex align-items-center gap-3">
        <div class="bottom-product-img">
          <a href="product-details.php">
            <img src="../../assets/images/new-arrival/05.webp" width="60" alt="">
          </a>
        </div>
        <div class="">
          <h6 class="mb-0 fw-light mb-1">Product Name</h6>
          <p class="mb-0"><strong>1 X $59.00</strong>
          </p>
        </div>
        <div class="ms-auto fs-5">
          <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
        </div>
      </div>
      <hr>
      <div class="d-flex align-items-center gap-3">
        <div class="bottom-product-img">
          <a href="product-details.php">
            <img src="../../assets/images/new-arrival/06.webp" width="60" alt="">
          </a>
        </div>
        <div class="">
          <h6 class="mb-0 fw-light mb-1">Product Name</h6>
          <p class="mb-0"><strong>1 X $59.00</strong>
          </p>
        </div>
        <div class="ms-auto fs-5">
          <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
        </div>
      </div>
      <hr>
      <div class="d-flex align-items-center gap-3">
        <div class="bottom-product-img">
          <a href="product-details.php">
            <img src="../../assets/images/new-arrival/07.webp" width="60" alt="">
          </a>
        </div>
        <div class="">
          <h6 class="mb-0 fw-light mb-1">Product Name</h6>
          <p class="mb-0"><strong>1 X $59.00</strong>
          </p>
        </div>
        <div class="ms-auto fs-5">
          <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
        </div>
      </div>
      <hr>
      <div class="d-flex align-items-center gap-3">
        <div class="bottom-product-img">
          <a href="product-details.php">
            <img src="../../assets/images/new-arrival/08.webp" width="60" alt="">
          </a>
        </div>
        <div class="">
          <h6 class="mb-0 fw-light mb-1">Product Name</h6>
          <p class="mb-0"><strong>1 X $59.00</strong>
          </p>
        </div>
        <div class="ms-auto fs-5">
          <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
        </div>
      </div>
      <hr>
      <div class="d-flex align-items-center gap-3">
        <div class="bottom-product-img">
          <a href="product-details.php">
            <img src="../../assets/images/new-arrival/09.webp" width="60" alt="">
          </a>
        </div>
        <div class="">
          <h6 class="mb-0 fw-light mb-1">Product Name</h6>
          <p class="mb-0"><strong>1 X $59.00</strong>
          </p>
        </div>
        <div class="ms-auto fs-5">
          <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
        </div>
      </div>
      <hr>
      <div class="d-flex align-items-center gap-3">
        <div class="bottom-product-img">
          <a href="product-details.php">
            <img src="../../assets/images/new-arrival/10.webp" width="60" alt="">
          </a>
        </div>
        <div class="">
          <h6 class="mb-0 fw-light mb-1">Product Name</h6>
          <p class="mb-0"><strong>1 X $59.00</strong>
          </p>
        </div>
        <div class="ms-auto fs-5">
          <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="offcanvas-footer p-3 border-top">
    <div class="d-grid">
      <button type="button" class="btn btn-lg btn-dark btn-ecomm px-5 py-3">Checkout</button>
    </div>
  </div>

</div>
<!--end cat-->


<!--start quick view-->

<!-- Modal -->
<div class="modal fade" id="QuickViewModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-0">

      <div class="modal-body">
        <div class="row g-3">
          <div class="col-12 col-xl-6">

            <div class="wrap-modal-slider">

              <div class="slider-for">
                <div>
                  <img src="../../assets/images/product-images/01.jpg" alt="" class="img-fluid">
                </div>
                <div>
                  <img src="../../assets/images/product-images/02.jpg" alt="" class="img-fluid">
                </div>
                <div>
                  <img src="../../assets/images/product-images/03.jpg" alt="" class="img-fluid">
                </div>
                <div>
                  <img src="../../assets/images/product-images/04.jpg" alt="" class="img-fluid">
                </div>
              </div>

              <div class="slider-nav mt-3">
                <div>
                  <img src="../../assets/images/product-images/01.jpg" alt="" class="img-fluid">
                </div>
                <div>
                  <img src="../../assets/images/product-images/02.jpg" alt="" class="img-fluid">
                </div>
                <div>
                  <img src="../../assets/images/product-images/03.jpg" alt="" class="img-fluid">
                </div>
                <div>
                  <img src="../../assets/images/product-images/04.jpg" alt="" class="img-fluid">
                </div>
              </div>

            </div>

          </div>
          <div class="col-12 col-xl-6">
            <div class="product-info">
              <h4 class="product-title fw-bold mb-1">Check Pink Kurta</h4>
              <p class="mb-0">Women Pink & Off-White Printed Kurta with Palazzos</p>
              <div class="product-rating">
                <div class="hstack gap-2 border p-1 mt-3 width-content">
                  <div><span class="rating-number">4.8</span><i class="bi bi-star-fill ms-1 text-success"></i></div>
                  <div class="vr"></div>
                  <div>162 Ratings</div>
                </div>
              </div>
              <hr>
              <div class="product-price d-flex align-items-center gap-3">
                <div class="h4 fw-bold">$458</div>
                <div class="h5 fw-light text-muted text-decoration-line-through">$2089</div>
                <div class="h4 fw-bold text-danger">(70% off)</div>
              </div>
              <p class="fw-bold mb-0 mt-1 text-success">inclusive of all taxes</p>

              <div class="more-colors mt-3">
                <h6 class="fw-bold mb-3">More Colors</h6>
                <div class="d-flex align-items-center gap-2 flex-wrap">
                  <div class="color-box bg-red"></div>
                  <div class="color-box bg-primary"></div>
                  <div class="color-box bg-yellow"></div>
                  <div class="color-box bg-purple"></div>
                  <div class="color-box bg-green"></div>
                </div>
              </div>

              <div class="size-chart mt-3">
                <h6 class="fw-bold mb-3">Select Size</h6>
                <div class="d-flex align-items-center gap-2 flex-wrap">
                  <div class="">
                    <button type="button" class="rounded-0">XS</button>
                  </div>
                  <div class="">
                    <button type="button" class="rounded-0">S</button>
                  </div>
                  <div class="">
                    <button type="button" class="rounded-0">M</button>
                  </div>
                  <div class="">
                    <button type="button" class="rounded-0">L</button>
                  </div>
                  <div class="">
                    <button type="button" class="rounded-0">XL</button>
                  </div>
                  <div class="">
                    <button type="button" class="rounded-0">XXL</button>
                  </div>
                </div>
              </div>
              <div class="cart-buttons mt-3">
                <div class="buttons d-flex flex-column gap-3 mt-4">
                  <a href="javascript:;" class="btn btn-lg btn-dark btn-ecomm px-5 py-3 flex-grow-1"><i
                      class="bi bi-basket2 me-2"></i>Add to Bag</a>
                  <a href="javascript:;" class="btn btn-lg btn-outline-dark btn-ecomm px-5 py-3"><i
                      class="bi bi-suit-heart me-2"></i>Wishlist</a>
                </div>
              </div>
              <hr class="my-3">
              <div class="product-share">
                <h6 class="fw-bold mb-3">Share This Product</h6>
                <div class="d-flex align-items-center gap-2 flex-wrap">
                  <div class="">
                    <button type="button" class="btn-social bg-twitter"><i class="bi bi-twitter"></i></button>
                  </div>
                  <div class="">
                    <button type="button" class="btn-social bg-facebook"><i class="bi bi-facebook"></i></button>
                  </div>
                  <div class="">
                    <button type="button" class="btn-social bg-linkden"><i class="bi bi-linkedin"></i></button>
                  </div>
                  <div class="">
                    <button type="button" class="btn-social bg-youtube"><i class="bi bi-youtube"></i></button>
                  </div>
                  <div class="">
                    <button type="button" class="btn-social bg-pinterest"><i class="bi bi-pinterest"></i></button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!--end row-->
      </div>

    </div>
  </div>
</div>
<!--end quick view-->


<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class="bi bi-arrow-up"></i></a>
<!--End Back To Top Button-->


<!-- JavaScript files -->
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/plugins/slick/slick.min.js"></script>
<script src="../../assets/js/main.js"></script>
<script src="../../assets/js/index.js"></script>
<script src="../../assets/js/loader.js"></script>

</body>

</html>