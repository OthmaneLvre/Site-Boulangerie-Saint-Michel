<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Boulangerie Saint-Michel</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <nav>
    <ul class="nav-links">
      <li><a href="index.html">Accueil</a></li>
      <li><a href="a-propos.html">À propos</a></li>
      <li><a href="produits.html">Produits</a></li>
      <li><a href="contact.php" class="active">Contact</a></li>
    </ul>
  </nav>

  <main class="contact-page">
    <h1>Contactez-nous</h1>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
      <div class="confirmation">
        <p>Merci pour votre message, <?= htmlspecialchars($_POST["nom"]) ?> !</p>
        <p>Nous vous répondrons à <strong><?= htmlspecialchars($_POST["email"]) ?></strong>.</p>
        <p>Votre message :</p>
        <blockquote><?= nl2br(htmlspecialchars($_POST["message"])) ?></blockquote>
      </div>
    <?php else: ?>
      <form method="post" action="contact.php" class="contact-form">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit" class="cta">Envoyer</button>
      </form>
    <?php endif; ?>
  </main>

  <footer class="site-footer">
    <div class="footer-content">
      <p>&copy; 2025 Boulangerie Saint-Michel — Tous droits réservés</p>
      <ul class="footer-links">
        <li><a href="index.html">Accueil</a></li>
        <li><a href="a-propos.html">À propos</a></li>
        <li><a href="produits.html">Produits</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </footer>

</body>
</html>
