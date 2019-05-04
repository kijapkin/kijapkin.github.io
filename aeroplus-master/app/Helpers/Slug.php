<?php namespace App\Helpers;

class Slug {
	public static function str_slug($string = '') {
		$str = mb_strtolower($string, 'UTF-8');
		$leter_array = array(
			'a' => 'а', 'b' => 'б', 'v' => 'в', 'g' => 'г',
			'd' => 'д', 'e' => 'е', 'e' => 'э', 'jo' => 'ё',
			'zh' => 'ж', 'z' => 'з', 'j' => 'й',
			'k' => 'к', 'l' => 'л', 'i' => 'i', 'm' => 'м',
			'n' => 'н', 'o' => 'о', 'p' => 'п', 'r' => 'р',
			's' => 'с', 't' => 'т', 'u' => 'у', 'f' => 'ф',
			'kh' => 'х', 'ts' => 'ц', 'ch' => 'ч', 'sh' => 'ш',
			'shch' => 'щ', '' => 'ъ', 'y' => 'ы', '' => 'ь',
			'yu' => 'ю', 'ya' => 'я', '_' => ' ', 'i' => 'и',
			'' => ',', '' => '.' 
		);
		return str_replace(array_values($leter_array), array_keys($leter_array), $str);
	}
}