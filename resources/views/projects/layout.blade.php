<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div id="header">
    <ul>
        <a class="reg" href="/register">Register <br></a>
        <a class="login" href="/login">Login <br></a>
    </ul>
    <style>
        a.reg {
            left:250px;
            float:right;
            margin:0 2px;
        }
        a.login {
            left:230px;
            float:right;
            margin:0 2px;
        }
    </style>
    <div class="container">
        @yield('content')
    </div>
</div>
</body>
</html>