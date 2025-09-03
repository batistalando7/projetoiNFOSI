 <!--  Menu panel -->
 <div id="uc-menu-panel" data-uc-offcanvas="overlay: true;">
     <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
         <header class="uc-offcanvas-header hstack justify-between items-center pb-4 bg-white dark:bg-gray-900">
             <div class="uc-logo">
                 <a href="/" class="h5 text-none text-gray-900 dark:text-white">
                     <img class="w-32px" src="{{ url('site/assets/images/common/logo-icon.svg') }}" alt="News5"
                         data-uc-svg>
                 </a>
             </div>
             <button
                 class="uc-offcanvas-close p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
                 type="button">
                 <i class="unicon-close"></i>
             </button>
         </header>

         <div class="panel">
             <form id="search-panel" class="form-icon-group vstack gap-1 mb-3" data-uc-sticky="">
                 <input type="email" class="form-control form-control-md fs-6" placeholder="Search..">
                 <span class="form-icon text-gray">
                     <i class="unicon-search icon-1"></i>
                 </span>
             </form>
             <ul class="nav-y gap-narrow fw-bold fs-5" data-uc-nav>
                 <li class="uc-parent">
                     <a href="#">Páginas</a>
                     <ul class="uc-nav-sub" data-uc-nav="">
                         <li><a href="/">Inicio</a></li>
                         <li><a href="#">Política</a></li>
                         <li><a href="#">Economia</a></li>
                         <li class="uc-parent">
                             <a href="#">Sociedade</a>
                             <ul class="uc-nav-sub" data-uc-nav="">
                                 <li><a href="#">Educação</a></li>
                                 <li><a href="#">Saúde</a></li>
                                 <li><a href="#">Direitos Humanos</a></li>
                                 <li><a href="#">Cultura</a></li>
                                 <li><a href="#">Desporto</a></li>
                             </ul>
                         </li>
                         <li class="uc-parent">
                             <a href="#">Multimédia</a>
                             <ul class="uc-nav-sub" data-uc-nav="">
                                 <li><a href="#">Videos</a></li>
                                 <li><a href="#">Podcast</a></li>
                                 <li><a href="#">Galeria de Fotografias</a></li>
                             </ul>
                         </li>
                         <li class="uc-parent">
                             <a href="#">Internacional</a>
                             <ul class="uc-nav-sub" data-uc-nav="">
                                 <li><a href="#">África</a></li>
                                 <li><a href="#">PALOP</a></li>
                                 <li><a href="#">Mundo</a></li>
                             </ul>
                         </li>
                     </ul>
                 </li>
                 <li><a href="#">Recentes</a></li>
                 {{-- <li><a href="#">Trending</a></li> --}}
                 {{-- <li class="uc-parent">
                     <a href="#">Inner Pages</a>
                     <ul class="uc-nav-sub" data-uc-nav="">
                         <li class="uc-parent">
                             <a href="#">Blog</a>
                             <ul class="uc-nav-sub">
                                 <li><a href="#">Full Width</a></li>
                                 <li><a href="blog-2cols.html">Grid 2 Cols</a></li>
                                 <li><a href="blog-3cols.html">Grid 3 Cols</a></li>
                                 <li><a href="blog-4cols.html">Grid 4 Cols</a></li>
                             </ul>
                         </li>
                         <li class="uc-parent">
                             <a href="blog-details.html">Blog - detail</a>
                             <ul class="uc-nav-sub">
                                 <li><a href="blog-details.html">Blog detail</a></li>
                                 <li><a href="blog-details-2.html">Blog detail - v2</a></li>
                             </ul>
                         </li>
                         <li class="uc-parent">
                             <a href="#">Useful pages</a>
                             <ul class="uc-nav-sub">
                                 <li><a href="sign-up.html">Sign up</a></li>
                                 <li><a href="sign-in.html">Sign in</a></li>
                                 <li><a href="reset-password.html">Reset password</a></li>
                                 <li><a href="404.html">404 page</a></li>
                                 <li><a href="coming-soon.html">Coming soon</a></li>
                             </ul>
                         </li>
                         <li class="uc-parent">
                             <a href="#">Other pages</a>
                             <ul class="uc-nav-sub">
                                 <li><a href="page-faq.html">FAQ</a></li>
                                 <li><a href="page-terms.html">Terms of use</a></li>
                                 <li><a href="page-privacy.html">Privacy policy</a></li>
                             </ul>
                         </li>
                     </ul>
                 </li> --}}
                 {{--  <li class="uc-parent">
                     <a href="shop.html">Shop</a>
                     <ul class="uc-nav-sub" data-uc-nav="">
                         <li class="uc-parent">
                             <a href="shop.html">Shop layouts</a>
                             <ul class="uc-nav-sub">
                                 <li><a href="shop.html">Shop 4 cols</a></li>
                                 <li><a href="shop-3.html">Shop 3 cols</a></li>
                                 <li><a href="shop-2.html">Shop 2 cols</a></li>
                                 <li><a href="shop-sidebar.html">Shop with sidebar</a></li>
                             </ul>
                         </li>
                         <li><a href="shop-category.html">Archive category</a></li>
                         <li><a href="shop-product-detail.html">Product detail</a></li>
                         <li><a href="shop-product-detail-2.html">Product detail - v2</a></li>
                         <li><a href="shop-cart.html">Cart</a></li>
                         <li><a href="shop-cart-2.html">Cart - v2</a></li>
                         <li><a href="shop-checkout.html">Checkout</a></li>
                         <li><a href="shop-checkout-2.html">Checkout - v2</a></li>
                         <li><a href="shop-order.html">Order confirmation</a></li>
                     </ul>
                 </li>
                  --}}

                 <li class="hr opacity-10 my-1"></li>
                 <li><a href="sign-in.html">Entrar</a></li>
                 <li><a href="sign-up.html">Criar Conta</a></li>
             </ul>
             <ul class="social-icons nav-x mt-4">
                 <li>
                     <a href="#"><i class="unicon-logo-medium icon-2"></i></a>
                     <a href="#"><i class="unicon-logo-x-filled icon-2"></i></a>
                     <a href="#"><i class="unicon-logo-instagram icon-2"></i></a>
                     <a href="#"><i class="unicon-logo-pinterest icon-2"></i></a>
                 </li>
             </ul>
             <div class="py-2 hstack gap-2 mt-4 bg-white dark:bg-gray-900" data-uc-sticky="position: bottom">
                 <div class="vstack gap-1">
                     <span class="fs-7 opacity-60">Select theme:</span>
                     <div class="darkmode-trigger" data-darkmode-switch="">
                         <label class="switch">
                             <input type="checkbox">
                             <span class="slider fs-5"></span>
                         </label>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
