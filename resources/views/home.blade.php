<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body{
               background: rgba(211, 208, 208, 0.863);
               font-size: 1.5rem;
               font-family: sans-serif;
            }

           .flex{
              display:flex;
              justify-content: center;
              align-items:center; 
           }
           .center{
               text-align: center;
           }

           .m-b-t{
             margin: 50px 0 ;
           }
           
           h1{
               font-weight: 300;
               text-transform: uppercase;
           }

           a{
               color:rgba(75, 126, 177, 0.822);
               margin: 0 10px;
               text-decoration: none;
           }  

           a:hover{
              text-decoration: underline;
           }

    

        </style>
    </head>
    <body>
        <div class="center">
            <div class="content flex-center">
                <div class="m-b-t">
                 <h1>{{ $title }}</h1>
                </div>
            </div>

            <div class="content flex">
                <div>
                   <a href="{{ route('about') }}">About</a> 
                   <a href=" {{ route('contacts')}}">Contacts</a>
                   <a href=" {{ route('products')}}">Products</a>
                </div>
            </div>
        </div>
    </body>
</html>
