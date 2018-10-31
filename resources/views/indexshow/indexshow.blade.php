<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Shan Lei</title>
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="{{ URL::asset('css/indexShowCss/style.css') }}">

<style type="text/css">
    body{
        margin:0;
        padding:0;
        text-align:center;
    }
    #particles{
        position:absolute;
        width:100%;
        height:100%;
    }
    .full-height{
        background-color:#fff;
        color:#6289ad;
        font-family:'Raleway';
        font-weight:100;
        height:100vh;
        margin:0;
        overflow:hidden;
    }
    .full-height{
        height:100vh;
    }
    .flex-center{
        align-items:center;
        display:flex;
        justify-content:center;
    }
    .position-ref{
        position:relative;
    }
    .top-right{
        position:absolute;
        right:10px;
        top:18px;
    }
    .content{
        margin: 0 auto; 
        /* border: 1px solid #F00; */
        margin-top: -50px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        height: 240px;
        width: 70%;
    }
    .title{
        font-size:84px;
    }
    .description{
        margin:30px 0;
        font-size:24px;
        font-weight:bold;
    }
    .links>a{
        color:#9caebf;
        padding:0 25px;
        font-size:14px;
        font-weight:600;
        letter-spacing:.1rem;
        text-decoration:none;
        text-transform:uppercase;
    }
    .links>a:hover{
        color:#52697f;
    }
    .m-b-md{
        margin-bottom:30px;
    }
    .avatar{
        width:120px !important;
    }
</style>
</head>
<body>

<div id="particles-js"></div>


<div class="content">
    <div class="title m-b-md">
            <img class="avatar img-circle" src="{{ URL('/images/default_avatar.png') }}" alt="Shanlei Blog">
    </div>
    <div class="description">
        Nothing is impossible.  
    </div>
    <div class="links">
        <a href="/article">Blog</a>
        <a href="#">Share</a>
        <a target="_blank" href="http://weibo.com/1839900520">Weibo</a>
        <a target="_blank" href="https://github.com/2686685661">GitHub</a>
        <a href="/about">Me</a>
        <a href="/donate">Donate</a>
    </div>
</div>




<!-- scripts -->
<script src="{{ URL::asset('js/indexShowJs/particles.min.js') }}"></script>
<script src="{{ URL::asset('js/indexShowJs/app.js') }}"></script>

</body>
</html>