@extends('template.index')

@section('content')
    <div class="col-8 m-auto">
        <div class="row">
            <div class="col">
                <div class="card col" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Questão 1</h5>
                        @php
                            $array1 = [1, 2, 4, 6, 7, 9, 11, 14, 24, 26];
                            echo ' $array=[1,2,4,6,7,9,11,14,24,26] <br> O maior numero -> ' . max($array1) . ' <br> O menor ->' . min($array1);
                        @endphp

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card col" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Questão 2</h5>
                        @php
                            $array2 = [];
                            for ($i = 0; $i < 6; $i++) {
                                $array2[$i] = rand(10, 20);
                            }
                            
                            function somar($item)
                            {
                                $soma = 0;
                                for ($i = 0; $i < count($item); $i++) {
                                    $soma = $soma + $item[$i];
                                }
                            
                                return $soma;
                            }
                            echo '$array=[' . implode(', ', $array2) . '] <br> A soma ->' . somar($array2);
                            
                        @endphp

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card col" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Questão 3</h5>
                        @php
                            class AssinaDocumentoClass
                            {
                                public $ProprietarioDocumento;
                                public $ValidadeDocumento;
                            
                                public function __construct($ProprietarioDocumento, $ValidadeDocumento)
                                {
                                    $this->ProprietarioDocumento = $ProprietarioDocumento;
                                    $this->ValidadeDocumento = $ValidadeDocumento;
                                }
                            
                                public function assinarDocumento()
                                {
                                    $assinatura = $this->ProprietarioDocumento . ' ' . $this->ValidadeDocumento;
                                    return $assinatura;
                                }
                            }
                            $assina = new AssinaDocumentoClass('Joao', '30/11/2020');
                            echo $assina->assinarDocumento();
                        @endphp

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card col mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Questão 4</h5>
                        @php
                            $nome = 'FabricaInfo';
                            
                            function countUpperCase($string)
                            {
                                $stringlower = strtolower($string);
                            
                                return strlen($string) - similar_text($string, $stringlower);
                            }
                            
                            echo "A string: $nome tem " . countUpperCase($nome) . ' letras maiúsculas';
                            
                        @endphp

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
