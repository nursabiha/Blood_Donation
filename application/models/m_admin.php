<!-- /**********************************************************************************************************************
*File Name                       : m_admin.php
*Description                     : Function : 
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 7th September 2015
*Version                         : 1.0
*Modification Log                :
*Function List                   : add_donation(), check_donation(), view_donation(), update_donation(), get_donation(), 
*                                  delete_donation()
***********************************************************************************************************************/ -->
<?php

class m_admin extends CI_Model {



/**********************************************************************************************************************
*Description                     : Function : to view user detail
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 10th September 2015
*Input Parameter                 :
*Modification Log                : 26th november 2015
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

/**********************************************************************************************************************
*Description                     : Function : to add donation detail
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 9th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	function add_donation($data){
		
		$insrt = $this->db->insert('donation_detail',$data);
		return $insrt;
		// return $this->db->insert('donation_detail', $data);
	}


/**********************************************************************************************************************
*Description                     : Function : to check donation detail
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 10th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	function check_donation($data)
	{
        $this->db->select('*');
        $this->db->from('donation_detail');
        $this->db->where('donationSiri', $data);
        $query = $this->db->get();

        if($query -> num_rows() > 0){

             return 1;
        }  
        else
        {
        	return 0;
        }  
    }

/**********************************************************************************************************************
*Description                     : Function : to view donation
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 8th September 2015
*Input Parameter                 :
*Modification Log                : 11th November 2015
***********************************************************************************************************************/

	function view_donation()
	{
        $this->db->select('dd.*,ud.id_user,hd.id_hosp,hd.hospType');
        $this->db->from('donation_detail dd');
        $this->db->join('user_detail ud','dd.id_user=ud.id_user');
        $this->db->join('hosp_detail hd','dd.id_hosp=hd.id_hosp');
        $this->db->where('dd.id_user');

		$query=$this->db->get();
		return $query->result();
	}

       
/**********************************************************************************************************************
*Description                     : Function : to update donation detail
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 11th September 2015
*Input Parameter                 :
*Modification Log                : 2nd November 2015
***********************************************************************************************************************/

	function update_donation($id_donation, $data)
    {
        $this->db->where('id_donation', $id_donation);
        $query = $this->db->update('donation_detail', $data);
        
        return $query;
    }

    function get_donation($id_donation)
    {
        // $this->db->select('dd.*,ud.id_user,hd.id_hosp,hd.hospType');
        // $this->db->from('donation_detail dd');
        // $this->db->join('user_detail ud','dd.id_user=ud.id_user');
        // $this->db->join('hosp_detail hd','dd.id_hosp=hd.id_hosp');
        // $this->db->where('dd.id_user', $id_donation);

        $this->db->select('*');
        $this->db->from('donation_detail');
        $this->db->where('id_donation', $id_donation);
        // $query = $this->db->get('donation_detail');

        $query=$this->db->get();
        return $query->result();
    }

/**********************************************************************************************************************
*Description                     : Function : to get donation detail
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 23th September 2015
*Input Parameter                 :
*Modification Log                : 2nd November 2015
***********************************************************************************************************************/

    function get_donat($id_donation)
    {
        $this->db->select('dd.*,ud.id_user,hd.*');
        $this->db->from('donation_detail dd');
        $this->db->join('user_detail ud','dd.id_user=ud.id_user');
        $this->db->join('hosp_detail hd','dd.id_hosp=hd.id_hosp');
        $this->db->where('dd.id_user', $id_donation);

        $query = $this->db->get();
        return $query->result();
    }

    function get_user()
    {
        $this->db->select('id_user');
        $this->db->from('user_detail');
        $query=$this->db->get();
        return $query->result();
    }

    function get_hosp()
    {
        $this->db->select('id_hosp');
        $this->db->from('hosp_detail');
        $query = $this->db->get();
        return $query->result();
    }


/**********************************************************************************************************************
*Description                     : Function : to delete donation detail
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 11th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	function delete_donation($id_donation)
    {
        $this->db->where('id_donation', $id_donation);
        $this->db->delete('donation_detail');

    }

    // function get_donation($id_donation)
    // {
    //     $this->db->select('id_donation, donationDate, donationSiri, donationAmount, donationHosp, donationRemark');
    //     $this->db->where('id_donation', $id_donation);
    //     $query = $this->db->get('donation_detail');

    //     return $query->result_array();
    // }  


/**********************************************************************************************************************
* End of m_admin.php
***********************************************************************************************************************/
}
?>