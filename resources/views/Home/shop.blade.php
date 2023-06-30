@extends('Home.master')
@section('main-content')
    <!-- ...:::: Start Shop Section:::... -->
    <div class="shop-section">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row-reverse">
                <div class="col-lg-3">
                    <!-- Start Sidebar Area -->
                    <div class="siderbar-section" data-aos="fade-up" data-aos-delay="0">

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">CATEGORIES</h6>
                            <div class="sidebar-content">
                                <ul class="sidebar-menu">
                                    <li>
                                        <ul class="sidebar-menu-collapse">
                                            <!-- Start Single Menu Collapse List -->
                                            <li class="sidebar-menu-collapse-list">
                                                <div class="accordion">
                                                    <a href="#" class="accordion-title collapsed"
                                                        data-bs-toggle="collapse" data-bs-target="#mens-fashion"
                                                        aria-expanded="false">Mens <i class="ion-ios-arrow-right"></i></a>
                                                    <div id="mens-fashion" class="collapse">
                                                        <ul class="accordion-category-list">
                                                            <li><a href="#">Shirts</a></li>
                                                            <li><a href="#">Pants</a></li>
                                                            <li><a href="#">Inners</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li> <!-- End Single Menu Collapse List -->
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="sidebar-menu-collapse">
                                            <!-- Start Single Menu Collapse List -->
                                            <li class="sidebar-menu-collapse-list">
                                                <div class="accordion">
                                                    <a href="#" class="accordion-title collapsed"
                                                        data-bs-toggle="collapse" data-bs-target="#womens-fashion"
                                                        aria-expanded="false">Womens <i class="ion-ios-arrow-right"></i></a>
                                                    <div id="womens-fashion" class="collapse">
                                                        <ul class="accordion-category-list">
                                                            <li><a href="#">Tops</a></li>
                                                            <li><a href="#">Pants</a></li>
                                                            <li><a href="#">Inners</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li> <!-- End Single Menu Collapse List -->
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="sidebar-menu-collapse">
                                            <!-- Start Single Menu Collapse List -->
                                            <li class="sidebar-menu-collapse-list">
                                                <div class="accordion">
                                                    <a href="#" class="accordion-title collapsed"
                                                        data-bs-toggle="collapse" data-bs-target="#babies-fashion"
                                                        aria-expanded="false">Babies <i class="ion-ios-arrow-right"></i></a>
                                                    <div id="babies-fashion" class="collapse">
                                                        <ul class="accordion-category-list">
                                                            <li><a href="#">Topwear</a></li>
                                                            <li><a href="#">Bottomwear</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li> <!-- End Single Menu Collapse List -->
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">FILTER BY PRICE</h6>
                            <div class="sidebar-content">
                                <div id="slider-range"></div>
                                <div class="filter-type-price">
                                    <label for="amount">Price range:</label>
                                    <input type="text" id="amount">
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                    </div> <!-- End Sidebar Area -->
                </div>
                <div class="col-lg-9">
                    <!-- Start Shop Product Sorting Section -->
                    <div class="shop-sort-section">
                        <div class="container">
                            <div class="row">
                                <!-- Start Sort Wrapper Box -->
                                <div class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column"
                                    data-aos="fade-up" data-aos-delay="0">
                                    <!-- Start Sort tab Button -->
                                    <div class="sort-tablist d-flex align-items-center">
                                        <ul class="tablist nav sort-tab-btn">
                                            <li><a class="nav-link active" data-bs-toggle="tab" href="#layout-3-grid"><img
                                                        src="assets/images/icons/bkg_grid.png" alt=""></a></li>
                                            <li><a class="nav-link" data-bs-toggle="tab" href="#layout-list"><img
                                                        src="assets/images/icons/bkg_list.png" alt=""></a></li>
                                        </ul>

                                        <!-- Start Page Amount -->
                                        <div class="page-amount ml-2">
                                            <span>Showing 1–9 of 21 results</span>
                                        </div> <!-- End Page Amount -->
                                    </div> <!-- End Sort tab Button -->

                                    <!-- Start Sort Select Option -->
                                    <div class="sort-select-list d-flex align-items-center">
                                        <label class="mr-2">Sort By:</label>
                                        <form action="#">
                                            <fieldset>
                                                <select name="speed" id="speed">
                                                    <option>Sort by average rating</option>
                                                    <option>Sort by popularity</option>
                                                    <option selected="selected">Sort by newness</option>
                                                    <option>Sort by price: low to high</option>
                                                    <option>Sort by price: high to low</option>
                                                    <option>Product Name: Z</option>
                                                </select>
                                            </fieldset>
                                        </form>
                                    </div> <!-- End Sort Select Option -->



                                </div> <!-- Start Sort Wrapper Box -->
                            </div>
                        </div>
                    </div> <!-- End Section Content -->

                    <!-- Start Tab Wrapper -->
                    <div class="sort-product-tab-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content tab-animate-zoom">
                                        <!-- Start Grid View Product -->
                                        <div class="tab-pane active show sort-layout-single" id="layout-3-grid">
                                            <div class="row">
                                                @foreach ($products as $item)
                                                    <div class="col-xl-4 col-sm-6 col-12">
                                                        <!-- Start Product Default Single Item -->
                                                        <div class="product-default-single-item product-color--golden" data-aos="fade-up" data-aos-delay="0">
                                                            <div class="image-box" style="height: 200px;">
                                                                <a href="productdetail/{{ $item['id'] }}" class="image-link">
                                                                    <img src="{{ asset('uploads/' . $item['product_image']) }}" alt="">
                                                                    <img src="{{ asset('uploads/' . $item['product_image']) }}" alt="">
                                                                </a>
                                                                <div class="action-link">
                                                                    <div class="action-link-left">
                                                                        <a onclick="addcartfunc({{ $item['id'] }})" data-bs-toggle="modal" data-bs-target="#modalAddcart">Add to Cart</a>
                                                                    </div>
                                                                    <div class="action-link-right">
                                                                        <a href=""><i class="icon-heart"></i></a>
                                                                        <a href=""><i class="icon-shuffle"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                <div class="content-right">
                                                                    <span class="price"><b>{{ $item['product_name'] }}</b></span>
                                                                </div>
                                                                <div>
                                                                    <p><b>Discount: </b>{{ $item['product_discount'] }}%</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                @endforeach
                                            </div>
                                        </div> <!-- End Grid View Product -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Tab Wrapper -->

                    <!-- Start Pagination -->
                    <div class="page-pagination text-center" data-aos="fade-up" data-aos-delay="0">
                        <ul>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="ion-ios-skipforward"></i></a></li>
                        </ul>
                    </div> <!-- End Pagination -->
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Shop Section:::... -->
@endsection
<script>
    function addcartfunc(id) {
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
        $.ajax({
            url: "add_to_cart", 
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken, 
            },
            data: {
                product_id: id,
            },
            success: function(status) {
                console.log(status.message);
                $("#cart_id").val(status.status);
                $("#cartmsgid").show();
                
                setTimeout(function() {
                   $("#cartmsgid").hide();
                }, 3000);
               
                // $("#cartmsgid").val(status.message);
            },
            error: function(xhr, status, error) {
                console.log(id);
            }
        });
    }
</script>
