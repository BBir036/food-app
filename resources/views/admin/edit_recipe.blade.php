<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.css')

    <style>
         .recipe_title{
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white
        }
        .div_center{
            text-align: center;
            padding: 30px;
        }
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
     <div class="page-content">

        

        @if(session()->has('message'))
            
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}
        </div>
            
        @endif
        


        <h1 class="recipe_title"style="color: black">Edit Recipe</h1>

        <form action="{{url('editrecipe',$recipe->id)}}" method="POST" enctype="multipart/form-data">

            @csrf


            <div class="div_center">
                <label for="name">Recipe Name</label>
                <input type="text" name="title" id="name" value="{{$recipe->title}}">
            </div>
            <div class="div_center">
                <label for="in">Ingredients</label>
                <textarea name="ingredients" id="" cols="30" rows="5" id="in">{{$recipe->ingredients}}</textarea>
            </div>
            <div class="div_center">
                <label for="details">Details</label>
                <textarea name="details" id="" cols="50" rows="5" id="details">{{$recipe->details}}</textarea>
            </div>
            <div class="div_center">
                <label for="">Previous Image</label>
                <img src="/recipeimage/{{$recipe->image}}" alt="" height="100px" width="100px">
            </div>
            <div class="div_center">
                <label for="">New Image</label>
                <input type="file" name="image">
            </div>
            <div class="div_center">
                <input type="submit" value="Update" class="btn btn-primary">
            </div>
        </form>
          
     </div>
        @include('admin.footer')
  </body>
</html>






