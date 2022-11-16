<table border=1>
    <th>id</th><th>created at</th><th>update at</th><th>nama</th><th>id kategori</th>
    <th>kuantitas</th><th>harga beli</th><th>harga jual</th>
    @foreach($produk as $p)
    <tr><td>{{ $p->id }}</td><td>{{ $p->created_at }}</td><td>{{ $p->updated_at }}</td>
    <td>{{ $p->nama }}</td><td>{{ $p->id_kategori }}</td><td>{{ $p->qty }}</td>
    <td>{{ $p->harga_beli }}</td><td>{{ $p->harga_jual }}</td></tr>@endforeach
</table>
