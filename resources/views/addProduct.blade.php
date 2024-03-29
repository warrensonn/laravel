<?php
/** Add a product view
 *  -------
 *  @file
 *  @brief Administrator can add a new product
 */
?>

{{-- add_product.blade.php --}}

@include('header')
<div id="addProduct">
    @if(isset($message))
        <div class="alert alert-info">{{ $message }}</div>
    @endif
    <form method="POST" action="{{ route('productManaging.addProduct') }}">
        @csrf
        <fieldset>
            <legend>Ajout d'un Produit</legend>
            <p>
                <label for="description">Description</label>
                <input id="description" type="text" name="description" size="30" maxlength="45">
            </p>
            <p>
                <label for="image">URL image</label>
                <input id="image" type="text" name="image">
            </p>
            <p>
                <label for="price">Prix</label>
                <input id="price" type="number" name="price" step="0.01" min="0" max="999999.99">
                €
            </p>
            <p>
                <label for="quantity">Quantité</label>
                <input id="quantity" type="number" name="quantity" min="0" max="9999">
            </p>
            <p style="text-align:center">
                <input style="background-color: #ccff11; border: 1px solid #600" type="submit" value="Valider" name="addProduct">
            </p>
        </fieldset>
    </form>
</div>
