<?php namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use \crocodicstudio\crudbooster\controllers\CBController;

/**
 * 
 */
class CrudBoosterAdaptive extends CBController
{
	private $CBController;
	private $__form = [];
	private $__ConnectToAnotherTable = [];

	public function ConnectToAnotherTable(
		$labels_table, $category_pk, $category_id,
		$labels_pkname, $labels_pk, $labels_label,
		$item_pk, $item_id, $conn_table, $conn_save = 'content'
	) {
		if($this->__ConnectToAnotherTable[$conn_table])
			throw new \Exception('Table "' . $conn_table . '" alredy connected', 1);
			
		foreach(DB::table($labels_table)->where($category_pk, $category_id)->get() as $row) {
			$label = DB::table($conn_table)->where($labels_pkname, $row->{$labels_pk})->where($item_pk, $item_id)->first();
			$this->form[] = [
				'label' 			=> $row->{$labels_label},
				'name' 				=> $conn_save . '|' . $row->{$labels_pk},
				'type' 				=> 'text',
				'validation' 		=> 'string',
				'width' 			=> 'col-sm-10',
				'value' 			=> is_null($label) ? '---' : $label->content
			];
		}
		$this->__ConnectToAnotherTable[$conn_table] = true;
	}

	public function SaveConnectToAnotherTable(
		$labels_table, $category_pk, $category_id,
		$labels_pkname, $labels_pk, $labels_label,
		$item_pk, $item_id, $conn_table, $conn_save = 'content'
	) {
		foreach(DB::table($labels_table)->where($category_pk, $category_id)->get() as $row) {
			$label = DB::table($conn_table)->where($labels_pkname, $row->{$labels_pk})->where($item_pk, $item_id)->first();
			if(is_null($label)) {
				DB::table($conn_table)->insert([
					$labels_pkname => $row->{$labels_pk},
					$item_pk => $item_id,
					'content' => Input::get($conn_save . '|' . $row->{$labels_pk})
				]);
			} else {
				DB::table($conn_table)->where($labels_pkname, $row->{$labels_pk})->where($item_pk, $item_id)->update([
					'content' => Input::get($conn_save . '|' . $row->{$labels_pk})
				]);
			}
		}
	}

	public function getArgs() {
		$__get = [];
		// Получаем данные get
		foreach (explode('&', Input::get('ref_parameter')) as $get) {
			$tmp = explode('=', $get);
			$__get[$tmp[0]] = $tmp[1];
		}
		return $__get;
	}
}