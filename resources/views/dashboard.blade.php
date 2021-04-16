<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    See whats new!
                </div>


                <head>
	<meta charset="UTF-8">
	<title>Comment and reply system in PHP</title>


</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 post">
			<h2>Leave comments for your friends!</h2>
			
		</div>

	
		<div class="col-md-6 col-md-offset-3 comments-section">
		
			<form class="clearfix" action="index.php" method="post" id="comment_form">
	
				<textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
				<button class="btn btn-primary btn-sm pull-right" id="submit_comment">Submit comment</button>
			</form>

		
			<h2><span id="comments_count">0</span> Comment(s)</h2>
			<hr>
		
			<div id="comments-wrapper">
			
						
							
						</div>
					</div>
			</div>
	
		</div>

	</div>
</div>

</body>
</html>

            </div>
        </div>
    </div>
</x-app-layout>
