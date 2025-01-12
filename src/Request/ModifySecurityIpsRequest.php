<?php namespace Aliyun\RDS\Request;

/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

use Aliyun\Core\RpcAcsRequest;

class ModifySecurityIpsRequest extends RpcAcsRequest
{

    private $ownerId;

    private $resourceOwnerAccount;

    private $resourceOwnerId;

    private $clientToken;

    private $dBInstanceId;

    private $securityIps;

    private $ownerAccount;


    public function  __construct()
    {
        parent::__construct("Rds", "2014-08-15", "ModifySecurityIps");
    }


    public function getOwnerId()
    {
        return $this->ownerId;
    }


    public function setOwnerId($ownerId)
    {
        $this->ownerId                    = $ownerId;
        $this->queryParameters["OwnerId"] = $ownerId;
    }


    public function getResourceOwnerAccount()
    {
        return $this->resourceOwnerAccount;
    }


    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->resourceOwnerAccount                    = $resourceOwnerAccount;
        $this->queryParameters["ResourceOwnerAccount"] = $resourceOwnerAccount;
    }


    public function getResourceOwnerId()
    {
        return $this->resourceOwnerId;
    }


    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->resourceOwnerId                    = $resourceOwnerId;
        $this->queryParameters["ResourceOwnerId"] = $resourceOwnerId;
    }


    public function getClientToken()
    {
        return $this->clientToken;
    }


    public function setClientToken($clientToken)
    {
        $this->clientToken                    = $clientToken;
        $this->queryParameters["ClientToken"] = $clientToken;
    }


    public function getDBInstanceId()
    {
        return $this->dBInstanceId;
    }


    public function setDBInstanceId($dBInstanceId)
    {
        $this->dBInstanceId                    = $dBInstanceId;
        $this->queryParameters["DBInstanceId"] = $dBInstanceId;
    }


    public function getSecurityIps()
    {
        return $this->securityIps;
    }


    public function setSecurityIps($securityIps)
    {
        $this->securityIps                    = $securityIps;
        $this->queryParameters["SecurityIps"] = $securityIps;
    }


    public function getOwnerAccount()
    {
        return $this->ownerAccount;
    }


    public function setOwnerAccount($ownerAccount)
    {
        $this->ownerAccount                    = $ownerAccount;
        $this->queryParameters["OwnerAccount"] = $ownerAccount;
    }

  public function setDBInstanceIPArrayName($DBInstanceIPArrayName)
    {
        $this->DBInstanceIPArrayName                      = $DBInstanceIPArrayName;
        $this->queryParameters["DBInstanceIPArrayName"] = $DBInstanceIPArrayName;
    }

}
