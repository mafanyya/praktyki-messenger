<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXYhg1x8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXYhg1x8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXYhg1x8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXYhg1x8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXYhg1x8\App_KernelDevDebugContainer([
    'container.build_hash' => 'XYhg1x8',
    'container.build_id' => 'a6af649a',
    'container.build_time' => 1663790169,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXYhg1x8');
