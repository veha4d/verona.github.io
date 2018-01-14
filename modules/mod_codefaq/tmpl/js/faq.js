jQuery(document).ready(function(){
//PARAMS
	var codeicons = jQuery('.codeparams').attr('data-icons');
	var codecoloreven = jQuery('.codeparams').attr('data-even');
	var codecolorhover = jQuery('.codeparams').attr('data-color');
	var codebordercolor = jQuery('.codeparams').attr('data-border');
//ICON COLOR
	if(codeicons == 'dark') {
		jQuery('.code-question').addClass('codedark');
		} else {
			jQuery('.code-question').addClass('codelight');
			};
//DOWN	
	jQuery('.code-question').toggle(function(){
		jQuery(this).next().slideDown('fast');
		
		if(codeicons == 'dark') {
		jQuery(this).addClass('code-active').addClass('codedarkdell').css({'box-shadow' : codebordercolor + ' 0 0 4px 0 inset' , 'border-color' : codebordercolor});
	} else {
		jQuery(this).addClass('codelightdell').css({'box-shadow' : codebordercolor + ' 0 0 4px 0 inset' , 'border-color' : codebordercolor});
		};
	},
//UP
		function(){
		jQuery(this).next().slideUp('fast');
		jQuery(this).removeClass('codedarkdell').removeClass('codelightdell').css({'box-shadow': '', 'border-color': ''});
		});
//EVEN	
	jQuery('.code-question:even').css('backgroundColor', codecoloreven);
// HOVER
	jQuery('.code-question').hover(function(){
		jQuery(this).css({'backgroundColor' : codecolorhover});
		},
		function(){
			jQuery(this).css('backgroundColor', '');
			jQuery('.code-question:even').css('backgroundColor', codecoloreven);
			}
		);
// IMAGES
	if(jQuery('.code-answer img').length > 0){
		jQuery('img').load(function(){
		jQuery('.code-answer img').each(function(){
			var img = jQuery(this);
			var parwidth = img.closest('.code-answer').prev().width();
			jQuery(this).css('max-width', parwidth);
			
			});
	});
}
})
