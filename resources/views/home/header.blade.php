<body id="wrapper">

    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-7 top-header-links">
                    <ul class="contact_links">
                        <li><i class="fa fa-phone"></i><a href="#">{{$setting->phone}}</a></li>
                        <li><i class="fa fa-envelope"></i><a href="#">{{$setting->email}}</a></li>
                        <li><i class="fa fa-bookmark"></i><a href="#">{{$setting->title}}</a></li>
                    </ul>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5 social">
                    <ul class="social_links">
                      @auth <li><a href="http://127.0.0.1:8000/user/profile"><font color="white"><u><b>{{Auth::user()->name}}</b></u> &nbsp; &nbsp;</font></a></li> @endauth
                        <li><a href="{{$setting->twitter}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{$setting->linkedin}}"><i class="fa fa-linkedin"></i></a></li>


                    </ul>
                </div>
            </div>
        </div>
        </div>

    </section>

    <header>
