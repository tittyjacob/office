<!-- <script>
#window.open ("search.php","Info","status=1,toolbar=0"); 
#</script>  -->

<?php
mysql_connect('localhost', 'office', '327ledom987') or die(mysql_error());
mysql_select_db("office") or die(mysql_error());

$ADMNO = $_POST['admno'];
$query = mysql_query("SELECT * FROM students WHERE admno = '$ADMNO'") or die(mysql_error());

if(mysql_num_rows($query)>=1){
    while($row = mysql_fetch_array($query)) {
	$admno = $row['admno'];
        $name = $row['name'];
        $course = $row['course'];
        $branch = $row['branch'];
#        $email = $row['email'];
#        $mobile = $row['mobile'];
#        $dob = $row['dob'];
        
    }
?>


<div align="center"><b><u>Application for Transfer Certificate & Course and Conduct Certificate</u></b></div>
<br>
<br>
<form action="update.php" method="post">

<table width="700" border="0" align="center" bordercolor="#ffffff" bgcolor="#ffffee">
<tr>
<td>Admission Number </td><td width="50%"><input type="text" name="admno" value="<?=$admno;?>" READONLY><br> 
</td></tr>

<tr><td>
Name</td><td width="50%"> <input type="text" name="name" value="<?=$name?>" READONLY><br>
</td></tr>

<tr><td>
Course</td><td width="50%"> <input type="text" name="course" value="<?=$course?>" READONLY><br>

</td></tr>

<tr><td>
Branch</td><td width="50%"> <input type="text" name="branch" value="<?=$branch?>" READONLY><br>
</td></tr>

<tr><td>
Sex</td><td width="50%"> <input type="text" name="sex" value="<?=$sex?>" ><br>
</td></tr>

<tr><td>
Nationality</td><td width="50%"> <input type="text" name="nationality" value="<?=$nationality?>" ><br>
</td></tr>

<tr><td>
Religion & Caste</td><td width="50%"> <input type="text" name="religion" value="<?=$religion?>" ><br>
</td></tr>


<tr><td>
Date Of Birth ( DD-MM-YYYY Format ):</td><td width="50%"> <input type="text" name="dob" value="<?=$dob?>"><br>
</td></tr>


<tr><td>
Reason for Leaving </td><td width="50%"> <input type="text" name="reason" value="<?=$reason?>"><br>
</td></tr>



<tr></tr>
<tr></tr>
<tr> <td>
</td><td width="50%"> <input type="Submit"> 
</td> <tr>


</table>
</form>
<?php
}else{
    echo 'Admission Number not found !. <a href="javascript:history.back()">Go back</a>';
}
?>
