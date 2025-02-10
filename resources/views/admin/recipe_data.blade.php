<!DOCTYPE html>
<html>
  <head> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('admin.css')

    <style>
        .recipe_title{
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white
        }
        .table{
            text-align: center;
            margin-left: 100px;
        }
        table{
            width: 80%;
        }
        th{
            font-weight: bolder;
            color: white;
        }
        .add{
            width: 80%;
            text-align: center;
            margin-left: 100px;
        }
        .page-content{
            width: 100vw;
        }
        html{
            overflow-x: hidden;
        }
        .btn{
            color: black;
        }
        .btn:hover{
            color: red;
        }
        th{
            color: black;
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
            
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}
        </div>
            
        @endif

        <h1 class="recipe_title"style="color: black">All Recipes</h1>

        <div class="table">
            <table border="1" cellspacing="0">
                <tr>
                    <th>Recipe Title</th>
                    <th>Ingredients</th>
                    <th>Details</th>
                    <th>Uploaded By</th>
                    <th>Uploader Type</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>

                @foreach ($recipe as $recipe)

                <tr>
                    <td>{{$recipe->title}}</td>
                    <td>{{$recipe->ingredients}}</td>
                    <td>{{$recipe->details}}</td>
                    <td>{{$recipe->name}}</td>
                    <td>{{$recipe->uploadertype}}</td>
                    <td>
                        <img src="recipeimage/{{$recipe->image}}" alt="" height="100px" width="100px">
                    </td>
                    <td>
                        <a href="{{url('delete_recipe' , $recipe->id)}}" class="btn btn-danger" onclick="confirmation(event)">Delete</a><br><br>
                        <a href="{{url('edit_recipe',$recipe->id)}}" class="btn btn-success">Update</a>
                    </td>
                </tr>
                    
                @endforeach
            </table>
        </div> <br><br>

        <a href="{{url('recipe_page')}}" class="btn btn-primary add">Add recipe</a> <br><br>


      </div>
        @include('admin.footer')


    <script type="text/javascript">
        function confirmation(ev){
            ev.preventDefault();
            var urlToRedirect=ev.currentTarget.getAttribute('href');

            console.log(urlToRedirect);

            swal({
                title:"Are You Sure?",
                text:"You won't be able to recover this.",
                icon: "warning",
                buttons: true,
                dangerMode : true,
            })

            .then((willCancel)=>{

                if(willCancel){
                    window.location.href= urlToRedirect;
                }

            })

        }

    </script>
  </body>
</html>

