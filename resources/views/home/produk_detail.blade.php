<!DOCTYPE html>
<html lang="en">
   <head>

    @include('home.css')
   
    </head>
   <!-- body -->
   <body class="main-layout">
    @include('home.header')

         <!-- detail produk -->
    <div class="our_fishs">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage text_align_center">
                    <h2>Detail Ikan</h2>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-md-12">
                 <!--  Demos -->
                  <div class="owl-carousel owl-theme">
                    <div class="item">
                     
                       <div class="our_fishs_box text_align_center">
                          <div class="ser_img">
                             <figure><img src="/produks/{{ $data->gambar }}" alt="#"/></figure>
                          </div>
                          <h3>{{ $data->title }}</h3>
                          <strong>Rp.<span>{{ $data->harga }}</span> 
                          </strong>
                          
                       </div>
                       
                    </div>
                    
                </div>
                
            </div>
        </div>
    
      <!--  footer -->
    @include('home.footer')
   </body>
</html>