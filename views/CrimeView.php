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
        public function _somaHomicidios2010_2011(){
            return $this->crimeCO->somaHomicidios2010_2011();
        }

        public function _somaTotalHomicidios(){
            return $this->crimeCO->somaTotalHomicidios();
        }

        public function _somaGeralCrimeContraPessoa(){
                return $this->crimeCO->_somaGeralCrimeContraPessoa();
        }

        public function _somaGeralCrimeContraPessoa2010_2011(){
                return $this->crimeCO->_somaGeralCrimeContraPessoa2010_2011();
        }

        public function somaTotalRoubo(){
                return $this->crimeCO->_somaTotalRoubo();
        }

        public function somaTotalRoubo2010_2011(){
                return $this->crimeCO->_somaTotalRoubo2010_2011();
        }

        public function somaTotalFurtos(){
                return $this->crimeCO->_somaTotalFurtos();
        }

        public function somaLesaoCorporal(){
                return $this->crimeCO->_somaLesaoCorporal();
        }

        public function somaLesaoCorporal2010_2011(){
                return $this->crimeCO->_somaLesaoCorporal2010_2011();
        }

        public function _somaTotalTentativasHomicidio(){
                return $this->crimeCO->_somaTotalTentativasHomicidio();
        }

        public function _somaTotalTentativasHomicidio(){
                return $this->crimeCO->_somaTotalTentativasHomicidio2010_2011();
        }

        public function _somaTotalDignidadeSexual(){
                return $this->crimeCO->_somaTotalDignidadeSexual();
        }

        public function _somaTotalDignidadeSexual2010_2011(){
                return $this->crimeCO->_somaTotalDignidadeSexual2010_2011();
        }
}