<?php

namespace Sahadat\Sfaq\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Sahadat\Sfaq\Models\Category;
use Sahadat\Sfaq\Models\Question;

class QuestionController extends Controller
{
    
    public function create_qus($id){

        $cat = Category::find($id);

        return view('sfaq::admin.create_qus', ['cat' => $cat]);

    }

    public function add($id){

        request()->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        Question::create([
            'question' => request('question'),
            'answer' => request('answer'),
            'category_id' => $id,
        ]);

        return redirect('create_qus/'.$id)->with('success','Question added successfully');

    }

    public function update(Question $id){

        request()->validate([
            'qusEdit' => 'required',
            'ansEdit' => 'required'
        ]);

        $id->update([
            'question' => request('qusEdit'),
            'answer' => request('ansEdit'),
            'category_id' => request('catEdit'),
        ]);

        return redirect('/admin')->with('success', 'Updated successfully');

    }

    public function delete($id){
        Question::destroy($id);
        return redirect('/admin')->with('success', 'Question deleted successfully');
    }

}
