<!-- /**********************************************************************************************************************
*File Name                       : m_admin.php
*Description                     : Function : 
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 26th November 2015
*Version                         : 1.0
*Modification Log                :
*Function List                   : 
***********************************************************************************************************************/ -->
<?php

class m_page extends CI_Model {

/**********************************************************************************************************************
*Description                     : To view the front page
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 25th November 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

    function view_frontpage()
    {


    }

/**********************************************************************************************************************
*Description                     : Function : to add note information
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 26th november 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	function add_note($data)
    {
    	// $this->db->set($data);
    	// $insrt = $this->db->insert($this->db->dbprefix . 'note_detail');

    	$insrt = $this->db->insert('note_detail',$data);
		return $insrt;

	}

/**********************************************************************************************************************
*Description                     : Function : to check in the database by row
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 26th November 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	function check_register($data)
    {
        $this->db->select('*');
        $this->db->from('note_detail');
        $this->db->where('id_note', $data);
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
*Description                     : Function : to view note information
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 9th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/


	function view_note()
    {
    	$this->db->select('*');
		$this->db->from('note_detail');

		$query=$this->db->get();
		return $query->result();
	}

/**********************************************************************************************************************
*Description                     : Function : to view dashboard
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 18th September 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

	function view_dashboard()
    {


    }



/**********************************************************************************************************************
*Description                     : Function : to view note information
*Author                          : Nur Sabiha binti Abdul Samad
*Date                            : 11th November 2015
*Input Parameter                 :
*Modification Log                :
***********************************************************************************************************************/

    function view_tab()
    {


    }


/**********************************************************************************************************************
* End of m_page.php
***********************************************************************************************************************/
}
?>