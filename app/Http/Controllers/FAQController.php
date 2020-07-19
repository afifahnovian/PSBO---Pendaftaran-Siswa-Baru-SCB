<?php

namespace App\Http\Controllers;

use App\faqSCB;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    //Add FAQ
    public function CreateFAQ(Request $request){
        # Karena input dari quilljs itu ada tagsnya (<p>,<a>,<strong>), $article_stripped digunakan buat ngecek, di dalem tag itu ada tulisannya ga, atau jangan2 kosong
        
        $article_stripped   = strip_tags($request->answer);
        $request->validate([
            'question'         => 'required',
            'answer'           => 'required',
        ]);
        if (strlen($article_stripped) == 0) {
            return redirect()->back()->withErrors('Kamu perlu mengisi jawaban dari pertanyaan');
        }

        $faq                    = new faqSCB;
        $faq->question          = $request->question;
        $faq->answer            = $request->answer;
        $faq->save();

        return redirect('/pages/post/FAQ')->with('success', 'FAQ berhasil ditambahkan!');
    }

    //Edit FAQ
    public function EditFAQ(Request $request){
        # Karena input dari quilljs itu ada tagsnya (<p>,<a>,<strong>), $article_stripped digunakan buat ngecek, di dalem tag itu ada tulisannya ga, atau jangan2 kosong   
        $article_stripped   = strip_tags($request->answer);
        $request->validate([
            'question'         => 'required',
            'answer'           => 'required',
        ]);
        
        if (strlen($article_stripped) == 0) {
            return redirect()->back()->withErrors('Kamu perlu mengisi jawaban dari pertanyaan');
        }
        $faq                    = faqSCB::where('id',$request->id)->first();
        $faq->question          = $request->question;
        $faq->answer            = $request->answer;
        $faq->save();
        return redirect('/pages/post/FAQ')->with('success', 'FAQ berhasil diedit!');
    }

    public function DeleteFAQ($id)
    {
        $faq  = faqSCB::findOrFail($id);
        $faq->delete();
        return redirect('/pages/post/FAQ')->with('success', 'FAQ berhasil dihapus!');
    }

}
