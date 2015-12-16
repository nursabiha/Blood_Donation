<!-- /**********************************************************************************************************************
*File Name                       : m_register.php
*Description                     : Function : 
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 9th September 2015
*Version                         : 1.0
*Modification Log                :
*Function List                   : add_register(), check_register(), view_register(), update_register(), get_register(), 
*                                  delete_register()
***********************************************************************************************************************/ -->
<?php

class m_register extends CI_Model {

/**********************************************************************************************************************
*Description                     : Function : to add user detail
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 10th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	function add_register($data)
    {  
        $insrt = $this->db->insert('user_detail',$data);
        return $insrt;
	}

/**********************************************************************************************************************
*Description                     : Function : to check user detail
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 10th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

    function check_register($data)
    {
        $this->db->select('*');
        $this->db->from('user_detail');
        $this->db->where('userIc', $data);
        $query = $this->db->get();

        if($query -> num_rows() > 1)
        {
            return 1;
        }  
        else
        {
            return 0;
        }  
    }

/**********************************************************************************************************************
*Description                     : Function : to view user detail
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 9th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	function view_register()
    {
        $this->db->select('*');
		$this->db->from('user_detail');

		$query=$this->db->get();
		return $query->result();
	}


/**********************************************************************************************************************
*Description                     : Function : to get blood from db
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 8th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	function get_blood()
    {
		$this->db->select('id_blood');
		$this->db->from('blood');
		$query=$this->db->get();
		return $query->result();
	}

	function get_rh()
    {
		$this->db->select('id_rh');
		$this->db->from('user_rh');
		$query=$this->db->get();
		return $query->result();
	}

	function get_gender()
    {
		$this->db->select('id_gender');
		$this->db->from('user_gender');
		$query=$this->db->get();
		return $query->result();
	}

/**********************************************************************************************************************
*Description                     : Function : to update donation detail
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 13th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

    function update_register($id_user, $data)
    {
        $this->db->where('id_user', $id_user);
        $query = $this->db->update('user_detail', $data);
        return $query;
        
    }

    function get_register($id_user)
    {
        $this->db->select('*');
        $this->db->from('user_detail');
        $this->db->where('id_user',$id_user);

        $query=$this->db->get();
        return $query->result();
 }


/**********************************************************************************************************************
*Description                     : Function : to delete donation detail
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 13th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

    function delete_register($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('user_detail');
    }

}

/**********************************************************************************************************************
* End of m_register.php
***********************************************************************************************************************/

?>