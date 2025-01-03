<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <base href="/public">
      @include('home.homecss')

      <style>
        .main-container{
            text-align: center;
            padding-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100vw;
        }
        
        .div_center {
        display: flex;
        flex-direction: row;
        gap: 8px;
        align-items: center;
        margin-bottom: 20px;
        }

        .div_center label {
        margin-bottom: 5px;
        font-weight: bold;
        }

        .div_center input[type="text"],
        .div_center textarea {
        width: 300px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
        }

        .div_center input[type="file"] {
        margin-bottom: 10px;
        }

        .btn{
        background-color: rgb(145, 2, 2);
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 400px;
        }
        .btn:hover{
            background-color: rgb(108, 0, 0);
        }
        .alert{
            width: 80%;
        }
      </style>
   </head>
   <body>

    @include('sweetalert::alert')
    
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
      </div>
      <!-- header section end -->

      <br><br>

      <div class="main-container">
        
        <br><br><h1 style="font-size: 3rem; color:maroon;">Add Your Own Recipe!</h1>
        <h4>Got a new recipe idea? Or can't find enough recipes? Don't Worry, add it!</h4><br><br>
        <div class="form-container">
            <form action="{{url('user_recipe')}}" method="POST" enctype="multipart/form-data">
                @csrf
    
                <div class="div_center">
                    <label for="name">Recipe Name</label>
                    <input type="text" name="title" id="name">
                </div>
                <div class="div_center">
                    <label for="in">Ingredients</label>
                    <textarea name="ingredients" id="" cols="30" rows="5" id="in"></textarea>
                </div>
                <div class="div_center">
                    <label for="details">Details</label>
                    <textarea name="details" id="" cols="50" rows="5" id="details"></textarea>
                </div>
                <div class="div_center">
                    <label for="">Image</label>
                    <input type="file" name="image">
                </div>
                <div class="div_center">
                    <input type="submit" class="btn">
                </div>
            </form>
        </div>
    </div>












      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      
      
      
   </body>
</html>