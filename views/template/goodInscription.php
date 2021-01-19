<div class="container">
    <div class="text-center">
    <h2>Bienvenue <?= $pseudo ?></h2>
      <h3>Bravo vous etes inscris !</h3> 
      <h4>Recapitulatif de votre inscription</h4> 
      <ul>  
          <li>Civilité : <?=$gender;?></li>
          <li>Votre Email : <?=$mail ?? 'Vous n\'avez rien mis'?></li>
          <li>Votre Mot de passe : <input type="password" value="<?=$password; ?>" disabled></li>
          <li>Votre Anniversaire : <?= $birthday; ?></li>

      </ul>
    </div>
</div>