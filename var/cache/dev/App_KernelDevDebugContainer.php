<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZU3tmSx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZU3tmSx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZU3tmSx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZU3tmSx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZU3tmSx\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZU3tmSx',
    'container.build_id' => '8744f671',
    'container.build_time' => 1685782206,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZU3tmSx');