<form name="login" method="post" action="../controllers/login.php">
    <!-- Usuario -->
    <label for="metodoLogin">Nombre de usuario o e-mail</label>
    <input type="text" id="metodoLogin" name="metodoLogin" required>
    <script>
        if(document.getElementById("metodoLogin").value.includes("@") and document.getElementById("metodoLogin").value.includes(".")){
            document.getElementById("metodoLogin").name = "email";
        } else {
            document.getElementById("metodoLogin").name = "usuario";
        }
    </script>
    <!-- Contraseña -->
    <label for="contrasena">Contraseña</label>
    <input type="password" id="contrasena" name="contrasena" required>
    <!-- Botón de envío -->
    <input type="submit" value="Iniciar sesión">
</form>