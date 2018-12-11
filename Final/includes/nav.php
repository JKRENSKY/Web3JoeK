<script type="text/javascript">

 $(function() {
    var header = $(".navbar");
  
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 150) {
            header.addClass("scrolled");
        } else {
            header.removeClass("scrolled");
        }
    });
  
});
</script>

</head>
<body>
	<nav class="navbar navbar-expand-md  fixed-top">
      <a class="navbar-brand" href="index.php" style="color: #f48941; border-style: none; font-size: 200%; vertical-align: baseline;padding-left: 20px;">TerpChef</a>
      <button class="navbar-toggler" fixed-top type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarsExample04">
        <ul class="navbar-nav mr-auto " >
        <li class="nav-item ">
            <a class="nav-link" href="build.php" >BUILD</a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="faq.php">FAQ </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">BLOG</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="shopcart.php">CART</a> 


          </li>  
         
            <div id="cart-container" >
              <span id="dis">
                 <i class="fa fa-shopping-cart" style="font-size:24px; color: white;"></i>
              </span>
            <div id="cart">
             
              
            </div>

            <span id="itemCount"></span>
          </div>
              

        </ul>
</div>
 </nav>

        



      
   

