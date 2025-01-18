<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>

      
      @include('home.homecss')

        <style>
            .main-container{
                width: 100vw;
            }

            .recipes {
                display: flex; 
                align-items: flex-start; 
                gap: 20px; 
                background-color: #f9f9f9; 
                border-radius: 10px; 
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
                max-width: 1200px; 
                margin: 20px auto; 
                height: 350px;
                padding: 20px;
            }
        
            .recipes img {
                flex-shrink: 0;
                border-radius: 10px;
                border: 2px solid #ddd;
            }
        
            .recipes .text {
                flex-grow: 1;
                font-family: 'Arial', sans-serif; 
            }
        
            .recipes .text h3 {
                font-size: 30px;
                margin-bottom: 10px; 
                color: maroon; 
                padding-top: 20px;
            }
        
            .recipes .text p {
                font-size: 16px; 
                margin-bottom: 10px; 
                line-height: 1.6; 
                color: #555; 
            }

            .recipes .text b {
                color: #800000;
            }
            .btn {
                display: inline-block;
                padding: 10px 20px;
                font-size: 16px;
                font-weight: bold;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
                transition: all 0.3s ease-in-out;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .btn-danger {
                background-color: #e74c3c;
                border: 2px solid #c0392b;
            }

            .btn-danger:hover {
                background-color: #a41c0d; 
                transform: scale(1.05); 
            }

            .btn-success {
                background-color: #2ecc71; 
                border: 2px solid #27ae60;
            }

            .btn-success:hover {
                background-color: #0d833e; 
                transform: scale(1.05);
            }

            .text .btn {
                margin-right: 10px; 
            }
            .h{
                color: maroon;
                font-size: 50px;
                text-align: center;
            }

            .recipe-image {
                width: 320px;
                height: 300px;
                object-fit: cover; /* Ensures the image fits within the specified dimensions while maintaining proportions */
                padding: 20px;
            }

        </style>
   </head>
   <body>
    
    
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
      </div>
      <!-- header section end -->

      <h1 class="h">All Recipes</h1>


      <div class="main-container">
        
        @foreach ($recipes as $recipe)
        <div class="recipes">
            <img src="/recipeimage/{{$recipe->image}}" alt="{{$recipe->title}}" class="recipe-image">
            <div class="text">
                <h3>{{$recipe->title}}</h3>
                <p><b>Ingredients: </b>{{$recipe->ingredients}}</p>
                <p><b>Process: </b>{{$recipe->details}}</p>
            </div>
        </div>
    @endforeach
    







      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      
      
      


      



   </body>
</html>