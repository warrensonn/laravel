<?php
/** Connection view
 *  -------
 *  @file
 *  @brief View to connect on an account
 */
?>

<div id="admin" class="container mt-5">
    <form method="POST" action="{{ route('connection.check') }}">
        @csrf
        <fieldset>
            <legend class="mb-4">Connexion</legend>
            <div class="mb-3">
                <label for="login" class="form-label">Login*</label>
                <input id="login" type="login" name="login" class="form-control" maxlength="45">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe*</label>
                <input id="password" type="password" name="password" class="form-control" maxlength="45">
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </fieldset>        
    </form>
</div>
<br><br>

<form method="POST" action="{{ route('connection.signin') }}" class="container mt-5">
    @csrf
    <fieldset>
        <legend class="mb-4"> Vous n'avez pas encore de compte ? Créez-en un </legend>
        <button type="submit" class="btn btn-success">Créer un compte</button>
    </fieldset>
</form>
