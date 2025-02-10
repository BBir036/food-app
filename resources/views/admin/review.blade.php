<!DOCTYPE html>
<html>
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('admin.css')

    <style>
        .review_title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;
        }
        .table {
            text-align: center;
            margin-left: 100px;
        }
        table {
            width: 80%;
        }
        th {
            font-weight: bolder;
            color: white;
        }
        .add {
            width: 80%;
            text-align: center;
            margin-left: 100px;
        }
        .page-content {
            width: 100vw;
        }
        html {
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
            {{ session()->get('message') }}
        </div>
        @endif

        <h1 class="review_title"style="color: black">All Reviews</h1>

        <div class="table">
            <table border="1" cellspacing="0">
                <tr>
                    <th>Reviewer Name</th>
                    <th>Review Content</th>
                    <th>Action</th>
                </tr>

                @foreach ($reviews as $review)
                <tr>
                    
                    <td>{{ $review->name }}</td>
                    <td>{{ $review->review }}</td>

                    <td>
                        <a href="{{ url('delete_review', $review->id) }}" class="btn btn-danger" onclick="confirmation(event)">Delete</a><br><br>
                    </td>
                </tr>
                @endforeach
            </table>
        </div><br><br>
      </div>

      @include('admin.footer')

    <script type="text/javascript">
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);

            swal({
                title: "Are You Sure?",
                text: "You won't be able to recover this.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willCancel) => {
                if (willCancel) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>
  </body>
</html>
