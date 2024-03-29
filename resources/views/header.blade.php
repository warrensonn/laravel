<?php
/** Header view
 *  -------
 *  @file
 *  @brief Header
 */
?>

@if(session('user_id'))
    @if(session('type') == 1)
        <h2>Bonjour administrateur {{ session('name') }}, bienvenue dans l'interface de modification :</h2>
    @else
        <h2>Bonjour client {{ session('name') }}, bienvenue dans votre boutique :</h2>
    @endif
@endif

<ul id="menu">
	<li style="background-color:#3febdc">
		<a href="{{ route('welcome') }}"> Accueil </a>
	</li>
	<li style="background-color:#3febdc">
		<a href="{{ route('products.products') }}"> Voir le catalogue de fleurs </a>
	</li>

	@if(session('type') && session('type') == 2)
		<li style="background-color:#3febdc" >
			<a href="index.php?uc=gererPanier&action=voirPanier"> Voir mon panier </a>
		</li> 
	@elseif(session('type') && session('type') == 1)
		<li style="background-color:#3febdc" >
			<a href="{{ route('productManaging.add') }}"> Ajouter un Produit </a>
		</li>
	@endif

	@if(!session('name'))
		<li style="float:right; background-color:#3febdc">
			<a href="{{ route('connection.form') }}"> Se connecter </a>
		</li>
	@else
		<li style="float:right; background-color:#3febdc">
			<a href="{{ route('connection.deconnection') }}"> Se déconnecter </a>
		</li>
	@endif
</ul>
