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

<script src="js/bootstrap.min.js"></script>
</body>
</html>
