<?php

class User {
  public $name;
  public $lastname;
  public $email;
  public $username;
  public $password;
  public $telephone;
  public $sconto = 0;


  public function __construct($_username, $_email, $_password, $_telephone )
  {
    $this->username = $_username;
    $this->email = $_email;
    $this->password = $_password;
    $this->telephone = $_telephone;
  }

  public function setSconto ($eta)
  {
    if ($eta < 35) {
      $this->sconto = 20;
    }
  }

  public function getSconto ()
  {
    return $this->sconto;
  }

}

class Employee extends User
{
  public $minorenne;

  public function setMinorenne($minorenne)
  {
    $this->minorenne = $minorenne;
  }
}

$newUtente = new Employee("gaiaf", "gaiaf2006@yahoo.it", "bella2006", "3400062401");
$newUtente->name = "Gaia";
$newUtente->lastname = "Fidelibus";
$newUtente->setSconto(13);

$user1 = new User("giuseppedf", "giuseppedf1987@yahoo.it", "volley11", "3460157541");
$user2 = new User("stefaniadf", "stefaniadf1981@yahoo.it", "raga1981", "349811103");
$user3 = new User("danieladf", "danieladf1982@yahoo.it", "bella1982", "349822808");

$users = [$user1, $user2, $user3, $newUtente];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Users</title>
</head>
<body>

    <table>
      <thead>
        <tr>
          <th>username</th>
          <th>email</th>
          <th>password</th>
          <th>telephone</th>
        </tr>
      </thead>
        <?php foreach ($users as $user) { ?>
           <tr>
             <td><?php echo $user->username ?></td>
             <td><?php echo $user->email ?></td>
             <td><?php echo $user->password ?></td>
             <td><?php echo $user->telephone ?></td>
           </tr>
        <?php } ?>



    </table>

</body>
</html>
