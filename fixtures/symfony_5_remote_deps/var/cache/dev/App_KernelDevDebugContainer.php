<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAmCHZM2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAmCHZM2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAmCHZM2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAmCHZM2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAmCHZM2\App_KernelDevDebugContainer([
    'container.build_hash' => 'AmCHZM2',
    'container.build_id' => '716e62ca',
    'container.build_time' => 1707941654,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAmCHZM2');
