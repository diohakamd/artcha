<html>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="/js/a-frame.js"></script>
<script src="/js/ar.js"></script>
{{-- jquery cdn --}}
<script src="https://code.jquery.com/jquery-3.6.0.slim.js"
integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
    .logo {
        position: absolute;
        bottom: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 5%;
        z-index: 100;
    }
    .start {
        position: absolute;
        background-color: #fff;
        bottom: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        z-index: 100;
    }
    .start h1{
        text-align: center;
    }
    .start h3{
        text-align: center;
    }
    .start button{
        position: absolute;
        bottom: 250;
    }
</style>
{{-- animation="property:rotation;to:360 360 0; dur:5000;loop:true; dir:alternate;" --}}

<body style="margin : 0px; overflow: hidden;">
    <input type="hidden" id="num" value="<?php echo $num; ?>">
    <img class="logo" src="/artcha/icon/logo.jpg" alt="">
    <div class="start">
        <h1>Set your phone to landscape
            <br><br>
           <span id="timer"></span>
        </h1>
    </div>
    <a-scene embedded arjs>
        <a-marker type="pattern" url="/artcha/marker_patt/pattern-2.patt" id="3Dobj-2"></a-marker>
        <a-marker type="pattern" url="/artcha/marker_patt/pattern-3.patt" id="3Dobj-3"></a-marker>
        <a-marker type="pattern" url="/artcha/marker_patt/pattern-4.patt" id="3Dobj-4"></a-marker>
        <a-marker type="pattern" url="/artcha/marker_patt/pattern-5.patt" id="3Dobj-5"></a-marker>
        <a-marker type="pattern" url="/artcha/marker_patt/pattern-6.patt" id="3Dobj-6"></a-marker>
        <a-marker type="pattern" url="/artcha/marker_patt/pattern-7.patt" id="3Dobj-7"></a-marker>
        <a-entity camera></a-entity>
        <a-light type="spot" position="0 0 4" intensity="1"></a-light>
    </a-scene>
</body>

</html>
<script>
    $(document).ready(function() {
        let get = $('#num').val();
        let num = get.split(",");
        $('#3Dobj-' + num[0]).html('<a-obj-model src="/artcha/3d/shield.obj" color="#662E9B" material="opacity:0.8" scale="0.07 0.07 0.07" position="0.1 0 -0.1" ></a-obj-model><a-obj-model src="/artcha/3d/text.obj" color="#F6F4F3" material="opacity:0.9" scale="0.07 0.07 0.07" position="0.1 0 -0.1" ></a-obj-model><a-obj-model src="/artcha/3d/line.obj" color="#F6F4F3" material="opacity:0.2" scale="0.07 0.07 0.07" position="0.1 0 -0.1"></a-obj-model>');
        $('#3Dobj-' + num[1]).html('<a-obj-model src="/artcha/3d/shield.obj" color="#276FBF" material="opacity:0.8" scale="0.07 0.07 0.07" position="0.1 0 -0.1" ></a-obj-model><a-obj-model src="/artcha/3d/text.obj" color="#F6F4F3" material="opacity:0.9" scale="0.07 0.07 0.07" position="0.1 0 -0.1" ></a-obj-model><a-obj-model src="/artcha/3d/line.obj" color="#F6F4F3" material="opacity:0.2" scale="0.07 0.07 0.07" position="0.1 0 -0.1"></a-obj-model>');
        $('#3Dobj-' + num[2]).html('<a-obj-model src="/artcha/3d/shield.obj" color="#F03A47" material="opacity:0.8" scale="0.07 0.07 0.07" position="0.1 0 -0.1" ></a-obj-model><a-obj-model src="/artcha/3d/text.obj" color="#F6F4F3" material="opacity:0.9" scale="0.07 0.07 0.07" position="0.1 0 -0.1" ></a-obj-model><a-obj-model src="/artcha/3d/line.obj" color="#F6F4F3" material="opacity:0.2" scale="0.07 0.07 0.07" position="0.1 0 -0.1"></a-obj-model>');
    });
    var counter = 4;
    var interval = setInterval(function() {
        counter--;
        $('#timer').html('>> '+counter+' <<');
        // Display 'counter' wherever you want to display it.
        if (counter == 0) {
            // Display a login box

            $('.start').css('visibility','hidden');
        }
    }, 1000);
</script>
