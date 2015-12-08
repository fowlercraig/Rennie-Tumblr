<div id="header-wrapper">
   <?php 
      // Available Classes for #header:
      // .forehead: adds some space above the nav.
      // .fivehead: adds a bunch of space above the nav.
      // .chin: adds some space below the nav.
   ?>
   <header id="header" class="menu-swap">
      <div class="fs-row">
         <menu id="header--nav_left" class="fs-cell fs-lg-3 fs-md-2 fs-sm-hide">
            <a href="#" class="btn btn--nav btn-hamburg swap" data-swap-target=".menu-swap">Menu</a>
         </menu>
         <menu id="header--logo" class="fs-cell fs-lg-6 fs-md-2 fs-sm-1 text-center">
            <a href="/" class="btn btn--nav btn-logo"><?php echo $siteName; ?></a>
         </menu>
      </div>
   </header>
</div>