<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../webroot/css/login.css">
    <title>Connexion</title>
</head>

<body>
    <div class="auth-form">
        <h2>Connexion</h2>

        <form action="/index.php" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-primary">Se connecter</button>
            </div>

            <div class="form-footer">
                <p>Vous n'avez pas de compte ? <a href="/register">Inscrivez-vous</a></p>
            </div>
        </form>
    </div>
</body>

</html>