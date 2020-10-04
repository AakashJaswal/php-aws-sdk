<?php
//echo "Hello"." concatenated string\n";
//
//$var = 5;
//echo $var;
//
//foreach (range(1,10) as $value){
//    echo $value."\n";
//}
//
//$ar = [2,3,4,5];
//foreach ($ar as $item){
//    echo $item . "\n";
//}
//
//
//echo "<br>";
//$dict = ["milk"=>2,"egg"=>3];
//foreach ($dict as $el){
//    echo $el;
//}

require 'dep/aws.phar';

//FETCHING FILE FROM S3
//use Aws\S3\S3Client;
//
//
//$s3 = new Aws\S3\S3Client([
//    'version' => 'latest',
//    'region' => 'us-east-2',
//    'http'    => [
//        'verify' => false
//    ]
//]);
//
//
//$result = $s3->listBuckets();
//var_dump($result.key());
//echo "<br><br><br>";
//foreach ($result['Buckets'] as $item){
//    var_dump($item["Name"]);
//    echo "<br><br><br>";
//
//}

//FETCH ALL EXPORTED VALS
//use Aws\CloudFormation\CloudFormationClient;
//
//$client = new Aws\CloudFormation\CloudFormationClient([
//    'version' => 'latest',
//    'region' => 'us-east-1',
//    'http'    => [
//        'verify' => false
//    ]
//    ]);
//
//$result = $client->listExports([
//
//]);
//
//var_dump($result);

//Fetch all cloudfromation info
//use Aws\CloudFormation\CloudFormationClient;
//
//$client = new Aws\CloudFormation\CloudFormationClient([
//    'version' => 'latest',
//    'region' => 'us-east-1',
//    'http'    => [
//        'verify' => false
//    ]
//    ]);
//
//$result = $client->describeStacks([
//    'StackName' => 'crontest',
//]);
//foreach ($result as $item){
//echo var_dump($item)."<br>";
//}
//

use Aws\DynamoDb\DynamoDbClient;
$client = new Aws\DynamoDb\DynamoDbClient([
    'version' => 'latest',
    'region' => 'us-east-1',
    'http'    => [
        'verify' => false
    ]
]);

$result = $client->batchWriteItem([
    'RequestItems' => [
        'test' => [
            [
                'PutRequest' => [
                    'Item' => [
                        'key1' => [
                            'S' => '1',
                        ],
                        'AlbumTitle' => [
                            'S' => 'Somewhat Famous',
                        ],
                        'Artist' => [
                            'S' => 'No One You Know',
                        ],
                        'SongTitle' => [
                            'S' => 'Call Me Today',
                        ],
                    ],
                ],
            ],
            [
                'PutRequest' => [
                    'Item' => [
                        'key1' => [
                            'S' => '2',
                        ],
                        'AlbumTitle' => [
                            'S' => 'Songs About Life',
                        ],
                        'Artist' => [
                            'S' => 'Acme Band',
                        ],
                        'SongTitle' => [
                            'S' => 'Happy Day',
                        ],
                    ],
                ],
            ],
            [
                'PutRequest' => [
                    'Item' => [
                        'key1' => [
                            'S' => '3',
                        ],
                        'AlbumTitle' => [
                            'S' => 'Blue Sky Blues',
                        ],
                        'Artist' => [
                            'S' => 'No One You Know',
                        ],
                        'SongTitle' => [
                            'S' => 'Scared of My Shadow',
                        ],
                    ],
                ],
            ],
        ],
    ],
]);


echo $result["@metadata"]["statusCode"];