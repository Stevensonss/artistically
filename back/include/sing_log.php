<!--sing-up-->
<div>
    <form action="start.php" method="POST">
    <label for="name">Nom d'utilisateur:</label>
    <input type="text" name="name" id="name" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    
    <label for="password">Mot de passe:</label>
    <input type="password" name="password" id="password" required>
    
    <label for="confirmPassword">Confirmer Mot de passe:</label>
    <input type="password" name="confirmPassword" id="confirmPassword" required>
    
    <label for="bornDate">Date de naissance:</label>
    <input type="date" name="bornDate" id="bornDate" required>
    
    <label for="gender">Genre:</label>
    <select name="gender" id="gender" required>
        <option value="1">Homme</option>
        <option value="2">Femme</option>
    </select>
    
    <label for="terms">Conditions d'utilisation:</label>
    <input type="checkbox" name="terms" id="terms" required>
    
    <input type="submit" value="Inscription">
    </form>


    <!--Sing-in-->
    <form action="login.php" method="POST">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" id="username" required>
    
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required>
    
    <input type="submit" value="Se connecter">
    </form>
</div>