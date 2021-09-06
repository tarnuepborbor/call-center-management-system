<script>
	function print_this(el){

		var page = document.body.innerHTML;
		var printEl = document.getElementById(el).innerHTML;
		document.body.innerHTML = printEl;
		window.print();
		document.body.innerHTML = page;
	}
</script>