<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
	public function itemView()
	{
		$panddingItem = Item::where('status', 0)
			->orderBy('order')
			->get();
		$completeItem = Item::where('status', 1)
			->orderBy('order')
			->get();
		$goodItem = Item::where('status', 2)
			->orderBy('order')
			->get();
		return view('item', compact('panddingItem', 'completeItem', 'goodItem'));
	}
	public function updateItems(Request $request)
	{
		$input = $request->all();

		if (!empty($input['pending'])) {
			foreach ($input['pending'] as $key => $value) {
				$key = $key + 1;
				Item::where('id', $value)
					->update([
						'status' => 0,
						
					]);
			}
		}

		if (!empty($input['accept'])) {
			foreach ($input['accept'] as $key => $value) {
				$key = $key + 1;
				Item::where('id', $value)
					->update([
						'status' => 1,
						
					]);
			}
		}

		if (!empty($input['reject'])) {
			foreach ($input['reject'] as $key => $value) {
				$key = $key + 1;
				Item::where('id', $value)
					->update([
						'status' => 2,
						
					]);
			}
		}
		return response()->json(['status' => 'success']);
	}
}
