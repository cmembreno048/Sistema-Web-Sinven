<?php 

class Web_Service_Res
{
  public $Ok;
  public $Data;


  function NoSucces($mensaje){
      $this->Ok=0;
      $this->Data=$mensaje;
      

  }
  function Succes($data){
      $this->Ok=1;
      $this->Data=$data;
      

  }

}
 ?>
