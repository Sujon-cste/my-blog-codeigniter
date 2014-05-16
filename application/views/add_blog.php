<form  method="post" action="<?php echo base_url()?>index.php/blogger/add_post" onsubmit="return validateStandard(this)">
    <h2 align="center"> <u>Add Blog</u></h2>  
    <table border="0" align="center" width="90%">
        <tr> 
            <td>Blog Title:</td>
            <td><input type="text" name="title" placeholder="Blog Title" tabindex="1" maxlength="25" required="0"  err="Enter Your First Name" size="40" /><span class="required"> * </span></td> 
        </tr>
        <tr>
            <td>Blog Description:</td>
            <td>
                <textarea name="description" placeholder="Blog Description" id="ck_editor" tabindex="2" cols="31"></textarea>  <?php echo display_ckeditor($editor['ckeditor']);?>
<span class="required"> * </span></td> 
        </tr>       
        <tr>
            <td>Status:</td>
            <td>
                <input type="radio" name="status" value="1" tabindex="3" />Publish
                <input type="radio" name="status" value="0" tabindex="4" />Unpublish
            </td>
        </tr>
         <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="6" value="Save"/></td>
        </tr>
    </table>
</form>
