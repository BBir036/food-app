<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
         <!-- banner section start -->
         @include('home.bannar')
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      @include('home.recipeservice')
      <button onclick="scrollToTop()" id="upButton" title="Go to top"><b>↑</b></button>
      <!-- services section end -->
      <!-- about section start -->
      @include('home.aboutus')
      <!-- about section end -->
      <!-- blog section start -->
      @include('home.video tutorial')
      <!-- blog section end -->
      <!-- client section start -->
      @include('home.userreview')
      <!-- client section start -->
      <!-- choose section start -->
      @include('home.choose')
      <!-- choose section end -->
      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      
      
      



      <script>
         
         var mybutton = document.getElementById("upButton");
       
   
         window.onscroll = function() {
           if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
             mybutton.style.display = "block";
           } else {
             mybutton.style.display = "none";
           }
         };

         function scrollToTop() {
           window.scrollTo({
             top: 0,
             behavior: "smooth"
           });
         }
       </script>
   </body>
</html>