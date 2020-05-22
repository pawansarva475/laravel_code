@extends('layouts.admin')



@section('content')

<h3>Posts</h3>

<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Photo</th>
			<th>Owner</th>
			<th>Category</th>
			<th>Title</th>
			<th>Body</th>
			<th>Created</th>
			<th>Updated</th>
		</tr>
	</thead>

	<tbody>
		@if($posts)
			@foreach($posts as $post)
		<tr>
			<td>{{$post->id}}</td>
			<td><img  height="50" src="/images/{{$post->photo ? $post->photo->file : 'http://placehold.it/400*400'}}" alt=""></td>
			<td><a href="{{route('admin.posts.edit',$post->id)}}">{{$post->user->name}}</a></td>
			<td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
			<td>{{$post->title}}</td>
			<td>{{str_limit($post->body, 30)}}</td>
			<td>{{$post->created_at->diffForhumans()}}</td>
			<td>{{$post->updated_at->diffForhumans()}}</td>
		</tr>
			@endforeach
		@endif
		
	</tbody>
	
</table>

@stop