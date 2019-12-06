<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		$this->load->view('admin/index');
	}

	public function image_config($path_name){

                $path ='./'.$path_name.'/';
                $config['upload_path']          = $path;
                $config['allowed_types']        = 'gif|jpg|jpeg|png|mov|mpeg|zip';
                $config['max_size']             = 555550000000;
                $config['max_width']            = 555550000000;
                $config['max_height']           = 555550000000;
                $config['encrypt_name']         = true;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

		}

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function opport()
	{
		$this->load->view('admin/opport');
		$submit = $this->input->post('save');

		if ($submit == 'Add')
		{
			$this->load->model('Opport_Model');
			$title = $this->form_validation->set_rules('title', 'title', 'required');
			$description = $this->form_validation->set_rules('description', 'description', 'required');
			$image = $this->form_validation->set_rules('image', 'image');

			if ($this->form_validation->run() == FALSE) {
				$val_error = validation_errors();

				$this->session->set_flashdata('error', $val_error);
				redirect('admin/opport');
			}
			else{


				$this->image_config('admin_images');

                if(!$this->upload->do_upload('image'))
                {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_msg', $error);
                    redirect('admin/opport'.$ein.'');

                   
                }
                else
                {
                    $data = array(
						'title' => $this->input->post('title'),
						'description' => $this->input->post('description'),
						'image' => $this->input->post('image')
				);

                    $filename = $this->upload->data();
                    $new_name = $filename['file_name'];
                    $data['image'] = $filename['file_name']; //time().$filename['file_name'];
                    $where = 'ein ='.$ein.'';
                    $insert = $this->Opport_Model->opport_insert($data);
                    if(($insert) == FALSE)
                    {

                         $this->session->set_flashdata('error_msg', 'Sorry! Image Not Uploaded Due to Error.');
                        redirect('admin/opport');

                    }
                    else
                    {
                       $this->session->set_flashdata('success', 'Image Uploaded Successfully.');
                        redirect('admin/opport');
                    }
                }
			}
			}
		
	}
 
	public function admins()
	{

		$this->load->view('admin/admins');
		$submit = $this->input->post('save');
		if($submit == 'Add')
		{
		$this->load->model('insert_Model');
		$name = $this->form_validation->set_rules('name', 'name', 'required');
		$email = $this->form_validation->set_rules('email', 'Email', 'required');
		$password = $this->form_validation->set_rules('password', 'Password', 'required');

		
		if ($this->form_validation->run() == FALSE) {

			$val_error = validation_errors();
			
			$this->session->set_flashdata('error', $val_error);
			redirect('admin/admins');
		}
		else{
			$data = array(
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password')
			);
			$insert = $this->insert_Model->form_insert($data);
			if(($insert) == FALSE)
			{
				$this->session->set_flashdata('success', 'Admin Created Successfully');
				redirect('admin/admins','refresh');
			}
			else{
				echo 'Data Not Inserted';
				$this->session->set_flashdata('error', 'Failed to add Admin');
			}
		}
		}
	}
}
