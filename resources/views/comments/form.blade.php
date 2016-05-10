{!! Form::open([
	'url' => WP_SITEURL . '/wp-comments-post.php',
	'id' => 'CommentForm'
]) !!}

	{{--
	 * Comment form required hidden fields. Pass into this
	 * view post id and (if there is) a parent comment
	 * id in order to successfully store a comment.
	--}}
	{!! Form::hidden('comment_post_ID', $id) !!}
	{!! Form::hidden('comment_parent', isset($parent) ? $parent : 0) !!}

	@if(Auth::check())

		{{--
		 * There is logged in user, we do not need any
		 * additional inputs. Display just nicely
		 * notice about currently active user.
		--}}
		<p>Commenting in as {{ Auth::user()->username }}</p>

    @else

    	{{--
		 * User is not logged in. We need to provide necessary inputs
		 * Wordpress needs two inputs author, email. These fields
		 * are required in order to sucessfully save comment.
		--}}
		<div>
	    	{!! Form::label('author', 'Name') !!}
			{!! Form::text('author', null, [
				'required' => 'required'
			]) !!}
	    </div>

	    <div>
	    	{!! Form::label('email', 'Email') !!}
			{!! Form::text('email', null, [
				'required' => 'required'
			]) !!}
	    </div>

	    <div>
	    	{!! Form::label('url', 'Website') !!}
			{!! Form::text('url') !!}
	    </div>

    @endif

	{{--
	 * Comment content textarea and form submit
	 * button are required in all scenarios.
	--}}
	<div>
		{!! Form::label('comment', 'Comment') !!}
		{!! Form::textarea('comment', null, [
			'required' => 'required'
		]) !!}
    </div>

	{!! Form::submit('Post Comment') !!}

{!! Form::close() !!}
