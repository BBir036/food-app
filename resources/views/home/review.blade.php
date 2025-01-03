<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <base href="/public">
      @include('home.homecss')

      <style>
        
/*body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}*/

/* Form container styling */
        .review-form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .main-container{
            padding-left: 250px;
            align-items: center;
            justify-content: center;
           
        }

/* Form title */
        .review-form-container p{
            padding-top: 30px;
            margin-top: 30px;
            font-size: 40px;
            font-weight: 600;
            color: maroon;
            
        }


        .review-form label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
            color: #555;
        }

        .review-form input,
        .review-form select,
        .review-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .review-form input:focus,
        .review-form select:focus,
        .review-form textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        /* Button styling */
        .submit-btn {
            width: 100%;
            padding: 14px;
            background-color: maroon;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: rgb(102, 2, 2);
        }

        .submit-btn:active {
            background-color: #640303;
        }

        /* Responsive design for mobile */
        @media (max-width: 800px) {
            .review-form-container {
                padding: 30px;
            }

            .review-form p {
                font-size: 20px;
            }
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

        

         <!-- Review Form Section -->
         <div class="review-form-container">
            @if(session('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                {{ session('success') }}
            </div>
        @endif
        
            <p class="ttl">What are you thinking about us?</p>
            <form action="{{ url('submit-review') }}" method="POST" class="review-form">
                @csrf
        
                <label for="review">Your Opinion:</label>
                <textarea id="review" name="review" rows="5" required placeholder="Write your opinion here..."></textarea>
        
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        
                <button type="submit" class="submit-btn">Share Your Thoughts</button>
            </form>
        </div>
        
      </div>

      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
   </body>
</html>
