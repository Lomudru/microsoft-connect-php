<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftCustomTrainingSetting File
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
* MicrosoftCustomTrainingSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftCustomTrainingSetting extends TrainingSetting
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.microsoftCustomTrainingSetting");
    }


    /**
    * Gets the completionDateTime
    *
    * @return \DateTime|null The completionDateTime
    */
    public function getCompletionDateTime()
    {
        if (array_key_exists("completionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completionDateTime"], "\DateTime") || is_null($this->_propDict["completionDateTime"])) {
                return $this->_propDict["completionDateTime"];
            } else {
                $this->_propDict["completionDateTime"] = new \DateTime($this->_propDict["completionDateTime"]);
                return $this->_propDict["completionDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the completionDateTime
    *
    * @param \DateTime $val The value to assign to the completionDateTime
    *
    * @return MicrosoftCustomTrainingSetting The MicrosoftCustomTrainingSetting
    */
    public function setCompletionDateTime($val)
    {
        $this->_propDict["completionDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the trainingAssignmentMappings
    *
    * @return MicrosoftTrainingAssignmentMapping|null The trainingAssignmentMappings
    */
    public function getTrainingAssignmentMappings()
    {
        if (array_key_exists("trainingAssignmentMappings", $this->_propDict)) {
            if (is_a($this->_propDict["trainingAssignmentMappings"], "\Microsoft\Graph\Model\MicrosoftTrainingAssignmentMapping") || is_null($this->_propDict["trainingAssignmentMappings"])) {
                return $this->_propDict["trainingAssignmentMappings"];
            } else {
                $this->_propDict["trainingAssignmentMappings"] = new MicrosoftTrainingAssignmentMapping($this->_propDict["trainingAssignmentMappings"]);
                return $this->_propDict["trainingAssignmentMappings"];
            }
        }
        return null;
    }

    /**
    * Sets the trainingAssignmentMappings
    *
    * @param MicrosoftTrainingAssignmentMapping $val The value to assign to the trainingAssignmentMappings
    *
    * @return MicrosoftCustomTrainingSetting The MicrosoftCustomTrainingSetting
    */
    public function setTrainingAssignmentMappings($val)
    {
        $this->_propDict["trainingAssignmentMappings"] = $val;
         return $this;
    }

    /**
    * Gets the trainingCompletionDuration
    *
    * @return TrainingCompletionDuration|null The trainingCompletionDuration
    */
    public function getTrainingCompletionDuration()
    {
        if (array_key_exists("trainingCompletionDuration", $this->_propDict)) {
            if (is_a($this->_propDict["trainingCompletionDuration"], "\Microsoft\Graph\Model\TrainingCompletionDuration") || is_null($this->_propDict["trainingCompletionDuration"])) {
                return $this->_propDict["trainingCompletionDuration"];
            } else {
                $this->_propDict["trainingCompletionDuration"] = new TrainingCompletionDuration($this->_propDict["trainingCompletionDuration"]);
                return $this->_propDict["trainingCompletionDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the trainingCompletionDuration
    *
    * @param TrainingCompletionDuration $val The value to assign to the trainingCompletionDuration
    *
    * @return MicrosoftCustomTrainingSetting The MicrosoftCustomTrainingSetting
    */
    public function setTrainingCompletionDuration($val)
    {
        $this->_propDict["trainingCompletionDuration"] = $val;
         return $this;
    }
}
