<?php



require('../fpdf182/fpdf.php');


class PDF extends FPDF
{
    function Header()
    {
        //Cabecera
            $this->Image('../img/logo2.png',100, 5, 30,30,'png' );
            $this->Ln(20);
            $this->SetFont('Helvetica','',15);
            
                
            $this->SetY(35);
            $this->Cell(80);
            $this->Cell(60,4,'Cooperativa Mixta Mujeres Unidas Limitada',0,1,'C');
            $this->SetFont('Helvetica','',12);
            $this->SetY(40);
            $this->Cell(80);
            $this->Cell(60,4,'Siguatepeque, Comayagua',0,1,'C');
            $this->Cell(80);
            $this->Cell(60,4,'Tel. 3270-0416',0,1,'C');
           
    }

    function Footer()
    {
            
    }

}
    


?>