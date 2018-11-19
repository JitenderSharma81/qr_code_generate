<!DOCTYPE html>
<html lang="en">
<head>
<title>QR-Code Generator</title>
</head>
<body>
    <form id="generator">
        <label for="codeData">Enter Name</label>
        <input type="text" id="codeData" name="codeData" size="50" placeholder="Enter Name" />
        <label for="codeSize">Size:</label>
        <select id="codeSize" name="codeSize">
            <option value="75">XSmall</option>
            <option value="155">Small</option>
            <option value="186">Medium</option>
            <option value="248" selected="selected">Large</option>
            <option value="300">XLarge</option>
            <option value="450">XXLarge</option>
        </select>
        <button id="generate">generate</button>
    </form>

    <div id="image"></div>
    <div id="link"></div>
    <div id="code"></div>
	
	
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>	
	<script>
	$("#generate").click(function() {
    var data = $("#codeData").val();
    var size = $("#codeSize").val();
	
    if(data == "") {
        alert('please enter a url or text');
        return false;
    } else {
        if( $("#image").is(':empty')) {
            $("#image").append("<img src='http://chart.apis.google.com/chart?cht=qr&chl=" + data + "&chs=" + size + "' alt='qr' />");
           
            return false;
        } else {
            $("#image").html("");
            $("#link").html("");
            $("#code").html("");
            $("#image").append("<img src='http://chart.apis.google.com/chart?cht=qr&chl=" + data + "&chs=" + size + "' alt='qr' />");
           
            return false;
        }
    }
});
		</script>
		
		<style>
			div {margin-bottom:20px;}
#code textarea {
      font-family:"Courier New", Courier, monospace;
      background:#ccc;
      color:#000;
      font-size:11px;
      width:400px;
}
</style>
</body>
</html>
	