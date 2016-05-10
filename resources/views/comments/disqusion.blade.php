<div>
	@include('comments.form', ['id' => $id])

	@include('comments.replies', [
		'id' => $id,
		'comments' => $comments
	])
</div>