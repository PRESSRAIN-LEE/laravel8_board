@extends('layouts.layout')

@section('head_tag')
@endsection

@section('content')
<h1>게시판 List</h1>

<div class="row">
    <form class="form-inline" action="{{ url('/board/search') }}" method="GET">
    <div class="col">검색</div>
    <div class="col-6">
      <input type="text" class="form-control" id="searchText" placeholder="검색어" name='searchText' value="{{ request('searchText') }}">
      <button type="submit" class="btn btn-primary">검색</button>
    </div>
    </form>
</div>

<div class="row">
  <div class="col">
    총 {{$boards->count()}}건 {{$boards->currentPage()}} / {{$boards->lastPage()}}페이지
  </div>
</div>
@php
    $boardNum = $boards->total() - ($boards->perPage() * ($boards->currentPage() - 1));
@endphp 
<table class="table table-hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">아이디</th>
        <th scope="col">이름</th>
        <th scope="col">제목</th>
        <th scope="col">파일1</th>
        <th scope="col">파일2</th>
        <th scope="col">조회</th>
        <th scope="col">등록일</th>
      </tr>
    </thead>
    <tbody>
      @foreach ( $boards as $board)
      <tr style='cursor:pointer;'>
        <th scope="row">
          {{-- $board->id --}}
          {{ $boardNum-- }}
        </th>
        <td>{{ $board->member_seq }}</td>
        <td>{{ $board->member_name }}</td>
        <td>
            <a href='javascript:goView({{ $board->id }});'>
              @if($board->depth > 0)
                @for ($i=0; $i<$board->depth; $i++)
                  &nbsp;&nbsp;
                @endfor
                └Re: {{ $board->board_title }}
              @else
                {{ $board->board_title }}
              @endif
            </a>
        </td>
        <td>
          @if ($board->board_file1)
            <a href=''>파일</a>
          @endif
        </td>
        <td>
          @if ($board->board_file2)
            <a href=''>파일</a>
          @endif
        </td>
        <td>{{ $board->board_read }}</td>
        <td>{{ $board->created_at }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {!! $boards->links() !!}

  <a href='{{ url('boards/create') }}' class='btn btn-primary'>글쓰기</a>
@endsection

@section('body_end_tag')
<script>
    function goView(pa){
        var url = "/boards/" + pa + "/viewCnt/";
        $.ajax({
            type: "GET",
            url: url,
            //dataType: "JSON",
            success: function(result) {
                // 성공시 http status code 200
                //console.log(result);
                location.href = "/boards/" + pa + "/show/"
            },
            error: function(xhr, status, error) {
                // 실패시 http status code 200 이 아닌 경우
                console.log(xhr);
            }
        });
    }
</script>
@endsection