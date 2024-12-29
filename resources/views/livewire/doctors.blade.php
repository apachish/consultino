<div class="tm-section shop-page-area bg-white tm-padding-section">
    <div class="container">
        <div class="tm-shop-productsarea">
            <form  wire:submit="orderBy" class="tm-shop-header">
                <p class="tm-shop-countview">Showing 1 to 12 of 24 </p>
                <select>
                    <option value="value">{{__("Time")}}</option>
                    <option value="value">{{__("Name")}}</option>
                    <option value="value">{{__("Rate")}}</option>
                </select>
            </form>
            <div class="tm-shop-products">
                <div class="row mt-30-reverse">
                    @foreach($doctors as $doctor)
                    <!-- Single Product -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-30">
                        <div class="tm-product wow fadeInUp">
                            <div class="tm-product-image">
                                <a class="tm-product-imagelink" href="product-details.blade.php">
                                    <img src="/assets/images/product/product-image-1.jpg" alt="product image">
                                </a>
                                <ul class="tm-product-actions">
                                    <li><a href="cart.blade.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i
                                                class="fa fa-eye"></i></button></li>
                                </ul>
                            </div>
                            <div class="tm-product-content">
                                <h5 class="tm-product-title"><a href="product-details.blade.php">Business
                                        Strategy</a></h5>
                                <div class="tm-product-rating">
                                    <span class="active"><i class="fa fa-star"></i></span>
                                    <span class="active"><i class="fa fa-star"></i></span>
                                    <span class="active"><i class="fa fa-star"></i></span>
                                    <span class="active"><i class="fa fa-star"></i></span>
                                    <span class="active"><i class="fa fa-star"></i></span>
                                </div>
                                <h6 class="tm-product-price"><del>$109.99</del> $99.99</h6>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->
                    @endforeach
                </div>
            </div>
            <div class="tm-pagination mt-50">
                {{ $blogs->links() }}

            </div>
        </div>
    </div>
</div>
