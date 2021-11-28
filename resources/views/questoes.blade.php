@extends('template.index')

@section('content')
    <div class="col-8 m-auto">
        <div class="row">
            <div class="col">
                <div class="card col mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Questão 1</h5>
                        <p>
                        @php
                            $array1 = [1, 2, 4, 6, 7, 9, 11, 14, 24, 26];
                            echo ' $array=[1,2,4,6,7,9,11,14,24,26] <br> O maior numero -> ' . max($array1) . ' <br> O menor ->' . min($array1);
                        @endphp
                        </p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#questao">Code</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card col mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Questão 2</h5>
                        <p>
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
                        </p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#questao4">Code</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card col mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Questão 3</h5>
                        <p>
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
                        </p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#questao4">Code</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card col mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Questão 4</h5>
                        <p>
                            @php
                                $nome = 'FabricaInfo';
                                
                                function countUpperCase($string)
                                {
                                    $stringlower = strtolower($string);
                                
                                    return strlen($string) - similar_text($string, $stringlower);
                                }
                                
                                echo "A string: $nome tem " . countUpperCase($nome) . ' letras maiúsculas';
                                
                            @endphp
                        </p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#questao4">Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


    <div class="modal fade" id="questao" tabindex="-1" aria-labelledby="questaoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="questaoLabel">Questão 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    $array1 = [1, 2, 4, 6, 7, 9, 11, 14, 24, 26];<br>
                    echo ' $array=[1,2,4,6,7,9,11,14,24,26]  O maior numero -> ' . max($array1) . '  O menor ->' . min($array1);
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="questao2" tabindex="-1" aria-labelledby="questao2Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="questao2Label">Questão 2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    $array2 = [];<br>
                    for ($i = 0; $i < 6; $i++) {<br>
                        $array2[$i] = rand(10, 20);<br>
                    }<br>
                    
                    function somar($item)<br>
                    {<br>
                        $soma = 0;<br>
                        for ($i = 0; $i < count($item); $i++) {<br>
                            $soma = $soma + $item[$i];<br>
                        }<br>
                    
                        return $soma;<br>
                    }<br>
                    echo '$array=[' . implode(', ', $array2) . '] <br> A soma ->' . somar($array2);<br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="questao3" tabindex="-1" aria-labelledby="questao3Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="questao3Label">Questão 3</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    class AssinaDocumentoClass<br>
                    {<br>
                    public $ProprietarioDocumento;<br>
                    public $ValidadeDocumento;<br>

                    public function __construct($ProprietarioDocumento, $ValidadeDocumento)<br>
                    {<br>
                    $this->ProprietarioDocumento = $ProprietarioDocumento;<br>
                    $this->ValidadeDocumento = $ValidadeDocumento;<br>
                    }<br>

                    public function assinarDocumento()<br>
                    {<br>
                    $assinatura = $this->ProprietarioDocumento . ' ' . $this->ValidadeDocumento;<br>
                    return $assinatura;<br>
                    }<br>
                    }<br>
                    $assina = new AssinaDocumentoClass('Joao', '30/11/2020');<br>
                    echo $assina->assinarDocumento();<br>
                    @endphp
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="questao4" tabindex="-1" aria-labelledby="questao4lLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="questao4lLabel">Questão 4</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    $nome = 'FabricaInfo';<br>
                    <br>
                    function countUpperCase($string)<br>
                    {<br>
                    $stringlower = strtolower($string);<br>
                    <br>
                    return strlen($string) - similar_text($string, $stringlower);<br>
                    }<br>
                    <br>
                    echo "A string: $nome tem " . countUpperCase($nome) . ' letras maiúsculas';<br>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
@endsection
