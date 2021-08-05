

        <tbody>
            <tr>
                <th scope="row">{{$jogo->identificador_jogo}}</th>
                <td>
                    @php
                    $quebralinha = 0;
                    $acertos = 0;
                    @endphp

                    <section class="flex-form">

                    @for($i=0; $i < 50; $i++)
                        @php
                            $soma = 0;
                        @endphp
                            @for ($j=0; $j < 20; $j++)
                                @if ($jogo->numerojogado[$i] == $concurso->numerosorteado[$j])
                                    <div class="green">{{$jogo->numerojogado[$i]}}</div>
                                    @php
                                        $acertos++;
                                    @endphp
                                @endif
                                @if ($jogo->numerojogado[$i] != $concurso->numerosorteado[$j])
                                    @php
                                        $soma = $soma + 1;
                                    @endphp
                                @endif
                            @endfor
                            @if ($soma == 20)
                                <div class="red">{{$jogo->numerojogado[$i]}}</div>
                            @endif
                    @endfor

                    <section>

                </td>

                <td>
                        @if ($acertos == 0 || $acertos >=15)
                        <div class="alerta-verde">
                            {{$acertos}}
                        </div>
                        @else
                        <div class="alerta-vermelho">
                            {{$acertos}}
                        </div>
                        @endif
                </td>
            </tr>
        </tbody>
