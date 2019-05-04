<?php namespace App\Http\Controllers;

use Session;
use Request;
use DB;
use CRUDBooster;

class AdminImportController extends \crocodicstudio\crudbooster\controllers\CBController
{

	public function cbInit()
	{
		# START CONFIGURATION DO NOT REMOVE THIS LINE
		$this->title_field = "id";
		$this->limit = "20";
		$this->orderby = "id,desc";
		$this->global_privilege = false;
		$this->button_table_action = true;
		$this->button_bulk_action = true;
		$this->button_action_style = "button_icon";
		$this->button_add = true;
		$this->button_edit = false;
		$this->button_delete = true;
		$this->button_detail = false;
		$this->button_show = true;
		$this->button_filter = true;
		$this->button_import = false;
		$this->button_export = false;
		$this->table = "import";
		# END CONFIGURATION DO NOT REMOVE THIS LINE
		
		# START COLUMNS DO NOT REMOVE THIS LINE
		$this->col = [];
		$this->col[] = [
			"label" 				=> "Архив", 
			"name" 					=> "file",
			"download"				=> true
		];
		$this->col[] = [
			"label" 				=> "Дата", 
			"name" 					=> "created_at"
		];
		# END COLUMNS DO NOT REMOVE THIS LINE

		# START FORM DO NOT REMOVE THIS LINE
		$this->form = [];
		$this->form[] = ['label' => 'Архив', 'name' => 'file', 'type' => 'upload', 'validation' => 'required|mimes:zip,rar', 'width' => 'col-sm-10'];
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
		//Your code here
		
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
		$STATUS = false;
		$file = DB::table('import')->where('id', $id)->first();
		define('DIR_UPLOAD_URL', 'uploads' . DIRECTORY_SEPARATOR . 'products' . DIRECTORY_SEPARATOR);
		define('DIR_UPLOAD_IMAGES', storage_path('app') . DIRECTORY_SEPARATOR . DIR_UPLOAD_URL);
		$this->return_url = ($this->return_url) ? $this->return_url : Request::get('return_url');
		if(preg_match('#.zip#', $file->file)) {
			$ZIP = new \ZipArchive;
			$ZIP_RESULT = $ZIP->open(storage_path('app/' . $file->file));
			if($ZIP_RESULT === TRUE) {
				$UNZIP_PATCH = storage_path('app') . DIRECTORY_SEPARATOR . 'archive' . DIRECTORY_SEPARATOR . date("Y_m_d_H_i_s");
				$ZIP->extractTo($UNZIP_PATCH);
				$ZIP->close();
				$STATUS = $this->insertGoods($UNZIP_PATCH);
			}
		} else {
			if(!function_exists('rar_open')){
				DB::table('import')->where('id', $id)->delete();
				CRUDBooster::redirect($this->return_url, 'На хостинге нету поддержки функции rar_open()', 'danger');
			} else {
				$UNZIP_PATCH = storage_path('app') . DIRECTORY_SEPARATOR . 'archive' . DIRECTORY_SEPARATOR . date("Y_m_d_H_i_s") . DIRECTORY_SEPARATOR;
				if(!is_dir($UNZIP_PATCH))
					mkdir($UNZIP_PATCH);
				$rar_file = rar_open(storage_path('app/' . $file->file));
				$list = rar_list($rar_file);
				foreach($list as $file) {
					$entry = rar_entry_get($rar_file, $file->getName());
					$entry->extract($UNZIP_PATCH);
				}
				rar_close($rar_file);
				$STATUS = $this->insertGoods($UNZIP_PATCH);
			}
		}
		DB::table('import')->where('id', $id)->delete();
		
		if($STATUS['status'])
			CRUDBooster::redirect($this->return_url, 'Вы успешно импортировали товары. Новых товаров: ' . $STATUS['INSERTS'] . ' Обновлено товаров: ' . $STATUS['UPDATES'], 'success');
		else
			CRUDBooster::redirect($this->return_url, 'Ошибка добавления товаров, архив видимо проврежден или отсутствует файл XML. Возможно не верно настроенные chmod права.', 'danger');
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
		//Your code here
		
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
		//Your code here
		
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
	}

	public function insertGoods($UNZIP_PATCH) {
		$XML_FILE = glob($UNZIP_PATCH . DIRECTORY_SEPARATOR . '*.xml')[0];
		if(!is_null($XML_FILE)) {
			$INSERTS = 0;
			$UPDATES = 0;
			$XML_READ = new \SimpleXMLElement(file_get_contents($XML_FILE));
			foreach ($XML_READ->product as $product) {
				// Ищем производителя
				if(empty((string) $product->name) || empty((string) $product->article)) {
					continue;
				}
				$producer = DB::table('producer')->where('name', $product->manufacturer)->first();
				if(is_null($producer)) {
					$producer_id = DB::table('producer')->insertGetId(['name' => $product->manufacturer]);
				} else {
					$producer_id = $producer->id;
				}

				// Ищем тип
				$type = DB::table('type')->where('name', $product->type)->first();
				if(is_null($type)) {
					$type_id = DB::table('type')->insertGetId(['name' => $product->type]);
				} else {
					$type_id = $type->id;
				}

				// Ищем тип установки
				$type_installation = DB::table('type_installation')->where('name', $product->type_installation)->first();
				if(is_null($type_installation)) {
					$type_installation_id = DB::table('type_installation')->insertGetId(['name' => $product->type_installation]);
				} else {
					$type_installation_id = $type_installation->id;
				}

				// Ищем продукт
				$product_id = DB::table('goods_items')
					//->where('goods_category_id', empty($product->goods_category_id) ? 1 : $product->goods_category_id)
					->where('producer_id', $producer_id)
					//->where('type_id', $type_id)
					//->where('type_installation_id', $type_installation)
					->where('title', $product->name)
					->where('artikle', $product->article)
					//->where('price', floatval(str_replace(',', '.', str_replace(' ', '', $product->price))))
					//->where('latest_price', floatval(str_replace(',', '.', str_replace(' ', '', $product->promotional_price))))
					//->where('video', empty($product->youtube) ? null : $product->youtube)
					->first();
				
				if(is_null($product_id)) {
					$product_id = DB::table('goods_items')->insertGetId([
						'goods_category_id' 				=> empty($product->goods_category_id) ? 1 : $product->goods_category_id,
						'producer_id' 						=> $producer_id,
						'type_id' 							=> $type_id,
						'type_installation_id' 				=> $type_installation_id,
						'title' 							=> $product->name,
						'artikle' 							=> $product->article,
						'price' 							=> floatval(preg_replace("/[^0-9.]/", '', preg_replace('#,#', '.', (string) $product->price))),
						'latest_price' 						=> floatval(preg_replace("/[^0-9.]/", '', preg_replace('#,#', '.', (string) $product->promotional_price))),
						'video' 							=> empty($product->youtube) ? null : $product->youtube
					]);
					$INSERTS++;
				} else {
					$product_id = $product_id->id;
					$UPDATE = [];
					if(!empty($product->manufacturer))
						$UPDATE['producer_id'] = $producer_id;
					if(!empty($product->type))
						$UPDATE['type_id'] = $type_id;
					if(!empty($product->type_installation))
						$UPDATE['type_installation_id'] = $type_installation_id;
					if(!empty($product->name))
						$UPDATE['title'] = $product->name;
					if(!empty($product->article))
						$UPDATE['artikle'] = $product->article;
					if(!empty($product->price))
						$UPDATE['price'] = floatval(preg_replace("/[^0-9.]/", '', preg_replace('#,#', '.', (string) $product->price)));
					if(!empty($product->promotional_price))
						$UPDATE['latest_price'] = floatval(preg_replace("/[^0-9.]/", '', preg_replace('#,#', '.', (string) $product->promotional_price)));
					if(!empty($product->youtube))
						$UPDATE['video'] = $product->youtube;
					if(count($UPDATE) != 0) {
						DB::table('goods_items')->where('id', $product_id)->update($UPDATE);
						$UPDATES++;
					}
				}

				if(count($product->images) > 0) {
					$this->insertImages($product_id, $UNZIP_PATCH, $product->images);
				}
				if(count($product->specifications) > 0) {
					$this->insertLabels($product_id, empty($product->goods_category_id) ? 1 : $product->goods_category_id, $product->specifications);
				}
				if(count($product->descriptions) > 0) {
					$this->insertDescriptions($product_id, empty($product->goods_category_id) ? 1 : $product->goods_category_id, $product->descriptions);
				}
			}
			return ['status' => true, 'INSERTS' => $INSERTS, 'UPDATES' => $UPDATES];
		} else {
			return ['status' => false, 'INSERTS' => 0, 'UPDATES' => 0];
		}
	}

	public function insertImages($id, $UNZIP_PATCH, $IMAGE_NAMES) {
		if(!empty($IMAGE_NAMES))
			DB::table('goods_item_images')->where('goods_items_id', $id)->delete();
		foreach ($IMAGE_NAMES->image as $image) {
			$image = (string) $image;
			if(is_file($UNZIP_PATCH . DIRECTORY_SEPARATOR . $image)) {
				if(!is_dir(DIR_UPLOAD_IMAGES)) {
					mkdir(DIR_UPLOAD_IMAGES);
				}
				if(!is_dir(DIR_UPLOAD_IMAGES . $id)) {
					mkdir(DIR_UPLOAD_IMAGES . $id);
				}
				if(copy($UNZIP_PATCH . DIRECTORY_SEPARATOR . $image, DIR_UPLOAD_IMAGES . $id . DIRECTORY_SEPARATOR . $image)) {
					DB::table('goods_item_images')->insertGetId([
						'goods_items_id' => $id,
						'image' => DIR_UPLOAD_URL . $id . DIRECTORY_SEPARATOR . $image
					]);
				}
			}
		}
	}

	public function insertLabels($id, $goods_category_id, $specifications) {
		foreach ($specifications->specification as $specification) {
			if(!empty((string) $specification->name) && !empty((string) $specification->value)) {
				$goods_labels = DB::table('goods_labels')
					->where('goods_category_id', $goods_category_id)
					->where('label', (string) $specification->name)
					->first();
				if($goods_labels) {
					$goods_labels_id 				= $goods_labels->id;
				} else {
					$goods_labels_id 				= DB::table('goods_labels')->insertGetId([
						'goods_category_id' 		=> $goods_category_id,
						'label' 					=> (string) $specification->name
					]);
				}
				$goods_item_labels = DB::table('goods_item_labels')
					->where('goods_labels_id', $goods_labels_id)
					->where('goods_items_id', $id)
					->first();
				if(!is_null($goods_item_labels)) {
					DB::table('goods_item_labels')
						->where('goods_labels_id', $goods_labels_id)
						->where('goods_items_id', $id)
						->update(['content' => (string) $specification->value]);
				} else {
					DB::table('goods_item_labels')->insertGetId([
						'goods_labels_id' 			=> $goods_labels_id,
						'goods_items_id' 			=> $id,
						'content' 					=> (string) $specification->value
					]);
				}
			}
		}
	}

	public function insertDescriptions($id, $goods_category_id, $descriptions) {
		foreach ($descriptions->description as $description) {
			if(!empty((string) $description->name) && !empty((string) $description->value)) {
				$goods_descriptions = DB::table('goods_descriptions')
					->where('goods_category_id', $goods_category_id)
					->where('descriptions', (string) $description->name)
					->first();
				if($goods_descriptions) {
					$goods_descriptions_id 				= $goods_descriptions->id;
				} else {
					$goods_descriptions_id 				= DB::table('goods_descriptions')->insertGetId([
						'goods_category_id' 			=> $goods_category_id,
						'descriptions' 					=> (string) $description->name
					]);
				}
				$goods_item_descriptions 				= DB::table('goods_item_descriptions')
					->where('goods_descriptions_id', $goods_descriptions_id)
					->where('goods_items_id', $id)
					->first();
				if($goods_item_descriptions) {
					DB::table('goods_item_descriptions')
						->where('goods_descriptions_id', $goods_descriptions_id)
						->where('goods_items_id', $id)
						->update(['content' => empty((string) $description->value) ? '---' : (string) $description->value]);
				} else {
					DB::table('goods_item_descriptions')->insertGetId([
						'goods_descriptions_id' 		=> $goods_descriptions_id,
						'goods_items_id' 				=> $id,
						'content' 						=> empty((string) $description->value) ? '---' : (string) $description->value
					]);
				}
			}
		}
	}
}