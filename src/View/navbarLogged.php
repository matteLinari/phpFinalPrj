
<div>
<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a class="home-link" href="/">Home</a></li>
        <li><a class="news-link" href="/news">ITS news</a></li>
        <li><a class="contact-link" href="/contact">Contact</a></li>
        <li><a class="home-link" href="/dashboard">Manage Articles</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<li><a class="user-name" href="/user"><?=$POST['Name']?></a></li>
		<li style="margin:7px;"><a style="padding:6px;color:white;" class="btn btn-danger" href="/logout" role="button">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>