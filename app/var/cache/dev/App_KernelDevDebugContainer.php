<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerItxukSp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerItxukSp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerItxukSp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerItxukSp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerItxukSp\App_KernelDevDebugContainer([
    'container.build_hash' => 'ItxukSp',
    'container.build_id' => 'ad3d179e',
    'container.build_time' => 1663860665,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerItxukSp');
