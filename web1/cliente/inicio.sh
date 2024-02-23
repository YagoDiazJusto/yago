#! /bin/bash

$IP=(getent hosts dnsserver | cut -d " " -f1)

echo "nameserver $IP" > /etc/resolv.conf

tail -f /dev/null