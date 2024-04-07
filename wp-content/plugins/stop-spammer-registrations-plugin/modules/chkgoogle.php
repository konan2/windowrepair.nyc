<?php
// Allow List - returns false if not found

if ( !defined( 'ABSPATH' ) ) {
	http_response_code( 404 );
	die();
}

// last updated from https://support.google.com/a/answer/10026322 on 12/22/20
class chkgoogle extends be_module {
	public $searchname = 'Google IP';
	public $searchlist = array(
		array( '107.167.160.0', '107.167.191.255' ),
		array( '107.178.192.0', '107.178.255.255' ),
		array( '107.188.128.0', '107.188.255.255' ),
		array( '108.170.192.0', '108.170.255.255' ),
		array( '108.170.217.144', '108.170.217.159' ),
		array( '108.177.0.0', '108.177.127.255' ),
		array( '108.59.80.0', '108.59.95.255' ),
		array( '108.59.81.128', '108.59.81.255' ),
		array( '108.59.81.32', '108.59.81.63' ),
		array( '108.59.81.64', '108.59.81.127' ),
		array( '108.59.92.224', '108.59.92.255' ),
		array( '108.59.92.32', '108.59.92.63' ),
		array( '108.59.92.64', '108.59.92.95' ),
		array( '108.59.93.128', '108.59.93.191' ),
		array( '108.59.93.42', '108.59.93.42' ),
		array( '108.59.94.216', '108.59.94.223' ),
		array( '108.59.94.224', '108.59.94.239' ),
		array( '108.59.94.24', '108.59.94.31' ),
		array( '12.216.80.0', '12.216.80.255' ),
		array( '12.234.149.240', '12.234.149.247' ),
		array( '130.211.0.0', '130.211.255.255' ),
		array( '142.250.0.0', '142.251.255.255' ),
		array( '146.148.0.0', '146.148.127.255' ),
		array( '162.216.148.0', '162.216.151.255' ),
		array( '162.222.176.0', '162.222.183.255' ),
		array( '172.217.0.0', '172.217.255.255' ),
		array( '172.253.0.0', '172.253.255.255' ),
		array( '173.11.121.160', '173.11.121.167' ),
		array( '173.11.81.224', '173.11.81.231' ),
		array( '173.11.89.144', '173.11.89.151' ),
		array( '173.11.93.24', '173.11.93.31' ),
		array( '173.11.94.120', '173.11.94.127' ),
		array( '173.13.173.96', '173.13.173.103' ),
		array( '173.13.178.48', '173.13.178.55' ),
		array( '173.13.183.40', '173.13.183.47' ),
		array( '173.160.202.80', '173.160.202.87' ),
		array( '173.160.217.88', '173.160.217.95' ),
		array( '173.160.25.104', '173.160.25.111' ),
		array( '173.160.72.184', '173.160.72.191' ),
		array( '173.164.129.208', '173.164.129.215' ),
		array( '173.164.131.248', '173.164.131.255' ),
		array( '173.164.195.16', '173.164.195.23' ),
		array( '173.164.200.88', '173.164.200.95' ),
		array( '173.164.234.32', '173.164.234.39' ),
		array( '173.164.241.136', '173.164.241.143' ),
		array( '173.164.246.144', '173.164.246.151' ),
		array( '173.164.246.88', '173.164.246.95' ),
		array( '173.164.255.232', '173.164.255.239' ),
		array( '173.164.93.160', '173.164.93.175' ),
		array( '173.167.117.160', '173.167.117.167' ),
		array( '173.167.118.152', '173.167.118.159' ),
		array( '173.167.121.0', '173.167.121.7' ),
		array( '173.167.98.232', '173.167.98.239' ),
		array( '173.194.0.0', '173.194.255.255' ),
		array( '173.255.112.0', '173.255.127.255' ),
		array( '173.255.116.224', '173.255.116.255' ),
		array( '173.255.117.0', '173.255.117.31' ),
		array( '173.255.121.192', '173.255.121.255' ),
		array( '173.255.122.0', '173.255.122.63' ),
		array( '173.255.122.192', '173.255.122.255' ),
		array( '173.255.124.136', '173.255.124.143' ),
		array( '173.255.124.224', '173.255.124.231' ),
		array( '173.255.124.248', '173.255.124.255' ),
		array( '173.255.124.56', '173.255.124.63' ),
		array( '173.255.125.32', '173.255.125.63' ),
		array( '173.255.125.64', '173.255.125.71' ),
		array( '173.8.135.128', '173.8.135.135' ),
		array( '173.8.141.56', '173.8.141.63' ),
		array( '173.8.147.240', '173.8.147.247' ),
		array( '173.8.149.56', '173.8.149.63' ),
		array( '192.119.16.0', '192.119.31.255' ),
		array( '192.158.28.0', '192.158.31.255' ),
		array( '192.178.0.0', '192.179.255.255' ),
		array( '192.200.224.0', '192.200.255.255' ),
		array( '199.192.112.0', '199.192.115.255' ),
		array( '199.192.112.232', '199.192.112.239' ),
		array( '199.192.112.240', '199.192.112.255' ),
		array( '199.192.113.160', '199.192.113.175' ),
		array( '199.192.114.128', '199.192.114.191' ),
		array( '199.192.115.16', '199.192.115.31' ),
		array( '199.192.115.32', '199.192.115.63' ),
		array( '199.192.115.64', '199.192.115.79' ),
		array( '199.223.232.0', '199.223.239.255' ),
		array( '199.87.241.32', '199.87.241.63' ),
		array( '2001:4860::', '2001:4860:FFFF:FFFF:FFFF:FFFF:FFFF:FFFF' ),
		array( '207.223.160.0', '207.223.175.255' ),
		array( '209.85.128.0', '209.85.255.255' ),
		array( '216.21.160.0', '216.21.175.255' ),
		array( '216.239.32.0', '216.239.63.255' ),
		array( '216.239.33.0', '216.239.33.255' ),
		array( '216.239.35.0', '216.239.35.255' ),
		array( '216.239.39.0', '216.239.39.255' ),
		array( '216.239.44.0', '216.239.45.255' ),
		array( '216.239.55.0', '216.239.55.255' ),
		array( '216.58.192.0', '216.58.223.255' ),
		array( '23.228.128.0', '23.228.191.255' ),
		array( '23.236.48.0', '23.236.63.255' ),
		array( '23.24.222.80', '23.24.222.87' ),
		array( '23.251.128.0', '23.251.159.255' ),
		array( '23.255.128.0', '23.255.255.255' ),
		array( '2600:1900::', '2600:190F:FFFF:FFFF:FFFF:FFFF:FFFF:FFFF' ),
		array( '2604:CA00::', '2604:CA00:FFFF:FFFF:FFFF:FFFF:FFFF:FFFF' ),
		array( '2605:A600::', '2605:A601:FFFF:FFFF:FFFF:FFFF:FFFF:FFFF' ),
		array( '2607:F8B0::', '2607:F8B0:FFFF:FFFF:FFFF:FFFF:FFFF:FFFF' ),
		array( '2620:0:1000::', '2620:0:10FF:FFFF:FFFF:FFFF:FFFF:FFFF' ),
		array( '2620:15C::', '2620:15C:FFF:FFFF:FFFF:FFFF:FFFF:FFFF' ),
		array( '50.194.143.72', '50.194.143.79' ),
		array( '50.194.57.80', '50.194.57.87' ),
		array( '50.196.138.88', '50.196.138.95' ),
		array( '50.197.155.96', '50.197.155.111' ),
		array( '50.197.177.216', '50.197.177.223' ),
		array( '50.197.191.184', '50.197.191.191' ),
		array( '50.197.81.8', '50.197.81.15' ),
		array( '50.73.181.104', '50.73.181.111' ),
		array( '50.76.47.200', '50.76.47.207' ),
		array( '50.76.54.176', '50.76.54.183' ),
		array( '50.76.58.120', '50.76.58.127' ),
		array( '50.76.60.168', '50.76.60.175' ),
		array( '50.76.60.96', '50.76.60.103' ),
		array( '50.76.61.104', '50.76.61.111' ),
		array( '50.76.61.232', '50.76.61.239' ),
		array( '50.79.213.104', '50.79.213.111' ),
		array( '50.79.34.64', '50.79.34.71' ),
		array( '50.79.39.200', '50.79.39.207' ),
		array( '64.119.136.224', '64.119.136.231' ),
		array( '64.128.207.160', '64.128.207.175' ),
		array( '64.17.244.0', '64.17.244.31' ),
		array( '64.233.160.0', '64.233.191.255' ),
		array( '64.68.80.0', '64.68.87.255' ),
		array( '64.79.134.144', '64.79.134.159' ),
		array( '64.79.152.0', '64.79.153.255' ),
		array( '64.9.224.0', '64.9.255.255' ),
		array( '65.183.12.192', '65.183.12.255' ),
		array( '66.102.0.0', '66.102.15.255' ),
		array( '66.102.14.0', '66.102.14.255' ),
		array( '66.192.134.32', '66.192.134.47' ),
		array( '66.249.64.0', '66.249.95.255' ),
		array( '66.249.86.0', '66.249.87.255' ),
		array( '68.65.49.64', '68.65.49.127' ),
		array( '70.32.128.0', '70.32.159.255' ),
		array( '70.90.161.128', '70.90.161.135' ),
		array( '70.90.163.216', '70.90.163.223' ),
		array( '70.90.219.48', '70.90.219.55' ),
		array( '70.90.219.72', '70.90.219.79' ),
		array( '72.14.192.0', '72.14.255.255' ),
		array( '72.14.224.0', '72.14.231.255' ),
		array( '72.14.241.0', '72.14.241.255' ),
		array( '74.125.0.0', '74.125.255.255' ),
		array( '74.125.116.0', '74.125.119.255' ),
		array( '74.125.120.0', '74.125.123.255' ),
		array( '74.125.56.0', '74.125.63.255' ),
		array( '74.93.1.0', '74.93.1.7' ),
		array( '74.93.15.232', '74.93.15.239' ),
		array( '74.94.170.0', '74.94.170.15' ),
		array( '74.94.180.48', '74.94.180.55' ),
		array( '75.144.253.216', '75.144.253.223' ),
		array( '75.144.27.184', '75.144.27.191' ),
		array( '75.147.134.56', '75.147.134.63' ),
		array( '75.149.40.224', '75.149.40.231' ),
		array( '75.150.0.48', '75.150.0.55' ),
		array( '75.151.90.24', '75.151.90.31' ),
		array( '8.34.208.136', '8.34.208.143' ),
		array( '8.34.217.16', '8.34.217.23' ),
		array( '8.35.195.144', '8.35.195.159' )
	);
}

?>