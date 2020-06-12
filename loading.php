<div class="bgloading">
  <div class="loader">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
    <div class="bounce4"></div>
    <div class="logo">
      <!-- <img src="{<LOADING.1.-1>}" alt="{<LOADING#ALT>}" title="{<LOADING#TITLE>}"> -->
      <img src="theme/frontend/images/logo.png" alt="" title=""/>
    </div>
  </div>  
</div>
<style type="text/css">
  .bgloading{
    position: fixed;
    z-index: 99999;
    background: rgb(255, 255, 255);
    width: 100%;
    height: 100%;
    top: 0px;
    left:0px;
    display: flex;justify-content: center;align-items: center;
  }

  .bgloading .loader {
    width: 120px;
    height: 120px;
    position: relative;
    border-radius: 50%;
    display: flex;
    align-items: center;justify-content: center;
    /* border-top: 5px solid #1c733c; */
    /* border-left: 5px solid white; */
    /* border-bottom: 5px solid #f6dd79; */
    /* border-right: 5px solid #e87719; */
    /* -webkit-animation: load9 1.1s infinite linear; */
    /* animation: load9 1.1s infinite linear; */
  }
  .bgloading .loader .logo {
    width: 75%;
    position: relative;
    z-index: 999;
    /* -webkit-animation: load8 1.1s infinite linear; */
    /* animation: load8 1.1s infinite linear; */
    border-radius: 999px;

  }
  .bgloading .loader .logo img {
    width: 100%;
    background: #fff;
    z-index: 5;
    border-radius: 999px;
  }
  @-webkit-keyframes load8 {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }

  @keyframes load8 {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }

  @-webkit-keyframes load9 {
    0% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
    100% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
  }

  @keyframes load9 {
    0% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
    100% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
  }
  .bounce1, .bounce2, .bounce3,.bounce4{
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: solid thin #e7f1f8;
    opacity: 0.7;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-animation: spreadout 1.5s infinite ease-in-out;
    animation: spreadout 1.5s infinite ease-in-out;
  }

  .bounce2 {
    -webkit-animation-delay: -0.9s;
    animation-delay: -0.9s;
    border: solid thin #95caef;
  }

  .bounce3 {
    -webkit-animation-delay: -1.5s;
    animation-delay: -1.5s;
    border: solid thin #45a3e4;
  }
  .bounce4 {
    -webkit-animation-delay: -2.1s;
    animation-delay: -2.1s;
    border: solid thin #60b2ea;
  }

  @-webkit-keyframes spreadout {
    0% {
      -webkit-transform: scale(0.5);
    }
    50% {
      -webkit-transform: scale(1.5);
    }
    75% {
      -webkit-transform: scale(2.5);
    }
    100% {
      opacity: 0;
    }
  }
  @keyframes spreadout {
    0% {
      -webkit-transform: scale(0.5);
    }
    50% {
      -webkit-transform: scale(1.5);
    }
    75% {
      -webkit-transform: scale(2.5);
    }
    100% {
      opacity: 0;
    }
  }
</style>