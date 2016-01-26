<html>
<head></head>
   <body>
  <fieldset>
   <legend>Register User</legend>
<?php echo $this->tag->form(array('user/create', 'role' => 'form')); ?>
<table>
<tr>
 <td><label for="kd_user">Id User</label>
 <td><input type="text" name="txt_id">
</tr>
 </table>
</form>
</body>
</html>