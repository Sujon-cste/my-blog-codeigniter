
                    <h2 align="center">
                        This is sign up form.
                    </h2>
<h2>
    <?php 
    $message=$this->session->userdata('msg');
    if(isset($message))
    {
        echo $message;
        $this->session->unset_userdata('msg');
    }
    ?>
</h2>
                    <form action="<?php echo base_url() ?>index.php/login_user/save_user" method="post">
                        <table border="0" align="center">
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="first_name" placeholder="First Name" tabindex="1" /></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="last_name" placeholder="Last Name" tabindex="2"/></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="email" placeholder="Email" tabindex="3"/></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="password" placeholder="Your Password" tabindex="4"/></td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td><textarea cols="30" rows="10" name="address" placeholder="Your Address" tabindex="6"></textarea></td>
                            </tr>
                            <tr>
                                <td>Mobile No:</td>
                                <td><input type="text" name="mobile" placeholder="Your Mobile No" tabindex="7"/></td>
                            </tr>
                            <tr>
                                <td>City:</td>
                                <td><input type="text" name="city" placeholder="Your City" tabindex="8" /></td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                             <td>   <input type="radio" name="gender" value="male" />Male
                                    <input type="radio" name="gender" value="female" />Female
                            </td>
                            </tr>
                            <tr>
                                <td>Country:</td>
                                <td><select tabindex="9" name="country">
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
                                <td><input type="text" name="zip_code" placeholder="Your Zip Code" tabindex="10"/></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="btn" tabindex="11" value="Sign Up"/></td>
                            </tr>
                        </table>
                    </form>
                
