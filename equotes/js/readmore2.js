$(function(){ /* to make sure the script runs after page load */
	$('.readmore').each(function(event){ /* select all divs with the readmore class */
		var max_length = 501; /* set the max content length before a read more link will be added */
		if($(this).html().length > max_length){ /* check for content length */
			var short_content 	= $(this).html().substr(0,max_length); /* split the content in two parts */
			var long_content	= $(this).html().substr(max_length);
			$(this).html(short_content+
						 '<a href="#" class="read_more">...<br/>Read More</a>'+
						 '<span class="more_text" style="display:none;">'+long_content+'</span>'); /* Alter the html to allow the read more functionality */
			$(this).find('a.read_more').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it */
				event.preventDefault(); /* prevent the a from changing the url */
				$(this).hide(); /* hide the read more button */
				$(this).parents('.readmore').find('.more_text').show(); /* show the .more_text span */
			});
		}
	});
});
