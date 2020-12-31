<?php

class Setting_model extends CI_Model
{

	function get_home_data()
	{
		$query = $this->db->get('tbl_home', 1);
		return $query;
	}

	function update_information($home_id, $caption1, $caption2, $caption3, $title1, $slide_1, $slide_2, $slide_3)
	{
		$this->db->set('home_title_1', $title1);
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->set('home_slide_1', $slide_1);
		$this->db->set('home_slide_2', $slide_2);
		$this->db->set('home_slide_3', $slide_3);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_1($home_id, $caption1, $caption2, $caption3, $title1, $slide_1)
	{
		$this->db->set('home_title_1', $title1);
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->set('home_slide_1', $slide_1);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_2($home_id, $caption1, $caption2, $caption3, $title1, $slide_2)
	{
		$this->db->set('home_title_1', $title1);
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->set('home_slide_2', $slide_2);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_3($home_id, $caption1, $caption2, $caption3, $title1, $slide_3)
	{
		$this->db->set('home_title_1', $title1);
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->set('home_slide_3', $slide_3);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_noimg($home_id, $caption1, $caption2, $caption3, $title1)
	{
		$this->db->set('home_title_1', $title1);
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	// about information

	function get_about_data()
	{
		$query = $this->db->get('tbl_about', 1);
		return $query;
	}

	function update_information_about($about_id, $title, $subtitle, $image, $description, $link)
	{
		$this->db->set('about_title', $title);
		$this->db->set('about_subtitle', $subtitle);
		$this->db->set('about_image', $image);
		$this->db->set('about_description', $description);
		$this->db->set('about_link', $link);
		$this->db->where('about_id', $about_id);
		$this->db->update('tbl_about');
	}

	function update_information_about_noimg($about_id, $title, $subtitle, $description, $link)
	{
		$this->db->set('about_title', $title);
		$this->db->set('about_subtitle', $subtitle);
		$this->db->set('about_description', $description);
		$this->db->set('about_link', $link);
		$this->db->where('about_id', $about_id);
		$this->db->update('tbl_about');
	}
}
