<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
</head>
<h1>Create Page</h1>
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
</div>

<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/contact">Contact</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/projects">Projects</a></li>

</ul>
<form method="POST" action="/projects">
    {{ csrf_field() }}
    <div>
        <input type="text" name="title" placeholder="Project title" value="{{ old('title') }}" required>
    </div>
    <div>
        <textarea name="description" placeholder="Project description" required> {{ old('description') }} </textarea>
    </div>
    <div>
        <button type="submit">Create Project</button>
    </div>
    @include('errors')
</form>
</body>

</html>