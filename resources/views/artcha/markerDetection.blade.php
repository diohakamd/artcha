<html>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script
    src="https://cdn.jsdelivr.net/gh/aframevr/aframe@1c2407b26c61958baa93967b5412487cd94b290b/dist/aframe-master.min.js">
</script>
<script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js"></script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">



<body style="margin : 0px; overflow: hidden;">
    <a-scene embedded arjs="detectionMode:mono_and_matrix;matrixCodeType:3x3_PARITY65" >
        <a-marker preset="hiro">
            <a-box color="red" material="opacity:0.5" scale="0.5 0.5 0.5"></a-box>
        </a-marker>
        <a-marker type="pattern" url="/pattern-telkom.patt">
            <a-box color="red" material="opacity:0.5" scale="0.5 0.5 0.5"></a-box>
        </a-marker>
        <a-entity camera>
            <a-cursor></a-cursor>
        </a-entity>
    </a-scene>
</body>

</html>
{{-- <!doctype HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    </head>
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
    <script src="https://rawgit.com/jeromeetienne/AR.js/master/aframe/build/aframe-ar.min.js"></script>
    <script src="https://rawgit.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
    <body style='margin : 0px; overflow: hidden;'>
        <!-- kita akan menambahkan detectionMode dan matrixCodeType untuk memberitahu ke AR.js untuk mengenali kode unik -->
        <a-scene embedded arjs="detectionMode:mono_and_matrix;matrixCodeType:3x3_PARITY65" >


         <a-marker preset="barcode" value="5">
            <a-box color="red" material="opacity:0.5" scale="0.5 0.5 0.5"></a-box>
        </a-marker>

        <!-- gunakan <a-entity camera> untuk mendukung tanda yang ganda, selain itu, gunakan <a-marker-camera> sebagai pengganti </a-marker> -->
        <a-entity camera></a-entity>
        </a-scene>
    </body>
</html> --}}
