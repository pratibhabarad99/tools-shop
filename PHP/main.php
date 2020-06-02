

<?php
  include "header.php";
  include "title.php";
?>
<head>
<style>
.dropbttn 
{

    background-color: black;
    color: white;
    padding: 18px;
    font-size: 16px;
    border:solid;
    cursor: pointer;
	width:150px;
	border-radius:8px;
}
.dropdownb 
{
    position: relative;
    display: inline-block;
}
.dropdownb:hover .dropbttn 
{
    background-color: purple;
}
</style>
</head>
<title>Home Page</title>
<br>


<fieldset style= "margin-left:3.5%; width:90%; height:550px; border-radius:15px;">
  <img class="mySlides" src="../images/t.jpeg" style="width:100%; height:100%;">
  <img class="mySlides" src="../images/k.jpg" style="width:100%; height:100%;">
  <img class="mySlides" src="../images/l.jpg" style="width:100%; height:100%;">
 
</fieldset>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) 
	{
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); 
}
</script> 
<?php
	$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"admindb");
	
	if(isset($_POST['srch']))
	{
		$temp=$_POST['search'];
		$qry=mysqli_query($conn,"select img,price,Sub_Category_id,pro_id from product where pro_name='$temp'");
		
		while($row=mysqli_fetch_row($qry))
		echo '<fieldset style= "max-width:29%; margin-left:1.5%; margin-bottom:1.5%; float:left; border-radius:15px;">
				<div class="product-image-wrapper">
				<div class="single-products">
				<a href="display1pro.php?pro_id='."$row[3]".'"><img height=450 width=100% src="data:image/jpeg;base64,'.base64_encode( $row[0] ).'"/></a>&nbsp
				<b style="color:purple; font-family:arial; font-size:30px; margin-left:140px">'."$row[1]".' rs</b>
				<div>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<center><div class="dropdownb">
					<button class="dropbttn">
						<strong>
							<a href="#" style="text-decoration: none; color:white">Buy Now</a>
						</strong>
					</button>
				</div></center>
				</div>
				</div></div></fieldset>';
	}
	mysqli_close($conn);
?>
<?php
 include "footer.php";
?>