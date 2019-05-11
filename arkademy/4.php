<html>
<head></head>
<body>
<script type="text/javascript">
 var n=prompt("Masukkan nilai 7");
 n=parseInt(n);

  var i = 2;
  var j = 2;
   for(i = 1 ; i <= n+1 ; i ++){
    for(j = 1 ; j <= n + 1; j ++)
     {
  if(( i == j ) || (j == n + 2 - i )){
  document.write("&nbsp"+" programmer ");
  }
   else
  {
   document.write("&nbsp"+"&nbsp"+"&nbsp"+"&nbsp"+"&nbsp");
  }
 }
document.write("<br/>");
}

</script>
</body>
</html>
