<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>E-Com Project</title>
</head>
<body>
    @include('header')
    @yield('content')
    @include('footer')
</body>

<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }

    .my-footer{
        position:relative;
        width:100%;
    }

    .slider-text{
        background-color: #35443585  !important;
    }

    .tredning-image{
        height: 100px
    }

    .trening-item{
        float: left;
        width: 20%

    }

    .trending-wrapper{
        margin:30px;
    }

    .link_page{
        text-decoration: none;
    }

    .search-box{
        width: 500px !important;
    }
</style>

<script>
   /* $(document).ready(function()
    {
        $("button").click(function()
        {
            alert("all set");
        })
    })*/



</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
