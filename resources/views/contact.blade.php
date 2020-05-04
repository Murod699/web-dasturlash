@extends('layouts.app', ['title'=>"Contact"])

@section('content')
<!-- contact page breadcrumns -->
<section class="inner-banner">

</section>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-padding">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Bosh sahifa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Aloqa</li>
    </ol>
</nav>
<!-- contact page breadcrumns -->

<!-- contact section -->
<section class="w3l-contact3">
    <div class="contact1-bg section-gap">
        <div class="container">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12 px-lg-3 px-0">
                <h4 class="section-title">Biz Bilan Bog'laning </h4>
                
            </div>
            <div class="row contact-main mt-5">
                <div class="col-md-6 ">
                    <div class="column">
                        <h3 class="header">Biz Siz Uchun Bu Yerdamiz</h3>
                        <p class="head-main">Mahsulotlarimiz, loyihalarimiz va narxlar haqida ko'proq ma'lumot olish uchun yoki iltimos, biz bilan bog'laning..</p>
                    </div>
                    <div class="column2">
                        <div class="contact-para contact-info-align">
                            <div class="icon">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div>
                                <strong class="info">Manzil:</strong class="info">Al-Xorazmiy ko`chasi, 110, Urganch, O`zbekiston
                            </div>
                        </div>
                        <div class="contact-info-align">
                            <div class="icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div>
                                <strong class="info">Phone:</strong class="info">
                                 <a href="tel:+404 11-22-88"> +99890 433-36-99</a> ,
                                <a href="tel:+99890 433-36-99">+99890 433-36-99 </a>
                            </div>
                        </div>
                        <div class="contact-info-align">
                            <div class="icon">
                                <span class="fa fa-envelope-open-o"> </span>
                            </div>
                            <div>
                                <strong class="info">Email:</strong> <a href="mailto:murodbek.0338@gmail.com">
                                murodbek.0338@gmail.com </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- map iframe-->
                <div class="col-md-6 map mt-lg-0 mt-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
                        frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <!-- //map iframe -->
            </div>
        </div>
    </div>
</section>

<section class="contact-form">
    <div class="container">
        <div class="contacts12-main">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12 mb-md-5 mb-3">
                <h4 class="section-title">Biz bilan aloqa!</h4>
            </div>
            <!-- contact form -->
            @include('admin.alerts.main')
            <form action="{{route('contact.store')}}" method="post">
            @csrf
                <div class="main-input">
                    <div>
                        <input type="text" value="{{old('name')}}" name="name" id="w3lName" placeholder="Isminggiz..." class="contact-input"
                            required />
                    </div>
                    <div>
                        <input type="email" value="{{old('email')}}" name="email" id="w3lSender" placeholder="E-mail pochtanggizni kiriting..."
                            class="contact-input" required />
                    </div>
                    <div>
                        <input type="text" value="{{old('subject')}}" name="subject" id="w3lSubject" placeholder="Mavzuni kiriting..." class="contact-input"
                            required />
                    </div>
                </div>
                <textarea class="contact-textarea" name="message" id="w3lMessage"
                    placeholder="Xabaringgizni kiriting..." required>{{old('message')}}</textarea>
                <div class="text-right">
                    <button class="btn btn-style btn-primary">Yuborish</button>
                </div>
            </form>
            <!-- //contact form -->
        </div>
    </div>
</section>
<!-- //contact section -->
@endsection