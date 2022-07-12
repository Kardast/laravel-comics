@extends('templates.base')

@section('pageTitle', 'DC Comics')

@section('pageMain')

    <main>
        <div class="content">

            <div class="container">

              <div class="series">

                <h2>CURRENT SERIES</h2>
              </div>

              <div class="comics-container">

                <!-- qui ci va il tag che ti crei nel componente -->
                {{-- <ComicsCard v-for="(cardiesimo, index) in cards" :key="index" :details="cardiesimo" /> --}}
                @foreach ($arrComics as $card)

                    <div class="comics-card">

                        <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
                        <h4>{{ $card['series'] }}</h4>
                    </div>
                @endforeach
              </div>

              <div class="load-b">

                <a href="#">LOAD MORE</a>
              </div>
            </div>
          </div>
    </main>
@endsection
