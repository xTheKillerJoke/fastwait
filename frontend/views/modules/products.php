<?php

  $url = Route::ctrRoute();
  $server = Route::ctrRouteServer();

?>

<!-- Banner -->
<div class="sec-banner bg0 p-t-100 p-b-50">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
        <!-- Block1 -->
        <div class="block1 wrap-pic-w">
          <img src="http://localhost/fastwait/backend/views/img/banner-01.jpg" alt="IMG-BANNER">

          <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
            <div class="block1-txt-child1 flex-col-l">
              <span class="block1-name ltext-102 trans-04 p-b-8">
                women
              </span>

              <span class="block1-info stext-102 trans-04">
                Spring 2018
              </span>
            </div>

            <div class="block1-txt-child2 p-b-4 trans-05">
              <div class="block1-link stext-101 cl0 trans-09">
                Shop Now
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
        <!-- Block1 -->
        <div class="block1 wrap-pic-w">
          <img src="http://localhost/fastwait/backend/views/img/banner-02.jpg" alt="IMG-BANNER">

          <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
            <div class="block1-txt-child1 flex-col-l">
              <span class="block1-name ltext-102 trans-04 p-b-8">
                Men
              </span>

              <span class="block1-info stext-102 trans-04">
                Spring 2018
              </span>
            </div>

            <div class="block1-txt-child2 p-b-4 trans-05">
              <div class="block1-link stext-101 cl0 trans-09">
                Shop Now
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
        <!-- Block1 -->
        <div class="block1 wrap-pic-w">
          <img src="http://localhost/fastwait/backend/views/img/banner-03.jpg" alt="IMG-BANNER">

          <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
            <div class="block1-txt-child1 flex-col-l">
              <span class="block1-name ltext-102 trans-04 p-b-8">
                Accessories
              </span>

              <span class="block1-info stext-102 trans-04">
                New Trend
              </span>
            </div>

            <div class="block1-txt-child2 p-b-4 trans-05">
              <div class="block1-link stext-101 cl0 trans-09">
                Shop Now
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

	<!-- breadcrumb -->
<div class="container">
  <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
    <a href="<?php echo $url; ?>" class="stext-109 cl8 hov-cl1 trans-04">
      Home
      <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
    </a>

    <span class="stext-109 cl4 text-capitalize">
      <?php echo $val; ?>
    </span>
  </div>
</div>

<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
  <div class="container">
    <div class="p-b-10">
      <h3 class="ltext-103 cl5">
        Products View
      </h3>
    </div>

    <div class="flex-w flex-sb-m p-b-52">
      <div class="flex-w flex-l-m filter-tope-group m-tb-10">
        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
          All Products
        </button>

        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
          Women
        </button>

        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
          Men
        </button>

        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
          Bag
        </button>

        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">
          Shoes
        </button>

        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
          Watches
        </button>
      </div>

      <div class="flex-w flex-c-m m-tb-10">
        <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
          <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
          <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
          Filter
        </div>

        <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
          <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
          <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
          Search
        </div>
      </div>

      <!-- Search product -->
      <div class="dis-none panel-search w-full p-t-10 p-b-15">
        <div class="bor8 dis-flex p-l-15">
          <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
            <i class="zmdi zmdi-search"></i>
          </button>

          <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
        </div>
      </div>

      <!-- Filter -->
      <div class="dis-none panel-filter w-full p-t-10">
        <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
          <div class="filter-col1 p-r-15 p-b-27">
            <div class="mtext-102 cl2 p-b-15">
              Sort By
            </div>

            <ul>
              <li class="p-b-6">
                <a href="#" class="filter-link stext-106 trans-04">
                  Default
                </a>
              </li>

              <li class="p-b-6">
                <a href="#" class="filter-link stext-106 trans-04">
                  Popularity
                </a>
              </li>

              <li class="p-b-6">
                <a href="#" class="filter-link stext-106 trans-04">
                  Average rating
                </a>
              </li>

              <li class="p-b-6">
                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                  Newness
                </a>
              </li>

              <li class="p-b-6">
                <a href="#" class="filter-link stext-106 trans-04">
                  Price: Low to High
                </a>
              </li>

              <li class="p-b-6">
                <a href="#" class="filter-link stext-106 trans-04">
                  Price: High to Low
                </a>
              </li>
            </ul>
          </div>

          <div class="filter-col2 p-r-15 p-b-27">
            <div class="mtext-102 cl2 p-b-15">
              Price
            </div>

            <ul>
              <li class="p-b-6">
                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                  All
                </a>
              </li>

              <li class="p-b-6">
                <a href="#" class="filter-link stext-106 trans-04">
                  $0.00 - $50.00
                </a>
              </li>

              <li class="p-b-6">
                <a href="#" class="filter-link stext-106 trans-04">
                  $50.00 - $100.00
                </a>
              </li>

              <li class="p-b-6">
                <a href="#" class="filter-link stext-106 trans-04">
                  $100.00 - $150.00
                </a>
              </li>

              <li class="p-b-6">
                <a href="#" class="filter-link stext-106 trans-04">
                  $150.00 - $200.00
                </a>
              </li>

              <li class="p-b-6">
                <a href="#" class="filter-link stext-106 trans-04">
                  $200.00+
                </a>
              </li>
            </ul>
          </div>

          <div class="filter-col3 p-r-15 p-b-27">
            <div class="mtext-102 cl2 p-b-15">
              Color
            </div>

            <ul>
              <li class="p-b-6">
                <span class="fs-15 lh-12 m-r-6" style="color: #222;">
                  <i class="zmdi zmdi-circle"></i>
                </span>

                <a href="#" class="filter-link stext-106 trans-04">
                  Black
                </a>
              </li>

              <li class="p-b-6">
                <span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
                  <i class="zmdi zmdi-circle"></i>
                </span>

                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                  Blue
                </a>
              </li>

              <li class="p-b-6">
                <span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
                  <i class="zmdi zmdi-circle"></i>
                </span>

                <a href="#" class="filter-link stext-106 trans-04">
                  Grey
                </a>
              </li>

              <li class="p-b-6">
                <span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
                  <i class="zmdi zmdi-circle"></i>
                </span>

                <a href="#" class="filter-link stext-106 trans-04">
                  Green
                </a>
              </li>

              <li class="p-b-6">
                <span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
                  <i class="zmdi zmdi-circle"></i>
                </span>

                <a href="#" class="filter-link stext-106 trans-04">
                  Red
                </a>
              </li>

              <li class="p-b-6">
                <span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
                  <i class="zmdi zmdi-circle-o"></i>
                </span>

                <a href="#" class="filter-link stext-106 trans-04">
                  White
                </a>
              </li>
            </ul>
          </div>

          <div class="filter-col4 p-b-27">
            <div class="mtext-102 cl2 p-b-15">
              Tags
            </div>

            <div class="flex-w p-t-4 m-r--5">
              <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                Fashion
              </a>

              <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                Lifestyle
              </a>

              <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                Denim
              </a>

              <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                Streetstyle
              </a>

              <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                Crafts
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row isotope-grid">

      <?php

        /* Call Pagination */
        if(isset($routes[1]))
        {
          $base = ($routes[1] - 1)*20;
          $top = 20;
        }
        else
        {
          $routes[1] = 1;
          $base = 0;
          $top = 20;
        }

        /* Call to the Products of Categories and Sub-Categories */
        $item = "route";
        $val = $routes[0];

        $category = ProductsController::ctrShowCategories($item, $val);

        if(!$category)
        {
          $subCategory = ProductsController::ctrShowSubCategories($item, $val);

          $item2 = "id_subcategory";
          $val2 = $subCategory[0]["id"];
        }
        else
        {
          $item2 = "id_category";
          $val2 = $category["id"];
        }

        $order = "id";

        $products = ProductsController::ctrShowProducts($order, $item2, $val2, $base, $top);
        $productsList = ProductsController::ctrProductsList($order, $item2, $val2);

        if(!$products)
        {
          echo "You have no Products to show";
        }
        else
        {
          foreach ($products as $key => $value)
          {
            echo '<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item '.$val.'">
                    <!-- Block2 -->
                    <div class="block2">
                      <div class="block2-pic hov-img0 ';
                      if($value["offer"] == 1){
                        echo 'label-offer" data-label="Offer '.$value["offerDiscount"].'%"';
                      }
                      elseif(!$value["new"])
                      {
                        echo 'label-new" data-label="New"';
                      }
                      else
                      {
                        echo '"';
                      }
                      echo '>
                        <img src="'.$value["cover"].'" alt="IMG-PRODUCT">
            
                        <a href="'.$value["route"].'" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                          Quick View
                        </a>
                      </div>
            
                      <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l">
                          <a href="'.$value["route"].'" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6 content">
                            '.$value["title"].'
                          </a>';
            
                          if ($value["offer"] == 1)
                          {
                            echo '<span class="stext-105 cl3">
                                    USD '.$value["offerTotal"].'
                                    <span class="cl4-1">
                                      '.$value["priceTotal"].'
                                    </span>
                                  </span>';
                          }
                          else
                          {
                            echo '<span class="stext-105 cl3">
                                    USD '.$value["priceTotal"].'
                                  </span>';
                          }
                          
                  echo '</div>
                        <div class="block2-txt-child2 flex-r p-t-3">
                          <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                            <img class="icon-heart1 dis-block trans-04" src="'.$server.'views/img/icons/icon-heart-01.png" alt="ICON">
                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="'.$server.'views/img/icons/icon-heart-02.png" alt="ICON">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>';
          }
        }

      ?>
    
  </div>

  <!-- Pagination -->
  <?php

    if(count($productsList) != 0)
    {
      $productsPage = ceil(count($productsList)/20);

      if($productsPage > 4)
      {
        /* First 4 Pages Buttons and Last Page */
        if($routes[1] == 1)
        {
          echo '<div class="flex-c-m flex-w w-full p-t-38">';

          for ($i=1; $i <= 4; $i++) { 
            echo '<a id="item'.$i.'" href="'.$url.$val.'/'.$i.'" class="flex-c-m how-pagination1 trans-04 m-all-7">
                    '.$i.'
                  </a>';
          }
          echo '<a class="flex-c-m trans-04 m-all-7 disabled">
                  ...
                </a>
                <a id="item'.$i.'" href="'.$url.$val.'/'.$productsPage.'" class="flex-c-m how-pagination1 trans-04 m-all-7">
                  '.$productsPage.'
                </a>
                <a href="'.$url.$val.'/2" class="flex-c-m how-pagination1 trans-04 m-all-7">
                  <i class="fa fa-caret-right" aria-hidden="true"></i>
                </a>
                </div>';
        }
        /* Latest Half Pages Buttons */
        elseif($routes[1] != $productsPage &&
               $routes[1] != 1 &&
               $routes[1] < ($productsPage/2) &&
               $routes[1] < ($productsPage-3))
        {
          $currentPageNum = $routes[1];
          echo '<div class="flex-c-m flex-w w-full p-t-38">
                <a href="'.$url.$val.'/'.($currentPageNum-1).'" class="flex-c-m how-pagination1 trans-04 m-all-7">
                  <i class="fa fa-caret-left" aria-hidden="true"></i>
                </a>';

          for ($i=$currentPageNum; $i <= ($currentPageNum+3); $i++) { 
            echo '<a id="item'.$i.'" href="'.$url.$val.'/'.$i.'" class="flex-c-m how-pagination1 trans-04 m-all-7">
                    '.$i.'
                  </a>';
          }
          echo '<a class="flex-c-m trans-04 m-all-7 disabled">
                  ...
                </a>
                <a id="item'.$i.'" href="'.$url.$val.'/'.$productsPage.'" class="flex-c-m how-pagination1 trans-04 m-all-7">
                  '.$productsPage.'
                </a>
                <a href="'.$url.$val.'/'.($currentPageNum+1).'" class="flex-c-m how-pagination1 trans-04 m-all-7">
                  <i class="fa fa-caret-right" aria-hidden="true"></i>
                </a>
                </div>';
        }
        /* First Half Pages Buttons */
        elseif($routes[1] != $productsPage &&
               $routes[1] != 1 &&
               $routes[1] >= ($productsPage/2) &&
               $routes[1] < ($productsPage-3))
        {
          echo '<div class="flex-c-m flex-w w-full p-t-38">
                  <a href="'.$url.$val.'/'.($currentPageNum-1).'" class="flex-c-m how-pagination1 trans-04 m-all-7">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                  </a>
                  <a id="item1" href="'.$url.$val.'/1" class="flex-c-m how-pagination1 trans-04 m-all-7">
                    1
                  </a>
                  <a class="flex-c-m trans-04 m-all-7 disabled">
                    ...
                  </a>';

            for ($i=$currentPageNum; $i <= ($currentPageNum+3); $i++) { 
              echo '<a id="item'.$i.'" href="'.$url.$val.'/'.$i.'" class="flex-c-m how-pagination1 trans-04 m-all-7">
                      '.$i.'
                    </a>';
          }
          echo '<a href="'.$url.$val.'/'.($currentPageNum+1).'" class="flex-c-m how-pagination1 trans-04 m-all-7">
                  <i class="fa fa-caret-right" aria-hidden="true"></i>
                </a>
                </div>';
        }
        /* Latest 4 Pages Buttons and First Page */
        else
        {
          $currentPageNum = $routes[1];

          echo '<div class="flex-c-m flex-w w-full p-t-38">
                  <a href="'.$url.$val.'/'.($currentPageNum-1).'" class="flex-c-m how-pagination1 trans-04 m-all-7">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                  </a>
                  <a id="item1" href="'.$url.$val.'/1" class="flex-c-m how-pagination1 trans-04 m-all-7">
                    1
                  </a>
                  <a class="flex-c-m trans-04 m-all-7 disabled">
                    ...
                  </a>';

          for ($i=($productsPage-3); $i <= $productsPage; $i++) { 
            echo '<a id="item'.$i.'" href="'.$url.$val.'/'.$i.'" class="flex-c-m how-pagination1 trans-04 m-all-7">
                    '.$i.'
                  </a>';
          }
          echo '</div>';
        }
      }
      else
      {
        echo '<div class="flex-c-m flex-w w-full p-t-38">';
        for ($i=1; $i <= $productsPage; $i++) { 
          echo '<a id="item'.$i.'" href="'.$url.$val.'/'.$i.'" class="flex-c-m how-pagination1 trans-04 m-all-7">
                  '.$i.'
                </a>';
        }
        echo '</div>';
      }
    }

  ?>

  </div>
</section>
