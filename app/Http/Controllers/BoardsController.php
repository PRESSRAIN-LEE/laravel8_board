<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $boards = Board::all();
        // return view('boards.index') -> with('lists', $boards);

        $boards = Board::where('board_state', 'Y')
        -> where('board_title', 'like', '%')
                ->orderby('grp', 'DESC')
                ->orderby('sort', 'ASC')
                ->orderby('depth', 'ASC')
                ->paginate(10);
                //->get();
        return view('boards.index')
        ->with('boards', $boards);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->file('board_file1');

        // 파일 업로드 확인
        //$request->hasFile('board_file1');

        //$validator = Validator::make($data = Input::all(), Board::$rules);
        //if($validator->fails()){
         //   return redirect()->back()->withErrors($validator->errors())->withInput();
        //}

        #$files1 = $request->file('board_file1');
        #$files2 = $request->file('board_file2');
        //return($files->getClientOriginalName());
        //dd(storage_path());

        if($request->hasFile('board_file1')){
            $path1 = $request->file('board_file1')->store('board');     //저장 될 폴더명
            $originalFileName1 = $request->file('board_file1')->getClientOriginalName();
            $saveFileName1 = $request->file('board_file1')->hashName();
        }else{
            $originalFileName1 = "";
            $saveFileName1 = "";
        }
        
        if($request->hasFile('board_file2')){
            $path2 = $request->file('board_file2')->store('board');     //저장 될 폴더명
            $originalFileName2 = $request->file('board_file2')->getClientOriginalName();
            $saveFileName2 = $request->file('board_file2')->hashName();
        }else{
            $originalFileName2 = "";
            $saveFileName2 = "";
        }

        //$path = $request->file('files')->store('D:\work\00.GIT\uploads\attachFiles');
        //$path = $request->file('files')->store(Storage::disk('public'));
        //dd($path1);
        //dd($request->file('files')->getClientOriginalName());
        
        $member_seq = $request->input('member_seq');
        $member_name = $request->input('member_name');
        $board_title = $request->input('board_title');
        $board_content = $request->input('board_content');

        $boardPage = new Board;
        $boardPage -> member_seq = $member_seq;
        $boardPage -> member_name  = $member_name;
        $boardPage -> board_title = $board_title;
        $boardPage -> board_content = $board_content;
        $boardPage -> grp = 0;
        $boardPage -> sort = 0;
        $boardPage -> depth = 0;
        $boardPage -> board_file1 = $saveFileName1;
        $boardPage -> board_file1_ori = $originalFileName1;
        $boardPage -> board_file2 = $saveFileName2;
        $boardPage -> board_file2_ori = $originalFileName2;
        $boardPage -> save();

        $boardPage -> grp = $boardPage -> id;
        $boardPage -> save();
        
        /*
        $board = Board::create([
            //디비 테이블의 필드명 => 입력단에서 넘어옴 입력 필드
            'grp' => $request->input('grp'),
            'sort' => $request->input('sort'),
            'depth' => $request->input('depth'),

            'member_seq' =>$request->input('member_seq'),

            'board_title' => $request->input('board_title'),
            'member_name' =>$request->input('member_name'),
            'board_content' =>$request->input('board_content'),

            'board_file1' => $saveFileName1,
            'board_file1_ori' => $originalFileName1,
            'board_file2' => $saveFileName2,
            'board_file2_ori' => $originalFileName2,
        ]);
        */

        //$result = $request -> all();
        //$data = array(
        //    'result' => $request
        //);
        //return response() -> json($data);

        return redirect() -> route('boards.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $board = Board::where('id', $id) -> first();

        // var_dump($board);

        // return view('boards.show') -> with('board', $board);

        $board = Board::find($id);
        //var_dump($board -> id);
        return view('boards.show')
        ->with('board', $board);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function edit(Board $board)
    {
        $board = Board::where('id', $board -> id) -> first();
        return view('boards.edit') -> with('board', $board);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Board $board)
    {
        $request -> validate([
            'subject' => 'required',
            'contents' => 'required',
        ]);

        $board -> update($request->all());

        return redirect() -> route('boards.show', $board -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function destroy(Board $board)
    {
        $board -> delete();
        return redirect() -> route('boards.index');
    }

    //조횟수 증가
    public function viewCnt(Request $request, $id){
        //return ($id);
        $board = Board::find($id);
        $board->board_read = ($board->board_read + 1);
        $board->save();
    }
}
