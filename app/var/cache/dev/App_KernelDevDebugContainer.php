<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8cjQKIV\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8cjQKIV/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8cjQKIV.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8cjQKIV\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8cjQKIV\App_KernelDevDebugContainer([
    'container.build_hash' => '8cjQKIV',
    'container.build_id' => '49cb03ad',
    'container.build_time' => 1670163043,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8cjQKIV');
