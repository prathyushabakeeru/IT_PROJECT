<html>
<head> <title> Admin page </title> </head>
<style>
body{
text-align: center;++
}
</style>
<body>
<h1> CLASS REPRESENTATIVE ELECTION </h1>
<?php
include('connect.php');
echo '<table border=2 align=center >';
echo '<tr>';
echo '<th WIDTH=50> STUDENT ID </th>';
echo '<th WIDTH=90> NAME </th>';
echo '<th WIDTH=50> SECTION </th>';
echo '<th WIDTH=50> VOTE_COUNT </th>';
echo '</tr>';
echo '</table>';
$q="select * from candidate order by vote_count desc;";
$result=mysqli_query($dbh,$q) or die("error querying");
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo '<table border=1 align=center>';
echo '<tr>';
echo '<td WIDTH=50> '.$row['id'].'</td>';
echo '<td WIDTH=90> '.$row['name'].' </td>';
echo '<td WIDTH=100> '.$row['section'].' </td>';
echo '<td WIDTH=100> '.$row['vote_count'].' </td>';
echo '</tr>';
echo '</table>';
}
$qr="select c1.* from candidate c1  join (select section,max(vote_count) as vote_count from candidate  group by section)b on c1.section=b.section and c1.vote_count=b.vote_count;";
$r=mysqli_query($dbh,$qr) or die ("eroor querying");
while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
{
echo '<h1> Winners</h1>';
echo '<table border=2 align=center>';
echo '<tr>';
echo '<th WIDTH=50> STUDENT ID </th>';
echo '<th WIDTH=90> NAME </th>';
echo '<th WIDTH=90> SECTION </th>';
echo '<table border=1 align=center>';
echo '<tr>';
echo '<td width=50> '.$row['id'].' </td>';
echo '<td width=90> '.$row['name'].' </td>';
echo '<td width=90> '.$row['section'].' </td>';
echo '</tr>';
echo '</table>';
}
?>
</body>
</html>


