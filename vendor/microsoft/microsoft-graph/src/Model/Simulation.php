<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Simulation File
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
* Simulation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Simulation extends Entity
{
    /**
    * Gets the attackTechnique
    * The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue. For more information on the types of social engineering attack techniques, see simulations.
    *
    * @return SimulationAttackTechnique|null The attackTechnique
    */
    public function getAttackTechnique()
    {
        if (array_key_exists("attackTechnique", $this->_propDict)) {
            if (is_a($this->_propDict["attackTechnique"], "\Microsoft\Graph\Model\SimulationAttackTechnique") || is_null($this->_propDict["attackTechnique"])) {
                return $this->_propDict["attackTechnique"];
            } else {
                $this->_propDict["attackTechnique"] = new SimulationAttackTechnique($this->_propDict["attackTechnique"]);
                return $this->_propDict["attackTechnique"];
            }
        }
        return null;
    }

    /**
    * Sets the attackTechnique
    * The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue. For more information on the types of social engineering attack techniques, see simulations.
    *
    * @param SimulationAttackTechnique $val The attackTechnique
    *
    * @return Simulation
    */
    public function setAttackTechnique($val)
    {
        $this->_propDict["attackTechnique"] = $val;
        return $this;
    }

    /**
    * Gets the attackType
    * Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue.
    *
    * @return SimulationAttackType|null The attackType
    */
    public function getAttackType()
    {
        if (array_key_exists("attackType", $this->_propDict)) {
            if (is_a($this->_propDict["attackType"], "\Microsoft\Graph\Model\SimulationAttackType") || is_null($this->_propDict["attackType"])) {
                return $this->_propDict["attackType"];
            } else {
                $this->_propDict["attackType"] = new SimulationAttackType($this->_propDict["attackType"]);
                return $this->_propDict["attackType"];
            }
        }
        return null;
    }

    /**
    * Sets the attackType
    * Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue.
    *
    * @param SimulationAttackType $val The attackType
    *
    * @return Simulation
    */
    public function setAttackType($val)
    {
        $this->_propDict["attackType"] = $val;
        return $this;
    }

    /**
    * Gets the automationId
    * Unique identifier for the attack simulation automation.
    *
    * @return string|null The automationId
    */
    public function getAutomationId()
    {
        if (array_key_exists("automationId", $this->_propDict)) {
            return $this->_propDict["automationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the automationId
    * Unique identifier for the attack simulation automation.
    *
    * @param string $val The automationId
    *
    * @return Simulation
    */
    public function setAutomationId($val)
    {
        $this->_propDict["automationId"] = $val;
        return $this;
    }

    /**
    * Gets the completionDateTime
    * Date and time of completion of the attack simulation and training campaign. Supports $filter and $orderby.
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
    * Date and time of completion of the attack simulation and training campaign. Supports $filter and $orderby.
    *
    * @param \DateTime $val The completionDateTime
    *
    * @return Simulation
    */
    public function setCompletionDateTime($val)
    {
        $this->_propDict["completionDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    * Identity of the user who created the attack simulation and training campaign.
    *
    * @return EmailIdentity|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Microsoft\Graph\Model\EmailIdentity") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new EmailIdentity($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * Identity of the user who created the attack simulation and training campaign.
    *
    * @param EmailIdentity $val The createdBy
    *
    * @return Simulation
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Date and time of creation of the attack simulation and training campaign.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Date and time of creation of the attack simulation and training campaign.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Simulation
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description of the attack simulation and training campaign.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Description of the attack simulation and training campaign.
    *
    * @param string $val The description
    *
    * @return Simulation
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name of the attack simulation and training campaign. Supports $filter and $orderby.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Display name of the attack simulation and training campaign. Supports $filter and $orderby.
    *
    * @param string $val The displayName
    *
    * @return Simulation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the durationInDays
    *
    * @return int|null The durationInDays
    */
    public function getDurationInDays()
    {
        if (array_key_exists("durationInDays", $this->_propDict)) {
            return $this->_propDict["durationInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the durationInDays
    *
    * @param int $val The durationInDays
    *
    * @return Simulation
    */
    public function setDurationInDays($val)
    {
        $this->_propDict["durationInDays"] = intval($val);
        return $this;
    }

    /**
    * Gets the endUserNotificationSetting
    *
    * @return EndUserNotificationSetting|null The endUserNotificationSetting
    */
    public function getEndUserNotificationSetting()
    {
        if (array_key_exists("endUserNotificationSetting", $this->_propDict)) {
            if (is_a($this->_propDict["endUserNotificationSetting"], "\Microsoft\Graph\Model\EndUserNotificationSetting") || is_null($this->_propDict["endUserNotificationSetting"])) {
                return $this->_propDict["endUserNotificationSetting"];
            } else {
                $this->_propDict["endUserNotificationSetting"] = new EndUserNotificationSetting($this->_propDict["endUserNotificationSetting"]);
                return $this->_propDict["endUserNotificationSetting"];
            }
        }
        return null;
    }

    /**
    * Sets the endUserNotificationSetting
    *
    * @param EndUserNotificationSetting $val The endUserNotificationSetting
    *
    * @return Simulation
    */
    public function setEndUserNotificationSetting($val)
    {
        $this->_propDict["endUserNotificationSetting"] = $val;
        return $this;
    }

    /**
    * Gets the excludedAccountTarget
    *
    * @return AccountTargetContent|null The excludedAccountTarget
    */
    public function getExcludedAccountTarget()
    {
        if (array_key_exists("excludedAccountTarget", $this->_propDict)) {
            if (is_a($this->_propDict["excludedAccountTarget"], "\Microsoft\Graph\Model\AccountTargetContent") || is_null($this->_propDict["excludedAccountTarget"])) {
                return $this->_propDict["excludedAccountTarget"];
            } else {
                $this->_propDict["excludedAccountTarget"] = new AccountTargetContent($this->_propDict["excludedAccountTarget"]);
                return $this->_propDict["excludedAccountTarget"];
            }
        }
        return null;
    }

    /**
    * Sets the excludedAccountTarget
    *
    * @param AccountTargetContent $val The excludedAccountTarget
    *
    * @return Simulation
    */
    public function setExcludedAccountTarget($val)
    {
        $this->_propDict["excludedAccountTarget"] = $val;
        return $this;
    }

    /**
    * Gets the includedAccountTarget
    *
    * @return AccountTargetContent|null The includedAccountTarget
    */
    public function getIncludedAccountTarget()
    {
        if (array_key_exists("includedAccountTarget", $this->_propDict)) {
            if (is_a($this->_propDict["includedAccountTarget"], "\Microsoft\Graph\Model\AccountTargetContent") || is_null($this->_propDict["includedAccountTarget"])) {
                return $this->_propDict["includedAccountTarget"];
            } else {
                $this->_propDict["includedAccountTarget"] = new AccountTargetContent($this->_propDict["includedAccountTarget"]);
                return $this->_propDict["includedAccountTarget"];
            }
        }
        return null;
    }

    /**
    * Sets the includedAccountTarget
    *
    * @param AccountTargetContent $val The includedAccountTarget
    *
    * @return Simulation
    */
    public function setIncludedAccountTarget($val)
    {
        $this->_propDict["includedAccountTarget"] = $val;
        return $this;
    }

    /**
    * Gets the isAutomated
    * Flag that represents if the attack simulation and training campaign was created from a simulation automation flow. Supports $filter and $orderby.
    *
    * @return bool|null The isAutomated
    */
    public function getIsAutomated()
    {
        if (array_key_exists("isAutomated", $this->_propDict)) {
            return $this->_propDict["isAutomated"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAutomated
    * Flag that represents if the attack simulation and training campaign was created from a simulation automation flow. Supports $filter and $orderby.
    *
    * @param bool $val The isAutomated
    *
    * @return Simulation
    */
    public function setIsAutomated($val)
    {
        $this->_propDict["isAutomated"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * Identity of the user who most recently modified the attack simulation and training campaign.
    *
    * @return EmailIdentity|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Microsoft\Graph\Model\EmailIdentity") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new EmailIdentity($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    * Identity of the user who most recently modified the attack simulation and training campaign.
    *
    * @param EmailIdentity $val The lastModifiedBy
    *
    * @return Simulation
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Date and time of the most recent modification of the attack simulation and training campaign.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * Date and time of the most recent modification of the attack simulation and training campaign.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return Simulation
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the launchDateTime
    * Date and time of the launch/start of the attack simulation and training campaign. Supports $filter and $orderby.
    *
    * @return \DateTime|null The launchDateTime
    */
    public function getLaunchDateTime()
    {
        if (array_key_exists("launchDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["launchDateTime"], "\DateTime") || is_null($this->_propDict["launchDateTime"])) {
                return $this->_propDict["launchDateTime"];
            } else {
                $this->_propDict["launchDateTime"] = new \DateTime($this->_propDict["launchDateTime"]);
                return $this->_propDict["launchDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the launchDateTime
    * Date and time of the launch/start of the attack simulation and training campaign. Supports $filter and $orderby.
    *
    * @param \DateTime $val The launchDateTime
    *
    * @return Simulation
    */
    public function setLaunchDateTime($val)
    {
        $this->_propDict["launchDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the oAuthConsentAppDetail
    *
    * @return OAuthConsentAppDetail|null The oAuthConsentAppDetail
    */
    public function getOAuthConsentAppDetail()
    {
        if (array_key_exists("oAuthConsentAppDetail", $this->_propDict)) {
            if (is_a($this->_propDict["oAuthConsentAppDetail"], "\Microsoft\Graph\Model\OAuthConsentAppDetail") || is_null($this->_propDict["oAuthConsentAppDetail"])) {
                return $this->_propDict["oAuthConsentAppDetail"];
            } else {
                $this->_propDict["oAuthConsentAppDetail"] = new OAuthConsentAppDetail($this->_propDict["oAuthConsentAppDetail"]);
                return $this->_propDict["oAuthConsentAppDetail"];
            }
        }
        return null;
    }

    /**
    * Sets the oAuthConsentAppDetail
    *
    * @param OAuthConsentAppDetail $val The oAuthConsentAppDetail
    *
    * @return Simulation
    */
    public function setOAuthConsentAppDetail($val)
    {
        $this->_propDict["oAuthConsentAppDetail"] = $val;
        return $this;
    }

    /**
    * Gets the payloadDeliveryPlatform
    * Method of delivery of the phishing payload used in the attack simulation and training campaign. Possible values are: unknown, sms, email, teams, unknownFutureValue.
    *
    * @return PayloadDeliveryPlatform|null The payloadDeliveryPlatform
    */
    public function getPayloadDeliveryPlatform()
    {
        if (array_key_exists("payloadDeliveryPlatform", $this->_propDict)) {
            if (is_a($this->_propDict["payloadDeliveryPlatform"], "\Microsoft\Graph\Model\PayloadDeliveryPlatform") || is_null($this->_propDict["payloadDeliveryPlatform"])) {
                return $this->_propDict["payloadDeliveryPlatform"];
            } else {
                $this->_propDict["payloadDeliveryPlatform"] = new PayloadDeliveryPlatform($this->_propDict["payloadDeliveryPlatform"]);
                return $this->_propDict["payloadDeliveryPlatform"];
            }
        }
        return null;
    }

    /**
    * Sets the payloadDeliveryPlatform
    * Method of delivery of the phishing payload used in the attack simulation and training campaign. Possible values are: unknown, sms, email, teams, unknownFutureValue.
    *
    * @param PayloadDeliveryPlatform $val The payloadDeliveryPlatform
    *
    * @return Simulation
    */
    public function setPayloadDeliveryPlatform($val)
    {
        $this->_propDict["payloadDeliveryPlatform"] = $val;
        return $this;
    }

    /**
    * Gets the report
    * Report of the attack simulation and training campaign.
    *
    * @return SimulationReport|null The report
    */
    public function getReport()
    {
        if (array_key_exists("report", $this->_propDict)) {
            if (is_a($this->_propDict["report"], "\Microsoft\Graph\Model\SimulationReport") || is_null($this->_propDict["report"])) {
                return $this->_propDict["report"];
            } else {
                $this->_propDict["report"] = new SimulationReport($this->_propDict["report"]);
                return $this->_propDict["report"];
            }
        }
        return null;
    }

    /**
    * Sets the report
    * Report of the attack simulation and training campaign.
    *
    * @param SimulationReport $val The report
    *
    * @return Simulation
    */
    public function setReport($val)
    {
        $this->_propDict["report"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Status of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, draft, running, scheduled, succeeded, failed, cancelled, excluded, unknownFutureValue.
    *
    * @return SimulationStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\SimulationStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new SimulationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Status of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, draft, running, scheduled, succeeded, failed, cancelled, excluded, unknownFutureValue.
    *
    * @param SimulationStatus $val The status
    *
    * @return Simulation
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the trainingSetting
    *
    * @return TrainingSetting|null The trainingSetting
    */
    public function getTrainingSetting()
    {
        if (array_key_exists("trainingSetting", $this->_propDict)) {
            if (is_a($this->_propDict["trainingSetting"], "\Microsoft\Graph\Model\TrainingSetting") || is_null($this->_propDict["trainingSetting"])) {
                return $this->_propDict["trainingSetting"];
            } else {
                $this->_propDict["trainingSetting"] = new TrainingSetting($this->_propDict["trainingSetting"]);
                return $this->_propDict["trainingSetting"];
            }
        }
        return null;
    }

    /**
    * Sets the trainingSetting
    *
    * @param TrainingSetting $val The trainingSetting
    *
    * @return Simulation
    */
    public function setTrainingSetting($val)
    {
        $this->_propDict["trainingSetting"] = $val;
        return $this;
    }

    /**
    * Gets the landingPage
    *
    * @return LandingPage|null The landingPage
    */
    public function getLandingPage()
    {
        if (array_key_exists("landingPage", $this->_propDict)) {
            if (is_a($this->_propDict["landingPage"], "\Microsoft\Graph\Model\LandingPage") || is_null($this->_propDict["landingPage"])) {
                return $this->_propDict["landingPage"];
            } else {
                $this->_propDict["landingPage"] = new LandingPage($this->_propDict["landingPage"]);
                return $this->_propDict["landingPage"];
            }
        }
        return null;
    }

    /**
    * Sets the landingPage
    *
    * @param LandingPage $val The landingPage
    *
    * @return Simulation
    */
    public function setLandingPage($val)
    {
        $this->_propDict["landingPage"] = $val;
        return $this;
    }

    /**
    * Gets the loginPage
    *
    * @return LoginPage|null The loginPage
    */
    public function getLoginPage()
    {
        if (array_key_exists("loginPage", $this->_propDict)) {
            if (is_a($this->_propDict["loginPage"], "\Microsoft\Graph\Model\LoginPage") || is_null($this->_propDict["loginPage"])) {
                return $this->_propDict["loginPage"];
            } else {
                $this->_propDict["loginPage"] = new LoginPage($this->_propDict["loginPage"]);
                return $this->_propDict["loginPage"];
            }
        }
        return null;
    }

    /**
    * Sets the loginPage
    *
    * @param LoginPage $val The loginPage
    *
    * @return Simulation
    */
    public function setLoginPage($val)
    {
        $this->_propDict["loginPage"] = $val;
        return $this;
    }

    /**
    * Gets the payload
    *
    * @return Payload|null The payload
    */
    public function getPayload()
    {
        if (array_key_exists("payload", $this->_propDict)) {
            if (is_a($this->_propDict["payload"], "\Microsoft\Graph\Model\Payload") || is_null($this->_propDict["payload"])) {
                return $this->_propDict["payload"];
            } else {
                $this->_propDict["payload"] = new Payload($this->_propDict["payload"]);
                return $this->_propDict["payload"];
            }
        }
        return null;
    }

    /**
    * Sets the payload
    *
    * @param Payload $val The payload
    *
    * @return Simulation
    */
    public function setPayload($val)
    {
        $this->_propDict["payload"] = $val;
        return $this;
    }

}
