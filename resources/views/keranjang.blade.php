@extends('layout.app')

@section('content')

<style>
    .cart-container { padding: 60px 10%; min-height: 70vh; background: #fff; }
    .cart-title { font-size: 32px; font-weight: bold; margin-bottom: 40px; text-align: center; letter-spacing: 2px; }
    
    .cart-wrapper { display: flex; gap: 50px; max-width: 1200px; margin: auto; align-items: flex-start; }

    /* TABEL PRODUK */
    .cart-items { flex: 2; }
    .cart-table { width: 100%; border-collapse: collapse; }
    .cart-table th { text-align: left; font-size: 12px; color: #888; padding-bottom: 20px; border-bottom: 1px solid #eee; }
    .cart-table td { padding: 20px 0; border-bottom: 1px solid #eee; }
    
    .item-info { display: flex; align-items: center; gap: 15px; }
    .item-info img { width: 60px; height: 80px; object-fit: cover; }
    .item-name { font-weight: bold; font-size: 14px; }
    .item-size { font-size: 12px; color: #777; }

    /* RINGKASAN */
    .cart-summary { flex: 1; background: #f9f7f7; padding: 30px; }
    .summary-title { font-weight: bold; margin-bottom: 20px; }
    .summary-row { display: flex; justify-content: space-between; margin-bottom: 15px; font-size: 14px; }
    .total-row { border-top: 1px solid #ddd; padding-top: 15px; font-weight: bold; font-size: 18px; }
    .btn-checkout { width: 100%; background: #3d2a29; color: white; border: none; padding: 15px; margin-top: 20px; cursor: pointer; transition: 0.3s; }
    .btn-checkout:hover { background: #5a3d3b; }

    .btn-remove { color: #d00; cursor: pointer; font-size: 18px; }
</style>

<div class="cart-container">
    <div class="cart-title">SHOPPING BAG</div>

    <div class="cart-wrapper">
        <div class="cart-items">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>PRODUK</th>
                        <th>HARGA</th>
                        <th>JUMLAH</th>
                        <th>SUBTOTAL</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="item-info">
                                <img src="{{ asset('images/produk/rosie victorian midi dress.jpg') }}">
                                <div>
                                    <div class="item-name">Rosie Victorian Floral Dress</div>
                                    <div class="item-size">Size: L</div>
                                </div>
                            </div>
                        </td>
                        <td>Rp 495.000</td>
                        <td><input type="number" value="1" style="width: 40px; padding: 5px;"></td>
                        <td>Rp 495.000</td>
                        <td><span class="btn-remove" onclick="removeItem(this)">&times;</span></td>
                    </tr>
                </tbody>
            </table>
            <!-- Tombol Kembali Belanja -->
<p style="margin-top: 20px;">
    <a href="{{ url('/produk') }}" style="color: #3d2a29; text-decoration: none;">&larr; KEMBALI BELANJA</a>
</p>
        </div>

        <div class="cart-summary">
            <div class="summary-title">RINGKASAN</div>
            <div class="summary-row"><span>Total Harga (1 produk)</span><span>Rp 495.000</span></div>
            <div class="summary-row"><span>Biaya Pengiriman</span><span style="color: green;">GRATIS</span></div>
            <div class="summary-row total-row"><span>TOTAL BAYAR</span><span>Rp 495.000</span></div>
            <a href="{{ url('/checkout') }}" style="text-decoration: none;">
    <button class="btn-checkout" style="width: 100%;">PROSES CHECKOUT</button>
</a>
            <p style="font-size: 10px; text-align: center; margin-top: 15px; color: #777;">Transaksi Aman di Lunaire</p>
        </div>
    </div>
</div>

<script>
    function removeItem(el) {
        if(confirm('Hapus produk dari keranjang?')) {
            el.closest('tr').remove();
        }
    }
</script>

@endsection