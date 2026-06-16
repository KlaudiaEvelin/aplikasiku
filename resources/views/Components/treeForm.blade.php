<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="new-tree-form">
        <label class="window-title">New Tree form</label>
        <form action="{{ route('trees.store') }}" method="POST" class="tree-form">
            @csrf <label>Title</label>
            <input type="text" name="title" id="new-tree-title" placeholder="Type here...">

            <label>Header Image URL</label>
            <input type="text" name="header_img" id="new-tree-header" placeholder="Type here...">

            <label>Price</label>
            <input type="number" name="price" id="new-tree-price" placeholder="Type here..." min="0">

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>