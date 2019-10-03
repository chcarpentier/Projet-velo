<?php
class Form_element
{
    

    public function __construct()
    {}
        
    public function inputText($name,$type,$placeholder,$value,$nomlabel)
    {
        return "<label for=$name>$nomlabel</label><input type=$type class='form-control' name=$name id=$name placeholder='$placeholder' value=$value>";
    }
    public function inputButton($classe, $intitul)
    {
        return "<button class='$classe' type='submit'>$intitul</button>";
        
    }

   
}