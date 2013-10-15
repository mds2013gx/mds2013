<?php
// Demonstração de "Data Providers"
class Classe3Test extends PHPUnit_Framework_TestCase
{
    // Informa o nome do forneçedor de dados (@dataProvider) para a clase de teste
    /**
     * @dataProvider provider
     */

    // Recebe 3 parâmetros
    public function testCombine($a, $b, $c)
    {
        // Afirma que o valor do terceiro parâmetro é igual a concatenação dos primeiros dois separados por um espaço
        $this->assertEquals($c, $a . ' ' . $b);
    }

    // A função fornecedora de valores
    public function provider()
    {
        // retorna um array contendo 3 grupos de valores a serem testados
        return array(
            array('Hello', 'World', 'Hello World'),
            array('É', 'Nois', 'É Nois'),
            array('Deu', 'Certo', 'Deu certo')
        );
    }
}
?>