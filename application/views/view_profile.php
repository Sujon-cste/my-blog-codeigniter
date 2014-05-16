</br>
<h5 align="right"> <a href="<?php echo base_url()?>index.php/blogger/edit">Edit Profile</a></h5>
<h2 align = "center">
My profile  
</h2>

</br>
</br>

<table border = "0" align = "center">
<tr>
<td>Full Name:</td>
<td><?php echo $result->first_name.' '.$result->last_name ?></td>
</tr>
<tr>
<td>Email Address:</td>
<td><?php echo $result->email ?></td>
</tr>

<tr>
<td>Address:</td>
<td><?php echo $result->address ?></td>
</tr>
<tr>
<td>Mobile No:</td>
<td><?php echo $result->mobile?></td>
</tr>
<tr>
<td>City:</td>
<td><?php echo $result->city?></td>
</tr>
<tr>
<td>Gender:</td>
<td><?php echo $result->gender ?></td>


</tr>
<tr>
<td>Country:</td>
<td><?php echo $result->country?></td>

</tr>
<tr>
<td>Zip Code:</td>
<td><?php echo $result->zip_code?></td>
</tr>

</table>


