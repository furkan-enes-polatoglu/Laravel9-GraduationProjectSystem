@extends('layouts.frontbase')

@section('title',$setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('slider')
  @include('home.slider')
@endsection

@section('content')


<section id="features">
   <div class="container">
       <div class="row">
           <div class="col-md-4 col-xs-12 block">
               <div class="col-md-2 col-xs-2"><i class="fa fa-laptop feature_icon"></i></div>
               <div class="col-md-10 col-xs-10">
                   <h4>Bitirme Projeleri Veritabanı</h4>
                   <p>Öğrencilerimizin mezuniyet projelerini akademik camiaya sunmak adına, sizler için bir veritabanı oluşturduk.</p>

               </div>
           </div>
           <div class="col-md-4 col-xs-12 block">
               <div class="col-md-2 col-xs-2"><i class="fa fa-bullhorn feature_icon"></i></div>
               <div class="col-md-10 col-xs-10">
                   <h4>Hızlı Erişim</h4>
                   <p>Verilere çok daha hızlı erişebilmeniz için sade, anlaşılır ve normalize edilmiş bir yapı oluşturduk.</p>
               </div>
           </div>
           <div class="col-md-4 col-xs-12 block">
               <div class="col-md-2 col-xs-2"><i class="fa fa-support feature_icon"></i></div>
               <div class="col-md-10 col-xs-10">
                   <h4>Teknik Destek</h4>
                   <p>Herhangi bir sorunla karşılaşmanız halinde destek ekiplerimiz ile iletişime geçmekten çekinmeyin.</p>
               </div>
           </div>
       </div>
   </div>
</section>


<section id="about">
   <div class="image-holder col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
       <div class="background-imgholder">
           <img src="{{asset('assets')}}/img/1.jpg" alt="about" class="img-responsive" style="display:none;" />
       </div>
   </div>

   <div class="container-fluid">

       <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-2 col-xs-12 text-inner ">
           <div class="text-block">
               <div class="section-heading">
                   <h1>HAKKIMIZDA</h1>
                   <p class="subheading">Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut.</p>
               </div>

               <ul class="aboutul">
                   <li> <i class="fa fa-check"></i>Vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum.</li>
                   <li> <i class="fa fa-check"></i>legimus copiosae instructior ei ut vix denique fierentis atqui mucius consequat ad pro.</li>
                   <li> <i class="fa fa-check"></i>Ea saperet inimicu ut qui dolor oratio maiestatis ubique mnesarchum.</li>
                   <li> <i class="fa fa-check"></i>Sanctus voluptatibus et per illum noluisse facilisis quo atqui mucius ad pro.</li>
                   <li> <i class="fa fa-check"></i>At illum noluisse facilisis quo te dictas epicurei suavitate qui his ad.</li>
                   <li> <i class="fa fa-check"></i>Tantas propriae mediocritatem id vix qui everti efficiantur an ocurreret consetetur.</li>
               </ul>

               <button type="button" class="btn btn-primary slide">Learn More  <i class="fa fa-caret-right"></i> </button>


           </div>
       </div>
   </div>
</section>


<section id="process">
   <div class="container">
       <div class="section-heading text-center">
           <div class="col-md-12 col-xs-12">
               <h1><span>Biz</span> Ne Yapıyoruz</h1>
               <p class="subheading">Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset nam nostrud euismod volumus ne mei.</p>
           </div>
       </div>

       <div class="row">
           <div class="col-md-3 col-sm-6 block process-block">
               <div class="process-icon-holder">
                   <div class="process-border">
                       <span class="process-icon"><a href="#"><i class="fa fa-lightbulb-o feature_icon"></i></a></span></div>
                   <div class="clearfix"></div>
               </div>

               <div class="process-text-block">
                   <h4><a href="#">Idea</a></h4>
                   <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
               </div>
           </div>
           <div class="col-md-3 col-sm-6 block process-block">
               <div class="process-icon-holder">
                   <div class="process-border">
                       <span class="process-icon"><a href="#"><i class="fa fa-cloud-download feature_icon"></i></a></span></div>
                   <div class="clearfix"></div>
               </div>

               <div class="process-text-block">
                   <h4><a href="#">Concept</a></h4>
                   <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
               </div>
           </div>
           <div class="col-md-3 col-sm-6 block process-block">
               <div class="process-icon-holder">
                   <div class="process-border">
                       <span class="process-icon"><a href="#"><i class="fa fa-magic feature_icon"></i></a></span></div>
                   <div class="clearfix"></div>
               </div>

               <div class="process-text-block">
                   <h4><a href="#">Design</a></h4>
                   <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
               </div>
           </div>
           <div class="col-md-3 col-sm-6 block process-block lastchild">
               <div class="process-icon-holder">
                   <div class="process-border">
                       <span class="process-icon"><a href="#"><i class="fa fa-cog feature_icon"></i></a></span></div>
                   <div class="clearfix"></div>
               </div>

               <div class="process-text-block">
                   <h4><a href="#">Develop</a></h4>
                   <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
               </div>
           </div>
       </div>

   </div>
</section>


<section id="testimonial">
   <div class="container">
       <div class="section-heading text-center">
           <div class="col-md-12 col-xs-12">
               <h1>What Our <span>Client Says</span></h1>
               <p class="subheading">Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset nam nostrud euismod volumus ne mei.</p>
           </div>
       </div>

       <div class="row">
           <div class="col-md-4 col-sm-12 block ">
               <div class="testimonial_box">
                   <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset. </p>
               </div>
               <div class="arrow-down"></div>
               <div class="testimonial_user">
                   <div class="user-image"><img src="{{asset('assets')}}/img/user1.png" alt="user" class="img-responsive" /></div>
                   <div class="user-info">
                       <h5>Lorem Ipsum</h5>
                       <p>Manager</p>
                   </div>
               </div>
           </div>


           <div class="col-md-4 col-sm-12 block">
               <div class="testimonial_box">
                   <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset. </p>
               </div>
               <div class="arrow-down"></div>
               <div class="testimonial_user">
                   <div class="user-image"><img src="{{asset('assets')}}/img/user1.png" alt="user" class="img-responsive" /></div>
                   <div class="user-info">
                       <h5>Lorem Ipsum</h5>
                       <p>Manager</p>
                   </div>
               </div>
           </div>

           <div class="col-md-4 col-sm-12 block">
               <div class="testimonial_box">
                   <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset. </p>
               </div>
               <div class="arrow-down"></div>
               <div class="testimonial_user">
                   <div class="user-image"><img src="{{asset('assets')}}/img/user1.png" alt="user" class="img-responsive" /></div>
                   <div class="user-info">
                       <h5>Lorem Ipsum</h5>
                       <p>Manager</p>
                   </div>
               </div>
           </div>


       </div>
   </div>

</section>

@endsection
