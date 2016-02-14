<?php
/**
 * Created by PhpStorm.
 * User: Ronald
 * Date: 13/02/2016
 * Time: 21:36
 */

    /*
     * @param int $ladoMaior lado maior do retângulo
     * @param int $ladoMenor lado menor do retângulo
     */
    function semiPerimetro(int $ladoMaior, int $ladoMenor) {
        return $ladoMaior + $ladoMenor;
    }

    //Só vai funcionar para o PHP 7
    try {
        echo semiPerimetro("ladoA", "ladoB");
    } catch (Exception $e) {
        echo "Exceção: " . $e->getMessage().'<br/>';
    } catch (Error $e) {
        echo "Erro: " . $e->getMessage().'</br>';
    }

    //No PHP 6 não vai mostrar essa linha
    echo 'Apresentou exceção mas continuou!'.'<br/>';