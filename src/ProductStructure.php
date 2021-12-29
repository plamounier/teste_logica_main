<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
       
        $productsFormatado = [];


        for ($i=0; $i < count(self::products); $i++) { 
            $arrayProdutoCorTamanho = explode("-", self::products[$i]);
            $cor = $arrayProdutoCorTamanho[0];
            $tamanho = $arrayProdutoCorTamanho[1];
            if (!isset($productsFormatado[$cor])) {
               $productsFormatado[$cor][$tamanho] = 1;
            }else{
                if (!isset($productsFormatado[$cor][$tamanho])) {
                    $productsFormatado[$cor][$tamanho] = 1;
                }else{
                    $productsFormatado[$cor][$tamanho] = $productsFormatado[$cor][$tamanho] + 1;
                }
            }
       }
       
       return $productsFormatado;
    }
}