<?php

class m_user extends CI_Model {


	

/**********************************************************************************************************************
*Description                     : Function : to login user detail
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 17th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	function login($userN, $pass)
    {
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('userName', $userN);
        $this->db->where('password',$pass);
        $this->db->limit(1);

        $this->session->set_userdata(array(

            'usernameStud' => $userN));
        
        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            $result = $query->result();

            foreach ($result as $key) {

                $this->session->set_userdata(
                    array(
                            
                        'id_user' => $key->id_user));
            }
            
            return true;
        }
        else
        {
            return false;
        }
    }

}


	?>