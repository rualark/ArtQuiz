<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<table>
<tr><td><div contenteditable>I'm editable</div></td><td><div contenteditable>I'm also editable</div></td></tr>
<tr><td>I'm not editable</td></tr>
</table>
<section id="1">
 
    <p contenteditable="true">
        Some text here
    </p>
 
</section>
<script>
$('p[contenteditable=true]').live('blur',function(){
	$.ajax({
		type:'POST',
		url:'edit_item.php',
		data:{
			content: $(this).text(),
			id:      $(this).parent().attr('id')
		},
		success:function(msg){
			if(!msg){
				//console.error('update failure');
				alert('update failure');
			} else {
				alert('update success');
}
		}
	});
		
});
</script>
