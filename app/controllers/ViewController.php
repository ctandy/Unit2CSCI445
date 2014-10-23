<?php

class ViewController extends BaseController {

	public function showHome() {
		$pets = Pet::orderBy('id','desc')->get();
		return View::make('home')->with('pets', $pets);
	}

	public function showAll() {
		$pets = Pet::orderBy('id','desc')->get();
		return View::make('home')->with('pets', $pets);
	}

	public function showDogs() {
		$pets = Pet::where('type','dog')->get();
		return View::make('dogs')->with('pets', $pets);
	}

	public function orderAge() {
		$pets = Pet::orderBy('age','desc')->get();
		return View::make('order')->with('pets', $pets);
	}
}