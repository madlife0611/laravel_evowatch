@extends("frontend.layout")
@section("do-du-lieu")

<!-- Begin new products  -->
        <div class="grid wide">

          <div class="content-newProducts">
            <div class="content-newProducts-title text-center d-flex-h">
              <h2 class="title">Sản phẩm hot</h2>
            </div>

            <!-- Begin new product items -->

            <div class="content-newProducts-products row">
              <?php 
                  $hotProducts = DB::select("select * from product where hot = 1 order by id desc limit 0,5")
               ?>
               @foreach($hotProducts as $rows)
              <a class="content-newProducts-item-wrapper col l-2-4 m-6 c-6">
                <div class="content-newProducts-item">
                  <div class="content-newProduct-image-wrapper">
                    <img src="{{ asset("upload/product/".$rows->image) }}" class="content-newProduct-image" alt="" />
                    <img src="{{ asset("upload/product/".$rows->image) }}" alt="" class="content-newProduct-image--hover">
                  </div>
                  <div class="product-info">
                    <div class="product-name text-center">
                      {{ $rows->name }}
                    </div>
                    <div class="product-price d-flex-h">
                      <div class="product-price--new">
                        4.500.000đ
                      </div>
                      <div class="product-price--old">
                        {{ $rows->price }}
                      </div>
                    </div>
                  </div>
                  <div class="btn-wrapper d-flex-h">
                    <button class="btn btn-addToCart content-newProduct-action">
                      Thêm vào giỏ hàng
                    </button>
                  </div>
                </div>
              </a>
              @endforeach
              

            </div>

            <!-- End new product items  -->
          </div>
        </div>
        <!-- End new products -->

        <!-- Begin barner  -->
        <div class="grid wide">
          <div class="content-barner d-flex-v row">

            <div class="content-barner-item-wrapper col l-4 m-6 c-12">
              <a class="content-barner-item">
                <div class="content-barner-item-img-wrapper">
                  <img src="{{ asset('EvoWatch/assets/img/barner.jpg') }}" alt="" class="content-barner-item-img">
                </div>
                <div class="content-barner-item-box">
                  <div class="content-barner-item-name text-center">Đồng hồ</div>
                  <div class="btn-wrapper d-flex-h">
                    <button class="btn content-barner-item-btn">Xem thêm</button>
                  </div>
                </div>
              </a>
            </div>

            <div class="content-barner-item-wrapper col l-4 m-6 c-12">
              <a class="content-barner-item">
                <div class="content-barner-item-img-wrapper">
                  <img src="{{ asset('EvoWatch/assets/img/barner.jpg') }}" alt="" class="content-barner-item-img">
                </div>
                <div class="content-barner-item-box">
                  <div class="content-barner-item-name text-center">Đồng hồ</div>
                  <div class="btn-wrapper d-flex-h">
                    <button class="btn content-barner-item-btn">Xem thêm</button>
                  </div>
                </div>
              </a>
            </div>

            <div class="content-barner-item-wrapper col l-4 m-6 m-o-3 c-12">
              <a class="content-barner-item">
                <div class="content-barner-item-img-wrapper">
                  <img src="{{ asset('EvoWatch/assets/img/barner.jpg') }}" alt="" class="content-barner-item-img">
                </div>
                <div class="content-barner-item-box">
                  <div class="content-barner-item-name text-center">Đồng hồ</div>
                  <div class="btn-wrapper d-flex-h">
                    <button class="btn content-barner-item-btn">Xem thêm</button>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>
        <!-- End barner  -->

        <!-- Begin hot Brand  -->
        <div class="content-hotBrand">
          <div class="content-hotBrand-main grid wide">
            <div class="content-hotBrand-title text-center d-flex-h">
              <h2 class="title">Bộ sưu tập mùa hè</h2>
            </div>
            <div class="content-hotBrand-row d-flex-h row">
              <div class="content-hotBrand-wrapper col l-4 m-6 c-12">
                <a class="content-hotBrand-item">
                  <img src="{{ asset('EvoWatch/assets/img/sp.jpg') }}" alt="" class="content-hot-Brand-img" />
                  <div class="content-hotBrand-box">
                    <div class="content-hotBrand-name text-center">Casio</div>
                    <div class="content-hotBrand-btn-wrapper d-flex-h">
                      <button class="btn content-hotBrand-btn">
                        Xem thêm
                      </button>
                    </div>
                  </div>
                </a>
              </div>
              <div class="content-hotBrand-wrapper col l-4 m-6 c-12">
                <a class="content-hotBrand-item">
                  <img src="{{ asset('EvoWatch/assets/img/sp.jpg') }}" alt="" class="content-hot-Brand-img" />
                  <div class="content-hotBrand-box">
                    <div class="content-hotBrand-name text-center">Casio</div>
                    <div class="content-hotBrand-btn-wrapper d-flex-h">
                      <button class="btn content-hotBrand-btn">
                        Xem thêm
                      </button>
                    </div>
                  </div>
                </a>
              </div>
              <div class="content-hotBrand-wrapper col l-4 m-6 c-12">
                <a class="content-hotBrand-item">
                  <img src="{{ asset('EvoWatch/assets/img/sp.jpg') }}" alt="" class="content-hot-Brand-img" />
                  <div class="content-hotBrand-box">
                    <div class="content-hotBrand-name text-center">Casio</div>
                    <div class="content-hotBrand-btn-wrapper d-flex-h">
                      <button class="btn content-hotBrand-btn">
                        Xem thêm
                      </button>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End hot Brand  -->

        <div class="content-news">
          <div class="grid wide">
            <div class="content-news-title text-center d-flex-h">
              <h2 class="title">Tin tức Evo watch</h2>
            </div>
            <div class="row">
              <?php 
                  $hotNews = DB::select("select * from news where hot = 1 order by id desc limit 0,4")
               ?>
               @foreach($hotNews as $rows)
              <div class="content-news-item-wrapper col l-3 m-6 c-6">
                <a href="blog.html" class="content-news-item ">
                  <div class="content-news-img-wrapper">
                    <img src="{{ asset("upload/news/".$rows->photo) }}" alt="" class="content-news-item-img">
                  </div>
                  <h4 class="content-news-item-title">{{ $rows->name }}
                  </h4>
                  <span class="content-news-item-text">{{ $rows->description }}</span>
                </a>

              </div>
              @endforeach

              
            </div>


          </div>
        </div>

@endsection