<?php

namespace App\Http\Controllers;

use App\Dictionary;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DictionaryController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Returns a list of Dictionary
     *
     * @return void
     */
    public function index()
    {
        $Dictionarys = Dictionary::all();
        return $this->successResponse($Dictionarys);
    }
    /**
     * Creates an instance of Dictionary
     *
     * @return void
     */
    public function store(Request $request)
    {
        $rules =[
            'dictionaryType' => 'required|max:50',
            'meaning' => 'required|max:1000',
            'isEnabled' => 'required|integer|between:0,1',
        ];
        $this->validate($request,$rules);

        $dictionary = Dictionary::create($request->all());

        return $this->successResponse($dictionary,Response::HTTP_CREATED);
    }
    /**
     * Returns an specific Dictionary
     *
     * @return void
     */
    public function show($dictionary)
    {
        $dictionary = Dictionary::findOrFail($dictionary);

        return $this->successResponse($dictionary);
    }
    /**
     * Updates an specific Dictionary
     *
     * @return void
     */
    public function update(Request $request,$dictionary)
    {
        $rules =[
            'dictionaryType' => 'max:50',
            'meaning' => 'max:1000',
            'isEnabled' => 'integer|between:0,1',
        ];
        $this->validate($request,$rules);

        $dictionary = Dictionary::findOrFail($dictionary);

        $dictionary->fill($request->all());

        if($dictionary->isClean()){
            return $this->errorResponse('At least one value must change',Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $dictionary->save();

        return $this->successResponse($dictionary);
    }
    /**
     * Returns an specific Dictionary
     *
     * @return void
     */
    public function destroy($dictionary)
    {
        $dictionary = Dictionary::findOrFail($dictionary);

        $dictionary->delete();

        return $this->successResponse($dictionary);
    }
}
