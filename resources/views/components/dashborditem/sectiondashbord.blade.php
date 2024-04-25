<div className="body">

    <!-- style this div with display flex -->
    <nav class="sidebar">
    <div class="menu_content">
      <ul class="menu_items">
        <div class="menu_title menu_dahsboard"></div>
        <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
        <!-- start -->
        <li class="item">
          <div href="#" class="nav_link submenu_item">
            <span class="navlink_icon">
              <i class="bx bx-home-alt"></i>
            </span>
            <span class="navlink">Gestion </span>
            <i class="bx bx-chevron-right arrow-left"></i>
          </div>
          <ul class="menu_items submenu">
          <a href="" class="nav_link sublink">vehicule</a>


            <a  href="" class="nav_link sublink">parent</a>
            <a href="" class="nav_link sublink">Rais</a>
            <a href="" class="nav_link sublink">Region</a>
<!-- start -->
<a href="#" class="nav_link sublink" id="especes">Especes</a>
<ul id="nouveau_menu" class="menu_items submenu">
<!-- Ajoutez ici vos liens de sous-menu -->
<li class="item">
  <a href="#" class="nav_link sublink">Sous-menu 1</a>
</li>
<li class="item">
  <a href="#" class="nav_link sublink">Sous-menu 2</a>
</li>
</ul>
<!-- end -->
         
          </ul>
        </li>
        <!-- end -->

        <!-- duplicate this li tag if you want to add or remove  navlink with submenu -->
        <!-- start -->
        <li class="item">
          <div href="#" class="nav_link submenu_item">
            <span class="navlink_icon">
              <i class="bx bx-grid-alt"></i>
            </span>
            <span class="navlink">statistique</span>
   
          </div>
        </li>
        <!-- end -->
      </ul>

      <ul class="menu_items">
        <!-- duplicate these li tag if you want to add or remove navlink only -->
        <!-- Start -->
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bxs-magic-wand"></i>
            </span>
            <span class="navlink">Referentiels de depenses</span>
          </a>
        </li>
        <!-- End -->

        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-loader-circle"></i>
            </span>
            <span class="navlink">Prise</span>
          </a>
        </li>
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-cloud-upload"></i>
            </span>
            <span class="navlink">Fiche</span>
          </a>
        </li>
      </ul>
      <ul class="menu_items">
        <div class="menu_title menu_setting"></div>
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-flag"></i>
            </span>
            <span class="navlink">Notice board</span>
          </a>
        </li>
      
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-cog"></i>
            </span>
            <span class="navlink">Setting</span>
          </a>
        </li>
       
      </ul>

      <!-- Sidebar Open / Close -->
      <div class="bottom_content">
        <div class="bottom expand_sidebar">
          <span> Expand</span>
          <i class='bx bx-log-in' ></i>
        </div>
        <div class="bottom collapse_sidebar">
          <span> Collapse</span>
          <i class='bx bx-log-out'></i>
        </div>
      </div>
    </div>
     </nav>
    
  </div> 