@extends('layouts.app')
@section('title', 'blog')
@section('content')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<div class="blog_section layout_padding">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <h1 class="about_taital">Our Blog</h1>
             <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
          </div>
       </div>
       <div class="blog_section_2">
          <div class="row">
             <div class="col-md-6">
                <div class="blog_box">
                   <div class="blog_img"><img src="images/eggs-1380879_1280.png"></div>
                   {{-- <h4 class="date_text">05 April</h4> --}}
                   <h4 class="prep_text">TIPS FOR BOILING EGGS</h4>
                   <p class="lorem_text"> The cooking time depends on the desired doneness. For soft-boiled eggs, cook for about 4-6 minutes. For medium-boiled eggs, cook for about 8-10 minutes. For hard-boiled eggs, cook for about 10-12 minutes.</p>
                </div>
                {{-- <div class="read_bt"><a href="#">Read More</a></div> --}}
                <br>
             </div>
             <div class="col-md-6">
                <div class="blog_box">
                   <div class="blog_img"><img src="images/salad-dressing-7295630_1280.png"></div>
                   {{-- <h4 class="date_text">05 April</h4> --}}
                   <h4 class="prep_text">Top Homemade Dressings</h4>
                   <p class="lorem_text">When adding spices, herbs or garlic and onions to the dressing
                    Mix them together first and then keep them in the refrigerator for at least an hour to ensure that the flavor penetrates properly</p>
                </div>
                {{-- <div class="read_bt"><a href="#">Read More</a></div> --}}
             </div>




          </div>
          </div>
       </div>

    </div>


    <div class="blog_section layout_padding">
        <div class="container">
           {{-- <div class="row">
              <div class="col-md-12">
                 <h1 class="about_taital">Our Blog</h1>
                 <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
              </div>
           </div> --}}
           <div class="blog_section_2">
              <div class="row">
                 <div class="col-md-6">
                    <div class="blog_box">
                       <div class="blog_img"><img src="images/spaghetti-569067_1280.png"></div>
                       {{-- <h4 class="date_text">05 April</h4> --}}
                       <h4 class="prep_text">TIPS FOR BOILING PASTA</h4>
                       <p class="lorem_text"> Use a deep casserole and put 2.5 liters of water for every 500 g of pasta to cook quickly, and for every 500 g of pasta add a tablespoon of salt to the cooking water. After the water boils well, put the pasta to climb.</p>
                    </div>
                    {{-- <div class="read_bt"><a href="#">Read More</a></div> --}}
                    <br>
                 </div>
                 <div class="col-md-6">
                    <div class="blog_box">
                       <div class="blog_img"><img src="images/food-3147709_1280.png"></div>
                       {{-- <h4 class="date_text">05 April</h4> --}}
                       <h4 class="prep_text">TIPS FOR  BAKING IN THE OVEN</h4>
                       <p class="lorem_text">Make sure to use ingredients at the required temperature, as some recipes may call for cold butter, melted butter, or eggs at room temperature. Preheat the oven first and use an oven thermometer.</p>
                    </div>
                    {{-- <div class="read_bt"><a href="#">Read More</a></div> --}}
                 </div>




              </div>
              </div>
           </div>

        </div>


    </div>
</div>




@endsection
