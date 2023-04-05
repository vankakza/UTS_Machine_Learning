<?php 
$n = 6; 
$artahun = array (2007, 2008, 2009, 2010, 2011, 2012);
$arpdb = array (432.2, 510.2, 539.6, 755.0, 893.0, 918.0); 
$argrowth = array (6.3, 6.0, 4.6, 6.2, 6.2, 6.0); 
$arpdbkapita = array (1861, 2168, 2263, 3167, 3688, 3741); 

// Prediksi PDB per kapita 
$acctahun = 0; 
$accpdbkapita = 0; 
$acctahunpdbkapita = 0; 
$acctahun2 = 0; 

for ($i=0; $i<$n; $i++) 
{ 
    $acctahun = $acctahun + $artahun [$i] ; 
    $accpdbkapita = $accpdbkapita + $arpdbkapita [$i] ; 
    $acctahunpdbkapita = $acctahunpdbkapita + ($artahun [$i] * $arpdbkapita [$i]); 
    $acctahun2 = $acctahun2 + ($artahun [$i] * $artahun [$i]) ; 
} 
$atas_b0_pdbkapita = $n * $acctahunpdbkapita - $acctahun * $accpdbkapita;
$bawah_b0_pdbkapita = $n * $acctahun2 - $acctahun * $acctahun; 
$b0_pdbkapita = $atas_b0_pdbkapita / $bawah_b0_pdbkapita; 

$atas_b1_pdbkapita = $accpdbkapita * $acctahun2 - $acctahun * $acctahunpdbkapita; 
$bawah_b1_pdbkapita = $n * $acctahun2 - $acctahun * $acctahun; 
$b1_pdbkapita = $atas_b1_pdbkapita / $bawah_b1_pdbkapita;

$tahunprediksi = 2015; 
$pdbkapita_pred = $b0_pdbkapita * $tahunprediksi + $b1_pdbkapita; 
echo "Maka Prediksi PDB perKapita adalah $pdbkapita_pred"; 
?>