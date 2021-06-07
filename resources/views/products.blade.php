<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
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
<body>
    <h2>PRODUCTS SECTION </h2>
    <a href=" {{ route('home')}} ">Back Home</a>
</body>
</html>