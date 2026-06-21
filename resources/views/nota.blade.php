@extends('layout.app')

@section('content')

<style>
    .nota-container { padding: 60px 20px; background: #f4f4f4; display: flex; justify-content: center; }
    .nota-box { background: white; width: 100%; max-width: 700px; padding: 50px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
    
    .nota-header { border-bottom: 1px solid #eee; margin-bottom: 30px; padding-bottom: 20px; text-align: center; }
    .nota-header h1 { font-size: 24px; letter-spacing: 4px; }
    
    .info-grid { display: flex; justify-content: space-between; margin-bottom: 40px; font-size: 13px; }
    .table-nota { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
    .table-nota th, .table-nota td { padding: 15px; border-bottom: 1px solid #eee; text-align: left; }
    
    .pembayaran-box { background: #f9f9f9; padding: 20px; border-radius: 5px; }
    
    /* INTERAKSI UPLOAD */
    .btn-upload { background: #3d2a29; color: white; border: none; padding: 12px 25px; cursor: pointer; transition: 0.3s; }
    .btn-upload:hover { background: #5a3d3b; }
    #file-input { display: none; }
</style>

<div class="nota-container">
    <div class="nota-box">
        <div class="nota-header">
            <h1>LUNAIRE LABEL</h1>
            <p style="font-size: 11px; letter-spacing: 2px;">TIMELESS ELEGANCE & DETAIL</p>
        </div>

        <div class="info-grid">
            <div>
                <strong>PENERIMA:</strong><br>
                Katherine Pierce<br>
                katherine@gmail.com<br>
                085123456789<br>
                Jakarta
            </div>
            <div style="text-align: right;">
                <strong>NO. PESANAN:</strong><br>
                #ORD-25<br>
                12 APR 2026<br>
                <span style="background: #ccc; padding: 3px 8px; font-size: 10px; color: white;">MENUNGGU PEMBAYARAN</span>
            </div>
        </div>

        <table class="table-nota">
            <thead>
                <tr style="font-size: 12px; color: #777;">
                    <th>PRODUK</th>
                    <th>JUMLAH</th>
                    <th>SUBTOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rosie Victorian Floral Dress<br><small>Authentic Lunaire</small></td>
                    <td>1</td>
                    <td>Rp. 495.000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr style="font-weight: bold;">
                    <td colspan="2" style="text-align: right;">TOTAL BAYAR</td>
                    <td>Rp. 495.000</td>
                </tr>
            </tfoot>
        </table>

        <div class="pembayaran-box">
            <p><strong>INSTRUKSI PEMBAYARAN</strong><br>Silahkan selesaikan pembayaran agar pesanan segera kami proses:</p>
            <div style="background: white; padding: 15px; border-left: 4px solid #3d2a29; margin: 15px 0;">
                BANK TRANSFER BCA<br>
                <strong>1234567890</strong><br>
                A/N NAZWA NUR AZIZAH
            </div>
            
            <form action="/upload-bukti" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="file-input" class="btn-upload" style="display:inline-block;">UPLOAD BUKTI</label>
                <input type="file" name="bukti" id="file-input" onchange="this.form.submit()">
                <a href="https://wa.me/6285123456789" class="btn-upload" style="background:#25D366; text-decoration:none;">WHATSAPP</a>
            </form>
        </div>

        <div style="margin-top:30px; text-align:center;">
            <a href="/" style="font-size:12px; color:#3d2a29;">&larr; BERANDA</a>
        </div>
    </div>
</div>

@endsection