<?php
include_once APPPATH.'libraries/util/TableBuilder.php';

class ClienteTableBuilder extends TableBuilder{

   function __construct(){
      parent::__construct('mod_poll_cliente');
   }

   function get_fields(){
      return $fields = array(
               'nomecli' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 100
               ),
               'enderecocli' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 50
               ),
               'bairrocli' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 150
               ),
               'cidadeEstadocli' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 150
               ),
               'cepcli' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 150
               ),
               'emailcli' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 150
               ),
               'cnpjcli' => array(
                  'type' => 'VARCHAR',
                  'constraint' => 18
               )
            );
   }

   // aqui, get_data não faz sentido, pois as opções sobre 
   // as quais o usuário vai votar devem ser cadastradas
}