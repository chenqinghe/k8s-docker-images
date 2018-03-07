<?php

$arch = 'amd64';

$apiserverVersion = 'v1.9.3';
$cmVersion = 'v1.9.3';
$schedulerVersion = 'v1.9.3';
$proxyVersion = 'v1.9.3';
$etcdVersion = '3.1.10';
$pauseVersion = '3.0';
$sidecarVersion = '1.14.7';
$kubednsVersion = '1.14.7';
$dnsmasqnannyVersion = '1.14.7';


$images = [
    'k8s.gcr.io/kube-apiserver-${ARCH}' => $apiserverVersion,
    'k8s.gcr.io/kube-controller-manager-${ARCH}' => $cmVersion,
    'k8s.gcr.io/kube-scheduler-${ARCH}' => $schedulerVersion,
    'k8s.gcr.io/kube-proxy-${ARCH}' => $proxyVersion,
    'k8s.gcr.io/etcd-${ARCH}' => $etcdVersion,
    'k8s.gcr.io/pause-${ARCH}' => $pauseVersion,
    'k8s.gcr.io/k8s-dns-sidecar-${ARCH}' => $sidecarVersion,
    'k8s.gcr.io/k8s-dns-kube-dns-${ARCH}' => $kubednsVersion,
    'k8s.gcr.io/k8s-dns-dnsmasq-nanny-${ARCH}' => $dnsmasqnannyVersion,
];


foreach ($images as $name => $version) {
    $image = sprintf("%s:%s", str_replace('${ARCH}', $arch, $name), $version);
    $dir = sprintf('%s-%s', str_replace(['${ARCH}', 'k8s.gcr.io/'], [$arch, ''], $name), $version);
    mkdir($dir);
    $content = "FROM $image\nMAINTAINER qinghe<chenqh721@foxmail.com>\n";
    file_put_contents($dir . '/Dockerfile', $content);
}