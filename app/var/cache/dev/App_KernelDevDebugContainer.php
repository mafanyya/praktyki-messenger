<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXIMuhQE\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXIMuhQE/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXIMuhQE.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXIMuhQE\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXIMuhQE\App_KernelDevDebugContainer([
    'container.build_hash' => 'XIMuhQE',
    'container.build_id' => '22388d5b',
    'container.build_time' => 1655593312,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXIMuhQE');
