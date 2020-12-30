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
        $data['caption_1'] = $home->home_caption_1;
        $data['caption_2'] = $home->home_caption_2;
        $data['caption_3'] = $home->home_caption_3;
        $data['title_1'] = $home->home_title_1;
        $data['title_2'] = $home->home_title_2;
        $data['title_3'] = $home->home_title_3;
        $data['title_4'] = $home->home_title_4;
        $data['bg_header'] = $home->home_bg_heading;
        $data['bg_testimoni'] = $home->home_bg_testimonial;
        $data['testimonial'] = $this->db->get('tbl_testimonial');

        $site_info = $this->db->get('tbl_site', 1)->row();
        $about = $this->db->get('tbl_about', 1)->row();
        $data['about_img'] = $about->about_image;
        $data['about_img2'] = $about->about_image2;
        $data['about_desc'] = $about->about_description;
        $data['about_desc2'] = $about->about_description2;
        $data['about_desc3'] = $about->about_description3;
        $data['logo'] =  $site_info->site_logo_header;
        $data['icon'] = $site_info->site_favicon;

        $this->load->view('home_view', $data);
    }
}
