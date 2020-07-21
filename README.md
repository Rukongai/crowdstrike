# CrowdStrike Falcon Module for Munkireport

This module gives info on the CrowdStrike Falcon sensor for a given machine. The data comes from the `/Library/CS/falconctl stats` command.
![CrowdStrike Listing](https://raw.githubusercontent.com/dcoobs/crowdstrike/master/images/CrowdStrikeListing.png)

Included are widgets for sensor versions:
![Sensor Versions Widget](https://raw.githubusercontent.com/dcoobs/crowdstrike/master/images/sensorversion_widget.PNG)

Table Schema
------
* sensor_id - VARCHAR(255) - Unique host ID of the client's sensor
* sensor_version - VARCHAR(255) - Version of the client's sensor
* customer_id - VARCHAR(255) - The customer ID checksum (CCID) for the sensor's instance
