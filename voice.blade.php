<!DOCTYPE html>
<html lang="en-us">

  <head>
    <title>TKU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

	<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
  </head>
  <body>

    <section class="hero-wrap">
        <div class="row no-gutters slider-text align-items-baseline justify-content-end">
          <div class="col-md-12 text-center ftco-animate">
            <h1 class="mt-5" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">TKU-voice</h1>
            <h2>Multimedia</h2>
          </div>
        </div>
    </section>


    	<div class="container">
    		<div class="row justify-content-center mb-5">

			<div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
				<a href="{{ url('/') }}" class="tag-cloud-link">Home</a>
                <a href="{{ url('/image') }}" class="tag-cloud-link">Image</a>
                <a href="{{ url('/voice') }}" class="tag-cloud-link">Voice</a>
                <a href="{{ url('/word') }}" class="tag-cloud-link">Word</a>
                <a href="{{ url('/test') }}" class="tag-cloud-link">Test</a>
              </div>
            </div>
			</div>
		</div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-baseline justify-content-end">
          <div class="col-md-12 text-center ftco-animate">
            <h2>Voice Changer</h2>
              <button id="Btnrecord" type="button" name="button">record</button>
              <button id="Btnstop" type="button" name="button">stop</button>
              <button id="Btnplay" type="button" name="button">alien</button>
              <button id="Btnalienbotplay" type="button" name="button">alienbot</button>
              <button id="Btnreversetimeplay" type="button" name="button">reversetime</button>
              <button id="Btnrobotplay" type="button" name="button">robot</button>
              <button id="Btnastronautplay" type="button" name="button">astronaut</button>
			  
              
                <h2>變聲器(Voice Changer)<h2><br>
<h2>通過改變輸入聲音頻率，進而改變聲音的音色、音調，使輸出的聲音在感官上與原聲音不同</h2><br>

<h2>震盪器節點(Oscillator Node):</h2><p>
<h2>正弦波(Sine)、方波(Square)、鋸齒波(Sawtooth)、三角波(Triangle)、自訂波(custom)</h2><br>

<h2>增益節點(Gain Node):它是一個AudioNode音頻處理模塊，可以在輸入數據傳播到輸出之前將給定的增益應用於輸入數據</h2><br>

<h2>二階濾波器節點(Biquad Filter Node):</h2><br>
<h2>濾波器(filter)分為好幾種:</h2><p>
  <h2>低通濾波器(Low pass): 減弱(減少)頻率高於設定頻率的訊號(頻率)通過</h2><p>
  <h2>高通濾波器(High pass): 減弱(減少)頻率低於設定頻率的訊號(頻率)通過</h2><p>
  <h2>帶通濾波器(Band pass): 減弱(減少)頻率設定頻率範圍之外的訊號(頻率)通過</h2><p>
  <h2>低擱架式濾波器(Low shelf): 加強或減弱低於設定頻率的訊號(頻率)，高於設定的不會變化</h2><p>
  <h2>高擱架式濾波器(High shelf): 加強或減弱高於設定頻率的訊號(頻率)，低於設定的不會變化</h2><p>
  <h2>峰值濾波器(Peaking): 加強或減弱設定頻率之內的訊號(頻率)，範圍外則不會</h2><p>
  <h2>陷波濾波器(Notch):又稱帶阻濾波器(band-stop or band-rejection filter)，</h2><p>
  <h2>與帶通濾波器相反，給設定頻率範圍之外的訊號(頻率)通過，減弱設定頻率之內的訊號(頻率)</h2><p>
  <h2>全通濾波器(All pass): 允許所有的頻率通過，但改變了各種頻率之間的相位關係。</h2><p>

<h2>其他屬性:</h2><br>
  <h2>頻率(Frequency)</h2><p>
  <h2>品質參數(Q: Quality Factor)</h2><p>
  <h2>通過音量(Gain):適用於高、低擱架式和峰值濾波器。</h2><p>
             
            
            <h2>變聲器處理流程 Flowchart of Voice Changer</h2><br>
            <h2>
首先，先把錄音檔Wav轉為AudioBuffer，這樣才能進行接下來的處理，
處理完後把AudioBuffer回傳，然後再把AudioBuffer轉回Wav才能進行撥放。
            </h2>

            <img src="images/Alien.jpg">

            <h2>Voice snake game</h2>
            <h2>You can speak "up" "down" "left" "rignt" to control it</h2>
            <h2>or you can use arrow button to control it</h2><br>
            <div id="snake">
              <!-- Our sketch will go here! -->
            </div>
          </div>
        </div>
      </div>




  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script type="text/javascript">
    window.AudioContext = (window.AudioContext || window.webkitAudioContext);
    var globalAudioBuffer = null;
    if (navigator.mediaDevices) {
      console.log('getUserMedia supported.');

      var constraints = { audio: true };
      var chunks = [];
      navigator.mediaDevices.getUserMedia(constraints)
      .then(function(stream) {
          //let stream = await navigator.mediaDevices.getUserMedia({ audio:true, video:false });
          let mediaRecorder = new MediaRecorder(stream, {mimeType:"video/webm"});
          var Btnrecord = document.getElementById('Btnrecord'),
              Btnstop = document.getElementById('Btnstop'),
              Btnplay = document.getElementById('Btnplay');
          var r = false, s = false;

          Btnrecord.addEventListener('click', async function(){
              mediaRecorder.start();
              console.log(mediaRecorder.state);
              console.log("recorder started");

              mediaRecorder.ondataavailable = function(e) {
                chunks.push(e.data);
              }

          });
          Btnstop.addEventListener('click', function(){
              mediaRecorder.stop();

              console.log(mediaRecorder.state);
              console.log("recorder stopped");
          });
          mediaRecorder.onstop = async function(){
            console.log('Stopped, state = ' + mediaRecorder.state);

            let blob = new Blob(chunks, { type: mediaRecorder.mimeType });//+'; codecs=opus' });//
            let audioURL = window.URL.createObjectURL(blob);
            let arrayBuffer = await (await fetch(audioURL)).arrayBuffer();

            try {
              globalAudioBuffer = await (new AudioContext()).decodeAudioData(arrayBuffer);
            } catch(e) {
              alert("Sorry, your browser doesn't support a crucial feature needed to allow you to record using your device's microphone. You should use Chrome or Firefox if you want the best audio support, and ensure you're using the *latest version* of your browser of choice. Chrome and Firefox update automatically, but you may need to completely close down the browser and potentially restart your device to 'force' it to update itself to the latest version.");
            }
          }
        Btnplay.addEventListener('click', async function(){
            let outputAudioBuffer = await alien1Transform(globalAudioBuffer);
            let outputWavBlob = URL.createObjectURL(bufferToWave(outputAudioBuffer, outputAudioBuffer.length));
            let audio = document.createElement('audio');
            audio.src = outputWavBlob;
            document.body.appendChild(audio);
            audio.play();
          });
        Btnalienbotplay.addEventListener('click', async function(){
          let outputAudioBuffer1 = await alienRobot1Transform(globalAudioBuffer);
          let outputWavBlob1 = URL.createObjectURL(bufferToWave(outputAudioBuffer1, outputAudioBuffer1.length));
          let audio1 = document.createElement('audio');
          audio1.src = outputWavBlob1;
          document.body.appendChild(audio1);
          audio1.play();
          });
        Btnreversetimeplay.addEventListener('click', async function(){
          let outputAudioBuffer2 = await reverseTimeTransform(globalAudioBuffer);
          let outputWavBlob2 = URL.createObjectURL(bufferToWave(outputAudioBuffer2, outputAudioBuffer2.length));
          let audio2 = document.createElement('audio');
          audio2.src = outputWavBlob2;
          document.body.appendChild(audio2);
          audio2.play();
          });
        Btnrobotplay.addEventListener('click', async function(){
          let outputAudioBuffer3 = await robot1Transform(globalAudioBuffer);
          let outputWavBlob3 = URL.createObjectURL(bufferToWave(outputAudioBuffer3, outputAudioBuffer3.length));
          let audio3 = document.createElement('audio');
          audio3.src = outputWavBlob3;
          document.body.appendChild(audio3);
          audio3.play();
          });
        Btnastronautplay.addEventListener('click', async function(){
          let outputAudioBuffer4 = await astronautTransform(globalAudioBuffer);
          let outputWavBlob4 = URL.createObjectURL(bufferToWave(outputAudioBuffer4, outputAudioBuffer4.length));
          let audio4 = document.createElement('audio');
          audio4.src = outputWavBlob4;
          document.body.appendChild(audio4);
          audio4.play();
          });
        });
      }
  </script>
  <script src="js/alien.js"></script>
  <script src="js/alienbot.js"></script>
  <script src="js/reversetime.js"></script>
  <script src="js/robot.js"></script>
  <script src="js/astronaut.js"></script>
  <script src="js/BufferToWav.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/p5.min.js"></script>
  <script src="js/p5.dom.min.js"></script>
  <script src="js/p5.dom.js"></script>
  <script src="js/p5.sound.min.js"></script>
  <script src="js/p5.sound.js"></script>
  <script src="js/p5.speech.js"></script>
  <script src="js/snake1.js"></script>
  <script src="js/snake2.js"></script>
 <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>-->
  <script src="js/main.js"></script>

  </body>
</html>
