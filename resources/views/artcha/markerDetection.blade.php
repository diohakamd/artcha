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
    <a-scene embedded arjs>
        <a-marker type="pattern" url="/marker_patt/pattern-2.patt" id="3Dobj-2"></a-marker>
        <a-marker type="pattern" url="/marker_patt/pattern-3.patt" id="3Dobj-3"></a-marker>
        <a-marker type="pattern" url="/marker_patt/pattern-4.patt" id="3Dobj-4"></a-marker>
        <a-marker type="pattern" url="/marker_patt/pattern-5.patt" id="3Dobj-5"></a-marker>
        <a-marker type="pattern" url="/marker_patt/pattern-6.patt" id="3Dobj-6"></a-marker>
        <a-marker type="pattern" url="/marker_patt/pattern-7.patt" id="3Dobj-7"></a-marker>
        <a-entity camera></a-entity>
    </a-scene>
</body>

</html>
<script>
    function randomNumber() {
        return Math.floor(Math.random() * (7 - 2 + 1)) + 2;
    }

    $(document).ready(function() {

        var num1 = randomNumber(), num2 = randomNumber(),num3 = randomNumber();

        if (num2 == num1) {
            if (num2 == 7) {
                num2 = num2 - 1;
            } else {
                num2 = num2 + 1
            }
        }
        if (num3 == num1 || num3 == num2) {
            if (num3 == 7) {
                num3 = num3 - 1;
            } else {
                num3 = num3 + 1
            }
        }
        $('#3Dobj-' + num1).html('<a-box color="yellow" material="opacity:0.9" scale="0.5 0.5 0.5"></a-box>');
        $('#3Dobj-' + num2).html('<a-box color="red" material="opacity:0.9" scale="0.5 0.5 0.5"></a-box>');
        $('#3Dobj-' + num3).html('<a-box color="green" material="opacity:0.9" scale="0.5 0.5 0.5"></a-box>');

    });
</script>
