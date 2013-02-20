<?php

/**
 * IMDB Wrapper API
 * Wrapper class to retrieve data from IMDB
 * http://jogisilalahi.com/blog/imdb-api-wrapper-class-php
 * @author Jogi Silalahi <silalahi.jogi@gmail.com>
 */

class IMDB
{
	/**
	 * IMDB API URL
	 * @version 2.0
	 */
	private $APIURL = "http://www.imdbapi.com";

	/**
	 * Server response
	 * Handling server response
	 */
	private $response;

	/**
	 * Search
	 * Searching movie information
	 * @param string Movie Title
	 * @param string Movie Year (optional)
	 * @param string Plot of movie (short or full)
	 */
	public function search($title, $year='', $plot='full')
	{
		// Preparing full URL
		$full_url = $this->APIURL . '?t=' . urlencode($title) . '&y=' . $year . '&plot=' . $plot;

		// Fetch JSON and decoding
		$result = json_decode(file_get_contents($full_url));

		// Assigning as this vars
		$vars = get_object_vars($result);
		foreach($vars as $key=>$value)
		{
			$this->{strtolower($key)} = $value;
		}
	}
		

	/**
	 * Exists
	 * Checking if movie information was exists
	 * @return bool
	 */
	public function exists()
	{
		if($this->response == "True")
		{
			$this->response = TRUE;
		}
		else
		{
			$this->response = FALSE;
		}

		return $this->response;
	}
}




?>