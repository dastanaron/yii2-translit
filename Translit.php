<?php

namespace dastanaron\translit;

/**
 * This is just an example.
 */
class Translit
{

    public $rus;
    public $lat;
    private $route;
    
    public function __construct() {
        $this->rus = [
            'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И',
            'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т',
            'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь',
            'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё',
            'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п',
            'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ',
            'ъ', 'ы', 'ь', 'э', 'ю', 'я'
        ];
        $this->lat = [
            'A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I',
            'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T',
            'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y',
            'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e',
            'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o',
            'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh',
            'sch', 'y', 'y', 'y', 'e', 'yu', 'ya'
        ];
    }
    
    public function translit($str, $nonspace=true, $route='')
    {
       $string = '';
       if(empty($route)) {
            $this->route($str);
       }
       else {
           $this->route = $route;
       }
       
       if($this->route == 'en-ru') {
           $string = str_replace($this->lat, $this->rus, $str);
       }
       elseif($this->route == 'ru-en') {
           $string = str_replace($this->rus, $this->lat, $str);
       }
       else {
           throw new Exception('Неизвестное направление транслитерации');
       }

       if ($nonspace === true) {
           $string = str_replace(' ', '_', $string);
       }
       
       return $string;
       
    }
    
    private function route($str)
    {
        if(preg_match('#[A-Za-z]+#', $str)) {
            $this->route = 'en-ru';
        }
        else {
            $this->route = 'ru-en';
        }
    }
    
    
}
