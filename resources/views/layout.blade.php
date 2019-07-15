<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

@yield ('content')
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
    </div>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/projects/create">Create</a></li>
    </ul>
</body>

</html>