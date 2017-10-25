# [quickstart-datalake-cloudwick-ISV-integration](https://console.aws.amazon.com/cloudformation/home?region=us-west-2#/stacks/new?stackName=CWDLQS-Looker-Intg-00&templateURL=https://s3-us-west-2.amazonaws.com/aws-datalake-looker-integration/templates/datalake-master.template)
## Data Lake Foundation on the AWS Cloud with Looker, Apache Zeppelin, Amazon RDS, and Other AWS Services


## *This version installs [LOOKER](https://aws.amazon.com/marketplace/seller-profile?id=f2b415a2-1013-4f3f-ba68-ad1895504098), please check costs associated before proceeding*


This Quick Start deploys a data lake foundation that integrates various AWS Cloud services and components to help you migrate data to the AWS Cloud, and store, monitor, and analyze the data.

The deployment uses Amazon Simple Storage Service (Amazon S3) as a core service to store the data, and deploys Apache Zeppelin and Kibana for analyzing and visualizing the data. It also integrates with Amazon Relational Database Service (Amazon RDS), AWS Data Pipeline, Amazon Redshift, Amazon Elasticsearch Service (Amazon ES), Amazon Kinesis Firehose, and AWS CloudTrail.

The AWS CloudFormation templates included with the Quick Start automate the following:

- Deploying the data lake foundation into a new VPC
- Deploying the data lake foundation into an existing VPC

You can also use the AWS CloudFormation templates as a starting point for your own implementation.

![Quick Start architecture for data lake foundation on AWS](/images/aws-dl-qs-arch.jpg)

For architectural details, best practices, step-by-step instructions, and customization options, see the [deployment guide](https://s3.amazonaws.com/quickstart-reference/datalake/cloudwick/latest/doc/data-lake-foundation-wth-zeppelin-and-amazon-rds-on-the-aws-cloud.pdf).

To post feedback, submit feature ideas, or report bugs, use the **Issues** section of this GitHub repo.
If you'd like to submit code for this Quick Start, please review the [AWS Quick Start Contributor's Kit](https://aws-quickstart.github.io/).
