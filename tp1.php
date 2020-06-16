<!--Exercice tp10 Variable-->
<?php 
    if (isset($_POST['LOGIN'])){
    setcookie('name',$_POST['lastname'], time() + 365*24*3600,'/');
    setcookie('firstname',$_POST['firstname'], time() + 365*24*3600,'/');
    setcookie('birthday',$_POST['birthday'], time() + 365*24*3600,'/');
    setcookie('countryOfBirthday',$_POST['countryOfBirthday'], time() + 365*24*3600,'/');
    setcookie('nationality',$_POST['nationality'], time() + 365*24*3600,'/');
    setcookie('adress',$_POST['adress'], time() + 365*24*3600,'/');
    setcookie('email',$_POST['email'], time() + 365*24*3600,'/');
    setcookie('number',$_POST['number'], time() + 365*24*3600,'/');
    setcookie('school',$_POST['school'], time() + 365*24*3600,'/');
    setcookie('numberPole',$_POST['numberPole'], time() + 365*24*3600,'/');
    setcookie('numberBadge',$_POST['numberBadge'], time() + 365*24*3600,'/');
    setcookie('liens',$_POST['liens'], time() + 365*24*3600,'/');
    setcookie('heros',$_POST['heros'], time() + 365*24*3600,'/');
    setcookie('hack',$_POST['hack'], time() + 365*24*3600,'/');
    setcookie('Exp',$_POST['Exp'], time() + 365*24*3600,'/');
    }
     $title = 'Exercice tp 1';
     include 'header.php';
?>


<div class="container">
<h1 id='titleTp10' class='text-danger'>Projet TP 1</h1>

<form name='formulaire' method='POST' action=''>
  <div class="form-group">
    <label for="formGroupExampleInput">Nom</label>
    <input type="text" class="form-control" name="lastname" placeholder="fabilic" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Prénom</label>
    <input type="text" class="form-control" name="firstname" placeholder="Manon" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Date de naissance</label>
    <input type="date" class="form-control" name="birthday" placeholder="27/05/1986" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Pays de naissance</label>
    <input type="text" class="form-control" name="countryOfBirthday" placeholder="France" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Nationalité</label>
    <input type="country" class="form-control" name="nationality" placeholder="Francaise" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Adresse</label>
    <input type="text" class="form-control" name="adress" placeholder="4 , avenue du général pay" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">E-mail</label>
    <input type="email" class="form-control" name="email" placeholder="manon.fabilic@gmail.com" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Téléphone</label>
    <input type="tel" class="form-control" name="number" placeholder="085454322" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)</label>
    <SELECT name="school" size="1" required>
    <OPTION value='Sans Bac'>Sans Bac</option>
    <OPTION value='Bac'>Bac</option>
    <OPTION value='Bac +2'>Bac +2</option>
    <OPTION value='Bac +3'>Bac +3</option>
    <OPTION value='supérieur'>Supérieur</option>
    </SELECT><br/>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Numéro pôle emploi</label>
    <input type="number" class="form-control" name="numberPole" placeholder="54385454322" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Nombre de badge</label>
    <input type="number" class="form-control" name="numberBadge" placeholder="6" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Liens codecademy</label>
    <input type="text" class="form-control" name="liens" placeholder="www.manon/codecademy.com" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
    <input type="text" class="form-control" name="heros" placeholder="Batman car" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
    <input type="text" class="form-control" name="hack" placeholder="Hack ,...." required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
    <SELECT name="Exp" size="1" required>
    <OPTION value='Oui'>Oui</option>
    <OPTION value='Non'>Non</option>
    </SELECT><br/>
  </div>
  <button type="submit" id='but' name='LOGIN' class="btn btn-primary mb-4">Validez</button>
</form>

</div>
<?php if ((empty($_POST['name'])) && (empty($_POST['firsname']))&& (empty($_POST['birthday']))
 && (empty($_POST['countryOfBirthday']))&& (empty($_POST['nationality']))
 && (empty($_POST['adress'])) && (empty($_POST['email']))
&&(empty($_POST['number']))&& (empty($_POST['school'])) && (empty($_POST['numberPole']))
 && (empty($_POST['numberBadge'])) && (empty($_POST['liens'])) && (empty($_POST['heros']))
  && (empty($_POST['hack'])) && (empty($_POST['exp']))){ ?>

   <?php echo "<form name='formulaire'></form>"?>
    
<?php }else{ ?>

    <style>form {display:none}</style>
    <p>Salut ton nom de famille est <?php echo $_COOKIE['name']; ?>.</p>
    <p>Ton prénom est <?php echo $_COOKIE['firstname'];?>.</p>
    <p>Ta date de naissance est <?php echo $_COOKIE['birthday']; ?>.</p>
    <p>La ville ou tu est néé est  <?php echo $_COOKIE['countryOfBirthday'];?>.</p>
    <p>Ta nationalité est <?php echo $_COOKIE['nationality']; ?>.</p>
    <p>Ton adress est <?php echo $_COOKIE['adress'];?>.</p>
    <p>Ton email est  <?php echo $_COOKIE['email']; ?>.</p>
    <p>Ton numéro de téléphone est <?php echo $_COOKIE['number'];?>.</p>
    <p>Ton niveau d'etudes est <?php echo $_COOKIE['school']; ?>.</p>
    <p>Ton numéro pole emploi est <?php echo $_COOKIE['numberPole'];?>.</p>
    <p>Ton badge <?php echo $_COOKIE['numberBadge']; ?>.</p>
    <p>Le lien de ton Codeacademy <?php echo $_COOKIE['liens'];?>.</p>
    <p>Ton héros est <?php echo $_COOKIE['heros']; ?>.</p>
    <p>Ton hack : <?php echo $_COOKIE['hack'];?>.</p>
    <p>As tu déja travaillé en tant que développeur web : <?php echo $_COOKIE['Exp'];?>.</p>
    <?php } 

    include 'footer.php';
