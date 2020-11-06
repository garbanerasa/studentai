<HTML>
<HEAD>
<TITLE>Failas</TITLE>
</HEAD>
<style>
table, th, td {
  border: 1px solid black;
}
th, td {
  padding: 5px;
}
th, td {
  text-align: right;
}
#t01 {
  width: 100%;    
  background-color: #33ffcc;
}
</style>
<BODY>
<table style="width:30%">
<table>
  <tr id="t01">
    <th>Vardas</th>
    <th>Pavardė</th> 
    <th>Amžius</th>
    <th>Adresas</th>
  </tr>
 <?php
     $k=0;
 $file = fopen("studentai.csv", "r") or die("Failo nepavyksta atidryti!");
 while (!feof($file)) {
     $data = fgets($file);
     list($vardas, $pavarde, $amzius, $adresas) = explode(";", $data);
     if (strcmp(trim($adresas),"Kaunas")==0)  
     {
        echo "<tr>
        <td align=right>$vardas, $pavarde, $amzius, $adresas</td>
        </tr>";
        }
     ?>
 <?php
 }
 fclose($file);
 ?>
</table>
</body>
</html>
