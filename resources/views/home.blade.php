  @extends('layouts.app')

  @section('content')
      <!-- <h1 class="text-center">Selamat Datang!</h1>
      <div class="text-center">
        <a href="{{ route('games.index') }}" class="btn btn-primary ">Lihat Game</a>
      </div> -->

      <section class="mb-5">
        <h4 class="section-title">🔥Game Popular</h4>
        <div class="row g-4 card-popular">
          @foreach ($popularGames as $game)
            @include('components.game-card', ['game' => $game])
          @endforeach
        </div>
      </section>

      <section class="mb-5">
        <h4 class="section-title">📱 Game Mobile</h4>
        <div class ="row g-3">
          @foreach ($mobileGames as $game)
            @include('components.game-card', ['game' => $game])
          @endforeach
        </div>
      </section>

      <section class="mb-5">
        <h4 class="section-title">💻 Game PC</h4>
        <div class ="row g-3">
          @foreach ($pcGames as $game)
            @include('components.game-card', ['game' => $game])
          @endforeach
        </div>
      </section>
      
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      @if(session('success'))
      <script>
          Swal.fire({
              title: 'Berhasil!',
              text: "{{ session('success') }}",
              icon: 'success',
              confirmButtonText: 'Oke',
              background: '#1a1a2e', 
              color: '#fff',
              confirmButtonColor: '#007bff'
          });
      </script>
      @endif
  @endsection
  




 