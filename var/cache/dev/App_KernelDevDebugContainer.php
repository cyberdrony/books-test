<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEH0uuUt\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEH0uuUt/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEH0uuUt.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEH0uuUt\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEH0uuUt\App_KernelDevDebugContainer([
    'container.build_hash' => 'EH0uuUt',
    'container.build_id' => '6ad9bd0f',
    'container.build_time' => 1649364884,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEH0uuUt');