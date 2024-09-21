<html>
  <head></head>
  <body>
    <a href="/" style="background-color: lightgrey;padding:15px 20px;text-decoration:none;color:black;">Kembali</a>
    <h1>Halaman List Produk</h1>

    <div style="display:flex;">
      @foreach($produk as $row)
      <div style="border: 1px solid #000;margin:10px;">
        <p>Nama produk: {{ $row->nama }}</p>
        <p>Warna: {{ $row->warna }}</p>
        <p>Spesifikasi: {{ $row->spesifikasi }} </p>
        <p>Tahun dibuat: {{ $row->tahun }} </p>
        <p>Made in: {{ $row->madein }} </p>
        <p>Penjual resmi: {{ $row->toko }} </p>
        <p>Harga produk: {{ $row->harga }} </p>
      </div>
      @endforeach

    </div>
  </body>
</html>