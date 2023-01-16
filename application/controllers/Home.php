<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data['content'] = $this->load->view('home', NULL, true);
		$this->load->view('master_page', $data);
	}

	public function second()
	{
		$data['content'] = $this->load->view('second', NULL, true);
		$this->load->view('master_page', $data);
	}

	public function third()
	{
		$data['content'] = $this->load->view('third', NULL, true);
		$this->load->view('master_page', $data);
	}

	public function forth()
	{
		$data['content'] = $this->load->view('forth', NULL, true);
		$this->load->view('master_page', $data);
	}

	public function fifth()
	{
		$data['content'] = $this->load->view('fifth', NULL, true);
		$this->load->view('master_page', $data);
	}

	public function sixth()
	{
		$data['content'] = $this->load->view('sixth', NULL, true);
		$this->load->view('master_page', $data);
	}

	public function seventh($type)
	{
		$data['content'] = $this->load->view('seven-'.$type, NULL, true);
		$this->load->view('master_page', $data);
	}

	public function eighth($type)
	{
		$data['content'] = $this->load->view('eight'.$type, NULL, true);
		$this->load->view('master_page', $data);
	}

	public function ninth($type)
	{
		$data['content'] = $this->load->view('ninth'.$type, NULL, true);
		$this->load->view('master_page', $data);
	}

	public function you_are()
	{
		$data['content'] = $this->load->view('you-are', NULL, true);
		$this->load->view('master_page', $data);
	}

	public function conclusion($type)
	{
		$data['content'] = $this->load->view('conclusion-'.$type, NULL, true);
		$this->load->view('master_page', $data);
	}

	public function real()
	{
		$data['content'] = $this->load->view('real', NULL, true);
		$this->load->view('master_page', $data);
	}

	public function qr_red()
	{
		$data['content'] = $this->load->view('qr-red', NULL, true);
		$this->load->view('master_page', $data);
	}
}
