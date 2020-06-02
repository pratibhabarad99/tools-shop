<?php
	include "sellerfixed.php";
?>
<div id="tabledata">
<center>Seller Hub</center>
<div id="data" onmouseover="mOver(this)" onmouseout="mOut(this)" >
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do You Want to Sell Online.....?
</div>
</div>
<script>
function mOver(obj) {
    obj.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Then Just Follow the Steps given on Slidebar"
}

function mOut(obj) {
    obj.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do You Want to Sell Online.....?"
}
</script>
</body>
</html>