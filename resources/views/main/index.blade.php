@extends('header')

@section('container')
<!-- Main Features -->
 <section class="section-main-features">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 bagian-kiri">
                 <img src="/images/main-features1.png" 
                     alt=""
                     class="main-photo-1"
                 >
                 <h1>Search Cat's New Home</h1>
                 <p>Membantu untuk para kucing untuk dapat 
                    <br/>
                    diadopsi untuk segera mendapatkan rumah baru
                    <br/>
                     bagi mereka tinggal
                 </p>
                 <a href="/dashboard/create">
                    <button class='learn-more'>Learn More</button>
                 </a>
             </div>
             <div class="col-lg-6 bagian-kanan">
                 <h1>Find My Cat Friend</h1>
                 <p>Membantu untuk para kucing untuk dapat 
                    <br/>
                    diadopsi untuk segera mendapatkan rumah baru
                    <br/>
                     bagi mereka tinggal
                 </p>
                 <a href="/find">
                    <button class='learn-more'>Learn More</button>
                 </a>
                 <img src="/images/main-features2.png" 
                     alt=""
                     class="main-photo-2"    
                 >
             </div>
         </div>
     </div>
 </section>

 <!-- Heading Testimonial -->
 <section class="section-testimonial-heading" id="testimonialHeading">
     <div class="container">
         <div class="row">
             <div class="col text-center">
                 <h2>
                     Apa Kata Mereka?
                 </h2>
                 <p>
                     Website favorit bagi pecinta kucing
                 </p>
             </div>
         </div>
     </div>
 </section>

 <!-- Content Testimonial -->
 <section class="section section-testimonial-content" id="testimonialContent">
     <div class="container">
         <div class="section-popular-travel row justify-content-center">
             <div class="col-sm-6 col-md-6 col-lg-4">
                 <div class="card card-testimonial text-center">
                     <div class="testimonial-content">
                         <img src="/images/testi.png" alt="Testi" class="mb-4 rounded-circle">
                         <h3 class="mb-4">M. Firman Fardiansyah</h3>
                         <p class="testimonial">
                             " Pengalaman saat memakai website ini
                             sangat memuaskan, dengan satu jari
                             kamu bisa mendapatkan kucing favoritmu! "
                         </p>
                     </div>
                     <hr>
                     <p class="trip-to mt-2">
                         Kucing Oyen
                     </p>
                 </div>
             </div>
             <div class="col-sm-6 col-md-6 col-lg-4">
                 <div class="card card-testimonial text-center">
                     <div class="testimonial-content">
                         <img src="" alt="Testi" class="mb-4 rounded-circle">
                         <h3 class="mb-4">Fayyadh Hafizh</h3>
                         <p class="testimonial">
                             " Mencari kucing jadi mudah dan jika
                             menemukan kucing bisa diopen adopt disini
                             sangat bermanfaat, terima kasih! "
                         </p>
                     </div>
                     <hr>
                     <p class="trip-to mt-2">
                         Kucing Arabian
                     </p>
                 </div>
             </div>
             <div class="col-sm-6 col-md-6 col-lg-4">
                 <div class="card card-testimonial text-center">
                     <div class="testimonial-content">
                         <img src="/images/testi2.png" alt="Testi" class="mb-4 rounded-circle">
                         <h3 class="mb-4">Michael Ariel M.</h3>
                         <p class="testimonial">
                             " Saya dapat kucing yang lucu disini
                             dan satu hal yang penting adalah tanpa adanya
                             biaya sedikitpun yang dikeluarkan <3 "
                         </p>
                     </div>
                     <hr>
                     <p class="trip-to mt-2">
                         Kucing Russia
                     </p>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-12 text-center">
                 <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                     I Need Help
                 </a>
                 @guest    
                 <a href="/login" class="btn btn-lets-journey px-4 mt-4 mx-1">
                     Let's Journey!
                 </a>
                 @endguest
             </div>
         </div>
     </div>
 </section>
</main>


<script src="frontend/library/jquery/jquery-3.4.1.min.js"></script>
<script src="frontend/library/bootstrap/js/bootstrap.js"></script>
@endsection
       