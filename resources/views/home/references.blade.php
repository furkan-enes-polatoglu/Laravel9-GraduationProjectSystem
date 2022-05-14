@extends('layouts.frontbase')

@section('title','Referanslar | '.$setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('head')

@section('content')
<section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>HİÇBİRİMİZ HEPİMİZ KADAR İYİ OLAMAYIZ</h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4>Referanslar</h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;">Anasayfa<span class="sep"> 	/ </span><span class="current"> Referanslar</span></div>
                </div>
            </div>
        </div>

        </div>
    </section>


    <section id="contact-page">
        <div class="container">


                    <div class="section-heading">
                        <h2>Referanslarımız</h2><br>
                    </div>

                        {!! $setting->references !!}






        </div>
    </section>



    <section id="skills">
        <div class="titlebar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 xol-md-12 col-sm-12 col-xs-12">
                        <div class="section-heading text-center">
                            <h2>Our <span>Skills</span></h2>
                            <p class="subheading">Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset nam nostrud euismod volumus ne mei.</p>
                        </div>



                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-6 block mybox">
                                <div class="progress color progress-bar-1">
                                    <span class="progress-left">
                    <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                    <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value">90%</div>

                                </div>
                                <div class="progress-title">
                                    <h5>Portal Development</h5>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6 block mybox">
                                <div class="progress color progress-bar-2">
                                    <span class="progress-left">
                    <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                    <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value">75%</div>
                                </div>
                                <div class="progress-title">
                                    <h5>Enterprise Mobility</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 block mybox">
                                <div class="progress color progress-bar-3">
                                    <span class="progress-left">
                    <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                    <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value">60%</div>
                                </div>
                                <div class="progress-title">
                                    <h5>Start Up</h5>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6 block mybox">
                                <div class="progress color progress-bar-4">
                                    <span class="progress-left">
                    <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                    <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value">80%</div>
                                </div>
                                <div class="progress-title">
                                    <h5>Product Development</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
    </section>
    <section id="team-member">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 xol-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading text-center">
                        <h1>Our <span>Team</span></h1>
                        <p class="subheading">Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset nam nostrud euismod volumus ne mei.</p>
                    </div>
                    <div class="wpb_column vc_column_container col-md-3 col-sm-6 col-xs-6 block mybox">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="our-team main-info-below-image">
                                    <div class="our-team-inner">
                                        <div class="our-team-image">
                                            <img src="img/team-4.jpg" />
                                            <div class="qodef-circle-animate"></div>
                                            <div class="our-team-position-icon">
                                                <span class="qodef-icon-shortcode circle">
        			<i class="qodef-icon-simple-line-icon qodef-icon-element fa fa-cog"></i>
            </span>
                                            </div>
                                            <h6 class="q_team_position">Developer</h6>
                                        </div>
                                        <div class="our-team-info">
                                            <div class="our-team-title-holder">
                                                <h5 class="our-team-name">Lorem Ipsum</h5>
                                            </div>
                                            <div class='our-team-text-inner'>
                                                <div class='our-team-description'>
                                                    <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container col-md-3 col-sm-6 col-xs-6 block mybox">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="our-team main-info-below-image">
                                    <div class="our-team-inner">
                                        <div class="our-team-image">
                                            <img src="img/team-4.jpg" />
                                            <div class="qodef-circle-animate"></div>
                                            <div class="our-team-position-icon">
                                                <span class="qodef-icon-shortcode circle">
        				<i class="qodef-icon-simple-line-icon fa fa-pencil qodef-icon-element"></i>
    					</span>
                                            </div>
                                            <h6 class="q_team_position">Graphic Designer</h6>
                                        </div>
                                        <div class="our-team-info">
                                            <div class="our-team-title-holder">
                                                <h5 class="our-team-name">Lorem Ipsum</h5>
                                            </div>
                                            <div class='our-team-text-inner'>
                                                <div class='our-team-description'>
                                                    <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container col-md-3 col-sm-6 col-xs-6 block mybox">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="our-team main-info-below-image">
                                    <div class="our-team-inner">
                                        <div class="our-team-image">
                                            <img src="img/team-4.jpg" />
                                            <div class="qodef-circle-animate"></div>
                                            <div class="our-team-position-icon">
                                                <span class="qodef-icon-shortcode circle">
        					<i class="qodef-icon-simple-line-icon fa fa-hashtag qodef-icon-element"></i>
            		</span>
                                            </div>
                                            <h6 class="q_team_position">Accountant</h6>
                                        </div>
                                        <div class="our-team-info">
                                            <div class="our-team-title-holder">
                                                <h5 class="our-team-name">Lorem Ipsum</h5>
                                            </div>
                                            <div class='our-team-text-inner'>
                                                <div class='our-team-description'>
                                                    <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container col-md-3 col-sm-6 col-xs-6 block mybox">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="our-team main-info-below-image">
                                    <div class="our-team-inner">
                                        <div class="our-team-image">
                                            <img src="img/team-4.jpg" />
                                            <div class="qodef-circle-animate"></div>
                                            <div class="our-team-position-icon">
                                                <span class="qodef-icon-shortcode circle ">
						        <i class="qodef-icon-simple-line-icon fa fa-wrench qodef-icon-element" ></i>
			            </span>
                                            </div>
                                            <h6 class="q_team_position">Engineer</h6>
                                        </div>
                                        <div class="our-team-info">
                                            <div class="our-team-title-holder">
                                                <h5 class="our-team-name">Lorem Ipsum</h5>
                                            </div>
                                            <div class='our-team-text-inner'>
                                                <div class='our-team-description'>
                                                    <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
