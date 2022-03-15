      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('style/images/loading.gif')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div  class="head_top">
            <div class="header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="/beranda"><img src="{{ asset('style/images/logo.png')}}" alt="logo beauty care" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item">
                                    <a class="nav-link" href="/beranda"> Beranda  </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="/produk"> Produk  </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="/klien"> Klien  </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="/supplier"> Supplier  </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="/tim"> Tim  </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="/tentang">Tentang</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="/hubungi">Hubungi</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->

         @yield('banner')
         </div>
      </header>
      