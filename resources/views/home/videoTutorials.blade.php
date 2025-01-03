<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <base href="/public">
      @include('home.homecss')

      <style>
        h1{
            color: maroon;
            font-size: 50px;
            text-align: center;
        }
        p{
            text-align: center;
        }
        .video{
            text-align: center;
        }
      </style>
   </head>
   <body>

    <!-- header section start -->
    <div class="header_section">
        @include('home.header')
     </div>
     <!-- header section end -->

  

      <div class="main-container">
        
        
        
        <div class="txt">
            <h1>All Videos</h1>
            <p>More video tutorials are coming soon.... stay tuned</p>
        </div>
        <div class="video">
            <video controls width="60%" height="auto">
                <source src="{{ asset('recipeimage/vid.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        








      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      
      
      
   </body>
</html>