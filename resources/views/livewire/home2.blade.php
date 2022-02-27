<div class="container">

   {{-- BANNER --}}
   <div class="banner">
      <img src="{{ url('assets/slider/slider1.png') }}" alt="">
   </div>

   {{-- PILIH LIGA  --}}
   <section class="pilih-liga mt-4">
      <h3><strong>Program Study</strong></h3>
      <div class="row mt-4">
         @foreach($ligas as $liga)
         <div class="col">
            <a href="{{ route('products.liga', $liga->id) }}">
               <div class="card shadow">
                  <div class="card-body text-center">
                     <img src="{{ url('assets/liga') }}/{{ $liga->gambar }}" class="img-fluid">
                  </div>
               </div>
            </a>
         </div>
         @endforeach
      </div>
   </section>

   {{-- BEST PRODUCT --}} 
   <section class="products mt-5 mb-5">
      <h3>
         <strong>Best Products</strong>
         <a href="{{ route('products') }}" class="btn btn-dark float-right"><i class="fas fa-eye"></i> Lihat Semua </a>
      </h3> 
      <div class="row mt-4">
         @foreach($products as $product)
         <div class="col-md-3">
            <div class="card">
               <div class="card-body text-center">
                  <img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" class="img-fluid">
                  <div class="row mt-2">
                     <div class="col-md-12">
                        <h5><strong>{{ $product->nama }}</strong> </h5>
                        <h5>Rp. {{ number_format($product->harga) }}</h5>
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col-md-12">
                        <a href="{{ route('products.detail', $product->id) }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Detail</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </section>

   {{-- Category  --}}
   <section class="pilih-liga mt-4">
      <h3><strong>Category</strong></h3>
      <div class="row mt-4">
         @foreach($shopcats as $shopcat)
         <div class="col">
            <a href="{{ route('shopping2', $shopcat->id) }}">
               <div class="card shadow">
                  <div class="card-body text-center">
                     <img src="{{ asset('images/imgshopcat') }}/{{ $shopcat->image }}" class="img-fluid">
                  </div>
               </div>
            </a>
         </div>
         @endforeach
      </div>
   </section>

   {{-- Category  --}}
   <section class="pilih-liga mt-4">
      <h3><strong>SubCategory</strong></h3>
      <div class="row mt-4">
         @foreach($shopsubs as $shopsub)
         <div class="col">
            <a href="{{ route('shopping3', $shopsub->id) }}">
               <div class="card shadow">
                  <div class="card-body text-center">
                     <img src="{{ asset('images/imgshopsub') }}/{{ $shopsub->image }}" class="img-fluid">
                  </div>
               </div>
            </a>
         </div>
         @endforeach
      </div>
   </section>

   {{-- BEST PRODUCT --}} 
   <section class="products mt-5 mb-5">
      <h3>
         <strong>Best shopproducts</strong>
         <a href="{{ route('shopping1') }}" class="btn btn-dark float-right"><i class="fas fa-eye"></i> Lihat Semua </a>
      </h3> 
      <div class="row mt-4">
         @foreach($shopproducts as $shopproduct)
         <div class="col-md-3">
            <div class="card">
               <div class="card-body text-center">
                  <img src="{{ asset('images/imgshopproduct') }}/{{ $shopproduct->image }}" class="img-fluid">
                  <div class="row mt-2">
                     <div class="col-md-12">
                        <h5><strong>{{ $shopproduct->name }}</strong> </h5>
                        <h5>Rp. {{ number_format($shopproduct->price) }}</h5>
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col-md-12">
                        <a href="{{ route('shopping4', $shopproduct->id) }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Detail</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </section>

</div>