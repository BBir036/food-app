<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
      @include('home.homecss')

      <style>
        .recipe_title{
           font-size: 50px;
           font-weight: bold;
           text-align: center;
           padding: 30px;
           color: maroon;
       }
       .div_center{
           text-align: center;
           padding: 30px;
       }
       label{
           display: inline-block;
           width: 200px;
       }
       .btn{
        background-color: maroon;
        color: white;
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

       
        
        
        <h1 class="recipe_title">Update Your Recipe</h1>

        @if(session()->has('message'))
            
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}
        </div>
            
        @endif

        <form action="{{url('update_recipe',$data->id)}}" method="POST" enctype="multipart/form-data">

            @csrf


            <div class="div_center">
                <label for="name">Recipe Name</label>
                <input type="text" name="title" id="name" value="{{$data->title}}">
            </div>
            <div class="div_center">
                <label for="in">Ingredients</label>
                <textarea name="ingredients" id="" cols="30" rows="5" id="in">{{$data->ingredients}}</textarea>
            </div>
            <div class="div_center">
                <label for="details">Details</label>
                <textarea name="details" id="" cols="50" rows="5" id="details">{{$data->details}}</textarea>
            </div>
            <div class="div_center">
                <label for="">Previous Image</label>
                <img src="/recipeimage/{{$data->image}}" alt="" height="100px" width="100px">
            </div>
            <div class="div_center">
                <label for="">New Image</label>
                <input type="file" name="image">
            </div>
            <div class="div_center">
                <input type="submit" value="Update" class="btn">
            </div>
        </form>
          
     </div>







      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      
      
      


    











   </body>
</html>