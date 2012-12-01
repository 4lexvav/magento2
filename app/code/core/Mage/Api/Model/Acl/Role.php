<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Api
 * @copyright   Copyright (c) 2012 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * User acl role
 *
 * @method Mage_Api_Model_Resource_Role _getResource()
 * @method Mage_Api_Model_Resource_Role getResource()
 * @method int getParentId()
 * @method Mage_Api_Model_Acl_Role setParentId(int $value)
 * @method int getTreeLevel()
 * @method Mage_Api_Model_Acl_Role setTreeLevel(int $value)
 * @method int getSortOrder()
 * @method Mage_Api_Model_Acl_Role setSortOrder(int $value)
 * @method string getRoleType()
 * @method Mage_Api_Model_Acl_Role setRoleType(string $value)
 * @method int getUserId()
 * @method Mage_Api_Model_Acl_Role setUserId(int $value)
 * @method string getRoleName()
 * @method Mage_Api_Model_Acl_Role setRoleName(string $value)
 *
 * @category    Mage
 * @package     Mage_Api
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_Api_Model_Acl_Role extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('Mage_Api_Model_Resource_Role');
    }
}
