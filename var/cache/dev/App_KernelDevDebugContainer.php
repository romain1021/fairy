<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVehADlx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVehADlx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVehADlx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVehADlx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVehADlx\App_KernelDevDebugContainer([
    'container.build_hash' => 'VehADlx',
    'container.build_id' => '7259b356',
    'container.build_time' => 1747909475,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVehADlx');
