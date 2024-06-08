@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="assets/images/favicon.ico">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <meta name="theme-color" content="#e87316">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Surfside Media">
    <meta name="msapplication-TileImage" content="assets/images/favicon.ico">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Surfside Media">
    <meta name="keywords" content="Surfside Media">
    <meta name="author" content="Surfside Media">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    

    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <link rel="stylesheet" href="assets/css/vendors/ion.rangeSlider.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick-theme.css">
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo4.css">
    <style>
        .h-logo {
            max-width: 185px !important;
        }

        .f-logo {
            max-width: 220px !important;
        }

        @media only screen and (max-width: 600px) {
            .h-logo {
                max-width: 110px !important;
            }
        }
    </style>
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo2.css">
    <style>
        .short-name .label-tag .btn-close {
            padding-top: 12px;
        }
    </style>


</head>

<body class="theme-color4 light ltr">
   

    <section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

        
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        

                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are logged in!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Universities</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.htm">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">All Universities</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 category-side col-md-4">
                    
                </div>

                <div class="category-product col-lg-9 col-12 ratio_30">

                    <div class="row g-4">
                        <!-- label and featured section -->
                        <div class="col-md-12">
                            <ul class="short-name">


                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="filter-options">
                                <div class="select-options">
                                    <div class="page-view-filter">
                                        <div class="dropdown select-featured">
                                            <select class="form-select" name="orderby" id="orderby">
                                                <option value="-1" selected="">Default</option>
                                                <option value="1">Date, New To Old</option>
                                                <option value="2">Date, Old To New</option>
                                                <option value="3">Price, Low To High</option>
                                                <option value="4">Price, High To Low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="dropdown select-featured">
                                        <select class="form-select" name="size" id="pagesize">
                                            <option value="12" selected="">12 Products Per Page</option>
                                            <option value="24">24 Products Per Page</option>
                                            <option value="52">52 Products Per Page</option>
                                            <option value="100">100 Products Per Page</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="grid-options d-sm-inline-block d-none">
                                    <ul class="d-flex">
                                        <li class="two-grid">
                                            <a href="javascript:void(0)">
                                                <img src="assets/svg/grid-2.svg" class="img-fluid blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li class="three-grid d-md-inline-block d-none">
                                            <a href="javascript:void(0)">
                                                <img src="assets/svg/grid-3.svg" class="img-fluid blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li class="grid-btn active d-lg-inline-block d-none">
                                            <a href="javascript:void(0)">
                                                <img src="assets/svg/grid.svg" class="img-fluid blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li class="list-btn">
                                            <a href="javascript:void(0)">
                                                <img src="assets/svg/list.svg" class="img-fluid blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- label and featured section -->

                    <!-- Prodcut setion -->
                    <div class="row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ route('beijing_foreign_studies_univ') }}">
                                            <img alt="Beijing Foreign Studies University (BFSU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/04b0af801b0547f09652566619d3bcfa_YHTpzqM.png" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI5ODoxOTc=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/04b0af801b0547f09652566619d3bcfa_YHTpzqM.png">

                                            
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="{{ route('beijing_foreign_studies_univ') }}">
                                        <img alt="Beijing Foreign Studies University (BFSU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/04b0af801b0547f09652566619d3bcfa_YHTpzqM.png" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI5ODoxOTc=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/04b0af801b0547f09652566619d3bcfa_YHTpzqM.png">
                                              
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            
                                            <li>
                                                <a href="{{ route('beijing_foreign_studies_univ') }}">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <!--
                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                            -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    
                                    <div class="main-price">
                                        <a href="{{ route('beijing_foreign_studies_univ') }}" class="font-default">
                                            <h5 class="ms-0">Beijing Foreign Studies University (BFSU)</h5>
                                        </a>
                                        
                                        <!--
                                        <button class="btn listing-content">Add To Cart</button>
                                        -->
                                    </div>
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Note:</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ route('changzhou_university') }}">
                                            <img alt="Changzhou University (CZU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/logo_Ysg6UFh.png" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI1MzoxNTQ=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/logo_Ysg6UFh.png">

                                            
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="{{ route('changzhou_university') }}">
                                            <img alt="Changzhou University (CZU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/logo_Ysg6UFh.png" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI1MzoxNTQ=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/logo_Ysg6UFh.png">
                                              
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            
                                            <li>
                                                <a href="{{ route('changzhou_university') }}">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <!--
                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                            -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    
                                    <div class="main-price">
                                        <a href="{{ route('changzhou_university') }}" class="font-default">
                                            <h5 class="ms-0">Changzhou University (CZU)</h5>
                                        </a>
                                        
                                        <!--
                                        <button class="btn listing-content">Add To Cart</button>
                                        -->
                                    </div>
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Note:</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ route('china_univ_petro_beij') }}">
                                            <img alt="China University of Petroleum Beijing (CUPB) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/China_University_Of_Petroleum_Beijing_badge.svg.png" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODIzMzoyMDc=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/China_University_Of_Petroleum_Beijing_badge.svg.png">

                                            
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="{{ route('china_univ_petro_beij') }}">
                                            <img alt="China University of Petroleum Beijing (CUPB) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/China_University_Of_Petroleum_Beijing_badge.svg.png" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODIzMzoyMDc=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/China_University_Of_Petroleum_Beijing_badge.svg.png">
                                              
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            
                                            <li>
                                                <a href="{{ route('china_univ_petro_beij') }}">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <!--
                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                            -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    
                                    <div class="main-price">
                                        <a href="{{ route('china_univ_petro_beij') }}" class="font-default">
                                            <h5 class="ms-0">China University Of Petroleum Beijing (CUPB)</h5>
                                        </a>
                                        
                                        <!--
                                        <button class="btn listing-content">Add To Cart</button>
                                        -->
                                    </div>
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Note:</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ route('hubei_university_of_technology') }}">
                                        <img alt="Hubei University of Technology (HBUT) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Hubei_University_of_Technology_(HBUT).png" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI5NjoxOTA=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Hubei_University_of_Technology_(HBUT).png">

                                            
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="{{ route('hubei_university_of_technology') }}">
                                        <img alt="Hubei University of Technology (HBUT) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Hubei_University_of_Technology_(HBUT).png" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI5NjoxOTA=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Hubei_University_of_Technology_(HBUT).png">
                                              
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            
                                            <li>
                                                <a href="{{ route('hubei_university_of_technology') }}">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <!--
                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                            -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    
                                    <div class="main-price">
                                        <a href="{{ route('hubei_university_of_technology') }}" class="font-default">
                                            <h5 class="ms-0">Hubei University Of Technology (HBUT)</h5>
                                        </a>
                                        
                                        <!--
                                        <button class="btn listing-content">Add To Cart</button>
                                        -->
                                    </div>
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Note:</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ route('jiangsu_normal_university') }}">
                                            <img alt="Jiangsu Normal University (JSNU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/180px-Jiangsu_Normal_University_logo.png" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI2OToxODQ=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/180px-Jiangsu_Normal_University_logo.png">
                                            
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="{{ route('jiangsu_normal_university') }}">
                                        <img alt="Jiangsu Normal University (JSNU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/180px-Jiangsu_Normal_University_logo.png" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI2OToxODQ=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/180px-Jiangsu_Normal_University_logo.png">                                              
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            
                                            <li>
                                                <a href="{{ route('jiangsu_normal_university') }}">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <!--
                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                            -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    
                                    <div class="main-price">
                                        <a href="{{ route('jiangsu_normal_university') }}" class="font-default">
                                            <h5 class="ms-0">Jiangsu Normal University (JSNU)</h5>
                                        </a>
                                        
                                        <!--
                                        <button class="btn listing-content">Add To Cart</button>
                                        -->
                                    </div>
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Note:</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ route('jiangsu_university_science_and_technology') }}">
                                            <img alt="Jiangsu University of Science and Technology (JUST) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/JUST-Logowhite.jpg" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODMwNToxODE=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/JUST-Logowhite.jpg">                                            
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="{{ route('jiangsu_university_science_and_technology') }}">
                                        <img alt="Jiangsu University of Science and Technology (JUST) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/JUST-Logowhite.jpg" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODMwNToxODE=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/JUST-Logowhite.jpg">                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            
                                            <li>
                                                <a href="{{ route('jiangsu_university_science_and_technology') }}">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <!--
                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                            -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    
                                    <div class="main-price">
                                        <a href="{{ route('jiangsu_university_science_and_technology') }}" class="font-default">
                                            <h5 class="ms-0">Jiangsu University Of Science And Technology (JUST)</h5>
                                        </a>
                                        
                                        <!--
                                        <button class="btn listing-content">Add To Cart</button>
                                        -->
                                    </div>
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Note:</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ route('nanjing_tech_university') }}">
                                        <img class="bg-img blur-up lazyload"  src="https://upload-china-admissions.imgix.net/uploads/school_logos/Logo.png" alt="Nanjing Tech University (NJTech) Logo">                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="{{ route('nanjing_tech_university') }}">
                                        <img class="bg-img blur-up lazyload"  src="https://upload-china-admissions.imgix.net/uploads/school_logos/Logo.png" alt="Nanjing Tech University (NJTech) Logo">                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            
                                            <li>
                                                <a href="{{ route('nanjing_tech_university') }}">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <!--
                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                            -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    
                                    <div class="main-price">
                                        <a href="{{ route('nanjing_tech_university') }}" class="font-default">
                                            <h5 class="ms-0">Nanjing Tech University (NJTech)</h5>
                                        </a>
                                        
                                        <!--
                                        <button class="btn listing-content">Add To Cart</button>
                                        -->
                                    </div>
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Note:</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ route('nantong_university') }}">
                                        <img alt="Nantong University (NTU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Nantong_University_Logo.jpg" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI1MToxNjM=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Nantong_University_Logo.jpg">                                    
                                    </div>
                                    <div class="back">
                                        <a href="{{ route('nantong_university') }}">
                                        <img alt="Nantong University (NTU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Nantong_University_Logo.jpg" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI1MToxNjM=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Nantong_University_Logo.jpg">
                                    </div>                                        
                                    <div class="cart-wrap">
                                        <ul>
                                            
                                            <li>
                                                <a href="{{ route('nantong_university') }}">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <!--
                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                            -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    
                                    <div class="main-price">
                                        <a href="{{ route('nantong_university') }}" class="font-default">
                                            <h5 class="ms-0">Nantong University (NTU)</h5>
                                        </a>
                                        
                                        <!--
                                        <button class="btn listing-content">Add To Cart</button>
                                        -->
                                    </div>
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Note:</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ route('northwestern_polytechnical_university') }}">
                                        <img alt="Northwestern Polytechnical University (NWPU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Seal_of_NWPU.png" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI0NDoxNzI=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Seal_of_NWPU.png">                                    
                                    </div>
                                    <div class="back">
                                        <a href="{{ route('northwestern_polytechnical_university') }}">
                                        <img alt="Northwestern Polytechnical University (NWPU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Seal_of_NWPU.png" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI0NDoxNzI=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Seal_of_NWPU.png">
                                    </div>                                        
                                    <div class="cart-wrap">
                                        <ul>
                                            
                                            <li>
                                                <a href="{{ route('northwestern_polytechnical_university') }}">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <!--
                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                            -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    
                                    <div class="main-price">
                                        <a href="{{ route('northwestern_polytechnical_university') }}" class="font-default">
                                            <h5 class="ms-0">Northwestern Polytechnical University (NWPU)</h5>
                                        </a>
                                        
                                        <!--
                                        <button class="btn listing-content">Add To Cart</button>
                                        -->
                                    </div>
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Note:</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ route('shanghai_dianji_university') }}">
                                        <img alt="Shanghai Dianji University (SDJU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/shanghai-dianji-university.jpg" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI2OToxNzU=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/shanghai-dianji-university.jpg">                                    
                                    </div>
                                    <div class="back">
                                        <a href="{{ route('shanghai_dianji_university') }}">
                                        <img alt="Shanghai Dianji University (SDJU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/shanghai-dianji-university.jpg" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI2OToxNzU=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/shanghai-dianji-university.jpg">
                                    </div>                                        
                                    <div class="cart-wrap">
                                        <ul>
                                            
                                            <li>
                                                <a href="{{ route('shanghai_dianji_university') }}">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <!--
                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                            -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    
                                    <div class="main-price">
                                        <a href="{{ route('shanghai_dianji_university') }}" class="font-default">
                                            <h5 class="ms-0">Shanghai Dianji University (SDJU)</h5>
                                        </a>
                                        
                                        <!--
                                        <button class="btn listing-content">Add To Cart</button>
                                        -->
                                    </div>
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Note:</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ route('shanghai_second_polytechnic_university') }}">
                                        <img alt="Shanghai Second Polytechnic University (SSPU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Shanghai_Second_Polytechnic_University_(SSPU).png" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI3ODoyMDY=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Shanghai_Second_Polytechnic_University_(SSPU).png">
                                    </div>
                                    <div class="back">
                                        <a href="{{ route('shanghai_second_polytechnic_university') }}">
                                        <img alt="Shanghai Second Polytechnic University (SSPU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Shanghai_Second_Polytechnic_University_(SSPU).png" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI3ODoyMDY=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Shanghai_Second_Polytechnic_University_(SSPU).png">
                                    </div>                                        
                                    <div class="cart-wrap">
                                        <ul>
                                            
                                            <li>
                                                <a href="{{ route('shanghai_second_polytechnic_university') }}">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <!--
                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                            -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    
                                    <div class="main-price">
                                        <a href="{{ route('shanghai_second_polytechnic_university') }}" class="font-default">
                                            <h5 class="ms-0">Shanghai Second Polytechnic University (SSPU)</h5>
                                        </a>
                                        
                                        <!--
                                        <button class="btn listing-content">Add To Cart</button>
                                        -->
                                    </div>
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Note:</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ route('shanghai_university_of_engineering_science') }}">
                                        <img alt="Shanghai University of Engineering Science (SUES) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Shanghai_University_of_Engineering_Science_(SUES).png" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODMxNDoyMTQ=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Shanghai_University_of_Engineering_Science_(SUES).png">
                                    </div>
                                    <div class="back">
                                        <a href="{{ route('shanghai_university_of_engineering_science') }}">
                                        <img alt="Shanghai University of Engineering Science (SUES) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Shanghai_University_of_Engineering_Science_(SUES).png" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODMxNDoyMTQ=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/Shanghai_University_of_Engineering_Science_(SUES).png">
                                    </div>                                        
                                    <div class="cart-wrap">
                                        <ul>
                                            
                                            <li>
                                                <a href="{{ route('shanghai_university_of_engineering_science') }}">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <!--
                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                            -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    
                                    <div class="main-price">
                                        <a href="{{ route('shanghai_university_of_engineering_science') }}" class="font-default">
                                            <h5 class="ms-0">Shanghai University Of Engineering Science (SUES)</h5>
                                        </a>
                                        
                                        <!--
                                        <button class="btn listing-content">Add To Cart</button>
                                        -->
                                    </div>
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Note:</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ route('shanghai_university') }}">
                                        <img alt="Shanghai University (SHU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/SHUlogo.jpg" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI0MjoxNDg=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/SHUlogo.jpg">
                                    </div>
                                    <div class="back">
                                        <a href="{{ route('shanghai_university') }}">
                                        <img alt="Shanghai University (SHU) Logo" nitro-lazy-src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/SHUlogo.jpg" class="bg-img blur-up lazyload" decoding="async" nitro-lazy-empty="" id="ODI0MjoxNDg=-1" src="https://cdn-eblcf.nitrocdn.com/lZuytgWjZprCqHbvUEDajTtGzfSdJiEL/assets/images/optimized/rev-4427ecb/upload-china-admissions.imgix.net/uploads/school_logos/SHUlogo.jpg">                                    </div>                                        
                                    <div class="cart-wrap">
                                        <ul>
                                            
                                            <li>
                                                <a href="{{ route('shanghai_university') }}">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <!--
                                            <li>
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                            -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    
                                    <div class="main-price">
                                        <a href="{{ route('shanghai_university') }}" class="font-default">
                                            <h5 class="ms-0">Shanghai University Of Engineering Science (SUES)</h5>
                                        </a>
                                        
                                        <!--
                                        <button class="btn listing-content">Add To Cart</button>
                                        -->
                                    </div>
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Note:</span>
                                        <ul class="rating mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    

                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section end -->
    <!-- Subscribe Section Start -->
    <section class="subscribe-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="subscribe-details">
                        <h2 class="mb-3">Subscribe Our News</h2>
                        <h6 class="font-light">Subscribe and receive our newsletters to follow the news about our fresh
                            and fantastic Products.</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                    <div class="subsribe-input">
                        <div class="input-group">
                            <input type="text" class="form-control subscribe-input" placeholder="Your Email Address">
                            <button class="btn btn-solid-default" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Section End -->
    <div id="qvmodal"></div>

    <form id="frmFilter" method="GET">
        <input type="hidden" id="page" name="page" value="1">
        <input type="hidden" id="size" name="size" value="12">
        <input type="hidden" id="prange" name="prange" value="">
        <input type="hidden" id="order" name="order" value="-1">
        <input type="hidden" id="brands" name="brands" value="">
        <input type="hidden" id="categories" name="categories" value="">
    </form>
    
    <div class="modal fade newletter-modal" id="newsletter">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <img src="assets/images/newletter-icon.png" class="img-fluid blur-up lazyload" alt="">
                    <div class="modal-title">
                        <h2 class="tt-title">Sign up for our Newsletter!</h2>
                        <p class="font-light">Never miss any new updates or products we reveal, stay up to date.</p>
                        <p class="font-light">Oh, and it's free!</p>

                        <div class="input-group mb-3">
                            <input placeholder="Email" class="form-control" type="text">
                        </div>

                        <div class="cancel-button text-center">
                            <button class="btn default-theme w-100" data-bs-dismiss="modal"
                                type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-label="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="modal-contain">
                        <div>
                            <div class="modal-messages">
                                <i class="fas fa-check"></i> 3-stripes full-zip hoodie successfully added to
                                you cart.
                            </div>
                            <div class="modal-product">
                                <div class="modal-contain-img">
                                    <img src="assets/images/fashion/instagram/4.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                </div>
                                <div class="modal-contain-details">
                                    <h4>Premier Cropped Skinny Jean</h4>
                                    <p class="font-light my-2">Yellow, Qty : 3</p>
                                    <div class="product-total">
                                        <h5>TOTAL : <span>$1,140.00</span></h5>
                                    </div>
                                    <div class="shop-cart-button mt-3">
                                        <a href="shop-left-sidebar.php"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                                            SHOPPING</a>
                                        <a href="cart.php"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                                            CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ratio_asos mt-4">
                        <div class="container">
                            <div class="row m-0">
                                <div class="col-sm-12 p-0">
                                    <div
                                        class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space spacing-slider">
                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product/details.html">
                                                            <img src="assets/images/fashion/product/front/1.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product/details.html">
                                                            <img src="assets/images/fashion/product/front/2.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product/details.html">
                                                            <img src="assets/images/fashion/product/front/3.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product/details.html">
                                                            <img src="assets/images/fashion/product/front/4.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tap-to-top">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <div class="bg-overlay"></div>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/js/feather/feather.min.js"></script>
    <script src="assets/js/lazysizes.min.js"></script>
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/slick/slick-animation.min.js"></script>
    <script src="assets/js/slick/custom_slick.js"></script>
    <script src="assets/js/price-filter.js"></script>
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <script src="assets/js/filter.js"></script>
    <script src="assets/js/newsletter.js"></script>
    <script src="assets/js/cart_modal_resize.js"></script>
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>
    <script src="assets/js/theme-setting.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        $(function () {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
    </script>
</body>

</html>


@endsection