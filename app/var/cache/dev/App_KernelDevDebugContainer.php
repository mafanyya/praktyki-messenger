<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZAlzR72\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZAlzR72/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZAlzR72.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZAlzR72\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZAlzR72\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZAlzR72',
    'container.build_id' => 'c5272dd4',
    'container.build_time' => 1663922228,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZAlzR72');
