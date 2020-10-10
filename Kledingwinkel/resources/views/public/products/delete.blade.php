@extends('public.products.layout')

@section('content')
    <h1 class="mt-5">Product</h1>


<form method="POST" action="{{ route('products.destroy', ['products' => $product->id]) }}">
    @method('DELETE')
    @csrf

    <div class="form-group">
        <label>Merk</label>
        <input type="text" name="merk" class="form-control" id="merk" value="{{ old('merk', $product->merk) }}" disabled="disabled">
    </div>
    <div class="form-group">
        <label>Naam</label>
        <textarea name="naam" id="naam" rows="3"
                  class="form-control" disabled="disabled">{{ old('naam', $product->naam) }}</textarea>
    </div>
    <div class="form-group">
        <label>Prijs</label>
        <input type="number" class="form-control" name="prijs" id="prijs"
               value="{{ old('prijs', $product->prijs) }}" disabled="disabled">
    </div>
    <button type="submit" class="btn btn-primary">delete</button>
</form>
@endsection
