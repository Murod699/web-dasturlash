@extends('layouts.app', ['title'=>"Home page"])

@section('content')

<!-- banner section -->
<section id="home" class="banner">
    <div id="banner-bg-effect" class="banner-effect"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12 col-sm-12 order-lg-first mt-lg-0 mt-4">
                <h1 class="mb-4 title"><strong>Kerakli </strong>vaqtda, <br>to'g'ri ish <strong>qiling!</strong>
                </h1>
                <p>«Zo'r qopqon yarating va butun dunyo sizning eshiklaringiz tomon yo'l
                    topib keladi!»
                </p>
                <div class="mt-5">
                    <a class="btn btn-primary btn-style mr-2" href="{{route('about')}}">Haqida...</a>
                    <a class="btn btn-outline btn-outline-style" href="{{route('services')}}">Xizmatlar</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 order-first text-lg-left text-center">
                <div>
                    <img src="assets/images/banner-round.png" alt="" class="rounded-circle img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //banner section -->

<!-- home page about -->
<section class="w3l-about">
    <div class="container">
        <div class="row about-content">
            <div class="col-lg-6 info mb-lg-0 mb-sm-5 mb-4 align-center">
                <h3 class="title">Biz haqimizda</h3>
                <h6>Biznesni rejalashtirish, strategiya va ijro.
                 Odamlar aslida foydalanishni istagan mahsulotlarga olib keladigan muammoni hal qiluvchi falsafa.</h6>
                <p class="mt-md-4 mt-3 mb-0">Biz sizning biznesinggizni rivojlantirishga yangi loyihalarni amalga oshirishingizga o'z hissamiz tegishidan mamnunmiz!</p>
            </div>
            <div class="col-lg-6">
                <img src="assets/images/about.png" class="img-fluid img-shadow" alt="about">
            </div>
        </div>
    </div>
</section>
<!-- //home page about -->

<!-- home page service grids -->
<section id="services" class="bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
        <h4 class="section-title">Siz Uchun Bizning Qarorimiz Bilan Tanishing</h4>
        <p class="text-center">Lorem ipsum dolor, sit amet consectet et adipis icing elit. Ab commodi iure minus
          laboriosam placeat quia, dolorem animi. Eveniet repudiandae, iure et.</p>
      </div>
    </div>
    <div class="row mt-lg-5">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-briefcase"></span>
          </div>
          <h4><a href="#url">Biznes xizmatlari</a></h4>
          <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
            doloret quas saepe autem, dolor set.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-shield"></span>
          </div>
          <h4><a href="#url">Mahsulot konsaltingi</a></h4>
          <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
            doloret quas saepe autem, dolor set.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-dollar"></span>
          </div>
          <h4><a href="#url">Moliyaviy konsalting</a></h4>
          <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
            doloret quas saepe autem, dolor set.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-industry"></span>
          </div>
          <h4><a href="#url">Investitsiyalarni rejalashtirish</a></h4>
          <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
            doloret quas saepe autem, dolor set.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-lightbulb-o"></span>
          </div>
          <h4><a href="#url">Biznesning o'sishi</a></h4>
          <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
            doloret quas saepe autem, dolor set.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-picture-o"></span>
          </div>
          <h4><a href="#url">Dunyo bo'ylab loyihalar</a></h4>
          <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
            doloret quas saepe autem, dolor set.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //home page service grids -->

<!-- testimonials section -->
<section id="slider" class="testimonials">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                <h4 class="section-title">Ular Biz Haqimizda Nima Deyishdi</h4>
                <p class="text-center">Dunyoning yetakchi kompaniyalar asoschilarining biz haqimizdagi fikrlari!</p>
            </div>
        </div>
        <div class="large-12 columns mt-5">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="w3l-customers-7">
                        <div class="customers_sur">
                            <div class="customers-left_sur">
                                <div class="customers_grid">
                                    <div class="custo-img-res">
                                        <img src="assets/images/testi1.jpg" alt=" " class="">
                                    </div>
                                    <div class="ratings my-4 my-4">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>Lorem ipsum dolor, sit amet consect adipis icing elit. Ab commodi iure minus
                                        placeat quia, animi. Eveniet, iure et. ipsum dolor sed ut init et.</p>
                                    <div class="customers-bottom_sur">
                                        <div class="custo_grid">
                                            <h5>Tanguy De</h5>
                                            <span>Designation</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="w3l-customers-7">
                        <div class="customers_sur">
                            <div class="customers-left_sur">
                                <div class="customers_grid">
                                    <div class="custo-img-res">
                                        <img src="assets/images/testi2.jpg" alt=" " class="img-fluid">
                                    </div>
                                    <div class="ratings my-4">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>Lorem ipsum dolor, sit amet consect adipis icing elit. Ab commodi iure minus
                                        placeat quia, animi. Eveniet, iure et. ipsum dolor sed ut init et.</p>
                                    <div class="customers-bottom_sur">
                                        <div class="custo_grid">
                                            <h5>Christopher</h5>
                                            <span>Designation</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="w3l-customers-7">
                        <div class="customers_sur">
                            <div class="customers-left_sur">
                                <div class="customers_grid">
                                    <div class="custo-img-res">
                                        <img src="assets/images//testi3.jpg" alt=" " class="img-fluid">
                                    </div>
                                    <div class="ratings my-4">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>Lorem ipsum dolor, sit amet consect adipis icing elit. Ab commodi iure minus
                                        placeat quia, animi. Eveniet, iure et. ipsum dolor sed ut init et.</p>
                                    <div class="customers-bottom_sur">
                                        <div class="custo_grid">
                                            <h5>Edward</h5>
                                            <span>Designation</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="w3l-customers-7">
                        <div class="customers_sur">
                            <div class="customers-left_sur">
                                <div class="customers_grid">
                                    <div class="custo-img-res">
                                        <img src="assets/images//testi4.jpg" alt=" " class="img-fluid">
                                    </div>
                                    <div class="ratings my-4">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>Lorem ipsum dolor, sit amet consect adipis icing elit. Ab commodi iure minus
                                        placeat quia, animi. Eveniet, iure et. ipsum dolor sed ut init et.</p>
                                    <div class="customers-bottom_sur">
                                        <div class="custo_grid">
                                            <h5>Abigail</h5>
                                            <span>Designation</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="w3l-customers-7">
                        <div class="customers_sur">
                            <div class="customers-left_sur">
                                <div class="customers_grid">
                                    <div class="custo-img-res">
                                        <img src="assets/images//testi5.jpg" alt=" " class="img-fluid">
                                    </div>
                                    <div class="ratings my-4">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>Lorem ipsum dolor, sit amet consect adipis icing elit. Ab commodi iure minus
                                        placeat quia, animi. Eveniet, iure et. ipsum dolor sed ut init et.</p>
                                    <div class="customers-bottom_sur">
                                        <div class="custo_grid">
                                            <h5>Abigail</h5>
                                            <span>Designation</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//testimonials section -->

<!-- stats section -->
<section id="stats" class="stats">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 margin-md-60">
                <h2 class="left-title">Bizning kompaniyamizning ba'zi haqiqatlari.</h2>
                <p class="white">Lorem ipsum dolor, sit amet consectet et adipis icing elit. Ab commodi iure minus
                    laboriosam placeat quia, dolorem animi. Eveniet repudiandae, iure et.</p>
            </div>
            <div class="col-lg-7 mt-lg-0 mt-5">
                <div class="d-sm-flex justify-content-lg-around justify-content-between counter-main">
                    <div class="counter">
                        <div class="icon">
                            <span class="fa fa-folder-open-o"></span>
                        </div>
                        <p class="value">385</p>
                        <p class="title white">Loyihalar</p>
                    </div>
                    <div class="counter">
                        <div class="icon">
                            <span class="fa fa-headphones"></span>
                        </div>
                        <p class="value">260</p>
                        <p class="title white">Maslahatchi</p>
                    </div>
                    <div class="counter">
                        <div class="icon">
                            <span class="fa fa-trophy"></span>
                        </div>
                        <p class="value">150</p>
                        <p class="title white">Mukofotlar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //stats section -->

<!-- homepage blog grids -->
<section id="blog">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                <h4 class="section-title">Kompaniya yangiliklari</h4>
                
            </div>
        </div>
        <div class="blog-grids row">
            @foreach($posts as $post)
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 blog-grid" id="zoomIn">
                <a href="{{route('batafsil', $post->id)}}">
                    <figure><img src="{{'/storage/'.$post->thumb }}" class="img-fluid" alt="{{$post->title}}"></figure>
                </a>
                <div class="blog-info">
                    <h3><a href="{{route('batafsil', $post->id)}}">{{$post->title}}</a> </h3>
                    <ul>
                        <li><span class="fa fa-user-o mr-2"></span>Admin</li>
                        <li><span class="fa fa-calendar mr-2"></span>{{$post->created_at->format('M:d, H:i')}}</li>
                    </ul>
                </div>
                
            </div>
            @endforeach
            
        </div>
        <nav class="blog-pagination justify-content-center d-flex">
            {{ $posts->links() }}
            </nav>
    </div>
</section>
<!-- //homepage blog grids -->

@endsection