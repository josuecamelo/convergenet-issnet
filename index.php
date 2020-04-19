<?php
include "Recibos.php";
include "Rps.php";
include "Tomador.php";

$arquivo = fopen('RPS.TXT', 'r');

$notas = [];

while(!feof($arquivo)){
    $linha = fgets($arquivo, 10240);

    if( substr( $linha, 0, 3 ) === '991' ){
        $recibos = new Recibos();
        $rps = new Rps();
        $tomador = new Tomador();

        $recibos->setNumeroLote( substr( $linha, 3,  17 ) );
        $recibos->setCnpj( substr( $linha, 18, 14 ) );
        $recibos->setInscMunicipal( substr( $linha, 32, 15 ) );
        $recibos->setQuantidadeRps( substr( $linha, 47, 3 ) );
    }

    if( substr( $linha, 0, 3 ) === '992' ){
        $rps->setNumeroRps( substr( $linha, 3, 15 ) );
        $rps->setSerieRps( substr( $linha, 18, 5 ) );
        $rps->setTipoRps( substr( $linha, 23, 1 ) );
        $rps->setDataEmissao( substr( $linha, 24, 14 ) );
        $rps->setNaturezaOperacao( substr( $linha, 38, 1 ) );
        $rps->setRegimeTributacao( substr( $linha, 39, 1 ));
        $rps->setOptanteSimplesNacional( substr( $linha, 40, 1 ) );
        $rps->setIncentivadorCultural( substr( $linha, 41, 1 ) );
        $rps->setValorServicos( substr( $linha, 42, 16 ) );
        $rps->setValorDeducoes(substr( $linha, 61, 16 ));
        $rps->setValorPis(substr( $linha, 76, 16 ));
        $rps->setValorConfins(substr( $linha, 93, 16 ));
        $rps->setValorIR(substr( $linha, 127, 16 ));
        $rps->setValorCsll(substr( $linha, 144, 16 ));
        $rps->setIssRetido(substr( $linha, 161, 1 ));
        $rps->setValorISS(substr( $linha, 162, 16 ));
        $rps->setValorInss(substr( $linha, 110, 16 ));
        $rps->setOutrasRetencoes(substr( $linha, 179, 16 ));
        $rps->setBaseCalculo(substr( $linha, 196, 16 ));
        $rps->setAliquota(substr( $linha, 213, 6 ));
        $rps->setValorLiquidoRps(substr( $linha, 222, 16 ));
        $rps->setDescontoIncondicionado(substr( $linha, 239, 16 ));
        $rps->setDescontoCondicionado(substr( $linha, 256, 16 ));
        $rps->setItemListaServicos(substr( $linha, 273, 4 ));
        $rps->setCodigoCnae(substr( $linha, 277, 8 ));
        $rps->setCodigoTributacaoMunicipio(substr( $linha, 285, 20 ));
        $rps->setMunicipioPrestador(substr( $linha, 305, 7 ));
        $rps->setCpfCnpjPrestador(substr( $linha, 312, 14 ));

        $tomador->setCpfCnpj(substr( $linha, 341, 14 ));
        $tomador->setInscricaoMunicipalTomador(substr( $linha, 355, 15 ));
        $tomador->setRazaoSocial(substr( $linha, 370, 115 ));
        $tomador->setEndereco(substr( $linha, 485, 125 ));
        $tomador->setNumero(substr( $linha, 610, 10 ));
        $tomador->setComplemento(substr( $linha, 620, 60 ));
        $tomador->setBairro(substr( $linha, 680, 60 ));
        $tomador->setCodigoMunicipioIBGE(substr( $linha, 740, 7 ));
        $tomador->setUf(substr( $linha, 747, 2));
        $tomador->setCep(substr( $linha, 749, 8 ));
        $tomador->setTelefone(substr( $linha, 757, 11 ));
        $tomador->setEmail(substr( $linha, 768, 80 ));
    }

    if( substr( $linha, 0, 3 ) === '993' ){
        $rps->setDescricaoServico(substr( $linha, 3, 2000 ));

        $recibos->setTomador($tomador);
        $recibos->setRps($rps);
        $notas[] = $recibos;
    }
}

echo "<pre>";
print_r($notas);
echo "</pre>";