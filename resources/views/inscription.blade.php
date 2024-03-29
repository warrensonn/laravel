<?php
/** Inscription form view
 *  -------
 *  @file
 *  @brief Inscription form
 */
?>

<form method='POST' action="{{ route('connection.signInValidate') }}">
    @csrf
    <fieldset>
    	<legend>Création d'un compte client</legend>
    		<p>
    			<label for="name">Nom*</label>
    			<input id="name" type="text" name="name" size="30" maxlength="45">
    		</p>
    		<p>
    			<label for="login">Login*</label>
    			<input id="login" type="text" name="login" size="30" maxlength="45">
    		</p>
            <p>
    			<label for="pwd">Mot de passe*</label>
    			<input id="pwd" type="password" name="pwd" size="30" maxlength="45">
    		</p>
    		<p>
    			<label for="address">Adresse*</label>
    			<input id="address" type="text" name="address" size="30" maxlength="45">
    		</p>
            <p>
    			<label for="cp">Code postal*</label>
    			<input id="cp" type="text" name="cp" size="5" maxlength="45">
    		</p>
    		<p>
    			<label for="city">Ville*</label>
    			<input id="city" type="text" name="city" size="30" maxlength="45">
    		</p>
            <p>
    			<label for="mail">Mail*</label>
    			<input id="mail" type="text" name="mail" size="30" maxlength="45">
    		</p>
    		<p>
             <input style="background-color: #ccff11; border: 1px solid #600" type="submit" value="Valider" name="valider">
             <h6 style="margin-top:2px; margin-bottom:1px">*Champs obligatoires</h6>
            </p>
    </fieldset>	
</form>
