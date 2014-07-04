<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:700);

        body {
            margin:0;
            font-family:'Lato', sans-serif;
        }

        .container{
            margin: 30px auto;
            padding: 10px;
            background-color: #dedede;
        }
    </style>
</head>
<body>
<div class="container">
    @yield('content')
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>

<!-- Custom Script -->
<script>
    $(function(){
        $('#userDateOfBirth').datepicker({
            'startView' : ''
        })
    });
</script>
</body>
</html>
