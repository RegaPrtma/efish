     
     <div class="our_fishs">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage text_align_center">
                    <h2>Our Fishs</h2>
                    <p>majority have suffered alteration in some form, by injected humour, or randomised words  
                    </p>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-md-12">
                 <!--  Demos -->
                  <div class="owl-carousel owl-theme">
                    <div class="item">
                     @foreach ( $produk as $produks )
                       <div class="our_fishs_box text_align_center">
                          <div class="ser_img">
                             <figure><img src="produks/{{ $produks->gambar }}" alt="#"/></figure>
                          </div>
                          <h3>{{ $produks->title }}</h3>
                          <strong>Rp.<span>{{ $produks->harga }}</span> 
                          </strong>
                          <a class="read_more" href="Javascript:void(0)">Buy Now</a>
                          <div style="padding: 10px">
                          <a class="btn btn-primary" href="{{ url('add_keranjang',$produks->id) }}">Tambahkan Keranjang</a>
                          </div>
                          <div style="padding: 10px">
                           <a class="btn btn-danger" href="{{ url('produk_detail',$produks->id) }}">Detail</a>
                          </div>
                       </div>
                       @endforeach
                    </div>
                    
                </div>
                
            </div>
        </div>
                    <!-- <div class="item">
                       <div class="our_fishs_box text_align_center">
                          <div class="ser_img">
                             <figure><img src="images/our_fish2.jpg" alt="#"/></figure>
                          </div>
                          <h3>fighting-fish</h3>
                          <strong>$<span>300</span> 
                          </strong>
                          <a class="read_more" href="Javascript:void(0)">Buy Now</a>
                       </div>
                    </div>
                    <div class="item">
                       <div class="our_fishs_box text_align_center">
                          <div class="ser_img">
                             <figure><img src="images/our_fish3.jpg" alt="#"/></figure>
                          </div>
                          <h3>Isolated</h3>
                          <strong>$<span>400</span> 
                          </strong>
                          <a class="read_more" href="Javascript:void(0)">Buy Now</a>
                       </div>
                    </div>
                    <div class="item">
                       <div class="our_fishs_box text_align_center">
                          <div class="ser_img">
                             <figure><img src="images/our_fish4.jpg" alt="#"/></figure>
                          </div>
                          <h3>tropical-fish</h3>
                          <strong>$<span>500</span> 
                          </strong>
                          <a class="read_more" href="Javascript:void(0)">Buy Now</a>
                       </div>
                    </div>
                 </div>
              </div>
           </div> -->
           

     <!-- end our_fishs -->