<html>
    <head>
       <title>Login</title>
    </head>
    <body>
  <fieldset>
   <legend>Login</legend>
    <?php echo $this->tag->form(array('login/proseslogin', 'role' => 'form')); ?>
    <table>
     <tr>
      <td> Username </td>
      <td> <input type="text" name="username" class="form-control" placeholder="User ID"/> </td>
     </tr>
     </tr>
     <tr>
      <td> Password </td>
      <td><input type="password" name="password" placeholder="Password"/></td>
     </tr>
     <tr>
      <td colspan=2><button type="submit" class="btn bg-olive btn-block">Log in</button>  </td>
     </tr>
     <tr>
      <td colspan=2><?php echo $this->getContent(); ?></td>
     </tr>
    </table>
     </form>
  </fieldset>
    </body>
</html>