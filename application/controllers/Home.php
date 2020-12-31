<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Visitor_model', 'visitor_model');
        $this->load->model('Home_model', 'home_model');
        $this->load->model('Site_model', 'site_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
    }
    function index()
    {
        //$this->output->enable_profiler(TRUE);
        $site = $this->site_model->get_site_data()->row_array();
        $data['site_name'] = $site['site_name'];
        $data['site_title'] = $site['site_title'];
        $data['site_desc'] = $site['site_description'];
        $data['site_twitter'] = $site['site_twitter'];
        $data['site_image'] = $site['site_logo_big'];
        $data['post_header'] = $this->home_model->get_post_header();
        $data['post_header_2'] = $this->home_model->get_post_header_2();
        $data['post_header_3'] = $this->home_model->get_post_header_3();
        $data['latest_post'] = $this->home_model->get_latest_post();
        $data['popular_post'] = $this->home_model->get_popular_post();
        $home = $this->db->get('tbl_home', 1)->row();
        $data['title_1'] = $home->home_title_1;
        $data['caption_1'] = $home->home_caption_1;
        $data['caption_2'] = $home->home_caption_2;
        $data['caption_3'] = $home->home_caption_3;
        $data['slide_1'] = $home->home_slide_1;
        $data['slide_2'] = $home->home_slide_2;
        $data['testimonial'] = $this->db->get('tbl_testimonial');

        $site_info = $this->db->get('tbl_site', 1)->row();
        $about = $this->db->get('tbl_about', 1)->row();
        $data['about_title'] = $about->about_title;
        $data['about_subtitle'] = $about->about_subtitle;
        $data['about_image'] = $about->about_image;
        $data['about_description'] = $about->about_description;
        $data['about_link'] = $about->about_link;
        $data['logo'] =  $site_info->site_logo_header;
        $data['icon'] = $site_info->site_favicon;

        $this->load->view('home_view', $data);
    }
}
