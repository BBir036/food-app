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
        </style>
   </head>
   <body>
    @include('sweetalert::alert')
    
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
      </div>
      <!-- header section end -->


      <div class="main-container">
        
       @foreach ($data as $item)

       <div class="recipes">
        <img src="/recipeimage/{{$item->image}}" alt="" height="300px" width="320px" style="padding: 20px">
        <div class="text">
            <h3>{{$item->title}}</h3>
            <p><b>Ingredients: </b>{{$item->ingredients}}</p>
            <p><b>Process: </b>{{$item->details}}</p>
            <div>
                <a href="{{url('rec_del', $item->id)}}" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                <a href="{{url('rec_update', $item->id)}}" class="btn btn-success">Update</a>
            </div>
        </div>

        
       </div>
           
       @endforeach
        







      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      
      
      


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