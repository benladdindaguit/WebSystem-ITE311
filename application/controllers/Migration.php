<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration extends CI_Controller
{
    public function index()
    {
        $this->load->library('migration');

        if ($this->migration->latest() === FALSE)
        {
            show_error($this->migration->error_string());
        }
        else
        {
            echo "<h2>Migration completed successfully!</h2>";
            echo "<p>All LMS database tables have been created.</p>";
        }
    }
}