<?php
/** Products view
 *  -------
 *  @file
 *  @brief User can see the products and add them to the basket
 */
?>

{{-- products.blade.php --}}
@include('header')

<div id="products">
    @if(isset($message))
        <div class="alert alert-info">{{ $message }}</div>
    @endif
    @foreach($products as $product)
        <ul>
            <li><img src="/{{ $product['image'] }}" alt="image" /></li>
            <li>{{ $product['description'] }} : </li>
            @if(session('name'))
                @if(session('type') == 1)
                    <li>
                        <a href="{{ route('productManaging.update', ['product' => $product['id']]) }}">
                        <img src="/images/modifier.png" title="Modifier"></a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('productManaging.delete', ['product' => $product['id']]) }}" onsubmit="return confirm('Voulez-vous vraiment retirer cet article ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: none; background: none; padding: 0px;">
                                <img src="/images/supprimer.png" title="Supprimer">
                            </button>
                        </form>
                    </li>
                @else
                    @if($product['quantity'] == 0)
                        <li>RUPTURE DE STOCK</li>
                    @else
                        <li>{{ $product['price'] }} Euros</li>
                        <li><a href="{{ route('products.addBasket', ['product' => $product['id']]) }}">
                            <img src="/images/mettrepanier.png" title="Ajouter au panier"></a></li>
                    @endif
                @endif
            @endif
        </ul>
    @endforeach
</div>
