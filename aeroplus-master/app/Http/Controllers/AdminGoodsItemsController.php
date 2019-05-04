<?php namespace App\Http\Controllers;

use Session;
use Request;
use DB;
use CRUDBooster;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

use App\Helpers\CrudBoosterAdaptive;

class AdminGoodsItemsController extends CrudBoosterAdaptive
{

	public function cbInit()
	{
		# START CONFIGURATION DO NOT REMOVE THIS LINE
		$this->title_field = "title";
		$this->limit = "20";
		$this->orderby = "id,desc";
		$this->global_privilege = false;
		$this->button_table_action = true;
		$this->button_bulk_action = true;
		$this->button_action_style = "button_icon";
		$this->button_add = true;
		$this->button_edit = true;
		$this->button_delete = true;
		$this->button_detail = true;
		$this->button_show = true;
		$this->button_filter = true;
		$this->button_import = false;
		$this->button_export = false;
		$this->table = "goods_items";
		# END CONFIGURATION DO NOT REMOVE THIS LINE
		$url 	= null; 
		$type 	= null; 
		$id 	= null;
		$__get = [];
		// Получаем данные get
		foreach (explode('&', Input::get('return_url')) as $get) {
			$tmp = explode('=', $get);
			$__get[$tmp[0]] = $tmp[1];
		}
		if(!$__get['parent_id'])
			$__get['parent_id'] = Input::all()['parent_id'];
		$url 	= explode('/', Request::url());
		$type 	= $url[count($url) - 2];
		$id 	= $url[count($url) - 1];

		# START COLUMNS DO NOT REMOVE THIS LINE
		$this->col = [];
		$this->col[] = [
			"label" => "Категория",
			"name" => "goods_category_id",
			"join" => "goods_category,title"
		];
		$this->col[] = [
			"label" => "Название",
			"name" => "title"
		];
		$this->col[] = [
			"label" => "Артикль",
			"name" => "artikle"
		];
		$this->col[] = [
			"label" => "Цена",
			"name" => "price"
		];
		$this->col[] = [
			"label" => "Акционная цена",
			"name" => "latest_price"
		];

		# END COLUMNS DO NOT REMOVE THIS LINE

		# START FORM DO NOT REMOVE THIS LINE
		$this->form = [];
		$this->form[] = [
			'label' 				=> 'Категория',
			'name' 					=> 'goods_category_id',
			'type' 					=> 'select2',
			'validation' 			=> 'required|integer|min:0',
			'width' 				=> 'col-sm-10',
			'datatable' 			=> 'goods_category,title'
		];
		$this->form[] = [
			'label' 				=> 'Название',
			'name' 					=> 'title',
			'type' 					=> 'text',
			'validation' 			=> 'required|string|min:3|max:255',
			'width' 				=> 'col-sm-10',
			'placeholder' 			=> 'You can only enter the letter only'
		];
		$this->form[] = [
			'label' 				=> 'Артикль',
			'name' 					=> 'artikle',
			'type' 					=> 'text',
			'validation' 			=> 'required|string|min:0|max:255',
			'width' 				=> 'col-sm-10',
			'placeholder' 			=> ''
		];
		$this->form[] = [
			'label' 				=> 'Цена',
			'name' 					=> 'price',
			'type' 					=> 'money',
			'validation' 			=> 'required|integer|min:0',
			'width' 				=> 'col-sm-10'
		];
		$this->form[] = [
			'label' 				=> 'Акционная цена',
			'name' 					=> 'latest_price',
			'type' 					=> 'money',
			'validation' 			=> 'required|integer|min:0',
			'width' 				=> 'col-sm-10'
		];
		///
		$this->form[] = [
			'label' 				=> 'Производитель',
			'name' 					=> 'producer_id',
			'type' 					=> 'select',
			'validation' 			=> 'integer|min:0',
			'width' 				=> 'col-sm-10',
			'datatable' 			=> 'producer,name'
		];

		$this->form[] = [
			'label' 				=> 'Тип',
			'name' 					=> 'type_id',
			'type' 					=> 'select',
			'validation' 			=> 'integer|min:0',
			'width' 				=> 'col-sm-10',
			'datatable' 			=> 'type,name'
		];

		$this->form[] = [
			'label' 				=> 'Тип установки внутреннего блока',
			'name' 					=> 'type_installation_id',
			'type' 					=> 'select',
			'validation' 			=> 'integer|min:0',
			'width' 				=> 'col-sm-10',
			'datatable' 			=> 'type_installation,name'
		];
		///
		$this->form[] = [
			'label' 				=> 'Видео',
			'name' 					=> 'video',
			'type' 					=> 'text',
			'validation' 			=> 'min:0',
			'width' 				=> 'col-sm-10',
			'placeholder' 			=> 'Якщо відео немає залиште "-"'
		];
		if($type == 'detail') {
			$images = DB::table('goods_item_images')->where('goods_items_id', $id)->get();
			foreach ($images as $object) {
				$this->form[] 					= [
					'label' 					=> 'Изображение №' . $object->id,
					'name' 						=> 'image_' . $object->id,
					'type' 						=> 'upload',
					'validation' 				=> 'required|image|max:3000',
					'width' 					=> 'col-sm-10',
					'value' 					=> $object->image
				];
			}
		} else {
			$images = DB::table('goods_item_images')->where('goods_items_id', $id)->get();
			foreach ($images as $object) {
				$this->form[] 					= [
					'label' 					=> 'Изображение №' . $object->id,
					'name' 						=> 'image_' . $object->id,
					'type' 						=> 'upload',
					'validation' 				=> 'required|image|max:3000',
					'width' 					=> 'col-sm-10',
					'value' 					=> $object->image
				];
			}
			$this->form[] = [
				"label"					=> 'Загрузить Изображения',
				"name"					=> "custom_field",
				"type"					=> "custom",
				"html" 					=> "<input type='file' title='Изображения' class='form-control col-sm-10' name='images[]' id='custom_field' value='' multiple/>"
			];
		}

		$this->form[] = [
			"label"					=> '',
			"name"					=> "custom_field",
			"type"					=> "custom",
			"html"					=> '<p style="text-align: center;"><strong>Характеристики</strong></p>',
			'value' 				=> '<p><strong>Характеристики</strong></p>'
		];
		// Характеристики
		$this->ConnectToAnotherTable(
			'goods_labels',
			'goods_category_id',
			$__get['parent_id'],
			'goods_labels_id',
			'id',
			'label',
			'goods_items_id',
			$id,
			'goods_item_labels'
		);

		$this->form[] = [
			"label"					=> '',
			"name"					=> "custom_field",
			"type"					=> "custom",
			"html"					=> '<p style="text-align: center;"><strong>Описание </strong></p>',
			"value" 				=> '<p><strong>Описание </strong></p>'
		];
		$this->ConnectToAnotherTable(
			'goods_descriptions',
			'goods_category_id',
			$__get['parent_id'],
			'goods_descriptions_id',
			'id',
			'descriptions',
			'goods_items_id',
			$id,
			'goods_item_descriptions',
			'descriptions'
		);

		# END FORM DO NOT REMOVE THIS LINE
		/*
			   | ---------------------------------------------------------------------- 
			   | Sub Module
			   | ----------------------------------------------------------------------     
			   | @label          = Label of action 
			   | @path           = Path of sub module
			   | @foreign_key 	  = foreign key of sub table/module
			   | @button_color   = Bootstrap Class (primary,success,warning,danger)
			   | @button_icon    = Font Awesome Class  
			   | @parent_columns = Sparate with comma, e.g : name,created_at
			   | 
		*/
		$this->sub_module = array();

		/*
			   | ---------------------------------------------------------------------- 
			   | Add More Action Button / Menu
			   | ----------------------------------------------------------------------     
			   | @label       = Label of action 
			   | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
			   | @icon        = Font awesome class icon. e.g : fa fa-bars
			   | @color 	   = Default is primary. (primary, warning, succecss, info)     
			   | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
			   | 
		*/
		$this->addaction = array();

		/*
			   | ---------------------------------------------------------------------- 
			   | Add More Button Selected
			   | ----------------------------------------------------------------------     
			   | @label       = Label of action 
			   | @icon 	   = Icon from fontawesome
			   | @name 	   = Name of button 
			   | Then about the action, you should code at actionButtonSelected method 
			   | 
		*/
		$this->button_selected = array();

		/*
			   | ---------------------------------------------------------------------- 
			   | Add alert message to this module at overheader
			   | ----------------------------------------------------------------------     
			   | @message = Text of message 
			   | @type    = warning,success,danger,info        
			   | 
		*/
		$this->alert = array();

		/*
			   | ---------------------------------------------------------------------- 
			   | Add more button to header button 
			   | ----------------------------------------------------------------------     
			   | @label = Name of button 
			   | @url   = URL Target
			   | @icon  = Icon from Awesome.
			   | 
		*/
		$this->index_button = array();

		/*
			   | ---------------------------------------------------------------------- 
			   | Customize Table Row Color
			   | ----------------------------------------------------------------------     
			   | @condition = If condition. You may use field alias. E.g : [id] == 1
			   | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.        
			   | 
		*/
		$this->table_row_color = array();

		/*
			   | ---------------------------------------------------------------------- 
			   | You may use this bellow array to add statistic at dashboard 
			   | ---------------------------------------------------------------------- 
			   | @label, @count, @icon, @color 
			   |
		*/
		$this->index_statistic = array();

		/*
			   | ---------------------------------------------------------------------- 
			   | Add javascript at body 
			   | ---------------------------------------------------------------------- 
			   | javascript code in the variable 
			   | $this->script_js = "function() { ... }";
			   |
		*/
		$this->script_js = NULL;

		/*
			   | ---------------------------------------------------------------------- 
			   | Include HTML Code before index table 
			   | ---------------------------------------------------------------------- 
			   | html code to display it before index table
			   | $this->pre_index_html = "<p>test</p>";
			   |
		*/
		$this->pre_index_html = null;

		/*
			   | ---------------------------------------------------------------------- 
			   | Include HTML Code after index table 
			   | ---------------------------------------------------------------------- 
			   | html code to display it after index table
			   | $this->post_index_html = "<p>test</p>";
			   |
		*/
		$this->post_index_html = null;

		/*
			   | ---------------------------------------------------------------------- 
			   | Include Javascript File 
			   | ---------------------------------------------------------------------- 
			   | URL of your javascript each array 
			   | $this->load_js[] = asset("myfile.js");
			   |
		*/
		$this->load_js = array();

		/*
			   | ---------------------------------------------------------------------- 
			   | Add css style at body 
			   | ---------------------------------------------------------------------- 
			   | css code in the variable 
			   | $this->style_css = ".style{....}";
			   |
		*/
		$this->style_css = NULL;

		/*
			   | ---------------------------------------------------------------------- 
			   | Include css File 
			   | ---------------------------------------------------------------------- 
			   | URL of your css each array 
			   | $this->load_css[] = asset("myfile.css");
			   |
		*/
		$this->load_css = array();

	}

	/*
		| ---------------------------------------------------------------------- 
		| Hook for button selected
		| ---------------------------------------------------------------------- 
		| @id_selected = the id selected
		| @button_name = the name of button
		|
	*/
	public function actionButtonSelected($id_selected, $button_name)
	{
		//Your code here
		
	}

	/*
		| ---------------------------------------------------------------------- 
		| Hook for manipulate query of index result 
		| ---------------------------------------------------------------------- 
		| @query = current sql query 
		|
	*/
	public function hook_query_index(&$query)
	{
		//Your code here
		
	}

	/*
		| ---------------------------------------------------------------------- 
		| Hook for manipulate row of index table html 
		| ---------------------------------------------------------------------- 
		|
	*/
	public function hook_row_index($column_index, &$column_value)
	{
		//Your code here
		
	}

	/*
		| ---------------------------------------------------------------------- 
		| Hook for manipulate data input before add data is execute
		| ---------------------------------------------------------------------- 
		| @arr
		|
	*/
	public function hook_before_add(&$postdata)
	{
		foreach ($postdata as $key => $value) {
			if(strpos($key, 'content') !== false)
				unset($postdata[$key]);
			if(strpos($key, 'descriptions') !== false)
				unset($postdata[$key]);
			
		}
		//Your code here
		unset($postdata['custom_field']);
		unset($postdata['images']);
		foreach ($postdata as $key => $value) {
			if(preg_match('#image_#', $key))
				unset($postdata[$key]);
		}
	}

	/*
		| ---------------------------------------------------------------------- 
		| Hook for execute command after add public static function called 
		| ---------------------------------------------------------------------- 
		| @id = last insert id
		| 
	*/
	public function hook_after_add($id)
	{
		if(count(Input::all()['images']) > 0) {
			foreach (Input::all()['images'] as $image) {
				$name = $image->hashName();
				$file_path = 'uploads/' . Session::get('admin_id') . '/' . date('Y-m');
				if(Storage::putFileAs($file_path, $image, $name)) {
					DB::table('goods_item_images')->insert([
						'goods_items_id' => $id,
						'image' => $file_path . '/' . $name
					]);
				}
			}
		}
		$__get = [];
		foreach (explode('&', Input::get('ref_parameter')) as $get) {
			$tmp = explode('=', $get);
			$__get[$tmp[0]] = $tmp[1];
		}
		$this->SaveConnectToAnotherTable(
			'goods_labels',
			'goods_category_id',
			$__get['parent_id'], // ID Категории
			'goods_labels_id',
			'id',
			'label',
			'goods_items_id',
			$id,
			'goods_item_labels'
		);
		$this->SaveConnectToAnotherTable(
			'goods_descriptions',
			'goods_category_id',
			$__get['parent_id'], // ID Категории
			'goods_descriptions_id',
			'id',
			'descriptions',
			'goods_items_id',
			$id,
			'goods_item_descriptions',
			'descriptions'
		);
	}

	/*
		| ---------------------------------------------------------------------- 
		| Hook for manipulate data input before update data is execute
		| ---------------------------------------------------------------------- 
		| @postdata = input post data 
		| @id       = current id 
		| 
	*/
	public function hook_before_edit(&$postdata, $id)
	{
		if(count(Input::all()['images']) > 0) {
			foreach (Input::all()['images'] as $image) {
				$name = $image->hashName();
				$file_path = 'uploads/' . Session::get('admin_id') . '/' . date('Y-m');
				if(Storage::putFileAs($file_path, $image, $name)) {
					DB::table('goods_item_images')->insert([
						'goods_items_id' => $id,
						'image' => $file_path . '/' . $name
					]);
				}
			}
		}
		foreach ($postdata as $key => $value) {
			if(strpos($key, 'content') !== false)
				unset($postdata[$key]);
			if(strpos($key, 'descriptions') !== false)
				unset($postdata[$key]);
			
		}
		$this->SaveConnectToAnotherTable(
			'goods_labels',
			'goods_category_id',
			$__get['parent_id'],
			'goods_labels_id',
			'id',
			'label',
			'goods_items_id',
			$id,
			'goods_item_labels'
		);
		$this->SaveConnectToAnotherTable(
			'goods_descriptions',
			'goods_category_id',
			$__get['parent_id'],
			'goods_descriptions_id',
			'id',
			'descriptions',
			'goods_items_id',
			$id,
			'goods_item_descriptions',
			'descriptions'
		);
		unset($postdata['custom_field']);
		unset($postdata['images']);
		foreach ($postdata as $key => $value) {
			if(preg_match('#image_#', $key))
				unset($postdata[$key]);
		}
	}

	/*
		| ---------------------------------------------------------------------- 
		| Hook for execute command after edit public static function called
		| ----------------------------------------------------------------------     
		| @id       = current id 
		| 
	*/
	public function hook_after_edit($id)
	{

	}

	/*
		| ---------------------------------------------------------------------- 
		| Hook for execute command before delete public static function called
		| ----------------------------------------------------------------------     
		| @id       = current id 
		| 
	*/
	public function hook_before_delete($id)
	{
		if(is_array($id))
		{
			foreach ($id as $key) {
				DB::table('goods_item_labels')->where('goods_items_id', $key)->delete();
				DB::table('goods_item_descriptions')->where('goods_items_id', $key)->delete();
				DB::table('goods_item_images')->where('goods_items_id', $key)->delete();
				DB::table('orders')->where('goods_items_id', $key)->delete();
			}
		} else {
			DB::table('goods_item_labels')->where('goods_items_id', $id)->delete();
			DB::table('goods_item_descriptions')->where('goods_items_id', $id)->delete();
			DB::table('goods_item_images')->where('goods_items_id', $id)->delete();
			DB::table('orders')->where('goods_items_id', $id)->delete();
		}
	}

	/*
		| ---------------------------------------------------------------------- 
		| Hook for execute command after delete public static function called
		| ----------------------------------------------------------------------     
		| @id       = current id 
		| 
	*/
	public function hook_after_delete($id)
	{
		//Your code here
		
	}

	public function getDeleteImage() {
		$this->cbLoader();
		$id = explode('_', Request::get('column'))[1];
		$column = Request::get('column');
		if (! CRUDBooster::isDelete() && $this->global_privilege == false) {
			CRUDBooster::insertLog(trans("crudbooster.log_try_delete_image", [
				'name' => $row->{$this->title_field},
				'module' => CRUDBooster::getCurrentModule()->name,
			]));
			CRUDBooster::redirect(CRUDBooster::adminPath(), trans('crudbooster.denied_access'));
		}
		$row = DB::table('goods_item_images')
			->where('id', $id)
			->where('goods_items_id', Request::get('id'))
			->first();
		if(!is_null($row)) {
			$file = str_replace('uploads/', '', $row->image);
			if (Storage::exists($file)) {
				Storage::delete($file);
			}
		}
		DB::table('goods_item_images')
			->where('id', $id)
			->where('goods_items_id', Request::get('id'))->delete();
		CRUDBooster::redirect(Request::server('HTTP_REFERER'), trans('crudbooster.alert_delete_data_success'), 'success');
	}
}