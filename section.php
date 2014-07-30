<?php
/*
	Section: Revolutionslider
	Author: Julian Weiland
	Author URI: http://www.julian-weiland.de
	Description: Section to embed the Revolution Slider Plugin
	Class Name: revolutionslider
	Filter: full-width, slider
*/

class revolutionslider extends PageLinesSection {
// Your Methods will go here.
// Note: the Class Name header and the section class name need to be the same.

	function section_persistent(){
		$url = $this->base_url; // the base url of the section
		$dir = $this->base_dir; // the base directory of the section
		$thumb = $this->screenshot; // the section thumb
		$splash = $this->splash; // the section splash
	}
	
	
	 function section_opts(){
		$opts = array(
			array(
				'key' 	=> 'slidername',
				'type'	=> 'text',
				'title'	=> 'Slidername',
				'label'	=> 'Type the name of the slider to display',
				'help'	=> __('You can find the name of the slider <a href="'.get_bloginfo('url').'/wp-admin/admin.php?page=revslider" target="_blank">here</a>', 'pagelines'), 
		)
);

return $opts;
}
	
 function section_template(){
	?>
		<div class="revolutionslider-wrapper">
			<?php $slidernameex = $this->opt('slidername'); 
			if($slidernameex != ""){
			putRevSlider($slidernameex);
			}
			else
			{
				echo'<div class="pl-content" height:"2" width="100"><h1>Choose a slider in section settings</h1></div>';
				echo'<style>.section-revolutionslider{display:none;}.drag-drop-editing .section-revolutionslider{display:block!important;}</style>';
			};

			?>
            
		</div>
	<?php
}




}
