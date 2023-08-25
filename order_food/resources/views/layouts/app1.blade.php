<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <!-- Add your CSS stylesheets or link to an external CSS file -->
    <style>
        /* Global styles */



        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            /* background-image: url(); */


        }

        .body1 {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            /* background-image: url(); */
            background-image: url('{{ url('images/background.jpg') }}');
            background-repeat:repeat;

        }

        /* Navigation bar styles */
        .navbar {
            background-color: #f0d4ac;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }

        .navbar a {
    background-color: white;
    color: #030303;
    text-decoration: none;
    margin-right: 10px;
    font-size: 18px; /* تحديد حجم النص */
    padding: 8px 12px; /* تحديد حجم البادينج داخل الروابط */
    border-radius: 5px; /* تحديد شكل الزوايا */
    transition: background-color 0.3s ease;
}
.container1 {
        position: relative;
        z-index: 1;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        margin-top: 50px;
    }

.navbar a:hover {
     background-color: #0069d9; تحديد لون الخلفية عند التحويم بالمؤشر */

}
.container1 :empty{
    /* display:flex;
            flex-direction:row;
            height:600px; */
            /* width: 100px; */


}


        /* Page container styles */
        .container {
            /* max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 20px; */




        }
        .con{
            height: 600px;
        }
        /* .form1{
            width: 100%;

        } */
        .img5{
            /* width: 4%; */
             /* height:400px; */
             margin-top: 50px;

        }
        .img5 img{
             height:650px;
              width: 100%;
              opacity: 0; /* Initially hide the image */
              animation: fadeIn 1s ease-in-out forwards; /* Apply the animation */
              border: 2px solid #f0d4ac;
        }
        @keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}
        /* Card styles */
        .card {
            margin-bottom: 2px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            height: 400px;
            margin-top: 50px;



        }
        .card1{
            margin-bottom: 2px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            height: 650px;
            margin-top: 50px;

        }


        .card-header {
            background-color: #e75b1e;
            color: #211212;
            padding: 10px;
            margin-bottom: 20px;
        }

        .card-body {
            margin-bottom: 20px;
        }

        /* Form styles */
        .form-group {
            margin-bottom: 10px;


        }
        .col-md-6{
            margin-bottom:1px;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        .form-control1 {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #e75b1e;
            color: #0e0909;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
             background-color: #eff0f0; */
        }
            /* ... */


    /* ... */
    </style>
</head>
<body>
    {{-- <div id="app"> --}}
        {{-- <nav class="navbar">
            <a href="/">Home</a>
            <a href="/register">Register</a>
            <a href="/login">Login</a>
        </nav> --}}

        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
