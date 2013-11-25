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
        public function somaTotalHomicidios(){
                return $this->crimeCO->_somaTotalHomicidios();
        }
       
        public function somaTotalRoubo(){
                return $this->crimeCO->_somaTotalRoubo();
        }
       
        public function somaTotalFurtos(){
                return $this->crimeCO->_somaTotalFurtos();
        }
}