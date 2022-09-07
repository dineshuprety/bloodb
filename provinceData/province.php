<?php 
/**
 * Array of provinces and their districts
 *
 * @returns array
 *
 */
if( !function_exists( 'get_all_provinces' ) ) {
	function get_all_provinces() {
		$provinces = array(
			'province-one'	=> array(
				'label'		=> 'Province 1',
				'districts'	=> array(
					'biratnagar'		=> 'Biratnagar',
					'birtamod'		=> 'Birtamod'
				)
			),
			'province-two'	=> array(
				'label'		=> 'Province 2',
				'districts'	=> array(
					'kailai'		=> 'Kailali',
					'janakpur'		=> 'Janakpur'
				)
			),
			'province-three'	=> array(
				'label'		=> 'Province 3',
				'districts'	=> array(
					'kathmandu'		=> 'Kathmandu',
					'lalitpur'		=> 'Lalitpur',
					'bhaktapur'		=> 'Bhaktapur'
				)
			),
			'province-four'	=> array(
				'label'		=> 'Province 4',
				'districts'	=> array(
					'pokhara'		=> 'Pokhara'
				)
			),
			'province-five'	=> array(
				'label'		=> 'Province 5',
				'districts'	=> array(
					''		=> ''
				)
			),
			'province-six'	=> array(
				'label'		=> 'Province 6',
				'districts'	=> array(
					''		=> ''
				)
			),
			'province-seven'	=> array(
				'label'		=> 'Province 7',
				'districts'	=> array(
					''		=> ''
				)
			),
		);
		return $provinces;
	}
}
?>