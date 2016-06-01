<?php $this->load->view('layouts/header'); ?>
    <style>
        /* code for animated blinking cursor */
        .typed-cursor{
            opacity: 1;
            font-weight: 100;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            -ms-animation: blink 0.7s infinite;
            -o-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
        }
        @-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-webkit-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-moz-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-ms-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-o-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
    </style>

<body>
 <header>
        <div class="wrap">
    
        <div class="type-wrap">
            <div id="typed-strings">
                <p style = "margin-top:10px">Hello I'm <strong>J.A.R.V.I.S.</strong></p>
                <p style = "margin-top:10px">I'm here to help you out with your IOTs</p>
                <p style = "margin-top:10px">Try it out!!</p>
            </div>
            <center><span id="typed" style="white-space:pre; color:#00ffff;"></span></center>
        </div></div>
 </header>
        
        <center><div class="encore">
        <div class="semi_arc e6">
      <div class="semi_arc_3 e5_1">
        <div class="semi_arc_3 e5_2">
          <div class="semi_arc_3 e5_3">
            <div class="semi_arc_3 e5_4">
            </div>
          </div>
        </div>
      </div>
      <div class="core"></div>
    </div>
</div></center>

        
    </div>
<div class="row">
    <div class="col-xs-4"></div>
    <div class="col-xs-4">
        <div class="row" style="transform: translate(0px, -30px);">
            <center>
            <div class="col-xs-6"><a href="signup" class="btn btn-raised btn-primary">Signup<div class="ripple-container"></div></a></div>
            <div class="col-xs-6"><a href="login" class="btn btn-raised btn-primary">Log in<div class="ripple-container"></div></a></div>
        </div></center>

    </div>
    <div class="col-xs-4"></div>
</div>

<?php $this->load->view('layouts/footer'); ?>