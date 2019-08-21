<!-- Slider -->
<section class="section-slide">
  <div class="wrap-slick1">
    <div class="slick1">
      <?php

        $server = Route::ctrRouteServer();

        $slide = SlideController::ctrShowSlide();

        foreach ($slide as $key => $value)
        {
          $typeTextSlide1 = json_decode($value["typeTextSlide1"], true);
          $typeTextSlide2 = json_decode($value["typeTextSlide2"], true);
          $typeTextButton = json_decode($value["typeTextButton"], true);

          echo '<div class="'.$value["slideType"].'" style="background-image: url('.$server.$value["slideImg"].');">
                  <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                      <div class="layer-slick1 animated visible-false" data-appear="'.$typeTextSlide1["effect"].'" data-delay="'.$typeTextSlide1["effectTime"].'">
                        <span class="ltext-101 cl2 respon2">
                          '.$typeTextSlide1["text"].'
                        </span>
                      </div>

                      <div class="layer-slick1 animated visible-false" data-appear="'.$typeTextSlide2["effect"].'" data-delay="'.$typeTextSlide2["effectTime"].'">
                        <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                          '.$typeTextSlide2["text"].'
                        </h2>
                      </div>

                      <div class="layer-slick1 animated visible-false" data-appear="'.$typeTextButton["effect"].'" data-delay="'.$typeTextButton["effectTime"].'">
                        <a href="'.$value["url"].'" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                          '.$typeTextButton["text"].'
                        </a>
                      </div>
                    </div>
                  </div>
                </div>';
        }
      ?>
    </div>
  </div>
</section>