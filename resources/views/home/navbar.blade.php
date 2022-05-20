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
                             <li><a href="/loginuser">Oturum Aç</a></li>
                             <li><a href="/registeruser">Kayıt Ol</a></li>
                           @endauth



                       </ul>
                   </div>
                   <!--/.nav-collapse -->
               </div>
           </div>
       </nav>
   </header>
   <!--/.nav-ends -->
