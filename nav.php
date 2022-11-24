   <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container navbar-wrap">
  <a class="navbar-brand" href="#"><img src="img/blaisewise.png" height="28"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse ml-auto" id="navbarNav">
    <ul class="navbar-nav mr-md-5 ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item"><?php if(isset($_SESSION["uid"])){ echo "<a class=\"nav-link\" href=\"sign-out.php\">Sign Out</a>";} ?></li>
      
    </ul>
  </div>
  </div>
</nav>