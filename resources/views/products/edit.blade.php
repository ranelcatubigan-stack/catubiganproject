<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Products</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>



<div class="container">
  <h1>Edit Products</h1>



  <form action="/products/{{ $item->id }}" method="POST" class="product-form">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="name123">Name:</label>
      <input type="text" id="name" name="name123" value="{{ $item->name }}">
    </div>

<div class="form-group">
  <label for="category_id">Category:</label>

  <select name="category_id123" id="category_id" required>

    @foreach($categories as $category)
      <option value="{{ $category->id }}"
        {{ $item->category_id == $category->id ? 'selected' : '' }}>
        {{ $category->category_name }}
      </option>
    @endforeach

  </select>
</div>

    <div class="form-group">
      <label for="price123">Price:</label>
      <input type="text" id="price" name="price123" value="{{ $item->price }}">
    </div>

    <button type="submit" class="btn-submit">Update</button>
  </form>
  <hr>
    <a href="/products">Back</a>
  
</body>
</html>