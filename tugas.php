<?php
   class mobil {
      public $merk="beat";
      public $TahunProduksi="1933";
      public $warna="renbow";
      public $kecepatan="1000";

      public function start(){
        echo "mobil berjalan";
      } 

      public function akselerasi(){
        echo " mobil akselerasi";
      }

      public function berhenti(){
        echo " mabil berhenti";
      }

   }
   $mobil = new mobil() ;
   echo $mobil->merk;
   echo $mobil->TahunProduksi;
   echo " <br> ";
   echo $mobil->warna;
   echo " <br> ";
   echo "kecepatan mobil : ".$mobil->kecepatan;
   echo " <br> ";
   echo $mobil->start();

   $mobil2 = new mobil() ;
   $mobil2->merk="pario";
   $mobil2->TahunProduksi="2017";
   $mobil2->warna="hijau";
   $mobil2->kecepatan="150";
   echo " <br> ";
   echo $mobil2->merk;
   echo $mobil2->TahunProduksi;
   echo " <br> ";
   echo $mobil2->warna;
   echo " <br> ";
   echo "kecepatan mobil : ".$mobil2->kecepatan;
   echo " <br> ";

