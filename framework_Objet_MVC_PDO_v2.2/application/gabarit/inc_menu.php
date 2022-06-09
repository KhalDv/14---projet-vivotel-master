<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</span></a>
        </li>
        <li><a class='nav-link' href='<?=hlien("categories","index")?>'>Categories</a></li>
<li><a class='nav-link' href='<?=hlien("chambres","index")?>'>Chambres</a></li>
<li><a class='nav-link' href='<?=hlien("choisir","index")?>'>Choisir</a></li>
<li><a class='nav-link' href='<?=hlien("classes","index")?>'>Classes</a></li>
<li><a class='nav-link' href='<?=hlien("departements","index")?>'>Departements</a></li>
<li><a class='nav-link' href='<?=hlien("hotels","index")?>'>Hotels</a></li>
<li><a class='nav-link' href='<?=hlien("lits","index")?>'>Lits</a></li>
<li><a class='nav-link' href='<?=hlien("offre","index")?>'>Offre</a></li>
<li><a class='nav-link' href='<?=hlien("profils","index")?>'>Profils</a></li>
<li><a class='nav-link' href='<?=hlien("reservations","index")?>'>Reservations</a></li>
<li><a class='nav-link' href='<?=hlien("services","index")?>'>Services</a></li>
<li><a class='nav-link' href='<?=hlien("statuts","index")?>'>Statuts</a></li>
<li><a class='nav-link' href='<?=hlien("tarif","index")?>'>Tarif</a></li>
<li><a class='nav-link' href='<?=hlien("utilisateurs","index")?>'>Utilisateurs</a></li>

      </ul>
      <ul class="navbar-nav ml-auto">
        <li><a class="nav-link" href="<?= hlien("database", "creer") ?>">Créer BDD</a></li>
        <li><a class="nav-link" href='<?= hlien("database", "dataset") ?>'>Jeu de données</a></li>
        <li><a class="nav-link" href="<?= hlien("authentification", "deconnexion") ?>">Déconnexion</a></li>
        <li><a class="nav-link" href='<?= hlien("authentification", "connexion") ?>'>Connexion</a></li>
      </ul>
    </div>
  </div>
</nav>