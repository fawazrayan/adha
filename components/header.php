<header>
  <div class="container_12">
    <div class="grid_12">

      <h1 class="logo">
        
        <a href="index.php">

          <div class="logo"><img src="assets/images/logo.png" alt=""></div>
        

        </a>
      </h1>
    </div>
    <div class="clear"></div>
  </div>
  <section id="stuck_container">
  <!--==============================
              Stuck menu
  =================================-->
   
  <div class="container_12">
        <div class="grid_12">          
          <div class="navigation">
            <nav>
              <ul class="sf-menu">
               <li <?php if($_SERVER['REQUEST_URI'] == '/adha/' || $_SERVER['REQUEST_URI'] == '/adha/index.php'){echo "class='current'"; } ?> ><a href="index.php">Home</a></li>
               <li <?php if($_SERVER['REQUEST_URI'] =='/adha/about.php') {echo "class='current'";} ?>> <a href="about.php">About</a></li>
               <li <?php if($_SERVER['REQUEST_URI'] =='/adha/getInvolved.php') {echo "class='current'";} ?>> <a href="getInvolved.php">Get Involved</a></li>
               <li <?php if($_SERVER['REQUEST_URI'] =='/adha/membership.php') {echo "class='current'";} ?>><a href="membership.php">Membership</a></li>
               <li <?php if($_SERVER['REQUEST_URI'] =='/adha/contacts.php') {echo "class='current'";} ?>><a href="contacts.php">Contacts</a></li>
             </ul>
            </nav>
            <div class="clear"></div>
          </div>       
         <div class="clear"></div>  
     </div> 
     <div class="clear"></div>
    </div> 
  </section>

</header>