@extends('layouts.app')


@section('content')
<main style="margin-top: 100px;">
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Blog right sidebar</h3>
              <p>
                Lorem ipsum dolor sit amet, modus salutatus honestatis ex mea. Sit cu probo putant. Nam ne impedit atomorum.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb notop">
            <li><a href="/">Home</a><span class="divider">/</span></li>
            <li class="active">Blog right sidebar</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span10 offset 1">
          <!-- start article 1 -->
          <article class="blog-post">
            <div class="post-heading">
              <h3><a href="#">Example article with thumbnail image</a></h3>
            </div>
            <div class="row">
              <div class="span4">
                <div class="post-image">
                  <a href="#"><img src="assets/img/dummies/blog1.jpg" alt="" /></a>
                </div>
              </div>
              <div class="span6">
                <ul class="post-meta">
                  <li class="first"><i class="icon-calendar"></i><span>March 03, 2013</span></li>
                <!--  <li><i class="icon-list-alt"></i><span><a href="#">3 comments</a></span></li>
                  <li class="last"><i class="icon-tags"></i><span><a href="#">Design</a>, <a href="#">Blog</a>, <a href="#">Tutorial</a></span></li> -->
                </ul>
                <div class="clearfix">
                </div>
                <p>
                  Ei eos suavitate forensibus mnesarchum. Eu est timeam vocibus, an nostro aliquam adipiscing quo. Zril equidem et quo, ad albucius scripserit sit. Vis constituto deseruisse an, interesset reprehendunt et mel, gloriatur concludaturque pro no. At ludus mediocritatem
                  qui, no vituperata assueverit accommodare his.
                </p>
                <button class="btn btn-small btn-success" type="button">Read more</button>
              </div>
            </div>
          </article>
          <!-- end article 1 -->
          <!-- start article 2 -->
          <article class="blog-post">
            <div class="post-heading">
              <h3><a href="#">This post uses nice video post format</a></h3>
            </div>
            <div class="row">
              
              <div class="span10">
                <ul class="post-meta">
                  <li class="first"><i class="icon-user"></i><span>March 03, 2013</span></li>
                  
                </ul>
                <div class="clearfix">
                </div>
                <p>
                  Ei eos suavitate forensibus mnesarchum. Eu est timeam vocibus, an nostro aliquam adipiscing quo. Zril equidem et quo, ad albucius scripserit sit. Vis constituto deseruisse an, interesset reprehendunt et mel, gloriatur concludaturque pro no. At ludus mediocritatem
                  qui, no vituperata assueverit accommodare his.
                </p>
                <button class="btn btn-small btn-success" type="button">Read more</button>
              </div>
            </div>
          </article>
          <!-- end article 2 -->
          <!-- start article 3 -->
          <article class="blog-post">
            <div class="post-heading">
              <h3><a href="#">Great blog post with quote post format</a></h3>
            </div>
            <div class="row">
              <div class="span3">
                <div class="post-image">
                  <a href="#"><img src="assets/img/dummies/blog3.jpg" alt="" /></a>
                </div>
              </div>
              <div class="span7">
                <ul class="post-meta">
                  <li class="first"><i class="icon-user"></i><span>March 03, 2013</span></li>
                  
                </ul>
                <div class="clearfix">
                </div>
                <p>
                  Ei eos suavitate forensibus mnesarchum. Eu est timeam vocibus, an nostro aliquam adipiscing quo. Zril equidem et quo, ad albucius scripserit sit. Vis constituto deseruisse an, interesset reprehendunt et mel, gloriatur concludaturque pro no. At ludus mediocritatem
                  qui, no vituperata assueverit accommodare his.
                </p>
                <button class="btn btn-small btn-success" type="button">Read more</button>
              </div>
            </div>
          </article>
          <!-- end article 3 -->
          <div class="pagination">
            <ul>
              <li><a href="#">Prev</a></li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </div>
        </div>
        <!--<div class="span4">
          <aside> 
            <div class="widget">
              <form class="form-search">
                <input placeholder="Type something" type="text" class="input-medium search-query">
                <button type="submit" class="btn btn-flat btn-color">Search</button>
              </form>
            </div>
            <div class="widget">
              <h4>Categories</h4>
              <ul class="cat">
                <li><a href="#">Web design (114)</a></li>
                <li><a href="#">Internet news (15)</a></li>
                <li><a href="#">Tutorial and tips (20)</a></li>
                <li><a href="#">Design trends (15)</a></li>
                <li><a href="#">Online business (10)</a></li>
              </ul>
            </div>
            <div class="widget">
              <h4>Recent posts</h4>
              <ul class="recent-posts">
                <li><a href="#">Lorem ipsum dolor sit amet munere commodo ut nam</a>
                  <div class="clear">
                  </div>
                  <span class="date"><i class="icon-calendar"></i> 6 March, 2013</span>
                  <span class="comment"><i class="icon-comment"></i> 4 Comments</span>
                </li>
                <li><a href="#">Sea nostrum omittantur ne mea malis nominavi insolens</a>
                  <div class="clear">
                  </div>
                  <span class="date"><i class="icon-calendar"></i> 6 March, 2013</span>
                  <span class="comment"><i class="icon-comment"></i> 2 Comments</span>
                </li>
                <li><a href="#">Eius graece recusabo no pri odio tale quo id, mea at saepe</a>
                  <div class="clear">
                  </div>
                  <span class="date"><i class="icon-calendar"></i> 4 March, 2013</span>
                  <span class="comment"><i class="icon-comment"></i> 12 Comments</span>
                </li>
                <li><a href="#">Malorum deserunt at nec usu ad graeco elaboraret at rebum</a>
                  <div class="clear">
                  </div>
                  <span class="date"><i class="icon-calendar"></i> 3 March, 2013</span>
                  <span class="comment"><i class="icon-comment"></i> 3 Comments</span>
                </li>
              </ul>
            </div>
            <div class="widget">
              <h4>Tags</h4>
              <ul class="tags">
                <li><a href="#" class="btn">Tutorial</a></li>
                <li><a href="#" class="btn">Tricks</a></li>
                <li><a href="#" class="btn">Design</a></li>
                <li><a href="#" class="btn">Trends</a></li>
                <li><a href="#" class="btn">Online</a></li>
              </ul>
            </div>
          </aside> 
        </div>-->
      </div>
    </div>
  </section>
  </main>
  @endsection