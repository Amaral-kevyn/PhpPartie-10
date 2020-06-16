<!--Exercice tp10 Variable-->
<?php 
    if (isset($_GET['LOGIN'])){
        setcookie('lastname',$_GET['lastname'], time() + 365*24*3600,'/');
        setcookie('firstname',$_GET['firstname'], time() + 365*24*3600,'/');
        setcookie('birthday',$_GET['birthday'], time() + 365*24*3600,'/');
        setcookie('society',$_GET['society'], time() + 365*24*3600,'/');
        setcookie('sexe',$_GET['sexe'], time() + 365*24*3600,'/');
    }
    

     $title = 'Exercice tp2';
     include 'header.php';
?>


<div class="container">
<h1 id='titleTp1' class='text-danger'>Projet TP 2</h1>

<form name='formulaire' method='GET' action='tp2.php'>
    <div class="form-group">
    <label for="formGroupExampleInput2">Civilité</label>
    <SELECT name="sexe" value="<?php if (isset($_GET['sexe'])){echo $_GET['sexe'];} ?>" size="1" required>
    <OPTION value='monsieur'>Monsieur</option>
    <OPTION value='madame'>Madame</option>
    </SELECT><br/>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Nom</label>
    <input type="text" class="form-control" name="lastname" value="<?php if (isset($_GET['lastname'])){echo $_GET['lastname'];} ?>" placeholder="fabilic" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Prénom</label>
    <input type="text" class="form-control" name="firstname" value="<?php if (isset($_GET['firstname'])){echo $_GET['firstname'];} ?>" placeholder="Manon" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Date de naissance</label>
    <input type="date" class="form-control" name="birthday" value="<?php if (isset($_GET['birthday'])){echo $_GET['birthday'];} ?>" placeholder="27/05/1986" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Société</label>
    <input type="text" class="form-control" name="society" value="<?php if (isset($_GET['society'])){echo $_GET['society'];} ?>" placeholder="facebook" required>
  </div>
  
  <button type="submit" id='but' name='LOGIN' class="btn btn-primary mb-4">Validez</button>
</form>

</div>
<?php if(isset($_GET['LOGIN'])
){ ?>
    <div class="for">
    <p>Salut ton nom de famille est <?php echo $_COOKIE['lastname']; ?>.</p>
    <p>Ton prénom est <?php echo $_COOKIE['firstname'];?>.</p>
    <p>Ta date de naissance est <?php echo $_COOKIE['birthday']; ?>.</p>
    <p>Ta societé  <?php echo $_COOKIE['society'];?>.</p>
    <p>Civilité :  <?php echo $_COOKIE['sexe']; ?>.</p>
    </div>
    <?php } else { ?>
    <style>.for {display:none}</style>
    <?php }

    include 'footer.php';
