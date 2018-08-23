<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JS变量</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <script type="text/javascript" src="/static/js/jquery-1.8.3.min.js"></script>
    <style type="text/css">

    </style>
</head>
<body>
    <button>获取ajax的按钮</button>
</body>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('button').click(function(){
        $.post("/doajaxs",{},function(data){
            alert(data);
        });
    });
</script>
</html>