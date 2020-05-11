@extends('layouts.app')
@section('content')
 <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-text">
                        <h6>Hello There!</h6>
                        <h1> Food in Stock 2019 </h1>
                        <button class="btn btn-primary">Shop Now</button>
                </div>    
            </div>
            <div class="col-md-6">
                <img src="images/shopping.png" alt="food" class="banner-img"/>
            </div>
        </div>
     </div>  

<section class="banner-first">
    <div class="container">
        <h2 class="mb-4"><span class="text-light">New</span>Stock</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="images/1.jpg" class="" alt=""/>
                    <button class="btn btn-primary" class="btn-banner">Shop Now</button>
                </div>
                <div class="col-md-4">
                    <img src="images/2.jpg" class="" alt=""/>
                    <button class="btn btn-primary" class="btn-banner">Shop Now</button>
                </div>
                <div class="col-md-4">
                    <img src="images/3.jpg" class="" alt=""/>
                    <button class="btn btn-primary" class="btn-banner">Shop Now</button>
                </div>
        </div>
    </div>
</section>


<section class="banner-second">
    <h2 class="mb-4 text-center">Love<span class="text-light">Collections</span></h2>
    <div class="shipping-order">       
     <div class="shipping-details-order">
        <img src="images/4.jpg" class="image" alt=""/>        
        <div class="overlay">
        <h5>Classic</h5>
        <p>Make an order - dolor sit amet consectetur adipisicing elit. Odit, unde.</p>
        <p>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
        </p>        
        <p class="shop">
            <i class="fa fa-heart-o" aria-hidden="true"></i>
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
        </p>
        </div>       
    </div>
    <div class="shipping-details-order">
        <img src="images/5.jpg" class="" alt=""/>        
        <div class="overlay">
        <h5>Classic</h5>
        <p>Make an order - dolor sit amet consectetur adipisicing elit. Odit, unde.</p>
        <p>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
        </p>        
        <p class="shop">
            <i class="fa fa-heart-o" aria-hidden="true"></i>
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
        </p>
        </div>
    </div>
    <div class="shipping-details-order">
        <img src="images/6.jpg" class="" alt=""/>        
        <div class="overlay">
        <h5>Classic</h5>
        <p>Make an order - dolor sit amet consectetur adipisicing elit. Odit, unde.</p>
        <p>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
        </p>
        <p class="shop">
            <i class="fa fa-heart-o" aria-hidden="true"></i>
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
        </p>
        </div>
    </div>
    <div class="shipping-details-order">
        <img src="images/7.jpg" class="" alt=""/>        
        <div class="overlay">
        <h5>Classic</h5>
        <p>Make an order - dolor sit amet consectetur adipisicing elit. Odit, unde.</p>
        <p>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
        </p>
        <p class="shop">
            <i class="fa fa-heart-o" aria-hidden="true"></i>
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
        </p>
        </div>
        
    </div>
    <div class="shipping-details-order">
        <img src="images/8.jpg" class="" alt=""/>        
        <div class="overlay">
        <h5>Classic</h5>
        <p>make an order - dolor sit amet consectetur adipisicing elit. Odit, unde.</p>
        <p>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half" aria-hidden="true"></i>
            <i class="fa fa-star-half" aria-hidden="true"></i>
        </p>
        <p class="shop">
            <i class="fa fa-heart-o" aria-hidden="true"></i>
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
        </p>
        </div>
        
    </div>
</div>
</section>

{{-- another section --}}
{{-- <section class="banner-third">
    <div class="shipping-order-1">
        <img src="images/9.jpg" class="image" alt=""/>              
          <div class="overlay-1">   
        <p class="shop-1">
            <i class="fa fa-camera" aria-hidden="true"></i>
        </p>
        </div>       
    </div>
</section> --}}


<section>
<div class="shipping">
    <div class="shipping-details">
        <i class="fa fa-bus"></i>
        <h5>Free shipping</h5>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, unde.</p>
    </div>
    <div class="shipping-details">
        <i class="fa fa-book"></i>
        <h5>Free shipping</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, adipisci!</p>
    </div>
    <div class="shipping-details">
        <i class="fa fa-phone"></i>
        <h5>Free shipping</h5>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, blanditiis.</p>
    </div>
    <div class="shipping-details">
        <i class="fa fa-credit-card"></i>
        <h5>Free shipping</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, fugit.</p>
    </div>
</div>
</section>

      
@endsection
