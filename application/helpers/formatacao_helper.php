<?php

// Funcao que formata os campos para serem mostrados ou salvos
function formatar($string, $tipo = "")
{
    if(empty($string))
        return false;
    
    // Limpa texto deixando somewnte os numeros
    $string = preg_replace("#[^0-9]#", "", $string);
    
    // Caso nao informe o tipo, detecta alguns padroes
    if (!$tipo)
    {
        switch (strlen($string))
        {
            case 10: 	$tipo = 'fone'; break;
            case 8: 	$tipo = 'cep';  break;
            case 11: 	$tipo = 'cpf';  break;
            case 14:    $tipo = 'cnpj'; break;
        }
    }
    
    // Formata no tipo escolhido
    switch($tipo)
    {
        case 'fone':
            if(strlen($string) == 10)
                $string = '(' . substr($string, 0, 2) . ') ' . substr($string, 2, 4) . '-' . substr($string, 6);
            else
                $string = '(' . substr($string, 0, 2) . ') ' . substr($string, 2, 5) . '-' . substr($string, 7);
            break;
        case 'cep':
            $string = substr($string, 0, 5) . '-' . substr($string, 5, 3);
            break;
        case 'cpf':
            $string = substr($string, 0, 3) . '.' . substr($string, 3, 3) . '.' . substr($string, 6, 3) . '-' . substr($string, 9, 2);
            break;
        case 'cnpj':
            $string = substr($string, 0, 2) . '.' . substr($string, 2, 3) . '.' . substr($string, 5, 3) . '/' . substr($string, 8, 4) . '-' . substr($string, 12, 2);
            break;
        case 'dt2bd':
            $string = substr($string, -4) . '-' . substr($string, 2, 2) . '-' . substr($string, 0, 2);
            break;
        case 'bd2dt':
            $string = substr($string, -2) . '/' . substr($string, 4, 2) . '/' . substr($string, 0, 4);
            break;
    }
    return $string;
}

function somente_numeros($string)
{
    return preg_replace("#[^0-9]#", "", $string);
}

function icon_status($status)
{
    switch($status)
    {
        case 0:
            return "<span class='glyphicon glyphicon-remove-sign' style='color:red' title='Inativo'></span>";
            break;
        case 1:
            return "<span class='glyphicon glyphicon-ok-sign' style='color:green' title='Ativo'></span>";
            break;        
        case 2:
            return "<span class='glyphicon glyphicon-lock' style='color:orange' title='Bloqueado'></span>";
            break;
    }
}