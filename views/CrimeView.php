<?php
include_once('C:/xampp/htdocs/mds2013/controller/CrimeController.php');
class CrimeView{
        private $crimeCO;
        public function __construct(){
                $this->crimeCO = new CrimeController();
        }
        public function retornarDadosCrimeSomadoFormatado(){
                return $this->crimeCO->_retornarDadosDeSomaFormatado();
        }

        //Metodo duplicado para adaptacao do retorno de dados para a nova interface
        /**
        * @author Eduardo Augusto
        * @author Sergio Silva
        * @author Eliseu Egewarth
        * @copyright RadarCriminal 2013
        **/

        public function retornarDadosCrimeSomadoFormatoNovo(){
                return $this->crimeCO->_retornarDadosDeSomaFormatoNovo();
        }

        public function somaDeCrimePorAno($ano){
                return $this->crimeCO->_somaDeCrimePorAno($ano);
        }
 //Metodo duplicado para adaptacao do retorno de dados para a nova interface
        /**
        * @author Sergio Silva
        * @author Lucas Andrade Ribeiro
        * @copyright RadarCriminal 2013
        **/
        public function somaCrimeTodosAnos(){
                return $this->crimeCO->_somaCrimeTodosAnos();
        }
        //Metodo duplicado para adaptacao do retorno de dados para a nova interface
        /**
        * @author Lucas Andrade Ribeiro
        * @author Sergio Silva
        * @copyright RadarCriminal 2013
        **/

        public function somaHomicidios2010_2011(){
            for($i=2010; $i<2012; $i++){
                $somaHomicidios2010_2011[] = $this->_somaHomicidios2010_2011($i);
            }

            $retornoHomicidios2010_2011 = array_sum($somaHomicidios2010_2011);
            return $retornoHomicidios2010_2011;
        }

        public function somaTotalHomicidios(){
            for($i=2001; $i<2012; $i++){
                $somaTotalHomicidios[] = $this->_somaTotalHomicidios($i);
            }

            $retornoSomaTotalHomicidios = array_sum($somaTotalHomicidios);
            return $retornoSomaTotalHomicidios;
        }

        public function _somaGeralCrimeContraPessoa(){
            for($i=2001; $i<2012; $i++){
                $somaGeralCrimeContraPessoa[] = $this->_somaGeralCrimeContraPessoa($i);
            }
            $retornoSomaGeralCrimeContraPessoa = array_sum($somaGeralCrimeContraPessoa);
            return $retornoSomaGeralCrimeContraPessoa;
        }

        public function _somaCrime2010_2011(){
            for($i=2010; $i<2012; $i++){
                $somaCrime2010_2011[] = $this->_somaGeralCrimeContraPessoa($i);
            }
            $retornoSomaCrime2010_2011 = array_sum($somaCrime2010_2011);
            return $retornoSomaCrime2010_2011;
        }
}