
                    <h2 align="center">
                        Edit form
                    </h2>

                    <form name="edit_profile" action="<?php echo base_url() ?>index.php/blogger/update" method="post">
                        <table border="0" align="center">
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="first_name"  value="<?php echo $result->first_name?>" placeholder="First Name" tabindex="1" /></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="last_name" value="<?php echo $result->last_name?>" placeholder="Last Name" tabindex="2"/></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="email" value="<?php echo $result->email?>" placeholder="Email" tabindex="3"/></td>
                            </tr>
                       
                            <tr>
                                <td>Address:</td>
                                <td><textarea cols="30" rows="10" name="address" placeholder="Your Address" tabindex="6">
                                  <?php echo $result->address?>
                                    </textarea></td>
                            </tr>
                            <tr>
                                <td>Mobile No:</td>
                                <td><input type="text" name="mobile" value="<?php echo $result->mobile?>" placeholder="Your Mobile No" tabindex="7"/></td>
                            </tr>
                            <tr>
                                <td>City:</td>
                                <td><input type="text" name="city" value="<?php echo $result->city?>" placeholder="Your City" tabindex="8" /></td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                             <td>   
                                 <?php if($result->gender!='fale')
                                 {?>
                                 <input type="radio" name="gender" value="male" />Male
                                 <?php } else {?>
                                 <input type="radio" name="gender" value="male" checked="checked" />Male
                                  <?php }if($result->gender=='female')
                                 {?>
                                 <input type="radio" name="gender" value="female" checked="checked"/>Female
                                  <?php } else {?>
                                    <input type="radio" name="gender" value="female" />Female
                                    <?php }?>
                            </td>
                            </tr>
                            <tr>
                                <td>Country:</td>
                                <td><select tabindex="9" name="country"  value="<?php echo $result->country?>">
                                        <option value="0">Select Country</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="India">India</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Srilanka">Srilanka</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Bhutan">Bhutan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Zip Code:</td>
                                <td><input type="text" name="zip_code" value="<?php echo $result->zip_code?>" placeholder="Your Zip Code" tabindex="10"/></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="btn" tabindex="11" value="Update"/></td>
                            </tr>
                        </table>
                    </form>
    <script type="text/javascript" language="javascript">
        document.forms['edit_profile'].elements['country'].value='<?php echo $result->country?>';
</script>