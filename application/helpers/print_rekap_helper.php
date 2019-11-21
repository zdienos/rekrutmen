<?php
define('FPDF_FONTPATH', 'font/');
require('fpdf.php');

class reportProduct extends FPDF
{
  var $widths;
  var $aligns;

function SetWidths($w)
{
  $this->widths=$w;
}

function SetAligns($a)
{
  $this->aligns=$a;
}

function Row($data)
{
  $nb=0;
  for($i=0;$i<count($data);$i++)
    $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
  $h=(4*$nb);
  $this->CheckPageBreak($h);
  for($i=0;$i<count($data);$i++)
  {
   $w=$this->widths[$i];
   $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
   $x=$this->GetX();
   $y=$this->GetY();
   $this->Rect($x,$y,$w,$h);
   $this->MultiCell($w,4,$data[$i],0,$a);
   $this->SetXY($x+$w,$y);
  }
  $this->Ln($h);
}

function CheckPageBreak($h)
{
  if($this->GetY()+$h>$this->PageBreakTrigger)
  $this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
  $cw=&$this->CurrentFont['cw'];
  if($w==0)
   $w=$this->w-$this->rMargin-$this->x;
  $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
  $s=str_replace("\r",'',$txt);
  $nb=strlen($s);
  if($nb>0 and $s[$nb-1]=="\n")
   $nb--;
  $sep=-1;
  $i=0;
  $j=0;
  $l=0;
  $nl=1;
  while($i<$nb)
  {
   $c=$s[$i];
   if($c=="\n")
   {
    $i++;
    $sep=-1;
    $j=$i;
    $l=0;
    $nl++;
    continue;
   }
   if($c==' ')
    $sep=$i;
   $l+=$cw[$c];
   if($l>$wmax)
   {
    if($sep==-1)
    {
     if($i==$j)
      $i++;
    }
    else
     $i=$sep+1;
    $sep=-1;
    $j=$i;
    $l=0;
    $nl++;
   }
   else
   $i++;
 }
 return $nl;
}

function Header()
{
  if($this->kriteria=="cetak_laporan")
  {
   //$this->image(base_url().'assets/images/logo-iain2.jpg',80,40,50,50); //left - top  - width - height
/*
   $nm=$this->nama;

   $this->Ln(2);
   $this->SetFont('Arial','B',10);
   $this->MultiCell(0,4,'PT. INDAH KIAT,Tbk.',0,1,'C');
   $this->SetFont('Arial','B',12);
   $this->MultiCell(0,4,'Jl. KH. Abdul Fatah Hasan No.11-12, Cipare, Telp (0254) 22-77038',0,1,'C');
   $this->Ln(5);
   $this->SetFont('Arial','B',10);
   $this->MultiCell(0,4,"===========================================================================================",0,1,'C');
*/
  }

}

function Footer()
{
  $this->SetY(-15);
  $this->SetFont('Arial','',6);
  $this->Cell(0,10,'CopyRight @ siakad - 2014',0,0,'C');
}

public function setKriteria($i)
{
  $this->kriteria=$i;
}

public function getKriteria()
{
  return $this->kriteria;
}

public function setNama($n)
{
  $this->nama=$n;
}

public function getNama()
{
  return $this->nama;
}

public function setDataset($n)
{
  $this->dataset=$n;
}

public function getDataset()
{
  return $this->dataset;
}

}

?>