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
                   <p class="subheading">Karabük Üniversitesi ya da kısaca KBÜ, 2007 yılında kurulmuş bir devlet üniversitesidir.</p>
               </div>

               <ul class="aboutul">
                   <li> <i class="fa fa-check"></i>Bulunduğu il olan Karabük'ün ismini taşımaktadır.</li>
                   <li> <i class="fa fa-check"></i>2014-2015 Eğitim-Öğretim döneminden itibaren bünyesindeki 14 fakülte, 7 meslek yüksek okulu, 4 yüksek okul ve 4 enstitü ile akademik etkinliklerini sürdürmektedir.</li>
                   <li> <i class="fa fa-check"></i>Rektörlüğünü Refik Polat, Rektör Yardımcılıklarını Ali Güneş ve İbrahim Kadı yapmaktadır. </li>
                   <li> <i class="fa fa-check"></i>Kapalı Spor Salonunun yanı sıra, kampüs içerisinde bir adet basketbol sahası, bir adet tenis kortu ve bir adet voleybol sahası bulunmaktadır.</li>
                   <li> <i class="fa fa-check"></i>Üniversite bünyesindeki pek çok öğrenci kulübü veya topluluğu yıl boyunca çeşitli etkinlikler düzenlemektedir.</li>
                   <li> <i class="fa fa-check"></i>25.000 kişilik stadyum ve camii inşaatı 2013 yılında tamamlanmıştır.</li>
               </ul>

              <form method="get" action="{{route('aboutus')}}">
               <button type="submit" class="btn btn-primary slide">Daha fazla  <i class="fa fa-caret-right"></i> </button>
             </form>

           </div>
       </div>
   </div>
</section>


<section id="process">
   <div class="container">
       <div class="section-heading text-center">
           <div class="col-md-12 col-xs-12">
               <h1><span>Biz</span> Ne Yapıyoruz</h1>
               <p class="subheading">Ülkemizdeki bütün üniversiteli gençlerin bitirme projelerini, oluşturmuş olduğumuz bu platform aracılığıyla akademik camiayla paylaşmasını ve projeler hakkında geridönüşler almalarını sağlayarak diğer üniversite öğrencilerininde yaratıcı fikirler üretmesini sağlıyoruz.</p>
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
                   <h4><a href="#">Fikir</a></h4>
                   <p>Her gün yeni bir fikirle platformumuzu en iyi duruma getirmeye çalışıyoruz!</p>
               </div>
           </div>
           <div class="col-md-3 col-sm-6 block process-block">
               <div class="process-icon-holder">
                   <div class="process-border">
                       <span class="process-icon"><a href="#"><i class="fa fa-cloud-download feature_icon"></i></a></span></div>
                   <div class="clearfix"></div>
               </div>

               <div class="process-text-block">
                   <h4><a href="#">Konsept</a></h4>
                   <p>Üniversite öğrencilerinin düşünce anlayışıyla yola çıkarak her zaman daha faydalı olmaya çalışıyoruz!</p>
               </div>
           </div>
           <div class="col-md-3 col-sm-6 block process-block">
               <div class="process-icon-holder">
                   <div class="process-border">
                       <span class="process-icon"><a href="#"><i class="fa fa-magic feature_icon"></i></a></span></div>
                   <div class="clearfix"></div>
               </div>

               <div class="process-text-block">
                   <h4><a href="#">Tasarım</a></h4>
                   <p>Sade ve modern tasarımlarla kullanım kolaylığı yaratmank için elimizden geleni yapıyoruz!</p>
               </div>
           </div>
           <div class="col-md-3 col-sm-6 block process-block lastchild">
               <div class="process-icon-holder">
                   <div class="process-border">
                       <span class="process-icon"><a href="#"><i class="fa fa-cog feature_icon"></i></a></span></div>
                   <div class="clearfix"></div>
               </div>

               <div class="process-text-block">
                   <h4><a href="#">Geliştirme</a></h4>
                   <p>Sistemlerimizde en iyi optimizasyonu yakalamak adına profesyonel yazılım geliştirme ekipleriyle çalışıyoruz!</p>
               </div>
           </div>
       </div>

   </div>
</section>


<section id="testimonial">
   <div class="container">
       <div class="section-heading text-center">
           <div class="col-md-12 col-xs-12">
               <br><br><h1><span>Kullanıcılarımız </span>Neler söylüyor?</h1><br>
               <p class="subheading">Farklı üniversitelerdeki akademik kadrolarda yer alan öğretim üyelerimize sizler için sorduk...</p>
           </div>
       </div>

       <div class="row">
           <div class="col-md-4 col-sm-12 block ">
               <div class="testimonial_box">
                   <p>Ülkemizde ilk olan Bitirme Projeleri Sistemi'nin bütün akademik camiayı içerisinde barındırabilme özelliğine sahip olması gerçekten harika. </p>
               </div>
               <div class="arrow-down"></div>
               <div class="testimonial_user">
                   <div class="user-image"><img src="{{asset('assets')}}/img/user1.jpg" alt="user" class="img-responsive" style="height:80px; weight:150px;" /></div>
                   <div class="user-info">
                       <h5>Asst. Prof. Dr. Yüksel Çelik</h5>
                       <p>Karabük Üniversitesi</p>
                   </div>
               </div>
           </div>


           <div class="col-md-4 col-sm-12 block">
               <div class="testimonial_box">
                   <p>Henüz yeni kurulmuş olan bu platformun çok daha geniş kitlelere yayılacağına inanıyorum. Bütün öğrencilerimize faydalı olmasını umuyorum.</p>
               </div>
               <div class="arrow-down"></div>
               <div class="testimonial_user">
                   <div class="user-image"><img src="{{asset('assets')}}/img/user2.jpg" alt="user" class="img-responsive" style="height:80px; weight:150px;" /></div>
                   <div class="user-info">
                       <h5>Doç. Dr. İlhami M. ORAK</h5>
                       <p>Karabük Üniversitesi</p>
                   </div>
               </div>
           </div>

           <div class="col-md-4 col-sm-12 block">
               <div class="testimonial_box">
                   <p>Bitirme Projeleri Sistemi'nin ülkemizdeki bütün üniversiteli arkadaşlarımıza kendi projelerinde ilham kaynağı olacağı kaçınılmaz bir gerçek.</p>
               </div>
               <div class="arrow-down"></div>
               <div class="testimonial_user">
                   <div class="user-image"><img src="{{asset('assets')}}/img/user3.jpg" alt="user" class="img-responsive" style="height:80px; weight:150px;"/></div>
                   <div class="user-info">
                       <h5>Dr. Öğr. Üyesi Emrah Özkaynak</h5>
                       <p>Karabük Üniversitesi</p>
                   </div>
               </div>
           </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

           <div class="col-md-4 col-sm-12 block">
               <div class="testimonial_box">
                   <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset. </p>
               </div>
               <div class="arrow-down"></div>
               <div class="testimonial_user">
                   <div class="user-image"><img src="{{asset('assets')}}/img/user4.png" alt="user" class="img-responsive" style="height:80px; weight:150px;"/></div>
                   <div class="user-info">
                       <h5>Dr. Sadi Evren Şeker</h5>
                       <p>Antalya Bilim Üniversitesi</p>
                   </div>
               </div>
           </div>


           <div class="col-md-4 col-sm-12 block">
               <div class="testimonial_box">
                   <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset. </p>
               </div>
               <div class="arrow-down"></div>
               <div class="testimonial_user">
                   <div class="user-image"><img src="{{asset('assets')}}/img/user5.jpg" alt="user" class="img-responsive" style="height:80px; weight:150px;" /></div>
                   <div class="user-info">
                       <h5>Prof. Dr. Ali Saatçi</h5>
                       <p>Hacettepe Üniversitesi</p>
                   </div>
               </div>
           </div>


           <div class="col-md-4 col-sm-12 block">
               <div class="testimonial_box">
                   <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset. </p>
               </div>
               <div class="arrow-down"></div>
               <div class="testimonial_user">
                   <div class="user-image"><img src="{{asset('assets')}}/img/user6.png" alt="user" class="img-responsive" style="height:80px; weight:150px;" /></div>
                   <div class="user-info">
                       <h5>Prof. Dr. Hilmi KUŞÇU</h5>
                       <p>Trakya Üniversitesi</p>
                   </div>
               </div>
           </div>


       </div>
   </div>

</section>

@endsection
