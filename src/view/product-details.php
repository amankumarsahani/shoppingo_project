<?php
include '../../includes/header.php';

// NAVBAR
include_once '../../includes/nav.php';

// CONTROLLER FILE
include '../controller/product_detail_handle.php';

$user_id = $_SESSION['user_id'];
?>


<!--start page content-->
<div class="page-content">

  <!--start breadcrumb-->
  <div class="py-4 border-bottom">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:;">Shop</a></li>
          <li class="breadcrumb-item active" aria-current="page">Page Details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->


  <!--start product details-->
  <section class="py-4">
    <div class="container">
      <div class="row g-4">
        <!-- PRODUCT AL IMAGES -->
        <div class="col-12 col-xl-7">
          <div class="product-images">
            <div class="product-zoom-images">
              <div class="row row-cols-1 text-center mt-5 g-3">
                <?php foreach ($product_details as $row_data) {

                  // PRODUCT IMAGE
                  $featured_image = $row_data['featured_product_image'];

                  // PRODUCT ID
                  $id = $row_data['id'];
                ?>

                  <!-- FORM STARTS -->
                  <form action="../controller/cart_handle.php" method="POST">

                    <!-- hidden input tag -->
                    <input type="hidden" name="selected_image_id" id="selected_image_id" value="<?= $id ?>">
                    <input type="hidden" name="selected_image" id="selected_image" value="<?= $featured_image ?>">
                    <div class="col mt-5">
                      <div class="img-thumb-container overflow-hidden position-relative" data-fancybox="gallery" data-src="../../assets/images/product-images/01.jpg">
                        <a href="javascript:;">
                          <img src='<?php echo "../../shopingo_admin2-rahul/assets/images/product_featured_images/$featured_image" ?>' class="img-fluid" id="img_frame" alt="">
                        </a>
                      </div>
                    </div>
              </div><!--end row-->
            </div>
          </div>
        </div>
        <!-- PRODUCT AL IMAGES EN-->



        <!-- SUB IMAGES -->
        <div class="col-12 col-xl-5">
          <div class="product-info">
            <div class="product-price d-flex align-items-center gap-3">
              <div class="h4 fw-bold">
                <?php echo $row_data['price']; ?>
              </div>
              <div class="h5 fw-light text-muted text-decoration-line-through">
                1 crore
              </div>
              <!-- <div class="h4 fw-bold text-danger">(70% off)</div> -->
            </div>
            <p class="fw-bold mb-0 mt-1 text-success">inclusive of all taxes</p>
          <?php } ?>
          <div class="more-colors mt-4">
            <h6 class="fw-bold mb-3">More Colors</h6>
            <div class="d-flex align-items-center gap-3">
              <?php foreach ($product_images as $img_data) {
                $images = $img_data['product_image'];
              ?>
                <div class="">
                  <a href="javascript:;">
                    <img src='<?php echo "../../shopingo_admin2-rahul/assets/images/product_image/$images" ?>' width="65" class="sub_frame" alt="">
                  </a>
                  <input type="hidden" name="selected_image_name" id="selected_image_name" value="<?= $images; ?>">

                </div>
              <?php } ?>
            </div>
          </div>
          <!-- SUB IMAGES ENDS-->

          <!-- PRODUCT SIZE -->
          <div class="size-chart mt-4">
            <!-- <h6 class="fw-bold mb-3">Select Size</h6> -->
            <div class="d-flex align-items-center gap-2 flex-wrap">
              <?php
              foreach ($product_details as $row_data) {
              ?>
                <!-- <div class="">
                    <button type="button">
                      <?php //echo $sizes 
                      ?>
                    </button>
                  </div> -->
                <!-- PRODUCT SIZE ENDS-->
            </div>
          </div>


          <!-- Buttons -->
          <?php
                if (!isset($_SESSION['user_login'])) { ?>
            <div class="cart-buttons mt-3">
              <div class="buttons d-flex flex-column flex-lg-row gap-3 mt-4">
                <button type="submit" name="cart_btn" class="btn btn-lg btn-dark btn-ecomm px-5 py-3 col-lg-6"><i class="bi bi-basket2 me-2"></i>Add to Bag</button>
                <a href="./login.php" class="btn btn-lg btn-outline-dark btn-ecomm px-5 py-3"><i class="bi bi-suit-heart me-2"></i>Wishlist</a>
              </div>
            </div>
          <?php } else { ?>

            <div class="cart-buttons mt-3">
              <div class="buttons d-flex flex-column flex-lg-row gap-3 mt-4">
                <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                <input type="hidden" name="product_price" value="<?php echo $row_data['price']; ?>">
                <button type="submit" name="cart_btn" class="btn btn-lg btn-dark btn-ecomm px-5 py-3 col-lg-6"><i class="bi bi-basket2 me-2"></i>Add to Bag</button>

                <button type="submit" name="wishlist_btn" class="btn btn-lg btn-outline-dark btn-ecomm px-5 py-3"><i class="bi bi-suit-heart me-2"></i>Wishlist</button>
              </div>
            </div>
            </form>


          <?php }
          ?>


          <!-- Buttons -->
          <form action="" method="POST">

          </form>

          <hr class="my-3">
          <div class="product-info">
            <h6 class="fw-bold mb-3">Product Details</h6>
            <p class="mb-1">
              <?php echo $row_data['description'] ?>
            </p>
          </div>
        <?php } ?>
        <hr class="my-3">
        <div class="customer-ratings">
          <h6 class="fw-bold mb-3">Customer Ratings</h6>
          <div class="d-flex align-items-center gap-4 gap-lg-5 flex-wrap flex-lg-nowrap">
            <div class="">
              <h1 class="mb-2 fw-bold">4.8<span class="fs-5 ms-2 text-warning"><i class="bi bi-star-fill"></i></span>
              </h1>
              <p class="mb-0">3.8k Verified Buyers</p>
            </div>
            <div class="vr d-none d-lg-block"></div>
            <div class="w-100">
              <div class="rating-wrrap hstack gap-2 align-items-center">
                <p class="mb-0">5</p>
                <div class=""><i class="bi bi-star"></i></div>
                <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 75%"></div>
                </div>
                <p class="mb-0">1528</p>
              </div>
              <div class="rating-wrrap hstack gap-2 align-items-center">
                <p class="mb-0">4</p>
                <div class=""><i class="bi bi-star"></i></div>
                <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                </div>
                <p class="mb-0">253</p>
              </div>
              <div class="rating-wrrap hstack gap-2 align-items-center">
                <p class="mb-0">3</p>
                <div class=""><i class="bi bi-star"></i></div>
                <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 45%"></div>
                </div>
                <p class="mb-0">258</p>
              </div>
              <div class="rating-wrrap hstack gap-2 align-items-center">
                <p class="mb-0">2</p>
                <div class=""><i class="bi bi-star"></i></div>
                <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 35%"></div>
                </div>
                <p class="mb-0">78</p>
              </div>
              <div class="rating-wrrap hstack gap-2 align-items-center">
                <p class="mb-0">1</p>
                <div class=""><i class="bi bi-star"></i></div>
                <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 25%"></div>
                </div>
                <p class="mb-0">27</p>
              </div>
            </div>
          </div>
        </div>

          </div>
        </div>
      </div><!--end row-->
    </div>
  </section>
  <!--start product details-->


  <!--start product details-->
  <section class="section-padding">
    <div class="container">
      <div class="separator pb-3">
        <div class="line"></div>
        <h3 class="mb-0 h3 fw-bold">Similar Products</h3>
        <div class="line"></div>
      </div>
      <div class="similar-products">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-4">
          <div class="col">
            <a href="javascript:;">
              <div class="card rounded-0">
                <img src="../../assets/images/best-sellar/03.webp" alt="" class="card-img-top rounded-0">
                <div class="card-body border-top">
                  <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                  <p class="mb-0 product-short-name">Color Printed Kurta</p>
                  <div class="product-price d-flex align-items-center gap-3 mt-2">
                    <div class="h6 fw-bold">$458</div>
                    <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                    <div class="h6 fw-bold text-danger">(70% off)</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="javascript:;">
              <div class="card rounded-0">
                <img src="../../assets/images/new-arrival/02.webp" alt="" class="card-img-top rounded-0">
                <div class="card-body border-top">
                  <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                  <p class="mb-0 product-short-name">Color Printed Kurta</p>
                  <div class="product-price d-flex align-items-center gap-3 mt-2">
                    <div class="h6 fw-bold">$458</div>
                    <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                    <div class="h6 fw-bold text-danger">(70% off)</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="javascript:;">
              <div class="card rounded-0">
                <img src="../../assets/images/best-sellar/02.webp" alt="" class="card-img-top rounded-0">
                <div class="card-body border-top">
                  <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                  <p class="mb-0 product-short-name">Color Printed Kurta</p>
                  <div class="product-price d-flex align-items-center gap-3 mt-2">
                    <div class="h6 fw-bold">$458</div>
                    <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                    <div class="h6 fw-bold text-danger">(70% off)</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="javascript:;">
              <div class="card rounded-0">
                <img src="../../assets/images/new-arrival/04.webp" alt="" class="card-img-top rounded-0">
                <div class="card-body border-top">
                  <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                  <p class="mb-0 product-short-name">Color Printed Kurta</p>
                  <div class="product-price d-flex align-items-center gap-3 mt-2">
                    <div class="h6 fw-bold">$458</div>
                    <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                    <div class="h6 fw-bold text-danger">(70% off)</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="javascript:;">
              <div class="card rounded-0">
                <img src="../../assets/images/new-arrival/05.webp" alt="" class="card-img-top rounded-0">
                <div class="card-body border-top">
                  <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                  <p class="mb-0 product-short-name">Color Printed Kurta</p>
                  <div class="product-price d-flex align-items-center gap-3 mt-2">
                    <div class="h6 fw-bold">$458</div>
                    <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                    <div class="h6 fw-bold text-danger">(70% off)</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="javascript:;">
              <div class="card rounded-0">
                <img src="../../assets/images/trending-product/03.webp" alt="" class="card-img-top rounded-0">
                <div class="card-body border-top">
                  <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                  <p class="mb-0 product-short-name">Color Printed Kurta</p>
                  <div class="product-price d-flex align-items-center gap-3 mt-2">
                    <div class="h6 fw-bold">$458</div>
                    <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                    <div class="h6 fw-bold text-danger">(70% off)</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="javascript:;">
              <div class="card rounded-0">
                <img src="../../assets/images/featured-products/05.webp" alt="" class="card-img-top rounded-0">
                <div class="card-body border-top">
                  <h5 class="mb-0 fw-bold productshort-title">Syndrona</h5>
                  <p class="mb-0 product-short-name">Color Printed Kurta</p>
                  <div class="product-price d-flex align-items-center gap-3 mt-2">
                    <div class="h6 fw-bold">$458</div>
                    <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                    <div class="h6 fw-bold text-danger">(70% off)</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="javascript:;">
              <div class="card rounded-0">
                <img src="../../assets/images/trending-product/05.webp" alt="" class="card-img-top rounded-0">
                <div class="card-body border-top">
                  <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                  <p class="mb-0 product-short-name">Color Printed Kurta</p>
                  <div class="product-price d-flex align-items-center gap-3 mt-2">
                    <div class="h6 fw-bold">$458</div>
                    <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                    <div class="h6 fw-bold text-danger">(70% off)</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="javascript:;">
              <div class="card rounded-0">
                <img src="../../assets/images/trending-product/01.webp" alt="" class="card-img-top rounded-0">
                <div class="card-body border-top">
                  <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                  <p class="mb-0 product-short-name">Color Printed Kurta</p>
                  <div class="product-price d-flex align-items-center gap-3 mt-2">
                    <div class="h6 fw-bold">$458</div>
                    <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                    <div class="h6 fw-bold text-danger">(70% off)</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="javascript:;">
              <div class="card rounded-0">
                <img src="../../assets/images/trending-product/02.webp" alt="" class="card-img-top rounded-0">
                <div class="card-body border-top">
                  <h5 class="mb-0 fw-bold product-short-title">Syndrona</h5>
                  <p class="mb-0 product-short-name">Color Printed Kurta</p>
                  <div class="product-price d-flex align-items-center gap-3 mt-2">
                    <div class="h6 fw-bold">$458</div>
                    <div class="h6 fw-light text-muted text-decoration-line-through">$2089</div>
                    <div class="h6 fw-bold text-danger">(70% off)</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!--end row-->
      </div>
    </div>
  </section>
  <!--end product details-->


</div>
<!--end page content-->



<!-- FOOTER -->
<?php include '../../includes/footer.php' ?>


<!--start cart-->
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
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



<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class="bi bi-arrow-up"></i></a>
<!--End Back To Top Button-->


<!-- JavaScript files -->
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="../../assets/plugins/slick/slick.min.js"></script>
<script src="../../assets/js/main.js"></script>
<script src="../../assets/js/index.js"></script>
<script src="../../assets/js/loader.js"></script>



<!-- <script>
  function selectSubImage(subImage) {
    document.getElementById('selected_image').value = subImage;

    // You can also update the main image if needed
    document.getElementById('img_frame').src = '../../shopingo_admin2-rahul/assets/images/product_image/' + subImage;
  }
</script> -->


<!-- FOR IMAGE PREVIEWS -->
<!-- <script>
  let frame = document.getElementById('img_frame');
  let thumbnails = document.getElementsByClassName('sub_frame');

  for (let i = 0; i < 10; i++) {
    thumbnails[i].addEventListener('click', () => {
      let currentSrc = frame.src;
      frame.src = thumbnails[i].src;
      thumbnails[i].src = currentSrc;
    });
  }
</script> -->



<script>
  let frame = document.getElementById('img_frame');
  let thumbnails = document.getElementsByClassName('sub_frame');
  let selectedImageInput = document.getElementById('selected_image');
  let selectedImageNameInput = document.getElementById('selected_image_name');

  for (let i = 0; i < thumbnails.length; i++) {
    thumbnails[i].addEventListener('click', () => {
      let currentSrc = frame.src;
      frame.src = thumbnails[i].src;
      thumbnails[i].src = currentSrc;

      let imageName = currentSrc.split('/').pop();
      // $.ajax({
      //   url: "../controller/cart_handle.php",
      //   method: "POST",
      //   data: {
      //     callHandler: "fetchImageId",
      //     dataset: {
      //       image: imageName,
      //     },
      //   },
      //   dataType: "json",
      //   success: function(data, status, xhr) {
      //     if (data["status"] == 200) {
      //       console.log(data);
      //     } else {
      //       $("#msg")
      //         .html(`<div class="alert alert-danger alert-dismissible fade show" role="alert">
      //     <strong>${data["message"]}</strong>
      //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      // </div>`);
      //     }
      //   },
      // });
      selectedImageInput.value = frame.src.split("/").pop(); // Set the full image URL
      // console.log(frame.src.split("/").pop());
      selectedImageNameInput.value = imageName; // Set only the image name
    });
  }
</script>



</body>

</html>