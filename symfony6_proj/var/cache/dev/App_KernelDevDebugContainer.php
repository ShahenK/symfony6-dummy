<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMWvUFx7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMWvUFx7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMWvUFx7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMWvUFx7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMWvUFx7\App_KernelDevDebugContainer([
    'container.build_hash' => 'MWvUFx7',
    'container.build_id' => '635d2684',
    'container.build_time' => 1686124364,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMWvUFx7');
