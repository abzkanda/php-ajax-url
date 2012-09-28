<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>MVC/PHP/AJAX</title>
        <script src="jquery.js"></script>
        <link href="style.css" rel="stylesheet" />
        <script type="text/javascript">
		$(document).ready(function () {
			$(".submit").click(function() {
				var urlFilter = /^[http://www.|www.][\S]+[a-zA-Z0-9\-\.]+\.(com)$/;
 				var url = $("#url").val();
 				if(urlFilter.test(url)) {
 					$('.urlContainer .urls').after("<div>"+url+"</div>");
		        }
			});
		});
        </script>
    </head>
    <body>
    	<div class="mainBox">
    		<p></p>
        <h1>URL TESTER</h1>
        	<input type="text" class="url" name="url" id="url" />
        	<input type="submit" class="submit" name="submit" id="submit" />
        	
    		<div class="urlContainer">
    			<h3>My URLS</h3>
    			<div class="urls"></div>
    		</div>
    	</div>
    </body>
</html>

