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
        <a-marker type="pattern" url="/marker_patt/pattern-2.patt">
            <a-box color="yellow" material="opacity:0.5" scale="0.5 0.5 0.5"></a-box>
        </a-marker>
        <a-marker type="pattern" url="/marker_patt/pattern-3.patt">
            <a-box color="blue" material="opacity:0.5" scale="0.5 0.5 0.5"></a-box>
        </a-marker>
        <a-marker type="pattern" url="/marker_patt/pattern-4.patt">
            <a-box color="green" material="opacity:0.5" scale="0.5 0.5 0.5"></a-box>
        </a-marker>
        <a-marker type="pattern" url="/marker_patt/pattern-5.patt">
            <a-box color="red" material="opacity:0.5" scale="0.5 0.5 0.5"></a-box>
        </a-marker>
        <a-marker type="pattern" url="/marker_patt/pattern-6.patt">
            <a-box color="purple" material="opacity:0.5" scale="0.5 0.5 0.5"></a-box>
        </a-marker>
        <a-marker type="pattern" url="/marker_patt/pattern-7.patt">
            <a-box color="black" material="opacity:0.5" scale="0.5 0.5 0.5"></a-box>
        </a-marker>

        <a-entity camera></a-entity>
    </a-scene>
</body>

</html>
