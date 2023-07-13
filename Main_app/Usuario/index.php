<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!--<link rel="stylesheet" href="../../css/bootstrap2.min.css"> -->
   <link rel="stylesheet" href="../../css/bootstrap2.min.css">
   <link rel="stylesheet" href="../../css/loginfacial.css">
   <link rel="stylesheet" href="../../css/style2.css">
   <!--<link rel="stylesheet" href="../../css/main.css">
   <link rel="stylesheet" href="../../css/style2.css">
   <link rel="stylesheet" href="../../css/workshops3.css"> -->
   <title>Identificación Facial</title>
   <?php include '../../inc/head_common.php';?>
   <br>
   <br>
   <br>
   <br>
</head>

<body class="bg-primary" onload="init()">
   <?php include '../../inc/header2.php'; ?>
   <br>
   <div class="card container text-center bordered" style="width:400px">
      <br>
      <h3 class="font-weight">IDENTIFICACIÓN FACIAL</h3>
      <form action="login.py" method="post" enctype="multipart/form-data">
         <video onclick="snapshot(this);" width=300 height=300 id="video" controls autoplay></video>
         <br>
         <br>
         <div class="form-group">
            <strong class="text-white">USUARIO</strong>
            <input type="email" placeholder="Email" name="email" class="form-control form-control-sm text-left">
         </div>

         <input type="text" accept="image/png" hidden name="current_image" id="current_image">
         <button onclick="login()" class="btn btn-primary btn-block" value="login">Iniciar </button>
         <br>
         <br>
      </form>
   </div>
   <canvas id="myCanvas" width="400" height="350" hidden></canvas>

   
</body>
<script>

   navigator.getUserMedia = (navigator.getUserMedia ||
      navigator.webkitGetUserMedia ||
      navigator.mozGetUserMedia ||
      navigator.msGetUserMedia);

   var video;
   var webcamStream;
   if (navigator.getUserMedia) {
      navigator.getUserMedia(

         // constraints
         {
            video: true,
            audio: false
         },

         // successCallback
         function (localMediaStream) {
            video = document.querySelector('video');
            video.srcObject = localMediaStream;
            webcamStream = localMediaStream;
         },

         // errorCallback
         function (err) {
            console.log("The following error occured: " + err);
         }
      );
   } else {
      console.log("getUserMedia not supported");
   }



   var canvas, ctx;

   function init() {
      // Get the canvas and obtain a context for
      // drawing in it
      mcanvas = document.getElementById("myCanvas");
      ctx = mcanvas.getContext('2d');
   }

   function login() {
      // Draws current image from the video element into the canvas
      ctx.drawImage(video, 0, 0, mcanvas.width, mcanvas.height);
      var dataURL = mcanvas.toDataURL('image/png');
      document.getElementById("current_image").value = dataURL;

   }

</script>
      
</html>