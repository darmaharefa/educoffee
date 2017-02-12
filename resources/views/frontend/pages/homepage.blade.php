@extends('frontend.master')

@section('title','| Homepage')

@section('stylesheet')
    <link rel="stylesheet" href="/css/home.css">
@endsection

@section('content')
    
<div class="section-header">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="nav-logo">
                    <a href="#">
                        <img src="/images/logo.png" alt="EduCoffee">
                    </a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="nav-search">
                    <form action="" method="post">
                        <div id="search">
                            <div class="input-group">
                                <input type="text" class="form-control input-lg" placeholder="Pencarian" name="keyword" autocomplete="off">
                                <span class="input-group-btn">
                                    <button class="btn btn-lg btn-danger" type="submit">
                                    <i class="fa fa-search"></i>
                                    </button>
                                </span>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2">
                <div class="nav-login">
                    Hello. <a href="">Login</a></span>
                    <span class="nav-login-dropdown">
                        <li class="dropdown dropdown-profile">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">Your Account <i class="fa fa-caret-down"></i></a>
                            <div class="dropdown-menu">
                                <div class="dropdown-inner dropdown-inner-profile">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a tabindex="-1" href="/login">
                                                    <span class="fa fa-sign-in"></span>
                                                    Login
                                                </a>
                                            </li>
                                            <li>
                                                <a tabindex="-1" href="/register">
                                                   <span class="fa fa-user-o"></span>
                                                   Register
                                                </a>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </li>
                    </span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="nav-cart">
                    <a href="" class="cart-detail">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="cart-count">(0 items)</span>
                    </a>            
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-menu">
    <!-- Main Menu Starts -->
    <nav id="main-menu" class="navbar navbar-default" role="navigation">
        <!-- Nav Header Starts -->
        <div class="container-fluid container-menu">
            <div class="navbar-header">
                <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-cat-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- Nav Header Ends -->

            <!-- Navbar Cat collapse Starts -->
            <div class="collapse navbar-collapse navbar-cat-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">Kopi</a>
                        <div class="dropdown-menu ">
                            <div class="dropdown-inner">
                               <div class="submenu">
                                    <div class="row">
                                        <div class="col-sm-4 submenu-category">
                                            <div class="media-fa">
                                                <a href="">
                                                    <div class="media-fa-left">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="submenu-label">Kopi Luar</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 submenu-category">
                                             <div class="media-fa">
                                                <a href="">
                                                    <div class="media-fa-left">
                                                        <i class="fa fa-glass"></i>
                                                    </div>
                                                    <div class="submenu-label">Kopi Tengah</div>
                                                </a>
                                            </div>
                                        </div>
                                         <div class="col-sm-4 submenu-category">
                                            <div class="media-fa">
                                                <a href="">
                                                    <div class="media-fa-left">
                                                        <i class="fa fa-beer"></i>
                                                    </div>
                                                    <div class="submenu-label">Kopi Dalam</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 submenu-category">
                                            <div class="media-fa">
                                                <a href="">
                                                    <div class="media-fa-left">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="submenu-label">Kopi Luar</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 submenu-category">
                                             <div class="media-fa">
                                                <a href="">
                                                    <div class="media-fa-left">
                                                        <i class="fa fa-glass"></i>
                                                    </div>
                                                    <div class="submenu-label">Kopi Tengah</div>
                                                </a>
                                            </div>
                                        </div>
                                         <div class="col-sm-4 submenu-category">
                                            <div class="media-fa">
                                                <a href="">
                                                    <div class="media-fa-left">
                                                        <i class="fa fa-beer"></i>
                                                    </div>
                                                    <div class="submenu-label">Kopi Dalam</div>
                                                </a>
                                            </div>
                                        </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">Mesin Kopi</a>
                        <div class="dropdown-menu dropdown-submenu">
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    <li><a href="">Semua Mesin Kopi</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="">Panduan</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
            <!-- Navbar Cat collapse Ends -->
        </div>
    </nav>
    <!-- Main Menu Ends -->
</div>

<div class="section-slider">
    <a href="">
        <img src="/images/slider1.jpg" alt="">
    </a>
</div>

<div class="section-new-product">
    <div class="container">
        <h3 class="row-header">Produk terbaru</h3>
        {{-- Produk Kopi Terbaru --}}
        <div class="panel-product-2">
            <div class="panel-product-2-header">
               <div class="row">
                   <div class="col-md-6">
                      <div class="panel-header-title">
                           Kopi
                      </div>
                   </div>
                   <div class="col-md-6">
                       <div class="panel-header-link">
                           <a href="">Lihat semua</a>
                       </div>
                   </div>
               </div>
            </div>
            <div class="panel-product-2-body">
                <div class="row">
                    {{-- Baris Tanpa Discount --}}
                    <div class="col-md-3">
                         <div class="product-col">       
                            <div class="inner-product-col">
                                <a class="voucher-link" href="/coffee/sesuatu">
                                    <div class="image">
                                        <i class="fa fa-search overlayhover"></i>
                                        <img src="/images/coffee/example10.jpg" alt="product" class="lazy img-responsive product" />
                                    </div>
                                </a>
                                <div class="caption">
                                    <h4 class="voucher-title">Nias 200g Kopi Arabica</h4>
                                    <div class="voucher-caption">
                                        <div class="price">
                                            <span class="price-new">Rp 100.000</span>
                                        </div>  
                                    </div>
                                </div>
                                <div class="btn-beli">
                                    <button class="btn btn-lg">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Beli</span>
                                    </button>
                                </div>
                                <div class="clear" style="clear:both"></div>
                            </div>
                        </div>
                    </div>
                    {{-- Baris Tanpa Discount End --}}

                    {{-- Baris Dengan Discount --}}
                    <div class="col-md-3">
                         <div class="product-col">       
                            <div class="inner-product-col">
                                <a class="voucher-link" href="/coffee/sesuatu">
                                    <div class="image">
                                        <i class="fa fa-search overlayhover"></i>
                                        <img src="/images/coffee/example10.jpg" alt="product" class="lazy img-responsive product" />
                                        <span class="price-disc">50<sup>%</sup></span>
                                    </div>
                                </a>
                                <div class="caption">
                                    <h4 class="voucher-title">Nias 200g Kopi Arabica</h4>
                                    <div class="voucher-caption">
                                        <div class="price">
                                            <span class="price-old">Rp 2.000.000</span>
                                            <span class="price-new">Rp 1.000.000</span>
                                        </div>  
                                    </div>
                                </div>
                                <div class="btn-beli">
                                    <button class="btn btn-lg">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Beli</span>
                                    </button>
                                </div>
                                <div class="clear" style="clear:both"></div>
                            </div>
                        </div>
                    </div>
                    {{-- Baris Dengan Discount End --}}

                     {{-- Baris Tanpa Discount --}}
                    <div class="col-md-3">
                         <div class="product-col">       
                            <div class="inner-product-col">
                                <a class="voucher-link" href="/coffee/sesuatu">
                                    <div class="image">
                                        <i class="fa fa-search overlayhover"></i>
                                        <img src="/images/coffee/example10.jpg" alt="product" class="lazy img-responsive product" />
                                    </div>
                                </a>
                                <div class="caption">
                                    <h4 class="voucher-title">Nias 200g Kopi Arabica</h4>
                                    <div class="voucher-caption">
                                        <div class="price">
                                            <span class="price-new">Rp 100.000</span>
                                        </div>  
                                    </div>
                                </div>
                                <div class="btn-beli">
                                    <button class="btn btn-lg">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Beli</span>
                                    </button>
                                </div>
                                <div class="clear" style="clear:both"></div>
                            </div>
                        </div>
                    </div>
                    {{-- Baris Tanpa Discount End --}}

                    {{-- Baris Dengan Discount --}}
                    <div class="col-md-3">
                         <div class="product-col">       
                            <div class="inner-product-col">
                                <a class="voucher-link" href="/coffee/sesuatu">
                                    <div class="image">
                                        <i class="fa fa-search overlayhover"></i>
                                        <img src="/images/coffee/example10.jpg" alt="product" class="lazy img-responsive product" />
                                        <span class="price-disc">50<sup>%</sup></span>
                                    </div>
                                </a>
                                <div class="caption">
                                    <h4 class="voucher-title">Nias 200g Kopi Arabica</h4>
                                    <div class="voucher-caption">
                                        <div class="price">
                                            <span class="price-old">Rp 2.000.000</span>
                                            <span class="price-new">Rp 1.000.000</span>
                                        </div>  
                                    </div>
                                </div>
                                <div class="btn-beli">
                                    <button class="btn btn-lg">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Beli</span>
                                    </button>
                                </div>
                                <div class="clear" style="clear:both"></div>
                            </div>
                        </div>
                    </div>
                    {{-- Baris Dengan Discount End --}}

                </div>
            </div>            
        </div>
        {{-- Produk Kopi Terbaru End--}}

        {{-- Produk Mesin Kopi Terbaru --}}
        <div class="panel-product-2">
            <div class="panel-product-2-header">
               <div class="row">
                   <div class="col-md-6">
                      <div class="panel-header-title">
                           Mesin Kopi
                      </div>
                   </div>
                   <div class="col-md-6">
                       <div class="panel-header-link">
                           <a href="">Lihat semua</a>
                       </div>
                   </div>
               </div>
            </div>
            <div class="panel-product-2-body">
                <div class="row">
                    {{-- Baris Tanpa Discount --}}
                    <div class="col-md-3">
                         <div class="product-col">       
                            <div class="inner-product-col">
                                <a class="voucher-link" href="/coffee/sesuatu">
                                    <div class="image">
                                        <i class="fa fa-search overlayhover"></i>
                                        <img src="/images/coffee/example9.jpg" alt="product" class="lazy img-responsive product" />
                                    </div>
                                </a>
                                <div class="caption">
                                    <h4 class="voucher-title">Nias 200g Kopi Arabica</h4>
                                    <div class="voucher-caption">
                                        <div class="price">
                                            <span class="price-new">Rp 100.000</span>
                                        </div>  
                                    </div>
                                </div>
                                <div class="btn-beli">
                                    <button class="btn btn-lg">
                                        {{-- <i class="fa fa-shopping-cart"></i> --}}
                                        <span>Beli</span>
                                    </button>
                                </div>
                                <div class="clear" style="clear:both"></div>
                            </div>
                        </div>
                    </div>
                    {{-- Baris Tanpa Discount End --}}

                    {{-- Baris Dengan Discount --}}
                    <div class="col-md-3">
                         <div class="product-col">       
                            <div class="inner-product-col">
                                <a class="voucher-link" href="/coffee/sesuatu">
                                    <div class="image">
                                        <i class="fa fa-search overlayhover"></i>
                                        <img src="/images/coffee/example9.jpg" alt="product" class="lazy img-responsive product" />
                                        <span class="price-disc">50<sup>%</sup></span>
                                    </div>
                                </a>
                                <div class="caption">
                                    <h4 class="voucher-title">Nias 200g Kopi Arabica</h4>
                                    <div class="voucher-caption">
                                        <div class="price">
                                            <span class="price-old">Rp 2.000.000</span>
                                            <span class="price-new">Rp 1.000.000</span>
                                        </div>  
                                    </div>
                                </div>
                                <div class="btn-beli">
                                    <button class="btn btn-lg">
                                        {{-- <i class="fa fa-shopping-cart"></i> --}}
                                        <span>Beli</span>
                                    </button>
                                </div>
                                <div class="clear" style="clear:both"></div>
                            </div>
                        </div>
                    </div>
                    {{-- Baris Dengan Discount End --}}

                     {{-- Baris Tanpa Discount --}}
                    <div class="col-md-3">
                         <div class="product-col">       
                            <div class="inner-product-col">
                                <a class="voucher-link" href="/coffee/sesuatu">
                                    <div class="image">
                                        <i class="fa fa-search overlayhover"></i>
                                        <img src="/images/coffee/example9.jpg" alt="product" class="lazy img-responsive product" />
                                    </div>
                                </a>
                                <div class="caption">
                                    <h4 class="voucher-title">Nias 200g Kopi Arabica</h4>
                                    <div class="voucher-caption">
                                        <div class="price">
                                            <span class="price-new">Rp 100.000</span>
                                        </div>  
                                    </div>
                                </div>
                                <div class="btn-beli">
                                    <button class="btn btn-lg">
                                        {{-- <i class="fa fa-shopping-cart"></i> --}}
                                        <span>Beli</span>
                                    </button>
                                </div>
                                <div class="clear" style="clear:both"></div>
                            </div>
                        </div>
                    </div>
                    {{-- Baris Tanpa Discount End --}}

                     {{-- Baris Dengan Discount --}}
                    <div class="col-md-3">
                         <div class="product-col">       
                            <div class="inner-product-col">
                                <a class="voucher-link" href="/coffee/sesuatu">
                                    <div class="image">
                                        <i class="fa fa-search overlayhover"></i>
                                        <img src="/images/coffee/example9.jpg" alt="product" class="lazy img-responsive product" />
                                        <span class="price-disc">50<sup>%</sup></span>
                                    </div>
                                </a>
                                <div class="caption">
                                    <h4 class="voucher-title">Nias 200g Kopi Arabica</h4>
                                    <div class="voucher-caption">
                                        <div class="price">
                                            <span class="price-old">Rp 2.000.000</span>
                                            <span class="price-new">Rp 1.000.000</span>
                                        </div>  
                                    </div>
                                </div>
                                <div class="btn-beli">
                                    <button class="btn btn-lg">
                                        {{-- <i class="fa fa-shopping-cart"></i> --}}
                                        <span>Beli</span>
                                    </button>
                                </div>
                                <div class="clear" style="clear:both"></div>
                            </div>
                        </div>
                    </div>
                    {{-- Baris Dengan Discount End --}}



                </div>
            </div>            
        </div>
        {{-- Produk Mesin Kopi Terbaru End--}}
    </div>
</div>

<div class="section-promo">
    <div class="container">
        {{-- Promo --}}
        <div class="panel-product">
            <div class="panel-product-header">
                <div class="row">
                    <div class="col-md-12">
                        Promo
                    </div>
                </div>
            </div>
            <div class="panel-product-body">
                <div class="row">
                    {{-- Promo Kopi --}}
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-col hvr-grow-shadow">       
                                    <div class="inner-product-col">
                                        <a class="voucher-link" href="/coffee/sesuatu">
                                            <div class="image">
                                                <img src="/images/coffee/example1.jpg" alt="product" class="lazy img-responsive product" />
                                            </div>
                                        </a>
                                        <div class="caption">
                                            <h4 class="voucher-title">Nias 200g Kopi Arabica</h4>
                                            <div class="voucher-caption">
                                                <div class="price">
                                                    <span class="price-disc">50<sup>%</sup></span>
                                                    <span class="price-old">Rp 2.000.000</span>
                                                    <span class="price-new">Rp 1.000.000</span>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="clear" style="clear:both"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 no-padding">
                                <div class="row">
                                    {{-- Promo Bentuk Tab --}}
                                    <div class="col-md-12 no-padding">
                                       <div class="product-col-tab hvr-grow-shadow">
                                            <div class="row">
                                                <div class="inner-product-col-tab">
                                                   <a href="">
                                                        <div class="col-md-6 no-padding">
                                                            <div class="caption">
                                                                <span class="price-disc">50<sup>%</sup></span>
                                                                <span class="price-old">Rp 500.000</span>
                                                                <span class="price-new">Rp 250.000</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 no-padding">
                                                            <div class="image">
                                                                <img src="/images/coffee/example1.jpg" alt="product" class="lazy img-responsive product" />
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                    {{-- Promo Bentuk Tab End --}}

                                    {{-- Promo Bentuk Tab --}}
                                    <div class="col-md-12 no-padding">
                                       <div class="product-col-tab hvr-grow-shadow">
                                            <div class="row">
                                                <div class="inner-product-col-tab">
                                                   <a href="">
                                                        <div class="col-md-6 no-padding">
                                                            <div class="caption">
                                                                <span class="price-disc">50<sup>%</sup></span>
                                                                <span class="price-old">Rp 500.000</span>
                                                                <span class="price-new">Rp 250.000</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 no-padding">
                                                            <div class="image">
                                                                <img src="/images/coffee/example1.jpg" alt="product" class="lazy img-responsive product" />
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                    {{-- Promo Bentuk Tab End --}}

                                    {{-- Promo Bentuk Tab --}}
                                    <div class="col-md-12 no-padding">
                                       <div class="product-col-tab hvr-grow-shadow">
                                            <div class="row">
                                                <div class="inner-product-col-tab">
                                                   <a href="">
                                                        <div class="col-md-6 no-padding">
                                                            <div class="caption">
                                                                <span class="price-disc">50<sup>%</sup></span>
                                                                <span class="price-old">Rp 500.000</span>
                                                                <span class="price-new">Rp 250.000</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 no-padding">
                                                            <div class="image">
                                                                <img src="/images/coffee/example1.jpg" alt="product" class="lazy img-responsive product" />
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                    {{-- Promo Bentuk Tab End --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Promo Kopi End --}}
                    

                    {{-- Promo Mesin Kopi --}}
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-col hvr-grow-shadow">       
                                    <div class="inner-product-col">
                                        <a class="voucher-link" href="/coffee/sesuatu">
                                            <div class="image">
                                                <img src="/images/coffee/example9.jpg" alt="product" class="lazy img-responsive product" />
                                            </div>
                                        </a>
                                        <div class="caption">
                                            <h4 class="voucher-title">Nias 200g Kopi Arabica</h4>
                                            <div class="voucher-caption">
                                                <div class="price">
                                                    <span class="price-disc">50<sup>%</sup></span>
                                                    <span class="price-old">Rp 2.000.000</span>
                                                    <span class="price-new">Rp 1.000.000</span>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="clear" style="clear:both"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 no-padding">
                                <div class="row">
                                    {{-- Promo Bentuk Tab --}}
                                    <div class="col-md-12 no-padding">
                                       <div class="product-col-tab hvr-grow-shadow">
                                            <div class="row">
                                                <div class="inner-product-col-tab">
                                                   <a href="">
                                                        <div class="col-md-6 no-padding">
                                                            <div class="caption">
                                                                <span class="price-disc">50<sup>%</sup></span>
                                                                <span class="price-old">Rp 500.000</span>
                                                                <span class="price-new">Rp 250.000</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 no-padding">
                                                            <div class="image">
                                                                <img src="/images/coffee/example9.jpg" alt="product" class="lazy img-responsive product" />
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                    {{-- Promo Bentuk Tab End --}}

                                    {{-- Promo Bentuk Tab --}}
                                    <div class="col-md-12 no-padding">
                                       <div class="product-col-tab hvr-grow-shadow">
                                            <div class="row">
                                                <div class="inner-product-col-tab">
                                                   <a href="">
                                                        <div class="col-md-6 no-padding">
                                                            <div class="caption">
                                                                <span class="price-disc">50<sup>%</sup></span>
                                                                <span class="price-old">Rp 500.000</span>
                                                                <span class="price-new">Rp 250.000</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 no-padding">
                                                            <div class="image">
                                                                <img src="/images/coffee/example9.jpg" alt="product" class="lazy img-responsive product" />
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                    {{-- Promo Bentuk Tab End --}}

                                    {{-- Promo Bentuk Tab --}}
                                    <div class="col-md-12 no-padding">
                                       <div class="product-col-tab hvr-grow-shadow">
                                            <div class="row">
                                                <div class="inner-product-col-tab">
                                                   <a href="">
                                                        <div class="col-md-6 no-padding">
                                                            <div class="caption">
                                                                <span class="price-disc">50<sup>%</sup></span>
                                                                <span class="price-old">Rp 500.000</span>
                                                                <span class="price-new">Rp 250.000</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 no-padding">
                                                            <div class="image">
                                                                <img src="/images/coffee/example9.jpg" alt="product" class="lazy img-responsive product" />
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                    {{-- Promo Bentuk Tab End --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Promo Mesin Kopi End --}}
                </div>
            </div>
        </div>
        {{-- Promo End--}}


    </div>
</div>

<div class="section-footer">
    <div class="social-media-footer">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
               <div class="social-icon">
                    <ul>
                        <li>
                            <a href="">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
               </div>
            </div>
        </div>
    </div>

    <div class="menu-footer">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="menu-footer-list">
                    <ul>
                        <li>
                            <a href="">Resep</a>
                        </li>
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li>
                            <a href="">About</a>
                        </li>
                        <li>
                            <a href="">Terms</a>
                        </li>
                        <li>
                            <a href="">Contact Us</a>
                        </li>
                        <li>
                            <a href="">Careers</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="newsletter-footer">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="newsletter-input">
                    <span class="newsletter-heading">Subscribe to our newsletter</span> <br>
                    <span class="newsletter-text">
                        Berlangganan dengan newsletter kami untuk mendapatkan promo terbaru.
                    </span>
                    <input type="email" name="" id="input" class="form-control" value="" required="required" title="" placeholder="Email">
                </div>
                <div class="newsletter-buttom">
                    <button type="submit" class="btn btn-primary">Berlangganan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-footer">
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="copyright-brand">
                    EduCoffee
                </div>
            </div>
            <div class="col-md-5">
                <div class="copyright-text">
                    &copy; EduCoffee
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
