<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKJPw2oA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKJPw2oA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKJPw2oA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKJPw2oA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKJPw2oA\App_KernelDevDebugContainer([
    'container.build_hash' => 'KJPw2oA',
    'container.build_id' => 'cf24932e',
    'container.build_time' => 1695825396,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKJPw2oA');
