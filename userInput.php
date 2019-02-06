<?php


class TextInput
{
  public  $value = '';
  public $text = '';
    public function add($text)
    
    { 
       if(is_numeric($text))
       {
           $this->text .=$text;
       }
       else
       {
        $this->text .= $text;
       }
        
       //$v .= $this->value;
       // $value = $text;
    }
    public function getValue()
    { 
        if(is_numeric($this->value))
        {
            return $this->value;
        }
        else
        {
            return $this->text;
        }
            
       
        
    }
    
}

class  NumericInput extends TextInput
{

  public function add($numeric)
  {
      if(is_numeric($numeric))
      {
          $this->value .= $numeric;
      }
      else
      {
        $this->text = $numeric;  
      }
  }  
    
}
$text = new TextInput();
$text->add('1');
$text->add('v');

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $text->getValue();
echo $input->getValue();