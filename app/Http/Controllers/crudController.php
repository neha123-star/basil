<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\office;
use App\programming;
use App\desain;
use File;

class crudController extends Controller
{
    public function lihatoff()
    {
    	$lihatoff = office::all();
    	return view('lihatoff',['lihatoff'=>$lihatoff]);
    }
    public function tambahoff()
    {
    	return view('tambahoff');
    }
    public function storeoff(Request $request)
    {
      $file = $request->file('gambar_off');
    $file->move('assets/images/off/',time().'_'.$file->getClientOriginalName());
    	office::insert([
    	'judul_off' => $request->judul_off,
    	'gambar_off' => time().'_'.$file->getClientOriginalName(),
    	'isi_off' => $request->isi_off,
    	'harga_off' => $request->harga_off
		]);
      
      
    	return redirect('/tampil/lihatoff');
    }
    public function editoff($id)
    {
    	$office = DB::table('office')->where('id',$id)->get();
    	return view('editoff',['office'=> $office]);
    }
    public function edited(Request $request,$id)
    {
         
        office::where('id',$id)->update([
          'judul_off'=>$request->input('judul_off'),
          'gambar_off'=>$request->input('gambar_off'),
          'harga_off'=>$request->input('harga_off'),
          'isi_off'=>$request->input('isi_off')
        ]);
        return redirect('/tampil/lihatoff');

    }
    public function delete($id)
    {
        $office = office::where('id',$id)->first();
        File::delete('assets/images/off/'.$office->file);
        office::where('id',$id)->delete();
        return redirect('/tampil/lihatoff');
    }

   


   public function lihatpg()
   {
       $lihatpg = programming::all();
       return view('lihatpg',['lihatpg'=>$lihatpg]);
   }
   public function tambahpg()
   {
       return view('tambahpg');
   }
   public function storepg(Request $request)
   {
     $file = $request->file('gambar_pg');
    $file->move('assets/images/pg/',time().'_'.$file->getClientOriginalName());
       programming::insert([
        'judul_pg' => $request->judul_pg,
        'gambar_pg' => time().'_'.$file->getClientOriginalName(),
        'harga_pg' => $request->harga_pg,
        'isi_pg' => $request->isi_pg
       ]);
   return redirect('/tampil/lihatpg');
    
   }

   public function editpg($id)
   {
     $programming = programming::where('id',$id)->get();
     return view('editpg',['programming'=> $programming]);
   }
   public function editedpg(Request $request,$id)
   {
     programming::where('id',$id)->update([
      'judul_pg' => $request->judul_pg,
        'gambar_pg' => $request->gambar_pg,
        'harga_pg' => $request->harga_pg,
        'isi_pg' => $request->isi_pg
        
     ]);
     return redirect('/tampil/lihatpg');
   }

   public function deletepg($id)
   {
         $programming = programming::where('id',$id)->first();
          File::delete('assets/images/pg/'.$programming->file);
        programming::where('id',$id)->delete();
        return redirect('/tampil/lihatpg');
   }

   public function lihatds()
   {
           $lihatds = desain::all();
       return view('lihatds',['lihatds'=>$lihatds]); 
   }

   public function tambahds()
   {
       return view('tambahds');
   }
   public function storeds(Request $request)
    {
      $file = $request->file('gambar_ds');
    $file->move('assets/images/desain/',time().'_'.$file->getClientOriginalName());
      desain::insert([
      'judul_ds' => $request->judul_ds,
      'gambar_ds' =>  time().'_'.$file->getClientOriginalName(),
      'isi_ds' => $request->isi_ds,
      'harga_ds' => $request->harga_ds
    ]);
 
      return redirect('/tampil/lihatds');
    }
   public function editds($id)
   {
     $desain = desain::where('id',$id)->get();
     return view('editds',['desain'=> $desain]);
   }
   public function editedds(Request $request,$id)
   {
     desain::where('id',$id)->update([
      'judul_ds' => $request->judul_ds,
        'gambar_ds' => time().'_'.$file->getClientOriginalName(),
        'harga_ds' => $request->harga_ds,
        'isi_ds' => $request->isi_ds

     ]);
     return redirect('/tampil/lihatds');
   }

   public function deletedds($id)
   {
         $desain = desain::where('id',$id)->first();
          File::delete('assets/images/desain/'.$desain->file);
        desain::where('id',$id)->delete();
        return redirect('/tampil/lihatds');
   }

}
