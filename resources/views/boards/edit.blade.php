@extends('boards.layout')

@section('content')

<a href='{{ route('boards.index') }}'>목록</a>

<form action="{{ route('boards.update', $board -> id) }}" method='post'>
	@csrf
	@method('PUT')
	<table>
		<tr>
			<td>제목</td>
			<td><input type='text' name='subject' id='subject' value='{{ $board -> subject }}' /></td>
		</tr>
		<tr>
			<td>내용</td>
			<td><textarea name='contents' id='contents'>{{ $board->contents }}</textarea></td>
		</tr>
		<tr>
			<td colspan='2'><button type='submit'>저장</button></td>
		</tr>
	</table>
</form>

@endsection
