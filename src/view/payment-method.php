<?php include '../../includes/header.php'; ?>

<!-- NAVBAR -->
<?php include_once '../../includes/nav.php' ?>


<!--start page content-->
<div class="page-content">


   <!--start breadcrumb-->
   <div class="py-4 border-bottom">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0"> 
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:;">Checkout</a></li>
          <li class="breadcrumb-item active" aria-current="page">Payment Method</li>
        </ol>
      </nav>
    </div>
   </div>
   <!--end breadcrumb-->


   <!--start product details-->
   <section class="section-padding">
    <div class="container">
      <div class="d-flex align-items-center px-3 py-2 border mb-4">
        <div class="text-start">
          <h4 class="mb-0 h4 fw-bold">Select Payment Method</h4>
       </div>
      </div>
	   <div class="row g-4">
	     <div class="col-12 col-lg-8 col-xl-8">
		    <div class="card rounded-0 payment-method">
          <div class="row g-0">
             <div class="col-12 col-lg-4 bg-light">
              <div class="nav flex-column nav-pills">
                <button class="nav-link rounded-0" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"><i class="bi bi-cash-stack me-2"></i>Cash On Delivery</button>
                <button class="nav-link rounded-0" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"><i class="bi bi-paypal me-2"></i>Paypal</button>
                <button class="nav-link active rounded-0" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button"><i class="bi bi-credit-card-2-back me-2"></i>Credit/Debit Card</button>
                <button class="nav-link rounded-0 border-bottom-0" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button"><i class="bi bi-bank2 me-2"></i>Net Banking</button>
              </div>
             </div>
             <div class="col-12 col-lg-8">
              <div class="tab-content p-3">
                <div class="tab-pane fade" id="v-pills-home">
                   <h5 class="mb-3 fw-bold">I would like to pay after product delivery</h5>
                   <button type="button" class="btn btn-ecomm btn-dark w-100 py-3 px-5">Place Order</button>
                </div>
                <div class="tab-pane fade" id="v-pills-profile">
                    <div class="mb-3">
                      <p>Select your Paypal Account type</p>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Domestic</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">International</label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="d-block">	<a href="javscript:;" class="btn btn-outline-dark btn-ecomm rounded-0"><i class="bi bi-paypal me-2"></i>Login to my Paypal</a>
                      </div>
                    </div>
                    <div class="mb-3">
                      <p class="mb-0">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order.</p>
                    </div>
                   <button type="button" class="btn btn-ecomm btn-dark w-100 py-3 px-5">Pay Now</button>
                </div>
                <div class="tab-pane fade show active" id="v-pills-messages">
                    <div class="row g-3">
                       <div class="col-12">
                        <div class="form-floating">
                          <input type="text" class="form-control rounded-0" id="floatingCardNumber" placeholder="Card Number">
                          <label for="floatingCardNumber">Card Number</label>
                        </div>
                       </div>
                       <div class="col-12">
                        <div class="form-floating">
                          <input type="text" class="form-control rounded-0" id="floatingNameonCard" placeholder="Name on Card">
                          <label for="floatingNameonCard">Name on Card</label>
                        </div>
                       </div>
                       <div class="col-12 col-lg-8">
                        <div class="form-floating">
                          <input type="text" class="form-control rounded-0" id="floatingValidity" placeholder="Validity (MM/YY)">
                          <label for="floatingValidity">Validity (MM/YY)</label>
                        </div>
                       </div>
                       <div class="col-12 col-lg-4">
                        <div class="form-floating">
                          <input type="text" class="form-control rounded-0" id="floatingCCV" placeholder="CCV">
                          <label for="floatingCCV">CCV</label>
                        </div>
                       </div>
                       <div class="col-12">
                         <button type="button" class="btn btn-ecomm btn-dark w-100 py-3 px-5">Pay Now</button>
                       </div>
                    </div><!--end row-->
                </div>
                <div class="tab-pane fade" id="v-pills-settings">
                    <div class="mb-3">
                      <p>Select your Bank</p>
                      <select class="form-select form-select-lg rounded-0" aria-label="Default select example">
                        <option selected="">--Please Select Your Bank--</option>
                        <option value="1">Bank Name 1</option>
                        <option value="2">Bank Name 2</option>
                        <option value="3">Bank Name 3</option>
                      </select>
                    </div>
                    <button type="button" class="btn btn-ecomm btn-dark w-100 py-3 px-5 mb-3">Pay Now</button>
                    <div class="">
                      <p class="mb-0">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order.</p>
                    </div>
                </div>
              </div>
            </div>
          </div><!--end row-->
			</div> 

		 </div>
		 <div class="col-12 col-lg-4 col-xl-4">
		     <div class="card rounded-0 mb-3">
           <div class="card-body">
             <h5 class="fw-bold mb-4">Order Summary</h5>
             <div class="hstack align-items-center justify-content-between">
               <p class="mb-0">Bag Total</p>
               <p class="mb-0">$599.00</p>
             </div>
             <hr>
             <div class="hstack align-items-center justify-content-between">
              <p class="mb-0">Bag discount</p>
              <p class="mb-0 text-success">- $178.00</p>
            </div>
            <hr>
            <div class="hstack align-items-center justify-content-between">
              <p class="mb-0">Delivery</p>
              <p class="mb-0">$29.00</p>
            </div>
            <hr>
            <div class="hstack align-items-center justify-content-between fw-bold text-content">
              <p class="mb-0">Total Amount</p>
              <p class="mb-0">$393.00</p>
            </div>
           </div>
         </div>

		 </div>
	 </div><!--end row-->
       
    </div>
  </section>
   <!--start product details-->


  
  
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
   <script src="../../assets/plugins/slick/slick.min.js"></script>
   <script src="../../assets/js/main.js"></script>
   <script src="../../assets/js/loader.js"></script>


</body>

</html>