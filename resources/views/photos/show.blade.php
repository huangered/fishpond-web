@extends('layouts.app')
@section('content')
<div class="ui container" style="padding-top: 5em;">
	<div class="ui large images" style="background-color: #022028;">
		<a href="{{$photo->path}}" class="ui small image">
			<img src="{{ url($photo->path) }}">
		</a>
	</div>
	<div class="ui centered grid">
		<div class="four wide column">
			<h3>author</h3>
			{{ $photo->user()->get()[0]->name}}

		</div>
		<div class="four wide column">
			<h3>comment</h3>
			<div id="comment">
				<div v-for="comment in comments">
					<p>@{{ comment.id }}  @{{ comment.message }}</p>
				</div>
				<div id="newComment">
					<input type="text" v-model="newComment"/>
					<button v-on:click="publish">Publish</button>
				</div>
			</div>
		</div>
		<div class="four wide column">
			<h3>detail</h3>
			<p>{{ $photo->good }}</p>
		</div>
	</div>
	<a class="ui primary button" href="/photo/create">Delete</a>

	<script>
		$.ajaxSetup({
			headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
		});

		var data1={
			newComment:"",
			comments:[]
		};

		$.getJSON("/api/v1/photo/{{$photo->id}}/comment",function(data){
			data1.comments = data;
			console.log(data1);

		});

		var vue = new Vue({
			el: '#comment',
			data: data1,
			methods: {
				publish: function () {
					$.post("/api/v1/photo/{{$photo->id}}/comment",
							{'message': this.newComment,
							 'user_id':{{$photo->user()->get()[0]->id}}}).done(function (data) {
						data1.newComment="";
						$.getJSON("/api/v1/photo/{{$photo->id}}/comment",function(data){
							data1.comments = data;
							console.log(data1);

						});
					});

				}
			}
		})
	</script>
</div>
@endsection