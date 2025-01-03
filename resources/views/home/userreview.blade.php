<div class="client_section layout_padding">
   <div class="container">
       <h1 class="client_taital">Love From Our Users</h1>
       <div class="client_section_2">
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                   @foreach ($reviews as $key => $review)
                       <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                   @endforeach
               </ol>
               
               <div class="carousel-inner">
                   @foreach ($reviews as $key => $review)
                       <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                           <div class="client_main">
                               <div class="box_left">
                                   <p class="lorem_text">"{{ $review->review }}"</p>
                               </div>
                               <div class="box_right">
                                   <div class="client_taital_left">
                                       <div class="client_img">
                                           <img src="images/user.jpg" alt="Client Image">
                                       </div>
                                       <div class="quick_icon">
                                           <img src="{{ asset('images/quick-icon.png') }}" alt="Quick Icon">
                                       </div>
                                   </div>
                                   <div class="client_taital_right">
                                       <h4 class="client_name">{{ $review->name }}</h4>
                                   </div>
                               </div>
                           </div>
                       </div>
                   @endforeach
               </div>

               <!-- Carousel Controls -->
               <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
               </a>
           </div>
       </div>
   </div>
</div>
