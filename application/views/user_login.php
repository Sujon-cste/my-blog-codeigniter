<h2 align="center">Login form</h2>
<h3>
    <?php 
    $message=$this->session->userdata('msg');
    if(isset($message))
    {
        echo $message;
        $this->session->unset_userdata('msg');
    }
    ?>
</h3>
<form action="<?php echo base_url() ?>index.php/login_user/enter_user" method="post">
<table border="0" align="center">
    <tr>
        <td>Email Address:</td>
        <td><input type = "text" name = "email" placeholder = "your Email" tabindex = "3"/></td>
    </tr>

    <tr>
        <td>Password:</td>
        <td><input type = "password" name = "password" placeholder = "Your Password" tabindex = "4"/></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="btn" tabindex="11" value="Login"/></td>
    </tr>
</table>
</form>