<?php

class Functions{
    function GeraAtributos($arrAtributos){
                $return = "";
                foreach ($arrAtributos as $key => $value){ 
                if($key == count($arrAtributos)-1){
                    $return = $return.$value;
                }else if($key != count($arrAtributos)-1){
                    $return = $return.$value.",";
                }            
            }
            return $return;
        }
        
    public function listaMinistracao($min)
    {
        $i = 0;
        $arrMin = array();
        foreach ($min as $value) 
            {
                foreach ($value as $key => $v) {    
                    if($key == "id")
                    {                        
                        $arrMin[$i]['id'] = $v;
                    }
                    if($key == "data")
                    {                        
                        $arrMin[$i]['data'] = $v;
                    }
                    if($key == "ministracao")
                    {                        
                        $arrMin[$i]['ministracao'] = $v;
                    }
                    if($key == "ministro")
                    {                       
                        $arrMin[$i]['ministro'] = $v;
                    }
                    if($key == "arquivo")
                    {                        
                        $arrMin[$i]['arquivo'] = $v;
                    }
                }
                
                $i++;
                
                
            }  
            return $arrMin;
    }    
}
