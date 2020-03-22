<?php
class Tableau{

        public  $tableau;
        public $taille;
        /**
         * constructeur prend la taille et genere un tableau de taille taille
         */
        public  function __construct($taille){
            $this->taille=$taille;
            $this->tableau=array();
            for($i=0;$i<$this->taille;$i++)
                $this->tableau[$i]=random_int ( 0 , 100 );
        }
        /**
         * tri a bulle
         */
        function tri_bulle(){
            $passage = 0;
            do{
                $permut = false;
                for($i=0;$i<$this->taille-$passage-1;$i++){
                    if($this->tableau[$i]>$this->tableau[$i+1]){
                        $temp = $this->tableau[$i];
                        $this->tableau[$i] = $this->tableau[$i+1];
                        $this->tableau[$i+1] = $temp;
                        $permut = true;
                        }
                    }
                $passage++;
                }while($permut);
        }
        /**
         * tri a insertion
         */
        function tri_insertion(){
           for($i=1;$i<$this->taille;$i++){
               $en_cours = $this->tableau[$i];
               $j=$i;
                while($j>0 and $this->tableau[$j-1]>$en_cours){
                    $this->tableau[$j]=$this->tableau[$j-1];
                    $j--;
                }
                $this->tableau[$j]=$en_cours;
           }
        }
        /**
         * affichage de tableau
         */
        function affichage(){
            for($i= 0;$i<$this->taille;$i++)
            print($this->tableau[$i].' | ');
            echo PHP_EOL;
        }
}
/*********************************programme***********************************/
$tab1 = new Tableau(3000);

$tab1->affichage();
$t1=time();
$tab1->tri_insertion();
$duree1=time()-$t1;
$tab1->affichage();
echo 'duree: ',$duree1;