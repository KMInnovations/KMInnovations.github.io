@extends('adminlte::page')

@section('title', 'Error Page')

@section('content_header')
    <h1>Error!</h1>
@stop
<style>
/*
CUSTOM ERROR 404 PAGE LAYOUT BY TAUFIK NURROHMAN
11 OCTOBER 2012 - LIFE IS BE U TO FULL
https://latitudu.blogspot.com/blablablah
*/

/* body {
  background: 0 0;
  height: auto;
  font: normal normal 11px/16px Tahoma, Verdana, Arial, Sans-Serif;
  color: #666;
  text-shadow: 0 1px 0 #000;
} */

.page-loader {
  display: none;
}

.error-page {
  /* background-color: #0f0f0f; */
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 5;
  /* -webkit-box-shadow: inset 0 2px 5px #000, inset 0 2px 10px #000;
  -moz-box-shadow: inset 0 2px 5px #000, inset 0 2px 10px #000;
  box-shadow: inset 0 2px 5px #000, inset 0 2px 10px #000; */
}

.error-404 {
  width: 800px;
  height: 110px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -55px auto auto -400px;
  overflow: hidden;
}

.error-404 i {
  display: block;
  float: left;
  width: 9px;
  height: 9px;
  margin: 0 1px 1px 0;
  background-color: #ff3399;  /* error color*/
}

.js .error-404 i {
  opacity: 0;
}

.error-404 .blank {
  background: 0 0;
}

.error-404 .blank.nf-text {
  background-color: #ff3399 !important;
}

.screen-reader-text {
  font: normal normal 0/0 a;
  text-shadow: none;
  position: absolute;
  top: -9999px;
  left: -9999px;
}

a.credit,
a.credit:active,
a.credit:hover {
  color: #2c2c2c;
  text-transform: uppercase;
  text-decoration: none;
  font-size: 10px;
  font-weight: 700;
  display: block;
  position: absolute;
  bottom: 8px;
  right: 12px;
}

a.credit:hover {
  color: #555;
}

a.credit:active {
  color: #999;
}

@media (max-width:800px) {
  .error-404 {
    width: 400px;
    height: 55px;
    margin: -28px auto auto -200px;
  }
  .error-404 i {
    width: 4px;
    height: 4px;
  }
}

@media (max-width:400px) {
  .error-404 {
    width: 240px;
    height: 33px;
    margin: -17px auto auto -120px;
  }
  .error-404 i {
    width: 2px;
    height: 2px;
  }
}
</style>
@section('content')

<script>document.documentElement.className="js";</script><section class="error-page" data-author="Taufik Nurrohman" id="error-page"><h1 aria-hidden="true" class="screen-reader-text">ERROR 404 - NOT FOUND</h1><div class="error-404"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i></i><i class="nf"></i><i></i><i class="blank"></i><i class="blank nf"></i><i class="blank"></i><i></i><i class="nf"></i><i class="nf"></i><i class="blank"></i><i></i><i class="nf"></i><i class="nf"></i><i class="blank nf"></i><i class="blank"></i><i class="blank"></i><i class="nf"></i><i class="nf"></i><i class="nf"></i><i class="blank"></i><i></i><i class="nf"></i><i class="nf"></i><i class="blank"></i><i class="blank"></i><i class="blank nf"></i><i></i><i></i><i class="nf"></i><i class="blank"></i><i class="blank nf"></i><i class="blank"></i><i class="blank"></i><i class="nf"></i><i></i><i class="nf"></i><i class="nf"></i><i class="nf"></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i class="nf"></i><i class="nf"></i><i></i><i class="nf"></i><i></i><i class="nf"></i><i></i><i></i><i class="blank nf"></i><i></i><i></i><i class="nf"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="nf"></i><i></i><i></i><i class="blank"></i><i class="nf"></i><i></i><i></i><i class="nf"></i><i></i><i class="nf"></i><i></i><i></i><i class="nf"></i><i class="blank"></i><i class="blank nf"></i><i class="blank nf"></i><i class="blank"></i><i class="nf"></i><i></i><i class="nf"></i><i class="blank"></i><i></i><i class="nf"></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i class="nf"></i><i></i><i class="nf"></i><i class="nf"></i><i></i><i class="nf"></i><i></i><i></i><i class="blank nf"></i><i></i><i></i><i class="nf"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="nf"></i><i class="nf"></i><i class="nf"></i><i class="blank"></i><i class="nf"></i><i></i><i></i><i class="nf"></i><i></i><i class="nf"></i><i></i><i></i><i class="nf"></i><i class="blank"></i><i class="blank nf"></i><i class="blank"></i><i class="nf"></i><i class="nf"></i><i></i><i class="nf"></i><i class="blank"></i><i></i><i class="nf"></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i class="nf"></i><i></i><i></i><i class="nf"></i><i></i><i class="nf"></i><i></i><i class="blank"></i><i class="blank nf"></i><i></i><i></i><i class="nf"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="nf"></i><i></i><i></i><i class="blank"></i><i class="nf"></i><i></i><i></i><i class="nf"></i><i></i><i class="nf"></i><i></i><i></i><i class="blank nf"></i><i class="blank"></i><i class="blank nf"></i><i class="blank"></i><i></i><i class="nf"></i><i></i><i class="nf"></i><i></i><i></i><i class="nf"></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i class="nf"></i><i></i><i class="blank"></i><i class="blank nf"></i><i></i><i></i><i class="nf"></i><i class="nf"></i><i class="blank"></i><i></i><i></i><i class="nf"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="nf"></i><i></i><i></i><i class="blank"></i><i></i><i class="nf"></i><i class="nf"></i><i class="blank"></i><i class="blank"></i><i></i><i class="nf"></i><i class="nf"></i><i></i><i class="blank"></i><i class="blank nf"></i><i class="blank"></i><i></i><i class="nf"></i><i></i><i class="nf"></i><i class="nf"></i><i class="nf"></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i></i><i></i><i></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i class="blank"></i><i></i><i></i><i></i><i class="blank"></i></div></section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!');
    
    ! function(a) {
  var b = a(window),
    c = a(".error-404 i"),
    d = c.not(".blank"),
    e = d.length,
    f = null,
    g = 0;
  d.attr("data-delay", function() {
    return Math.floor(Math.random() * e);
  }), b.on("load", function() {
    d.each(function() {
      var b = a(this),
        d = parseInt(b.data("delay"), 10);
      f = setTimeout(function() {
        g++, b.stop().animate({
          opacity: 1
        }, 600), g === e && (clearTimeout(f), setTimeout(function() {
          c.each(function(b) {
            "blank nf" === this.className && this.setAttribute("data-delay", b);
            var c = a(this),
              d = parseInt(c.data("delay"), 10);
            setTimeout(function() {
              c.hasClass("nf") ? c.addClass("nf-text").stop().animate({
                opacity: 1
              }, 800) : c.stop().animate({
                opacity: .02
              }, 800);
            }, 1 * d);
          });
        }, 3e3));
      }, 1 * d);
    });
  });
}(jQuery);
</script>
@stop