
<html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">
function lurl(){
$('#durl').load('http://websoap.t8.uz/get/postbak.php');
}
function myFunction() {
                window.open("http://websoap.t8.uz/get/postbak.php");
            }

</script>


<a href="#"  önClick="lurl();">Click Here</a>
<br/>
<br/>
<br/><div id="durl" >
</div>


<div class = "gfg" onmouseover = "myFunction()">
                GeeksforGeeks
        </div>
</html>
