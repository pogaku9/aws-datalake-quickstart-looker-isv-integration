<?php

include_once "../root/defaults.php";
include_once "../root/AwsFactory.php";


try {
    $aws = new AwsFactory();
    $client = $aws->getEC2Client();
    $result = $client->describeInstances([
            'Filters' => [
            [
                'Name' => 'tag:Name',
                'Values' => ['datalake-looker-instance-'._ACCOUNT_ID.'-'._STACK_UID],
            ]
        ]
    ]);

    $lookerID = $result["Reservations"][0]["Instances"][0]["InstanceId"];

    print '<div class="alert alert-info">You may need this Info: <br>Looker Instance Id : <b>'.$lookerID.'</b> <br/><br/>
    <a href="https://'._LOOKER_INSTANCE_ENDPOINT.'" class="btn btn-success btn-lg" target="_blank"><span class="glyphicon glyphicon-thumbs-up"></span> Got it !</a>
    </div>';
}  catch (Exception $ex) {
    print '<p class="text-danger">
    Failed to get Looker Instance Details<br><br>Error: ' . $ex->getMessage() . '
    <br><br>
    <a href="https://'._LOOKER_INSTANCE_ENDPOINT.'" class="btn btn-warning btn-lg" target="_blank">Take me to Looker Instance</a>
</p>';

}


?>
