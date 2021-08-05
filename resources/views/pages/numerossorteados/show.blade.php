@extends('template.template')

@section('show')
    <br>
    <div class="d-flex justify-content-center">
        <div class="btn-group mr-2" role="group" aria-label="Second group">
            <div class="acoes">
                <a class="btn btn-primary" href=" {{ route('concurso.index')}} ">Voltar</a>
            </div>
        </div>
    </div>

    <table class="table table-striped">
        <br>

        <tbody>
            <tr>
                <td>Resultado Lotomania</td>
                <td>@php
                    $s = 0;
                @endphp
                @for ($i = 0 ; $i < 20; $i++)
                    <input value="{{$concurso->numerosorteado[$s]}}">
                        @php
                            $s = $s + 1;

                        @endphp
                @endfor</td>
            </tr>
        </tbody>
    </table>

    <center>

        <section class="container">
            <table class="table table-striped">

                <thead>
                <tr>
                    <th scope="col">Cartão</th>
                    <th scope="col">Sequência Númerica</th>
                    <th scope="col">Acertos</th>

                </tr>
                </thead>

            

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 14)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach
            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 13)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 12)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 11)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 10)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 9)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 8)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach
            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 7)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 6)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 5)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 4)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 3)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 2)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 1)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach



            </table>

        </section>

@endsection

