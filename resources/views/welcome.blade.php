<html>

<script
    src="https://cdn.jsdelivr.net/gh/aframevr/aframe@1c2407b26c61958baa93967b5412487cd94b290b/dist/aframe-master.min.js">
</script>
<script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js"></script>


<body style="margin : 0px; overflow: hidden;">
    <a-scene embedded arjs>
        <a-marker preset="hiro">
            <a-box color="#ff0000" scale="0.5 0.5 0.5" animation__putar="property:rotation; from:0 0 0; to:0 360 0; startEvents:mouseenter"></a-box>
        </a-marker>
        <a-entity camera>
            <a-cursor></a-cursor>
        </a-entity>
    </a-scene>
</body>
</html>
