@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-white">Tentang <span style="color: #007bff;">TopUpin</span></h1>
        <p class="text-secondary mx-auto" style="max-width: 600px;">
            Platform top-up game tercepat, termurah, dan terpercaya di Indonesia. Kami hadir untuk mendukung hobi gaming Anda tanpa batas dengan sistem yang aman dan otomatis.
        </p>
    </div>

    <div class="row g-4 align-items-center justify-content-center">
        <div class="col-lg-5">
            <div class="rounded-4 overflow-hidden shadow-lg" style="height: 400px; border: 2px solid #2e2e4d;">
                <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?auto=format&fit=crop&q=80&w=1000" 
                     alt="Gaming Studio" 
                     style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="p-4 rounded-4" style="background: #1a1a2e; color: white; border: 1px solid #2e2e4d;">
                <h3 class="mb-4">Mengapa Memilih Kami?</h3>
                
                <div class="d-flex mb-4">
                    <div class="me-3 mt-1">
                        <i class="fas fa-bolt text-warning fs-4"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Proses Instan</h5>
                        <p class="text-secondary small mb-0">Hanya butuh hitungan detik setelah pembayaran berhasil, item game langsung masuk ke akun Anda tanpa perlu menunggu lama.</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="me-3 mt-1">
                        <i class="fas fa-shield-alt text-success fs-4"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">100% Aman & Legal</h5>
                        <p class="text-secondary small mb-0">Keamanan akun Anda adalah prioritas kami. Semua produk yang kami sediakan berasal dari distributor resmi dan legal.</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="me-3 mt-1">
                        <i class="fas fa-headset text-info fs-4"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Layanan Pelanggan</h5>
                        <p class="text-secondary small mb-0">Tim bantuan kami siap membantu Anda jika terjadi kendala teknis atau pertanyaan seputar proses transaksi Anda.</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="me-3 mt-1">
                        <i class="fas fa-wallet text-danger fs-4"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Metode Pembayaran Lengkap</h5>
                        <p class="text-secondary small mb-0">Kami mendukung berbagai metode pembayaran mulai dari Transfer Bank hingga E-Wallet populer di Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection