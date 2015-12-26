<?php
class Learn_Installbug_Model_Installer_Db_Mysql4 extends Mage_Install_Model_Installer_Db_Mysql4
{
    /*
    Error : Database server does not support the InnoDB storage engine. 
    public function supportEngine() {
        $variables  = $this->_getConnection()->fetchPairs('SHOW VARIABLES');
        return (!isset($variables['have_innodb']) || $variables['have_innodb'] != 'YES') ? false : true;
    }
    */
    
    public function supportEngine() {
        $variables  = $this->_getConnection()->fetchPairs('SHOW ENGINES');
        return (isset($variables['InnoDB']) && $variables['InnoDB'] != 'NO');
    }
}
