<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <base href="/public">
      @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
      </div>
      <!-- header section end -->



      <div class="col-md-12" style="text-align: center">
        <div class="image-container"><img style="padding:20px" src="/recipeimage/{{$recipe->image}}" class="services_img"></div><br>
        <h1 style="font-size: 2.5rem; font-weight: bold; color: #333;">
            {{$recipe->title}}
        </h1>
        <h4>Posted by <i><b>{{$recipe->name}}</b></i>.</h4>
        <p style="font-size:20px"><b style="color: black">Ingredients:  </b>{{$recipe->ingredients}}</p><br>
        <p style="font-size:20px"><b style="color: black">Process:  </b>{{$recipe->details}}</p>
     </div>












      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      
      
      
   </body>
</html>