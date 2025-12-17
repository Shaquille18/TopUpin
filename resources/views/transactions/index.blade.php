@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center">Riwayat Transaksi</h2>

    @if($transactions->isEmpty())
        <div class="alert alert-info text-center">
            Belum ada transaksi.
        </div>
    @else
        <div class="transaction-wrapper">
            @foreach($transactions as $trx)
                <div class="transaction-card">
                    <div class="trx-header">
                        <strong>{{ $trx->game->name }}</strong>
                        <span class="trx-status {{ $trx->status }}">
                            {{ ucfirst($trx->status) }}
                        </span>
                    </div>

                    <div class="trx-body">
                        <p><b>Produk:</b> {{ $trx->product->name }}</p>
                        <p><b>User Game ID:</b> {{ $trx->user_game_id }}</p>
                        <p><b>Pembayaran:</b> {{ strtoupper($trx->payment_method) }}</p>
                        <p><b>Total:</b> Rp {{ number_format($trx->amount) }}</p>
                        <p class="trx-date">
                            {{ $trx->created_at->format('d M Y, H:i') }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
