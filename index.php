<!DOCTYPE html>
<!-- <html>
<head>
	<meta charset="utf-8">
	<title>Search User</title>
	<link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css">


	<script>
		function doesExist(str){
			if(str.length == 0){
				document.getElementById('output').innerHTML = '';
			} else {
				// AJAX REQUEST
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						document.getElementById('output').innerHTML = this.responseText;
					}
				}
				xmlhttp.open("GET", "check.php?q="+str, true);
				xmlhttp.send();
			}
		}
	</script>
</head>
<body>
	<div class="container">
		<h1>Search Users</h1>
		<form>
			Search User: <input type="text" class="form-control" onkeyup="doesExist(this.value)">
		</form>
		<p>Suggestions: <span id="output" style="font-weight:bold"></span></p>

	</div>

</body>
</html> -->

<html>
<head>
<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form action="">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>