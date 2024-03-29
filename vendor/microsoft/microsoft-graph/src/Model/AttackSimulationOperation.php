<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttackSimulationOperation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* AttackSimulationOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttackSimulationOperation extends LongRunningOperation
{
    /**
    * Gets the percentageCompleted
    *
    * @return int|null The percentageCompleted
    */
    public function getPercentageCompleted()
    {
        if (array_key_exists("percentageCompleted", $this->_propDict)) {
            return $this->_propDict["percentageCompleted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the percentageCompleted
    *
    * @param int $val The percentageCompleted
    *
    * @return AttackSimulationOperation
    */
    public function setPercentageCompleted($val)
    {
        $this->_propDict["percentageCompleted"] = intval($val);
        return $this;
    }

    /**
    * Gets the tenantId
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    *
    * @param string $val The tenantId
    *
    * @return AttackSimulationOperation
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the type
    *
    * @return AttackSimulationOperationType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Microsoft\Graph\Model\AttackSimulationOperationType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new AttackSimulationOperationType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    *
    * @param AttackSimulationOperationType $val The type
    *
    * @return AttackSimulationOperation
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }

}
