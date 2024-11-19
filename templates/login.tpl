<link rel="stylesheet" href="{$basehref}css/login.css">
<link rel="stylesheet" href="{$basehref}css/styles.css">
{include file='header.tpl'}

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {if $username}
            <!-- Mostrar cuando el usuario está logueado -->
            <h2>Bienvenido, {$username}</h2>
            <form action="logout" method="post">
                <button type="submit" class="btn btn-danger">Cerrar sesión</button>
            </form>
        {else}
            <!-- Mostrar el formulario de login cuando no está logueado -->
            <h2>Iniciar Sesión</h2>
            <form action="verify" method="post">
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="username" placeholder="Juancito1234" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                </div>
                {if !empty($error)}
                    <div class="alert alert-danger" role="alert">{$error}</div>
                {/if}
                <button type="submit" class="btn btn-default">Iniciar sesión</button>
            </form>
        {/if}
    </div>
</div>
