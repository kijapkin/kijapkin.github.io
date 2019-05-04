<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use CRUDBooster;
use App\Feedback;
use App\Gallery_images;
use DB;

class OurservicesController extends Controller
{
	public function main(Request $request) {
		$pdf = DB::table('pdf')->get();
		$name_pdf = explode(PHP_EOL, CRUDBooster::getSetting('nazvaniya_pdf_faylov'));
		return view('our_services.main', compact("pdf", "name_pdf"));
	}
	 public function ventilationpost(Request $request) {
		$validator = Validator::make($request->all(), [
			'username' => 'required|max:255',
			'phone' => 'required|max:16',
		]);
		if ($validator->fails())
			return json_encode(['error' => 'Виникла помилка']);
		$Feedback = new Feedback();
		$Feedback->name = $request->input('username');
		$Feedback->phone = $request->input('phone');
		$Feedback->save();
		CRUDBooster::sendNotification([
            'content' => 'Надійшов новий запит на зворотній звязок від ' . $request->input('username'),
            'to' => '/admin/messages/detail/' . $Feedback->id
        ]);
		return json_encode(['success' => 'Запит відправлено']);
	}
	
	public function ventilation(Request $request) {
		return view('our_services.ventilation');
	}

	public function heating(Request $request) {
		$Gallery_images = Gallery_images::where('gallery_category_id', CRUDBooster::getSetting('heating_gallery'))->get();
		return view('our_services.heating', compact("Gallery_images"));
	}

	public function diamond_drilling(Request $request) {
		return view('our_services.diamond_drilling');
	}
}
