<!--Exercice 1 Variable-->
<?php 
    $title = 'Exercice tp 3';
    include 'header.php';

    $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
    $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
    $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
    $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
?>

<h1>Tp 3 </h1>
<?php
function display($portrait){ ?>
    <p class='text-center h3 text-danger'><?= $portrait['name'];?></p>  
    <p class='text-center h4 text-primary'><?= $portrait['firstname'];?></p>  
    <p class='text-center'><img src="<?= $portrait['portrait'];?>" alt="" width="400px" height="400px"></p>
    <?php  }; ?>

<p><?= display($portrait1)?></p>
<p><?= display($portrait2)?></p>
<p><?= display($portrait3)?></p>
<p><?= display($portrait4)?></p>

<?php include 'footer.php';?>