<html>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script
src="https://cdn.jsdelivr.net/gh/aframevr/aframe@1c2407b26c61958baa93967b5412487cd94b290b/dist/aframe-master.min.js">
</script>
<script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js"></script>
{{-- jquery cdn --}}
<script src="https://code.jquery.com/jquery-3.6.0.slim.js"
integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


<body style="margin : 0px; overflow: hidden;">
    <input type="hidden" id="num" value="{{ $num }}">

    <a-scene embedded arjs>
        <a-marker type="pattern" url="/artcha/marker_patt/pattern-2.patt" id="3Dobj-2"></a-marker>
        <a-marker type="pattern" url="/artcha/marker_patt/pattern-3.patt" id="3Dobj-3"></a-marker>
        <a-marker type="pattern" url="/artcha/marker_patt/pattern-4.patt" id="3Dobj-4"></a-marker>
        <a-marker type="pattern" url="/artcha/marker_patt/pattern-5.patt" id="3Dobj-5"></a-marker>
        <a-marker type="pattern" url="/artcha/marker_patt/pattern-6.patt" id="3Dobj-6"></a-marker>
        <a-marker type="pattern" url="/artcha/marker_patt/pattern-7.patt" id="3Dobj-7"></a-marker>
        <a-entity camera></a-entity>
    </a-scene>
</body>

</html>
<script>
    $(document).ready(function() {
        let get = $('#num').val();
        let num = get.split(",");
        $('#3Dobj-' + num[0]).html('<a-box color="yellow" material="opacity:0.9" scale="0.5 0.5 0.5"></a-box>')
        $('#3Dobj-' + num[1]).html('<a-box color="red" material="opacity:0.9" scale="0.5 0.5 0.5"></a-box>')
        $('#3Dobj-' + num[2]).html('<a-box color="green" material="opacity:0.9" scale="0.5 0.5 0.5"></a-box>')
    });
</script>
