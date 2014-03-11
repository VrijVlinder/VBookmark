<?php if (!defined('APPLICATION')) exit();


// Define the plugin:


$PluginInfo['VBookmark'] = array(
   'Name'=>'VBookmark',
   'Description' => "This plugin adds custom bookmarking icon sprites. Just change the name for the sprite you want to use in the vbookmark.css file.",
   'Version' => '1.0',
   'MobileFriendly'=>TRUE,
   'Author' => "VrijVlinder",
   'AuthorEmail' => 'contact@vrijvlinder.com',
   'AuthorUrl' => "http://www.vrijvlinder.com"
);

class VBookmark_Plugin extends Gdn_Plugin {

  public function __construct() {
      
   }

  
  

	
   public function Setup() {
		
   }


public function Base_Render_Before($Sender) {
$Sender->AddCssFile('plugins/VBookmark/design/vbookmark.css');
}


           















     public function OnDisable() {
      return TRUE;
   }

}


	
        	   
