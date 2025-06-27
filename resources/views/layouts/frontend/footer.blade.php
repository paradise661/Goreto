 <footer class="footer-class py-2">
     <div class="fotter-top-container bg-primary p-3">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-3">
                     <div class="fotter-items d-flex justify-center align-items-center gap-3">
                         <img src="{{ asset('frontend/assets/images/payements.png') }}" alt="">
                         <div class="text-white">
                             <h5>Payment Options</h5>
                             <p>Safe and secure payments</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="fotter-items d-flex justify-center align-items-center gap-3">
                         <img src="{{ asset('frontend/assets/images/award.png') }}" alt="">
                         <div class="text-white">
                             <h5>Genuine Products</h5>
                             <p>Safe and secure payments</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="fotter-items d-flex justify-center align-items-center gap-3">
                         <img src="{{ asset('frontend/assets/images/payements.png') }}" alt="">
                         <div class="text-white">
                             <h5>1500 Brands</h5>
                             <p>Safe and secure payments</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="fotter-items d-flex justify-center align-items-center gap-3">
                         <img src="{{ asset('frontend/assets/images/award.png') }}" alt="">
                         <div class="text-white">
                             <h5>Payment Options</h5>
                             <p>Safe and secure payments</p>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
     <div class="fotter-section-background">
         <div class="container-fluid py-5">
             <div class="row w-100">
                 <div class="col-lg-3 col-sm-6 d-flex align-lg-items-center justify-lg-content-center">
                     <div>
                         <div class="pb-3 text-start">
                             <img class="mx-auto d-block d-lg-inline"
                                 src="{{ $setting['site_main_logo'] ? asset(get_media($setting['site_main_logo'])->fullurl) : '' }}"
                                 alt="{{ $setting['site_main_logo'] ? get_media($setting['site_main_logo'])->alt : 'Goreto' }}"
                                 style="height: 80px; width: auto;">
                         </div>

                         <div class="site-descrption fotter-css py-2">
                             {!! $setting['site_information'] ?? '' !!}
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-3 col-6 mb-3 mt-lg-0 mt-3">
                     <h5 class="fotter-headings">Useful links</h5>
                     <ul class="nav flex-column fotter-text fotter-css">
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="/about-us">About us</a>
                         </li>
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="/contact">Contact Us</a>
                         </li>
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="/privacy-policy">Privacy Policy</a>
                         </li>
                     </ul>
                 </div>

                 <div class="col-lg-3 col-6 mb-3 mt-lg-0 mt-3">
                     <h5 class="fotter-headings">Get to Know Us</h5>
                     <ul class="nav flex-column fotter-text fotter-css">
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="">Terms & Conditions</a>
                         </li>
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="/privacy-policy">Policies</a>
                         </li>

                     </ul>
                 </div>

                 {{-- Replaced Information section with Social Icons --}}
                 <div class="col-lg-3 col-12 mb-3 mt-lg-0 mt-3">
                     <h5 class="fotter-headings">Connect With Us</h5>
                     @if ($socialdata->isNotEmpty())
                         <div class="d-flex gap-3 align-items-center justify-content-start footer-social pt-2">
                             @foreach ($socialdata as $data)
                                 <a class="text-success fs-5" href="{{ $data->link ?? '#' }}" target="_blank">
                                     <i class="{{ $data->icon ?? '' }} social-icon"></i>
                                 </a>
                             @endforeach
                         </div>
                     @endif
                 </div>
             </div>
         </div>

         <div class=" d-flex align-items-center justify-content-around  my-2 p-2 border-top text-center">
             <p class="fotter-text mt-3">
                 © 2025 Goreto. All rights reserved |
                 Made with ❤️ by
                 <a class="text-decoration-none fw-semibold" href="https://paradiseit.com.np" target="_blank"
                     style="color: #00AEEF;">
                     Paradise InfoTech
                 </a>.
             </p>
             {{-- <div class="  ">
                 @if ($socialdata->isNotEmpty())
                     <div class="d-flex gap-4 align-items-start justify-content-start footer-social">
                         @foreach ($socialdata as $data)
                             <a class="text-dark" href="{{ $data->link ?? '#' }}" target="_blank">
                                 <i class="{{ $data->icon ?? '' }} social-icon"></i>
                             </a>
                         @endforeach
                     </div>
                 @endif

             </div> --}}
         </div>
     </div>
 </footer>
