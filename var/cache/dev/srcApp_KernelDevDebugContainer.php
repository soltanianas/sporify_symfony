<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerK5rbXU4\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerK5rbXU4/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerK5rbXU4.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerK5rbXU4\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerK5rbXU4\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'K5rbXU4',
    'container.build_id' => '64968a02',
    'container.build_time' => 1619534305,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerK5rbXU4');