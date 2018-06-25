<?php

get_instance()->load->iface('CrudModelInterface'); // interface file name

class User extends CI_Model implements CrudModelInterface {
	...
}

 ?>
