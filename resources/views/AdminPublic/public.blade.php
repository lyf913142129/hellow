<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <script type="text/javascript" src="jquery-1.8.3.min.js"></script>
    <style type="text/css">
        #header{
            width: 100%;
            height:200px;
            background-color: red;
        }
        #footer{
            width: 100%;
            height:200px;
            background-color: yellow;
        }
    </style>
</head>
<body>
<div id="header">header</div>
@section('main')
    @show
<div id="footer">footer</div>
</body>
<script type="text/javascript">

</script>
</html>