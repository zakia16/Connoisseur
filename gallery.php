<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Connoisseur</title>
	<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="styles/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="styles/paging.css" />
	<script type="text/javascript" src=" jquery-1.6.min.js"></script>
	
	<script type="text/javascript" src="scripts/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript">
				$(document).ready(function() {
				$("a.fancyimage").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'	});
				});
	</script>
	</head>
	<body>
    <div id="container">
      <header>
        <nav>
          <ul id="nav">
            <li><a href="index.php" >Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="gallery.php" class="current">Gallery</a></li>
			 <li><a href="login.php">Login</a></li>
			 <li><a href="reviews.php">Reviews</a></li>
            <li><a href="contact.php">Contact</a></li>
          
          </ul>
        </nav>
      </header>
      <div class="wrapper">
        <div class="border"></div>
        <article class="fullwidth gallery">
          <h3>Gallery</h3>
          <a class="fancyimage" href="images/gallery/1.jpeg"><img src="images/gallery/1.jpeg" width="200" height="200" alt="" /></a> <a class="fancyimage" href="images/gallery/2.jpg"><img src="images/gallery/2.jpg" width="200" height="200" alt="" /></a> <a class="fancyimage" href="images/gallery/3.jpeg"><img src="images/gallery/3.jpeg" width="200" height="200" alt="" /></a> <a class="fancyimage" href="images/gallery/4.jpg"><img src="images/gallery/4.jpg" width="200" height="200" alt="" /></a> <a class="fancyimage" href="images/gallery/5.jpeg"><img src="images/gallery/5.jpeg" width="200" height="200" alt="" /></a> <a class="fancyimage" href="images/gallery/6.jpg"><img src="images/gallery/6.jpg" width="200" height="200" alt="" /></a> <a class="fancyimage" href="images/gallery/7.jpeg"><img src="images/gallery/7.jpeg" width="200" height="200" alt="" /></a> <a class="fancyimage" href="images/gallery/8.jpg"><img src="images/gallery/8.jpg" width="200" height="200" alt="" /></a> </article>
      </div> 
              <div class="a">
			
			
			<div class="pagerDB">
<span class="pagerDB-list">
<strong class="pagerDB-current">1</strong>
<a href="2.html" class="pagerDB-next active" title="Go to page 2">2</a>
<a href="" class="pagerDB-next active" title="Go to page 3">3</a>
<a href="" class="pagerDB-next active" title="Go to page 4">4</a>
<a href="" class="pagerDB-next active" title="Go to page 5">5</a>
<a href="" class="pagerDB-next active" title="Go to page 6">6</a>
<a href="" class="pagerDB-next active" title="Go to page 7">7</a>
<a href="" class="pagerDB-next active" title="Go to page 8">8</a>
<a href="" class="pagerDB-next active" title="Go to page 9">9</a>
<span class="pagerDB-ellipsis">…</span></span>
<a href="" class="pagerDB-next active" title="Go to next page">next ›</a>
<a href="" class="pagerDB-last active" title="Go to last page">last »</a>
</div>

			
			
			  </div>
      <footer>
        <div class="border"></div>
             <br />
       
        <center>&copy; Copyright 2013 - All Rights Reserved - GROUP 6
</center>      
<div class="border"></div>
             <br />

</footer>
    </div>
</body>
</html>