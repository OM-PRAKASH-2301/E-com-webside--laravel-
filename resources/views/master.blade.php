<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com project</title>
    <!-- Add this inside the <head> tag -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Add this inside the <head> tag -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Add this just before the closing </body> tag -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    {{ View::make('header')}}
    @yield('content')
    {{ View::make('footer')}}
</body>
<style>
    
    img.slider-img
    {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        height: 600px !important;
        width: 100%;
    
        
    }
    .slider-text{
        background-color: #24465454 !important;
    }
    .trending-img
    {
        height: 100px;
    }
    .trending-wrapper{
        background-color: #24465454;
    }
    .trend{
        margin-top: 20px;
        margin-bottom: 20px;
        text-align: center;
    }
    .trending-items
    {
        float: left;
        width: 18%;
        margin-left: 20px;
    }
    .paddingbottom{
        padding-bottom: 100px;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 400px !important;
    }
    .cart-list-divider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
    .top-header{
        margin-left: 15px;
        margin-top: 5px;
        text-align: center;
        
    }

</style>

</html>