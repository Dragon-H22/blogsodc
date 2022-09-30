<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Facebook Post Box Clone | CodingNepal</title>
    <link rel="stylesheet" href="{{url('./assets/css/create_style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAweome CDN Link for Icons -->
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <section class="post">
          <header>Create Post</header>
          <form action="store" method="post">
            <div class="content">
              <img src="{{url('./assets/images/hero.png')}}" alt="logo">
              <div class="details">
                <p>CodingNepal</p>
                <div class="privacy">
                  <i class="fas fa-user-friends"></i>
                  <span>Public</span>
                  <i class="fas fa-caret-down"></i>
                </div>
              </div>
            </div>
            <div class="options">
            <input type="text" placeholder="Add a title" name="title" class="title"/>
            </div>
            <textarea name="body" placeholder="What's on your mind, ?" spellcheck="false" required></textarea>
            <div class="theme-emoji">
             
            </div>
           <br><br>
            <input type="submit" value="Post" class="button"/>
          </form>
        </section>
        <section class="audience">
          <header>
            <div class="arrow-back"><i class="fas fa-arrow-left"></i></div>
            <p>Select Audience</p>
          </header>
          <div class="content">
            <p>Who can see your post?</p>
            <span>Your post will show up in News Feed, on your profile and in search results.</span>
          </div>
          <ul class="list">
            <li>
              <div class="column">
                <div class="icon"><i class="fas fa-globe-asia"></i></div>
                <div class="details">
                  <p>Public</p>
                  <span>Anyone on or off Facebook</span>
                </div>
              </div>
              <div class="radio"></div>
            </li>
            <li>
              <div class="column">
                <div class="icon"><i class="fas fa-lock"></i></div>
                <div class="details">
                  <p>Only me</p>
                  <span>Only you can see your post</span>
                </div>
              </div>
              <div class="radio"></div>
            </li>
          </ul>
        </section>
      </div>
    </div>

    <script>
      const container = document.querySelector(".container"),
      privacy = container.querySelector(".post .privacy"),
      arrowBack = container.querySelector(".audience .arrow-back");

      privacy.addEventListener("click", () => {
        container.classList.add("active");
      });

      arrowBack.addEventListener("click", () => {
        container.classList.remove("active");
      });
    </script>
    
  </body>
</html>