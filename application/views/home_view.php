<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Simple Login with CodeIgniter - Private Area</title>
  </head>
  <body>
    <h1>Home</h1>
    <h2>Welcome <?php echo $username; ?>!</h2>
    <a href="home/logout">Logout</a>

    <table border="1">
      <thead>
        <th>id</th>
        <th>name</th>
        <th>pass</th>
      </thead>
      <tbody>
        <?php foreach($users as $user){?>
            <tr>
              <td><?= $user->id; ?></td>
              <td><?= $user->username; ?></td>
              <td><?= $user->password; ?></td>
            </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>
