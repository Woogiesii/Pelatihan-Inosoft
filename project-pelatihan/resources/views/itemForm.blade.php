<!DOCTYPE html>
<head>
    <title>Item Form</title>
</head>
<body>
   <form action="{{ url('/item/post') }}" method="POST">
   @csrf 
   <label>Nama Item</label>
    <input name="nama_item" value="" />
    <label>Harga Item</label>
    <input name="harga_item" value="" />
    <button type="submit">Submit</button>
   </form>
</body>
</html>