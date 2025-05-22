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
             <div class="row w-100 ">
                 <div class="col-lg-3 col-sm-6  d-flex  align-lg-items-center justify-lg-content-center">
                     <div>
                         <div class="pb-3 text-start">
                             <img src="{{ $setting['site_main_logo'] ? asset(get_media($setting['site_main_logo'])->fullurl) : '' }}"
                                 alt="{{ $setting['site_main_logo'] ? get_media($setting['site_main_logo'])->alt : 'Goreto' }}">
                         </div>

                         <div class="site-descrption  fotter-css py-2">
                             Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, exercitationem!
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-6 mb-3 mt-lg-0 mt-3">
                     <h5 class="fotter-headings">Useful links</h5>
                     <ul class="nav flex-column fotter-text fotter-css">
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0 " href="">
                                 About us
                             </a>
                         </li>
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="">
                                 Our Team
                             </a>
                         </li>

                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="">
                                 Prjects
                             </a>
                         </li>

                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="">
                                 Blogs
                             </a>
                         </li>
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="">
                                 Gallery
                             </a>
                         </li>
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0 " href="">
                                 Contact Us
                             </a>
                         </li>
                     </ul>
                 </div>
                 <div class="col-lg-3 col-6 mb-3 mt-lg-0 mt-3">
                     <h5 class="fotter-headings ">Our Services</h5>
                     <ul class="nav flex-column fotter-text fotter-css">
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="">Prescription Dispensing

                             </a>
                         </li>
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="">Patient Counseling</a>
                         </li>
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="">Immunizations/Vaccinations</a>
                         </li>
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="">Medication Therapy Management
                             </a>
                         </li>
                     </ul>
                 </div>
                 <div class="col-lg-3 col-12 mb-3 mt-lg-0 mt-3">
                     <h5 class="fotter-headings">Information</h5>
                     <ul class="nav flex-column fotter-text fotter-css">
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="">Sitemap
                             </a>
                         </li>
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="">Terms & Conditions</a>
                         </li>
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="">Privacy & return</a>
                         </li>
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="">Royal Grandeur Package</a>
                         </li>
                         <li class="nav-item mb-2">
                             <a class="nav-link p-0" href="">Contact</a>
                         </li>

                     </ul>
                 </div>
             </div>
         </div>
         <div class=" d-flex align-items-center justify-content-around  my-2 p-2 border-top text-center">
             <p class="fotter-text mt-3">
                 '© 2025 Company, Inc. All rights reserved'
             </p>
             <div class="  ">
                 <div class="d-flex gap-4 align-items-start justify-content-start footer-social">
                     <a href="" target="_blank"><i class="ri-facebook-line social-icon">
                         </i></a>
                     <a href="" target="_blank"><i class="ri-instagram-line social-icon">
                         </i></a>
                     <a href="" target="_blank"><i class="ri-whatsapp-line social-icon">
                         </i></a>
                 </div>
             </div>
         </div>
     </div>
 </footer>
