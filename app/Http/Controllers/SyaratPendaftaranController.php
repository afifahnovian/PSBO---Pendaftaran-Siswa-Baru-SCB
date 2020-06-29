<?php

namespace App\Http\Controllers;

use App\DataPost;
use App\SyaratPendaftaran;
use Illuminate\Http\Request;

class SyaratPendaftaranController extends Controller
{
    // mengubah konten syarat pendaftaran smp
    public function CreateSyaratSMP(Request $request){
        $article_stripped   = strip_tags($request->description);
        $request->validate([
            'headline'              => 'required',
            'description'          => 'required',
            'information'       => 'required',
        ]);
        if (strlen($article_stripped) == 0) {
            return redirect()->back()->withErrors('The description field is required.');
        }

        $syaratsmp                  = new SyaratPendaftaran;
        $syaratsmp->headline        = $request->headline;
        $syaratsmp->description     = $request->description;
        $syaratsmp->information     = $request->information;
        $syaratsmp->save();
        return redirect('/pages/post/Syarat')->with(['success' => 'Syarat Pendaftaran berhasil dibuat!']);
    }
    //Edit FAQ
    public function EditSyaratSMP(Request $request){
        # Karena input dari quilljs itu ada tagsnya (<p>,<a>,<strong>), $article_stripped digunakan buat ngecek, di dalem tag itu ada tulisannya ga, atau jangan2 kosong   
        $article_stripped   = strip_tags($request->answer);
        $request->validate([
            'headline'              => 'required',
            'description'          => 'required',
            'information'       => 'required',
        ]);
        
        if (strlen($article_stripped) == 0) {
            return redirect()->back()->withErrors('Kamu perlu mengisi form ini');
        }

        $syaratsmp                  = SyaratPendaftaran::where('id',$request->id)->first();
        $syaratsmp->headline        = $request->headline;
        $syaratsmp->description     = $request->description;
        $syaratsmp->information     = $request->information;
        $syaratsmp->save();
        return redirect('/pages/post/Syarat')->with(['success' => 'Syarat Pendaftaran berhasil diubah!']);
    }

    //mengubah konten syarat pendaftaran tahfidz
    public function CreateSyaratTahfidz(Request $request){
        $article_stripped   = strip_tags($request->description);
        $request->validate([
            'headline'              => 'required',
            'description'          => 'required',
            'information'       => 'required',
        ]);
        if (strlen($article_stripped) == 0) {
            return redirect()->back()->withErrors('The description field is required.');
        }

        $syarattahfidz                  = new SyaratPendaftaran;
        $syarattahfidz->headline        = $request->headline;
        $syarattahfidz->description     = $request->description;
        $syarattahfidz->information     = $request->information;
        $syarattahfidz->save();
        return redirect('/pages/post/Syarat')->with(['success' => 'Syarat Pendaftaran berhasil dibuat!']);
    }

    public function EditSyaratTahfidz(Request $request){
        # Karena input dari quilljs itu ada tagsnya (<p>,<a>,<strong>), $article_stripped digunakan buat ngecek, di dalem tag itu ada tulisannya ga, atau jangan2 kosong   
        $article_stripped   = strip_tags($request->answer);
        $request->validate([
            'headline'              => 'required',
            'description'          => 'required',
            'information'       => 'required',
        ]);
        
        if (strlen($article_stripped) == 0) {
            return redirect()->back()->withErrors('Kamu perlu mengisi form ini');
        }

        $syarattahfidz                  = SyaratPendaftaran::where('id',$request->id)->first();
        $syarattahfidz->headline        = $request->headline;
        $syarattahfidz->description     = $request->description;
        $syarattahfidz->information     = $request->information;
        $syarattahfidz->save();
        return redirect('/pages/post/Syarat')->with(['success' => 'Syarat Pendaftaran berhasil diubah!']);
    }

    public function DeleteSyaratSMP($id)
    {
        $syaratsmp                 = SyaratPendaftaran::findOrFail($id);
        $syaratsmp->delete();
        return redirect('/pages/post/SyaratSMP')->with('success', 'Syarat SMP berhasil dihapus!');
    }
}
