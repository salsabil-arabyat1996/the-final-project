
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

{{--
<style>
    .blog-block {
        height: 220px;
        /* display: flex; */
        /* flex-direction: column; */
    }

    .blog-img-box img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
</style> --}}
{{-- <br> --}}

<div id="loader">
    <div id="status"></div>
 </div>
 <div class="col-md-12">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}

        </div>
    @endif
</div>
<div id="banner" class="banner full-screen-mode parallax">
    <div class="container pr">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="banner-static">
                <div class="banner-text">
                    <div class="banner-cell">

                        <h1>Order food online for <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Friends:Family:Officemates" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                        <!-- <h2>Accidental appearances </h2> -->
                         <p>Welcome to my website I am excited for you to try the best food in the world</p>
                        <!-- <div class="book-btn">
                            <a href="#reservation" class="table-btn hvr-underline-from-center">Book my Table</a>
                        </div> -->
                        <!-- <a href="#about">
                            <div class="mouse"></div>
                        </a> -->
                    </div>
                    <!-- end banner-cell -->
                </div>
                <!-- end banner-text -->
            </div>
            <!-- end banner-static -->
        </div>
        <!-- end col -->
    </div>
    <!-- end container -->
</div>
<!-- end banner -->
<br>

<div id="about" class="about-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title"> About Us </h2>
                    <h3>Welcome to my kitchen</h3>
                    <h4>welcome  everyone, my name is Salsabil This is a project for me and my mother

                   invite you to embark on a delightful journey through the art of cooking. With my cooking project, I aim to share my passion for flavors, textures, and creativity with fellow food enthusiasts. From tantalizing appetizers to delectable main courses and mouthwatering desserts, I offer a wide array of recipes that are guaranteed to awaken your taste buds and inspire your inner chef.

                     Each recipe is meticulously crafted, incorporating both traditional and innovative techniques, to deliver unforgettable dining experiences. </h4>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="about-images">
                        <img class="about-main" src="images/about-main.jpg" alt="About Main Image">
                        <img class="about-inset" src="images/about-inset.jpg" alt="About Inset Image">
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>






<div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title text-center">
                    Our Gallery
                </h2>
                    {{-- <p class="title-caption text-center">There are many variations of passages of Lorem Ipsum available </p> --}}
                </div>
                <div class="gal-container clearfix">
                    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                        <div class="box">
                            {{-- <a href="#" data-toggle="modal" data-target="#1"> --}}
                                <img src="images/gallery_01.jpg" alt="" />
                            {{-- </a> --}}
                            <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_01.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 1 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 co-xs-12 gal-item">
                        <div class="box">
                            {{-- <a href="#" data-toggle="modal" data-target="#2"> --}}
                                <img src="images/gallery_02.jpg" alt="" />
                            {{-- </a> --}}
                            <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_02.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 2 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 co-xs-12 gal-item">
                        <div class="box">
                            {{-- <a href="#" data-toggle="modal" data-target="#3"> --}}
                                <img src="images/gallery_03.jpg" alt="" />
                            {{-- </a> --}}
                            <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_03.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 3 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 co-xs-12 gal-item">
                        <div class="box">
                            {{-- <a href="#" data-toggle="modal" data-target="#4"> --}}
                                <img src="images/gallery_04.jpg" alt="" />
                            {{-- </a> --}}
                            <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_04.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 4 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 co-xs-12 gal-item">
                        <div class="box">
                            {{-- <a href="#" data-toggle="modal" data-target="#5"> --}}
                                <img src="images/pasta-2819847_1280.png" alt="" />
                            {{-- </a> --}}
                            <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/pasta-2819847_1280.png" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 5 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 co-xs-12 gal-item">
                        <div class="box">
                            {{-- <a href="#" data-toggle="modal" data-target="#9"> --}}
                                <img src="images/salmon-518032_1280.jpg" alt="" />
                            {{-- </a> --}}
                            <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/salmon-518032_1280.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 6 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                        <div class="box">
                            {{-- <a href="#" data-toggle="modal" data-target="#10"> --}}
                                <img src="images/gallery_07.jpg" alt="" />
                            {{-- </a> --}}
                            <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_07.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 7 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 co-xs-12 gal-item">
                        <div class="box">
                            {{-- <a href="#" data-toggle="modal" data-target="#11"> --}}
                                <img src="images/gallery_08.jpg" alt="" />
                            {{-- </a> --}}
                            <div class="modal fade" id="11" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_08.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 8 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 co-xs-12 gal-item">
                        <div class="box">
                            {{-- <a href="#" data-toggle="modal" data-target="#12"> --}}
                                <img src="images/gallery_09.jpg" alt="" />
                            {{-- </a> --}}
                            <div class="modal fade" id="12" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_09.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 9 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 co-xs-12 gal-item">
                        <div class="box">
                            {{-- <a href="#" data-toggle="modal" data-target="#13"> --}}
                                <img src="images/gallery_10.jpg" alt="" />
                            {{-- </a> --}}
                            <div class="modal fade" id="13" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_10.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 10 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end gal-container -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end gallery-main -->
<!-- end gallery-main -->

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
 </div>

<br>

@endsection
