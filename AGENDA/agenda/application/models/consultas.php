<?php
       class Consultas extends CI_Model
    {
        

         //Llamada de registros de la tabla contacto
        public function getcontacto()
        {
          return $this->db->query("SELECT * FROM contacto")->result(); 
        }
     

        //Llamada de registros de la tabla tipo_telefono
        function fetch_tipo_telefono()
        {
            $this->db->order_by('TIPO', 'ASC');
            $query = $this->db->get('tipo_telefono');
            return $query->result();
        }   
        
            
      
	


      function contacto_save($contacto){
          $this->db->insert("contacto",$contacto);
          return $this->db->insert_id();
      }

    }

?>