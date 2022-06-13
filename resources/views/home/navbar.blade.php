<style>
#logo {
  background-repeat: no-repeat;
  width: auto; /*or your image's width*/
  height: auto; /*or your image's height*/
  margin: -15px;
  padding: 0;
}
</style>

<nav class="navbar navbar-inverse">
           <div class="container">
               <div class="row">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       </button>


                       <a class="navbar-brand" href="#">
                         <div id="logo">
                           <img src="{{asset('assets')}}/img/logo.png">
                         </div>
                   </div>
                   <div id="navbar" class="collapse navbar-collapse navbar-right">
                       <ul class="nav navbar-nav">
                           <li class=""><a href="{{route('home')}}">Anasayfa</a></li>
                           <!-- <li><a href="/features">Özellikler</a></li> -->
                           <li><a href="{{route('aboutus')}}">Hakkımızda</a></li>
                           <li><a href="{{route('project')}}">Projeler</a></li>
                           <li><a href="{{route('faq')}}">SSS</a></li>
                           <li><a href="{{route('references')}}">Referanslar</a></li>
                           <li><a href="{{route('contact')}}">İletişim</a></li>
                           @auth
                            <li><a href="/logoutuser">Çıkış Yap</a></li>
                           @else


                           <style>
                           /* Style The Dropdown Button */
                           .dropbtn {
                             background-color: #4CAF50;
                             color: white;
                             padding: -5px;
                             font-size: 16px;
                             border: none;
                             cursor: pointer;
                           }

                           /* The container <div> - needed to position the dropdown content */
                           .dropdown {
                             position: relative;
                             display: inline-block;
                           }

                           /* Dropdown Content (Hidden by Default) */
                           .dropdown-content {
                             display: none;
                             position: absolute;
                             background-color: #f9f9f9;
                             min-width: 175px;
                             box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                             z-index: 1;
                           }

                           /* Links inside the dropdown */
                           .dropdown-content a {
                             color: black;
                             padding: 12px 16px;
                             text-decoration: none;
                             display: block;
                           }

                           /* Change color of dropdown links on hover */
                           .dropdown-content a:hover {background-color: #f1f1f1}

                           /* Show the dropdown menu on hover */
                           .dropdown:hover .dropdown-content {
                             display: block;
                           }

                           /* Change the background color of the dropdown button when the dropdown content is shown */
                           .dropdown:hover .dropbtn {
                             background-color: #3e8e41;
                           }
                           </style>

                           <div  class="dropdown">
                             <button class="dropbtn"><b>Oturum Aç</b> & <b>Kayıt Ol</b></button>
                             <div class="dropdown-content">
                               <a href="/loginuser">Oturum Aç</a>
                               <a href="/registeruser">Kayıt Ol</a>

                             </div>
                           </div>




                             <!--<li><a href="/loginuser">Oturum Aç</a></li>-->
                             <!--<li><a href="/registeruser">Kayıt Ol</a></li>-->
                           @endauth



                       </ul>
                   </div>
                   <!--/.nav-collapse -->
               </div>
           </div>
       </nav>
   </header>
   <!--/.nav-ends -->
