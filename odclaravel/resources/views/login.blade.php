<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="/resources/views/templatemo_553_xtra_blog/css/login.css">
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form action ="{{url('postlogin')}}" method="post">
        @csrf
            <div class="txt_field">
                <input type="text" name="email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>

            <input type="submit" value="Login">
        </form>
    </div>

</body>

</html>