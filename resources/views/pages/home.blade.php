@extends('layouts.app')
<!--@section('title', 'Page Title')-->

@section('content')
  <style>
  @media (min-width: 767px) and (max-width: 979px){
    .features{
      width: 44%;
      margin-bottom: 20px;
    }
    .features-row{
      display: flex;
      flex-wrap: wrap;
    }

   
  }
   @media (max-width: 766px){
    
    .features{
      width: 100%;
      margin-bottom: 20px;
    }
    .features-row{
      display: flex;
      flex-wrap: wrap;
    }
  }
  </style>
	<section id="intro" style="width: 100vw; min-width: 320px; margin-top: 85px; position: absolute;">
    	<div class="jumbotron masthead">
      <div class="container">
        
        
        <div class="row">
          <div class="span12">
            <div id="slider_holder">
              <div id="sequence">
                <ul>
                  <!-- Layer 1 -->
                  <li>
                    <div class="info animate-in" style="display: block">
                      <h2 style="padding: 5px 10px;">Уютный Мир</h2>
                      <br>
                      <h3>Управляющая компания</h3>
                      <!--<p class="home-big-text">
                        Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                      </p> -->
                     <!-- <a class="btn btn-success" href="#">Learn more &raquo;</a>-->
                    </div>
                    <img class="slider_img animate-in home-big-img" src="assets/img/city.png" alt="" >
                  </li>
                  <!-- Layer 2 -->
                
                </ul>
              </div>
            </div>
            <!-- Sequence Slider::END-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <main style="margin-top: 570px;" class="home-main">
  <section id="maincontent">
    <div class="container">
      <div class="row features-row">
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-suitcase left active"></i>
          <h5 style="max-width: 270px;">Качество</h5>
          <div class="dotted_line">
          </div>
          <p class="left">
           Мы предоставляем комплексный сервис в области управления, технического обслуживания и эксплуатации жилых домов.
          </p>
          
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-plane left"></i>
          <h5 style="max-width: 270px; word-break: break-all">Эффективность</h5>
          <div class="dotted_line">
          </div>
          <p class="left">
            <span style="font-style: italic;">"Уютный мир"</span> гарантирует своевременное исполнение договорных обязательств.
          </p>
          
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-wrench left"></i>
          <h5 style="max-width: 270px;">Цели</h5>
          <div class="dotted_line">
          </div>
          <p class="left">
            Наша цель - профессиональное предоставление качественных услуг.
          </p>
         
        </div>
        
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-leaf left"></i>
          <h5 style="max-width: 270px;">Прозрачность</h5>
          <div class="dotted_line">
          </div>
          <p class="left">
            Наша компания предоставляет исчерпывающие отчеты о проведенных работах.
          </p>
         
        </div>
      </div>
      <div class="row">
        <div class="span12">
          <div class="tagline centered">
            <div class="row">
              <div class="span12" style="margin-left: 0;">
                <div class="tagline_text">
                  <h3 class="contact_with_us_h3">Свяжитесь с нами</h2>
                  <!--
                  <p>
                    Стимулирование коммьюнити, не меняя концепции, изложенной выше, уравновешивает конвергентный сходящийся ряд.
                  </p>-->
                
                </div>
                <div class="btn-toolbar cta">
                  <a class="btn btn-large btn-color span4 offset4" href="/contacts">
							 Наши контакты </a>
                 
                </div>
              </div>
            </div>
          </div>
          <!-- end tagline -->
        </div>
      </div>
      @if(count($news))
      
      <div class="row" style="">
        <div class="home-posts">
          <div class="span12">
            <h3>Свежие новости</h3>
          </div>
         @foreach($news as $n)      
            <div class="span4" style="margin-top: 30px;">
              <div class="post-image">
                <a href="{{$n->thumb == '' ?  asset('assets/img/news.png') : $n->thumb}}" target="_blank"><img src="{{$n->thumb == '' ?  asset('assets/img/news.png') : $n->thumb}}" alt=""></a>
              </div>
             <!-- <div class="entry-meta">
                <i class="icon-square icon-48 icon-pencil left"></i>
                <span class="date">{{$n->mydate}}</span>
              </div>
               end .entry-meta -->
              <div class="entry-body" style="margin-left: 0;">
                  
                  <span class="date">{{$n->mydate}}</span>
                  
                  <h5 class="" style="padding-top: 10px;">{{$n->title}}</h5>
                
                <div class="tiny-text">
                  {!! $n->content !!}
                </div>
                <div style="clear: both"></div>
                
              </div>
              <!-- end .entry-body -->
              <div class="clear">
              </div>
            </div>
          @endforeach    
         
        </div>
        @endif
      </div>
    </div>
  </section>
</main>

@endsection
