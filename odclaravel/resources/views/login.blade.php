<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>HTML5 Login Form with validation Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
  <link rel="stylesheet" href="./assets/css/login_style.css" />
</head>

<body>
  <div id="login-form-wrap">
    <h2>Login</h2>
    <form id="login-form" action="{{url("loginrequest")}}" method="post">
      @csrf
      <p>
        <input type="text"  name="email" placeholder="Email Address" required /><i class="validation"><span></span><span></span></i>
      </p>
      <p>
        <input type="password"  name="password" placeholder="password" required /><i class="validation"><span></span><span></span></i>
      </p>
      <p>
        <input type="submit" nvalue="Login" />
      </p>
    </form>
    <div id="create-account-wrap">

    </div>
  </div>

</body>

</html>