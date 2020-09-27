<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="home.css"/>
    <link rel="stylesheet" href="form.css"/>
</head>
<body>
<nav class="nav">
    <div class="items">
        <a href="https://www.facebook.com" class="navItem"> facebook </a>
        <a href="https://www.google.com" class="navItem"> google </a>
        <a href="https://www.youtube.com" class="navItem"> youtube </a>
    </div>
</nav>
<aside class="sideBar">
    <a href="index.html" target="_blank" class="aSidebar"> Index </a>
    <a href="index.html" target="_blank" class="aSidebar"> Index </a>
    <a href="index.html" target="_blank" class="aSidebar"> Index </a>
</aside>
<div class="container">
    <form action="index.php" method="get">
        <label> Nom </label>
        <input type="text" name="nom" required><br>
        <label> Prenom </label>
        <input type="text" name="prenom" required><br>
        <label> Cin </label>
        <input type="number" name="cin"  min="10000000" max="99999999" required><br>
        <label> Salaire </label>
        <input type="number" name="salaire" min="1000" max="3000" required><br>
        <button type="submit"> Ajouter </button>
    </form>
</div>
<script>

</script>
</body>
</html>