<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

namespace Google\Cloud\Sql\Tests\Unit\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Cloud\Sql\V1\BackupRun;
use Google\Cloud\Sql\V1\BackupRunsListResponse;
use Google\Cloud\Sql\V1\Client\SqlBackupRunsServiceClient;
use Google\Cloud\Sql\V1\Operation;
use Google\Cloud\Sql\V1\SqlBackupRunsDeleteRequest;
use Google\Cloud\Sql\V1\SqlBackupRunsGetRequest;
use Google\Cloud\Sql\V1\SqlBackupRunsInsertRequest;
use Google\Cloud\Sql\V1\SqlBackupRunsListRequest;
use Google\Rpc\Code;
use stdClass;

/**
 * @group sql
 *
 * @group gapic
 */
class SqlBackupRunsServiceClientTest extends GeneratedTest
{
    /** @return TransportInterface */
    private function createTransport($deserialize = null)
    {
        return new MockTransport($deserialize);
    }

    /** @return CredentialsWrapper */
    private function createCredentials()
    {
        return $this->getMockBuilder(CredentialsWrapper::class)->disableOriginalConstructor()->getMock();
    }

    /** @return SqlBackupRunsServiceClient */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];
        return new SqlBackupRunsServiceClient($options);
    }

    /** @test */
    public function deleteTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $kind = 'kind3292052';
        $targetLink = 'targetLink-2084812312';
        $user = 'user3599307';
        $name = 'name3373707';
        $targetId = 'targetId-815576439';
        $selfLink = 'selfLink-1691268851';
        $targetProject = 'targetProject392184427';
        $expectedResponse = new Operation();
        $expectedResponse->setKind($kind);
        $expectedResponse->setTargetLink($targetLink);
        $expectedResponse->setUser($user);
        $expectedResponse->setName($name);
        $expectedResponse->setTargetId($targetId);
        $expectedResponse->setSelfLink($selfLink);
        $expectedResponse->setTargetProject($targetProject);
        $transport->addResponse($expectedResponse);
        $request = new SqlBackupRunsDeleteRequest();
        $response = $gapicClient->delete($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.sql.v1.SqlBackupRunsService/Delete', $actualFuncCall);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        $request = new SqlBackupRunsDeleteRequest();
        try {
            $gapicClient->delete($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $kind = 'kind3292052';
        $id2 = 3227150;
        $description = 'description-1724546052';
        $instance2 = 'instance2902024968';
        $selfLink = 'selfLink-1691268851';
        $location = 'location1901043637';
        $expectedResponse = new BackupRun();
        $expectedResponse->setKind($kind);
        $expectedResponse->setId($id2);
        $expectedResponse->setDescription($description);
        $expectedResponse->setInstance($instance2);
        $expectedResponse->setSelfLink($selfLink);
        $expectedResponse->setLocation($location);
        $transport->addResponse($expectedResponse);
        $request = new SqlBackupRunsGetRequest();
        $response = $gapicClient->get($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.sql.v1.SqlBackupRunsService/Get', $actualFuncCall);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        $request = new SqlBackupRunsGetRequest();
        try {
            $gapicClient->get($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function insertTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $kind = 'kind3292052';
        $targetLink = 'targetLink-2084812312';
        $user = 'user3599307';
        $name = 'name3373707';
        $targetId = 'targetId-815576439';
        $selfLink = 'selfLink-1691268851';
        $targetProject = 'targetProject392184427';
        $expectedResponse = new Operation();
        $expectedResponse->setKind($kind);
        $expectedResponse->setTargetLink($targetLink);
        $expectedResponse->setUser($user);
        $expectedResponse->setName($name);
        $expectedResponse->setTargetId($targetId);
        $expectedResponse->setSelfLink($selfLink);
        $expectedResponse->setTargetProject($targetProject);
        $transport->addResponse($expectedResponse);
        $request = new SqlBackupRunsInsertRequest();
        $response = $gapicClient->insert($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.sql.v1.SqlBackupRunsService/Insert', $actualFuncCall);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function insertExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        $request = new SqlBackupRunsInsertRequest();
        try {
            $gapicClient->insert($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $kind = 'kind3292052';
        $nextPageToken = 'nextPageToken-1530815211';
        $expectedResponse = new BackupRunsListResponse();
        $expectedResponse->setKind($kind);
        $expectedResponse->setNextPageToken($nextPageToken);
        $transport->addResponse($expectedResponse);
        $request = new SqlBackupRunsListRequest();
        $response = $gapicClient->list($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.sql.v1.SqlBackupRunsService/List', $actualFuncCall);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        $request = new SqlBackupRunsListRequest();
        try {
            $gapicClient->list($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteAsyncTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $kind = 'kind3292052';
        $targetLink = 'targetLink-2084812312';
        $user = 'user3599307';
        $name = 'name3373707';
        $targetId = 'targetId-815576439';
        $selfLink = 'selfLink-1691268851';
        $targetProject = 'targetProject392184427';
        $expectedResponse = new Operation();
        $expectedResponse->setKind($kind);
        $expectedResponse->setTargetLink($targetLink);
        $expectedResponse->setUser($user);
        $expectedResponse->setName($name);
        $expectedResponse->setTargetId($targetId);
        $expectedResponse->setSelfLink($selfLink);
        $expectedResponse->setTargetProject($targetProject);
        $transport->addResponse($expectedResponse);
        $request = new SqlBackupRunsDeleteRequest();
        $response = $gapicClient->deleteAsync($request)->wait();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.sql.v1.SqlBackupRunsService/Delete', $actualFuncCall);
        $this->assertTrue($transport->isExhausted());
    }
}
