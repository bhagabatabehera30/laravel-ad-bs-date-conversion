<?php
namespace Bhagabat\Adbsdate\Support;
class AdbsLocalHelper {

    private $_bs_local = 'ne_hi';
    private $LANG_DayOfWeek_Arr = [
        'hi_1' => 'रविवार',
        'hi_2' => 'सोमबार',
        'hi_3' => 'मंगलवार',
        'hi_4' => 'बुधबार',
        'hi_5' => 'बिहीबार',
        'hi_6' => 'शुक्रबार',
        'hi_7' => 'शनिबार',
        'ne_hi_1' => 'आईतवार',
        'ne_hi_2' => 'सोमबार',
        'ne_hi_3' => 'मंगलवार',
        'ne_hi_4' => 'बुधबार',
        'ne_hi_5' => 'बिहीबार',
        'ne_hi_6' => 'शुक्रबार',
        'ne_hi_7' => 'शनिबार',
        'ne_en_1' => 'Itwaar',
        'ne_en_2' => 'Somwar',
        'ne_en_3' => 'Mangalwar',
        'ne_en_4' => 'Budhwar',
        'ne_en_5' => 'Guruwar',
        'ne_en_6' => 'Shukrawar',
        'ne_en_7' => 'Shanivar',
    ];
    private $LANG_Month_Arr = [
        'hi_1' => 'बैशाख',
        'hi_2' => 'जेष्ठ',
        'hi_3' => 'असार',
        'hi_4' => 'श्रावण',
        'hi_5' => 'भाद्र',
        'hi_6' => 'आश्विन',
        'hi_7' => 'कार्तिक',
        'hi_8' => 'मंसिर',
        'hi_9' => 'पुष',
        'hi_10' => 'माघ',
        'hi_11' => 'फाल्गुन',
        'hi_12' => 'चैत्र',
        'np_hi_1' => 'बैशाख',
        'np_hi_2' => 'जेष्ठ',
        'np_hi_3' => 'असार',
        'np_hi_4' => 'श्रावण',
        'np_hi_5' => 'भाद्र',
        'np_hi_6' => 'आश्विन',
        'np_hi_7' => 'कार्तिक',
        'np_hi_8' => 'मंसिर',
        'np_hi_9' => 'पुष',
        'np_hi_10' => 'माघ',
        'np_hi_11' => 'फाल्गुन',
        'np_hi_12' => 'चैत्र',
        'np_en_1' => 'Baishakh',
        'np_en_2' => 'Jestha',
        'np_en_3' => 'Aashadha',
        'np_en_4' => 'Shrawan',
        'np_en_5' => 'Bhadra',
        'np_en_6' => 'Ashwin',
        'np_en_7' => 'Kartik',
        'np_en_8' => 'Mangsir',
        'np_en_9' => 'Paush',
        'np_en_10' => 'Magh',
        'np_en_11' => 'Falgun',
        'np_en_12' => 'Chaitra'
    ];

    public function __construct($lang='ne_hi')
    {
       $this->_bs_local = $lang;
    }
    public function _getDayOfWeek($day, $lang){
        $lang = ($lang != null) ? $lang : $this->_bs_local;
        return (isset($this->LANG_DayOfWeek_Arr[$this->_bs_local.'_'.$day])) ? $this->LANG_DayOfWeek_Arr[$this->_bs_local.'_'.$day] : '';
    }
    public function _getMonth($m, $lang){
        $lang = ($lang != null) ? $lang : $this->_bs_local;
        return (isset($this->LANG_Month_Arr[$this->_bs_local.'_'.$m])) ? $this->LANG_Month_Arr[$this->_bs_local.'_'.$m] : '';
    }

}
