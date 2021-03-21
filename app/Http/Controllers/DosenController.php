<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Translate\V2\TranslateClient;

class DosenController extends Controller
{
	
	public function index(){
		$text = "Halo ini adalah method index, dalam controller DosenController";
		// return $text;
		$data['nama'] = 'jono';
		$data['makul'] = ['kalkulus', 'pemograman java', 'pemograman web'];
		return view('biodata', $data);
	}

	public function terjemah(Request $request)
	{

		$translate = new TranslateClient([
			'key' => 'AIzaSyBGUIPFhaDTf6QOUtkZzV_jqBhwXiKUDdE'
		]);

		// $this->hasil($translate);
		$pesan = $request->pesan;
		$result = $translate->translate($pesan, [
			'target' => 'en'
		]);

		return Response([
			'status'  => true,
			'message' => 'berhasil',
			'data'    => $result
		]);

	}

	private function hasil($translate)
	{

		// Translate text from english to french.
		$pesan = 'halo dunia hari ini sangat indah';
		$result = $translate->translate($pesan, [
			'target' => 'en'
		]);

		echo $result['text'] . "<br>";

		// Detect the language of a string.
		$result = $translate->detectLanguage('Greetings from Michigan!');

		echo $result['languageCode'] . "<br>";

		// Get the languages supported for translation specifically for your target language.
		$languages = $translate->localizedLanguages([
			'target' => 'en'
		]);

		foreach ($languages as $language) {
			echo $language['name'] . "<br>";
			echo $language['code'] . "<br>";
		}

		// Get all languages supported for translation.
		$languages = $translate->languages();

		foreach ($languages as $language) {
			echo $language . "<br>";
		}

	}

}
