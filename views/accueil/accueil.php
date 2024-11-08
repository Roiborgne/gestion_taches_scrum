<div class="text-center">
    <h1 class="mb-4">Bienvenue sur Mon Site Gestion Taches Scrum</h1>

    <?php if (isset($_SESSION['user'])): ?>
        <div class="alert alert-success">
            Bonjour <?= $_SESSION['user']['pseudo'] ?> !
        </div>
        <div class="mt-4">
            <a href="index.php?route=profile" class="btn btn-primary btn-lg mx-2">Profile</a>
            <a href="index.php?route=deconnexion" class="btn btn-outline-primary btn-lg mx-2">Se déconnecter</a>
        </div>
    <?php else: ?>
        <div class="mt-4">
            <a href="index.php?route=creercompte" class="btn btn-primary btn-lg mx-2">Créer un compte</a>
            <a href="index.php?route=connexion" class="btn btn-outline-primary btn-lg mx-2">Se connecter</a>
        </div>
    <?php endif; ?>
</div>
