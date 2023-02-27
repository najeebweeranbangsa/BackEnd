<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    //

    public function postItem(Request $request){
        $Item = new Items();

        $item->book_id = $request->input('book_id');
        $item->bookt_title = $request->input('bookt_title');
        $item->bookt_desc = $request->input('bookt_desc');
        $item->bookt_type = $request->input('bookt_type');
        $item->bookt_price = $request->input('bookt_price');
        $item->save();

        return response()->json(['message'=>$item,201]);

    }

    public function getitems(){
        $allItems = Items::all();
        return response()->json(['allitems'=>$allitems,200]);
    }

    public function deleteItem($id){
        $item = Items::find($id);
        if (!$item){
            return response()->json(['msg'=>"Item not found"],404);

        }
        $item->delete();
        return response()->json(['msg'=>"book deleted succesfully"],201);
    }
    public function edititem(Request $request,$id){
        $item = Items::find($id);
        if (!$item){
            return response()->json(['msg'=>"Item not found"],404);

        }
    
        $item->book_id = $request->input('book_id');
        $item->bookt_title = $request->input('bookt_title');
        $item->bookt_desc = $request->input('bookt_desc');
        $item->bookt_type = $request->input('bookt_type');
        $item->bookt_price = $request->input('bookt_price');
        $item->save();
        return response()->json(['msg'=>"Book Details Edited"],200);
    }
    
}
