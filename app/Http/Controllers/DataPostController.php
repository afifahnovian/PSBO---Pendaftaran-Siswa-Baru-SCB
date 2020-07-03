<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataPost;

class DataPostController extends Controller
{
    public function UpdateHeadline(Request $request){

        $headline_1               = DataPost::where('tipe_post','headline-1')->first();
        $headline_1->isi_post     = $request->input('headline_1');
        $headline_1->save();

        $headline_p                 = DataPost::where('tipe_post','headline-p')->first();
        $headline_p->isi_post       = $request->input('headline_p');
        $headline_p->save();

        return redirect('/pages/post/Konten')->with(['success' => 'Landing Page berhasil diubah!']);
    }

    public function UpdateTimeline(Request $request){
        // Judul Timeline
        $timeline_title_1             = DataPost::where('tipe_post','timeline_title_1')->first();
        $timeline_title_1->isi_post   = $request->input('timeline_title_1');
        $timeline_title_1->save();  
        
        $timeline_title_2            = DataPost::where('tipe_post','timeline_title_2')->first();
        $timeline_title_2->isi_post   = $request->input('timeline_title_2');
        $timeline_title_2->save();        
        
        $timeline_title_3            = DataPost::where('tipe_post','timeline_title_3')->first();
        $timeline_title_3->isi_post   = $request->input('timeline_title_3');
        $timeline_title_3->save();        
        
        $timeline_title_4            = DataPost::where('tipe_post','timeline_title_4')->first();
        $timeline_title_4->isi_post   = $request->input('timeline_title_4');
        $timeline_title_4->save();        
        
        $timeline_title_5            = DataPost::where('tipe_post','timeline_title_5')->first();
        $timeline_title_5->isi_post   = $request->input('timeline_title_4');
        $timeline_title_5->save();        
        
        $timeline_title_6            = DataPost::where('tipe_post','timeline_title_6')->first();
        $timeline_title_6->isi_post   = $request->input('timeline_title_6');
        $timeline_title_6->save();        
        
        // Tanggal timeline
        $timeline_1                 = DataPost::where('tipe_post','timeline-1')->first(); 
        $timeline_1->isi_post       = $request->input('timeline_1');
        $timeline_1->save();

        $timeline_2                 = DataPost::where('tipe_post','timeline-2')->first();
        $timeline_2->isi_post       = $request->input('timeline_2');
        $timeline_2->save();
        
        $timeline_3                 = DataPost::where('tipe_post','timeline-3')->first();
        $timeline_3->isi_post       = $request->input('timeline_3');
        $timeline_3->save();
        
        $timeline_4                 = DataPost::where('tipe_post','timeline-4')->first();
        $timeline_4->isi_post       = $request->input('timeline_4');
        $timeline_4->save();

        $timeline_5                 = DataPost::where('tipe_post','timeline-5')->first();
        $timeline_5->isi_post       = $request->input('timeline_5');
        $timeline_5->save();
        
        $timeline_6                 = DataPost::where('tipe_post','timeline-6')->first();
        $timeline_6->isi_post       = $request->input('timeline_6');
        $timeline_6->save();

        return redirect('/pages/post/Konten')->with(['success' => 'Landing Page berhasil diubah!']);
    }
    
    public function UpdateFooterNarahubung(Request $request){
        //Narahubung
        $narahubung_1                  = DataPost::where('tipe_post','narahubung-1')->first();
        $narahubung_1->isi_post        = $request->input('narahubung_1');
        $narahubung_1->save();

        $narahubung_2                  = DataPost::where('tipe_post','narahubung-2')->first();
        $narahubung_2->isi_post        = $request->input('narahubung_2');
        $narahubung_2->save();

        $narahubung_3                  = DataPost::where('tipe_post','narahubung-3')->first();
        $narahubung_3->isi_post        = $request->input('narahubung_3');
        $narahubung_3->save();
        return redirect('/pages/post/Konten')->with(['success' => 'Landing Page berhasil diubah!']);
    }

    public function UpdateFooterSosmed(Request $request){
        //Narahubung
        $website_scb             = DataPost::where('tipe_post','website-scb')->first();
        $website_scb->isi_post   = $request->input('website_scb');
        $website_scb->save();

        $twitter_scb             = DataPost::where('tipe_post','twitter-scb')->first();
        $twitter_scb->isi_post   = $request->input('twitter_scb');
        $twitter_scb->save();

        $email_scb             = DataPost::where('tipe_post','email-scb')->first();
        $email_scb->isi_post   = $request->input('email_scb');
        $email_scb->save();

        $facebook_scb             = DataPost::where('tipe_post','facebook-scb')->first();
        $facebook_scb->isi_post   = $request->input('facebook_scb');
        $facebook_scb->save();

        $instagram_scb             = DataPost::where('tipe_post','instagram-scb')->first();
        $instagram_scb->isi_post   = $request->input('instagram_scb');
        $instagram_scb->save();
        return redirect('/pages/post/Konten')->with(['success' => 'Landing Page berhasil diubah!']);
    }

    public function UpdateFooterAlamat(Request $request){
        //Narahubung
        $alamat_scb             = DataPost::where('tipe_post','alamat-scb')->first();
        $alamat_scb->isi_post   = $request->input('alamat_scb');
        $alamat_scb->save();
        return redirect('/pages/post/Konten')->with(['success' => 'Landing Page berhasil diubah!']);
    }

    public function UpdateTombolDaftar(Request $request){
        //Tombol Daftar
        $this->validate($request,[
            'status_ppdb'   => 'required',
        ]);
        $status_ppdb             = DataPost::where('tipe_post','status_ppdb')->first();
        $status_ppdb->isi_post     = $request->status_ppdb;
        $status_ppdb->save();
        return redirect('/pages/post/Konten')->with(['success' => 'Tombol Daftar berhasil diubah!']);
    }

    public function UpdateKontakPPDB(Request $request){
        
    	$this->validate($request,[
            'kontak1'   => 'required',
            'kontak2'   => 'required',
        ]);
        $kontak1            = DataPost::where('tipe_post','kontak1')->first();
        $kontak2            = DataPost::where('tipe_post','kontak2')->first();
        $kontak1->isi_post     = $request->kontak1;
        $kontak2->isi_post     = $request->kontak2;
        $kontak1->save();
        $kontak2->save();
        return redirect('/pages/post/Konten')->with('success', 'Kontak Admin PPDB berhasil diubah!');
    }

    #Update Syarat SMP
    public function UpdateSyaratSMP(Request $request){
        $article_stripped   = strip_tags($request->syaratsmp);
    	$this->validate($request,[
            'syaratsmp'   => 'required',
        ]);

        if (strlen($article_stripped) == 0) {
            return redirect()->back()->withErrors('Kamu perlu mengisi form ini');
        }
        $syaratsmp                    = DataPost::where('tipe_post','syaratsmp')->first();
        $syaratsmp->isi_post          = $request->syaratsmp;
        $syaratsmp->save();  
        return redirect('/pages/post/SyaratSMP')->with('success', 'Syarat Pendaftaran SMP berhasil diubah!');
    }
    public function UpdateNarahubungSMP(Request $request){
    	$this->validate($request,[
            'kontaksmp1'   => 'required',
            'kontaksmp2'   => 'required',
        ]);
        $kontaksmp1            = DataPost::where('tipe_post','kontaksmp1')->first();
        $kontaksmp2            = DataPost::where('tipe_post','kontaksmp2')->first();
        $kontaksmp1->isi_post     = $request->kontaksmp1;
        $kontaksmp2->isi_post     = $request->kontaksmp2;
        $kontaksmp1->save();
        $kontaksmp2->save();
        return redirect('/pages/post/SyaratSMP')->with('success', 'Narahubung SMP berhasil diubah!');
    }

     #Update Syarat Tahfidz
     public function UpdateSyaratTahfidz(Request $request){
        $article_stripped   = strip_tags($request->syarattahfidz);
    	$this->validate($request,[
            'syarattahfidz'   => 'required',
        ]);

        if (strlen($article_stripped) == 0) {
            return redirect()->back()->withErrors('Kamu perlu mengisi form ini');
        }
        $syarattahfidz                    = DataPost::where('tipe_post','syarattahfidz')->first();
        $syarattahfidz->isi_post          = $request->syarattahfidz;
        $syarattahfidz->save();  
        return redirect('/pages/post/SyaratTahfidz')->with('success', 'Syarat Pendaftaran Tahfidz berhasil diubah!');
    }

    public function UpdateNarahubungTahfidz(Request $request){
    	$this->validate($request,[
            'kontaktahfidz1'   => 'required',
            'kontaktahfidz2'   => 'required',
        ]);
        $kontaktahfidz1            = DataPost::where('tipe_post','kontaktahfidz1')->first();
        $kontaktahfidz2            = DataPost::where('tipe_post','kontaktahfidz2')->first();
        $kontaktahfidz1->isi_post     = $request->kontaktahfidz1;
        $kontaktahfidz2->isi_post     = $request->kontaktahfidz2;
        $kontaktahfidz1->save();
        $kontaktahfidz2->save();
        return redirect('/pages/post/SyaratTahfidz')->with('success', 'Narahubung Tahfidz berhasil diubah!');
    }


   
}
