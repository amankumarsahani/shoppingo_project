<?php include '../../includes/header.php'; ?>

<!-- NAVBAR -->
<?php //include_once '../../includes/nav.php' ?>

 <!--start page content-->

<section class="section-padding bg-section-2">
  <div class="container">
     <div class="d-flex align-items-center">
        <div class="">
          <h3 class="mb-0 fw-bold">Search Products</h3>
        </div>
        <div class="ms-auto">
          <button type="button" class="btn-close" onclick="history.back()" aria-label="Close"></button>
        </div>
     </div>
      <div class="search-box position-relative mt-4">
        <div class="position-absolute position-absolute top-50 start-0 translate-middle ms-4 fs-5"><i class="bi bi-search"></i></div>
        <input class="form-control form-control-lg ps-5 rounded-0" type="text" placeholder="Type here to search">
      </div>
  </div>
</section>

<section class="section-padding">
  <div class="container">
     <h5 class="mb-0 fw-bold">Explore by categories</h5>
      <div class="search-categories mt-4">
         <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-5 g-4">
           <div class="col">
             <div class="card border-0 rounded-0 shadow bg-green">
               <div class="card-body p-4">
                  <div class="d-flex align-items-center">
                     <div>
                        <h5 class="mb-0 fw-bold text-white">Men Fashion</h5>
                      </div> 
                     <div class="ms-auto fs-1 text-white">
                        <i class="bi bi-cast"></i>
                     </div> 
                  </div>
               </div>
             </div>
           </div>
           <div class="col">
            <div class="card border-0 rounded-0 shadow bg-pink">
              <div class="card-body p-4">
                 <div class="d-flex align-items-center">
                    <div>
                       <h5 class="mb-0 fw-bold text-white">Kids Wear</h5>
                     </div> 
                    <div class="ms-auto fs-1 text-white">
                      <i class="bi bi-boombox"></i>
                    </div> 
                 </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-0 rounded-0 shadow bg-skyblue">
              <div class="card-body p-4">
                 <div class="d-flex align-items-center">
                    <div>
                       <h5 class="mb-0 fw-bold text-white">Electronics</h5>
                     </div> 
                    <div class="ms-auto fs-1 text-white">
                      <i class="bi bi-film"></i>
                    </div> 
                 </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-0 rounded-0 shadow bg-purple">
              <div class="card-body p-4">
                 <div class="d-flex align-items-center">
                    <div>
                       <h5 class="mb-0 fw-bold text-white">Furniture</h5>
                     </div> 
                    <div class="ms-auto fs-1 text-white">
                      <i class="bi bi-music-note-beamed"></i>
                    </div> 
                 </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-0 rounded-0 shadow bg-yellow">
              <div class="card-body p-4">
                 <div class="d-flex align-items-center">
                    <div>
                       <h5 class="mb-0 fw-bold text-white">Sports</h5>
                     </div> 
                    <div class="ms-auto fs-1 text-white">
                      <i class="bi bi-person-lines-fill"></i>
                    </div> 
                 </div>
              </div>
            </div>
          </div>
         </div><!--end row-->

         <h5 class="fw-bold mb-3 mt-5">Trending Searches</h5>
         <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
           <div class="col">
            <div class="list-group list-group-flush search-categories">
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Women Topwear Fashion</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Kids School Dresses</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Best Mobile in Samsung</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Top Selling Brands</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Men'sports Watches</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Formal Shirts for Women</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Casual Pants for Men</a>
            </div>
           </div> 
           <div class="col">
            <div class="list-group list-group-flush search-categories">
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Women Topwear Fashion</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Kids School Dresses</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Best Mobile in Samsung</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Top Selling Brands</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Men'sports Watches</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Formal Shirts for Women</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Casual Pants for Men</a>
            </div>
           </div>  
           <div class="col">
            <div class="list-group list-group-flush search-categories">
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Women Topwear Fashion</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Kids School Dresses</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Best Mobile in Samsung</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Top Selling Brands</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Men'sports Watches</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Formal Shirts for Women</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Casual Pants for Men</a>
            </div>
           </div>  
           <div class="col">
            <div class="list-group list-group-flush search-categories">
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Women Topwear Fashion</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Kids School Dresses</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Best Mobile in Samsung</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Top Selling Brands</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Men'sports Watches</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Formal Shirts for Women</a>
              <a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>Casual Pants for Men</a>
            </div>
           </div>  

         </div><!--end row-->



      </div>
  </div>
</section>

<!--end page content-->



  <!-- JavaScript files -->
  <script src="../../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/plugins/slick/slick.min.js"></script>
  <script src="../../assets/js/main.js"></script>
  <script src="../../assets/js/loader.js"></script>

</body>

</html>