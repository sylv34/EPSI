<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <style>
        img{
            position: absolute;
            left: 0%;
            top: 0%;
        }
    </style>
    <body>
        <div id='pano'>
            <map name="exemple-map-1">
                <area id="test" shape="rect" coords="0,0 200,200" href=""/>
                <area shape="default" />
            </map>
            <img height="800px" usemap="#exemple-map-1" src="/img/test_pano.jpg">
        </div>
        <div id="log"></div>
    </body>
</html>
<script>
    $('#test').on('click', function(e){
        e.preventDefault();
        $('img').prop('src', '/img/autre_test.jpg');
        $(this).attr('coords', '0,0 100,100');
    });
    $( "#pano" ).mousemove(function( event ) {
        var msg = "Handler for .mousemove() called at ";
        msg += event.pageX + ", " + event.pageY;
        $( "#log" ).append( "<div>" + msg + "</div>" );
    });
</script>