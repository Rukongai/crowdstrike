<?php

use CFPropertyList\CFPropertyList;

class Crowdstrike_model extends \Model {

	public function __construct($serial='')
	{
		parent::__construct('id', 'crowdstrike'); //primary key, tablename
		$this->rs['id'] = '';
		$this->rs['serial_number'] = $serial; $this->rt['serial_number'] = 'VARCHAR(255) UNIQUE';
                $this->rs['sensor_id'] = '';
                $this->rs['sensor_version'] = '';
                $this->rs['customer_id'] = '';

                if ($serial) {
                    $this->retrieve_record($serial);
                }

                $this->serial_number = $serial;
	}

	// ------------------------------------------------------------------------

	/**
	 * Process data sent by postflight
	 *
	 * @param string data
	 *
	 **/
         public function process($data)
         {
             $parser = new CFPropertyList();
             $parser->parse($data);
             $plist = $parser->toArray();

             $this->sensor_id = $plist['sensor_id'];
             $this->sensor_version = $plist['sensor_version'];
             $this->customer_id = $plist['customer_id'];
             $this->save();
         }

}
