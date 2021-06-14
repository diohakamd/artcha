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
    <a-scene embedded arjs>
        <a-marker preset="hiro">
            <a-entity gltf-model="{{ asset('lieutenantHead/a.gltf') }}" position="0 -10 0"></a-entity>
        </a-marker>
        <a-entity camera>
            <a-cursor></a-cursor>
        </a-entity>
    </a-scene>
</body>

</html>
