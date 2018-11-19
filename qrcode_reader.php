<html>
<head>
<!--C S S  H E R E-->
</head>

<script type="text/javascript" src="llqrcode.js"></script>
<script type="text/javascript" src="webqr.js"></script>

<body onload="load(); setimg();">
	<div id="main">
<div id="mainbody">
<div id="outdiv">
</div>
<div id="result"></div>
</div></div>           
<canvas id="qr-canvas" width="800" height="600"></canvas> <!--Canvas to draw image -->

<style type="text/css">
body{
    width:100%;
    text-align:center;
}
#qrfile{
    width:320px;
    height:240px;
}
#qr-canvas{
    display:none;
}
#outdiv
{
    width:320px;
    height:240px;
    border: solid;
    border-width: 1px 1px 1px 1px;
}
#result{
    border: solid;
    border-width: 1px 1px 1px 1px;
    padding:20px;
    width:37.3%;
}
#imghelp{
    position:relative;
    left:0px;
    top:-160px;
    z-index:100;
    font:18px arial,sans-serif;
    background:#f0f0f0;
    margin-left:35px;
    margin-right:35px;
    padding-top:10px;
    padding-bottom:10px;
    border-radius:20px;
}
p.helptext{
    margin-top:54px;
    font:18px arial,sans-serif;
}
p.helptext2{
    margin-top:100px;
    font:18px arial,sans-serif;
}
</style>
</body>
</html>