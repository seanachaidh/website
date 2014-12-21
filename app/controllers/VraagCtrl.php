<?php
/**
 * Vraagcontroller
 */
class VraagCtrl extends BaseController {
	public function ShowQuestion()
	{
		return View::make('enquete')->with('question', '');
	}
	
	public function SaveAnswer()
	{
		//moet nog gemaakt worden
	}
}

?>