<?php

	/**
	* ShareGen
	* NoScript support
	*/

	
	/*
	* controller 
	*/
	function genshared($list = 'all', $view = '') {

		$buttons = gensharedlinks($list);

		if ($view == '')
			$view = 'views/horbuttons.phtml';

				
		include $view;

	}



	/*
	*  return social links
	*/

	function gensharedlinks($list = 'all', $currlink = '') {

		
		if ($currlink == '')
			$currlink = $_SERVER['PHP_SELF'];

		
		$slinks =  array(

			'twitter' => 'https://twitter.com/intent/tweet?original_referer'.$currlink.'&amp;text=Мобильность&amp;tw_p=tweetbutton&amp;url='.$currlink.'&amp;via="><i class="fa fa-twitter"',
			'facebook' => 'http://www.facebook.com/plugins/like.php?href=http://wordpress.my/2014/09/blue-steel/'.$currlink,
			'google' => 'https://plus.google.com/share?url='.$currlink,
			'linkedin' => 'http://www.linkedin.com/shareArticle?mini=true&amp;url='.$currlink,
		
		);

		
		if ($list == 'all')
			return $slinks;
		elseif (is_array($list)) {
			foreach ($list as $item) {
				if (in_array($item, $slinks))
					$result = $share[$item];	
			}
		}

		return $result;

	
}