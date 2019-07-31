<!DOCTYPE html>
<html>
<head>
	<title>HTML</title>
	<script src="push.js"></script>

</head>
<body>
<script type="text/javascript">
	
	function notification(){
		Push.create("This is to notify that station will be closed at 10pm.");
	}
	
</script>
<form>
	This is to notify that station will be closed at 10pm.<input type="button" name="click to notify" onclick="notification();">

</form>

</body>
</html>