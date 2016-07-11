$(document).ready(function() {
  $('#body-article').summernote(

  {

	  height: 350,                 
	  minHeight: null,             
	  maxHeight: null,             
	  focus: true,

	  toolbar: [
	  		['style',['style']],
	  		['style', ['bold', 'italic', 'underline', 'clear']],
		    ['font', ['strikethrough', 'superscript', 'subscript']],
		    ['fontsize', ['fontsize']],
		    ['color', ['color']],
		    ['para', ['ul', 'ol', 'paragraph']],
		    ['height', ['height']],
		    ['picture', ['picture']],
		    ['video',['video']],
		    ['link', ['link']],
		    ['table',['table']],
		    ['hr',['hr']],
		    ['fullscreen',['fullscreen']],
		    ['codeview',['codeview']],
		    ['undo',['undo']],
		    ['redo',['redo']],

	  ]

  }

  


  );
});
