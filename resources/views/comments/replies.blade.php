@if ( ! $comments->isEmpty())
	<ul>
		@foreach($comments as $comment)
			<li id="comment-{{ $comment->id }}">

				{{--
				 * Here is a body of the comment. This is your
				 * play field, build everything as you like.
				--}}
				<div>
					<p>
						<span>{{ $comment->author }}</span> • <time>{{ $comment->created_at }}</time>
					</p>
					<p>{{ $comment->content }}</p>
				</div>

				{{--
				 * Each comment can be replied. To make this
				 * possible we need to display form where
				 * parent id is set to this comment.
				--}}
				<div>
					@include('comments.form', [
						'id' => $id,
						'parent' => $comment->id
					])
				</div>

				{{--
				 * If comment has replies, recursively include
				 * this view. This allows for the infinity
				 * nested comments and they replies.
				--}}
				@if ($comment->hasReplies())
					@include('comments.replies', [
						'id' => $id,
						'comments' => $comment->replies()
					])
				@endif

			</li>
		@endforeach
	</ul>
@endif
