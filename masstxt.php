<html>
<head>
<title>HordeTM Mass Text Tool</title>
<link rel="stylesheet" type="text/css" href="/plugin/style.css" />
<script type="text/javascript" src="/plugin/jquery.min.js"></script>
<script type="text/javascript" >
function toggleKorkron(status) {
$(".Korkron").each( function() {
$(this).attr("checked",status);
})
}
function toggleValkyr(status) {
$(".Valkyr").each( function() {
$(this).attr("checked",status);
})
}
function count_chars() {
        counter = document.masstxt.txtbody.value
        left = (140 - (counter.length))
            
            if ( left <= 0 ) {
                document.masstxt.count.value = 0
                document.masstxt.txtbody.value = document.masstxt.txtbody.value.substr(0,140)
            } else {
                document.masstxt.count.value = left
            }
    }
</script>
</head>
<body bgcolor="black">
<font color="white">
<h1>The HordeTM Mass Text Tool</h1>
<form action="masstxttwilio.php" method="post" name="masstxt">
What do you want to say:<br><br><textarea name="txtbody" rows="4" cols="50" onkeyup="count_chars()"></textarea><br>
                        <input type="text" name="count" size="3" READONLY> - Number of characters remaining<br /><br>
Password: <input type="password" name="password" size="10"><br><br>
Who should this go to?<br /><br>
<table border="1" cellpadding="6">
<tr><td><b><font color="white">Kor'kron <input type="checkbox"  onclick="toggleKorkron(this.checked)" />All  </b></td><td><b><font color="white">Frostwolf <input type="checkbox"  onclick="toggleValkyr(this.checked)" />All  </b></td><td><b><font color="white">Other</b></td></tr>
<tr>
  <td class="classcolor7">
    <input type="checkbox" name="txtTo[]" value="David" class="Korkron"/>David<br />
  </td>
  <td  class="classcolor11">
    <input type="checkbox" name="txtTo[]" value="Ribai" class="Valkyr"/>Ribai<br />
  </td>
  <td  class="classcolor12">
    <input type="checkbox" name="txtTo[]" value="Nimbo" />Nimbo<br />
  </td>
</tr>

<tr>
  <td  class="classcolor1">
    <input type="checkbox" name="txtTo[]" value="Scott" class="Korkron"/>Scott<br />
  </td>
  <td  class="classcolor2">
    <input type="checkbox" name="txtTo[]" value="Acosta" class="Valkyr"/>Acosta<br />
  </td>
  <td  class="classcolor">
  
  </td>
</tr>

<tr>
  <td  class="classcolor5">
    <input type="checkbox" name="txtTo[]" value="Crossbless" class="Korkron"/>Crossbless<br />
  </td>
  <td  class="classcolor7">
    <input type="checkbox" name="txtTo[]" value="Binx" class="Valkyr"/>Binx<br />
  </td>
  <td  class="classcolor">
  
  </td>
</tr>

<tr>
  <td  class="classcolor12">
    <input type="checkbox" name="txtTo[]" value="Chase" class="Korkron"/>Chase<br />
  </td>
  <td  class="classcolor4">
    <input type="checkbox" name="txtTo[]" value="Chase" class="Valkyr"/>Chase<br />
  </td>
  <td  class="classcolor">
  
  </td>
</tr>

<tr>
  <td  class="classcolor2">
    <input type="checkbox" name="txtTo[]" value="Mory" class="Korkron"/>Mory<br />
  </td>
  <td  class="classcolor2">
    <input type="checkbox" name="txtTo[]" value="Mory" class="Valkyr"/>Mory<br />
  </td>
  <td  class="classcolor">
  
  </td>
</tr>

<tr>
  <td  class="classcolor11">
    <input type="checkbox" name="txtTo[]" value="Nick" class="Korkron"/>Nick<br />
  </td>
  <td  class="classcolor12">
    <input type="checkbox" name="txtTo[]" value="Nick" class="Valkyr"/>Nick<br />
  </td>
  <td  class="classcolor">
  
  </td>
</tr>

<tr>
  <td  class="classcolor12">
    <input type="checkbox" name="txtTo[]" value="Walker" class="Korkron"/>Walker<br />
  </td>
  <td  class="classcolor5">
    <input type="checkbox" name="txtTo[]" value="Tristan" class="Valkyr"/>Tristan<br />
  </td>
  <td  class="classcolor">
  
  </td>
</tr>

<tr>
  <td  class="classcolor4">
    <input type="checkbox" name="txtTo[]" value="Bakka" class="Korkron"/>Bakka<br />
  </td>
  <td  class="classcolor1">
    <input type="checkbox" name="txtTo[]" value="Bakka" class="Valkyr"/>Bakka<br />
  </td>
  <td  class="classcolor">
  
  </td>
</tr>

<tr>
  <td  class="classcolor9">
    <input type="checkbox" name="txtTo[]" value="Dylan" class="Korkron"/>Dylan<br />
  </td>
  <td  class="classcolor11">
        <input type="checkbox" name="txtTo[]" value="Tuffnose" class="Valkyr"/>Tuffnose<br />
  </td>
  <td  class="classcolor">
  
  </td>
</tr>

<tr>
  <td  class="classcolor3">
    <input type="checkbox" name="txtTo[]" value="Chris" class="Korkron"/>Chris<br />
  </td>
  <td  class="classcolor">
  </td>
  <td  class="classcolor">
  
  </td>
</tr>

</table><br><br>
<input type="submit" name="formSubmit" value="Submit" />
</form>
</body>
</html>