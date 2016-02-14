<?php
/**
 * Created by PhpStorm.
 * User: Ronald
 * Date: 13/02/2016
 * Time: 21:50
 */

    interface PacoteThrowable extends Throwable {/*pode colocar mais funções de exceção aqui*/ }

    class PacoteExcecao extends Exception implements PacoteThrowable {/*pode colocar mais funções de exceção aqui*/}

   /*
    * @param int $dividendo de uma divisão que pode ser qualquer número inteiro;
    * @param int $divisor de uma divisão que pode ser um número inteiro, exceto o número zero (0).
    */
    function divisao(int $dividendo, int $divisor) {
        if($divisor == 0){
            throw new PacoteExcecao('Não pode dividir por zero!!');
        }
        return $dividendo/$divisor;
    }

    //Só vai funcionar para o PHP 7
    try {
        //Criando um erro para lançar a exceção...
        echo divisao(10, 0);
    } catch (Exception $e) {
        echo "Exceção: " . $e->getMessage().'<br/>';
    } catch (Error $e) {
        echo "Erro: " . $e->getMessage().'<br/>';
    }

    //No PHP 6 não vai mostrar essa linha
    echo 'Apresentou exceção mas continuou!'.'<br/>';